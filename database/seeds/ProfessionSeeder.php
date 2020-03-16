<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfessionSeeder extends Seeder
{
    public function run()
    {

        
        DB::table('professions')->insert([
            'title' =>"Ingeniero de sistemas"
            
        ]);
        DB::table('professions')->insert([

            'title' =>"contador"
        ]);
        DB::table('professions')->insert([
        'title' =>"Ingeniero civil"
        ]);
        DB::table('professions')->insert([
            'title' =>"arquitecto"
        ]);
        DB::table('professions')->insert([
            'title' =>"Ingeniero biomecanico"
        ]);

    }
}
