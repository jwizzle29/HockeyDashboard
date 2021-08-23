<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controllers;

/**
 * Description of Router
 *
 * @author Josh
 */
class Router extends BaseController {
    private $_routingTable = [];
    //put your code here
    function __construct(){
        $routeStr = APP_NAME ."Home";
        $homeController = new \App\Controllers\HomeController();
        $this->addRoute($routeStr,$homeController);
    }
    
    function route($route){
        if(array_key_exists($route, $this->_routingTable[0])){
            return $this->_routingTable[0][$route]->display();
        }
        return "Not a valid route";
    }
    
    function addRoute($route, $controller){
        array_push($this->_routingTable, [$route => $controller]);
    }
}
