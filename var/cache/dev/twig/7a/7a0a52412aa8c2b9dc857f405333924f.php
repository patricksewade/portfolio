<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTestError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* base.html.twig */
class __TwigTemplate_d9b06c4644b89d1eee8130c8c437f476 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\" class=\"scroll-smooth\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"Portfolio d\x27Ernest Patrick SEWADE, Développeur Web Backend PHP / Symfony.\">
    <title>";
        // line 7
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <!-- Favicon -->
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 9
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.png"), "html", null, true);
        yield "\">
    <!-- Tailwind CSS (CDN) -->
    <script src=\"https://cdn.tailwindcss.com\"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              brand: \x27#297fb8\x27, // Bleu premium
              accent: \x27#d97706\x27, // Orange d\x27accentuation (optimisé lisibilité)
            }
          }
        }
      }
    </script>
    <!-- Polices Google (Plus Jakarta Sans & Outfit) -->
    <link href=\"https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700;800;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap\" rel=\"stylesheet\">
    <style>
        body { font-family: \x27Plus Jakarta Sans\x27, sans-serif; }
        h1, h2, h3, h4, h5, h6, .font-display { font-family: \x27Outfit\x27, sans-serif; }
    </style>
    ";
        // line 30
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 31
        yield "</head>
<body class=\"bg-slate-50 text-slate-800 flex flex-col min-h-screen relative selection:bg-brand selection:text-white\">
    <!-- Fond texturé premium (Blobs & Noise) -->
    <div class=\"fixed inset-0 z-[0] pointer-events-none overflow-hidden\">
        <!-- Taches de couleurs floues organiques -->
        <div class=\"absolute -top-[20%] -right-[10%] w-[70vw] h-[70vw] max-w-[800px] max-h-[800px] bg-brand/20 rounded-full blur-[100px] mix-blend-multiply\"></div>
        <div class=\"absolute -bottom-[20%] -left-[10%] w-[60vw] h-[60vw] max-w-[600px] max-h-[600px] bg-accent/20 rounded-full blur-[100px] mix-blend-multiply\"></div>
        
        <!-- Texture Grain de Papier (Très subtil) -->
        <div class=\"absolute inset-0 opacity-[0.02]\" style=\"background-image: url(\x27data:image/svg+xml,%3Csvg viewBox=%220 0 200 200%22 xmlns=%22http://www.w3.org/2000/svg%22%3E%3Cfilter id=%22noiseFilter%22%3E%3CfeTurbulence type=%22fractalNoise%22 baseFrequency=%220.8%22 numOctaves=%223%22 stitchTiles=%22stitch%22/%3E%3C/filter%3E%3Crect width=%22100%25%22 height=%22100%25%22 filter=%22url(%23noiseFilter)%22/%3E%3C/svg%3E\x27);\"></div>
    </div>
    
    <!-- Header passe au-dessus du fond -->
    <header class=\"bg-white/80 backdrop-blur-md shadow-sm sticky top-0 z-50 border-b border-slate-200/50 relative\">
        <div class=\"max-w-6xl mx-auto px-4 py-4 flex justify-between items-center\">
            <a href=\"";
        // line 46
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" title=\"Accueil\" class=\"group flex items-center text-2xl font-extrabold tracking-tight select-none\">
                <span class=\"text-brand font-mono text-3xl font-light mr-2 group-hover:-translate-x-1.5 transition-transform duration-300\">{</span>
                <img src=\"";
        // line 48
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/header-avatar.png"), "html", null, true);
        yield "\" alt=\"Avatar E. P. SEWADE\" class=\"w-10 h-10 rounded-full shadow-sm ring-2 ring-white group-hover:shadow-md group-hover:scale-105 transition-all duration-300\">
                <span class=\"text-accent font-mono text-3xl font-light ml-2 group-hover:translate-x-1.5 transition-transform duration-300\">}</span>
            </a>
            <div class=\"flex items-center gap-2.5 sm:gap-4\">
                <nav class=\"space-x-3 md:space-x-5 lg:space-x-6 font-semibold hidden md:flex items-center\" id=\"main-nav\">
                    <a href=\"";
        // line 53
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "#profil\" class=\"nav-item flex items-center gap-1.5 text-slate-600 hover:text-brand transition-colors py-1 border-b-2 border-transparent\">
                        <svg class=\"w-4 h-4\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z\"></path></svg>
                        À propos
                    </a>
                    <a href=\"";
        // line 57
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "#competences\" class=\"nav-item flex items-center gap-1.5 text-slate-600 hover:text-brand transition-colors py-1 border-b-2 border-transparent\">
                        <svg class=\"w-4 h-4\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M13 10V3L4 14h7v7l9-11h-7z\"></path></svg>
                        Expertises
                    </a>
                    <a href=\"";
        // line 61
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "#experiences\" class=\"nav-item flex items-center gap-1.5 text-slate-600 hover:text-brand transition-colors py-1 border-b-2 border-transparent\">
                        <svg class=\"w-4 h-4\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z\"></path></svg>
                        Parcours
                    </a>
                    <a href=\"";
        // line 65
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "#projets\" class=\"nav-item flex items-center gap-1.5 text-slate-600 hover:text-brand transition-colors py-1 border-b-2 border-transparent\">
                        <svg class=\"w-4 h-4\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z\"></path></svg>
                        Portfolio
                    </a>
                    <a href=\"";
        // line 69
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "#contact\" class=\"nav-item flex items-center gap-1.5 text-slate-600 hover:text-brand transition-colors py-1 border-b-2 border-transparent\">
                        <svg class=\"w-4 h-4\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z\"></path></svg>
                        Contact
                    </a>
                    
                    ";
        // line 74
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 75
            yield "                        <a href=\"";
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
            yield "\" class=\"text-accent hover:text-accent/80 py-1 border-b-2 border-transparent\">Dashboard</a>
                        <a href=\"";
            // line 76
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"text-red-600 hover:text-red-800 py-1 border-b-2 border-transparent\">Déconnexion</a>
                    ";
        }
        // line 78
        yield "                </nav>

                <!-- Actions / Réseaux Sociaux & CV -->
                <div class=\"flex items-center gap-2 border-l border-slate-200 pl-2.5 sm:pl-4\">
                    <!-- Bouton Télécharger CV Premium -->
                    <a href=\"";
        // line 83
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("docs/CV_Ernest_Patrick_SEWADE.pdf"), "html", null, true);
        yield "\" target=\"_blank\" rel=\"noopener noreferrer\" class=\"inline-flex items-center gap-1.5 px-3 py-1.5 text-xs font-bold text-slate-700 hover:text-brand bg-white/80 hover:bg-slate-50 rounded-xl border border-slate-200 hover:border-brand/40 transition-all duration-300 hover:shadow-sm hover:-translate-y-0.5 active:scale-95 shadow-none group backdrop-blur-sm\" title=\"Télécharger mon CV (PDF)\">
                        <span class=\"p-1 rounded-md bg-brand/10 text-brand group-hover:bg-brand group-hover:text-white transition-colors duration-300\">
                            <svg class=\"w-3.5 h-3.5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4\"></path></svg>
                        </span>
                        <span class=\"hidden sm:inline\">Mon CV</span>
                    </a>

                    <!-- Liens Réseaux Sociaux -->
                    <a href=\"https://www.linkedin.com/in/ernest-patrick-sewade/\" target=\"_blank\" rel=\"noopener noreferrer\" class=\"p-2 text-slate-400 hover:text-blue-600 hover:bg-blue-50/80 rounded-xl transition-all duration-300 hover:scale-110 active:scale-95 shadow-sm border border-slate-200/60 bg-white/70 backdrop-blur-sm\" aria-label=\"LinkedIn\" title=\"LinkedIn\">
                        <svg viewBox=\"0 0 24 24\" fill=\"currentColor\" stroke=\"none\" class=\"w-4 h-4\"><path d=\"M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z\"/></svg>
                    </a>
                    <a href=\"https://github.com/patricksewade\" target=\"_blank\" rel=\"noopener noreferrer\" class=\"p-2 text-slate-400 hover:text-slate-900 hover:bg-slate-100 rounded-xl transition-all duration-300 hover:scale-110 active:scale-95 shadow-sm border border-slate-200/60 bg-white/70 backdrop-blur-sm\" aria-label=\"GitHub\" title=\"GitHub\">
                        <svg viewBox=\"0 0 24 24\" fill=\"currentColor\" stroke=\"none\" class=\"w-4 h-4\"><path d=\"M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12\"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </header>
    
    <main class=\"flex-grow max-w-6xl mx-auto w-full px-4 py-12\">
        ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 103, $this->source); })()), "flashes", ["success"], "method", false, false, false, 103));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 104
            yield "            <div class=\"mb-8 p-4 bg-green-100 text-green-800 rounded-lg border border-green-200\">
                ";
            // line 105
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 108
        yield "        
        ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 109, $this->source); })()), "flashes", ["error"], "method", false, false, false, 109));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 110
            yield "            <div class=\"mb-8 p-4 bg-red-100 text-red-800 rounded-lg border border-red-200\">
                ";
            // line 111
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 114
        yield "
        ";
        // line 115
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 116
        yield "    </main>

    <!-- Bouton Back to Top Premium -->
    <button id=\"back-to-top\" type=\"button\" aria-label=\"Retour en haut de page\" title=\"Retour en haut de page\" class=\"fixed bottom-6 right-6 z-40 p-3.5 bg-white/80 hover:bg-brand text-slate-600 hover:text-white backdrop-blur-md border border-slate-200/80 hover:border-brand/40 shadow-lg hover:shadow-xl hover:shadow-brand/20 rounded-2xl transition-all duration-300 transform translate-y-8 opacity-0 pointer-events-none hover:-translate-y-1 active:translate-y-0 active:scale-95 group focus:outline-none focus:ring-2 focus:ring-brand focus:ring-offset-2\">
        <svg class=\"w-5 h-5 transition-transform duration-300 group-hover:-translate-y-0.5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2.5\" d=\"M5 10l7-7m0 0l7 7m-7-7v18\"></path></svg>
    </button>

    <footer class=\"bg-white border-t border-slate-200 mt-auto\">
        <div class=\"max-w-6xl mx-auto px-4 py-8 flex flex-col md:flex-row justify-between items-center text-slate-500 text-sm\">
            <div class=\"mb-4 md:mb-0 flex flex-col md:flex-row md:items-center gap-2 md:gap-6\">
                <span>&copy; ";
        // line 126
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " | Ernest Patrick SEWADE - Tous droits réservés</span>
                <a href=\"";
        // line 127
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_legal");
        yield "\" class=\"text-slate-400 hover:text-slate-600 transition-colors\">Mentions légales</a>
            </div>
            
            <!-- Réseaux sociaux (Mobile & Tablette) -->
            <div class=\"flex xl:hidden space-x-6\">
                <a href=\"https://github.com/patricksewade\" target=\"_blank\" class=\"text-slate-400 hover:text-slate-900 transition-colors\" aria-label=\"GitHub\">
                    <svg viewBox=\"0 0 24 24\" fill=\"currentColor\" stroke=\"none\" class=\"w-5 h-5\"><path d=\"M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12\"/></svg>
                </a>
                <a href=\"https://www.linkedin.com/in/ernest-patrick-sewade/\" target=\"_blank\" class=\"text-slate-400 hover:text-blue-600 transition-colors\" aria-label=\"LinkedIn\">
                    <svg viewBox=\"0 0 24 24\" fill=\"currentColor\" stroke=\"none\" class=\"w-4 h-4\"><path d=\"M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z\"/></svg>
                </a>
            </div>
        </div>
    </footer>
    <script>
        document.addEventListener(\x27DOMContentLoaded\x27, () => {
            const sections = document.querySelectorAll(\x27section[id], div#profil\x27);
            const navItems = document.querySelectorAll(\x27.nav-item\x27);

            const observerOptions = {
                root: null,
                rootMargin: \x27-20% 0px -60% 0px\x27,
                threshold: 0
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const id = entry.target.getAttribute(\x27id\x27);
                        navItems.forEach(item => {
                            item.classList.remove(\x27text-brand\x27, \x27border-brand\x27, \x27font-bold\x27);
                            item.classList.add(\x27text-slate-600\x27, \x27border-transparent\x27);
                            if (item.getAttribute(\x27href\x27) === \x27";
        // line 159
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "#\x27 + id) {
                                item.classList.add(\x27text-brand\x27, \x27border-brand\x27, \x27font-bold\x27);
                                item.classList.remove(\x27text-slate-600\x27, \x27border-transparent\x27);
                            }
                        });
                    }
                });
            }, observerOptions);

            sections.forEach(section => observer.observe(section));

            // Gestion du clic pour mise à jour immédiate
            navItems.forEach(item => {
                item.addEventListener(\x27click\x27, function() {
                    navItems.forEach(nav => {
                        nav.classList.remove(\x27text-brand\x27, \x27border-brand\x27, \x27font-bold\x27);
                        nav.classList.add(\x27text-slate-600\x27, \x27border-transparent\x27);
                    });
                    this.classList.add(\x27text-brand\x27, \x27border-brand\x27, \x27font-bold\x27);
                    this.classList.remove(\x27text-slate-600\x27, \x27border-transparent\x27);
                });
            });

            // Bouton Back to Top
            const backToTopBtn = document.getElementById(\x27back-to-top\x27);
            if (backToTopBtn) {
                const toggleBackToTop = () => {
                    if (window.scrollY > 300) {
                        backToTopBtn.classList.remove(\x27opacity-0\x27, \x27translate-y-8\x27, \x27pointer-events-none\x27);
                        backToTopBtn.classList.add(\x27opacity-100\x27, \x27translate-y-0\x27, \x27pointer-events-auto\x27);
                    } else {
                        backToTopBtn.classList.remove(\x27opacity-100\x27, \x27translate-y-0\x27, \x27pointer-events-auto\x27);
                        backToTopBtn.classList.add(\x27opacity-0\x27, \x27translate-y-8\x27, \x27pointer-events-none\x27);
                    }
                };

                window.addEventListener(\x27scroll\x27, toggleBackToTop, { passive: true });
                toggleBackToTop(); // Initial check

                backToTopBtn.addEventListener(\x27click\x27, () => {
                    window.scrollTo({
                        top: 0,
                        behavior: \x27smooth\x27
                    });
                });
            }
        });
    </script>
    ";
        // line 207
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 208
        yield "</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Portfolio";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 30
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 115
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 207
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  426 => 207,  404 => 115,  382 => 30,  359 => 7,  346 => 208,  344 => 207,  293 => 159,  258 => 127,  254 => 126,  242 => 116,  240 => 115,  237 => 114,  227 => 111,  224 => 110,  220 => 109,  217 => 108,  207 => 105,  204 => 104,  200 => 103,  177 => 83,  170 => 78,  165 => 76,  160 => 75,  158 => 74,  150 => 69,  143 => 65,  136 => 61,  129 => 57,  122 => 53,  114 => 48,  109 => 46,  92 => 31,  90 => 30,  66 => 9,  61 => 7,  53 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\" class=\"scroll-smooth\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"Portfolio d\x27Ernest Patrick SEWADE, Développeur Web Backend PHP / Symfony.\">
    <title>{% block title %}Portfolio{% endblock %}</title>
    <!-- Favicon -->
    <link rel=\"icon\" type=\"image/png\" href=\"{{ asset(\x27favicon.png\x27) }}\">
    <!-- Tailwind CSS (CDN) -->
    <script src=\"https://cdn.tailwindcss.com\"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              brand: \x27#297fb8\x27, // Bleu premium
              accent: \x27#d97706\x27, // Orange d\x27accentuation (optimisé lisibilité)
            }
          }
        }
      }
    </script>
    <!-- Polices Google (Plus Jakarta Sans & Outfit) -->
    <link href=\"https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700;800;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap\" rel=\"stylesheet\">
    <style>
        body { font-family: \x27Plus Jakarta Sans\x27, sans-serif; }
        h1, h2, h3, h4, h5, h6, .font-display { font-family: \x27Outfit\x27, sans-serif; }
    </style>
    {% block stylesheets %}{% endblock %}
