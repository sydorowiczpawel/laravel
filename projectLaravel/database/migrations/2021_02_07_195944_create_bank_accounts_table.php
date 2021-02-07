<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBankAccountsTable extends Migration
{
    public function up()
    {
        Schema::dropIfExists('bank_accounts');

        Schema::create('bank_accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('account_number')->unique();
            $table->foreign('account_number')->references('account_number')->on('users');
            $table->string('user_id')->unique();
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->double('saldo');
        });
    }

    public function down()
    {
        Schema::dropIfExists('bank_accounts');
    }
}
