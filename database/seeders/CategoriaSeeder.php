<?php

namespace Database\Seeders;
use App\Models\categoria;
use App\Models\producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        categoria::factory(100)->
                has(
                    producto::factory()->count(fake()->numberBetween(1,4))
                    )->create();
    }
}
