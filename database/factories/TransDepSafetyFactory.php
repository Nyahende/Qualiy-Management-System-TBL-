<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\TransDepSafety;

class TransDepSafetyFactory extends Factory
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
            'Size'=>$this->faker->regexify('[A-Za-z0-9]{20}'),
           'Quantity'=>$this->faker->name(),
           'created_at'=>now(),
        ];
    }
}
