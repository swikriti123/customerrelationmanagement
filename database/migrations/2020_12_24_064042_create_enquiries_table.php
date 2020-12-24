<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnquiriesTable extends Migration
{
    
    public function up()
    {
        Schema::create('enquiries', function (Blueprint $table) {
            $table->increments('customer_id');
            $table->string('customer_name');
            $table->string('messege');
             $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('enquiries');
    }
}
