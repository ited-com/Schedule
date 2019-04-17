<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    protected $table = 'building';
    public $timestamps = false;

    public function room()
    {
        return $this->hasMany('App\Model\Room');
    }
}
