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
                'image' => $this->faker->file($sourceDir, $targetDir, false),
                'end_date' => $this->faker->dateTime($max='now', $timezone = null),
                'tag' => $this->faker->stri(),
                'rrp' => $this->faker->rrp(),
                'min_bid' => $this->faker->min_bid(),
              
               
        ];
    }
}
