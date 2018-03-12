<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Refresh1 extends Migration
{

    public function up()
    {
        Schema::create('refresh1', function (Blueprint $table) {
            $table->increments('id')->index();
              $table->integer('user_id')->nullable();
            $table->string('name');
            $table->string('subscribe');
            $table->integer('price');

            $table->integer('id_image')->nullable();

            $table->integer('category_id')->nullable();
            $table->integer('location_id')->nullable();
            $table->rememberToken();
            $table->timestamps();

        });
    }


    public function down()
    {
        Schema::dropIfExists('refresh1');
    }
}
