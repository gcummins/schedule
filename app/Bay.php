<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bay extends Model
{
    protected $fillable = ['name', 'technicianCount'];

    public function stages() {
        return $this->hasMany('App\Stage');
    }
}
