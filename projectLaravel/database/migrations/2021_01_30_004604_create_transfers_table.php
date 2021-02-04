<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransfersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('transfers');

        Schema::create('transfers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('account_number')->unique();
            $table->foreign('account_number')->references('account_number')->on('users');
            $table->date("data");
            $table->string("reciever_name");
            $table->string("reciever_account_number");
            $table->string("title");
            $table->double('quote');
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
        Schema::dropIfExists('transfers');
    }
}
