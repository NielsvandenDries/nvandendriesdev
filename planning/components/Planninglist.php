<?php namespace Nvandendriesdev\Planning\Components;

// This plugin is written by Niels van den Dries of Open Minded IT, for the project OmitCentral. 
// If you have any questions about this Plugin or you have a bug let me know via my github
// https://github.com/NielsvandenDries/nvandendriesdev/issues

use Cms\Classes\ComponentBase;
use Nvandendriesdev\Planning\Models\Afspraak;

/**
 * Planninglist Component
 */
class Planninglist extends ComponentBase
{
    public $afspraaklist;
    
    public function componentDetails()
    {
        return [
            'name' => 'planninglist',
            'description' => 'Planning overzicht'
        ];
    }

    public function defineProperties()
    {
        return [
            'park' => [
                'title'             => 'Park',
                'description'       => 'Watch the Simpson',
                'type'              => 'dropdown',
            ],
            'archive' => [
                'title'             => 'Gearchiveerd',
                'description'       => 'Watch the Simpson',
                'type'              => 'dropdown',
            ]
        ];
    }

    public function getParkOptions()
    {
        return Afspraak::get()->lists('park', 'park');
    }

    public function getArchiveOptions()
    {
        return Afspraak::get()->lists('archive', 'archive');
    }

    public function onRun()
    {
        // filter op park (multipark functie)
        $this->afspraaklist = Afspraak::where('park', $this->property('park'))->get()->toArray();
        // filter voor archivering
        $this->afspraaklist = Afspraak::where('archive', $this->property('archive'))->get()->toArray();
    }
}
