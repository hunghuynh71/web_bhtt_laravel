<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromotionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_promotion', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->string('code',20);
            $table->enum('condition',[1,2])->comment('1:%, 2:$');
            $table->integer('value');
            $table->double('min_total_order')->default(0);
            $table->integer('qty');
            $table->date('start_day');
            $table->date('end_day');
            $table->enum('status',[1,2])->comment('1:Chờ duyệt, 2:Đã được duyệt')->default(1);
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
        Schema::table('tbl_promotion', function (Blueprint $table) {
            //
        });
    }
}
