<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ToComment extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'content', 'id_event', 'id_user',
    ];
}
