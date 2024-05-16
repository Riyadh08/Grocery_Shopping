<?php

namespace App\Http\Controllers;


class OrderController extends Controller
{
	public function process()
	{
        return view('frontend.order.checkout');
    }
}
