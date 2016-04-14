<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function stages() {
        $this->hasMany('App\Stage');
    }
}