<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_product_detail', function (Blueprint $table) {
            $table->id();
            $table->unique(['id','product_id','size_id','color_id']);
            $table->integer('stock')->default(0);
            $table->foreignId('product_id')->references('id')->on('tbl_product')->onDelete('cascade');
            $table->foreignId('size_id')->references('id')->on('tbl_size')->onDelete('cascade');
            $table->foreignId('color_id')->references('id')->on('tbl_color')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_detail');
    }
}
