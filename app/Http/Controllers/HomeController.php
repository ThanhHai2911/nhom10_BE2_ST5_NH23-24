<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Latestproduct;
use App\Models\Product;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index($page = "index"){
        $product = Product::all();
        $data_category = Category::all(); 
        $data_latestproduct=Latestproduct::all();
        return view($page,compact('product','data_category','data_latestproduct'));
    }
    
    public function product(Product $product){
        $data_category = Category::all(); 
        $data_latestproduct=Latestproduct::all();
        return view('single-product',compact('product','data_category','data_latestproduct'));
    }

    public function latestproducts(Latestproduct $latestproducts){
        $data_category = Category::all(); 
        $data_latestproduct=Latestproduct::all();
        return view('latest-product',compact('latestproducts','data_category','data_latestproduct'));
    } 

    public function categoryproducts($categoryproducts){
        $data_category = Category::where('id',$categoryproducts)->first(); 
        $product = Product::where('product_type',$data_category->id)->get();
        return view('category-product',compact('product','data_category'));
    }
    
}
