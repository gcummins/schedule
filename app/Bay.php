<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bay extends Model
{
    public function stages() {
        $this->hasMany('App\Stage');
    }
}
