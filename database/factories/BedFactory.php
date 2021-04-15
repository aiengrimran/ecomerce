<?php

namespace Database\Factories;

use App\Models\Bed;
use Illuminate\Database\Eloquent\Factories\Factory;

class BedFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Bed::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name,
            'price' => $this->faker->numerify('####'),
            'quantity' =>$this->faker->numerify('###'),
            'image' => "storage/img/product-img/product1.jpg"
        ];
    }
}
