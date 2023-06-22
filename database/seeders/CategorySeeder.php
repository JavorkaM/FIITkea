<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
        [
            "name" => "Stoličky",
            "image" => Crypt::encryptString('images\categories\1\300x300.png'),
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),

        ]);
        DB::table('categories')->insert(
        [
            "name" => "Kreslá",
            "image" => Crypt::encryptString('images\categories\2\300x300.png'),
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),

        ]);
        DB::table('categories')->insert(
        [
            "name" => "Stoly",
            "image" => Crypt::encryptString('images\categories\3\300x300.png'),
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),

        ]);
        DB::table('categories')->insert(
        [
            "name" => "Skrine",
            "image" => Crypt::encryptString('images\categories\4\300x300.png'),
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),

        ]);
        DB::table('categories')->insert(
        [
            "name" => "Sedačky",
            "image" => Crypt::encryptString('images\categories\5\300x300.png'),
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),

        ]);
        DB::table('categories')->insert(
        [
            "name" => "Komody",
            "image" => Crypt::encryptString('images\categories\6\300x300.png'),
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),

        ]);
        DB::table('categories')->insert(
        [
            "name" => "Postele",
            "image" => Crypt::encryptString('images\categories\7\300x300.png'),
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),

        ]);
        DB::table('categories')->insert(
        [
            "name" => "Dekorácie",
            "image" => Crypt::encryptString('images\categories\8\300x300.png'),
            "created_at" => date("Y-m-d")." ".date("H:i:s"),
            "updated_at" => date("Y-m-d")." ".date("H:i:s"),

        ]);

    }
}
