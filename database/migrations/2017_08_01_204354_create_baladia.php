<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBaladia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baladias', function (Blueprint $table) {
            $table->increments('id');
			$table->string('nom');
            $table->timestamps();
			$table->integer('id_daira')->unsigned();
			$table->foreign('id_daira')->references('id')->on('dairas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('baladias');
    }
}
