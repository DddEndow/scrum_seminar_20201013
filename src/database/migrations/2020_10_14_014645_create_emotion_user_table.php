<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmotionUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emotion_user', function (Blueprint $table) {
            $table->increments('id')
                ->comment('ID');

            $table->unsignedInteger('user_id')
                ->comment('ユーザーID');

            $table->unsignedInteger('emotion_id')
                ->comment('感情ID');

            $table->timestamps();
            $table->softDeletes();

            # 外部キー制約
            $table->foreign('emotion_id')
                ->references('id')
                ->on('emotions');

            $table->foreign('user_id')
                ->references('id')
                ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emotion_user');
    }
}
