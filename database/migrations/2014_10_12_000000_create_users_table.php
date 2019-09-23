<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('mobile')->nullable();
            $table->string('current')->nullable();
            $table->string('permanent')->nullable();
            $table->string('occupation')->nullable();
            $table->string('email')->unique();
            $table->string('nid')->nullable();
            $table->string('owner_id')->nullable();
            $table->string('floor_no')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('role_id');
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
