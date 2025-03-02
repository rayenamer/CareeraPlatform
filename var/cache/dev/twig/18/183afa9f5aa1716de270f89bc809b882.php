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
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* demande_mission/showmoderateur.html.twig */
class __TwigTemplate_d3df3949cf144a4bcc7f291ec56dc799 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "demande_mission/showmoderateur.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "demande_mission/showmoderateur.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "demande_mission/showmoderateur.html.twig", 1);
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

        yield "Détails de la Demande de Mission";
        
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
        yield "    <div class=\"container my-5\">
        <h1 class=\"mb-4 text-center\">Détails de la Demande de Mission</h1>

        <div class=\"card shadow-lg\">
            <div class=\"card-header bg-primary text-white\">
                <h5 class=\"card-title mb-0\">Demande de Mission #";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["demande_mission"]) || array_key_exists("demande_mission", $context) ? $context["demande_mission"] : (function () { throw new RuntimeError('Variable "demande_mission" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11), "html", null, true);
        yield "</h5>
            </div>
            <div class=\"card-body\">
                <table class=\"table table-hover table-bordered\">
                    <tbody>
                        <tr class=\"table-light\">
                            <th scope=\"row\" class=\"w-25\">ID de la Demande</th>
                            <td>";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["demande_mission"]) || array_key_exists("demande_mission", $context) ? $context["demande_mission"] : (function () { throw new RuntimeError('Variable "demande_mission" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18), "html", null, true);
        yield "</td>
                        </tr>
                        <tr class=\"table-light\">
                            <th scope=\"row\">Lettre de Motivation</th>
                            <td>";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["demande_mission"]) || array_key_exists("demande_mission", $context) ? $context["demande_mission"] : (function () { throw new RuntimeError('Variable "demande_mission" does not exist.', 22, $this->source); })()), "message", [], "any", false, false, false, 22), "html", null, true);
        yield "</td>
                        </tr>
                        <tr class=\"table-light\">
                            <th scope=\"row\">Portfolio</th>
                           
                                <td>";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["demande_mission"]) || array_key_exists("demande_mission", $context) ? $context["demande_mission"] : (function () { throw new RuntimeError('Variable "demande_mission" does not exist.', 27, $this->source); })()), "portfolio", [], "any", false, false, false, 27), "html", null, true);
        yield "</td>
                            
                        </tr>
                        <tr class=\"table-light\">
                            <th scope=\"row\">Statut</th>
                            <td>
                                <span class=\"badge bg-";
        // line 33
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["demande_mission"]) || array_key_exists("demande_mission", $context) ? $context["demande_mission"] : (function () { throw new RuntimeError('Variable "demande_mission" does not exist.', 33, $this->source); })()), "status", [], "any", false, false, false, 33) == "acceptée")) ? ("success") : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["demande_mission"]) || array_key_exists("demande_mission", $context) ? $context["demande_mission"] : (function () { throw new RuntimeError('Variable "demande_mission" does not exist.', 33, $this->source); })()), "status", [], "any", false, false, false, 33) == "refusée")) ? ("danger") : ("warning"))));
        yield "\">
                                    ";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["demande_mission"]) || array_key_exists("demande_mission", $context) ? $context["demande_mission"] : (function () { throw new RuntimeError('Variable "demande_mission" does not exist.', 34, $this->source); })()), "status", [], "any", false, false, false, 34), "html", null, true);
        yield "
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>

              
            </div>
        </div>
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
        return "demande_mission/showmoderateur.html.twig";
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
        return array (  145 => 34,  141 => 33,  132 => 27,  124 => 22,  117 => 18,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails de la Demande de Mission{% endblock %}

{% block body %}
    <div class=\"container my-5\">
        <h1 class=\"mb-4 text-center\">Détails de la Demande de Mission</h1>

        <div class=\"card shadow-lg\">
            <div class=\"card-header bg-primary text-white\">
                <h5 class=\"card-title mb-0\">Demande de Mission #{{ demande_mission.id }}</h5>
            </div>
            <div class=\"card-body\">
                <table class=\"table table-hover table-bordered\">
                    <tbody>
                        <tr class=\"table-light\">
                            <th scope=\"row\" class=\"w-25\">ID de la Demande</th>
                            <td>{{ demande_mission.id }}</td>
                        </tr>
                        <tr class=\"table-light\">
                            <th scope=\"row\">Lettre de Motivation</th>
                            <td>{{ demande_mission.message }}</td>
                        </tr>
                        <tr class=\"table-light\">
                            <th scope=\"row\">Portfolio</th>
                           
                                <td>{{ demande_mission.portfolio }}</td>
                            
                        </tr>
                        <tr class=\"table-light\">
                            <th scope=\"row\">Statut</th>
                            <td>
                                <span class=\"badge bg-{{ demande_mission.status == 'acceptée' ? 'success' : (demande_mission.status == 'refusée' ? 'danger' : 'warning') }}\">
                                    {{ demande_mission.status }}
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>

              
            </div>
        </div>
    </div>
{% endblock %}", "demande_mission/showmoderateur.html.twig", "C:\\careera\\templates\\demande_mission\\showmoderateur.html.twig");
    }
}
