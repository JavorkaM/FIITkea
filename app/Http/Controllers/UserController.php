<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use mysql_xdevapi\Session;
use App\Models\{User, Product, Color, Material, Category, Order, Cart};

class UserController extends Controller
{

    public function profile($user)
    {
        $this->middleware('auth');
        $user = User::find($user);

        //return view('profile', compact('user'));

        return view('profile', [
            'user' => $user,
        ]);

    }

    public function login()
    {
        if(Auth::check()){
            $this->middleware('auth');
            $user = auth()->user();
            return view('profile', [
                'user' => $user,
            ]);
        }

        return view('login');
    }

    public function isAdmin(): bool
    {
        if(Auth::check()){
            $this->middleware('auth');
            $user = auth()->user();
            if ($user->admin == 1)
                return true;
        }
        return false;
    }

}
