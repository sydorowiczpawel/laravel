<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBallancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('ballances');

        Schema::create('ballances', function (Blueprint $table) {
            $table->increments('id');
            // $table->unique('id');
            // $table->foreign('id')->references('id')->on('accounts')->onDelete('cascade');
            $table->string('account_number', 16);
            $table->double('ballance', 8, 2);
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
        Schema::dropIfExists('ballances');
    }
}
