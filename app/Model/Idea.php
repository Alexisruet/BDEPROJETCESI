<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'title', 'description', 'id_user'
    ];
}