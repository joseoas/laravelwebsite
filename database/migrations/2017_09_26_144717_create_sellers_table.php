<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rut_seller');
            $table->string('name_seller');
            $table->string('lastname_seller');
            $table->integer('smartphone_seller')->nullable()->default(0);
            $table->integer('phone_seller')->nullable()->default(0);
            $table->string('email_seller');

            $table->integer('id_isapre')->unsigned();
            $table->foreign('id_isapre')->references('id')->on('isapres')->onDelete('cascade');

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
        Schema::dropIfExists('sellers');
    }
}
