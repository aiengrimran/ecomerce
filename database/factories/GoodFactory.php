<?php

namespace Database\Factories;

use App\Models\Good;
use Illuminate\Database\Eloquent\Factories\Factory;

class GoodFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Good::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'category_id'=>3,
           'title'=> $this->faker->name,
           'price'=> $this->faker->randomNumber($nbDigits = 3, $strict = false),
           'descrption'=> $this->faker->sentence($nbWords = 6, $variableNbWords = true),
           'qty'=> $this->faker->randomDigitNot(0),

        ];
    }
}
