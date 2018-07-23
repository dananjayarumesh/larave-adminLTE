<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Contracts\Events\Dispatcher;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Dispatcher $events)
    {
        //
        Schema::defaultStringLength(191);

        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
            $event->menu->add('MAIN NAVIGATION');
            $event->menu->add([
                'text'  => 'Dashboard',
                'url'   => '/',
                'icon'  => 'tachometer',
                'active' => ['dashboard']
            ]);
            $event->menu->add([
                'text'  => 'Products',
                'url'   => '/',
                'icon'  => 'cubes',
                // 'icon_color' => 'aqua',
                'active' => ['products', 'products/*']
            ]);
            /*$event->menu->add([
                'text'  => 'Customers',
                'url'   => '/',
                'icon'  => 'handshake-o',
            ]);
            $event->menu->add([
                'text'  => 'Licenses',
                'url'   => '/',
                'icon'  => 'key',
            ]);
            $event->menu->add([
                'text'  => 'Reports',
                'url'   => '/',
                'icon'  => 'bar-chart',
            ]);*/

            // 
            $event->menu->add('SETTINGS AND ADMINISTRATION'); 
            $event->menu->add([
                'text' => 'Staff',
                'url'  => '/dashboard/staff',
                'icon'  => 'users',
            ]);
            $event->menu->add([
                'text' => 'My Profile',
                'url'  => '/dashboard/profile',
                'icon'  => 'user',
            ]);
            $event->menu->add([
                'text' => 'System Config',
                'url'  => '/',
                'icon'  => 'cog',
                'active' => ['config', 'config/*']
            ]);
            $event->menu->add([
                'text'  => 'Settings',
                'url'   => '/',
                'icon'  => 'cogs',
                'active' => ['settings', 'settings/*'], 
                'submenu'     => [
                    [
                        'text' => 'Staff',
                        'url'  => '/',
                        'icon'  => 'users',
                        'active' => ['staff', 'staff/*'], 
                    ],
                    [
                        'text' => 'My Profile',
                        'url'  => '/',
                        'icon'  => 'user',
                        'active' => ['profile', 'profile/*'], 
                    ],
                    [
                        'text' => 'Trace Log',
                        // 'url'  => '/',
                        'icon'  => 'list-alt',
                        'active' => ['trace-log', 'trace-log/*'], 
                    ],
                    [
                        'text' => 'System Config',
                        'url'  => '/',
                        'icon'  => 'cog',
                        'active' => ['system-config', 'system-config/*'],
                    ],
                ],
            ]);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
