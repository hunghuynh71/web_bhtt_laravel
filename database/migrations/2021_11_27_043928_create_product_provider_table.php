<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductProviderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_product_provider', function (Blueprint $table) {
            $table->id();
            $table->unique(['id','product_id','provider_id']);
            $table->foreignId('product_id')->references('id')->on('tbl_product')->onDelete('cascade');
            $table->foreignId('provider_id')->references('id')->on('tbl_provider')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_product_provider', function (Blueprint $table) {
            //
        });
    }
}
