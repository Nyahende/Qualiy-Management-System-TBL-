<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Conclusions;

class ConclusionsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Date'=> now(),
            'Agenda'=>$this->faker->regexify('[A-Za-z0-9]{20}'),
            'Conclusions'=>$this->faker->regexify('[A-Za-z0-9]{40}'),
           'Approval'=>$this->faker->name(),
           'created_at'=>now(),
        ];
    }
}
