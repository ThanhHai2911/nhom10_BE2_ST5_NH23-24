<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class NextPage extends Controller
{
    public function index($page = "index"){
        $data = Product::all();
        return view($page,['data_products' => $data ]);
    }
}
