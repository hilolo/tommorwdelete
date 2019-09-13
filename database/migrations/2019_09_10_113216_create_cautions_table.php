<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCautionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cautions', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nbrmois')->nullable();
            $table->string('description')->nullable();
            $table->float('montant')->nullable();
            $table->integer('locations_id')->unsigned();
            $table->foreign('locations_id')->references('id')->on('locations');
            $table->integer('archivecaut')->nullable();
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
        Schema::dropIfExists('cautions');
    }
}
