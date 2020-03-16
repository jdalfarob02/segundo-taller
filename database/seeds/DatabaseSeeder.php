<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); //desactivar la revision de llaves foraneas
        DB::table('professions')->truncate();//vaciar la tabla
        DB::table('users')->truncate();
        DB::table('empleados')->truncate();
        DB::table('empresas')->truncate();
        
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); //activar la revision de llaves foraneas
        // $this->call(UsersTableSeeder::class);
        $this->call(ProfessionSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(EmpresaTableSeeder::class);
        $this->call(EmpleadoTableSeeder::class);
        
        
        
        
        

    }
}
