<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
   protected $fillable =[
       'id','name','address','contact'
   ];

   protected $table='customers';
   public $timestamp='true';
   public $primaryKey='id';
}
