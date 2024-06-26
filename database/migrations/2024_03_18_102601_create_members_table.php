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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('first_name',30)->nullable();
            $table->string('last_name',30)->nullable();
            $table->tinyInteger('gender')->nullable();
            $table->dateTime('day_of_birth')->nullable();
            $table->string('avatar')->nullable();
            $table->string('phone_number',20)->nullable();
            $table->string('email')->unique();
            $table->string('province_id')->nullable();
            $table->string('district_id')->nullable();
            $table->string('ward_id')->nullable();
            $table->string('address')->nullable();
            $table->string('password');
            $table->string('rememberToken')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
