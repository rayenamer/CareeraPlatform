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

/* offre/index.html.twig */
class __TwigTemplate_194452f27360348310d7c036a08e3628 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offre/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offre/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "offre/index.html.twig", 1);
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

        yield "Liste des Offres";
        
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
        yield "<h1 class=\"mb-3 text-center\">Liste des Offres</h1>

<!-- Recherche avec icône -->
<div class=\"d-flex justify-content-between mb-3\">
    <!-- Bouton \"Consulter état de candidature\" avec marge à gauche et couleur baby blue -->
    <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature");
        yield "\" class=\"btn\" style=\"background-color: hsla(244, 100.00%, 9.80%, 0.93); margin-right: 20px; color: white; border-radius: 20px;\">
        Consulter état de candidature
    </a>
    
    <!-- Formulaire de recherche avec marge à droite -->
    <form action=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recherche");
        yield "\" method=\"GET\" class=\"d-flex\" style=\"margin-left: 20px;\">
        <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Rechercher une offre...\" style=\"border-radius: 20px; padding-left: 10px;\">
        <button type=\"submit\" class=\"btn btn-outline\" style=\"border-radius: 20px;\">
            <i class=\"fa fa-search\" style=\"color:rgb(115, 160, 141);\"></i> <!-- Icône en baby blue -->
        </button>
    </form>
</div>

