<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MaterialType extends Model
{
    // 各種別のIDを定数に格納
    const ENGINE = 1;
    const AIRBAG = 2;
    const TIRE = 3;
}
