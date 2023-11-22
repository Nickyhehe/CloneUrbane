<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function detailCategory(Product $product){
        return view('pages.de');
    }
}
