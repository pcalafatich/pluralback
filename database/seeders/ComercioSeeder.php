<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComercioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comercios')->insert(array(
            'id'=>1,
            'denominacion'=>'Comercio 001',
            'razon_social'=>'La Primera SRL',
            'sucursal_id'=>1,
            'zona'=>'1',
            'promotor_id'=>'1',
            'responsable'=>'Pablo Calafatich',
            'logo'=>'',
            'calle'=>'Av Libertad',
            'altura'=>3165,
            'piso'=>'3',
            'local'=>'B',
            'telefono'=>'2236030343',
            'localidad_id'=>1,
            'cuit'=>'20181270145',
            'fecha_alta'=>'04/07/2023',
            'ingresos_brutos'=>'20181270145',
            'tasa_descuento'=>10,
            'email'=>'pcalafatich@gmail.com',
            'password'=>'MardelPlata2019',
            'web'=>'raitnaudigital.com',
            'facebook'=>'No posee',
            'instagram'=>'No posee',
            'twitter'=>'No posee',
            'estado'=>1,
            'created_at'=>DB::raw('CURRENT_TIMESTAMP'),
            'updated_at'=>DB::raw('CURRENT_TIMESTAMP')
            ));

        DB::table('comercios')->insert(array(
            'id'=>2,
            'denominacion'=>'Comercio 002',
            'razon_social'=>'La Segunda SRL',
            'sucursal_id'=>1,
            'zona'=>'1',
            'promotor_id'=>'1',
            'responsable'=>'Pablo Calafatich',
            'logo'=>'',
            'calle'=>'Av Libertad',
            'altura'=>3165,
            'piso'=>'3',
            'local'=>'B',
            'telefono'=>'2236030343',
            'localidad_id'=>1,
            'cuit'=>'20181270145',
            'fecha_alta'=>'04/07/2023',
            'ingresos_brutos'=>'20181270145',
            'tasa_descuento'=>10,
            'email'=>'pcalafatich@gmail.com',
            'password'=>'MardelPlata2019',
            'web'=>'raitnaudigital.com',
            'facebook'=>'No posee',
            'instagram'=>'No posee',
            'twitter'=>'No posee',
            'estado'=>1,
            'created_at'=>DB::raw('CURRENT_TIMESTAMP'),
            'updated_at'=>DB::raw('CURRENT_TIMESTAMP')
            ));

        DB::table('comercios')->insert(array(
        'id'=>3,
        'denominacion'=>'Comercio 003',
        'razon_social'=>'La Tercera SRL',
        'sucursal_id'=>1,
        'zona'=>'1',
        'promotor_id'=>'1',
        'responsable'=>'Pablo Calafatich',
        'logo'=>'',
        'calle'=>'Av Libertad',
        'altura'=>3165,
        'piso'=>'3',
        'local'=>'B',
        'telefono'=>'2236030343',
        'localidad_id'=>1,
        'cuit'=>'20181270145',
        'fecha_alta'=>'04/07/2023',
        'ingresos_brutos'=>'20181270145',
        'tasa_descuento'=>10,
        'email'=>'pcalafatich@gmail.com',
        'password'=>'MardelPlata2019',
        'web'=>'raitnaudigital.com',
        'facebook'=>'No posee',
        'instagram'=>'No posee',
        'twitter'=>'No posee',
        'estado'=>1,
        'created_at'=>DB::raw('CURRENT_TIMESTAMP'),
        'updated_at'=>DB::raw('CURRENT_TIMESTAMP')
        ));

        DB::table('comercios')->insert(array(
        'id'=>4,
        'denominacion'=>'Comercio 004',
        'razon_social'=>'La Cuarta SA',
        'sucursal_id'=>1,
        'zona'=>'1',
        'promotor_id'=>'1',
        'responsable'=>'Leo Guerriero',
        'logo'=>'',
        'calle'=>'Av Libertad',
        'altura'=>3165,
        'piso'=>'3',
        'local'=>'B',
        'telefono'=>'2236030343',
        'localidad_id'=>1,
        'cuit'=>'27181270147',
        'fecha_alta'=>'04/07/2023',
        'ingresos_brutos'=>'20181270145',
        'tasa_descuento'=>10,
        'email'=>'leoguerriero2@gmail.com',
        'password'=>'MardelPlata2019',
        'web'=>'raitnaudigital.com',
        'facebook'=>'No posee',
        'instagram'=>'No posee',
        'twitter'=>'No posee',
        'estado'=>1,
        'created_at'=>DB::raw('CURRENT_TIMESTAMP'),
        'updated_at'=>DB::raw('CURRENT_TIMESTAMP')
        ));

    }
}
