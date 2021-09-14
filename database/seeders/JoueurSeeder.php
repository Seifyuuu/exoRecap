<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JoueurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('joueurs')->insert([
            'nom'=>'Oulou',
            'prenom'=>'Balala',
            'age'=>20,
            'numero'=>8,
            'genre'=>"Homme",
            'role_id'=>1,
            'equipe_id'=>1,
        ]);
        DB::table('joueurs')->insert([
            'nom'=>'Oulou',
            'prenom'=>'Balala',
            'age'=>20,
            'numero'=>8,
            'genre'=>"Femme",
            'role_id'=>2,
            'equipe_id'=>2,
        ]);
        DB::table('joueurs')->insert([
            'nom'=>'Oulou',
            'prenom'=>'Balala',
            'age'=>20,
            'numero'=>8,
            'genre'=>"Femme",
            'role_id'=>3,
            'equipe_id'=>3,
        ]);
        DB::table('joueurs')->insert([
            'nom'=>'Oulou',
            'prenom'=>'Balala',
            'age'=>20,
            'numero'=>8,
            'genre'=>"Homme",
            'role_id'=>4,
            'equipe_id'=>4,
        ]);
    }
}
