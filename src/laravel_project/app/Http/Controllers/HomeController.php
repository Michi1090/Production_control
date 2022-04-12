<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $menus = [
            ['title' => '生産登録', 'url' => '#'],
            ['title' => '出荷登録', 'url' => '#'],
            ['title' => '在庫照会', 'url' => '#'],
            ['title' => '部品発注', 'url' => '#'],
            ['title' => '製品マスタ照会', 'url' => '#'],
            ['title' => '部品マスタ照会', 'url' => '#'],
            ['title' => 'ユーザー情報照会・変更', 'url' => '#'],
            ['title' => '操作マニュアル', 'url' => '#'],
        ];

        return view('home', ['menus' => $menus]);
    }
}
