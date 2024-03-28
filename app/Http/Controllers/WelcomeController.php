<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        return view('index');
    }

    public function signup(){
        return view('signup');
    }

    public function process_signup(Request $request){
        return view('index',['data'=>$request]);
    }
}
