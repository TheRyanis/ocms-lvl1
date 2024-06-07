<?php namespace App\Arrivals\Models;

use Model;

/**
 * Model
 */
class Arrival extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'app_arrivals_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
