<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
           $table->unsignedBigInteger('product_code');
              $table->foreign('product_code')->references('product_code')->on('inventoris');
                  
            $table->unsignedBigInteger('invoice_no');
            $table->foreign('invoice_no')->references('invoice_no')->on('purchases');
                    
            $table->unsignedBigInteger('suppliers');
            $table->unsignedBigInteger('cus_id');
            $table->foreign('cus_id')->references('cus_id')->on('customerinfos');
                  
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
        Schema::dropIfExists('sales');
    }
}
