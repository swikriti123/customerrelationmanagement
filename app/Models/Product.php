<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   protected $fillable=[
       'category_id','name','description','quantity','price',
    ];

    protected $table='products';
    public $timestamp='true';
    public $primarykey='category_id';
}
