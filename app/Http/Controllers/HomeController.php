<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Latestproduct;
use App\Models\Product;
use App\Models\TopSale;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index($page = "index"){
        $product = Product::all();
        $data_product = Product::paginate(3);
        $data_category = Category::all(); 
        $data_latestproduct = Latestproduct::all();
        $latestproduct = Latestproduct::paginate(3);
        return view($page,compact('product','data_category','data_latestproduct','latestproduct','data_product'));
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
        $category = Category::all();
        $data_category = Category::where('id',$categoryproducts)->first(); 
        $product = Product::where('product_type',$data_category->id)->get();
        return view('category-product',compact('product','data_category', 'category'));
    }
    
}
