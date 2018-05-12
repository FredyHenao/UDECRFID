<?php

use Illuminate\Database\Seeder;

/*
 * Modelos
 */


class ProgramasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('TBL_Programas')->insert([
            [    
                'PR_Nombre' => 'Ingeniería de Sistemas',
            ],
            [    
                'PR_Nombre' => 'Ingeniería Ambiental',
            ],
            [    
                'PR_Nombre' => 'Ingeniería Agronomica',
            ],
            [    
                'PR_Nombre' => 'Psicología ',
            ]
        ]);
    }
}
