<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table("users")->truncate();
        Schema::enableForeignKeyConstraints();
        DB::table("users")->insert([

            "firstname" => "Trevor",
            "lastname"  => "Muthoka",
            "role_id"       => "3",
            "email"      => "trevor@gmail.com",
            "phone"      => "0789898989",
            "password"   => Hash::make("password"),
            "created_at" => now(),
            "updated_at" => now(),

        ]);
        DB::table("users")->insert([

            "firstname" => "John",
            "lastname"  => "Doe",
            "role_id"       => "3",
            "email"      => "johndoe@gmail.com",
            "phone"      => "0789898988",
            "password"   => Hash::make("password"),
            "created_at" => now(),
            "updated_at" => now(),
        ]);

        DB::table("users")->insert([

            "firstname" => "Jane",
            "lastname"  => "Doe",
            "role_id"       => "3",
            "email"      => "Jane@gmail.com",
            "phone"      => "0789898987",
            "password"   => Hash::make("password"),
            "created_at" => now(),
            "updated_at" => now(),
        ]);

    }

}
