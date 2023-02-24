<?php namespace NvandendriesDev\Planning\Models;

use Model;

/**
 * Model
 */
class Relaties extends Model
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
    public $table = 'nvandendriesdev_planning_kast_relaties';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
