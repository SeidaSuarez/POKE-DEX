<?php

namespace Database\Factories;

use App\Models\Pokemon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pokemon>
 */
class PokemonFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pokemon::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'poke_name' => $this->faker->word,
            'type' => $this->faker->randomElement(['Normal', 'Fire', 'Water', 'Electric', 'Grass', 'Ice', 'Fighting', 'Poison', 'Ground', 'Flying', 'Psychic', 'Bug', 'Rock', 'Ghost', 'Dark', 'Steele', 'Fairy', 'Dragon']),
            'subtype' => $this->faker->randomElement(['Normal', 'Fire', 'Water', 'Electric', 'Grass', 'Ice', 'Fighting', 'Poison', 'Ground', 'Flying', 'Psychic', 'Bug', 'Rock', 'Ghost', 'Dark', 'Steele', 'Fairy', 'Dragon']),
            'region' => $this->faker->randomElement(['Kanto', 'Johto', 'Sinnoh', 'Hisui', 'Paldea', 'Hoenn', 'Unova', 'Kalos', 'Alola', 'Galar']),
            'user_id' => \App\Models\User::factory(),
        ];
    }
}
