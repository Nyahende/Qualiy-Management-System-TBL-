<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\AuditHistory;

class AuditHistoryFactory extends Factory
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
             'Audit_Type'=>$this->faker->name(),
            'Status'=> $this->faker->name(),
            'Approval'=>$this->faker->name(),
            'created_at'=>now(),
        ];
    }
}
