<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provincias')->insert(array('nombre'=>'Buenos Aires'));
        DB::table('provincias')->insert(array('nombre'=>'CABA'));
        DB::table('provincias')->insert(array('nombre'=>'Catamarca'));
        DB::table('provincias')->insert(array('nombre'=>'Chaco'));
        DB::table('provincias')->insert(array('nombre'=>'Chubut'));
        DB::table('provincias')->insert(array('nombre'=>'Córdoba'));
        DB::table('provincias')->insert(array('nombre'=>'Corrientes'));
        DB::table('provincias')->insert(array('nombre'=>'Entre Ríos'));
        DB::table('provincias')->insert(array('nombre'=>'Formosa'));
        DB::table('provincias')->insert(array('nombre'=>'Jujuy'));
        DB::table('provincias')->insert(array('nombre'=>'La Pampa'));
        DB::table('provincias')->insert(array('nombre'=>'La Rioja'));
        DB::table('provincias')->insert(array('nombre'=>'Mendoza'));
        DB::table('provincias')->insert(array('nombre'=>'Misiones'));
        DB::table('provincias')->insert(array('nombre'=>'Neuquén'));
        DB::table('provincias')->insert(array('nombre'=>'Río Negro'));
        DB::table('provincias')->insert(array('nombre'=>'Salta'));
        DB::table('provincias')->insert(array('nombre'=>'San Juan'));
        DB::table('provincias')->insert(array('nombre'=>'San Luis'));
        DB::table('provincias')->insert(array('nombre'=>'Santa Cruz'));
        DB::table('provincias')->insert(array('nombre'=>'Santa Fe'));
        DB::table('provincias')->insert(array('nombre'=>'Santiago del Estero'));
        DB::table('provincias')->insert(array('nombre'=>'Tierra del Fuego'));
        DB::table('provincias')->insert(array('nombre'=>'Tucumán'));
    }

}
