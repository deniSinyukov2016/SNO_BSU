<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $news = \App\Menu::create([
            'title' => 'Новости',
            'active' => 1,
            'url' => '/news',
            'alias' => "news",
        ]);
        $contacts = \App\Menu::create([
            'title' => 'Контакты',
            'active' => 1,
            'url' => '/contacts',
            'alias' => "contacts",
        ]);
    }
}
