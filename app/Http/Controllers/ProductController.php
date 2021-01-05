<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
  
    public function index()
    {
        return view('product.index');
    }

    public function about()
    {
        return view('product.about');
    }

    public function contact()
    {
        return view('product.contact');
    }
    
}