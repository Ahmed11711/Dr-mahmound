<?php
namespace Database\Factories;
use App\Models\Station;
use Illuminate\Database\Eloquent\Factories\Factory;
class StationFactory extends Factory {
    protected $model = Station::class;
    public function definition(): array {
        return [
            'user_id' => 1,
            'title' => $this->faker->word,
            'rating' => $this->faker->word,
            'image' => $this->faker->word,
            'address' => $this->faker->word,
            'is_active' => $this->faker->word,
        ];
    }
}