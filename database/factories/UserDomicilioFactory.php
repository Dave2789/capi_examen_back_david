<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use DB;

class UserDomicilioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $userId = DB::table('users')->inRandomOrder()->value('id');

        return [
            'user_id' => $userId,
            'domicilio' => $this->faker->streetName(),
            'numero_exterior' => $this->faker->buildingNumber(),
            'colonia' => $this->faker->cityPrefix(),
            'cp'  =>  $this->faker->postcode(),
            'ciudad'    =>  $this->faker->city()
        ];
    }
}
