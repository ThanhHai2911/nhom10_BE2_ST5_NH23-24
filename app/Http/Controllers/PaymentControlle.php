<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentControlle extends Controller
{
    public function processPayment(Request $request)
    {
        session()->forget('cart');

        return redirect()->route('home')->with('success', 'Thanh toán thành công!');
    }
}
