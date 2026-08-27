<?php
$header = file_get_contents("templates/layout/header.php");
$footer = file_get_contents("templates/layout/footer.php");

// Strip PHP opening tag block from header
$header = preg_replace('/<\?php.*?\?>/s', '', $header, 1);

// Fix BASE_URL
$header = str_replace('<?= BASE_URL ?>', '', $header);
$footer = str_replace('<?= BASE_URL ?>', '', $footer);

// Fix login check
$header = str_replace('<?php if (!empty($_SESSION[\'is_admin\'])): ?>', '{% if app.user %}', $header);
$header = str_replace('<?php endif; ?>', '{% endif %}', $header);

// Strip PHP blocks from footer
$footer = preg_replace('/<\?php.*?\?>/s', '', $footer);
$footer = str_replace('<?= date(\'Y\') ?>', '{{ "now"|date("Y") }}', $footer);
$footer = str_replace('<?= $github_url ?>', 'https://github.com/patricksewade', $footer);
$footer = str_replace('<?= $linkedin_url ?>', 'https://www.linkedin.com/in/ernest-patrick-sewade/', $footer);

$base = "<!DOCTYPE html>\n";
$base .= "<html lang=\"fr\" class=\"scroll-smooth\">\n";
$base .= "<head>\n";
$base .= "    <meta charset=\"UTF-8\">\n";
$base .= "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n";
$base .= "    <title>{% block title %}Portfolio{% endblock %}</title>\n";
$base .= "    {% block stylesheets %}\n";
$base .= "        <link rel=\"stylesheet\" href=\"{{ asset('styles/app.css') }}\">\n";
$base .= "    {% endblock %}\n";
$base .= "    {% block javascripts %}\n";
$base .= "        {{ importmap('app') }}\n";
$base .= "    {% endblock %}\n";
$base .= "</head>\n";
$base .= "<body class=\"bg-slate-50 text-slate-800 font-sans antialiased min-h-screen flex flex-col selection:bg-brand selection:text-white\">\n";
$base .= $header;
$base .= "    {% block body %}{% endblock %}\n";
$base .= $footer;

file_put_contents("templates/base.html.twig", $base);
echo "Merged base.html.twig";
