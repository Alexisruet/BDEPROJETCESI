<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'url', 'id_user', 'id_event'
    ];
}
