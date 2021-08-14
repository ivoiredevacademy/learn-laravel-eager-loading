<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            "title" => $this->faker->sentence(3),
            "content" => $this->faker->text(10),
            "user_id" => User::factory()->create()->id,
            "category_id" => Category::factory()->create()->id
        ];
    }
}
