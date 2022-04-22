<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    // 製品名のリレーション
    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
