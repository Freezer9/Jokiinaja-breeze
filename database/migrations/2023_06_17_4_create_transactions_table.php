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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id('transaction_id');
            $table->string('email', 80);
            $table->string('nickname', 40);
            $table->string('password');
            $table->string('notes', 80);
            $table->string('phone_number', 20);
            $table->string('login_via', 20);
            $table->foreignId('payment_id')->constrained('payments', 'payment_id')->onDelete('cascade');
            $table->foreignId('product_id')->constrained('products', 'product_id')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
