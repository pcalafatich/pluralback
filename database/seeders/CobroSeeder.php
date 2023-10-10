<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CobroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cobros')->insert(array(
            'id'=>1,
            'comercio_id' =>'1',
            'fecha_cobro' =>'2023-10-10',
            'importe' => '4500',
            'mes_abono' => '10',
            'anio_abono' => '2023',
            'user_id' => '1',
            'created_at'=>DB::raw('CURRENT_TIMESTAMP'),
            'updated_at'=>DB::raw('CURRENT_TIMESTAMP')
        ));

        DB::table('cobros')->insert(array(
            'id'=>2,
            'comercio_id' =>'3',
            'fecha_cobro' =>'2023-10-10',
            'importe' => '4500',
            'mes_abono' => '10',
            'anio_abono' => '2023',
            'user_id' => '1',
            'created_at'=>DB::raw('CURRENT_TIMESTAMP'),
            'updated_at'=>DB::raw('CURRENT_TIMESTAMP')
        ));

        DB::table('cobros')->insert(array(
            'id'=>3,
            'comercio_id' =>'4',
            'fecha_cobro' =>'2023-10-10',
            'importe' => '4500',
            'mes_abono' => '10',
            'anio_abono' => '2023',
            'user_id' => '1',
            'created_at'=>DB::raw('CURRENT_TIMESTAMP'),
            'updated_at'=>DB::raw('CURRENT_TIMESTAMP')
        ));

        DB::table('cobros')->insert(array(
            'id'=>4,
            'comercio_id' =>'4',
            'fecha_cobro' =>'2023-10-10',
            'importe' => '4500',
            'mes_abono' => '10',
            'anio_abono' => '2023',
            'user_id' => '1',
            'created_at'=>DB::raw('CURRENT_TIMESTAMP'),
            'updated_at'=>DB::raw('CURRENT_TIMESTAMP')
        ));

    }
}
