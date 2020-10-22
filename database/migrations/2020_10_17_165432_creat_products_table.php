<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {

            $table->integer('code',4)->unique()->nullable();
            $table->unsignedBigInteger('ProductLineID')->nullable();
            $table->char('Name',255);
            $table->integer('Scale');
            $table->char('vendor',255);
            $table->char('PdtDescription',255);
            $table->integer('QtyInStock');
            $table->double('BuyPrice',19,0);
           $table->char('MSRP',255);
            $table->timestamps();

            $table->foreign('ProductLineID')->references('id')->on('product_lines');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
