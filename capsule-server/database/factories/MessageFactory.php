<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MessageFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'message' => fake()->paragraph(),
            'mood' => fake()->randomElement(['happy', 'sad', 'angry', 'excited', 'calm']),
            'image' => fake()->imageUrl(640, 480, 'messages', true),
            'audio' => fake()->url(),
            'revealdate' => fake()->dateTimeBetween('now', '+1 year'),
            'privacy' => fake()->randomElement(['private', 'public', 'limited']), // Corrected line
            'location' => fake()->city() . ', ' . fake()->country(),
            'ipaddress' => fake()->ipv4(),
        ];
    }
}