</head>
<body class=\"bg-slate-50 text-slate-800 flex flex-col min-h-screen relative selection:bg-brand selection:text-white\">
    <!-- Fond texturé premium (Blobs & Noise) -->
    <div class=\"fixed inset-0 z-[0] pointer-events-none overflow-hidden\">
        <!-- Taches de couleurs floues organiques -->
        <div class=\"absolute -top-[20%] -right-[10%] w-[70vw] h-[70vw] max-w-[800px] max-h-[800px] bg-brand/20 rounded-full blur-[100px] mix-blend-multiply\"></div>
        <div class=\"absolute -bottom-[20%] -left-[10%] w-[60vw] h-[60vw] max-w-[600px] max-h-[600px] bg-accent/20 rounded-full blur-[100px] mix-blend-multiply\"></div>
        
        <!-- Texture Grain de Papier (Très subtil) -->
        <div class=\"absolute inset-0 opacity-[0.02]\" style=\"background-image: url(\x27data:image/svg+xml,%3Csvg viewBox=%220 0 200 200%22 xmlns=%22http://www.w3.org/2000/svg%22%3E%3Cfilter id=%22noiseFilter%22%3E%3CfeTurbulence type=%22fractalNoise%22 baseFrequency=%220.8%22 numOctaves=%223%22 stitchTiles=%22stitch%22/%3E%3C/filter%3E%3Crect width=%22100%25%22 height=%22100%25%22 filter=%22url(%23noiseFilter)%22/%3E%3C/svg%3E\x27);\"></div>
    </div>
    
    <!-- Header passe au-dessus du fond -->
    <header class=\"bg-white/80 backdrop-blur-md shadow-sm sticky top-0 z-50 border-b border-slate-200/50 relative\">
        <div class=\"max-w-6xl mx-auto px-4 py-4 flex justify-between items-center\">
            <a href=\"{{ path(\x27app_home\x27) }}\" title=\"Accueil\" class=\"group flex items-center text-2xl font-extrabold tracking-tight select-none\">
                <span class=\"text-brand font-mono text-3xl font-light mr-2 group-hover:-translate-x-1.5 transition-transform duration-300\">{</span>
                <img src=\"{{ asset(\x27images/header-avatar.png\x27) }}\" alt=\"Avatar E. P. SEWADE\" class=\"w-10 h-10 rounded-full shadow-sm ring-2 ring-white group-hover:shadow-md group-hover:scale-105 transition-all duration-300\">
                <span class=\"text-accent font-mono text-3xl font-light ml-2 group-hover:translate-x-1.5 transition-transform duration-300\">}</span>
            </a>
            <div class=\"flex items-center gap-2.5 sm:gap-4\">
                <nav class=\"space-x-3 md:space-x-5 lg:space-x-6 font-semibold hidden md:flex items-center\" id=\"main-nav\">
                    <a href=\"{{ path(\x27app_home\x27) }}#profil\" class=\"nav-item flex items-center gap-1.5 text-slate-600 hover:text-brand transition-colors py-1 border-b-2 border-transparent\">
                        <svg class=\"w-4 h-4\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z\"></path></svg>
                        À propos
                    </a>
                    <a href=\"{{ path(\x27app_home\x27) }}#competences\" class=\"nav-item flex items-center gap-1.5 text-slate-600 hover:text-brand transition-colors py-1 border-b-2 border-transparent\">
                        <svg class=\"w-4 h-4\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M13 10V3L4 14h7v7l9-11h-7z\"></path></svg>
                        Expertises
                    </a>
                    <a href=\"{{ path(\x27app_home\x27) }}#experiences\" class=\"nav-item flex items-center gap-1.5 text-slate-600 hover:text-brand transition-colors py-1 border-b-2 border-transparent\">
                        <svg class=\"w-4 h-4\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z\"></path></svg>
                        Parcours
                    </a>
                    <a href=\"{{ path(\x27app_home\x27) }}#projets\" class=\"nav-item flex items-center gap-1.5 text-slate-600 hover:text-brand transition-colors py-1 border-b-2 border-transparent\">
                        <svg class=\"w-4 h-4\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z\"></path></svg>
                        Portfolio
                    </a>
                    <a href=\"{{ path(\x27app_home\x27) }}#contact\" class=\"nav-item flex items-center gap-1.5 text-slate-600 hover:text-brand transition-colors py-1 border-b-2 border-transparent\">
                        <svg class=\"w-4 h-4\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z\"></path></svg>
                        Contact
                    </a>
                    
                    {% if is_granted(\x27ROLE_ADMIN\x27) %}
                        <a href=\"{{ path(\x27app_admin_dashboard\x27) }}\" class=\"text-accent hover:text-accent/80 py-1 border-b-2 border-transparent\">Dashboard</a>
                        <a href=\"{{ path(\x27app_logout\x27) }}\" class=\"text-red-600 hover:text-red-800 py-1 border-b-2 border-transparent\">Déconnexion</a>
                    {% endif %}
                </nav>

                <!-- Actions / Réseaux Sociaux & CV -->
                <div class=\"flex items-center gap-2 border-l border-slate-200 pl-2.5 sm:pl-4\">
                    <!-- Bouton Télécharger CV Premium -->
                    <a href=\"{{ asset(\x27docs/CV_Ernest_Patrick_SEWADE.pdf\x27) }}\" target=\"_blank\" rel=\"noopener noreferrer\" class=\"inline-flex items-center gap-1.5 px-3 py-1.5 text-xs font-bold text-slate-700 hover:text-brand bg-white/80 hover:bg-slate-50 rounded-xl border border-slate-200 hover:border-brand/40 transition-all duration-300 hover:shadow-sm hover:-translate-y-0.5 active:scale-95 shadow-none group backdrop-blur-sm\" title=\"Télécharger mon CV (PDF)\">
                        <span class=\"p-1 rounded-md bg-brand/10 text-brand group-hover:bg-brand group-hover:text-white transition-colors duration-300\">
                            <svg class=\"w-3.5 h-3.5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4\"></path></svg>
                        </span>
                        <span class=\"hidden sm:inline\">Mon CV</span>
                    </a>

                    <!-- Liens Réseaux Sociaux -->
                    <a href=\"https://www.linkedin.com/in/ernest-patrick-sewade/\" target=\"_blank\" rel=\"noopener noreferrer\" class=\"p-2 text-slate-400 hover:text-blue-600 hover:bg-blue-50/80 rounded-xl transition-all duration-300 hover:scale-110 active:scale-95 shadow-sm border border-slate-200/60 bg-white/70 backdrop-blur-sm\" aria-label=\"LinkedIn\" title=\"LinkedIn\">
                        <svg viewBox=\"0 0 24 24\" fill=\"currentColor\" stroke=\"none\" class=\"w-4 h-4\"><path d=\"M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z\"/></svg>
                    </a>
                    <a href=\"https://github.com/patricksewade\" target=\"_blank\" rel=\"noopener noreferrer\" class=\"p-2 text-slate-400 hover:text-slate-900 hover:bg-slate-100 rounded-xl transition-all duration-300 hover:scale-110 active:scale-95 shadow-sm border border-slate-200/60 bg-white/70 backdrop-blur-sm\" aria-label=\"GitHub\" title=\"GitHub\">
                        <svg viewBox=\"0 0 24 24\" fill=\"currentColor\" stroke=\"none\" class=\"w-4 h-4\"><path d=\"M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12\"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </header>
    
    <main class=\"flex-grow max-w-6xl mx-auto w-full px-4 py-12\">
        {% for message in app.flashes(\x27success\x27) %}
            <div class=\"mb-8 p-4 bg-green-100 text-green-800 rounded-lg border border-green-200\">
                {{ message }}
            </div>
        {% endfor %}
        
        {% for message in app.flashes(\x27error\x27) %}
            <div class=\"mb-8 p-4 bg-red-100 text-red-800 rounded-lg border border-red-200\">
                {{ message }}
            </div>
        {% endfor %}

        {% block body %}{% endblock %}
    </main>

    <!-- Bouton Back to Top Premium -->
    <button id=\"back-to-top\" type=\"button\" aria-label=\"Retour en haut de page\" title=\"Retour en haut de page\" class=\"fixed bottom-6 right-6 z-40 p-3.5 bg-white/80 hover:bg-brand text-slate-600 hover:text-white backdrop-blur-md border border-slate-200/80 hover:border-brand/40 shadow-lg hover:shadow-xl hover:shadow-brand/20 rounded-2xl transition-all duration-300 transform translate-y-8 opacity-0 pointer-events-none hover:-translate-y-1 active:translate-y-0 active:scale-95 group focus:outline-none focus:ring-2 focus:ring-brand focus:ring-offset-2\">
        <svg class=\"w-5 h-5 transition-transform duration-300 group-hover:-translate-y-0.5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2.5\" d=\"M5 10l7-7m0 0l7 7m-7-7v18\"></path></svg>
    </button>

    <footer class=\"bg-white border-t border-slate-200 mt-auto\">
        <div class=\"max-w-6xl mx-auto px-4 py-8 flex flex-col md:flex-row justify-between items-center text-slate-500 text-sm\">
            <div class=\"mb-4 md:mb-0 flex flex-col md:flex-row md:items-center gap-2 md:gap-6\">
                <span>&copy; {{ \x27now\x27|date(\x27Y\x27) }} | Ernest Patrick SEWADE - Tous droits réservés</span>
                <a href=\"{{ path(\x27app_legal\x27) }}\" class=\"text-slate-400 hover:text-slate-600 transition-colors\">Mentions légales</a>
            </div>
            
            <!-- Réseaux sociaux (Mobile & Tablette) -->
            <div class=\"flex xl:hidden space-x-6\">
                <a href=\"https://github.com/patricksewade\" target=\"_blank\" class=\"text-slate-400 hover:text-slate-900 transition-colors\" aria-label=\"GitHub\">
                    <svg viewBox=\"0 0 24 24\" fill=\"currentColor\" stroke=\"none\" class=\"w-5 h-5\"><path d=\"M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12\"/></svg>
                </a>
                <a href=\"https://www.linkedin.com/in/ernest-patrick-sewade/\" target=\"_blank\" class=\"text-slate-400 hover:text-blue-600 transition-colors\" aria-label=\"LinkedIn\">
                    <svg viewBox=\"0 0 24 24\" fill=\"currentColor\" stroke=\"none\" class=\"w-4 h-4\"><path d=\"M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z\"/></svg>
                </a>
            </div>
        </div>
    </footer>
    <script>
        document.addEventListener(\x27DOMContentLoaded\x27, () => {
            const sections = document.querySelectorAll(\x27section[id], div#profil\x27);
            const navItems = document.querySelectorAll(\x27.nav-item\x27);

            const observerOptions = {
                root: null,
                rootMargin: \x27-20% 0px -60% 0px\x27,
                threshold: 0
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const id = entry.target.getAttribute(\x27id\x27);
                        navItems.forEach(item => {
                            item.classList.remove(\x27text-brand\x27, \x27border-brand\x27, \x27font-bold\x27);
                            item.classList.add(\x27text-slate-600\x27, \x27border-transparent\x27);
                            if (item.getAttribute(\x27href\x27) === \x27{{ path(\x27app_home\x27) }}#\x27 + id) {
                                item.classList.add(\x27text-brand\x27, \x27border-brand\x27, \x27font-bold\x27);
                                item.classList.remove(\x27text-slate-600\x27, \x27border-transparent\x27);
                            }
                        });
                    }
                });
            }, observerOptions);

            sections.forEach(section => observer.observe(section));

            // Gestion du clic pour mise à jour immédiate
            navItems.forEach(item => {
                item.addEventListener(\x27click\x27, function() {
                    navItems.forEach(nav => {
                        nav.classList.remove(\x27text-brand\x27, \x27border-brand\x27, \x27font-bold\x27);
                        nav.classList.add(\x27text-slate-600\x27, \x27border-transparent\x27);
                    });
                    this.classList.add(\x27text-brand\x27, \x27border-brand\x27, \x27font-bold\x27);
                    this.classList.remove(\x27text-slate-600\x27, \x27border-transparent\x27);
                });
            });

            // Bouton Back to Top
            const backToTopBtn = document.getElementById(\x27back-to-top\x27);
            if (backToTopBtn) {
                const toggleBackToTop = () => {
                    if (window.scrollY > 300) {
                        backToTopBtn.classList.remove(\x27opacity-0\x27, \x27translate-y-8\x27, \x27pointer-events-none\x27);
                        backToTopBtn.classList.add(\x27opacity-100\x27, \x27translate-y-0\x27, \x27pointer-events-auto\x27);
                    } else {
                        backToTopBtn.classList.remove(\x27opacity-100\x27, \x27translate-y-0\x27, \x27pointer-events-auto\x27);
                        backToTopBtn.classList.add(\x27opacity-0\x27, \x27translate-y-8\x27, \x27pointer-events-none\x27);
                    }
                };

                window.addEventListener(\x27scroll\x27, toggleBackToTop, { passive: true });
                toggleBackToTop(); // Initial check

                backToTopBtn.addEventListener(\x27click\x27, () => {
                    window.scrollTo({
                        top: 0,
                        behavior: \x27smooth\x27
                    });
                });
            }
        });
    </script>
    {% block javascripts %}{% endblock %}
</body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\portfolio\\templates\\base.html.twig");
    }
}
