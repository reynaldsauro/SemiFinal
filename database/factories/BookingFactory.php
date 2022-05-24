<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'captain' => $this->faker->unique()->randomElement(["Capt. Barbel", "Capt. America", "Capt. Sauro", "Capt. Teodoro", "Capt. Agnes", "Capt. Helen", "Capt. Ken", "Capt. Tiago"]),
            'ship_name' => $this->faker->unique()->randomElement(["Dragon Lines","MV Star Craft","Fast Cat","Cockaliong", "MV Bogtiil", "Fast Craft", "Trans Asia", "Titanic"]),
            'destination' => $this->faker->unique()->randomELement(["Cebu-Bohol", "Bohol-Davao", "Bohol-Japan", "Cebu-Mexico", "Bohol-Manila", "Bohol-Sulu", "Cebu-Ozamis", "Bohol-USA"]),
            'departure' => $this->faker->randomElement(["7:30", "7:30", "10:00", "8:30", "9:00"]),
            'passenger_name'=>$this->faker->name,

        ];
    }
}
