<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('materials')->insert(
        [
            "name" => "Drevo",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),

        ]);
        DB::table('materials')->insert(
        [
            "name" => "Plast",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),

        ]);
        DB::table('materials')->insert(
        [
            "name" => "Látka",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),

        ]);
        DB::table('materials')->insert(
        [
            "name" => "Koža",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),

        ]);
        DB::table('materials')->insert(
        [
            "name" => "Rastlina",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),

        ]);
    }
}
