<?php

namespace Database\Factories;
use Faker\Generator as Faker;
use App\Models\Kehadiran;
use Illuminate\Database\Eloquent\Factories\Factory;

class KehadiranFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Kehadiran::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_kehadiran' => $this->faker->unique()->randomDigit(),
            'NIP' => $this->faker->randomNumber(),
            'tanggal' => $this->faker->dateTime(),
            'jam_datang' => $this->faker->time(),
            'jam_pulang' => $this->faker->time(),
            'keterangan' => $this->faker->sentence(),
            'total_jam_kerja' => $this->faker->randomDigit(),
            
        ];
    }
}
