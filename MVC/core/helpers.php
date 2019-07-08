<?php

function view($view , $data = []){
    extract($data);

    return require "app/views/{$view}.view.php";

}

function redirect($path){
   return header("location: /{$path}");
}


function dd(...$params)
{

    echo "<pre>";

    foreach($params as $p):

        var_dump($p);

    endforeach;

    echo "</pre>";
    die();
}

