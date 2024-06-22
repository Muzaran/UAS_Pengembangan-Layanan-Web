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
            $table->unsignedBigInteger('user_id'); // Asumsikan ada relasi dengan tabel users
            $table->unsignedBigInteger('product_id'); // Asumsikan ada relasi dengan tabel products
            $table->integer('quantity');
            $table->decimal('total_price', 10, 2);
            $table->timestamps();

            // Tambahkan foreign key jika diperlukan
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
