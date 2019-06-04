<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('l_users', function (Blueprint $table) {
            $table->increments('userid');
            $table->string('firstname', 50);
            $table->string('lastname', 50);
            $table->string('gender', 6);
            $table->string('email', 150);
            $table->string('username', 30);
            $table->string('password', 250);
            $table->string('mobile', 15);
            $table->date('date_of_birth');
            $table->dateTime('create_on');
            $table->dateTime('update_on');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('l_users');
    }
}
