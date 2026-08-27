<?php
$dir = __DIR__ . '/templates/pages';
$outDir = __DIR__ . '/templates/pages_twig';
if (!is_dir($outDir)) mkdir($outDir, 0777, true);

foreach (glob($dir . '/*.php') as $file) {
    $content = file_get_contents($file);
    
    // Replace loops
    $content = preg_replace('/<\?php\s+foreach\s*\(\s*\$(.*?)\s+as\s+\$(.*?)\s*\):\s*\?>/', '{% for $2 in $1 %}', $content);
    $content = preg_replace('/<\?php\s+endforeach;\s*\?>/', '{% endfor %}', $content);
    
    // Replace ifs
    $content = preg_replace('/<\?php\s+if\s*\((.*?)\):\s*\?>/', '{% if $1 %}', $content);
    $content = preg_replace('/<\?php\s+elseif\s*\((.*?)\):\s*\?>/', '{% elseif $1 %}', $content);
    $content = preg_replace('/<\?php\s+else:\s*\?>/', '{% else %}', $content);
    $content = preg_replace('/<\?php\s+endif;\s*\?>/', '{% endif %}', $content);
    
    // Replace e() and variables
    $content = preg_replace('/<\?=\s*e\((.*?)\)\s*\?>/', '{{ $1|escape }}', $content);
    $content = preg_replace('/<\?=\s*BASE_URL\s*\.\s*\'(.*?)\'\s*\?>/', '{{ path(\'$1\') }}', $content);
    $content = preg_replace('/<\?=\s*(.*?)\s*\?>/', '{{ $1 }}', $content);
    
    // Replace header/footer layout
    $content = preg_replace('/<\?php\s+declare\(strict_types=1\);\s*require_once.*?header\.php\';[^>]*\?>/s', "{% extends 'base.html.twig' %}\n{% block body %}", $content);
    $content = preg_replace('/<\?php\s+require_once.*?footer\.php\';[^>]*\?>/s', "{% endblock %}", $content);
    
    // Convert object access $proj->getTitle() to twig $proj.title
    // We'll let the developer fix this manually or use regex:
    // $content = preg_replace('/\$([a-zA-Z0-9_]+)->get([a-zA-Z0-9_]+)\(\)/', '$1.$2', $content); // too risky

    $newName = str_replace('.php', '.html.twig', basename($file));
    file_put_contents($outDir . '/' . $newName, $content);
}
echo "Done\n";
