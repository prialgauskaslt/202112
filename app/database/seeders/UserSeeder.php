<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
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
                'id'              => 1,
                'name'            => 'Rinkimų komisija',
                'email'           => config('app.admin_email'),
                'password'        => bcrypt(config('app.admin_password')),
                'remember_token'  => null,
            ]
        ];

        User::insert($users);
    }
}
