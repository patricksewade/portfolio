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

/* macros.html.twig */
class __TwigTemplate_da463f21985fd733f5680db92ae034c7 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "macros.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "macros.html.twig"));

        // line 7
        yield "
";
        // line 48
        yield "
";
        // line 88
        yield "
";
        // line 115
        yield "
";
        // line 153
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1
    public function macro_render_skill_badge($skill_name = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "skill_name" => $skill_name,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_skill_badge"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_skill_badge"));

            // line 2
            yield "<span class=\"inline-flex items-center px-4 py-2 bg-white border border-slate-200 text-slate-700 text-sm font-semibold rounded-full shadow-sm hover:shadow-md hover:border-brand/40 hover:text-brand transition-all cursor-default group\">
    <svg class=\"w-3.5 h-3.5 mr-2 text-brand/70 group-hover:text-brand transition-colors\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"3\" d=\"M5 13l4 4L19 7\"></path></svg>
    ";
            // line 4
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["skill_name"]) || array_key_exists("skill_name", $context) ? $context["skill_name"] : (function () { throw new RuntimeError('Variable "skill_name" does not exist.', 4, $this->source); })()));
            yield "
</span>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 8
    public function macro_render_experience_timeline($exp = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "exp" => $exp,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_experience_timeline"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_experience_timeline"));

            // line 9
            yield "<div class=\"relative pl-8 sm:pl-48 py-6 group\">
    <!-- Ligne verticale et puce -->
    <div class=\"flex flex-col items-center absolute left-2 sm:left-[11rem] h-full top-0\">
        <div class=\"h-6 w-px bg-slate-200 group-hover:bg-accent/40 transition-colors\"></div>
        <div class=\"w-4 h-4 rounded-full bg-white border-4 border-accent z-10 group-hover:scale-125 transition-transform shadow-sm\"></div>
        <div class=\"h-full w-px bg-slate-200 group-hover:bg-accent/40 transition-colors\"></div>
    </div>

    <!-- Contenu -->
    <div class=\"flex flex-col sm:flex-row items-start group-last:before:hidden\">
        <div class=\"sm:absolute sm:left-0 sm:w-40 sm:text-right text-sm font-bold text-slate-500 pt-1 mb-2 sm:mb-0\">
            ";
            // line 20
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["exp"]) || array_key_exists("exp", $context) ? $context["exp"] : (function () { throw new RuntimeError('Variable "exp" does not exist.', 20, $this->source); })()), "period", [], "any", false, false, false, 20));
            yield "
        </div>
        
        <div class=\"bg-white p-6 rounded-2xl border border-slate-100 shadow-sm group-hover:shadow-md transition-all w-full\">
            <h3 class=\"text-xl font-bold text-slate-900\">";
            // line 24
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["exp"]) || array_key_exists("exp", $context) ? $context["exp"] : (function () { throw new RuntimeError('Variable "exp" does not exist.', 24, $this->source); })()), "title", [], "any", false, false, false, 24));
            yield "</h3>
            ";
            // line 25
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["exp"]) || array_key_exists("exp", $context) ? $context["exp"] : (function () { throw new RuntimeError('Variable "exp" does not exist.', 25, $this->source); })()), "company", [], "any", false, false, false, 25)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 26
                yield "                <div class=\"text-brand font-semibold mt-1 mb-3\">
                    ";
                // line 27
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["exp"]) || array_key_exists("exp", $context) ? $context["exp"] : (function () { throw new RuntimeError('Variable "exp" does not exist.', 27, $this->source); })()), "company", [], "any", false, false, false, 27));
                yield " 
                    ";
                // line 28
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["exp"]) || array_key_exists("exp", $context) ? $context["exp"] : (function () { throw new RuntimeError('Variable "exp" does not exist.', 28, $this->source); })()), "location", [], "any", false, false, false, 28)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 29
                    yield "                        <span class=\"text-slate-400 font-normal text-sm ml-1\">• ";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["exp"]) || array_key_exists("exp", $context) ? $context["exp"] : (function () { throw new RuntimeError('Variable "exp" does not exist.', 29, $this->source); })()), "location", [], "any", false, false, false, 29));
                    yield "</span>
                    ";
                }
                // line 31
                yield "                </div>
            ";
            }
            // line 33
            yield "            
            <p class=\"text-slate-600 mt-2 text-sm leading-relaxed\">";
            // line 34
            yield (string) Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["exp"]) || array_key_exists("exp", $context) ? $context["exp"] : (function () { throw new RuntimeError('Variable "exp" does not exist.', 34, $this->source); })()), "description", [], "any", false, false, false, 34), "html", null, true));
            yield "</p>
            
            ";
            // line 36
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["exp"]) || array_key_exists("exp", $context) ? $context["exp"] : (function () { throw new RuntimeError('Variable "exp" does not exist.', 36, $this->source); })()), "stack", [], "any", false, false, false, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 37
                yield "                <div class=\"mt-5 pt-4 border-t border-slate-50 flex flex-wrap gap-2\">
                    <span class=\"text-xs font-bold text-slate-400 uppercase tracking-wider mr-2 self-center\">Stack :</span>
                    ";
                // line 39
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["exp"]) || array_key_exists("exp", $context) ? $context["exp"] : (function () { throw new RuntimeError('Variable "exp" does not exist.', 39, $this->source); })()), "stack", [], "any", false, false, false, 39), ","));
                foreach ($context['_seq'] as $context["_key"] => $context["tech"]) {
                    // line 40
                    yield "                        <span class=\"px-2 py-1 bg-slate-50 text-slate-600 text-xs rounded-md border border-slate-200 font-medium\">";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::trim($context["tech"]));
                    yield "</span>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['tech'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 42
                yield "                </div>
            ";
            }
            // line 44
            yield "        </div>
    </div>
