<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Latestproduct;
use App\Models\Product;
use App\Models\TopSale;
use App\Models\TopSeller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public static function getProductData()
    {
        $product = Product::all();
        $product_cart = Product::paginate(5);
        $data_product = Product::paginate(3);
        $data_category = Category::paginate(3); 
        $data_latestproduct = Latestproduct::all();
        $latestproduct = Latestproduct::paginate(3);
        $category = Category::all();
        $topseller = TopSeller::paginate(3);
        return compact('product','data_category','data_latestproduct','latestproduct','data_product','product_cart','category','topseller');
    }


    public function index($page = "index"){
       

        $data = self::getProductData();  
        switch ($page) {
            case 'login':
                return view('auth.login');  
            case 'forgot-password':
                return view('auth.forgot-password');  
            case 'register':
                return view('auth.register');
            case 'profile':         
                return $this->showProfile();    
            case 'products':
                        $product = Product::orderBy('created_at','DESC')->get();
                    return view('products.index')->with('product',$product);
            case 'profile_admin':
                    return view('layouts.profile_admin');   
            default:
            
                break;
        }
        return view($page,$data);     
    }
    
    public function product(Product $product){
        $product_cart = Product::paginate(5);
        $data_category = Category::paginate(3); 
        $data_latestproduct=Latestproduct::all();
        return view('single-product',compact('product','data_category','data_latestproduct','product_cart'));
    }

    public function latestproducts(Latestproduct $latestproducts){
        $product_cart = Product::paginate(5);
        $data_category = Category::paginate(3); 
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
        return view('product-category',compact('category_product','product','data_category','category'));
    }
    public function logoproduct($categoryproducts){
        $category = Category::paginate(3);
        $category_product = Category::all();
        $data_category = Category::where('type_idlogo',$categoryproducts)->first(); 
        $product = Product::where('type_logo',$data_category->type_id)->get();
        return view('logo-product',compact('product','data_category','category','category_product'));
    }

    public function topselersproducts(TopSeller $topselersproducts){
        $product_cart = Product::paginate(5);
        $data_category = Category::paginate(3); 
        $data_topselersproducts = TopSeller::all();
        $data_latestproduct = Latestproduct::all();
        return view('topsellers-product',compact('topselersproducts','data_category','data_topselersproducts','product_cart','data_latestproduct'));
    }


    protected function showProfile(){
        $user = Auth::user();
        return view('profile.edit',compact('user'));
    }
   

    
    public function searchproduct(Request $req) {
        $data_category = Category::paginate(3); 
        $product_timkiem = Product::where('product_name', 'like', '%' . $req->key. '%')
                          ->orWhere('product_price',$req->key)
                          ->get();
        return view('search-product', compact('product_timkiem','data_category'));
    }
}
