<?php namespace App\Arrival;

use Backend;
use System\Classes\PluginBase;

/**
 * Arrival Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Arrival',
            'description' => 'No description provided yet...',
            'author'      => 'App',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {
        \Event::listen('backend.menu.extendItems', function($manager) {
            $manager->addSideMenuItems('RainLab.User', 'user', [
                'arrivals' => [
                    'label'       => 'Arrivals',
                    'icon'        => 'icon-list',
                    'url'         => \Backend::url('app/arrival/arrivals'),
                    'permissions' => ['app.arrival.access_arrivals']
                ]
            ]);
        });
    }

    /**
     * Boot method, called right before the request route.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {

        return [
            'App\Arrival\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return [
            'app.arrival.access_arrivals' => [
                'label' => 'Access Arrivals',
                'tab' => 'Arrival'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {

        return [
            'arrival' => [
                'label'       => 'Arrival',
                'url'         => Backend::url('app/arrival/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['app.arrival.access_arrivals'],
                'order'       => 500,
            ],
        ];
    }
}
