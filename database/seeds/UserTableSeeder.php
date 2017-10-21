<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = \App\Term::create([
            'login' => 'admin',
            'email' => 'admin@admin.ru',
            'password' => 'admin',
            'name' => "Admin",
        ]);
        $user = \App\Term::create([
            'login' => 'denis',
            'email' => 'denis@denis.ru',
            'password' => 'denis',
            'name' => "Denis",
        ]);
    }
}
