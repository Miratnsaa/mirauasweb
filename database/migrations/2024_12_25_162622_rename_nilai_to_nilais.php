<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameNilaiToNilais extends Migration
{
    /**
     * Migrasi untuk merubah nama tabel.
     *
     * @return void
     */
    public function up()
    {
        Schema::rename('nilai', 'nilais');
    }

    /**
     * Pembatalan migrasi ini.
     *
     * @return void
     */
    public function down()
    {
        Schema::rename('nilais', 'nilai');
    }
}
