<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resrooms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('in_room');
            $table->dateTime('out_room');
            $table->integer('room_id');
            $table->integer('reservation_id');
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
        Schema::dropIfExists('resrooms');
    }
}
