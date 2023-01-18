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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('agency', 100)->nullable();
            $table->string('departure_station', 50);
            $table->string('arrival_station', 50);
            $table->date('departure_day');
            $table->date('arrival_day');
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->unsignedSmallInteger('train_code')->nullable();
            $table->unsignedSmallInteger('train_carriage_number')->nullable();
            $table->boolean('onTime')->default(1);
            $table->boolean('cancelled')->default(0);
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
        Schema::dropIfExists('trains');
    }
};
