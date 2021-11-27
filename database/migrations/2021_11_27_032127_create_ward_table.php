<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_ward', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->string('type',50);
            $table->foreignId('district_id')->references('id')->on('tbl_district')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_ward', function (Blueprint $table) {
            //
        });
    }
}
