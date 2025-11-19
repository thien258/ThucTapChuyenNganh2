<?php

namespace App\Http\Controllers\admin;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
        $products=Product::orderBy('id','desc')->get();
        view()->share('products',$products);
    }
    public function index(){
        $products=Product::all();
        return view('admin.product.product-list',compact('products'));
    }
}
