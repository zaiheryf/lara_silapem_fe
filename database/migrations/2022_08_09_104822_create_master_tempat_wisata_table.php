<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterTempatWisataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_tempat_wisata', function (Blueprint $table) {
            $table->id();
            $table->string('kode',5)->nullable();
            $table->string('nama',50)->nullable();
            $table->integer('kode_kategori')->nullable();
            $table->string('nama_kategori',50)->nullable();
            $table->text('img')->nullable();
            $table->text('alamat')->nullable();
            $table->string('status',100)->nullable();
            $table->double('lat')->nullable();
            $table->double('long')->nullable();
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
        Schema::dropIfExists('table');
    }
}
