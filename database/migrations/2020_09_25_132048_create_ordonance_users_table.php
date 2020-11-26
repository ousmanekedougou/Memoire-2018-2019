<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdonanceUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordonance_users', function (Blueprint $table) {
            $table->unsignedBigInteger('ordonance_id')->index();
            $table->integer('user_id')->unsigned()->index();
            $table->foreign('ordonance_id')->references('id')->on('ordonances')->onDelete('cascade');
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
        Schema::dropIfExists('ordonance_users');
    }
}
