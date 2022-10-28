<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'user_name' => 'Makanan Shop',
            'email' => 'makan@gmail.com',
            'alamat' => 'Jakarta',
            'password' => Hash::make('password'),
            'role' => 'vendor'
        ]);

        User::create([
            'user_name' => 'Gaming Shop',
            'email' => 'gamer@gmail.com',
            'alamat' => 'Bekasi',
            'password' => Hash::make('password'),
            'role' => 'vendor'
        ]);

        User::create([
            'user_name' => 'Fashion Shop',
            'email' => 'fashion@gmail.com',
            'alamat' => 'Bandung',
            'password' => Hash::make('password'),
            'role' => 'vendor'
        ]);

        User::create([
            'user_name' => 'Admin',
            'email' => 'admin@gmail.com',
            'alamat' => 'Jakarta',
            'password' => Hash::make('password'),
            'role' => 'admin'
        ]);
    }
}
