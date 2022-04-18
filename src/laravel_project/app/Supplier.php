<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    // 各サプライヤーのIDを定数に格納
    const PHP = 1;
    const Laravel = 2;
    const Symfony = 3;
}
