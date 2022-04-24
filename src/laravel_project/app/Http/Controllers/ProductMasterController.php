<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductMasterController extends Controller
{
    // 検索画面
    public function search()
    {
        $products = Product::all();

        return view('product.search', ['products' => $products]);
    }

    // 照会画面
    public function show(Request $request)
    {
        $id = $request->input('id');
        $product = Product::findOrFail($id);

        return view('product.master', ['product' => $product]);
    }
}
