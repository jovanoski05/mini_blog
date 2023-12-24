<?php

function dd($variable)
{
    echo "<pre>". var_dump($variable) . "</pre>";
    die();
}