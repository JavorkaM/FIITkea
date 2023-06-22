<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                "name" => "admin",
                "surname" => "admin",
                "email" => "admin@fiitkea.com",
                "password" => Hash::make("admin"),
                "phone" => "912345678",
                "city" => "Bratislava",
                "zip" => "12345",
                "street" => "Ilkovičova 2",
                "admin" => true
            ] 
        );

        DB::table('users')->insert(
            [
                "name" => "Tester",
                "surname" => "Testington",
                "email" => "tester@fiitkea.com",
                "password" => Hash::make("tester"),
                "phone" => "912345678",
                "city" => "Bratislava",
                "zip" => "12345",
                "street" => "Ilkovičova 2",
            ] 
        );
    }
}