<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
 protected $fillable =[
     'title','excerpt','content','image','category_id','views','likes',
 ];
 protected $table='news';
 public $timestamp='true';
 public $primaryKey='category_id';

}
