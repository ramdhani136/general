<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode');
            $table->unsignedInteger('id_asset');
            $table->foreign('id_asset')->references('id')->on('dataasset')->onDelete('cascade');
            $table->unsignedInteger('id_divisi');
            $table->foreign('id_divisi')->references('id')->on('divisi')->onDelete('cascade');
            $table->unsignedInteger('id_lokasi');
            $table->foreign('id_lokasi')->references('id')->on('lokasi')->onDelete('cascade');
            $table->unsignedInteger('id_karyawan');
            $table->foreign('id_karyawan')->references('id')->on('karyawan')->onDelete('cascade');
            $table->string('img');
            $table->string('merk');
            $table->string('tipe');
            $table->string('sn');
            $table->text('keterangan');
            $table->string('kondisi');
            $table->enum('status',['Y','N'])->default('Y');
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
        Schema::dropIfExists('assets');
    }
}
