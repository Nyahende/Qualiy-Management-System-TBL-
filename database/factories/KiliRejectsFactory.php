<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\KiliRejects;
use Illuminate\Support\Str;

class KiliRejectsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = \App\Models\KiliRejects::class;

    public function definition()
    {
        return [
            'Name' => 'Kilimanjaro',
            'Quantity'=> $this->faker->unique()->randomNumberBetween(100,500),
            'Date'=> now(),
            'Approval'=>$this->faker->name(),
            'created_at'=>now(),
        ];
    }
}
