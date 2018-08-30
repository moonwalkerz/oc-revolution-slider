<?php namespace Martinimultimedia\Revolution\Components;

use Cms\Classes\ComponentBase;
use MartiniMultimedia\Revolution\Models\Slider as S;

class Slider extends ComponentBase
{
    var $slider;

    public function componentDetails()
    {
        return [
            'name'        => 'Revolution slider Component',
            'description' => 'Revolution slider component for otobercms'
        ];
    }

    public function defineProperties()
    {


        return [
            'id' => [
                'title'       => 'Carousel id',
                'type'        => 'string',
                'default'     => 1
              
            ],
            'actions' => [
                'title'       => 'Import Actions Extension',
                'type'        => 'checkbox',
                'default'     => true,
                'showExternalParam' => false
            ],
            'carousel' => [
                'title'       => 'Import Carousel Extension',
                'type'        => 'checkbox',
                'default'     => true,
                'showExternalParam' => false
            ],
            'kenburn' => [
                'title'       => 'Import Kenburn Extension',
                'type'        => 'checkbox',
                'default'     => true,
                'showExternalParam' => false
            ],
            'layeranimation' => [
                'title'       => 'Import Layer Animation Extension',
                'type'        => 'checkbox',
                'default'     => true,
                'showExternalParam' => false
            ],
            'migration' => [
                'title'       => 'Import Migration Extension',
                'type'        => 'checkbox',
                'default'     => true,
                'showExternalParam' => false
            ],
            'navigation' => [
                'title'       => 'Import Navigation Extension',
                'type'        => 'checkbox',
                'default'     => true,
                'showExternalParam' => false
            ],
            'parallax' => [
                'title'       => 'Import Parallax Extension',
                'type'        => 'checkbox',
                'default'     => true,
                'showExternalParam' => false
            ],
            'slideanims' => [
                'title'       => 'Import Slide Anims Extension',
                'type'        => 'checkbox',
                'default'     => true,
                'showExternalParam' => false
            ],
            'video' => [
                'title'       => 'Import Video Extension',
                'type'        => 'checkbox',
                'default'     => true,
                'showExternalParam' => false
            ]
            ];
    }

    public function onRun() {
        
        $this->addCss('assets/css/settings.css');
        $this->addCss('assets/css/layers.css');
        $this->addCss('assets/css/navigation.css');
    
    
        $this->addJs('assets/js/jquery.themepunch.tools.min.js');
        $this->addJs('assets/js/jquery.themepunch.revolution.min.js');

                $this->loadExtensions(
                ['actions','carousel','kenburn','layeranimation','migration','navigation', 'parallax','slideanims','video']
            );
        $this->slider=$this->page['slider'] = S::where('id','=',$this->property('id'))->first();

     //   dd($this->slider);
    }

    public function onRender() {
    }

    private function loadExtensions($exts) {
        foreach ($exts as $ext)
            if ($this->property($ext)) 
                $this->addJs('assets/js/extensions/revolution.extension.'.$ext.'.min.js');
    }
}
