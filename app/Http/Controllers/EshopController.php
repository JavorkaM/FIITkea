<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use mysql_xdevapi\Session;
use Illuminate\Support\Facades\Crypt;
use App\Models\{User, Product, Color, Material, Category, Order, Cart};

class EshopController extends Controller
{
    public function featured()
    {

        $products = Product::where('featured', true)->get();
        if($products == null)
            return view('underconstruction');
        else {
            for($i = 0; $i < count($products); $i++) {
                $products[$i]->image = Crypt::decryptString($products[$i]->image);
            }
            return view('index')->with('products', $products);
        }
        return view('index');
    }

    public function product(Request $request)
    {
        $product = Product::where('id', $request->input('id'))->first();
        if($product == null)
            return view('underconstruction');
        else {

            $product->image = Crypt::decryptString($product->image);
            return view('product')->with('product', $product);
        }
    }

    public function eshop(Request $request)
    {
        $min_price = 0;
        if($request->input('min_price') != null && $request->input('min_price') >= 0)
            $min_price = (int)$request->input('min_price');

        $max_price = PHP_INT_MAX;
        if($request->input('max_price') != null && $request->input('max_price') >= 0)
            $max_price = (int)$request->input('max_price');

        $sort = $request->input('sort');
        if($sort == null)
            $sort = 0;

        $color = 0;
        $color_symbol = '>';
        if($request->input('color') != null && $request->input('color') != 0) {
            $color = (int)$request->input('color');
            $color_symbol = '=';
        }

        $material = 0;
        $material_symbol = '>';
        if($request->input('material') != null && $request->input('material') != 0) {
            $material = (int)$request->input('material');
            $material_symbol = '=';
        }

        $search = null;
        if($request->input('search') != null && $request->input('search') != ""){
            $search = $request->input('search');
        }



        if ($sort == 'low_to_high'){
            $products = Product::where('color', $color_symbol, $color)
                ->where('material', $material_symbol, $material)
                ->where('price', '>', $min_price)
                ->where('price', '<', $max_price)
                ->where('name', 'LIKE', "%$search%")
                ->orderBy('price')->paginate(12);
            //dd($min_price, $max_price, $color, $color_symbol, $material, $material_symbol, $products,$sort , "asdasdasd");

        }else if ($sort == 'high_to_low'){
            $products = Product::where('color', $color_symbol, $color)
                ->where('material', $material_symbol, $material)
                ->where('price', '>', $min_price)
                ->where('price', '<', $max_price)
                ->where('name', 'LIKE', "%$search%")
                ->orderBy('price', 'desc')->paginate(12);
            //dd($min_price, $max_price, $color, $color_symbol, $material, $material_symbol, $products,$sort , "asdasd");


        }else {

            $products = Product::where('color', $color_symbol, $color)
                ->where('material', $material_symbol, $material)
                ->where('price', '>', $min_price)
                ->where('price', '<', $max_price)
                ->where('name', 'LIKE', "%$search%")
                ->take(12)->paginate(12);
            //dd($min_price, $max_price, $color, $color_symbol, $material, $material_symbol, $products, $sort ,"asd");
        }
        for($i = 0; $i < count($products); $i++) {
            $products[$i]->image = Crypt::decryptString($products[$i]->image);
        }

        $materials = Material::all();
        $colors = Color::all();
        $categories = Category::all();
        for($i = 0; $i < count($categories); $i++) {
            $categories[$i]->image = Crypt::decryptString($categories[$i]->image);
        }
        //dd($request->all());
        return view('eshop')
            ->with('products', $products)
            ->with('materials', $materials)
            ->with('colors', $colors)
            ->with('categories', $categories)
            ->with('request', $request);
    }

    public function eshop_category(Request $request, $category_id) {
        $min_price = 0;
        if($request->input('min_price') != null && $request->input('min_price') >= 0)
            $min_price = (int)$request->input('min_price');

        $max_price = PHP_INT_MAX;
        if($request->input('max_price') != null && $request->input('max_price') >= 0)
            $max_price = (int)$request->input('max_price');


        $sort = $request->input('sort');


        $color = 0;
        $color_symbol = '>';
        if($request->input('color') != null && $request->input('color') != 0) {
            $color = (int)$request->input('color');
            $color_symbol = '=';
        }

        $material = 0;
        $material_symbol = '>';
        if($request->input('material') != null && $request->input('material') != 0) {
            $material = (int)$request->input('material');
            $material_symbol = '=';
        }

        $search = null;
        if($request->input('search') != null && $request->input('search') != ""){
            $search = $request->input('search');
        }

        if ($sort == 'low_to_high'){
            $products = Product::where('category', $category_id)
                ->where('color', $color_symbol, $color)
                ->where('material', $material_symbol, $material)
                ->where('price', '>', $min_price)
                ->where('price', '<', $max_price)
                ->where('name', 'LIKE', "%$search%")
                ->orderBy('price')->take(12)->paginate(12);

        }else if ($sort == 'high_to_low'){
            $products = Product::where('category', $category_id)
                ->where('color', $color_symbol, $color)
                ->where('material', $material_symbol, $material)
                ->where('price', '>', $min_price)
                ->where('price', '<', $max_price)
                ->where('name', 'LIKE', "%$search%")
                ->orderBy('price', 'desc')->take(12)->paginate(12);

        }else {
            $products = Product::where('category', $category_id)
                ->where('color', $color_symbol, $color)
                ->where('material', $material_symbol, $material)
                ->where('price', '>', $min_price)
                ->where('price', '<', $max_price)
                ->where('name', 'LIKE', "%$search%")
                ->take(12)->paginate(12);
        }
        $materials = Material::all();
        $colors = Color::all();
        $categories = Category::all();
        $category = Category::where('id', $category_id)->first();
        for($i = 0; $i < count($categories); $i++) {
            $categories[$i]->image = Crypt::decryptString($categories[$i]->image);
        }
        for($i = 0; $i < count($products); $i++) {
            $products[$i]->image = Crypt::decryptString($products[$i]->image);
        }
        return view('eshop')
            ->with('category', $category)
            ->with('products', $products)
            ->with('materials', $materials)
            ->with('colors', $colors)
            ->with('categories', $categories)
            ->with('request', $request);
    }
}
