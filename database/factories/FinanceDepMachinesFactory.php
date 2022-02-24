<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\FinanceDepMachines;

class FinanceDepMachinesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Name'=>$this->faker->name(),
            'For'=>$this->faker->regexify('[A-Za-z0-9]{20}'),
           'Operator'=>$this->faker->name(),
           'Status'=>$this->faker->regexify('[A-Za-z0-9]{10}'),
           'created_at'=>now(),
        ];
    }
}
