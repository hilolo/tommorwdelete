<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgencefraisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agencefrais', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('description')->nullable();
            $table->float('montant')->nullable();
            $table->integer('locataires_id')->unsigned();
            $table->foreign('locataires_id')->references('id')->on('locataires');
            $table->string('adresse')->nullable();
            $table->integer('archivefrais')->nullable();
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
        Schema::dropIfExists('agencefrais');
    }
}
