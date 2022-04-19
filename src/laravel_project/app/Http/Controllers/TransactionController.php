<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Transaction;

class TransactionController extends Controller
{
    // 検索画面
    public function search()
    {
        $products = Product::all();

        return view('transaction.search', ['products' => $products]);
    }

    // 一覧画面
    public function index(Request $request)
    {
        // $productId = $request->input('id');
        // $transactions = Transaction::;

        // return view('transaction.index', ['product' => $product]);
    }
}
