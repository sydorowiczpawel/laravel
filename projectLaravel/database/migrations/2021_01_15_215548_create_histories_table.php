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
            $table->string('account_number');
            $table->foreign('account_number')->references('account_number')->on('users');
            $table->date('data');
            $table->string('receiver_name');
            $table->string('receiver_number');
            $table->string('title');
            $table->float('price');
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
