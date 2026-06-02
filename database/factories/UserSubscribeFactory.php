<?php
namespace Database\Factories;
use App\Models\UserSubscribe;
use Illuminate\Database\Eloquent\Factories\Factory;
class UserSubscribeFactory extends Factory {
    protected $model = UserSubscribe::class;
    public function definition(): array {
        return [
            'user_id' => 1,
            'course_id' => 1,
            'payment_method' => $this->faker->word,
            'receipt_image' => $this->faker->word,
            'status' => $this->faker->word,
            'admin_note' => $this->faker->word,
        ];
    }
}