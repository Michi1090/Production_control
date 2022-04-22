<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // 各製品のIDを定数に格納
    const SEDAN = 1;
    const COMPACT_CAR = 2;
    const MINI_VAN = 3;
    const LIGHT_CAR = 4;
    const SUV = 5;

    // エンジンのリレーション
    public function engine()
    {
        return $this->belongsTo('App\Material', 'engine_id');
    }

    // エアバッグのリレーション
    public function airbag()
    {
        return $this->belongsTo('App\Material', 'airbag_id');
    }

    // タイヤのリレーション
    public function tire()
    {
        return $this->belongsTo('App\Material', 'tire_id');
    }
}
