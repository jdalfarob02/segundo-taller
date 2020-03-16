<?php

use Illuminate\Database\Seeder;
use App\models\Empleado;

class EmpleadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                  
            factory(Empleado::class,5)->create();
        
                      
                                        
        

    }
}