</div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 49
    public function macro_render_education_timeline($edu = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "edu" => $edu,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_education_timeline"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_education_timeline"));

            // line 50
            yield "<div class=\"relative pl-8 sm:pl-48 py-6 group\">
    <!-- Ligne verticale et icône académique -->
    <div class=\"flex flex-col items-center absolute left-2 sm:left-[11rem] h-full top-0\">
        <div class=\"h-6 w-px bg-slate-200 group-hover:bg-brand/40 transition-colors\"></div>
        <div class=\"w-8 h-8 -ml-1 sm:ml-0 rounded-full bg-brand/10 border-2 border-brand flex items-center justify-center z-10 group-hover:scale-110 group-hover:bg-brand transition-all shadow-sm text-brand group-hover:text-white\">
            <svg class=\"w-4 h-4\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 14l9-5-9-5-9 5 9 5z\"></path>
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z\"></path>
            </svg>
        </div>
        <div class=\"h-full w-px bg-slate-200 group-hover:bg-brand/40 transition-colors\"></div>
    </div>

    <!-- Contenu de la formation -->
    <div class=\"flex flex-col sm:flex-row items-start group-last:before:hidden\">
        <div class=\"sm:absolute sm:left-0 sm:w-40 sm:text-right text-sm font-bold text-slate-500 pt-2 mb-2 sm:mb-0\">
            ";
            // line 66
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["edu"]) || array_key_exists("edu", $context) ? $context["edu"] : (function () { throw new RuntimeError('Variable "edu" does not exist.', 66, $this->source); })()), "period", [], "any", false, false, false, 66));
            yield "
        </div>
        
        <div class=\"bg-white p-6 rounded-2xl border border-slate-100 shadow-sm group-hover:shadow-md transition-all w-full relative overflow-hidden\">
            <!-- Élément décoratif en filigrane -->
            <div class=\"absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-brand/5 to-accent/5 rounded-bl-[100px] -mr-8 -mt-8 opacity-60 transition-transform group-hover:scale-110\"></div>
            
            <div class=\"relative z-10\">
                <h3 class=\"text-xl font-bold text-slate-900\">";
            // line 74
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["edu"]) || array_key_exists("edu", $context) ? $context["edu"] : (function () { throw new RuntimeError('Variable "edu" does not exist.', 74, $this->source); })()), "degree", [], "any", false, false, false, 74));
            yield "</h3>
                <div class=\"text-brand font-bold mt-1 mb-4 text-base\">
                    ";
            // line 76
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["edu"]) || array_key_exists("edu", $context) ? $context["edu"] : (function () { throw new RuntimeError('Variable "edu" does not exist.', 76, $this->source); })()), "specialty", [], "any", false, false, false, 76));
            yield "
                </div>
                
                <div class=\"text-sm text-slate-500 font-medium flex items-center pt-4 border-t border-slate-50\">
                    <svg class=\"w-4 h-4 mr-2 text-slate-400\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4\"></path></svg>
                    ";
            // line 81
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["edu"]) || array_key_exists("edu", $context) ? $context["edu"] : (function () { throw new RuntimeError('Variable "edu" does not exist.', 81, $this->source); })()), "school", [], "any", false, false, false, 81));
            yield " • ";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["edu"]) || array_key_exists("edu", $context) ? $context["edu"] : (function () { throw new RuntimeError('Variable "edu" does not exist.', 81, $this->source); })()), "location", [], "any", false, false, false, 81));
            yield "
                </div>
            </div>
        </div>
    </div>
