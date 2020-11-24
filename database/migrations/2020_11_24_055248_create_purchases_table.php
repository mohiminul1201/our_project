<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
             $table->unsignedBigInteger('product_code');
              $table->foreign('product_code')
                  ->references('product_code')->on('inventoris');
            $table->unsignedBigInteger('invoice_no');
            $table->primary('invoice_no');
            $table->unsignedBigInteger('suppliers');
            $table->foreign('suppliers')
                  ->references('secrial_number')->on('suppliers');
            $table->string('Product_description');
            $table->string('quantity');
            $table->string('rate');
            $table->string('amount');
            $table->string('payment');
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
        Schema::dropIfExists('purchases');
    }
}
