<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    protected $fillable =[
        'customer_id','customer_name','messege',
    ];

    protected $table='enquiries';
    public $timestamp='true';
    public $primaryKey='customer_id';
}