</div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 89
    public function macro_render_certification_card($cert = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "cert" => $cert,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_certification_card"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_certification_card"));

            // line 90
            $context["icon_url"] = (("https://cdn.simpleicons.org/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["cert"]) || array_key_exists("cert", $context) ? $context["cert"] : (function () { throw new RuntimeError('Variable "cert" does not exist.', 90, $this->source); })()), "icon", [], "any", false, false, false, 90)) . "/475569");
            // line 91
            yield "<div class=\"bg-white/80 backdrop-blur-sm border border-slate-200 rounded-2xl p-6 shadow-sm hover:shadow-md transition-all duration-300 group hover:-translate-y-1\">
    <div class=\"flex items-start gap-5\">
        <div class=\"w-14 h-14 rounded-xl bg-slate-50 flex items-center justify-center flex-shrink-0 border border-slate-100 group-hover:scale-110 group-hover:border-brand/30 transition-all duration-300\">
            <img src=\"";
            // line 94
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["icon_url"]) || array_key_exists("icon_url", $context) ? $context["icon_url"] : (function () { throw new RuntimeError('Variable "icon_url" does not exist.', 94, $this->source); })()), "html", null, true);
            yield "\" alt=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cert"]) || array_key_exists("cert", $context) ? $context["cert"] : (function () { throw new RuntimeError('Variable "cert" does not exist.', 94, $this->source); })()), "title", [], "any", false, false, false, 94));
            yield "\" class=\"w-8 h-8 opacity-80 group-hover:opacity-100 transition-opacity\">
        </div>
        <div class=\"flex-1\">
            <h3 class=\"text-xl font-bold text-slate-800 font-display mb-1 group-hover:text-brand transition-colors\">";
            // line 97
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cert"]) || array_key_exists("cert", $context) ? $context["cert"] : (function () { throw new RuntimeError('Variable "cert" does not exist.', 97, $this->source); })()), "title", [], "any", false, false, false, 97));
            yield "</h3>
            <div class=\"text-sm font-semibold text-slate-600 mb-2\">
                Délivré par <span class=\"text-brand\">";
            // line 99
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cert"]) || array_key_exists("cert", $context) ? $context["cert"] : (function () { throw new RuntimeError('Variable "cert" does not exist.', 99, $this->source); })()), "issuer", [], "any", false, false, false, 99));
            yield "</span>
            </div>
            <div class=\"flex items-center gap-4 text-xs font-medium text-slate-500 mt-3 pt-3 border-t border-slate-100\">
                <span class=\"flex items-center gap-1.5\">
                    <svg class=\"w-4 h-4 text-slate-400\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z\"></path></svg>
                    ";
            // line 104
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cert"]) || array_key_exists("cert", $context) ? $context["cert"] : (function () { throw new RuntimeError('Variable "cert" does not exist.', 104, $this->source); })()), "duration", [], "any", false, false, false, 104));
            yield "
                </span>
                <span class=\"flex items-center gap-1.5\">
                    <svg class=\"w-4 h-4 text-slate-400\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\"></path></svg>
                    ";
            // line 108
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cert"]) || array_key_exists("cert", $context) ? $context["cert"] : (function () { throw new RuntimeError('Variable "cert" does not exist.', 108, $this->source); })()), "date", [], "any", false, false, false, 108));
            yield "
                </span>
            </div>
        </div>
    </div>
</div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 116
    public function macro_render_project_card($project = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "project" => $project,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_project_card"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_project_card"));

            // line 117
            $context["featuredClass"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 117, $this->source); })()), "isFeatured", [], "any", false, false, false, 117)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ring-2 ring-brand bg-brand/5") : ("border border-slate-200 hover:border-slate-300"));
            // line 118
            $context["badge"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 118, $this->source); })()), "isFeatured", [], "any", false, false, false, 118)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("<span class=\"absolute top-4 right-4 px-3 py-1 text-xs font-extrabold bg-accent text-white rounded-full shadow-md z-10\">⭐ PROJET PHARE</span>") : (""));
            // line 119
            yield "
