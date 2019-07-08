<?php

namespace App\Controllers;

use App\Core\App;

class PagesController
{

        
    public function contact()
    {
        return view("contact");
    }


    public function about()
    {
        return view("about");        
    }


    public function index()
    {

        $result = App::get("database")->selectAll("todos");
        
        return view("index" , compact("result"));

    }


    public function form()
    {
       return view("form");
    }


}