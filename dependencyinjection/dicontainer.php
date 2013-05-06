<?php

class DIContainer extends BaseContainer {
    public function __construct(){
        parent::__construct('open_atrium');

        // use this to specify the template directory
        $this['TwigTemplateDirectory'] = __DIR__ . '/../templates';

        $this['PageController'] = function($c){
            return new PageController($c['API'], $c['Request']);
        };
    }
}
