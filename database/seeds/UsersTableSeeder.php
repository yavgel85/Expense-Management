<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$.lczJFCGG4U7hFQnkUPYau3nEPrO3fgFSvm2t0CnpeavsZY821nfW',
                'remember_token' => null,
            ],
        ];

        User::insert($users);

    }
}
