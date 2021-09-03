<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Http\Request;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;

class MenuController extends Controller
{
    //
    public function boot(Dispatcher $events)
    {
        //
        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
            $event->menu->addBefore('pages',('MAIN NAVIGATION'));
            $event->menu->add([
                'text' => 'Blog',
                'url' => 'admin/blog',
            ]);
        });
    }
}
