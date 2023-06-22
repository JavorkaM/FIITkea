<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colors')->insert(
        [
            "name" => "Biela",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),

        ]);
        DB::table('colors')->insert(
        [
            "name" => "Čierna",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),

        ]);
        DB::table('colors')->insert(
        [
            "name" => "Hnedá",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),

        ]);
        DB::table('colors')->insert(
        [
            "name" => "Oranžová",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),

        ]);
        DB::table('colors')->insert(
        [
            "name" => "Žltá",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),

        ]);
        DB::table('colors')->insert(
        [
            "name" => "Zelená",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),

        ]);
        DB::table('colors')->insert(
        [
            "name" => "Červená",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),

        ]);
        DB::table('colors')->insert(
        [
            "name" => "Modrá",
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),

        ]);
    }
}
