<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->decimal('total', 8, 2);
            $table->timestamps();
        });

        Schema::create('item_transaction', function (Blueprint $table) {
            $table->unsignedBigInteger('item_id');
            $table->unsignedBigInteger('transaction_id');
            $table->integer('quantity')->default(1);

            $table->foreign('item_id')->references('id')->on('items');
            $table->foreign('transaction_id')->references('id')->on('transactions');
        });
    }

    public function down()
    {
        Schema::dropIfExists('item_transaction');
        Schema::dropIfExists('transactions');
    }
}
