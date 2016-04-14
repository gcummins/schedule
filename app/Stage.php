<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    public function order() {
        $this->hasOne('App\Order');
    }

    public function bay() {
        $this->hasOne('App\Bay');
    }

    public function preferredTechnicians() {
        $this->hasMany('App\Technician');
    }
}
