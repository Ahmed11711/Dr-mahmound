<?php
namespace Database\Factories;
use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;
class OrderFactory extends Factory {
    protected $model = Order::class;
    public function definition(): array {
        return [
            'user_id' => 1,
            'driver_id' => 1,
            'station_id' => 1,
            'departure_time' => $this->faker->word,
            'total_seats' => $this->faker->word,
            'available_seats' => $this->faker->word,
            'seat_price' => $this->faker->word,
            'status' => $this->faker->word,
            'notes' => $this->faker->word,
        ];
    }
}