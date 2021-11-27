<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImportBillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_import_bill', function (Blueprint $table) {
            $table->id();
            $table->string('code',20);
            $table->double('vat')->default(0);
            $table->double('total')->default(0);
            $table->text('note');
            $table->date('import_date')->nullable();
            $table->integer('admin_id')->nullable();            
            $table->enum('status',[1,2])->comment('1:Chờ duyệt, 2:Đã được duyệt')->default(1);
            $table->timestamps();

            $table->foreignId('provider_id')->references('id')->on('tbl_provider')->onDelete('cascade');
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
        Schema::table('tbl_import_bill', function (Blueprint $table) {
            //
        });
    }
}
