<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\MeetingTable;

class MeetingTableFactory extends Factory
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
            'Chairperson'=>$this->faker->name(),
           'Status'=>$this->faker->name(),
           'Approval'=>$this->faker->name(),
           'created_at'=>now(),
        ];
    }
}
