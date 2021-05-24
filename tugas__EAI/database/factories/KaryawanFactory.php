<?php

namespace Database\Factories;

use Faker\Generator as Faker;
use App\Models\Karyawan;
use Illuminate\Database\Eloquent\Factories\Factory;

class KaryawanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Karyawan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'NIP' => $this->faker->randomNumber(),
            'id_divisi' => $this->faker->randomDigit(), 
            'no_telepon' => $this->faker->phoneNumber,
            'alamat' => $this->faker->address,
            'jabatan' => $this->faker->jobTitle,
            
        ];
    }
    
}
