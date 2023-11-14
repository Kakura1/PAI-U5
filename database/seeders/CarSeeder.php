<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Car;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $carrito = new Car();
        $carrito->name = 'Bocho';
        $carrito->description = 'Bocho de la familia';
        $carrito->year = 2003;
        $carrito->save();
        Car::factory()->count(10)->create();
    }
}
