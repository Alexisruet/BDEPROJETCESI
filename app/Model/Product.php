<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'name', 'description', 'price', 'urlImage', 'stock', 'id_product_category '
    ]; 
}
