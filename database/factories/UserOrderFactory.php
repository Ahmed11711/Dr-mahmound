<?php
namespace Database\Factories;
use App\Models\UserOrder;
use Illuminate\Database\Eloquent\Factories\Factory;
class UserOrderFactory extends Factory {
    protected $model = UserOrder::class;
    public function definition(): array {
        return [
            'user_id' => 1,
            'order_id' => 1,
            'seats_count' => $this->faker->word,
            'price' => $this->faker->word,
            'payment_status' => $this->faker->word,
            'payment_method' => $this->faker->word,
            'transaction_id' => 1,
            'status' => $this->faker->word,
        ];
    }
}