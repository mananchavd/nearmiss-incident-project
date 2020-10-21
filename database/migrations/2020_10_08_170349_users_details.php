<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UsersDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_details', function (Blueprint $table) {
            $table->bigIncrements('rid');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->string('type');
            $table->string('access');
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
        Schema::dropIfExists('nmidatabase');
    }
}
