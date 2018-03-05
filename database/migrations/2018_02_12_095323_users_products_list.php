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
            $table->integer('user_id')->nullable();
            $table->string('user_email')->nullable();
            $table->string('prodEmail')->nullable();
            $table->string('name')->nullable();
            $table->string('subscribe')->nullable();
            $table->string('phone')->nullable();
            $table->integer('price')->nullable();
            $table->string('image')->nullable();
            $table->integer('id_category')->nullable();

            $table->rememberToken();
            $table->timestamps();

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
