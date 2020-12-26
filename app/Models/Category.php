<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable =[
        'id','name','image',
    ];
    Protected $table='categories';
    public $timestamp='true';
    public $primarykey='id';
    
}
