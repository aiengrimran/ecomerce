<?php

namespace Database\Factories;

use App\Models\Chair;
use Illuminate\Database\Eloquent\Factories\Factory;

class ChairFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Chair::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->paragraph,
            'price'=> $this->faker->numerify('#####'),
            'quantity'=> $this->faker->numerify('###'),
            'image'=>'storage/img/product-img/product6.jpg'
        ];
    }
}
