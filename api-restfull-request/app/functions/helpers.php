<?php

function dd(...$args)
{
    die(var_dump(...$args));
}

function baseRoute(string $route)
{
    return CONFIG['base_url'].$route;
}

function dieError(string $error)
{
    dd($error);
}