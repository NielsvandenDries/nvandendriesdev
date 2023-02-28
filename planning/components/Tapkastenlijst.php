<?php namespace Nvandendriesdev\Planning\Components;

// This plugin is written by Niels van den Dries of Open Minded IT, for the project OmitCentral. 
// If you have any questions about this Plugin or you have a bug let me know via my github
// https://github.com/NielsvandenDries/nvandendriesdev/issues

use Cms\Classes\ComponentBase;
use Nvandendriesdev\Planning\Models\Tapkasten;

/**
 * Tapkastenlijst Component
 */
class Tapkastenlijst extends ComponentBase
{
    public $kasten;
    public function componentDetails()
    {
        return [
            'name' => 'tapkastenlijst',
            'description' => 'Tapkasten overzicht'
        ];
    }

    public function defineProperties()
    {
        // return [
        //     'adres' => [
        //         'title'             => 'adres',
        //         'description'       => 'Watch the Simpson',
        //         'type'              => 'dropdown',
        //     ]
        // ];
    }

    public function getAdresOptions()
    {
        // return Tapkasten::get()->lists('name', 'name');
    }

    public function onRun()
    {
        // filter op park (multipark functie)
        // $this->kasten = Tapkasten::where('name', $this->property('name'))->get()->toArray();
        $this->kasten = Tapkasten::get()->toArray();
    }
}
