<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffVideoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_video', function (Blueprint $table) {
            $table->bigInteger('staff_id')->unsigned()->index();
            $table->bigInteger('video_id')->unsigned()->index();

            $table->foreign('staff_id')->references('id')->on('staff');
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
        Schema::dropIfExists('staff_video');
    }
}
