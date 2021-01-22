<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackVideoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pack_video', function (Blueprint $table) {
            $table->bigInteger('pack_id')->unsigned()->index();
            $table->bigInteger('video_id')->unsigned()->index();

            $table->foreign('pack_id')->references('id')->on('packs');
            $table->foreign('video_id')->references('id')->on('videos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pack_video');
    }
}
