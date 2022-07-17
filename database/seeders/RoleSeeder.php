<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
               "name" => "Worker",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "Employer",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "Admin",
                "created_at" => now(),
                "updated_at" => now(),
            ],

        ];
        DB::table("roles")->insert([...$roles]);
    }
}
