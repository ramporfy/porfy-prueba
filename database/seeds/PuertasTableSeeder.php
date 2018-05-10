<?php

use Illuminate\Database\Seeder;

class PuertasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //aqui es donde se crea la cantidad de puertas
        factory(App\Puerta::class,80)->create();
    }
}
