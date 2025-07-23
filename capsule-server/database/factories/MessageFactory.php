<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MessageFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => rand(1,20),
            'title'=>fake()->sentence(3),
            'message' => fake()->paragraph(),
            'mood' => fake()->randomElement(['happy', 'sad', 'angry', 'excited', 'calm']),
            'image' => fake()->imageUrl(640, 480, 'messages', true),
            'audio' => fake()->url(),
            'color' => fake()->colorName(),
            'reveal_date' => fake()->dateTimeBetween('now', '+1 year'),
            'privacy' => fake()->randomElement(['private', 'public', 'limited']),
            'surprise_mode' => fake()->boolean(),
            'location' => fake()->city() . ', ' . fake()->country(),
            'ipaddress' => fake()->ipv4(),
        ];
    }
}