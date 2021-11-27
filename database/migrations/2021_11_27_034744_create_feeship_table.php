<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeeshipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_feeship', function (Blueprint $table) {
            $table->id();
            $table->unique(['id','province_id','district_id','ward_id']);
            $table->double('fee');
            $table->foreignId('province_id')->references('id')->on('tbl_province')->onDelete('cascade');
            $table->foreignId('district_id')->references('id')->on('tbl_district')->onDelete('cascade');
            $table->foreignId('ward_id')->references('id')->on('tbl_ward')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_feeship', function (Blueprint $table) {
            //
        });
    }
}
