<?php

namespace Database\Factories;

use App\Models\DatabaseHost;
use Illuminate\Database\Eloquent\Factories\Factory;

class DatabaseHostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DatabaseHost::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->colorName(),
            'host' => $this->faker->unique()->ipv4(),
            'port' => 3306,
            'username' => $this->faker->colorName(),
            'password' => $this->faker->word(),
        ];
    }
}
