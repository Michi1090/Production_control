<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductMasterController extends Controller
{
    public function show(Request $request)
    {
        $id = $request->input('id');
        $product = Product::findOrFail($id);

        return view('product_master.show', ['product' => $product]);
    }

    public function search()
    {
        $products = Product::all();

        return view('product_master.search', ['products' => $products]);
    }
}
