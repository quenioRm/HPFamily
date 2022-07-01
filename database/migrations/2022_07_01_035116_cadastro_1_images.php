<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cadastro_1_images', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cadastro_id')->unsigned();
            $table->string('name');
            $table->string('path');
            $table->timestamps();

            $table->foreign('cadastro_id')->references('id')->on('cadastro_1')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cadastro_1');
    }
};
