<?php namespace NvandendriesDev\Planning\Models;

use Model;

/**
 * Model
 */
class Werkbonnen extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'nvandendriesdev_planning_werkbonnen';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
