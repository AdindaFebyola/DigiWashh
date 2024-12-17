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
    Schema::create('members', function (Blueprint $table) {
        $table->id('id_member');
        $table->string('nama', 100);
        $table->text('alamat');
        $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
        $table->string('tlp', 15);
        $table->timestamps();
    });
}
};
