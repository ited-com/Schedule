<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'room';
    public $timestamps = false;

    public function building()
    {
        return $this->belongsTo('App\Admin\Building');
    }
}
