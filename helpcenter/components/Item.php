<?php namespace Nvandendriesdev\Helpcenter\Components;

use Cms\Classes\ComponentBase;

/**
 * Item Component
 */
class Item extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Helpcenter',
            'description' => 'Watch the Simpson'
        ];
    }

    public function defineProperties()
    {
        return [];
    }
}
