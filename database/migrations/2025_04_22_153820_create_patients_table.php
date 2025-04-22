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
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('password');
            $table->string('photo')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->integer('age')->nullable();
            $table->text('address')->nullable(); // ✅ fixed here
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->boolean('status')->default(true); // changed from string to boolean
            $table->boolean('trash')->default(false); // same here
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