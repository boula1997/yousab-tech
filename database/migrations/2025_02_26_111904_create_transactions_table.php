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
            $table->id();
            $table->unsignedBigInteger('order_id');
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->double('amount')->default(0);
            $table->string('transaction_id')->nullable();
            $table->timestamp('transaction_date')->useCurrent();
            $table->string('payment_type')->nullable()->comment('debit', 'credit');
            $table->string('payment_name')->nullable()->comment('wallet', 'stc_pay', 'cards', 'apple_pay');
            $table->string('payment_gateway')->nullable()->comment('hyperpay', 'wallet');
            
            
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