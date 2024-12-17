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
    Schema::create('users', function (Blueprint $table) {
        $table->id('id_user');
        $table->string('nama', 100);
        $table->string('username', 30)->unique();
        $table->text('password');
        $table->timestamps();
    });
}
};