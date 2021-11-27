<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_post', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->string('slug',120);
            $table->string('thumb',150);
            $table->string('shortDesc',200);
            $table->text('content');
            $table->integer('view')->default(0);
            $table->enum('status',[1,2])->comment('1:Chờ duyệt, 2:Đã được duyệt')->default(1);
            $table->timestamps();

            $table->foreignId('post_category_id')->references('id')->on('tbl_post_category')->onDelete('cascade');
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_post', function (Blueprint $table) {
            //
        });
    }
}
