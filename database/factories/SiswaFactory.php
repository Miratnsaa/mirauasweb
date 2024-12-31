<?php

namespace Database\Factories;

use App\Models\Siswa;
use Illuminate\Database\Eloquent\Factories\Factory;

class SiswaFactory extends Factory
{
    protected $model = Siswa::class;

    public function definition()
    {
        return [
            'nama' => $this->faker->name,
            'tanggal_lahir' => $this->faker->date,
            'alamat' => $this->faker->address,
        ];
    }
}