<?php

use Illuminate\Database\Seeder;

class MenuItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item1 = \App\MenuItem::create([
            'menu_id' => 1,
            'group_menu_id' => 1,
        ]);
        $item2 = \App\MenuItem::create([
            'menu_id' => 2,
            'group_menu_id' => 1,
        ]);
    }
}
