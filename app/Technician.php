<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Technician extends Model
{
    public function preferredStages() {
        $this->hasMany('App\Stages');
    }
}
