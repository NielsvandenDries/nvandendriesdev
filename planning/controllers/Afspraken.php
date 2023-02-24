<?php 
namespace NvandendriesDev\Planning\Controllers;

use Backend\Classes\Controller;
use Backend\Classes\BackendController;

use BackendMenu;

class Afspraken extends Controller
{
    
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('NvandendriesDev.Planning', 'main-menu-item', 'side-menu-item');
    }
}

class Posts extends BackendController
{
    public $requiredPermissions = [ 'planning_beheerder' ];
}