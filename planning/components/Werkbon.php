<?php namespace Nvandendriesdev\Planning\Components;

// This plugin is written by Niels van den Dries of Open Minded IT, for the project OmitCentral. 
// If you have any questions about this Plugin or you have a bug let me know via my github
// https://github.com/NielsvandenDries/nvandendriesdev/issues

use Cms\Classes\ComponentBase;
use Nvandendriesdev\Planning\Models\Werkbonnen;

/**
 * Werkbon Component
 */
class Werkbon extends ComponentBase
{
    public $table;
    public $bon;
    public function componentDetails()
    {
        return [
            'name' => 'Werkbonnen',
            'description' => 'Publiceer werkbon op front-end'
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
            'werkbonnaam' => [
                'title'             => 'werkbon',
                'description'       => 'Watch the Simpson',
                'type'              => 'dropdown',
            ]
        ];
    }

    public function getParkOptions()
    {
        return Werkbonnen::get()->lists('park', 'park');
    }
    public function getWerkbonnaamOptions()
    {
        return Werkbonnen::get()->lists('werkbonnaam', 'werkbonnaam');
    }

    public function onRun()
    {
        // filter op park (multipark functie) werkbonnaam
        $this->bon = Werkbonnen::where('park', $this->property('park'))->get()->toArray();
        $this->bon = Werkbonnen::where('werkbonnaam', $this->property('werkbonnaam'))->get()->toArray();
    }

    function onSave()
    {
        $table->string('code')->unique();
    }
}
