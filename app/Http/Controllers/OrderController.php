<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use mysql_xdevapi\Session;
use App\Models\{User, Product, Color, Material, Category, Order, Cart};
use Illuminate\Support\Facades\Crypt;

class OrderController extends Controller
{
    //save the transport info into session storage
    public function saveTransportInfo(Request $request) {
        $request->session()->put("transport", $request->input("transport"));
        return redirect("shipping");
    }

    //save the shipping info into session storage
    public function saveShippingInfo(Request $request)
    {
        $request->session()->put('name', $request->input('name'));
        $request->session()->put('surname', $request->input('surname'));
        $request->session()->put('email', $request->input('email'));
        $request->session()->put('phone', $request->input('phone'));
        $request->session()->put('city', $request->input('city'));
        $request->session()->put('street', $request->input('street'));
        $request->session()->put('zip', $request->input('zip'));

        return redirect('payment');
    }

    //save payment info into session storage
    public function payment(Request $request)
    {
        if($request->input("paymentOption") != null)
            $request->session()->put("payment", $request->input("paymentOption"));
        return view('payment');
    }

    //display the order before confirming it
    public function conclusion() {
        $products = [];
        $totalPrice = 0;

        //display items from personal cart if the user us logged in
        if(Auth::check()) {
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
            return view('conclusion')
                ->with('products', $products)
                ->with('carts', $carts)
                ->with('totalPrice', $totalPrice);

        }
        //display items from session storage if the user is logged in
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
            return view('conclusion')
                ->with('products', $products)
                ->with('totalPrice', $totalPrice);
        }
    }

    //add the order into database
    public function order() {
        $order = new Order();
        $order->firstName = session()->get('name');
        $order->lastName = session()->get('surname');
        $order->phone = session()->get('phone');
        $order->city = session()->get('city');
        $order->zip = session()->get('zip');
        $order->street = session()->get('street');
        session()->get('paymentOption') == 'card' ? $order->paymentMethod = 'Karta' : $order->paymentMethod = 'Dobierka';
        session()->get('transport') == 'courier' ? $order->shippingMethod = 'Kuriér' : $order->shippingMethod = 'Osobný odber';
        $order->status = 'Prijatá';
        $order->save();

        //update cart with the users ID in the database
        if(Auth::check()){
            $this->middleware('auth');
            $user = auth()->user();
            Cart::where([
                ["user_id", $user->id], 
                ["order_id", null]
            ])->update(["order_id" => $order->id]);
            //flush everything in session storage except login token if the user is logged in
            session()->forget(['paymentOption', 'transport', 'name', 'surname', 'email', 'phone', 'city', 'zip', 'street']);
        }
        //create new cart without a user ID for unregistered user
        else {
            for($i = 1; $i < Product::count() + 1; $i++) {
                if(session()->get("product_".$i) != null) {
                    $cart = new Cart();
                    $cart->order_id = $order->id;
                    $cart->product_id = $i;
                    $cart->amount = session()->get('product_'.$i);
                    $cart->price = Product::find($i)->price * session()->get("product_".$i);
                    $cart->save();
                }
            }
            //flush session storage
            session()->flush();
        }
        return redirect('orderconfirm');
    }

    public function shipping(){
        if(Auth::check()) {
            $this->middleware('auth');
            $user = auth()->user();
            return view('shipping')
                ->with('user', $user);
        }
        else{
            return view('shipping')
                ->with('user', null);
        }
    }
}
