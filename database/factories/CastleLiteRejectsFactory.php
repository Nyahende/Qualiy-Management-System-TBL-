<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\CastleLiteRejects;
use Illuminate\Support\Str;

class CastleLiteRejectsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

     protected $model = \App\Models\CastleLiteRejects::class;


    public function definition()
    {
        return [
            'Name' => $this->faker->name(),
            'Quantity'=> $this->faker->unique()->randomNumber(),
            'Date'=> now(),
            'Approval'=>$this->faker->name(),
            'created_at'=>now(),
        ];
    }
    }
