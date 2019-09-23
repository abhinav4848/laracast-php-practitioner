<?php
/**
 * Require a view.
 *
 * @param  string $name
 * @param  array  $data
 */
//helper function
function view($name, $data=[])
{
    //convert ['name'=>'Joe', 'age'=>25] to $name = 'Joe, $age=25;
    extract($data);

    return require "app/views/{$name}.view.php";
}

function redirect($path)
{
    header("Location: {$path}");
}