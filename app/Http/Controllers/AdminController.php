<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newsletter;

class AdminController extends Controller
{
    public function newsletters()
{
    $newsletters = Newsletter::all();
    return view('admin.newsletters', compact('newsletters'));
}
}
