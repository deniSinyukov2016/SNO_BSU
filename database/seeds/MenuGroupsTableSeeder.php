<?php

use Illuminate\Database\Seeder;

class MenuGroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $topMenu = \App\MenuGroup::create([
           'ru_title' => 'Меню в шапке',
           'alias' => 'top_menu',
       ]);
        $botMenu = \App\MenuGroup::create([
            'ru_title' => 'Меню в подвале',
            'alias' => 'top_menu',
        ]);
    }
}
