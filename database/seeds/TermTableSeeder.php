<?php

use Illuminate\Database\Seeder;

class TermTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $all = \App\Term::create([
           'name' => 'Все',
           'alias' => 'all',
           'sort' => 1,
           'url' => "/all",
       ]);
    }
}
