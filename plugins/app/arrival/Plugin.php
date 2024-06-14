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
            'description' => 'A plugin to log student arrivals.',
            'author'      => 'app',
            'icon'        => 'icon-calendar-check-o'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

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
        return [];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {

        return [
            'app.arrival.some_permission' => [
                'tab' => 'Arrival',
                'label' => 'Manage Arrivals'
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
                'url'         => Backend::url('app/arrival/Arrivals'),
                'icon'        => 'icon-calendar-check-o',
                'permissions' => ['app.arrival.manage_arrivals'],
                'order'       => 500,
            ],
        ];
    }
}
