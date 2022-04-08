<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
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

    // タイヤバッグのリレーション
    public function tire()
    {
        return $this->belongsTo('App\Material', 'tire_id');
    }
}
