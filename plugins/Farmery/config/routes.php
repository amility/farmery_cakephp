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
            $routes->connect('/category', ['controller' => 'Category', 'action' => 'index', 'plugin' => 'Farmery', 'prefix' => false], ["_name" => "category"]);
            $routes->connect('/community', ['controller' => 'Community', 'action' => 'index', 'plugin' => 'Farmery', 'prefix' => false], ["_name" => "community"]);
            $routes->connect('/orders', ['controller' => 'Orders', 'action' => 'index', 'plugin' => 'Farmery', 'prefix' => false], ["_name" => "orders"]);
            $routes->connect('/products', ['controller' => 'Products', 'action' => 'index', 'plugin' => 'Farmery', 'prefix' => false], ["_name" => "products"]);
            $routes->connect('/support', ['controller' => 'Support', 'action' => 'index', 'plugin' => 'Farmery', 'prefix' => false], ["_name" => "support"]);
            $routes->connect('/faq', ['controller' => 'Support', 'action' => 'faq', 'plugin' => 'Farmery', 'prefix' => false], ["_name" => "faq"]);
            $routes->connect('/privacyPolicy', ['controller' => 'Support', 'action' => 'privacyPolicy', 'plugin' => 'Farmery', 'prefix' => false], ["_name" => "privacyPolicy"]);
            $routes->connect('/termsandconditions', ['controller' => 'Support', 'action' => 'termsandconditions', 'plugin' => 'Farmery', 'prefix' => false], ["_name" => "termsandconditions"]);
            $routes->connect('/refundPolicy', ['controller' => 'Support', 'action' => 'refundPolicy', 'plugin' => 'Farmery', 'prefix' => false], ["_name" => "refundPolicy"]);
            $routes->connect('/shippingPolicy', ['controller' => 'Support', 'action' => 'shippingPolicy', 'plugin' => 'Farmery', 'prefix' => false], ["_name" => "shippingPolicy"]);
            
            $routes->connect('/whyfarmery', ['controller' => 'Whyfarmery', 'action' => 'index', 'plugin' => 'Farmery', 'prefix' => false], ["_name" => "whyFarmery"]);
            $routes->connect('/subscription', ['controller' => 'Subscription', 'action' => 'index', 'plugin' => 'Farmery', 'prefix' => false], ["_name" => "subscription"]);
            $routes->connect('/wallet', ['controller' => 'Wallet', 'action' => 'index', 'plugin' => 'Farmery', 'prefix' => false], ["_name" => "wallet"]);
            $routes->connect('/general', ['controller' => 'general', 'action' => 'index', 'plugin' => 'Farmery', 'prefix' => false], ["_name" => "general"]);
		});	


    }
);
