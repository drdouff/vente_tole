<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $category_name = $this->faker->unique()->words($nb=2,$asText=true);
        //$category_name = $this->faker->unique()->numberBetween(1,20);
        $slug = Str::slug($category_name);
        return [
            'name' => $category_name,
            'slug' => $slug,
        ];
    }
    
}
