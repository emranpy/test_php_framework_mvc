<?php
const BASE_PATH = '../../';

function dd($value) {
    echo "<pre>";
    print_r( $value);
    echo "</pre>";
}


function base_path($path) {
    return __DIR__ . BASE_PATH. $path;
}


function esc($str) {
    return htmlspecialchars($str);
}