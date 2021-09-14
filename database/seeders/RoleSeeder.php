<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'role'=>'Gardien',
        ]);

        DB::table('roles')->insert([
            'role'=>'Def droit',
        ]);

        DB::table('roles')->insert([
            'role'=>'Def gauche',
        ]);

        DB::table('roles')->insert([
            'role'=>'Def central',
        ]);

        DB::table('roles')->insert([
            'role'=>"Mil 'défensif'",
        ]);
        
        DB::table('roles')->insert([
            'role'=>'Mil latéral',
        ]);
    }
}
