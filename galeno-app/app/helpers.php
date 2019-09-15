<?php

if (!function_exists('str_contains')) {
    function str_contains(string $string, string $find)
    {
        return \Illuminate\Support\Str::contains($string, $find);
    }
}
