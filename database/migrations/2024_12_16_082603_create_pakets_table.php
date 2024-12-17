<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('paket', function (Blueprint $table) {
            $table->id('id_paket');
            $table->enum('jenis', ['Biasa', 'Express', 'Setrika', 'Bed Cover', 'Boneka']);
            $table->integer('harga');
            $table->integer('proses');
            $table->timestamps();
        });
    }
};