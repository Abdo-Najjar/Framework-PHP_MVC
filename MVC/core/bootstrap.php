<?php

use App\Core\App;

require "core/helpers.php";

App::bind("config" , require "config.php");

App::bind('database', new QueryBuilder
(
    Connection::make(App::get('config')['database'])
));
