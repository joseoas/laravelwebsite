<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSellersEmailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellers_emails', function (Blueprint $table) {
            $table->increments('id');
            $table->string('status_saller_email');
            $table->integer('id_seller')->unsigned();
            $table->foreign('id_seller')->references('id')->on('sellers')->onDelete('cascade');
            $table->integer('id_email')->unsigned();
            $table->foreign('id_email')->references('id')->on('emails')->onDelete('cascade');
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
        Schema::dropIfExists('sellers_emails');
    }
}
