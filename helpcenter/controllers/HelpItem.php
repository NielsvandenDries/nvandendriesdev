<?php namespace NvandendriesDev\Helpcenter\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class HelpItem extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'helpcenter_beheerder' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('NvandendriesDev.Helpcenter', 'main-menu-item');
    }
}
