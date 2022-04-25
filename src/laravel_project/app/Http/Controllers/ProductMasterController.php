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
        $products = Product::all();
        $id = (int)$request->input('id');
        $master = Product::findOrFail($id);

        $params = [
            'products' => $products,
            'id' => $id,
            'master' => $master,
        ];

        return view('product.master', $params);
    }
}
