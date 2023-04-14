<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Administator',
                'username' => 'Admin',
                'password' => bcrypt('123456'),
                'level' => 1,
                'email' => 'admin@myapps.com'
            ],
            [
                'name' => 'Kasir',
                'username' => 'Kasir',
                'password' => bcrypt('123456'),
                'level' => 2,
                'email' => 'kasir@myapps.com'
            ],
            [
                'name' => 'Pimpinan',
                'username' => 'Pimpinan',
                'password' => bcrypt('123456'),
                'level' => 3,
                'email' => 'pimpinan@myapps.com'
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
