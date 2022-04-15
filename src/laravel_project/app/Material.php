<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    // 各部品のIDを定数に格納
    const ENGINE_3000 = 1;
    const ENGINE_2000 = 2;
    const ENGINE_1200 = 3;
    const ENGINE_660 = 4;
    const AIRBAG_HIGH = 5;
    const AIRBAG_NORMAL = 6;
    const TIRE_17 = 7;
    const TIRE_15 = 8;
    const TIRE_14 = 9;

    // 種別のリレーション
    public function type()
    {
        return $this->belongsTo('App\MaterialType');
    }

    // サプライヤーのリレーション
    public function supplier()
    {
        return $this->belongsTo('App\Supplier');
    }
}
