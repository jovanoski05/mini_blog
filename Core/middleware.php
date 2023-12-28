<?php

require_once("ErrorHandler.php");

$error_handler = "ErrorHandler";

include "functions.php";

$urls = array( 
    BASE_URI => "index",
    BASE_URI .'all-blogs' => "all-blogs"
);

function redirect($uri, $urls)
{
    if (!array_key_exists($uri, $urls))
    {
        ErrorHandler::get_error_page();

        die();
    }


    include BASE_PATH ."/Core/controllers/". $urls[$uri] .".php";
}

$uri = $_SERVER['REQUEST_URI'];

redirect($uri, $urls);