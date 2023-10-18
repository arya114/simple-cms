<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Berita>
 */
class BeritaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'judul' => fake()->sentence(),
        'konten' => fake()->paragraph(),
        'tanggal' => fake()->dateTimeThisMonth(),
        'gambar' => fake()->imageUrl(400,300),        
        ];
    }
}
