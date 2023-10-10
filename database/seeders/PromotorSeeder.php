<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PromotorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('promotores')->insert(array(
            'id'=>1,
            'nombre'=>'Promotor 001',
            'sucursal_id'=>'1',
            'created_at'=>DB::raw('CURRENT_TIMESTAMP'),
            'updated_at'=>DB::raw('CURRENT_TIMESTAMP')
        ));
        DB::table('promotores')->insert(array(
            'id'=>2,
            'nombre'=>'Promotor 002',
            'sucursal_id'=>'2',
            'created_at'=>DB::raw('CURRENT_TIMESTAMP'),
            'updated_at'=>DB::raw('CURRENT_TIMESTAMP')
        ));

        DB::table('promotores')->insert(array(
            'id'=>3,
            'nombre'=>'Promotor 003',
            'sucursal_id'=>'3',
            'created_at'=>DB::raw('CURRENT_TIMESTAMP'),
            'updated_at'=>DB::raw('CURRENT_TIMESTAMP')
        ));

    }
}
