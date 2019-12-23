<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentalRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rental_records', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamp('rental_start');
            $table->timestamp('rental_stop');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rental_records');
    }
}
