<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SucursalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sucursales')->insert(array(
            'id'=>1,
            'nombre'=>'Sucursal 001',
            'domicilio'=>'Av Independencia 1234',
            'localidad_id' => 173,
            'estado'=>1,
            'created_at'=>DB::raw('CURRENT_TIMESTAMP'),
            'updated_at'=>DB::raw('CURRENT_TIMESTAMP')
        ));
        DB::table('sucursales')->insert(array(
            'id'=>2,
            'nombre'=>'Sucursal 002',
            'domicilio'=>'Av Colón 4567',
            'localidad_id' => 173,
            'estado'=>1,
            'created_at'=>DB::raw('CURRENT_TIMESTAMP'),
            'updated_at'=>DB::raw('CURRENT_TIMESTAMP')
        ));
        DB::table('sucursales')->insert(array(
            'id'=>3,
            'nombre'=>'Sucursal 003',
            'domicilio'=>'Av Luro 9632',
            'localidad_id' => 173,
            'estado'=>1,
            'created_at'=>DB::raw('CURRENT_TIMESTAMP'),
            'updated_at'=>DB::raw('CURRENT_TIMESTAMP')
        ));
    }
}
