<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id')->comment('ID');
            $table->integer('user_id')->comment('ユーザーID');
            $table->string('user_name',100)->comment('ユーザー氏名');
            $table->string('name',100)->comment('商品名');
            $table->integer('type')->nullable()->comment('1:本、2:家電製品、3:インテリア、4:食品、5:スポーツ・レジャー、6:ファッション、7:おもちゃ、8:日用品、9:介護用品');
            $table->integer('price')->nullable()->comment('商品価格');
            $table->string('image',100)->nullable()->comment('商品画像');
            $table->string('detail',100)->nullable()->comment('詳細');
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
        Schema::dropIfExists('items');
    }
};
