<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('histories');

        Schema::create('histories', function (Blueprint $table) {
            $table->increments('id');
            // $table->unique('id');
            // $table->foreign('id')->references('id')->on('users')->onDelete('cascade');
            $table->string('transaction');
            $table->string('localization');
            $table->double('cuote');
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
        Schema::dropIfExists('histories');
    }
}
