<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameMataPelajaranToMataPelajarans extends Migration
{
    /**
     * Migrasi untuk merubah nama tabel.
     *
     * @return void
     */
    public function up()
    {
        Schema::rename('mata_pelajaran', 'mata_pelajarans');
    }

    /**
     * Pembatalan migrasi ini.
     *
     * @return void
     */
    public function down()
    {
        Schema::rename('mata_pelajarans', 'mata_pelajaran');
    }
}
