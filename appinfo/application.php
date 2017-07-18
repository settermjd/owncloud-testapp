<?php
namespace OCA\TestApp\AppInfo;

use \OCP\AppFramework\App;
use \OCA\TestApp\Controller\PageController;

class Application extends App {

    public function __construct(array $urlParams=array()){
        parent::__construct('testapp', $urlParams);

        $container = $this->getContainer();
        $container->registerService('PageController', function($c) {
            return new PageController(
                $c->query('AppName'),
                $c->query('Request')
            );
        });
    }

}

