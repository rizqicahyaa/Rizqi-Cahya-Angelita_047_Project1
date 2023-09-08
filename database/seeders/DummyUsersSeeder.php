<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData =[
            [
                'name' => 'Rizqi Cahya Angelita',
                'email' => 'rizqicahyaangelita@gmail.com',
                'role' => 'murid',
                'password' => bcrypt('12345678')
            ],[
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'password' => bcrypt('admin')
            ],[
                'name' => 'Anthony R',
                'email' => 'Anthony@gmail.com',
                'role' => 'guru',
                'password' => bcrypt('anthony')
            ],
        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
