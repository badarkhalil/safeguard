<?php

if (!function_exists('base_image_url')) {
    function base_image_url($path)
    {
        $baseUrl = 'https://api.engage.bet' . '/storage';
        return rtrim($baseUrl, '/') . '/' . ltrim($path, '/');
    }
}