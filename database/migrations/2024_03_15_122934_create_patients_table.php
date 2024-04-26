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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->integer('age');
            $table->string('national_iD', 20);
            $table->string('phone_number', 20);
            $table->string('email', 100)->unique();
            $table->string('password', 100);
            $table->enum('gender', ['male', 'female']);
            $table->text('diseases')->nullable();
            $table->text('address')->nullable();
            $table->boolean('smoker');
            $table->string('otp')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
