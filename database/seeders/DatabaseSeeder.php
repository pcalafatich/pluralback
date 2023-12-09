<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this->call([
            ComercioSeeder::class,
            ImagenSeeder::class,
            LocalidadSeeder::class,
            PromotorSeeder::class,
            ProvinciaSeeder::class,
            RubroSeeder::class,
            SucursalSeeder::class,
            CobroSeeder::class,
            CobroSucursalSeeder::class,
//            UserSeeder::class,
            DescuentoSeeder::class,
            VencimientoSeeder::class,
            ConfigSeeder::class
        ]);
    }
}
