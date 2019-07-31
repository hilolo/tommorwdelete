<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->Increments('id');

            
            $table->integer('biens_id')->unsigned();
            $table->foreign('biens_id')->references('id')->on('biens');
            $table->integer('locataires_id')->unsigned();
            $table->foreign('locataires_id')->references('id')->on('locataires');

            $table->integer('type_bail')->nullable();
            $table->date('date_debutbail');
            $table->date('date_finbail');

            $table->string('paiment_methode')->nullable();
            $table->string('moyen_paiment')->nullable();
            $table->string('paiment_jour')->nullable();
            


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
        Schema::dropIfExists('reservations');
    }
}
