<?php namespace NvandendriesDev\Planning\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class DevelopmentStatus extends Controller
{
    public $requiredPermissions = [ 'development_beheerder' ];
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('NvandendriesDev.Planning', 'main-menu-item', 'side-menu-item4');
    }
}
