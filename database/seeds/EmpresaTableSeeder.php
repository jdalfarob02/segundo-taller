<?php

use Illuminate\Database\Seeder;
use App\models\Empresa;
use Illuminate\Support\Str;

class EmpresaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        

        DB::table('empresas')->insert([
            'title' =>"ISSAC Y DURAN"
             
            
        ]);
        DB::table('empresas')->insert([

            'title' =>"ELECTRICARIBE S.A"
        ]);
        DB::table('empresas')->insert([
        'title' =>"VELOIA"
        ]);
        DB::table('empresas')->insert([
            'title' =>"POSTOBON"
        ]);
        DB::table('empresas')->insert([
            'title' =>"COCACOLA"
        ]);
    }
}
