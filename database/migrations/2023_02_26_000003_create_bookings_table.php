<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('guest_id');
            $table->foreignId('room_id');
            $table->timestamp('booked at')->useCurrent();
            $table->timestamp('arrived_at')->nullable();;
            $table->timestamp('departed_at')->nullable();;
            $table->timestamp('estimate_arrival_time')->nullable();;
            $table->timestamp('estimate_departure_time')->nullable();;
            $table->unsignedInteger('adults')->nullable();;
            $table->unsignedInteger('childrens')->nullable();;
            $table->text('meta');
            $table->foreignId('created_by_id')->contrained('user');
            $table->timestamps();
        });


        Schema::create('booking_guest', function (Blueprint $table) {
            $table->foreignId('booking_id');
            $table->foreignId('guest_id');
            $table->foreignId('created_by_id')->contrained('user');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking_guest');
        Schema::dropIfExists('bookings');
    }
};
