<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBancairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bancaires', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('Banque')->nullable();
            $table->string('RIB')->nullable();
            $table->string('IBAN')->nullable();
            $table->string('Swift')->nullable();
            $table->integer('locataires_id')->unsigned();
            $table->foreign('locataires_id')->references('id')->on('locataires');
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
        Schema::dropIfExists('bancaires');
    }
}
