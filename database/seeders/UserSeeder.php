<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Create some roles.

        Role::create(['name'=>'super admin']);
        Role::create(['name'=>'developer']);
        Role::create(['name'=>'company']);

        //Some sample users you can try
        $user1 = User::factory()->create([
            'name' => 'Gringos',
            'email' => 'super@lara.com',
            'password' => '12345'
        ]);
        $user1->assignRole('super admin');

        $user2 = User::factory()->create([
            'name' => Str::random(7),
            'email' => 'dev@lara.com',
            'password' => '12345'
        ]); 
        $user2->assignRole('developer');

        $user3 = User::factory()->create([
            'name' => Str::random(7),
            'email' => 'ben@lara.com',
            'password' => '12345'
        ]); 
        $user3->assignRole('company');
    }
}
