<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductMaster extends Model
{
    // エンジンのリレーション
    public function engine()
    {
        return $this->belongsTo('App\MaterialMaster', 'engine_id');
    }

    // エアバッグのリレーション
    public function airbag()
    {
        return $this->belongsTo('App\MaterialMaster', 'airbag_id');
    }

    // タイヤバッグのリレーション
    public function tire()
    {
        return $this->belongsTo('App\MaterialMaster', 'tire_id');
    }
}
