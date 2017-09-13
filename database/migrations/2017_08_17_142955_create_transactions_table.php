<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {

            $table->uuid('transaction_id')->key();
            $table->uuid('iuc_no')->unique();
            $table->integer('product_id')->unsigned()->index();
            $table->integer('customer_id')->unsigned()->index();
             $table->foreign('product_id')->references('product_id')->on('products')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('customer_id')->references('customer_id')->on('customers')->onUpdate('cascade')->onDelete('cascade');
           $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
