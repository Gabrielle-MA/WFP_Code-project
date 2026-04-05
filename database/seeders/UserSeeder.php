<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'admin1',
                'email' => 'admin1@staff.com',
                'password' => 'admin123'
            ],
            [
                'name' => 'admin2',
                'email' => 'admin2@staff.com',
                'password' => 'admin321'
            ],
        ];

        foreach ($users as $user) {
            User::create([
                ...$user,
                'password' => Hash::make($user['password']),
            ]);
        }

        User::factory(5)->create(); //pake factory
    }
}
