<?php

namespace Database\Factories\Portal;

use App\Models\Portal\Post;
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
            'post_image' => 'https://source.unsplash.com/random',
            'post_image_retina' => 'https://source.unsplash.com/random',
            'post_author' => 1,
            'post_editor' => 1,
            'post_category' => 1,
            'post_title' => $this->faker->sentence(9),
            'post_content' => $this->faker->randomHtml(),
            'post_comment' => 0,
            'post_status' => 1,
            'post_read' => 10,
            'post_headlines' => 1
        ];;
    }
}
