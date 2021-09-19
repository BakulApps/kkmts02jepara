<?php

namespace Database\Factories\Portal;

use App\Models\Portal\Galery;
use Illuminate\Database\Eloquent\Factories\Factory;

class GaleryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Galery::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'galery_image' => json_encode([
                'https://source.unsplash.com/random',
                'https://source.unsplash.com/random',
                'https://source.unsplash.com/random',
                'https://source.unsplash.com/random',
                'https://source.unsplash.com/random',
                'https://source.unsplash.com/random',
                'https://source.unsplash.com/random',
            ]),
            'galery_name' => $this->faker->sentence('6')
        ];
    }
}
