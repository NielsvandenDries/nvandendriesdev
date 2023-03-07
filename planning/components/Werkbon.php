<?php namespace Nvandendriesdev\Planning\Components;

// This plugin is written by Niels van den Dries of Open Minded IT, for the project OmitCentral. 
// If you have any questions about this Plugin or you have a bug let me know via my github
// https://github.com/NielsvandenDries/nvandendriesdev/issues

use Cms\Classes\ComponentBase;
use Nvandendriesdev\Planning\Models\Werkbonnen;
use Validator;
use Redirect;

/**
 * Werkbon Component
 */
class Werkbon extends ComponentBase
{
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

    function onSend()
    {
        $data = post();
        Werkbonnen::create([
            'id ' => $data['id'],
            'engineer_name' => $data['engineer_name'],
            'customer_name' => $data['customer_name'],
            'customer_address' => $data['customer_address'],
            'pof' => $data['pof'],
            'cable' => $data['cable'],
            'verloop' => $data['verloop'],
            'fconnectorkoppel' => $data['fconnectorkoppel'],
            'verloophaaks' => $data['verloophaaks'],
            'wcd' => $data['wcd'],
            'opbouwraamwcd' => $data['opbouwraamwcd'],
            'versterker' => $data['versterker'],
            'coaxmale' => $data['coaxmale'],
            'fconnector' => $data['fconnector'],
            '3mfconkabel' => $data['3mfconkabel'],
            '3mtvkabeliec' => $data['3mtvkabeliec'],
            '5mtvkabel4g' => $data['5mtvkabel4g'],
            'verstkabel' => $data['verstkabel'],
            'modem' => $data['modem'],
            'arbeid' => $data['arbeid'],
            'overigmateriaal' => $data['overigmateriaal'],
            'signature' => $data['signature'],
            'created_at' => $data['created_at'],
            'updated_at' => $data['updated_at'],
            'werkbonnaam' => $data['werkbonnaam'],
            'park' => $data['park'],
        ]);

        Flash::success('Message sent successfully!');

        return Redirect::back();
    }
}
