<?php namespace App\ArrivalTime;

use App\Arrival\Models\Arrival;
use Backend;
use System\Classes\PluginBase;

/**
 * arrivalTime Plugin Information File
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
            'name'        => 'arrivalTime',
            'description' => 'No description provided yet...',
            'author'      => 'app',
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
            'app.arrivaltime.some_permission' => [
                'tab' => 'arrivalTime',
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
            'arrivaltime' => [
                'label'       => 'arrivalTime',
                'url'         => Backend::url('app/arrivaltime/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['app.arrivaltime.*'],
                'order'       => 500,
            ],
        ];
    }
}
