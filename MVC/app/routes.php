<?php



$router->get("","PagesController@index");

$router->get("about" , "PagesController@about");

$router->get("contact" , "PagesController@contact");

$router->get("form" , "PagesController@form");

$router->get("users" ,"UserController@index" );

$router->post("user/store" , "UserController@store");

