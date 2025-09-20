<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Ruan',
            'email' => 'ruansbueno@gmail.com',
            'password' => Hash::make('senha123'),
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Thiago',
            'email' => 'thiagosbueno@gmail.com',
            'password' => Hash::make('senha123'),
            'created_at' => now(),
            'updated_at' => now(), 
        ]
    );
    }
}
