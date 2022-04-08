<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductMasterController extends Controller
{
    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view('master.product', ['product' => $product]);
    }
}
