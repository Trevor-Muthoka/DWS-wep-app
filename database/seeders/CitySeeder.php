<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table("cities")->truncate();
        Schema::enableForeignKeyConstraints();
        DB::table("cities")->insert([

            [
                "name" => "Nairobi",
                "user_id" => 1,
                "is_deleted" => false,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "Mombasa",
                "user_id" => 1,
                "is_deleted" => false,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "Kisumu",
                "user_id" => 1,
                "is_deleted" => false,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "Nakuru",
                "user_id" => 1,
                "is_deleted" => false,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "Eldoret",
                "user_id" => 1,
                "is_deleted" => false,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "Kakamega",
                "user_id" => 1,
                "is_deleted" => false,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "Kisii",
                "user_id" => 1,
                "is_deleted" => false,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "Nakuru",
                "user_id" => 1,
                "is_deleted" => false,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "Nairobi",
                "user_id" => 1,
                "is_deleted" => false,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "Mombasa",
                "user_id" => 1,
                "is_deleted" => false,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "Kisumu",
                "user_id" => 1,
                "is_deleted" => false,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "Nakuru",
                "user_id" => 1,
                "is_deleted" => false,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "Eldoret",
                "user_id" => 1,
                "is_deleted" => false,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "Kakamega",
                "user_id" => 1,
                "is_deleted" => false,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "Kisii",
                "user_id" => 1,
                "is_deleted" => false,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "Nakuru",
                "user_id" => 1,
                "is_deleted" => false,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "Nairobi",
                "user_id" => 1,
                "is_deleted" => false,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "Mombasa",
                "user_id" => 1,
                "is_deleted" => false,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "Kisumu",
                "user_id" => 1,
                "is_deleted" => false,
                "created_at" => now(),
                "updated_at" => now(),
            ]

        ]);

    }
}
