<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ToRegister extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'id_event', 'id_user',
    ];
}
