<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
        $firstName = $this->faker->firstName();

        return [
            'first_name' => $firstName,
            'middle_name' => $this->faker->lastName(),
            'last_name' => $this->faker->lastName(),
            'nickname' => $firstName,
            'email' => $this->faker->unique()->safeEmail(),
            'birthday' => $this->faker->dateTimeThisCentury(),
            'address' => $this->faker->address(),
            'mobile_phone' =>$this->faker->phoneNumber,
            'designation' => 'Sales'

        ];
    }
}
