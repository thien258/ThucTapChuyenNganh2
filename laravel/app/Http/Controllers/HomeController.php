<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
        view()->share('categories', Category::where('status', '1')->get());
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::where("status", '1')->get();
    $products = Product::where('status', 1)
        ->whereHas('category', function ($q) {
            $q->where('status', 1);
        })
        ->get();
        return view('index', compact("categories", "products" ));
    }
    public function logout()
    {
        if (Auth::check()) {
            Auth::logout();
        }
        return redirect('/');
    }
    public function category_product($id)
    {
        $products = Product::where( [
            ['idCategory','=',$id] ,
            ['status','=','1'] 
              ])->get();
        return view('layout.category_product', compact("products","products"));
    }
    public function single_product($id)
    {
         $products = Product::with('comment')
        ->where('id', $id)
        ->where('status', 1)
        ->get();
        return view('layout.single_product', compact('products'));
    }
    
}
