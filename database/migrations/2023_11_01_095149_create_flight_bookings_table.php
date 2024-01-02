<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('flight_bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('contact_info_id');
            $table->unsignedBigInteger('person_info_id');
            $table->string('flight_id');
            $table->integer('person');
            $table->string('currency');
            $table->string('taxes');
            $table->string('total_pay');
            $table->string('payment_method');

            $table->foreign('user_id')->references('id')->on('users')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->foreign('contact_info_id')->references('id')->on('contact_infos')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->foreign('person_info_id')->references('id')->on('personal_infos')
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
        Schema::dropIfExists('flight_bookings');
    }
};
