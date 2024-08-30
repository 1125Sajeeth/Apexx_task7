<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Slider_Management extends Controller
{
    public function slider() {

        return view('slider');

    }
    
    public function add_slider() {

        return view('add_slider');

    }
    
    public function edit_slider() {

        return view('edit_slider');

    }
}
