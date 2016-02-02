<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePotholesTable extends Migration
{

    public function up()
    {
        Schema::create('potholes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('location');
            $table->text('street');
            $table->string('district');
            $table->integer('size');
            $table->integer('urgency');
            $table->string('status');
            $table->integer('repair_id');
            $table->integer('user_id');
            $table->string('user_email');
            $table->timestamps();
        });
    }




    public function down()
    {
        Schema::drop('potholes');
    }
}
