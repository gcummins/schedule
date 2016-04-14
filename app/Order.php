<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function stages() {
        return $this->hasMany('App\Stage');
    }
}
