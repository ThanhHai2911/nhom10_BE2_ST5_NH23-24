<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Latestproduct;
use App\Models\Product;
use Illuminate\Http\Request;


class NextPage extends Controller
{
    public function index($page = "index"){
        $data = Product::all();
        $data_category = Category::all(); 
        $data_latestproduct=Latestproduct::all();
        return view($page,['data_products' => $data ],['category'=>$data_category]);
    }
}
