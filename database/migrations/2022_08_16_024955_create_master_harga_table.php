<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHargaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_harga', function (Blueprint $table) {
            $table->id();
            $table->string('kode_tempatwisata',5)->nullable();
            $table->string('nama_harga',50)->nullable();
            $table->string('harga',10)->nullable();
            $table->string('discount',10)->nullable();
            $table->string('satuan',50)->nullable();
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
