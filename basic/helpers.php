<?php

/*
 * dd = dump and die;
 * */
function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die;
}

echo "<h1>Hello World</h1>";