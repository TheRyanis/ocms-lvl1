<?php namespace App\Arrival\Controllers;

use App\Arrival\Models\Arrival;
use Backend\Behaviors\FormController;
use Backend\Behaviors\ListController;
use BackendMenu;
use Backend\Classes\Controller;

/**
 * Arrivals Backend Controller
 */
class Arrivals extends Controller
{
    public $implement = [
        FormController::class,
        ListController::class
    ];

    /**
     * @var string formConfig file
     */
    public $formConfig = 'config_form.yaml';

    /**
     * @var string listConfig file
     */
    public $listConfig = 'config_list.yaml';

    /**
     * __construct the controller
     */
    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('App.Arrival', 'arrival', 'arrivals');
    }
}
