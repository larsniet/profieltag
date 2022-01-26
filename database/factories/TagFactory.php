<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TagFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    return [
      'code' => $this->faker->regexify('[A-Z0-9]{6}'),
      'link' => $this->faker->url(),
    ];
  }
}
