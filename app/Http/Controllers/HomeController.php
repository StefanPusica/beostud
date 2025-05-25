<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        // Constructor logic can be added here if needed
        return view('pages.index');
    }
}
