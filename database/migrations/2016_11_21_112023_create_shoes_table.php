<?php

//use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shoes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedSmallInteger('size');
            $table->string('type');
            $table->string('color');
            $table->unsignedSmallInteger('price');
            $table->unsignedSmallInteger('user_id')->default(1);
            $table->timestamps();
            $table->string('filename');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shoes');
    }
}
