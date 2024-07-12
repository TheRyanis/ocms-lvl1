<?php namespace App\ArrivalHooks;

use App\Arrival\Models\Arrival;
use Backend;
use System\Classes\PluginBase;

/**
 * ArrivalHooks Plugin Information File
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
            'name'        => 'ArrivalHooks',
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

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return void
     */
    public function boot()
    {
        Arrival::created(function ($arrival) {
            \Log::info('New arrival created: ' . $arrival->name);
        });
    }
    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {

        return [
            'app.arrivalhooks.some_permission' => [
                'tab' => 'ArrivalHooks',
                'label' => 'Some permission'
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
            'arrivalhooks' => [
                'label'       => 'ArrivalHooks',
                'url'         => Backend::url('app/arrivalhooks/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['app.arrivalhooks.*'],
                'order'       => 500,
            ],
        ];
    }
}
