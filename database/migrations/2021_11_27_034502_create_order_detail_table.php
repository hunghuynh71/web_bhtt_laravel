<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_order_detail', function (Blueprint $table) {
            $table->id();
            $table->unique(['id','order_id','product_size_id']);
            $table->double('price');
            $table->double('price_cost');
            $table->integer('qty');
            $table->foreignId('order_id')->references('id')->on('tbl_order')->onDelete('cascade');
            $table->foreignId('product_size_id')->references('id')->on('tbl_product_size')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_order_detail', function (Blueprint $table) {
            //
        });
    }
}
