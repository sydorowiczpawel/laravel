<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('accounts');

        Schema::create('accounts', function (Blueprint $table) {
            $table->increments('id');
            // $table->unique('id');
            // $table->foreign('id')->references('id')->on('users')->onDelete('cascade');
            // $table->unique('bid');
            // $table->foreign('bid')->references('id')->on('ballances')->onDelete('cascade');
            // $table->unique('hid');
            // $table->foreign('hid')->references('id')->on('histories')->onDelete('cascade');
            $table->string('controll_number', 2);
            $table->string('bank_id', 8);
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
        Schema::dropIfExists('accounts');
    }
}
