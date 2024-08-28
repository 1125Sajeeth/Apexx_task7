<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Product_Management extends Controller
{
    public function index() {

        return view('product');

    }
    public function add_product() {

        return view('addproduct');

    }
    public function edit_product() {

        return view('edit_product');

    }
}
