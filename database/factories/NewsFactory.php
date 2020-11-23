<?php

namespace Database\Factories;

use App\Models\News;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = News::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word,
            'user' => $this->faker->name,
            'department' => $this->faker->word,
            'informations' => $this->faker->text,
            //'date' => Carbon::now()
        ];
    }
}
