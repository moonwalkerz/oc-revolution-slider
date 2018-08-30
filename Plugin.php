<?php namespace MartiniMultimedia\Revolution;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Martinimultimedia\Revolution\Components\Slider'=>'rslider'
        ];
    }

    public function registerSettings()
    {
       

    }


   
}
