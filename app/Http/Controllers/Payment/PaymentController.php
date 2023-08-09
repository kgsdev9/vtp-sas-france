<?php

namespace App\Http\Controllers\Payment;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentController extends Controller
{


    public function processTransaction($slug) {

        $requst = Product::where('slug', $slug)->first();
       return view('home.payment');

    }




}
