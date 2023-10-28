<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('airline_id');
            $table->unsignedBigInteger('flight_type_id');
            $table->string('flight_number');
            $table->string('slug');
            $table->string('plane_on');
            $table->integer('departure_location_id');
            $table->integer('arrival_location_id');
            $table->string('departure_date');
            $table->string('arrival_date');
            $table->string('departure_time');
            $table->string('arrival_time');
            $table->string('flight_status');
            $table->string('duration');
            $table->string('seats');
            $table->string('price');

            $table->foreign('airline_id')->references('id')->on('airlines')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->foreign('flight_type_id')->references('id')->on('flight_types')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
