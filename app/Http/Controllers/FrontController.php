<?php

namespace App\Http\Controllers;
use App\Category;
use App\Product;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    
    public function index() {
        $proizvodi = Product::all();
        return view('front.home', compact('proizvodi'));
    }

    public function proizvodi() {
        $proizvodi = Product::all();
        return view('front.proizvodi', compact('proizvodi'));
    }

    public function proizvod() {
        return view('front.proizvod');
    }

}
