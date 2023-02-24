<?php namespace Nvandendriesdev\Planning\Components;

// This plugin is written by Niels van den Dries of Open Minded IT, for the project OmitCentral. 
// If you have any questions about this Plugin or you have a bug let me know via my github
// https://github.com/NielsvandenDries/nvandendriesdev/issues

use Cms\Classes\ComponentBase;
// Koppeling naar de Model Development
use Nvandendriesdev\Planning\Models\DevelopmentStatus;

/**
 * Planninglist Component
 */
class development extends ComponentBase
{
    public $status;
    
    public function componentDetails()
    {
        return [
            'name' => 'Development',
            'description' => 'Development overzicht'
        ];
    }

    public function defineProperties()
    {
        return [
            'archive' => [
                'title'             => 'Gearchiveerd',
                'description'       => 'Watch the Simpson',
                'type'              => 'dropdown',
            ]
        ];
    }

    public function getArchiveOptions()
    {
        return DevelopmentStatus::get()->lists('archive', 'archive');
    }

    public function onRun()
    {
        // ophalen van alle data in de database van Development
        $this->status = DevelopmentStatus::where('archive', $this->property('archive'))->get()->toArray();
        //$this->status = DevelopmentStatus::get()->toArray();
    }
}
