<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ToComment extends Model
{
    protected $fillable = [
        'url', 'id_picture', 'id_user',
    ];
}
