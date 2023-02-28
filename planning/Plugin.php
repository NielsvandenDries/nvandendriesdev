<?php namespace NvandendriesDev\Planning;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    // Plugin Dependencie
    public $require = ['RainLab.Builder'];
    
    public function registerSettings()
    {
    }

    public function registerComponents()
    {
        return [
            '\Nvandendriesdev\Planning\Components\Planninglist' => 'Planninglist',
            '\Nvandendriesdev\Planning\Components\development' => 'development',
            '\Nvandendriesdev\Planning\Components\Tapkastenlijst' => 'Tapkastenlijst',
        ];
    }
}
