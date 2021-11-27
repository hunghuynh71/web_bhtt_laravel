<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_post_category', function (Blueprint $table) {
            $table->id();
            $table->string('name',30);
            $table->string('slug',40);
            $table->enum('status',[1,2])->comment('1:Chờ duyệt, 2:Đã được duyệt')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_post_category', function (Blueprint $table) {
            //
        });
    }
}
