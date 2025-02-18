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
        yield "<div class=\"row\">
    <div class=\"col-md-12\">
    </div>
    <div class=\"col-md-12\">
    </div>
</div>


<!-- Titre déplacé ici -->
<h1 class=\"mt-5 mb-4 text-center\">Liste des Offres</h1>
<!-- Recherche avec icône -->
<div class=\"d-flex align-items-center justify-content-between mb-3\">
    <!-- Bouton \"Consulter état de candidature\" -->
    <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature");
        yield "\" class=\"btn btn btn-lg\" 
       style=\"background-color: rgb(255, 255, 255); /* Gris Bootstrap */
              color: rgb(50, 52, 53); 
              border-radius: 20px;
              margin-right: 20px;
              text-decoration: underline;\">Consulter état de candidature
    </a>

    <!-- Formulaire de recherche -->
    <form action=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recherche");
        yield "\" method=\"GET\" class=\"d-flex align-items-center\">
        <input type=\"text\" name=\"search\" class=\"form-control form-control-lg\" 
               placeholder=\"Rechercher une offre...\" 
               style=\"border-radius: 20px; padding-left: 20px; margin-right: 10px;\">
        <button type=\"submit\" class=\"btn btn-outline btn-lg\" 
                style=\"border-radius: 20px;\">
            <i class=\"fa fa-search\" style=\"color: rgb(115, 160, 141);\"></i>
        </button>
    </form>
</div>


<div class=\"container mt-5\">
    <div class=\"row\">
        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["taboffre"]) || array_key_exists("taboffre", $context) ? $context["taboffre"] : (function () { throw new RuntimeError('Variable "taboffre" does not exist.', 42, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
            // line 43
            yield "            <div class=\"col-md-4 mb-4\">
                <div class=\"card shadow-sm d-flex flex-column\">
                    ";
            // line 45
            if (CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "image", [], "any", false, false, false, 45)) {
                // line 46
                yield "                        <div class=\"d-flex justify-content-center\">
                            <img src=\"";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "image", [], "any", false, false, false, 47))), "html", null, true);
                yield "\" 
                                 class=\"rounded-circle\" 
                                 alt=\"Image de ";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "nomposte", [], "any", false, false, false, 49), "html", null, true);
                yield "\" 
                                 style=\"width: 150px; height: 120px; object-fit: cover; 
                                        border: 3px solid white; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);\">
                        </div>
                    ";
            } else {
                // line 54
                yield "                        <div class=\"d-flex justify-content-center\">
                            <img src=\"";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/default.png"), "html", null, true);
                yield "\" class=\"card-img-top rounded-circle\" alt=\"Image par défaut\" width=\"100\" height=\"100\">
                        </div>
                    ";
            }
            // line 58
            yield "                    <div class=\"card-body d-flex flex-column justify-content-between\">
                        <h5 class=\"card-title text-center\">";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "nomposte", [], "any", false, false, false, 59), "html", null, true);
            yield "</h5>
                        <p class=\"card-text text-center\">
                            <strong>Entreprise:</strong> ";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "entreprise", [], "any", false, false, false, 61), "html", null, true);
            yield "<br>
                            <strong>Localisation:</strong> ";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "localisation", [], "any", false, false, false, 62), "html", null, true);
            yield "<br>
                            <strong>Salaire:</strong> ";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "salaire", [], "any", false, false, false, 63), "html", null, true);
            yield " DT<br>
                            <strong>Type:</strong> ";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "typeoffre", [], "any", false, false, false, 64), "nom", [], "any", false, false, false, 64), "html", null, true);
            yield " | ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "typecontrat", [], "any", false, false, false, 64), "nom", [], "any", false, false, false, 64), "html", null, true);
            yield "<br>
                        </p>

                        <div class=\"d-flex justify-content-center\">
                            <span class=\"badge ";
            // line 68
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "disponibilite", [], "any", false, false, false, 68)) ? ("bg-success") : ("bg-danger"));
            yield "\">
                                ";
            // line 69
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "disponibilite", [], "any", false, false, false, 69)) ? ("Disponible") : ("Non disponible"));
            yield "
                            </span>
                        </div>
                        <div class=\"mt-3\">
                            <a href=\"";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_postuler", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 73)]), "html", null, true);
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
        // line 84
        if (!$context['_iterated']) {
            // line 81
            yield "            <div class=\"col-12 text-center\">
                <p class=\"text-muted\">Aucune offre disponible.</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['offre'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
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
        return array (  243 => 85,  234 => 81,  232 => 84,  220 => 73,  213 => 69,  209 => 68,  200 => 64,  196 => 63,  192 => 62,  188 => 61,  183 => 59,  180 => 58,  174 => 55,  171 => 54,  163 => 49,  158 => 47,  155 => 46,  153 => 45,  149 => 43,  144 => 42,  127 => 28,  115 => 19,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Offres{% endblock %}

{% block body %}
<div class=\"row\">
    <div class=\"col-md-12\">
    </div>
    <div class=\"col-md-12\">
    </div>
</div>


<!-- Titre déplacé ici -->
<h1 class=\"mt-5 mb-4 text-center\">Liste des Offres</h1>
<!-- Recherche avec icône -->
<div class=\"d-flex align-items-center justify-content-between mb-3\">
    <!-- Bouton \"Consulter état de candidature\" -->
    <a href=\"{{ path('app_candidature') }}\" class=\"btn btn btn-lg\" 
       style=\"background-color: rgb(255, 255, 255); /* Gris Bootstrap */
              color: rgb(50, 52, 53); 
              border-radius: 20px;
              margin-right: 20px;
              text-decoration: underline;\">Consulter état de candidature
    </a>

    <!-- Formulaire de recherche -->
    <form action=\"{{ path('app_recherche') }}\" method=\"GET\" class=\"d-flex align-items-center\">
        <input type=\"text\" name=\"search\" class=\"form-control form-control-lg\" 
               placeholder=\"Rechercher une offre...\" 
               style=\"border-radius: 20px; padding-left: 20px; margin-right: 10px;\">
        <button type=\"submit\" class=\"btn btn-outline btn-lg\" 
                style=\"border-radius: 20px;\">
            <i class=\"fa fa-search\" style=\"color: rgb(115, 160, 141);\"></i>
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
                            <img src=\"{{ asset('uploads/images/' ~ offre.image) }}\" 
                                 class=\"rounded-circle\" 
                                 alt=\"Image de {{ offre.nomposte }}\" 
                                 style=\"width: 150px; height: 120px; object-fit: cover; 
                                        border: 3px solid white; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);\">
                        </div>
                    {% else %}
                        <div class=\"d-flex justify-content-center\">
                            <img src=\"{{ asset('uploads/default.png') }}\" class=\"card-img-top rounded-circle\" alt=\"Image par défaut\" width=\"100\" height=\"100\">
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
