<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Some sample users you can try
        \App\Models\User::factory()->create([
            'name' => 'Gringos',
            'email' => 'wes@lara.com',
            'password' => '12345'
        ]);
        \App\Models\User::factory()->create([
            'name' => Str::random(7),
            'email' => Str::random(7).'@lara.com',
            'password' => '12345'
        ]); 
    
    }
}
