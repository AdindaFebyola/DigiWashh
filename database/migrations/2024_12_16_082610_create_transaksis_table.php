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
    Schema::create('transaksi', function (Blueprint $table) {
        $table->id('id_transaksi');
        $table->foreignId('id_member')->constrained('members', 'id_member');
        $table->foreignId('id_user')->constrained('users', 'id_user');
        $table->date('tgl');
        $table->date('batas_waktu');
        $table->date('tgl_bayar')->nullable();
        $table->enum('status', ['Baru', 'Proses', 'Selesai', 'Diambil']);
        $table->enum('dibayar', ['Dibayar', 'Belum_Dibayar']);
        $table->timestamps();
    });
}
};