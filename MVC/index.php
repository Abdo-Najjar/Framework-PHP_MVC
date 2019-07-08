<?php

use App\Core\{Router,Request};

require "vendor/autoload.php";

require "core/bootstrap.php";


try{


  Router::load("app/routes.php")->direct(Request::uri(),Request::method());

  
}catch(Exception $e){

  require "views/error/404.html";

 }