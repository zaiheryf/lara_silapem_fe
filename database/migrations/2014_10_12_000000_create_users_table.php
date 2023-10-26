<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('profilename',100)->nullable();
            $table->string('username',100)->nullable();
            $table->integer('level')->nullable();
            $table->enum('gender',['Male', 'Fimale'])->nullable();
            $table->text('profileimg')->nullable();
            $table->string('hp',15)->nullable();
            $table->string('ip',50)->nullable();
            $table->string('email',150)->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->tinyInteger('sts_aktif')->default('1')->nullable();
            $table->dateTime('last_login')->nullable();
            $table->integer('created_id')->nullable();
            $table->integer('updated_id')->nullable();
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
