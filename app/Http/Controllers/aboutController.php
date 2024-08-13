<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutController extends Controller
{
    public function index() {

        return view('about');

    }
    public function privacy_policy() {

        return view('privacy_policy');

    }
    public function return_policy() {

        return view('return_policy');

    }
    public function terms() {

        return view('terms');

    }

}
