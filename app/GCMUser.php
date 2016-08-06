<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GCMUser extends Model
{
    //
    protected $table = 'gcm_users';

    // protected $casts = [
    //     'created' => 'datetime',
    //     'updated' => 'datetime',
    // ];

    protected $dates = ['created', 'updated'];

    public $timestamps = false;
}
