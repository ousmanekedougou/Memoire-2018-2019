<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedecinHopitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medecin_hopitals', function (Blueprint $table) {
            $table->unsignedBigInteger('medecin_id')->index();
            $table->integer('hopital_id')->unsigned()->index();
            $table->foreign('medecin_id')->references('id')->on('medecins')->onDelete('cascade');
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
        Schema::dropIfExists('medecin_hopitals');
    }
}
