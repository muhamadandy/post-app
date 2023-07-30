<?php

namespace Database\Factories;

use App\Models\Beranda;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Beranda>
 */
class BerandaFactory extends Factory
{
    protected $model = Beranda::class;

    public function definition(): array
    {
        return [
            "body" => $this->faker->sentence(20),
        ];
    }
}