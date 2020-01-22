<?php

use Illuminate\Database\Seeder;
use App\Models\UsersTableModel;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UsersTableModel::create([
            'name_surname' => 'Talha Can',
            'username' => 'rampesna',
            'email' => 'rampesna@gmail.com',
            'phone' => '5383761370',
            'password' => bcrypt('c91a44n4dab23'),
            'balance' => 0,
            'is_activated' => 1,
            'is_banned' => 0,
            'is_admin' => 1,
            'auth_level' => 2000
        ]);

        UsersTableModel::create([
            'name_surname' => 'Müşteri Demo',
            'username' => 'demo',
            'email' => 'demo@demo.com',
            'phone' => '0000000000',
            'password' => bcrypt('123456'),
            'balance' => 0,
            'is_activated' => 1,
            'is_banned' => 0,
            'is_admin' => 0,
            'auth_level' => 0
        ]);
    }
}
