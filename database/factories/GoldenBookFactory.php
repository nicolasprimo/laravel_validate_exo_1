<?php

namespace Database\Factories;

use App\Models\GoldenBook;
use Illuminate\Database\Eloquent\Factories\Factory;

class GoldenBookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = GoldenBook::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "auteur" => $this->faker->name,
            "commentaire" => $this->faker->text(200),
            "note" => $this->faker->numberBetween(1,5),
        ];
    }
}
