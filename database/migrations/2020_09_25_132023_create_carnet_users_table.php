<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarnetUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carnet_users', function (Blueprint $table) {
            $table->unsignedBigInteger('carnet_id')->index();
            $table->integer('user_id')->unsigned()->index();
            $table->foreign('carnet_id')->references('id')->on('carnets')->onDelete('cascade');
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
        Schema::dropIfExists('carnet_users');
    }
}
