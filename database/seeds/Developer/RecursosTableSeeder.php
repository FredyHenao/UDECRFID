<?php

use Illuminate\Database\Seeder;

/*
 * Modelos
 */
use App\Container\Users\Src\Recursos;

class RecursosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('TBL_Recursos')->insert([
            [    //PORTERIA
                'RE_Nombre' => 'Entrada y salida porteria',
                'RE_Cantidad' => 0,
                'FK_AreasId' => 1,
            ],
            [    //BIBLIOTECA
                'RE_Nombre' => 'Entrada y salida biblioteca',
                'RE_Cantidad' => 0,
                'FK_AreasId' => 2,
            ],
            [
                'RE_Nombre' => 'Libros',
                'RE_Cantidad' => 500,
                'FK_AreasId' => 2,
            ],
            [
                'RE_Nombre' => 'Portátiles',
                'RE_Cantidad' => 50,
                'FK_AreasId' => 2,
            ],
            [
                'RE_Nombre' => 'Revistas',
                'RE_Cantidad' => 100,
                'FK_AreasId' => 2,
            ],
            [    //DEPORTES
                'RE_Nombre' => 'Balón Futbol',
                'RE_Cantidad' => 20,
                'FK_AreasId' => 3,
            ],
            [
                'RE_Nombre' => 'Balón Voley',
                'RE_Cantidad' => 15,
                'FK_AreasId' => 3,
            ],
            [
                'RE_Nombre' => 'Raquetas Ping Pong',
                'RE_Cantidad' => 4,
                'FK_AreasId' => 3,
            ],
            [
                'RE_Nombre' => 'Pelota de Ping Pong',
                'RE_Cantidad' => 5,
                'FK_AreasId' => 3,
            ],
            [    //AUDIOVISUALES
                'RE_Nombre' => 'Cables TV',
                'RE_Cantidad' => 50,
                'FK_AreasId' => 4,
            ],
            [
                'RE_Nombre' => 'Video Beam',
                'RE_Cantidad' => 5,
                'FK_AreasId' => 4,
            ],
            [
                'RE_Nombre' => 'Controles',
                'RE_Cantidad' => 50,
                'FK_AreasId' => 4,
            ]
        ]);
    }
}
