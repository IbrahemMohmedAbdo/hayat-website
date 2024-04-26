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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->integer('age')->nullable();
            $table->string('national_id', 20);
            $table->string('phone_number', 20);
            $table->string('password', 100);
            $table->string('gender', 10)->nullable();
            $table->string('degree', 50);
            $table->string('email', 100)->unique();
            $table->string('otp')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
