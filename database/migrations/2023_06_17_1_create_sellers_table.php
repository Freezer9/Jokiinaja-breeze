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
        Schema::create('sellers', function (Blueprint $table) {
            $table->id('seller_id');
            $table->foreignId('user_id')->constrained('users', 'user_id')->onDelete('cascade');
            $table->string('full_name', 40)->nullable();
            $table->string('phone_number', 20);
            $table->string('address', 80)->nullable();
            $table->string('profile_name', 20)->nullable();
            $table->string('profile_description', 80)->nullable();
            $table->string('gender')->nullable();
            $table->date('dob')->nullable();
            $table->string('user_type', 20)->nullable();
            $table->string('profile_image', 128)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sellers');
    }
};
