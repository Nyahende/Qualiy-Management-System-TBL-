<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\TransDepTraining;

class TransDepTrainingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Title'=>$this->faker->regexify('[A-Za-z0-9]{10}'),
            'Participants'=>$this->faker->regexify('[A-Za-z0-9]{20}'),
           'Starts'=>now(),
           'Ends'=>now(),
           'Approval'=>$this->faker->name(),
           'created_at'=>now(),
        ];
    }
}
