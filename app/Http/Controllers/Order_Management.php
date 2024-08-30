<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Order_Management extends Controller
{
    public function index() {
        return view('order');
    }

    public function add_categories() {
        return view('add_categories');
    }
    
    public function edit_categories() {
        return view('edit_categories');
    }
}
