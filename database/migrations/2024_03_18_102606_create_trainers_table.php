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
        Schema::create('trainers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name',30)->nullable();
            $table->string('last_name',30)->nullable();
            $table->tinyInteger('gender')->nullable();
            $table->dateTime('day_of_birth')->nullable();
            $table->string('avatar')->nullable();
            $table->string('phone_number',20)->nullable();
            $table->string('email')->unique();
            $table->string('account_id');
            $table->string('specialize')->nullable();
            $table->string('address')->nullable();
            $table->string('password');
            $table->string('rememberToken');
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trainers');
    }
};
