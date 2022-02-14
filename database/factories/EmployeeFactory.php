<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'email' => 'hallo.fernando@gmail.com',
            'companie_id' => 1,
            'phone' => $this->faker->e164PhoneNumber,
            'password' => bcrypt(140398),
            'created_by_id' => '1',
            'updated_by_id' => '1'
        ];
    }
}
