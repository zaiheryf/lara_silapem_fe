<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_menu', function (Blueprint $table) {
            $table->id();
            $table->string('kode',3)->nullable();
            $table->string('nama',100)->nullable();
            $table->string('kategori',100)->nullable();
            $table->string('harga',10)->nullable();
            $table->text('img')->nullable();
            $table->text('deskripsi')->nullable();
            $table->string('status',100)->nullable();
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
        Schema::dropIfExists('master_menu');
    }
}