<div class=\"bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all p-5 flex flex-col h-full relative group ";
            // line 120
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["featuredClass"]) || array_key_exists("featuredClass", $context) ? $context["featuredClass"] : (function () { throw new RuntimeError('Variable "featuredClass" does not exist.', 120, $this->source); })()), "html", null, true);
            yield "\">
    ";
            // line 121
            yield (string) (isset($context["badge"]) || array_key_exists("badge", $context) ? $context["badge"] : (function () { throw new RuntimeError('Variable "badge" does not exist.', 121, $this->source); })());
            yield "
    
    <!-- Espace Image / Logo -->
    <div class=\"w-full h-48 mb-5 rounded-xl bg-slate-50 flex items-center justify-center border border-slate-100 overflow-hidden group-hover:border-brand/30 transition-colors relative\">
        ";
            // line 125
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 125, $this->source); })()), "imageUrl", [], "any", false, false, false, 125)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 126
                yield "            <img src=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 126, $this->source); })()), "imageUrl", [], "any", false, false, false, 126)), "html", null, true);
                yield "\" alt=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 126, $this->source); })()), "title", [], "any", false, false, false, 126));
                yield "\" class=\"w-full h-full object-cover p-0 transition-transform duration-500 group-hover:scale-110\">
        ";
            } else {
                // line 128
                yield "            <!-- Placeholder générique premium -->
            <div class=\"text-slate-300 flex flex-col items-center\">
                <svg class=\"w-12 h-12 mb-2 opacity-40 group-hover:scale-110 transition-transform duration-300 group-hover:text-brand/50\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"1.5\" d=\"M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z\"></path></svg>
                <span class=\"text-xs font-semibold uppercase tracking-wider text-slate-400\">Logo à venir</span>
            </div>
        ";
            }
            // line 134
            yield "    </div>
    
    <h3 class=\"text-xl font-bold mb-2 text-slate-900 group-hover:text-brand transition-colors line-clamp-2\">";
            // line 136
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 136, $this->source); })()), "title", [], "any", false, false, false, 136));
            yield "</h3>
    <p class=\"text-slate-600 mb-5 flex-grow text-sm leading-relaxed line-clamp-3\">";
            // line 137
            yield (string) Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 137, $this->source); })()), "description", [], "any", false, false, false, 137), "html", null, true));
            yield "</p>
    
    <div class=\"text-xs font-bold text-brand mb-5 bg-brand/10 w-max px-3 py-1.5 rounded-lg border border-brand/20\">
        ⚙️ ";
            // line 140
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["project"] ?? null), "techStack", [], "any", true, true, false, 140)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 140, $this->source); })()), "techStack", [], "any", false, false, false, 140), "À définir")) : ("À définir")));
            yield "
    </div>
    
    <div class=\"flex flex-wrap gap-2 mt-auto pt-4 border-t border-slate-50\">
        ";
            // line 144
            if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 144, $this->source); })()), "githubUrl", [], "any", false, false, false, 144)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 144, $this->source); })()), "githubUrl", [], "any", false, false, false, 144) != "#"))) {
                // line 145
                yield "            <a href=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 145, $this->source); })()), "githubUrl", [], "any", false, false, false, 145));
                yield "\" target=\"_blank\" class=\"flex-1 px-4 py-2 bg-slate-900 text-white text-sm font-display font-semibold tracking-wide rounded-lg hover:bg-slate-800 transition-colors text-center\">Code source</a>
        ";
            }
            // line 147
            yield "        ";
            if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 147, $this->source); })()), "liveDemoUrl", [], "any", false, false, false, 147)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 147, $this->source); })()), "liveDemoUrl", [], "any", false, false, false, 147) != "#"))) {
                // line 148
                yield "            <a href=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 148, $this->source); })()), "liveDemoUrl", [], "any", false, false, false, 148));
                yield "\" target=\"_blank\" class=\"flex-1 px-4 py-2 bg-brand text-white text-sm font-display font-semibold tracking-wide rounded-lg hover:bg-brand/90 transition-colors shadow-sm text-center\">Visiter</a>
        ";
            }
            // line 150
            yield "    </div>
