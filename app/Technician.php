<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Technician extends Model
{
    public function preferredStages() {
        return $this->hasMany('App\Stages');
    }
}
