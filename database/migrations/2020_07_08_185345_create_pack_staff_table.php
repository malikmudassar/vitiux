<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pack_staff', function (Blueprint $table) {
            $table->bigInteger('staff_id')->unsigned()->index();
            $table->bigInteger('pack_id')->unsigned()->index();

            $table->foreign('staff_id')->references('id')->on('staff');
            $table->foreign('pack_id')->references('id')->on('packs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pack_staff');
    }
}
