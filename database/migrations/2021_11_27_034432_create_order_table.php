<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_order', function (Blueprint $table) {
            $table->id();
            $table->string('code',20);
            $table->string('name',50);
            $table->string('phone',12)->unique();
            $table->string('address',50);
            $table->string('promo_code',50)->nullable();
            $table->double('promo_money')->default(0);
            $table->double('feeship')->default(0);
            $table->double('vat')->default(0);
            $table->double('total')->default(0);
            $table->enum('payment',['cod','onl']);
            $table->text('note');
            $table->date('order_date')->nullable();
            $table->integer('admin_id')->nullable();            
            $table->enum('status',[1,2,3,4])->comment('1:Chờ xử lý, 2:Đã xử lý, 3:Hủy, 4:Đổi trả')->default(1);
            $table->timestamps();
            $table->unsignedBigInteger('province_id');
            $table->unsignedBigInteger('district_id');
            $table->unsignedBigInteger('ward_id');
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
        Schema::table('tbl_order', function (Blueprint $table) {
            //
        });
    }
}
