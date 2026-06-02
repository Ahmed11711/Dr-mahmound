<?php
namespace Database\Factories;
use App\Models\UserDeposite;
use Illuminate\Database\Eloquent\Factories\Factory;
class UserDepositeFactory extends Factory {
    protected $model = UserDeposite::class;
    public function definition(): array {
        return [
            'user_id' => 1,
            'amount' => $this->faker->word,
            'user_phone' => $this->faker->word,
            'company_phone' => $this->faker->word,
            'image' => $this->faker->word,
            'status' => $this->faker->word,
            'type' => $this->faker->word,
            'note' => $this->faker->word,
        ];
    }
}