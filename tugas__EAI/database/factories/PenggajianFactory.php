<?php

namespace Database\Factories;

use App\Models\Penggajian;
use Illuminate\Database\Eloquent\Factories\Factory;

class PenggajianFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Penggajian::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'NIP' => $this->faker->randomNumber(),
            'id_kehadiran' => $this->faker->randomDigit(),
            'total_gaji' => $this->faker->numberBetween($min = 2000000, $max = 100000000),
            
        ];
    }
}
