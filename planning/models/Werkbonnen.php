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
    protected $table = 'nvandendriesdev_planning_werkbonnen';
	protected $fillable = 
		[
			'id ', 
			'engineer_name', 
			'customer_name', 
			'customer_address', 
			'pof', 
			'cable', 
			'verloop', 
			'fconnectorkoppel', 
			'verloophaaks', 
			'wcd', 
			'opbouwraamwcd', 
			'versterker', 
			'coaxmale', 
			'fconnector', 
			'3mfconkabel', 
			'3mtvkabeliec', 
			'5mtvkabel4g', 
			'verstkabel', 
			'modem', 
			'arbeid', 
			'overigmateriaal', 
			'signature', 
			'created_at', 
			'updated_at', 
			'werkbonnaam', 
			'park'
        ];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
