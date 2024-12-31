<?php

namespace Database\Factories;

use App\Models\MataPelajaran;
use Illuminate\Database\Eloquent\Factories\Factory;

class MataPelajaranFactory extends Factory
{
    protected $model = MataPelajaran::class;

    public function definition()
    {
        return [
            'nama_mata_pelajaran' => $this->faker->word,
            'sks' => $this->faker->numberBetween(1, 6),
        ];
    }
}