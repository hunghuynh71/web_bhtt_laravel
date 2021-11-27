<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistrictTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_district', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->string('type',50);
            $table->foreignId('province_id')->references('id')->on('tbl_province')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_district', function (Blueprint $table) {
            //
        });
    }
}
