<?php

 
$router->group(['prefix' => 'api/v1'], function () use ($router) {
    $router->get("/",function(){
        return "Index";
    });
    $router->get("transactions","HomeController@index");
}); 


?>