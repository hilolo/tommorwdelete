<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImmeublebiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('immeublebiens', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('biens_id')->unsigned();
            $table->foreign('biens_id')->references('id')->on('biens');
            $table->integer('immeubles_id')->unsigned();
            $table->foreign('immeubles_id')->references('id')->on('immeubles');
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
        Schema::dropIfExists('immeublebiens');
    }
}
