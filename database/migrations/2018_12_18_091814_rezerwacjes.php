<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Rezerwacjes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("Rezerwacjes", function (Blueprint $table){
         $table->increments('id');
         $table->integer('id_user');
         $table->integer('id_object');
         $table->date("Date_from");
         $table->date("Date_to");
         $table->string('Confirmed');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Rezerwacjes');
    }
}
