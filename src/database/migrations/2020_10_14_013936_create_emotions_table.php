<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmotionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emotions', function (Blueprint $table) {
            $table->increments('id')
                ->comment('ID');

            $table->string('name', 191)
                ->comment('感情の絵文字');

            $table->string('share_account', 191)
                ->comment('共有アカウント');

            $table->string('emotion', 191)
                ->comment('感情');

            $table->string('background', 191)
                ->comment('背景');

            $table->string('event', 191)
                ->comment('出来事');

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
        Schema::dropIfExists('emotions');
    }
}
