<?php

$dir = __DIR__ . '/templates/pages_twig';

foreach (glob($dir . '/*.html.twig') as $file) {
    $content = file_get_contents($file);
    
    // Remove $ from variables inside {{ }} and {% %}
    $content = preg_replace_callback('/(\{\{|\{%)(.*?)(\}\}|\%\})/', function($matches) {
        $inner = $matches[2];
        $inner = str_replace('$', '', $inner);
        // Also replace ['key'] with .key
        $inner = preg_replace("/\['(.*?)'\]/", ".$1", $inner);
        $inner = preg_replace('/\["(.*?)"\]/', ".$1", $inner);
        return $matches[1] . $inner . $matches[3];
    }, $content);
    
    // Replace !empty(var) with var is not empty
    $content = preg_replace('/\{%\s*if\s*!empty\((.*?)\)\s*%\}/', '{% if $1 is not empty %}', $content);
    $content = preg_replace('/\{%\s*if\s*empty\((.*?)\)\s*%\}/', '{% if $1 is empty %}', $content);
    
    // Replace BASE_URL . something
    $content = preg_replace('/\{\{\s*BASE_URL\s*\.\s*e\((.*?)\)\s*\}\}/', '{{ $1 }}', $content);
    $content = preg_replace('/\{\{\s*BASE_URL\s*\.\s*(.*?)\s*\}\}/', '{{ $1 }}', $content);
    $content = preg_replace('/\{\{\s*BASE_URL\|escape\s*\}\}/', '', $content);
    
    // Replace e(something) with something|escape
    $content = preg_replace('/e\((.*?)\)/', '$1|escape', $content);

    // Replace (string) cast
    $content = preg_replace('/\(string\)/', '', $content);

    file_put_contents($file, $content);
}
echo "Cleaned Twig syntax\n";
