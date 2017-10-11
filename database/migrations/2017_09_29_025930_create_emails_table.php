<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emails', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_email');
            $table->string('phone_email');
            $table->string('address_email');
            $table->string('email_email');
            $table->string('renta_email');
            $table->string('content_email',2000);
            $table->integer('banmedica_email')->default(1);
            $table->integer('colmena_email')->default(1);
            $table->integer('consalud_email')->default(1);
            $table->integer('cruzblanca_email')->default(1);
            $table->integer('vidatres_email')->default(1);
            $table->integer('masvida_email')->default(1);
            $table->date('data_email');
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
        Schema::dropIfExists('emails');
    }
}
