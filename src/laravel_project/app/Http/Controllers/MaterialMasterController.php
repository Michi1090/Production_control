<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Material;

class MaterialMasterController extends Controller
{
    // 検索画面
    public function search()
    {
        $materials = Material::all();

        return view('material.search', ['materials' => $materials]);
    }

    // 照会画面
    public function show(Request $request)
    {
        $id = $request->input('id');
        $material = Material::findOrFail($id);

        return view('material.master', ['material' => $material]);
    }

}
