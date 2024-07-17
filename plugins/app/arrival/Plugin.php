<?php namespace App\Arrival;

use Backend;
use System\Classes\PluginBase;
use App\Arrival\Models\Arrival;
use Illuminate\Support\Facades\Event;

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
        \Route::group(['prefix' => 'api'], function () {
            \Route::get('arrivals', 'App\Arrival\Classes\ArrivalAPI@getArrivals');
            \Route::post('arrivals', 'App\Arrival\Classes\ArrivalAPI@createArrival');
        });
    }

    /**
     * Boot method, called right before the request route.
     *
     * @return void
     */
    public function boot()
    {
        if (file_exists(__DIR__ . '/routes.php')) {
            require __DIR__ . '/routes.php';
        }

        Arrival::extend(function ($model) {
            $model->bindEvent('model.afterCreate', function () use ($model) {
                \Log::info('New arrival created: ' . $model->name);
            });
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
                'url'         => Backend::url('app/arrival/arrivals'),
                'icon'        => 'icon-calendar-check-o',
                'permissions' => ['app.arrival.manage_arrivals'],
                'order'       => 500,
            ],
        ];
    }
}
