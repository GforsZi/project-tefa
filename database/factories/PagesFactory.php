<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\pages>
 */
class PagesFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array
  {
    return [
      "user_id" => User::factory(),
      "name_page" => fake()->sentence(),
      "url_page" => fake()->sentence(),
      "caption" => fake()->sentence(),
      "description" => fake()->sentence(),
      "likes" => 1000,
    ];
  }
}
