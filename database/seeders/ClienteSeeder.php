<?php

namespace Database\Seeders;
use App\Models\cliente;
use App\Models\venta;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        cliente::factory(100)->
                has(
                    venta::factory()->count(3) 
                    )->create();
    }
}
