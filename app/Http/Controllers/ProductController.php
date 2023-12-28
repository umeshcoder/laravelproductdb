<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash; 


class ProductController extends Controller
{
    public function index()
    {
        $products = product::all();
        return view('products.index',compact('products'));

    }
    public function create()
    {
        return view('products.create');

    }
    public function store(Request $request)
    {
        

        
        $products = new product;
       
        $products->name = $request->name;
        $products->description = $request->description;
        $products->save();
        return redirect('/index');

    }
    public function register()
    {
        return view('products.register');
    }
    public function registerPost(Request $request)
    {
        $user=new user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return back()->with('sucess','Register Sucessfully');
    }

    public function login()
    {
        return view('products.login');
    }

    public function loginpost(Request $request)
    {
        $credentials=[
            'email'=>$request->email,
            'password'=>$request->password,];
        if(Auth::attempt($credentials))
        {
            return redirect('/home')->with('sucess','login sucessfully');
        }
        return back()->with('error','Error email or password');
    }

    public function home()
    {
        return view('home');
    }
}
