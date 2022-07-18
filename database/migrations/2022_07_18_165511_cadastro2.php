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
        Schema::create('cadastro_2', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cadastro_id')->unsigned();
            $table->string('parent1')->nullable();
            $table->string('part_parent1')->nullable();
            $table->string('parent2')->nullable();
            $table->string('part_parent2')->nullable();
            $table->string('parent3')->nullable();
            $table->string('part_parent3')->nullable();
            $table->string('parent4')->nullable();
            $table->string('part_parent4')->nullable();
            $table->string('parent5')->nullable();
            $table->string('part_parent5')->nullable();
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
        Schema::dropIfExists('cadastro_2');
    }
};
