<?php

namespace Database\Factories;

use App\Models\ModuleCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class ModuleCategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ModuleCategory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name,
            'status'=>1
        ];
    }
}
