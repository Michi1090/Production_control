<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductMaster;

class ProductMasterController extends Controller
{
    public function show($id)
    {
        $product = ProductMaster::findOrFail($id);

        return view('master.product', ['product' => $product]);
    }
}
