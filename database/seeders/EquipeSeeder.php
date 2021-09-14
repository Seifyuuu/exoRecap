<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("equipes")->insert([
            "nom"=>"FC Barbe",
            "ville"=>"Rabat",
            "pays"=>"Maroc",
            "max"=>10,
            "continent_id"=>1,
        ]);
        DB::table("equipes")->insert([
            "nom"=>"FC Baguette",
            "ville"=>"Paris",
            "pays"=>"France",
            "max"=>10,
            "continent_id"=>2,
        ]);
        DB::table("equipes")->insert([
            "nom"=>"Fc Frites",
            "ville"=>"Bruxelles",
            "pays"=>"Belgique",
            "max"=>10,
            "continent_id"=>3,
        ]);
        DB::table("equipes")->insert([
            "nom"=>"FC Pizza",
            "ville"=>"Rome",
            "pays"=>"Italie",
            "max"=>10,
            "continent_id"=>4,
        ]);
    }
}
