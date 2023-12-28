<?php

class ErrorHandler{

    public static function get_error_page($code = "404")
    {
        include (BASE_PATH ."Core/error_controllers/". $code .".php");
    }

}