<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FactDriverLocation extends Model
{
    //
    protected $table = 'fact_driver_location';

    // protected $casts = [
    //     'created' => 'datetime',
    //     'updated' => 'datetime',
    // ];
    protected $dates = ['created', 'updated'];

    public $timestamps = false;
}
