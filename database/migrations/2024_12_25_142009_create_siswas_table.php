<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('siswas', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->date('tanggal_lahir');
        $table->text('alamat');
        $table->timestamps();
    });
}
};
