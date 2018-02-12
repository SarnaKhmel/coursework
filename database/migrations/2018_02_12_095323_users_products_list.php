<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsersProductsList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_products_list', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->integer('user_id');
            $table->string('name');
            $table->string('subscribe');
            $table->integer('price');
            $table->integer('id_image');
            $table->json('image');

            $table->integer('category_id');
            $table->integer('image_id');
            $table->integer('location_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_products_list');

    }
}
