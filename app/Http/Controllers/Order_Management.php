<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Order_Management extends Controller
{
    public function index() {
        return view('order');
    }
}
