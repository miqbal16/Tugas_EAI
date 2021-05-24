<?php

namespace Database\Factories;

use App\Models\Divisi;
use Illuminate\Database\Eloquent\Factories\Factory;

class DivisiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Divisi::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_divisi' => $this->faker->randomDigit(),
            'nama_divisi' => $this->faker->company,
            'jumlah_anggota'=> $this->faker->randomDigit(),
        ];
    }
}
