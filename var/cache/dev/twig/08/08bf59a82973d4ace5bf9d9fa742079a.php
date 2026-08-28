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

/* pages/admin_project_form.html.twig */
class __TwigTemplate_60c8b51897b4169f95a36c36eb718e17 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/admin_project_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/admin_project_form.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        yield (string) (((($tmp = (isset($context["isEdit"]) || array_key_exists("isEdit", $context) ? $context["isEdit"] : (function () { throw new RuntimeError('Variable "isEdit" does not exist.', 3, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Modifier") : ("Ajouter"));
        yield " un projet | Admin";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<div class=\"max-w-3xl mx-auto bg-white p-8 rounded-2xl shadow-xl border border-slate-100\">
    <div class=\"flex justify-between items-center mb-8\">
        <h1 class=\"text-3xl font-display font-bold text-slate-900\">";
        // line 8
        yield (string) (((($tmp = (isset($context["isEdit"]) || array_key_exists("isEdit", $context) ? $context["isEdit"] : (function () { throw new RuntimeError('Variable "isEdit" does not exist.', 8, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Modifier") : ("Ajouter"));
        yield " un projet</h1>
        <a href=\"";
        // line 9
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\" class=\"text-slate-500 hover:text-slate-800 transition-colors\">
            &larr; Retour au tableau de bord
        </a>
    </div>

    ";
        // line 14
        if ((array_key_exists("errors", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 14, $this->source); })())))) {
            // line 15
            yield "        <div class=\"bg-red-50 border-l-4 border-red-500 p-4 mb-8 rounded-r-lg\">
            <div class=\"flex\">
                <div class=\"flex-shrink-0\">
                    <svg class=\"h-5 w-5 text-red-400\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
                        <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z\" clip-rule=\"evenodd\" />
                    </svg>
                </div>
                <div class=\"ml-3\">
                    <h3 class=\"text-sm font-medium text-red-800\">Il y a des erreurs dans le formulaire :</h3>
                    <ul class=\"mt-2 text-sm text-red-700 list-disc list-inside\">
                        ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 25, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 26
                yield "                            <li>";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["error"]);
                yield "</li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 28
            yield "                    </ul>
                </div>
            </div>
        </div>
    ";
        }
        // line 33
        yield "
    <form action=\"";
        // line 34
        yield (string) (((($tmp = (isset($context["isEdit"]) || array_key_exists("isEdit", $context) ? $context["isEdit"] : (function () { throw new RuntimeError('Variable "isEdit" does not exist.', 34, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_project_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34)]), "html", null, true)) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_project_create")));
        yield "\" method=\"POST\" enctype=\"multipart/form-data\" class=\"space-y-6\">
        <input type=\"hidden\" name=\"csrf_token\" value=\"";
        // line 35
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("project_form"), "html", null, true);
        yield "\">
        
        ";
        // line 37
        if ((($tmp = (isset($context["isEdit"]) || array_key_exists("isEdit", $context) ? $context["isEdit"] : (function () { throw new RuntimeError('Variable "isEdit" does not exist.', 37, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 38
            yield "            <input type=\"hidden\" name=\"id\" value=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38));
            yield "\">
        ";
        }
        // line 40
        yield "
        <!-- Titre -->
        <div>
            <label for=\"title\" class=\"block text-sm font-semibold text-slate-700 mb-1\">Titre <span class=\"text-red-500\">*</span></label>
            <input type=\"text\" id=\"title\" name=\"title\" required
                class=\"w-full px-4 py-3 rounded-lg border border-slate-200 focus:ring-2 focus:ring-brand focus:border-brand transition-colors bg-slate-50 focus:bg-white\"
                value=\"";
        // line 46
        yield (string) (((CoreExtension::getAttribute($this->env, $this->source, ($context["project"] ?? null), "title", [], "any", true, true, false, 46) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 46, $this->source); })()), "title", [], "any", false, false, false, 46)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 46, $this->source); })()), "title", [], "any", false, false, false, 46), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape("")));
        yield "\">
        </div>

        <!-- Description -->
        <div>
            <label for=\"description\" class=\"block text-sm font-semibold text-slate-700 mb-1\">Description <span class=\"text-red-500\">*</span></label>
            <textarea id=\"description\" name=\"description\" rows=\"4\" required
                class=\"w-full px-4 py-3 rounded-lg border border-slate-200 focus:ring-2 focus:ring-brand focus:border-brand transition-colors bg-slate-50 focus:bg-white\">";
        // line 53
        yield (string) (((CoreExtension::getAttribute($this->env, $this->source, ($context["project"] ?? null), "description", [], "any", true, true, false, 53) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 53, $this->source); })()), "description", [], "any", false, false, false, 53)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 53, $this->source); })()), "description", [], "any", false, false, false, 53), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape("")));
        yield "</textarea>
        </div>

        <!-- Tech Stack -->
        <div>
            <label for=\"tech_stack\" class=\"block text-sm font-semibold text-slate-700 mb-1\">Technologies (Tech Stack)</label>
            <input type=\"text\" id=\"tech_stack\" name=\"tech_stack\" placeholder=\"ex: PHP, Symfony, TailwindCSS\"
                class=\"w-full px-4 py-3 rounded-lg border border-slate-200 focus:ring-2 focus:ring-brand focus:border-brand transition-colors bg-slate-50 focus:bg-white\"
                value=\"";
        // line 61
        yield (string) (((CoreExtension::getAttribute($this->env, $this->source, ($context["project"] ?? null), "tech_stack", [], "any", true, true, false, 61) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 61, $this->source); })()), "tech_stack", [], "any", false, false, false, 61)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 61, $this->source); })()), "tech_stack", [], "any", false, false, false, 61), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape("")));
        yield "\">
        </div>

        <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
            <!-- GitHub URL -->
            <div>
                <label for=\"github_url\" class=\"block text-sm font-semibold text-slate-700 mb-1\">URL GitHub</label>
                <input type=\"url\" id=\"github_url\" name=\"github_url\" placeholder=\"https://github.com/...\"
                    class=\"w-full px-4 py-3 rounded-lg border border-slate-200 focus:ring-2 focus:ring-brand focus:border-brand transition-colors bg-slate-50 focus:bg-white\"
                    value=\"";
        // line 70
        yield (string) (((CoreExtension::getAttribute($this->env, $this->source, ($context["project"] ?? null), "github_url", [], "any", true, true, false, 70) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 70, $this->source); })()), "github_url", [], "any", false, false, false, 70)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 70, $this->source); })()), "github_url", [], "any", false, false, false, 70), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape("")));
        yield "\">
            </div>

            <!-- Live Demo URL -->
            <div>
                <label for=\"live_demo_url\" class=\"block text-sm font-semibold text-slate-700 mb-1\">URL Site / Démo</label>
                <input type=\"url\" id=\"live_demo_url\" name=\"live_demo_url\" placeholder=\"https://...\"
                    class=\"w-full px-4 py-3 rounded-lg border border-slate-200 focus:ring-2 focus:ring-brand focus:border-brand transition-colors bg-slate-50 focus:bg-white\"
                    value=\"";
        // line 78
        yield (string) (((CoreExtension::getAttribute($this->env, $this->source, ($context["project"] ?? null), "live_demo_url", [], "any", true, true, false, 78) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 78, $this->source); })()), "live_demo_url", [], "any", false, false, false, 78)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 78, $this->source); })()), "live_demo_url", [], "any", false, false, false, 78), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape("")));
        yield "\">
            </div>
        </div>

        <!-- Image Upload -->
        <div>
            <label for=\"image\" class=\"block text-sm font-semibold text-slate-700 mb-1\">Image du projet</label>
            ";
        // line 85
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["project"] ?? null), "image_url", [], "any", true, true, false, 85) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 85, $this->source); })()), "image_url", [], "any", false, false, false, 85)))) {
            // line 86
            yield "                <div class=\"mb-3\">
                    <p class=\"text-xs text-slate-500 mb-2\">Image actuelle :</p>
                    <img src=\"";
            // line 88
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 88, $this->source); })()), "image_url", [], "any", false, false, false, 88));
            yield "\" alt=\"Aperçu\" class=\"h-24 w-auto rounded border border-slate-200 shadow-sm mb-2\">
                    <label class=\"inline-flex items-center text-sm text-red-600 hover:text-red-700 cursor-pointer\">
                        <input type=\"checkbox\" name=\"remove_image\" value=\"1\" class=\"form-checkbox h-4 w-4 text-red-600 rounded border-gray-300 focus:ring-red-500 mr-2\">
                        Supprimer l\x27image actuelle
                    </label>
                </div>
            ";
        }
        // line 95
        yield "            <input type=\"file\" id=\"image\" name=\"image\" accept=\"image/*\"
                class=\"w-full px-4 py-3 rounded-lg border border-slate-200 focus:ring-2 focus:ring-brand focus:border-brand transition-colors bg-slate-50 focus:bg-white text-sm file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-brand file:text-white hover:file:bg-brand/90 cursor-pointer\">
            <p class=\"mt-1 text-xs text-slate-500\">Formats acceptés : JPG, PNG, GIF, WEBP. Laissez vide pour conserver l\x27image actuelle.</p>
        </div>

        <!-- Is Featured -->
        <div class=\"flex items-center\">
            <input id=\"is_featured\" name=\"is_featured\" type=\"checkbox\" value=\"1\" ";
        // line 102
        yield (string) (((CoreExtension::getAttribute($this->env, $this->source, ($context["project"] ?? null), "is_featured", [], "any", true, true, false, 102) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 102, $this->source); })()), "is_featured", [], "any", false, false, false, 102)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) ? ("checked") : (""));
        yield "
                class=\"h-5 w-5 text-brand focus:ring-brand border-gray-300 rounded cursor-pointer\">
            <label for=\"is_featured\" class=\"ml-3 block text-sm font-medium text-slate-700 cursor-pointer\">
                Mettre ce projet en avant (projet phare)
            </label>
        </div>

        <!-- Actions -->
        <div class=\"pt-6 border-t border-slate-100 flex justify-end space-x-4\">
            <a href=\"";
        // line 111
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\" class=\"px-6 py-3 border border-slate-300 shadow-sm text-sm font-medium rounded-lg text-slate-700 bg-white hover:bg-slate-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand transition-colors\">
                Annuler
            </a>
            <button type=\"submit\" class=\"px-6 py-3 border border-transparent shadow-sm text-sm font-medium rounded-lg text-white bg-brand hover:bg-brand/90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand transition-colors\">
                ";
        // line 115
        yield (string) (((($tmp = (isset($context["isEdit"]) || array_key_exists("isEdit", $context) ? $context["isEdit"] : (function () { throw new RuntimeError('Variable "isEdit" does not exist.', 115, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Enregistrer les modifications") : ("Ajouter le projet"));
        yield "
            </button>
        </div>
    </form>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin_project_form.html.twig";
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
        return array (  279 => 115,  272 => 111,  260 => 102,  251 => 95,  241 => 88,  237 => 86,  235 => 85,  225 => 78,  214 => 70,  202 => 61,  191 => 53,  181 => 46,  173 => 40,  167 => 38,  165 => 37,  160 => 35,  156 => 34,  153 => 33,  146 => 28,  136 => 26,  132 => 25,  120 => 15,  118 => 14,  110 => 9,  106 => 8,  102 => 6,  89 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27base.html.twig\x27 %}

{% block title %}{{ isEdit ? \x27Modifier\x27 : \x27Ajouter\x27 }} un projet | Admin{% endblock %}

{% block body %}
<div class=\"max-w-3xl mx-auto bg-white p-8 rounded-2xl shadow-xl border border-slate-100\">
    <div class=\"flex justify-between items-center mb-8\">
        <h1 class=\"text-3xl font-display font-bold text-slate-900\">{{ isEdit ? \x27Modifier\x27 : \x27Ajouter\x27 }} un projet</h1>
        <a href=\"{{ path(\x27app_admin_dashboard\x27) }}\" class=\"text-slate-500 hover:text-slate-800 transition-colors\">
            &larr; Retour au tableau de bord
        </a>
    </div>

    {% if errors is defined and errors is not empty %}
        <div class=\"bg-red-50 border-l-4 border-red-500 p-4 mb-8 rounded-r-lg\">
            <div class=\"flex\">
                <div class=\"flex-shrink-0\">
                    <svg class=\"h-5 w-5 text-red-400\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
                        <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z\" clip-rule=\"evenodd\" />
                    </svg>
                </div>
                <div class=\"ml-3\">
                    <h3 class=\"text-sm font-medium text-red-800\">Il y a des erreurs dans le formulaire :</h3>
                    <ul class=\"mt-2 text-sm text-red-700 list-disc list-inside\">
                        {% for error in errors %}
                            <li>{{ error|escape }}</li>
                        {% endfor %}
                    </ul>
                </div>
            </div>
        </div>
    {% endif %}

    <form action=\"{{ isEdit ? path(\x27app_admin_project_edit\x27, {\x27id\x27: project.id}) : path(\x27app_admin_project_create\x27) }}\" method=\"POST\" enctype=\"multipart/form-data\" class=\"space-y-6\">
        <input type=\"hidden\" name=\"csrf_token\" value=\"{{ csrf_token(\x27project_form\x27) }}\">
        
        {% if isEdit %}
            <input type=\"hidden\" name=\"id\" value=\"{{ project.id|escape }}\">
        {% endif %}

        <!-- Titre -->
        <div>
            <label for=\"title\" class=\"block text-sm font-semibold text-slate-700 mb-1\">Titre <span class=\"text-red-500\">*</span></label>
            <input type=\"text\" id=\"title\" name=\"title\" required
                class=\"w-full px-4 py-3 rounded-lg border border-slate-200 focus:ring-2 focus:ring-brand focus:border-brand transition-colors bg-slate-50 focus:bg-white\"
                value=\"{{ project.title ?? \x27\x27|escape }}\">
        </div>

        <!-- Description -->
        <div>
            <label for=\"description\" class=\"block text-sm font-semibold text-slate-700 mb-1\">Description <span class=\"text-red-500\">*</span></label>
            <textarea id=\"description\" name=\"description\" rows=\"4\" required
                class=\"w-full px-4 py-3 rounded-lg border border-slate-200 focus:ring-2 focus:ring-brand focus:border-brand transition-colors bg-slate-50 focus:bg-white\">{{ project.description ?? \x27\x27|escape }}</textarea>
        </div>

        <!-- Tech Stack -->
        <div>
            <label for=\"tech_stack\" class=\"block text-sm font-semibold text-slate-700 mb-1\">Technologies (Tech Stack)</label>
            <input type=\"text\" id=\"tech_stack\" name=\"tech_stack\" placeholder=\"ex: PHP, Symfony, TailwindCSS\"
                class=\"w-full px-4 py-3 rounded-lg border border-slate-200 focus:ring-2 focus:ring-brand focus:border-brand transition-colors bg-slate-50 focus:bg-white\"
                value=\"{{ project.tech_stack ?? \x27\x27|escape }}\">
        </div>

        <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
            <!-- GitHub URL -->
            <div>
                <label for=\"github_url\" class=\"block text-sm font-semibold text-slate-700 mb-1\">URL GitHub</label>
                <input type=\"url\" id=\"github_url\" name=\"github_url\" placeholder=\"https://github.com/...\"
                    class=\"w-full px-4 py-3 rounded-lg border border-slate-200 focus:ring-2 focus:ring-brand focus:border-brand transition-colors bg-slate-50 focus:bg-white\"
                    value=\"{{ project.github_url ?? \x27\x27|escape }}\">
            </div>

            <!-- Live Demo URL -->
            <div>
                <label for=\"live_demo_url\" class=\"block text-sm font-semibold text-slate-700 mb-1\">URL Site / Démo</label>
                <input type=\"url\" id=\"live_demo_url\" name=\"live_demo_url\" placeholder=\"https://...\"
                    class=\"w-full px-4 py-3 rounded-lg border border-slate-200 focus:ring-2 focus:ring-brand focus:border-brand transition-colors bg-slate-50 focus:bg-white\"
                    value=\"{{ project.live_demo_url ?? \x27\x27|escape }}\">
            </div>
        </div>

        <!-- Image Upload -->
        <div>
            <label for=\"image\" class=\"block text-sm font-semibold text-slate-700 mb-1\">Image du projet</label>
            {% if project.image_url is defined and project.image_url is not empty %}
                <div class=\"mb-3\">
                    <p class=\"text-xs text-slate-500 mb-2\">Image actuelle :</p>
                    <img src=\"{{ project.image_url|escape }}\" alt=\"Aperçu\" class=\"h-24 w-auto rounded border border-slate-200 shadow-sm mb-2\">
                    <label class=\"inline-flex items-center text-sm text-red-600 hover:text-red-700 cursor-pointer\">
                        <input type=\"checkbox\" name=\"remove_image\" value=\"1\" class=\"form-checkbox h-4 w-4 text-red-600 rounded border-gray-300 focus:ring-red-500 mr-2\">
                        Supprimer l\x27image actuelle
                    </label>
                </div>
            {% endif %}
            <input type=\"file\" id=\"image\" name=\"image\" accept=\"image/*\"
                class=\"w-full px-4 py-3 rounded-lg border border-slate-200 focus:ring-2 focus:ring-brand focus:border-brand transition-colors bg-slate-50 focus:bg-white text-sm file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-brand file:text-white hover:file:bg-brand/90 cursor-pointer\">
            <p class=\"mt-1 text-xs text-slate-500\">Formats acceptés : JPG, PNG, GIF, WEBP. Laissez vide pour conserver l\x27image actuelle.</p>
        </div>

        <!-- Is Featured -->
        <div class=\"flex items-center\">
            <input id=\"is_featured\" name=\"is_featured\" type=\"checkbox\" value=\"1\" {{ project.is_featured is defined and project.is_featured ? \x27checked\x27 : \x27\x27 }}
                class=\"h-5 w-5 text-brand focus:ring-brand border-gray-300 rounded cursor-pointer\">
            <label for=\"is_featured\" class=\"ml-3 block text-sm font-medium text-slate-700 cursor-pointer\">
                Mettre ce projet en avant (projet phare)
            </label>
        </div>

        <!-- Actions -->
        <div class=\"pt-6 border-t border-slate-100 flex justify-end space-x-4\">
            <a href=\"{{ path(\x27app_admin_dashboard\x27) }}\" class=\"px-6 py-3 border border-slate-300 shadow-sm text-sm font-medium rounded-lg text-slate-700 bg-white hover:bg-slate-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand transition-colors\">
                Annuler
            </a>
            <button type=\"submit\" class=\"px-6 py-3 border border-transparent shadow-sm text-sm font-medium rounded-lg text-white bg-brand hover:bg-brand/90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand transition-colors\">
                {{ isEdit ? \x27Enregistrer les modifications\x27 : \x27Ajouter le projet\x27 }}
            </button>
        </div>
    </form>
</div>
{% endblock %}
", "pages/admin_project_form.html.twig", "C:\\wamp64\\www\\portfolio\\templates\\pages\\admin_project_form.html.twig");
    }
}
