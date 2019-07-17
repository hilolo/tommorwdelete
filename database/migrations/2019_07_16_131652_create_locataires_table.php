<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocatairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locataires', function (Blueprint $table) {
             $table->Increments('id');
            $table->integer('type');
            $table->string('civilite')->nullable();
            $table->string('prenom')->nullable();
            $table->string('nom')->nullable();
            $table->string('cin')->nullable();



             $table->string('societe')->nullable();
             $table->string('ice')->nullable();
             $table->string('profession')->nullable();
             $table->string('cinpath')->nullable();


             $table->string('email')->nullable();
             $table->string('tel')->nullable();
             $table->string('fax')->nullable();



             $table->string('adresse')->nullable();
             $table->string('ville')->nullable();
             $table->string('pays')->nullable();

             
            $table->integer('mode');
            $table->integer('archive')->nullable();
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
        Schema::dropIfExists('locataires');
    }
}
