<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Bagas Satrio',
                'email' => 'bagas@mail.com',
                'password' => Hash::make('qwerty123'),
                'remember_token' => null,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
            ],
            [
                'name' => 'Sasha',
                'email' => 'sasha@mail.com',
                'password' => Hash::make('qwerty123'),
                'remember_token' => null,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
            ],
        ];

        User::insert($users);
    }
}
