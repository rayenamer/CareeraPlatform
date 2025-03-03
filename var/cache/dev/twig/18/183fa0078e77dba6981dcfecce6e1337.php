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

/* demande_mission/mes_candidatures.html.twig */
class __TwigTemplate_b79d8ad3ef3d817dfd5f605701d7e908 extends Template
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
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "demande_mission/mes_candidatures.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "demande_mission/mes_candidatures.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "demande_mission/mes_candidatures.html.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
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

        yield "Mes Candidatures";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "<div class=\"container mt-5\">
    <h1 class=\"text-center mb-4\">📌 Mes Candidatures</h1>

    ";
        // line 11
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["candidatures"]) || array_key_exists("candidatures", $context) ? $context["candidatures"] : (function () { throw new RuntimeError('Variable "candidatures" does not exist.', 11, $this->source); })()))) {
            // line 12
            yield "        <div class=\"row\">
            ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["candidatures"]) || array_key_exists("candidatures", $context) ? $context["candidatures"] : (function () { throw new RuntimeError('Variable "candidatures" does not exist.', 13, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["candidature"]) {
                // line 14
                yield "                <div class=\"col-md-6\">
                    <div class=\"card shadow-sm mb-3\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title text-primary\">";
                // line 17
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "mission", [], "any", false, false, false, 17), "titre", [], "any", false, false, false, 17), "html", null, true);
                yield "</h5>
                            <p class=\"card-text\">
                                <strong>Statut :</strong> 
                                <span class=\"badge ";
                // line 20
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "etat", [], "any", false, false, false, 20) == "acceptée")) {
                    yield " bg-success ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "etat", [], "any", false, false, false, 20) == "refusée")) {
                    yield " bg-danger ";
                } else {
                    yield " bg-warning ";
                }
                yield "\">
                                    ";
                // line 21
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "etat", [], "any", false, false, false, 21)), "html", null, true);
                yield "
                                </span>
                            </p>
                            <p class=\"card-text\">
                                <strong>Score :</strong> 
                                ";
                // line 26
                yield (( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "score", [], "any", false, false, false, 26))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "score", [], "any", false, false, false, 26), "html", null, true)) : ("N/A"));
                yield "
                            </p>
                        </div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['candidature'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            yield "        </div>
    ";
        } else {
            // line 34
            yield "        <div class=\"alert alert-info text-center\" role=\"alert\">
            🎯 Vous n'avez encore postulé à aucune mission.
        </div>
    ";
        }
        // line 38
        yield "</div>
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
        return "demande_mission/mes_candidatures.html.twig";
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
        return array (  165 => 38,  159 => 34,  155 => 32,  143 => 26,  135 => 21,  125 => 20,  119 => 17,  114 => 14,  110 => 13,  107 => 12,  105 => 11,  100 => 8,  87 => 7,  64 => 5,  41 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/demande_mission/mes_candidatures.html.twig #}

{% extends 'base.html.twig' %}

{% block title %}Mes Candidatures{% endblock %}

{% block body %}
<div class=\"container mt-5\">
    <h1 class=\"text-center mb-4\">📌 Mes Candidatures</h1>

    {% if candidatures is not empty %}
        <div class=\"row\">
            {% for candidature in candidatures %}
                <div class=\"col-md-6\">
                    <div class=\"card shadow-sm mb-3\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title text-primary\">{{ candidature.mission.titre }}</h5>
                            <p class=\"card-text\">
                                <strong>Statut :</strong> 
                                <span class=\"badge {% if candidature.etat == 'acceptée' %} bg-success {% elseif candidature.etat == 'refusée' %} bg-danger {% else %} bg-warning {% endif %}\">
                                    {{ candidature.etat|capitalize }}
                                </span>
                            </p>
                            <p class=\"card-text\">
                                <strong>Score :</strong> 
                                {{ candidature.score is not null ? candidature.score : 'N/A' }}
                            </p>
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
    {% else %}
        <div class=\"alert alert-info text-center\" role=\"alert\">
            🎯 Vous n'avez encore postulé à aucune mission.
        </div>
    {% endif %}
</div>
{% endblock %}
", "demande_mission/mes_candidatures.html.twig", "C:\\careera\\templates\\demande_mission\\mes_candidatures.html.twig");
    }
}
