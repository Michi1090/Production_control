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
        $materials = Material::all();
        $id = (int)$request->input('id');
        $master = Material::findOrFail($id);

        $params = [
            'materials' => $materials,
            'id' => $id,
            'master' => $master,
        ];

        return view('material.master', $params);
    }

}
