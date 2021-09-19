<?php

namespace Database\Factories\Portal;

use App\Models\Portal\Testimonial;
use Illuminate\Database\Eloquent\Factories\Factory;

class TestimonialFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Testimonial::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'testimonial_star' => 5,
            'testimonial_content' => $this->faker->sentence(50),
            'testimonial_name' => $this->faker->name,
            'testimonial_position' => $this->faker->jobTitle,
            'testimonial_image' => 'https://source.unsplash.com/random'
        ];
    }
}
