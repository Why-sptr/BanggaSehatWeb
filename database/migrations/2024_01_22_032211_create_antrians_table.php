<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('antrians', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('dokter_id');
            $table->unsignedBigInteger('user_id');
            $table->date('tanggal');
            $table->date('selected_date');
            $table->string('jam');
            $table->string('nomor_antrian')->nullable();
            $table->string('nama_pasien')->nullable();
            $table->string('hp_pasien')->nullable();
            $table->string('status')->default('proses');
            $table->timestamps();
    
            $table->foreign('dokter_id')->references('id')->on('dokters')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('antrians');
    }
};
