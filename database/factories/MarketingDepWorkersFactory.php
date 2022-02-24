<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\MarketingDepWorkers;

class MarketingDepWorkersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Full_Name'=>$this->faker->name(),
            'Education'=>$this->faker->regexify('[A-Za-z0-9]{20}'),
           'Experience'=>$this->faker->regexify('[A-Za-z0-9]{20}'),
           'Employment_Type'=>$this->faker->regexify('[A-Za-z0-9]{20}'),
           'Position'=>$this->faker->regexify('[A-Za-z0-9]{20}'),
           'Since'=>now(),
           'Until'=>now(),
           'Disability'=>$this->faker->regexify('[A-Za-z0-9]{20}'),
           'Extra'=>$this->faker->regexify('[A-Za-z0-9]{20}'),
           'created_at'=>now(),
        ];
    }
}
