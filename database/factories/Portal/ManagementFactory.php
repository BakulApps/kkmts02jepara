<?php

namespace Database\Factories\Portal;

use App\Models\Portal\Management;
use Illuminate\Database\Eloquent\Factories\Factory;

class ManagementFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Management::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'management_name' => $this->faker->name,
            'management_position' => $this->faker->jobTitle,
            'management_desc' => $this->faker->sentence(6),
            'management_facebook' => $this->faker->userName,
            'management_twitter' => $this->faker->userName,
            'management_instagram' => $this->faker->userName,
            'management_image' => 'https://source.unsplash.com/random',
            'management_image_retina' => 'https://source.unsplash.com/random',
        ];
    }
}
