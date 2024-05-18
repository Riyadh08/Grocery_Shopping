<?php

namespace App\Http\Controllers;


class OrderController extends Controller
{
	public function process()
	{
        $carts = \Cart::getContent();
        $carts = json_decode(htmlspecialchars($carts, true));
        $cart_total = \Cart::getTotal();
        $cart_total_quantity = \Cart::getTotalQuantity();
        return view('frontend.order.checkout', compact('carts', 'cart_total', 'cart_total_quantity'));
    }
}
