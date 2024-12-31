<?php

namespace Database\Factories;

use App\Models\Kelas;
use Illuminate\Database\Eloquent\Factories\Factory;

class KelasFactory extends Factory
{
    protected $model = Kelas::class;

    public function definition()
    {
        return [
            'nama_kelas' => 'Kelas ' . $this->faker->randomLetter,
            'jurusan' => $this->faker->word,
        ];
    }
}