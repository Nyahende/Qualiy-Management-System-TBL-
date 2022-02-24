<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\NonConformity;

class NonConformityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Non_Conformity'=>$this->faker->regexify('[A-Za-z0-9]{20}'),
             'Preventive_Action'=>$this->faker->regexify('[A-Za-z0-9]{20}'),
            'Date'=> now(),
            'Approval'=>$this->faker->name(),
            'created_at'=>now(),
        ];
    }
}
