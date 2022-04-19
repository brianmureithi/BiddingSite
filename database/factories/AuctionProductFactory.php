<?php

namespace Database\Factories;
use App\Models\AuctionProduct;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AutionProduct>
 */
class AuctionProductFactory extends Factory
{
    protected $model = AuctionProduct::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        
        return [
           
                'name' => $this->faker->name(),
                'description' => $this->faker->paragraph(),
                'image' => $this->faker->text,
                'end_date' => $this->faker->dateTime($max='now', $timezone = null),
                'tag' => $this->faker->stateAbbr(),
                'rrp' => $this->faker->phonenumber(),
                'min_bid' => $this->faker->phonenumber(),
              
               
        ];
    }
}
