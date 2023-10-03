<?php

namespace Database\Factories;

use App\Models\customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\customer>
 */
class CustomerFactory extends Factory
{
    protected $model = customer::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name_customer' =>$this->faker->name(),
            'phone_customer' => $this->faker->phoneNumber(),
            'address_customer' => $this->faker->address(),
            'mail_customer' => $this->faker->unique()->email(), // password
            'city_customer' => $this->faker->city(),
        ];
    }
}
