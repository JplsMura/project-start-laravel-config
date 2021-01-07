<?php

if (! function_exists('isActive')) {

    function isActive(string $href, string $class = 'active')
    {

        return $class = (strpos(\Illuminate\Support\Facades\Route::currentRouteName(), $href) === 0 ? $class : '');

    }
}

