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
        $product_cart = Product::paginate(5);
        $data_product = Product::paginate(3);
        $data_category = Category::paginate(3); 
        $data_latestproduct = Latestproduct::all();
        $latestproduct = Latestproduct::paginate(3);
        $category = Category::all();
        return view($page,compact('product','data_category','data_latestproduct','latestproduct','data_product','product_cart','category'));
    }
    
    public function product(Product $product){
        $product_cart = Product::paginate(5);
        $data_category = Category::all(); 
        $data_latestproduct=Latestproduct::all();
        return view('single-product',compact('product','data_category','data_latestproduct','product_cart','category_product'));
    }

    public function latestproducts(Latestproduct $latestproducts){
        $product_cart = Product::paginate(5);
        $data_category = Category::all(); 
        $data_latestproduct=Latestproduct::all();
        return view('latest-product',compact('latestproducts','data_category','data_latestproduct','product_cart'));
    } 

    public function categoryproducts($categoryproducts){
        $product_cart = Product::paginate(5);
        $category_product = Category::all();
        $category = Category::paginate(3);
        $data_category = Category::where('id',$categoryproducts)->first(); 
        $product = Product::where('product_type',$data_category->id)->get();
        return view('category-product',compact('product','data_category', 'category','product_cart','category_product'));
    }

    public function productcategory($categoryproducts){
        $category = Category::paginate(3);
        $category_product = Category::all();
        $data_category = Category::where('type_id',$categoryproducts)->first(); 
        $product = Product::where('type_name',$data_category->type_id)->get();
        return view('category-product',compact('product','data_category','category','category_product'));
    }
    
}
