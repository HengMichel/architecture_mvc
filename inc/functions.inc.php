<?php
function addLink($controller, $method = "liste", $id = null)
{
    // return ROOT . "?controller=$controller&method=$method" . ($id ? "&id=$id" : "");
    return ROOT . "$controller/$method" . ($id ? "/$id" : "");
}

function debug($var)
{
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
}

function d_exit($var)
{
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
    exit;
}

function redirection($url)
{
    header("Location: $url");
    exit;
}

// ⚠ test
function error($num = 404)
{
    include "error/$num.php";
    exit;
}
