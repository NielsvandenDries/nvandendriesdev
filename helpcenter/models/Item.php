<?php namespace NvandendriesDev\Helpcenter\Models;

use Model;

/**
 * Model
 */
class Item extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'nvandendriesdev_helpcenter_item';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
