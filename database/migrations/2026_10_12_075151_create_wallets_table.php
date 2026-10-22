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
        Schema::create('wallets', function (Blueprint $table) {
            $table->id();
            $table->string('crypto_name');
            $table->string('wallet_address');
            $table->decimal('amount');
            $table->timestamps();
        });

        Schema::create('wallets_trans', function (Blueprint $table) {
            $table->id();
            $table->string('tx');
            $table->string('hash');
            $table->string('block');
            $table->decimal('amount');
            $table->timestamps();
        });


        Schema::create('testnet_wallets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('wallet_id');
            $table->timestamps();
        });

         Schema::create('wallets_trans_testnet', function (Blueprint $table) {
            $table->id();
            $table->string('tx');
            $table->string('hash');
            $table->string('block');
            $table->decimal('amount');
            $table->timestamps();
        });

        Schema::create('user_wallet_activity', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('wallet_id');
            $table->unsignedBigInteger('transactions_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wallets');
        Schema::dropIfExists('testnet_wallets');
        Schema::dropIfExists('transaction_ids');
    }
};
