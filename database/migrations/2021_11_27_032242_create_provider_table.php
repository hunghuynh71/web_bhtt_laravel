<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProviderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_provider', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->string('phone',12)->unique();
            $table->string('email',100)->unique();
            $table->string('address',50);
            $table->enum('status',[1,2])->comment('1:Hiện, 2:Ẩn')->default(1);

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
        Schema::table('tbl_provider', function (Blueprint $table) {
            //
        });
    }
}
