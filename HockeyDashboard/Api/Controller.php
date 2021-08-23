<?php 
namespace App\Api;

class Controller{
	    
    function __construct(){

    }
	        
    function sayHi($route){
        echo "saying hello from controller :D | {$route}";
    }
}
