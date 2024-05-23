<?php

namespace App\Http\Controllers;
use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    //

    public function subscribe(Request $request)
{
    $request->validate([
        'email' => 'required|email|unique:newsletters'
    ]);

    $newsletter = new Newsletter;
    $newsletter->email = $request->email;
    $newsletter->save();

    return back()->with('success', 'You have successfully subscribed to our newsletter.');
}
}
