<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImportBillDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_import_bill_detail', function (Blueprint $table) {
            $table->id();
            $table->unique(['id','import_bill_id','product_size_id']);
            $table->double('price');
            $table->integer('qty');

            $table->foreignId('import_bill_id')->references('id')->on('tbl_import_bill')->onDelete('cascade');
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
        Schema::table('tbl_import_bill_detail', function (Blueprint $table) {
            //
        });
    }
}
