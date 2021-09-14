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
            "nom"=>"Fc BAMBOULA",
            "ville"=>"test",
            "pays"=>"ballek",
            "max"=>10,
            "continent_id"=>1,
        ]);
        DB::table("equipes")->insert([
            "nom"=>"Fc BAMBOULA",
            "ville"=>"test",
            "pays"=>"ballek",
            "max"=>10,
            "continent_id"=>2,
        ]);
        DB::table("equipes")->insert([
            "nom"=>"Fc BAMBOULA",
            "ville"=>"test",
            "pays"=>"ballek",
            "max"=>10,
            "continent_id"=>3,
        ]);
        DB::table("equipes")->insert([
            "nom"=>"Fc BAMBOULA",
            "ville"=>"test",
            "pays"=>"ballek",
            "max"=>10,
            "continent_id"=>4,
        ]);
    }
}
