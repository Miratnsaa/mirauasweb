<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'tanggal_lahir', 'alamat'];

    public function nilai()
    {
        return $this->hasMany(Nilai::class);
    }
}