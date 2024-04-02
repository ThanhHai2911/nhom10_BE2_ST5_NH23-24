<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NextPage extends Controller
{
    public function index($page = "index"){
        return view($page);
    }
}
