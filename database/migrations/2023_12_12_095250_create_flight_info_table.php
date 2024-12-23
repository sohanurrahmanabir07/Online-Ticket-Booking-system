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
        Schema::create('flight_info', function (Blueprint $table) {
            $table->id();
            $table->string('flight_type');
            $table->string('flight_name');
            $table->text('start_destination');
            $table->text('final_destination');
            $table->string('start_time');
            $table->string('finish_time');
            $table->text('class');
            $table->text('total_seat');
            $table->text('price');
            $table->text('journey_date');
            $table->integer('cabin_kg');
            $table->integer('check_in');
            $table->timestamp('last_used_at')->nullable();
   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flight_info');
    }
};
