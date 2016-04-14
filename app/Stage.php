<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    public function order() {
        return $this->belongsTo('App\Order');
    }

    public function bay() {
        return $this->belongsTo('App\Bay');
    }

    public function preferredTechnicians() {
        return $this->hasMany('App\Technician');
    }
}
