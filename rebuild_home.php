<?php
$macros = <<<EOT
{% macro render_project_card(project) %}
    {% set featuredClass = project.isFeatured ? 'ring-2 ring-brand bg-brand/5' : 'border border-slate-200 hover:border-slate-300' %}
    <div class="bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all p-5 flex flex-col h-full relative group {{ featuredClass }}">
        {% if project.isFeatured %}
            <span class="absolute top-4 right-4 px-3 py-1 text-xs font-extrabold bg-accent text-white rounded-full shadow-md z-10">⭐ PROJET PHARE</span>
        {% endif %}
        
        <div class="w-full h-48 mb-5 rounded-xl bg-slate-50 flex items-center justify-center border border-slate-100 overflow-hidden group-hover:border-brand/30 transition-colors relative">
            {% if project.imageUrl %}
                <img src="{{ project.imageUrl|escape }}" alt="{{ project.title|escape }}" class="w-full h-full object-cover p-0 transition-transform duration-500 group-hover:scale-110">
            {% else %}
                <div class="text-slate-300 flex flex-col items-center">
                    <svg class="w-12 h-12 mb-2 opacity-40 group-hover:scale-110 transition-transform duration-300 group-hover:text-brand/50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    <span class="text-xs font-semibold uppercase tracking-wider text-slate-400">Logo à venir</span>
                </div>
            {% endif %}
        </div>
        
        <h3 class="text-xl font-bold mb-2 text-slate-900 group-hover:text-brand transition-colors line-clamp-2">{{ project.title|escape }}</h3>
        <p class="text-slate-600 mb-5 flex-grow text-sm leading-relaxed line-clamp-3">{{ project.description|escape|nl2br }}</p>
        
        <div class="text-xs font-bold text-brand mb-5 bg-brand/10 w-max px-3 py-1.5 rounded-lg border border-brand/20">
            ⚙️ {{ project.techStack|default('À définir')|escape }}
        </div>
        
        <div class="flex flex-wrap gap-2 mt-auto pt-4 border-t border-slate-50">
            {% if project.githubUrl and project.githubUrl != '#' %}
                <a href="{{ project.githubUrl|escape }}" target="_blank" class="flex-1 px-4 py-2 bg-slate-900 text-white text-sm font-display font-semibold tracking-wide rounded-lg hover:bg-slate-800 transition-colors text-center">Code source</a>
            {% endif %}
            {% if project.liveDemoUrl and project.liveDemoUrl != '#' %}
                <a href="{{ project.liveDemoUrl|escape }}" target="_blank" class="flex-1 px-4 py-2 bg-brand text-white text-sm font-display font-semibold tracking-wide rounded-lg hover:bg-brand/90 transition-colors shadow-sm text-center">Visiter</a>
            {% endif %}
        </div>
    </div>
{% endmacro %}

{% macro render_button(label, type = 'submit', extra_classes = '', icon_svg = '') %}
    <button type="{{ type|escape }}" class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-brand text-white font-display font-semibold tracking-wide rounded-lg hover:bg-brand/90 transition-colors shadow-sm {{ extra_classes|escape }}">
        {% if icon_svg %}
            {{ icon_svg|raw }}
        {% endif %}
        {{ label|escape }}
    </button>
{% endmacro %}
EOT;

$home = shell_exec('git show HEAD:templates/pages/home.php');

$home = preg_replace('/<\?php\s+foreach\s*\(\s*\$(.*?)\s+as\s+\$(.*?)\s*\):\s*\?>/', '{% for $2 in $1 %}', $home);
$home = preg_replace('/<\?php\s+endforeach;\s*\?>/', '{% endfor %}', $home);
$home = preg_replace('/<\?php\s+if\s*\((.*?)\):\s*\?>/', '{% if $1 %}', $home);
$home = preg_replace('/<\?php\s+elseif\s*\((.*?)\):\s*\?>/', '{% elseif $1 %}', $home);
$home = preg_replace('/<\?php\s+else:\s*\?>/', '{% else %}', $home);
$home = preg_replace('/<\?php\s+endif;\s*\?>/', '{% endif %}', $home);
$home = preg_replace('/<\?=\s*e\((.*?)\)\s*\?>/', '{{ $1|escape }}', $home);
$home = preg_replace('/<\?=\s*BASE_URL\s*\.\s*\'(.*?)\'\s*\?>/', '{{ path(\'$1\') }}', $home);
$home = preg_replace('/<\?=\s*(.*?)\s*\?>/', '{{ $1 }}', $home);
$home = preg_replace('/<\?php\s+declare\(strict_types=1\);\s*require_once.*?header\.php\';[^>]*\?>/s', "{% extends 'base.html.twig' %}\n{% import _self as macros %}\n{% block body %}", $home);
$home = preg_replace('/<\?php\s+require_once.*?footer\.php\';[^>]*\?>/s', "{% endblock %}", $home);
$home = preg_replace('/<\?php\s+require_once\s+.*ui_components\.php\';\s*\?>/', $macros, $home);
$home = preg_replace('/<\?php\s+render_project_card\(\$(.*?)\);\s*\?>/', '{{ macros.render_project_card($1) }}', $home);
$home = preg_replace('/<\?php\s+render_skill_badge\((.*?)\);\s*\?>/', '{{ macros.render_skill_badge($1) }}', $home);
$home = preg_replace('/<\?php\s+render_experience_timeline\(\$(.*?)\);\s*\?>/', '{{ macros.render_experience_timeline($1) }}', $home);
$home = preg_replace('/<\?php\s+render_education_timeline\(\$(.*?)\);\s*\?>/', '{{ macros.render_education_timeline($1) }}', $home);
$home = preg_replace('/<\?php\s+render_certification_card\(\$(.*?)\);\s*\?>/', '{{ macros.render_certification_card($1) }}', $home);
$home = preg_replace('/<\?php\s*\$send_icon.*?;/s', '', $home); // Supprime définition $send_icon
$home = preg_replace('/render_button\((.*?), (.*?), (.*?), \$send_icon\);\s*\?>/', '{{ macros.render_button($1, $2, $3, \'<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z"></path></svg>\') }}', $home);

// Clean up $ and array access for twig
$home = preg_replace_callback('/(\{\{|\{%)(.*?)(\}\}|\%\})/', function($matches) {
    $inner = $matches[2];
    $inner = str_replace('$', '', $inner);
    $inner = preg_replace("/\['(.*?)'\]/", ".$1", $inner);
    $inner = preg_replace('/\["(.*?)"\]/', ".$1", $inner);
    return $matches[1] . $inner . $matches[3];
}, $home);

// Fix remaining csrf
$home = preg_replace('/\{\{\s*generate_csrf_token\(\)\|escape\s*\}\}/', "{{ csrf_token('contact') }}", $home);
$home = preg_replace('/\{\{\s*path\(\'\/contact\'\)\s*\}\}/', "{{ path('app_contact') }}", $home);
$home = preg_replace('/\{%\s*if\s*!empty\((.*?)\)\s*%\}/', '{% if $1 is not empty %}', $home);
$home = preg_replace('/\{\{\s*unset\((.*?)\)\s*\}\}/', '', $home); // unset session

file_put_contents(__DIR__ . '/templates/pages/home.html.twig', $home);
echo "Rebuilt home.html.twig\n";
