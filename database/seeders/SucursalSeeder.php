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
            'estado'=>'1',
            'created_at'=>DB::raw('CURRENT_TIMESTAMP'),
            'updated_at'=>DB::raw('CURRENT_TIMESTAMP')
            ));
    }
}
