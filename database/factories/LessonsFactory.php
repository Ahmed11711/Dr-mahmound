<?php
namespace Database\Factories;
use App\Models\Lessons;
use Illuminate\Database\Eloquent\Factories\Factory;
class LessonsFactory extends Factory {
    protected $model = Lessons::class;
    public function definition(): array {
        return [
            'chapter_id' => 1,
            'title' => $this->faker->word,
            'video_path' => $this->faker->word,
            'is_free' => $this->faker->word,
            'info' => $this->faker->word,
            'order' => $this->faker->word,
        ];
    }
}