<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Color;
use App\Models\Material;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Crypt;

class AdminController extends Controller
{      // for every method ckeck if user is signed in and isAdmin();

    public function index()
    {
        if(!(new UserController)->isAdmin()) {
            if(Auth::check())
                return redirect('login');
            else
                return redirect('profile');
        }

        $products = Product::all();
        return view('admin')->with('products',$products  );
    }
    public function admin()
    {
        if(!(new UserController)->isAdmin()) {
            if(Auth::check()){
                return redirect('login');
            }
            else
                return redirect('profile');
        }

        $products = Product::all();
        return view('admin')->with('products',$products  );
    }

    public function createproduct()
    {
        if(!(new UserController)->isAdmin()) {
            if(Auth::check())
                return redirect('login');
            else
                return redirect('profile');
        }
        $materials = Material::all();
        $colors = Color::all();
        $categories = Category::all();
        //dd($request->all());
        return view('createproduct')
            ->with('materials', $materials)
            ->with('colors', $colors)
            ->with('categories', $categories);
    }

    public function store(Request $request)
    {
        if(!(new UserController)->isAdmin()) {
            if(Auth::check())
                return redirect('login');
            else
                return redirect('profile');
        }

        $request->validate([
            'name' => 'required|min:2|max:30',
            'description' => 'required',
            'price' => 'required|min:0|max:9999',
            'color' => 'required',
            'amount' => 'required|min:1',
            'material' => 'required',
            'category' => 'required|min:1',
            'image' => 'required'
        ]);

        $temp = Crypt::encryptString('images\300-300.jpg');
        $product = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'color' => $request->color,
            'amount' => $request->amount,
            'material' => $request->material,
            'category' => $request->category,
            'image' => $temp,
        ]);

        if ($request->hasFile('image')) {
            $image      = $request->file('image');
            $filename    = $image->getClientOriginalName();
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(900, 900);

            $image_resize->stream('png',90);

            $path = '\0'.$product->id.'\1\900x900.png';
            if(Storage::disk('product_images')->put($path,$image_resize)) {
                $imageHash = Crypt::encryptString('images\products' . $path);
                DB::table('products')
                    ->where('id', $product->id)
                    ->update(['image' => $imageHash]);
            }
        }

        return redirect('admin');
    }

    public function destroy(Request $request, int $productid)
    {
        if(!(new UserController)->isAdmin()) {
            if(Auth::check())
                return redirect('login');
            else
                return redirect('profile');
        }
        $product = Product::where('id', $productid)->first();
        $product->delete();
        return redirect('admin');
    }

    public function edit(int $productid)
    {
        if(!(new UserController)->isAdmin()) {
            if(Auth::check())
                return redirect('login');
            else
                return redirect('profile');
        }
        $product = Product::where('id', $productid)->first();
        $product->image = Crypt::decryptString($product->image);
        $materials = Material::all();
        $colors = Color::all();
        $categories = Category::all();
        return view('editproduct',compact('product',$product))
            ->with('materials', $materials)
            ->with('colors', $colors)
            ->with('categories', $categories);
    }

    public function update(Request $request, int $productid)
    {
        if(!(new UserController)->isAdmin()) {
            if(Auth::check())
                return redirect('login');
            else
                return redirect('profile');
        }

        $product = Product::where('id', $productid)->first();
        $request->validate([
            'name' => 'required|min:2|max:30',
            'description',
            'price' => 'required|min:0|max:9999',
            'color' => 'required',
            'amount' => 'required|min:1',
            'material' => 'required',
            'category' => 'required'
        ]);
        if ($request->hasFile('image')) {
            $image      = $request->file('image');
            $filename    = $image->getClientOriginalName();
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(900, 900);

            $image_resize->stream('png',90);

            $path = '\0'.$product->id.'\1\900x900.png'; //old image path
            if(Storage::disk('product_images')->put($path,$image_resize)) {
                $imageHash = Crypt::encryptString('images\products' . $path);
                DB::table('products')
                    ->where('id', $product->id)
                    ->update(['image' => $imageHash]);
            }
        }
        if($request->featured) {
            DB::table('products')
                ->where('id', $product->id)
                ->update(['name' => $request->name,
                    'description' => $request->description,
                    'price' => $request->price,
                    'color' => $request->color,
                    'amount' => $request->amount,
                    'material' => $request->material,
                    'featured' => $request->featured,
                    'category' => $request->category
                ]);
        }else{
            DB::table('products')
                ->where('id', $product->id)
                ->update(['name' => $request->name,
                    'description' => $request->description,
                    'price' => $request->price,
                    'color' => $request->color,
                    'amount' => $request->amount,
                    'material' => $request->material,
                    'category' => $request->category
                ]);
        }

        $request->session()->flash('message', 'Produkt bol úspešne zmenený.');

        return redirect('admin');
    }
}
