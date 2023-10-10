<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CobroSucursalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cobros_sucursales')->insert(array(
            'id'=>1,
            'sucursal_id' =>'1',
            'fecha_cobro' =>'2023-10-10',
            'importe' => '45000',
            'mes_comision' => '10',
            'anio_comision' => '2023',
            'estado' => '1',
            'cobrador' => 'Juan Perez',
            'created_at'=>DB::raw('CURRENT_TIMESTAMP'),
            'updated_at'=>DB::raw('CURRENT_TIMESTAMP')
        ));

        DB::table('cobros_sucursales')->insert(array(
            'id'=>2,
            'sucursal_id' =>'2',
            'fecha_cobro' =>'2023-10-10',
            'importe' => '18000',
            'mes_comision' => '10',
            'anio_comision' => '2023',
            'estado' => '1',
            'cobrador' => 'Juan Perez',
            'created_at'=>DB::raw('CURRENT_TIMESTAMP'),
            'updated_at'=>DB::raw('CURRENT_TIMESTAMP')
        ));
    }
}
