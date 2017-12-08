<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRotatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rotates', function (Blueprint $table) {
            $table->increments('id');
			$table->Integer('iphone');
			$table->Integer('iphonep');
			$table->Integer('chemo');
			$table->Integer('ipadmini');
			$table->Integer('redbag');
			$table->Integer('gouche');
			$table->dateTime('start_time');
			$table->dateTime('stop_time');
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
        Schema::drop('rotates');
    }
}
