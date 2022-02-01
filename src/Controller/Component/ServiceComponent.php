<?php

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Http\Client;

class ServiceComponent extends Component
{
    public $SERVICE_BASE_URL = '';
    
    public function post($endpoint, $data=[])
    {
        $this->SERVICE_BASE_URL='https://testing.milkmaster.co/V2Api/';
        $http = new Client();
        $response = $http->post(
            $this->SERVICE_BASE_URL.$endpoint,
            json_encode($data),
            ['type' => 'json']
        );
        return $response->getJson();
    }

    public function get($endpoint, $data)
    {
        $this->SERVICE_BASE_URL='https://testing.milkmaster.co/V2Api/';
        $http = new Client();
        $response = $http->get(
            $this->SERVICE_BASE_URL.$endpoint,
            $data
        );
        
        return $response->getJson();
    }
   

}

?>