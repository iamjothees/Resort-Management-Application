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
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('Description')->nullable();
            $table->foreignId('created_by_id')->contrained('user');
            $table->timestamps();
        });

        Schema::create('staffs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('role_id');
            $table->text('first_name');
            $table->text('last_name');
            $table->date('DOB')->nullable();
            $table->tinyInteger('gender')->nullable();
            $table->integer('phone')->nullable();
            $table->text('email')->nullable();
            $table->foreignId('city');
            $table->foreignId('state');
            $table->foreignId('country');
            $table->text('password');
            $table->text('salary');
            $table->foreignId('created_by_id')->contrained('user');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
        Schema::dropIfExists('staffs');
    }
};
