<?php

namespace Farmery\Controller;

use App\Controller\AppController as BaseController;

class AppController extends BaseController
{
    public function initialize() {
        parent::initialize();
        $this->loadComponent('Service');
        $this->loadComponent('Flash');
        $this->loadComponent('Csrf');
        $this->loadComponent('Cookie');

        $pluginName = 'Farmery';
        $this->set(compact("pluginName"));
    }
}
