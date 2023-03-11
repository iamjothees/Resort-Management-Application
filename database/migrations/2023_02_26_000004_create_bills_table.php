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
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->foreignId('booking_id');
            $table->foreignId('guest_id');
            $table->decimal('room_charge', '15' ,'2');
            $table->decimal('restaurant_charge', '15' ,'2')->nullable();
            $table->decimal('bar_charge', '15' ,'2')->nullable();
            $table->decimal('misc_charge', '15' ,'2')->nullable();
            $table->decimal('late_checkout_charge', '15' ,'2')->nullable();
            $table->timestamp('payment_date')->useCurrent();
            $table->string('payment_mode')->nullable();
            $table->text('remarks')->nullable();
            $table->foreignId('created_by_id')->contrained('user');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bills');
    }
};
