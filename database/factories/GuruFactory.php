<?php

namespace Database\Factories;

use App\Models\Guru;
use Illuminate\Database\Eloquent\Factories\Factory;

class GuruFactory extends Factory
{
    protected $model = Guru::class;

    public function definition()
    {
        return [
            'nama' => $this->faker->name,
            'mata_pelajaran' => $this->faker->word,
            'alamat' => $this->faker->address,
        ];
    }
}