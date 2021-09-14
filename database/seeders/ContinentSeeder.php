<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContinentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("continents")->insert([
            "continent"=>"Europe"
        ]);

        DB::table("continents")->insert([
            "continent"=>"Afrique"
        ]);

        DB::table("continents")->insert([
            "continent"=>"Amérique du Sud"
        ]);

        DB::table("continents")->insert([
            "continent"=>"Amérique du Nord"
        ]);

        DB::table("continents")->insert([
            "continent"=>"Asie"
        ]);    }
}