<div class=\"container mt-5\">
    <div class=\"row\">
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["taboffre"]) || array_key_exists("taboffre", $context) ? $context["taboffre"] : (function () { throw new RuntimeError('Variable "taboffre" does not exist.', 26, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
            // line 27
            yield "            <div class=\"col-md-4 mb-4\">
                <div class=\"card shadow-sm d-flex flex-column\">
                    ";
            // line 29
            if (CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "image", [], "any", false, false, false, 29)) {
                // line 30
                yield "                        <div class=\"d-flex justify-content-center\">
                            <img src=\"";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "image", [], "any", false, false, false, 31))), "html", null, true);
                yield "\" class=\"card-img-top rounded-circle\" alt=\"Image de ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "nomposte", [], "any", false, false, false, 31), "html", null, true);
                yield "\" width=\"150\" height=\"150\">
                        </div>
                    ";
            } else {
                // line 34
                yield "                        <div class=\"d-flex justify-content-center\">
                            <img src=\"";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/default.png"), "html", null, true);
                yield "\" class=\"card-img-top rounded-circle\" alt=\"Image par défaut\" width=\"150\" height=\"150\">
                        </div>
                    ";
            }
            // line 38
            yield "                    <div class=\"card-body d-flex flex-column justify-content-between\">
                        <h5 class=\"card-title text-center\">";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "nomposte", [], "any", false, false, false, 39), "html", null, true);
            yield "</h5>
                        <p class=\"card-text text-center\">
                            <strong>Entreprise:</strong> ";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "entreprise", [], "any", false, false, false, 41), "html", null, true);
            yield "<br>
                            <strong>Localisation:</strong> ";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "localisation", [], "any", false, false, false, 42), "html", null, true);
            yield "<br>
                            <strong>Salaire:</strong> ";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "salaire", [], "any", false, false, false, 43), "html", null, true);
            yield " DT<br>
                            <strong>Type:</strong> ";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "typeoffre", [], "any", false, false, false, 44), "nom", [], "any", false, false, false, 44), "html", null, true);
            yield " | ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "typecontrat", [], "any", false, false, false, 44), "nom", [], "any", false, false, false, 44), "html", null, true);
            yield "<br>
                        </p>

                        <div class=\"d-flex justify-content-center\">
                            <span class=\"badge ";
            // line 48
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "disponibilite", [], "any", false, false, false, 48)) ? ("bg-success") : ("bg-danger"));
            yield "\">
                                ";
            // line 49
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "disponibilite", [], "any", false, false, false, 49)) ? ("Disponible") : ("Non disponible"));
            yield "
                            </span>
                        </div>
                        <div class=\"mt-3\">
                            <a href=\"";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_postuler", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 53)]), "html", null, true);
            yield "\" class=\"btn btn-primary btn-sm w-100\">
                                Postuler
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        // line 64
        if (!$context['_iterated']) {
            // line 61
            yield "            <div class=\"col-12 text-center\">
                <p class=\"text-muted\">Aucune offre disponible.</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['offre'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        yield "    </div>
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
        return "offre/index.html.twig";
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
        return array (  222 => 65,  213 => 61,  211 => 64,  199 => 53,  192 => 49,  188 => 48,  179 => 44,  175 => 43,  171 => 42,  167 => 41,  162 => 39,  159 => 38,  153 => 35,  150 => 34,  142 => 31,  139 => 30,  137 => 29,  133 => 27,  128 => 26,  115 => 16,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Offres{% endblock %}

{% block body %}
<h1 class=\"mb-3 text-center\">Liste des Offres</h1>

<!-- Recherche avec icône -->
<div class=\"d-flex justify-content-between mb-3\">
    <!-- Bouton \"Consulter état de candidature\" avec marge à gauche et couleur baby blue -->
    <a href=\"{{ path('app_candidature') }}\" class=\"btn\" style=\"background-color: hsla(244, 100.00%, 9.80%, 0.93); margin-right: 20px; color: white; border-radius: 20px;\">
        Consulter état de candidature
    </a>
    
    <!-- Formulaire de recherche avec marge à droite -->
    <form action=\"{{ path('app_recherche') }}\" method=\"GET\" class=\"d-flex\" style=\"margin-left: 20px;\">
        <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Rechercher une offre...\" style=\"border-radius: 20px; padding-left: 10px;\">
        <button type=\"submit\" class=\"btn btn-outline\" style=\"border-radius: 20px;\">
            <i class=\"fa fa-search\" style=\"color:rgb(115, 160, 141);\"></i> <!-- Icône en baby blue -->
        </button>
    </form>
</div>

<div class=\"container mt-5\">
    <div class=\"row\">
        {% for offre in taboffre %}
            <div class=\"col-md-4 mb-4\">
                <div class=\"card shadow-sm d-flex flex-column\">
                    {% if offre.image %}
                        <div class=\"d-flex justify-content-center\">
                            <img src=\"{{ asset('uploads/' ~ offre.image) }}\" class=\"card-img-top rounded-circle\" alt=\"Image de {{ offre.nomposte }}\" width=\"150\" height=\"150\">
                        </div>
                    {% else %}
                        <div class=\"d-flex justify-content-center\">
                            <img src=\"{{ asset('uploads/default.png') }}\" class=\"card-img-top rounded-circle\" alt=\"Image par défaut\" width=\"150\" height=\"150\">
                        </div>
                    {% endif %}
                    <div class=\"card-body d-flex flex-column justify-content-between\">
                        <h5 class=\"card-title text-center\">{{ offre.nomposte }}</h5>
                        <p class=\"card-text text-center\">
                            <strong>Entreprise:</strong> {{ offre.entreprise }}<br>
                            <strong>Localisation:</strong> {{ offre.localisation }}<br>
                            <strong>Salaire:</strong> {{ offre.salaire }} DT<br>
                            <strong>Type:</strong> {{ offre.typeoffre.nom }} | {{ offre.typecontrat.nom }}<br>
                        </p>

                        <div class=\"d-flex justify-content-center\">
                            <span class=\"badge {{ offre.disponibilite ? 'bg-success' : 'bg-danger' }}\">
                                {{ offre.disponibilite ? 'Disponible' : 'Non disponible' }}
                            </span>
                        </div>
                        <div class=\"mt-3\">
                            <a href=\"{{ path('app_postuler', { id: offre.id }) }}\" class=\"btn btn-primary btn-sm w-100\">
                                Postuler
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"col-12 text-center\">
                <p class=\"text-muted\">Aucune offre disponible.</p>
            </div>
        {% endfor %}
    </div>
</div>

{% endblock %}
", "offre/index.html.twig", "C:\\careera\\templates\\offre\\index.html.twig");
    }
}
