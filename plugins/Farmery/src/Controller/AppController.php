<?php

namespace Farmery\Controller;

use App\Controller\AppController as BaseController;

class AppController extends BaseController
{
    public function initialize() {
        parent::initialize();
        $pluginName = 'Farmery';
        $this->set(compact("pluginName"));
    }
}
