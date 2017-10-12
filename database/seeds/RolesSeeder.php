<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//       $admin = Role::create([
//           'name' => 'Admin',
//           'slug' => 'admin',
//           'permissions' => [
//               'create-post' => true,
//               'view-post' => true,
//           ],
//           'comment' => "Админ сайта",
//       ]);
//
//        $guest = Role::create([
//            'name' => 'Guest',
//            'slug' => 'guest',
//            'permissions' => [
//                'view-post' => true,
//            ],
//            'comment' => "Гость сайта",
//        ]);
        $registerUser = Role::create([
            'name' => 'Зарегистрированный пользователь',
            'slug' => 'registerUser',
            'permissions' => [
                'view-admin' => true,
            ],
            'comment' => "Зарегистрированный пользователь",
        ]);
    }
}
