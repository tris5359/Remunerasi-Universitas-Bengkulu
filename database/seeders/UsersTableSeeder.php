<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            //admin
            [
                'name' =>  'Admin remun',
                'email' => 'admin@admin.com',
                'password' => Hash::make('password'),
                'role' => 'admin',
            ],

            //operator
            [
                'name' =>  'Operator remun',
                'email' => 'operator@operator.com',
                'password' => Hash::make('password'),
                'role' => 'operator',
            ],

            //verifikator
            [
                'name' =>  'Verifikator remun',
                'email' => 'verifikator@verifikator.com',
                'password' => Hash::make('password'),
                'role' => 'verifikator',
            ]
        ]);
    }
}
