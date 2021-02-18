<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Renta extends Model
{
    protected $table = "renta";
    public $timestamps = false;

    public function kuca()
    {
        return $this->belongsTo('App\Kuca', 'kuca_id', 'id');
    }
}
