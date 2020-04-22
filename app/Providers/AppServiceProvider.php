<?php

namespace App\Providers;

use App\User;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Events\Dispatcher;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Dispatcher $events)
    {
        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
            $event->menu->add('WEBSITE SETTINGS');
            $users = User::where('role_id','!=',1)->get();
            $nb = count($users);
            $event->menu->add(
            
            [ 
                'text' => 'Users',
                'url'  => 'users',
                'icon' => 'fas fa-fw fa-user',
                'label' => $nb
            ],
            [
                'text'    => 'Services',
                'icon'    => 'fas fa-tools',
                'submenu' => [
                    [
                        'text' => 'Les services',
                        'url'  => 'service',
                        'icon_color' => 'yellow',
                    ],
                    [
                        'text' => 'Ajouter',
                        'url'  => 'service/create',
                        'icon_color' => 'green',
                    ],
                    
                ],
            ],
            [
                'text'    => 'Elements HomePage',
                'icon'    => 'fas fa-stream',
                'submenu' => [
                    [
                        'text' => 'Les élémments',
                        'url'  => 'homeElement',
                        'icon_color' => 'yellow',
                    ],            
                    
                ],
            ],
            [
                'text'    => 'About',
                'icon'    => 'fas fa-info-circle',
                'submenu' => [
                    [
                        'text' => 'Content',
                        'url'  => 'about',
                        'icon_color' => 'yellow',
                    ],
                    
                ],
            ],
            
            [
                'text'    => 'Contact',
                'icon'    => 'fas fa-address-book',
                'submenu' => [
                    [
                        'text' => 'Content',
                        'url'  => 'contact',
                        'icon_color' => 'yellow',
                    ],
                    
                    
                ],
            ],
            [
                'text'    => 'Formulaire',
                'icon'    => 'fas fa-envelope-open-text',
                'submenu' => [
                    [
                        'text' => 'Content',
                        'url'  => 'formulaire',
                        'icon_color' => 'yellow',
                    ],
                    
                    
                ],
            ],
            [
                'text'    => 'Newsletter',
                'icon'    => 'fas fa-mail-bulk',
                'submenu' => [
                    [
                        'text' => 'Content',
                        'url'  => 'newsletter',
                        'icon_color' => 'yellow',
                    ],
                    
                    
                ],
            ],
            [
                'text'    => 'Footer',
                'icon'    => 'fas fa-caret-square-down',
                'submenu' => [
                    [
                        'text' => 'Content',
                        'url'  => 'footer',
                        'icon_color' => 'yellow',
                    ],     
                    
                ],
            ],
            [
                'text'    => 'Testimonials',
                'icon'    => 'fas fa-folder-open',
                'submenu' => [
                    [
                        'text' => 'Content',
                        'url'  => 'testimonial',
                        'icon_color' => 'yellow',
                    ],
                    [
                        'text' => 'Ajouter',
                        'url'  => 'testimonial/create',
                        'icon_color' => 'green',
                    ],
                    
                ],
            ]
        );
        });
    }
}
