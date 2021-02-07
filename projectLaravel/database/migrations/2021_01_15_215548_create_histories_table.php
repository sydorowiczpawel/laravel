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

        Schema::create('histories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('account_number');
            $table->foreign('account_number')->references('account_number')->on('users');
            $table->string('user_id');
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->date('data');
            $table->string('receiver_idk')->nullable();;
            $table->string('receiver_account')->nullable();
            $table->string('transaction')->nullable();
            $table->string('localization')->nullable();
            $table->string('title')->nullable();
            $table->float('quote');
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
