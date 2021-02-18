<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kuca extends Model
{
    protected $table = "kuca";
    public $timestamps = false;

    public function rente()
    {
        return $this->hasMany('App\Renta');
    }
}
