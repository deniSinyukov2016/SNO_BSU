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
            'sort' => "1",
        ]);
        $contacts = \App\Menu::create([
            'title' => 'Контакты',
            'active' => 1,
            'url' => '/contacts',
            'alias' => "contacts",
            'sort' => "1",
        ]);
        $resources = \App\Menu::create([
            'title' => 'Ресурсы и документы',
            'active' => 1,
            'url' => '/resources',
            'alias' => "resources",
            'sort' => "1",
        ]);
        $structure = \App\Menu::create([
            'title' => 'Структура',
            'active' => 1,
            'url' => '/structure',
            'alias' => "structure",
            'sort' => "1",
        ]);
        $project = \App\Menu::create([
            'title' => 'Проекты',
            'active' => 1,
            'url' => '/project',
            'alias' => "project",
            'sort' => "1",
        ]);
        $partnership = \App\Menu::create([
            'title' => 'Сотрудничество',
            'active' => 1,
            'url' => '/partnership',
            'alias' => "partnership",
            'sort' => "1",
        ]);
        $messenger = \App\Menu::create([
            'title' => 'Вестник СНО',
            'active' => 1,
            'url' => '/messenger',
            'alias' => "messenger",
            'sort' => "1",
        ]);
    }
}
