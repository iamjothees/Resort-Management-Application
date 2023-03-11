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
        Schema::create('room_types', function (Blueprint $table) {
            $table->id();
            $table->string('room_type');
            $table->decimal('room_price', 15, 2);
            $table->decimal('default_room_price', 15, 2);
            $table->string('rooming');
            $table->text('description')->nullable();
            $table->foreignId('created_by_id')->contrained('user');
            $table->timestamps();
        });

        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('room_types_id');
            $table->unsignedInteger('occupancy');
            $table->foreignId('created_by_id')->contrained('user');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('room_types');
        Schema::dropIfExists('rooms');
    }
};
