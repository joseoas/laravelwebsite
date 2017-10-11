<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsSallersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments_sallers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('status_payment_saller');
            $table->date('date_payment_saller');
            $table->timestamps();
            $table->integer('id_saller')->unsigned();
            $table->foreign('id_saller')->references('id')->on('sellers')->onDelete('cascade');
            $table->integer('id_payment')->unsigned();
            $table->foreign('id_payment')->references('id')->on('payments')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments_sallers');
    }
}
