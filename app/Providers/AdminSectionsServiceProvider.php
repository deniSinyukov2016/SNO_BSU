<?php

namespace App\Providers;

use SleepingOwl\Admin\Providers\AdminSectionsServiceProvider as ServiceProvider;

class AdminSectionsServiceProvider extends ServiceProvider
{

    /**
     * @var array
     */
    protected $sections = [
        \App\Post::class => 'App\Http\Sections\Posts',// новости
        \App\Menu::class => 'App\Http\Sections\Menus',
        \App\User::class => 'App\Http\Sections\Users',//пользователи
        \App\Role::class => 'App\Http\Sections\Roles',// Роли
    ];

    /**
     * Register sections.
     *
     * @return void
     */
    public function boot(\SleepingOwl\Admin\Admin $admin)
    {
    	//

        parent::boot($admin);
    }
}