</div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 154
    public function macro_render_button($label = null, $type = "submit", $extra_classes = "", $icon_svg = "", ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "label" => $label,
            "type" => $type,
            "extra_classes" => $extra_classes,
            "icon_svg" => $icon_svg,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_button"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_button"));

            // line 155
            yield "<button type=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 155, $this->source); })()));
            yield "\" class=\"inline-flex items-center justify-center gap-2 px-6 py-3 bg-brand text-white font-display font-semibold tracking-wide rounded-lg hover:bg-brand/90 transition-colors shadow-sm ";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["extra_classes"]) || array_key_exists("extra_classes", $context) ? $context["extra_classes"] : (function () { throw new RuntimeError('Variable "extra_classes" does not exist.', 155, $this->source); })()));
            yield "\">
    ";
            // line 156
            if ((($tmp = (isset($context["icon_svg"]) || array_key_exists("icon_svg", $context) ? $context["icon_svg"] : (function () { throw new RuntimeError('Variable "icon_svg" does not exist.', 156, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 157
                yield "        ";
                yield (string) (isset($context["icon_svg"]) || array_key_exists("icon_svg", $context) ? $context["icon_svg"] : (function () { throw new RuntimeError('Variable "icon_svg" does not exist.', 157, $this->source); })());
                yield "
    ";
            }
            // line 159
            yield "    ";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 159, $this->source); })()));
            yield "
</button>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "macros.html.twig";
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
        return array (  515 => 159,  509 => 157,  507 => 156,  500 => 155,  479 => 154,  465 => 150,  459 => 148,  456 => 147,  450 => 145,  448 => 144,  441 => 140,  435 => 137,  431 => 136,  427 => 134,  419 => 128,  411 => 126,  409 => 125,  402 => 121,  398 => 120,  395 => 119,  393 => 118,  391 => 117,  373 => 116,  354 => 108,  347 => 104,  339 => 99,  334 => 97,  326 => 94,  321 => 91,  319 => 90,  301 => 89,  280 => 81,  272 => 76,  267 => 74,  256 => 66,  238 => 50,  220 => 49,  205 => 44,  201 => 42,  191 => 40,  187 => 39,  183 => 37,  181 => 36,  176 => 34,  173 => 33,  169 => 31,  163 => 29,  161 => 28,  157 => 27,  154 => 26,  152 => 25,  148 => 24,  141 => 20,  128 => 9,  110 => 8,  95 => 4,  91 => 2,  73 => 1,  61 => 153,  58 => 115,  55 => 88,  52 => 48,  49 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% macro render_skill_badge(skill_name) %}
<span class=\"inline-flex items-center px-4 py-2 bg-white border border-slate-200 text-slate-700 text-sm font-semibold rounded-full shadow-sm hover:shadow-md hover:border-brand/40 hover:text-brand transition-all cursor-default group\">
    <svg class=\"w-3.5 h-3.5 mr-2 text-brand/70 group-hover:text-brand transition-colors\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"3\" d=\"M5 13l4 4L19 7\"></path></svg>
    {{ skill_name|escape }}
</span>
{% endmacro %}

{% macro render_experience_timeline(exp) %}
<div class=\"relative pl-8 sm:pl-48 py-6 group\">
    <!-- Ligne verticale et puce -->
    <div class=\"flex flex-col items-center absolute left-2 sm:left-[11rem] h-full top-0\">
        <div class=\"h-6 w-px bg-slate-200 group-hover:bg-accent/40 transition-colors\"></div>
        <div class=\"w-4 h-4 rounded-full bg-white border-4 border-accent z-10 group-hover:scale-125 transition-transform shadow-sm\"></div>
        <div class=\"h-full w-px bg-slate-200 group-hover:bg-accent/40 transition-colors\"></div>
    </div>

    <!-- Contenu -->
    <div class=\"flex flex-col sm:flex-row items-start group-last:before:hidden\">
        <div class=\"sm:absolute sm:left-0 sm:w-40 sm:text-right text-sm font-bold text-slate-500 pt-1 mb-2 sm:mb-0\">
            {{ exp.period|escape }}
        </div>
        
        <div class=\"bg-white p-6 rounded-2xl border border-slate-100 shadow-sm group-hover:shadow-md transition-all w-full\">
            <h3 class=\"text-xl font-bold text-slate-900\">{{ exp.title|escape }}</h3>
            {% if exp.company %}
                <div class=\"text-brand font-semibold mt-1 mb-3\">
                    {{ exp.company|escape }} 
                    {% if exp.location %}
                        <span class=\"text-slate-400 font-normal text-sm ml-1\">• {{ exp.location|escape }}</span>
                    {% endif %}
                </div>
            {% endif %}
            
            <p class=\"text-slate-600 mt-2 text-sm leading-relaxed\">{{ exp.description|nl2br }}</p>
            
            {% if exp.stack %}
                <div class=\"mt-5 pt-4 border-t border-slate-50 flex flex-wrap gap-2\">
                    <span class=\"text-xs font-bold text-slate-400 uppercase tracking-wider mr-2 self-center\">Stack :</span>
                    {% for tech in exp.stack|split(\x27,\x27) %}
                        <span class=\"px-2 py-1 bg-slate-50 text-slate-600 text-xs rounded-md border border-slate-200 font-medium\">{{ tech|trim|escape }}</span>
                    {% endfor %}
                </div>
            {% endif %}
        </div>
    </div>
</div>
{% endmacro %}

{% macro render_education_timeline(edu) %}
<div class=\"relative pl-8 sm:pl-48 py-6 group\">
    <!-- Ligne verticale et icône académique -->
    <div class=\"flex flex-col items-center absolute left-2 sm:left-[11rem] h-full top-0\">
        <div class=\"h-6 w-px bg-slate-200 group-hover:bg-brand/40 transition-colors\"></div>
        <div class=\"w-8 h-8 -ml-1 sm:ml-0 rounded-full bg-brand/10 border-2 border-brand flex items-center justify-center z-10 group-hover:scale-110 group-hover:bg-brand transition-all shadow-sm text-brand group-hover:text-white\">
            <svg class=\"w-4 h-4\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 14l9-5-9-5-9 5 9 5z\"></path>
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z\"></path>
            </svg>
        </div>
        <div class=\"h-full w-px bg-slate-200 group-hover:bg-brand/40 transition-colors\"></div>
    </div>

    <!-- Contenu de la formation -->
    <div class=\"flex flex-col sm:flex-row items-start group-last:before:hidden\">
        <div class=\"sm:absolute sm:left-0 sm:w-40 sm:text-right text-sm font-bold text-slate-500 pt-2 mb-2 sm:mb-0\">
            {{ edu.period|escape }}
        </div>
        
        <div class=\"bg-white p-6 rounded-2xl border border-slate-100 shadow-sm group-hover:shadow-md transition-all w-full relative overflow-hidden\">
            <!-- Élément décoratif en filigrane -->
            <div class=\"absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-brand/5 to-accent/5 rounded-bl-[100px] -mr-8 -mt-8 opacity-60 transition-transform group-hover:scale-110\"></div>
            
            <div class=\"relative z-10\">
                <h3 class=\"text-xl font-bold text-slate-900\">{{ edu.degree|escape }}</h3>
                <div class=\"text-brand font-bold mt-1 mb-4 text-base\">
                    {{ edu.specialty|escape }}
                </div>
                
                <div class=\"text-sm text-slate-500 font-medium flex items-center pt-4 border-t border-slate-50\">
                    <svg class=\"w-4 h-4 mr-2 text-slate-400\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4\"></path></svg>
                    {{ edu.school|escape }} • {{ edu.location|escape }}
                </div>
            </div>
        </div>
    </div>
</div>
{% endmacro %}

{% macro render_certification_card(cert) %}
{% set icon_url = \"https://cdn.simpleicons.org/\" ~ cert.icon ~ \"/475569\" %}
<div class=\"bg-white/80 backdrop-blur-sm border border-slate-200 rounded-2xl p-6 shadow-sm hover:shadow-md transition-all duration-300 group hover:-translate-y-1\">
    <div class=\"flex items-start gap-5\">
        <div class=\"w-14 h-14 rounded-xl bg-slate-50 flex items-center justify-center flex-shrink-0 border border-slate-100 group-hover:scale-110 group-hover:border-brand/30 transition-all duration-300\">
            <img src=\"{{ icon_url }}\" alt=\"{{ cert.title|escape }}\" class=\"w-8 h-8 opacity-80 group-hover:opacity-100 transition-opacity\">
        </div>
        <div class=\"flex-1\">
            <h3 class=\"text-xl font-bold text-slate-800 font-display mb-1 group-hover:text-brand transition-colors\">{{ cert.title|escape }}</h3>
            <div class=\"text-sm font-semibold text-slate-600 mb-2\">
                Délivré par <span class=\"text-brand\">{{ cert.issuer|escape }}</span>
            </div>
            <div class=\"flex items-center gap-4 text-xs font-medium text-slate-500 mt-3 pt-3 border-t border-slate-100\">
                <span class=\"flex items-center gap-1.5\">
                    <svg class=\"w-4 h-4 text-slate-400\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z\"></path></svg>
                    {{ cert.duration|escape }}
                </span>
                <span class=\"flex items-center gap-1.5\">
                    <svg class=\"w-4 h-4 text-slate-400\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\"></path></svg>
                    {{ cert.date|escape }}
                </span>
            </div>
        </div>
    </div>
</div>
{% endmacro %}

{% macro render_project_card(project) %}
{% set featuredClass = project.isFeatured ? \x27ring-2 ring-brand bg-brand/5\x27 : \x27border border-slate-200 hover:border-slate-300\x27 %}
{% set badge = project.isFeatured ? \x27<span class=\"absolute top-4 right-4 px-3 py-1 text-xs font-extrabold bg-accent text-white rounded-full shadow-md z-10\">⭐ PROJET PHARE</span>\x27 : \x27\x27 %}

<div class=\"bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all p-5 flex flex-col h-full relative group {{ featuredClass }}\">
    {{ badge|raw }}
    
    <!-- Espace Image / Logo -->
    <div class=\"w-full h-48 mb-5 rounded-xl bg-slate-50 flex items-center justify-center border border-slate-100 overflow-hidden group-hover:border-brand/30 transition-colors relative\">
        {% if project.imageUrl %}
            <img src=\"{{ asset(project.imageUrl) }}\" alt=\"{{ project.title|escape }}\" class=\"w-full h-full object-cover p-0 transition-transform duration-500 group-hover:scale-110\">
        {% else %}
            <!-- Placeholder générique premium -->
            <div class=\"text-slate-300 flex flex-col items-center\">
                <svg class=\"w-12 h-12 mb-2 opacity-40 group-hover:scale-110 transition-transform duration-300 group-hover:text-brand/50\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"1.5\" d=\"M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z\"></path></svg>
                <span class=\"text-xs font-semibold uppercase tracking-wider text-slate-400\">Logo à venir</span>
            </div>
        {% endif %}
    </div>
    
    <h3 class=\"text-xl font-bold mb-2 text-slate-900 group-hover:text-brand transition-colors line-clamp-2\">{{ project.title|escape }}</h3>
    <p class=\"text-slate-600 mb-5 flex-grow text-sm leading-relaxed line-clamp-3\">{{ project.description|nl2br }}</p>
    
    <div class=\"text-xs font-bold text-brand mb-5 bg-brand/10 w-max px-3 py-1.5 rounded-lg border border-brand/20\">
        ⚙️ {{ project.techStack|default(\x27À définir\x27)|escape }}
    </div>
    
    <div class=\"flex flex-wrap gap-2 mt-auto pt-4 border-t border-slate-50\">
        {% if project.githubUrl and project.githubUrl != \x27#\x27 %}
            <a href=\"{{ project.githubUrl|escape }}\" target=\"_blank\" class=\"flex-1 px-4 py-2 bg-slate-900 text-white text-sm font-display font-semibold tracking-wide rounded-lg hover:bg-slate-800 transition-colors text-center\">Code source</a>
        {% endif %}
        {% if project.liveDemoUrl and project.liveDemoUrl != \x27#\x27 %}
            <a href=\"{{ project.liveDemoUrl|escape }}\" target=\"_blank\" class=\"flex-1 px-4 py-2 bg-brand text-white text-sm font-display font-semibold tracking-wide rounded-lg hover:bg-brand/90 transition-colors shadow-sm text-center\">Visiter</a>
        {% endif %}
    </div>
</div>
{% endmacro %}

{% macro render_button(label, type = \x27submit\x27, extra_classes = \x27\x27, icon_svg = \x27\x27) %}
<button type=\"{{ type|escape }}\" class=\"inline-flex items-center justify-center gap-2 px-6 py-3 bg-brand text-white font-display font-semibold tracking-wide rounded-lg hover:bg-brand/90 transition-colors shadow-sm {{ extra_classes|escape }}\">
    {% if icon_svg %}
        {{ icon_svg|raw }}
    {% endif %}
    {{ label|escape }}
</button>
{% endmacro %}
", "macros.html.twig", "C:\\wamp64\\www\\portfolio\\templates\\macros.html.twig");
    }
}
