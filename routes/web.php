<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NextPage;


Route::get('/{page?}',[NextPage::class,'index']);

