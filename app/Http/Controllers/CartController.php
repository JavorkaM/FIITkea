<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use mysql_xdevapi\Session;
use App\Models\{User, Product, Color, Material, Category, Order, Cart};
use Illuminate\Support\Facades\Crypt;

class CartController extends Controller {
    //load the cart page with products and prices
    public function cart() {
        $products = [];
        $totalPrice = 0;

        //if the user is logged in, load their cart
        if(Auth::check()){
            $this->middleware('auth');
            $user = auth()->user();
            $carts = Cart::where([
                ["user_id", $user->id],
                ["order_id", null]
            ])->get();

            for($i = 0; $i < count($carts); $i++) {
                array_push($products, Product::find($carts[$i]->product_id));
                $totalPrice += $carts[$i]->price;
            }
            for($i = 0; $i < count($products); $i++) {
                $products[$i]->image = Crypt::decryptString($products[$i]->image);
            }
            return view('cart')
                ->with('products', $products)
                ->with('carts', $carts)
                ->with('totalPrice', $totalPrice);
        }
        //load the cart from session storage if the user is not logged in
        else {
            $data = session()->all();

            for($i = 1; $i < Product::count() + 1; $i++) {
                if(session()->get("product_".$i) != null) {
                    array_push($products, Product::find($i));
                    $totalPrice += Product::find($i)->price * session()->get("product_".$i);
                }
            }
            for($i = 0; $i < count($products); $i++) {
                $products[$i]->image = Crypt::decryptString($products[$i]->image);
            }
            return view('cart')
                ->with('products', $products)
                ->with('totalPrice', $totalPrice);
        }
    }

    //add a product into cart
    public function addToCart(Request $request, $id) {
        //add to personal cart if the user is logged in
        if(Auth::check()){
            $this->middleware('auth');
            $user = auth()->user();
            $row = Cart::where([
                ['user_id', $user->id],
                ['product_id', $id],
                ['order_id', null]
            ])->first();
            //item is already in cart, update its amount
            if($row != null) {
                $request->input("amount") != null ? $row->amount += $request->input("amount") : $row->amount += 1;
                $row->price = Product::find($id)->price * $row->amount;
                $row->save();
            }
            //item is not in the cart, create new row
            else {
                $row = new Cart();
                $row->user_id = $user->id;
                $row->product_id = $id;
                $request->input("amount") != null ? $row->amount += $request->input("amount") : $row->amount += 1;
                $row->price = Product::find($id)->price * $row->amount;
                $row->save();
            }
        }
        //add to session storage if the user is not logged in
        else {
            $increase = 1;
            $amount = 0;
            if($request->input("amount") != null)
                $increase = $request->input("amount");
            if($request->session()->has("product_".$id))
                $amount = $request->session()->get("product_".$id);
            $request->session()->put("product_".$id, $amount + $increase);
        }
        return redirect()->back();
    }

    //remove a product from the cart
    public function removeFromCart(Request $request, $id) {
        //remove the product from personal cart for logged user
        if(Auth::check()) {
            $this->middleware('auth');
            $user = auth()->user();
            Cart::where([
                ["user_id", $user->id],
                ["order_id", null],
                ["product_id", $id]
            ])->first()->delete();
        }
        //remove the product from session storage for user that is not logged in
        else {
            $request->session()->forget("product_".$id);
        }
        return redirect()->back();
    }

    //update the amount of a product in the cart
    public function updateCart(Request $request, $id) {
        //update personal cart for logged in user
        if(Auth::check()) {
            $this->middleware('auth');
            $user = auth()->user();

            $cart = Cart::where([
                ["user_id", $user->id],
                ["order_id", null],
                ["product_id", $id]
            ])->first();

            $price = $cart->price / $cart->amount;
            $cart->amount = $request->input("amount");
            $cart->price = $price * $cart->amount;
            $cart->save();
        }
        else {
            $request->session()->put("product_".$id, $request->input("amount"));
        }
        return redirect()->back();
    }

    //get amount of products in cart and display them in navbar
    public static function numberOfItemsInCartAuth() {
        $count = 0;
        $user = auth()->user();

        $carts = Cart::where([
            ["user_id", $user->id],
            ["order_id", null]
        ])->get();

        for($i = 0; $i < count($carts); $i++) {
            $count += $carts[$i]->amount;
        }

        if($count > 99) {
            $count = "99+";
        }

        return $count;
    }

    //get amount of products in cart and display them in navbar
    public static function numberOfItemsInCartGuest() {
        $count = 0;
        $data = session()->all();

        for($i = 1; $i < Product::count() + 1; $i++) {
            if(session()->get("product_".$i) != null) {
                $count += (session()->get("product_".$i));
            }
        }

        if($count > 99) {
            $count = "99+";
        }
        return $count;
    }
}
