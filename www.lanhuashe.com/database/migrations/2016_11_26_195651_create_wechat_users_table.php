<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWechatUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wechat_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nicename');
            $table->string('truename');
            $table->string('wechat');
            $table->string('tel');
            $table->string('wechatid');
            $table->string('img');
            $table->string('addr');
            $table->tinyInteger('answernum');
            $table->tinyInteger('is_share');
            $table->tinyInteger('sec');
            $table->tinyInteger('send')->default(0);
            $table->tinyInteger('answerright');
            $table->integer('reward_id_one')->default(10);
            $table->integer('reward_id_two')->default(10);
            $table->integer('reward_id_three')->default(10);
            $table->integer('reward_id_four')->default(10);
            $table->timestamps();

            $table->index('wechatid');
            $table->index('answernum');
            $table->index('is_share');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('wechat_users');
    }
}
