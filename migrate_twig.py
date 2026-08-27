import os, re

def convert(content):
    content = re.sub(r"<\?php\s+foreach\s*\(\s*\$(.*?)\s+as\s+\$(.*?)\s*\):\s*\?>", r"{% for \2 in \1 %}", content)
    content = re.sub(r"<\?php\s+endforeach;\s*\?>", r"{% endfor %}", content)
    content = re.sub(r"<\?php\s+if\s*\((.*?)\):\s*\?>", r"{% if \1 %}", content)
    content = re.sub(r"<\?php\s+elseif\s*\((.*?)\):\s*\?>", r"{% elseif \1 %}", content)
    content = re.sub(r"<\?php\s+else:\s*\?>", r"{% else %}", content)
    content = re.sub(r"<\?php\s+endif;\s*\?>", r"{% endif %}", content)
    content = re.sub(r"<\?=\s*e\((.*?)\)\s*\?>", r"{{ \1|escape }}", content)
    content = re.sub(r"<\?=\s*BASE_URL\s*\.\s*'(.*?)'\s*\?>", r"{{ path('\1') }}", content) # Will need manual fix for route names
    content = re.sub(r"<\?=\s*(.*?)\s*\?>", r"{{ \1 }}", content)
    content = re.sub(r"<\?php\s+require_once\s+.*?header\.php'[^>]*\?>", r"{% extends 'base.html.twig' %}\n{% block body %}", content, flags=re.DOTALL)
    content = re.sub(r"<\?php\s+require_once\s+.*?footer\.php'[^>]*\?>", r"{% endblock %}", content, flags=re.DOTALL)
    content = re.sub(r"<\?php\s+require_once\s+.*ui_components\.php'[^>]*\?>", r"", content)
    content = re.sub(r"<\?php\s+declare\(strict_types=1\);\s*", r"", content)
    content = re.sub(r"<\?php\s+.*?\?>", r"", content, flags=re.DOTALL) # strip other php blocks (like render_button)
    return content

os.makedirs("templates/pages_twig", exist_ok=True)
for root, _, files in os.walk("templates/pages"):
    for file in files:
        if file.endswith(".php"):
            path = os.path.join(root, file)
            with open(path, "r", encoding="utf-8") as f:
                c = f.read()
            c = convert(c)
            new_path = path.replace(".php", ".html.twig").replace("templates\\pages", "templates\\pages_twig")
            os.makedirs(os.path.dirname(new_path), exist_ok=True)
            with open(new_path, "w", encoding="utf-8") as f:
                f.write(c)
