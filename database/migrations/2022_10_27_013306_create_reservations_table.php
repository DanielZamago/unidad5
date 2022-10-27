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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();

            $table->String('type');
            $table->date('date_arrived');
            
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('id')->on('clients');

            $table->double('cost_day');
            $table->double('Total');
            $table->date('date_departure');

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
};
