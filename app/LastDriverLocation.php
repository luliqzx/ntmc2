<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LastDriverLocation extends Model
{
    //
    protected $table = 'last_driver_location';
    // protected $casts = [
    //     'created' => 'datetime',
    //     'updated' => 'datetime',
    // ];
    protected $dates = ['created', 'updated'];

    public $timestamps = false;
}
