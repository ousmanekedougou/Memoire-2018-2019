<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRendezVousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rendez_vouses', function (Blueprint $table) {
            $table->id();
            $table->Integer('user_id')->nullable();
            $table->Integer('medecin_id')->nullable();
            $table->integer('status')->default(0);
            $table->longText('objet');
            $table->dateTime('date_medecin')->nullable();
            $table->time('heure_medecin')->nullable();
            $table->integer('view_user')->default(0);
            $table->integer('view_medecin')->default(0);
            $table->integer('option_medecin')->default(0);
            $table->integer('option_client')->default(0);
            $table->integer('prix')->default(0);
            $table->longText('carnet')->nullable();
            $table->longText('rapport')->nullable();
            $table->longText('ordonance')->nullable();
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
        Schema::dropIfExists('rendez_vouses');
    }
}
