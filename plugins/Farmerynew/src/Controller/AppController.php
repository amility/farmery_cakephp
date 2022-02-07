<?php

namespace Farmerynew\Controller;

use App\Controller\AppController as BaseController;

class AppController extends BaseController
{
    public function initialize() {
        parent::initialize();
        $this->loadComponent('Service');
        $this->loadComponent('Flash');
        $this->loadComponent('Csrf');
        $this->loadComponent('Cookie');

        $pluginName = 'Farmerynew';
        $this->set(compact("pluginName"));
        $getCities = $this->Service->get('getCities'); 
        $this->set('getCities', $getCities);
    }
}
