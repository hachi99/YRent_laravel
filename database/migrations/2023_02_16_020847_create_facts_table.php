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
        Schema::create('facts', function (Blueprint $table) {
            $table->id();
            $table->string('rfc')->unique();
            $table->foreignId('reserv_id'); 
            $table->foreignId('custom_id');
            $table->timestamps();

            $table->foreign('reserv_id')->references('id')->on('reservs');
            $table->foreign('custom_id')->references('id')->on('customs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facts');
    }
};
