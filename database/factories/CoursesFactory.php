<?php
namespace Database\Factories;
use App\Models\Courses;
use Illuminate\Database\Eloquent\Factories\Factory;
class CoursesFactory extends Factory {
    protected $model = Courses::class;
    public function definition(): array {
        return [
            'title' => $this->faker->word,
            'description' => $this->faker->word,
            'image' => $this->faker->word,
            'duration_hours' => $this->faker->word,
            'price' => $this->faker->word,
            'discount_price' => $this->faker->word,
            'discount_start' => $this->faker->word,
            'discount_end' => $this->faker->word,
            'info' => $this->faker->word,
            'file_path' => $this->faker->word,
            'rating' => $this->faker->word,
        ];
    }
}