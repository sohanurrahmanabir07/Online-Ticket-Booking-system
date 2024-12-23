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
        Schema::create('flight_journey_info', function (Blueprint $table) {
            $table->id();
            $table->text('passenger_name');
            $table->string('email');
            $table->integer('phone');
            $table->text('passenger_type');
            $table->integer('flight_id');
            $table->integer('user_id');
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
        Schema::dropIfExists('flight_journey_info');
    }
};
