<?php

namespace Database\Factories;

use App\Models\Nilai;
use Illuminate\Database\Eloquent\Factories\Factory;

class NilaiFactory extends Factory
{
    protected $model = Nilai::class;

    public function definition()
    {
        return [
            'siswa_id' => \App\Models\Siswa::factory(), // Menggunakan factory untuk siswa
            'mata_pelajaran_id' => \App\Models\MataPelajaran::factory(), // Menggunakan factory untuk mata pelajaran
            'nilai' => $this->faker->numberBetween(0, 100),
        ];
    }
}