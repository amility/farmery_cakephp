<?php
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::plugin(
    'Farmery',
    ['path' => '/'],
    function (RouteBuilder $routes) {
        $routes->fallbacks(DashedRoute::class);
        $routes->scope('/', function ($routes) {
            $routes->connect('/', ['controller' => 'Home', 'action' => 'index', 'plugin' => 'Farmery', 'prefix' => false], ["_name" => "home"]);
            $routes->connect('/community', ['controller' => 'Community', 'action' => 'index', 'plugin' => 'Farmery', 'prefix' => false], ["_name" => "community"]);
            $routes->connect('/community/{community_name}', ['controller' => 'Community', 'action' => 'index', 'plugin' => 'Farmery', 'prefix' => false], ["_name" => "community.community_name"]);
            $routes->connect('/orders', ['controller' => 'Orders', 'action' => 'index', 'plugin' => 'Farmery', 'prefix' => false], ["_name" => "orders"]);
            $routes->connect('/products', ['controller' => 'Products', 'action' => 'index', 'plugin' => 'Farmery', 'prefix' => false], ["_name" => "products"]);
            $routes->connect('/products/{type}/{cat_id}', ['controller' => 'Products', 'action' => 'index', 'plugin' => 'Farmery', 'prefix' => false], ["_name" => "products.cat"]);
            
            $routes->connect('/products/category/{category_type}/{category_id}/detail/{product_id}', ['controller' => 'Products', 'action' => 'productDetails', 'plugin' => 'Farmery', 'prefix' => false], ["_name" => "productDetails"]);
            
            $routes->connect('/support', ['controller' => 'Support', 'action' => 'index', 'plugin' => 'Farmery', 'prefix' => false], ["_name" => "support"]);
            $routes->connect('/support/{cat_id}/{cat_name}', ['controller' => 'Support', 'action' => 'index', 'plugin' => 'Farmery', 'prefix' => false], ["_name" => "support.cat"]);
            $routes->connect('/faq', ['controller' => 'Support', 'action' => 'faq', 'plugin' => 'Farmery', 'prefix' => false], ["_name" => "faq.cat"]);
            $routes->connect('/faq/{cat_id}/{cat_name}', ['controller' => 'Support', 'action' => 'faq', 'plugin' => 'Farmery', 'prefix' => false], ["_name" => "faq"]);
            $routes->connect('/privacyPolicy', ['controller' => 'Support', 'action' => 'privacyPolicy', 'plugin' => 'Farmery', 'prefix' => false], ["_name" => "privacyPolicy"]);
            $routes->connect('/termsandconditions', ['controller' => 'Support', 'action' => 'termsandconditions', 'plugin' => 'Farmery', 'prefix' => false], ["_name" => "termsandconditions"]);
            $routes->connect('/refundPolicy', ['controller' => 'Support', 'action' => 'refundPolicy', 'plugin' => 'Farmery', 'prefix' => false], ["_name" => "refundPolicy"]);
            $routes->connect('/shippingPolicy', ['controller' => 'Support', 'action' => 'shippingPolicy', 'plugin' => 'Farmery', 'prefix' => false], ["_name" => "shippingPolicy"]);
            
            $routes->connect('/productAjax', ['controller' => 'Home', 'action' => 'productAjax', 'plugin' => 'Farmery', 'prefix' => false], ["_name" => "productAjax"]);
            $routes->connect('/citiesAjax', ['controller' => 'Home', 'action' => 'citiesAjax', 'plugin' => 'Farmery', 'prefix' => false], ["_name" => "citiesAjax"]);
            
            $routes->connect('/sendRegisterOtp', ['controller' => 'Registration', 'action' => 'sendRegisterOtp', 'plugin' => 'Farmery', 'prefix' => false], ["_name" => "sendRegisterOtp"]);
            
            $routes->connect('/whyFarmery', ['controller' => 'Whyfarmery', 'action' => 'index', 'plugin' => 'Farmery', 'prefix' => false], ["_name" => "whyFarmery"]);
            $routes->connect('/wallet', ['controller' => 'Wallet', 'action' => 'index', 'plugin' => 'Farmery', 'prefix' => false], ["_name" => "wallet"]);
		});	


    }
);
