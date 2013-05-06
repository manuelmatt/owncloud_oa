<?php

namespace OCA\OpenAtrium;

use \OCA\AppFramework\App;
use \OCA\OpenAtrium\DependencyInjection\DIContainer;

$this->create('open_atrium_index', '/')->action(
    function($params){
        // call the index method on the class PageController
        App::main('PageController', 'index', $params, new DIContainer());
    }
);
