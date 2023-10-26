<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_menu', function (Blueprint $table) {
            $table->id();
            $table->string('nama',50)->nullable();
            $table->enum('level', ['1', '2']);
            $table->integer('id_main')->nullable();
            $table->string('dropdown',10)->nullable();
            $table->string('icon',50)->nullable();
            $table->integer('hak_akses')->nullable();
            $table->string('link',80)->nullable();
            $table->string('target',20)->nullable();
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
        Schema::dropIfExists('main_menu');
    }
}
