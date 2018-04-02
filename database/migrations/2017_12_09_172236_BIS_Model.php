<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BISModel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('store_info', function (Blueprint $table) {
            $table->increments('C_ID')->unique();
            $table->string('C_name');
            $table->string('Date');
            $table->string('Description');
            $table->string('Paid');
            $table->string('Dues');
            $table->blob('Image');
            $table->rememberToken();
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
        //
        Schema::dropIfExists('store_info');
    }
}
