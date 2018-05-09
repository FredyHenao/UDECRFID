<?php

use Illuminate\Database\Seeder;

/*
 * Modelos
 */
use App\Container\Users\Src\Areas;

class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('TBL_Areas')->insert([
            [
                'AR_Nombre' => 'Porteria'
            ],
            [
                'AR_Nombre' => 'Biblioteca'
            ],
            [
                'AR_Nombre' => 'Deportes'
            ],
            [
                'AR_Nombre' => 'Audiovisuales'
            ]
        ]);
    }
}
