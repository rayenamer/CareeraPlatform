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
        yield "   <div class=\"row\">
   <div class=\"col-md-12\">
   </div>
   </div>
<h1 class=\"mb-3 text-center\">Liste des Offres</h1>

<!-- Recherche avec icône -->
<div class=\"d-flex justify-content-between mb-3\">
    <!-- Bouton \"Consulter état de candidature\" avec marge à gauche et couleur baby blue -->
    <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature");
        yield "\" class=\"btn\" 
        style=\"background-color:rgb(219, 230, 240); /* Gris Bootstrap */
          margin-right: 30px; /* Marge à droite */
          margin-bottom: 20px; /* Marge en bas */
          color: rgb(50, 52, 53);; 
          border-radius: 20px;\">Consulter état de candidature
    </a>

    
    <!-- Formulaire de recherche avec marge à droite -->
    <form action=\"";
        // line 25
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
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["taboffre"]) || array_key_exists("taboffre", $context) ? $context["taboffre"] : (function () { throw new RuntimeError('Variable "taboffre" does not exist.', 35, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
            // line 36
            yield "            <div class=\"col-md-4 mb-4\">
                <div class=\"card shadow-sm d-flex flex-column\">
                    ";
            // line 38
            if (CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "image", [], "any", false, false, false, 38)) {
                // line 39
                yield "                        <div class=\"d-flex justify-content-center\">
                            <img src=\"";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "image", [], "any", false, false, false, 40))), "html", null, true);
                yield "\" 
                                class=\"rounded-circle\" 
                                alt=\"Image de ";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "nomposte", [], "any", false, false, false, 42), "html", null, true);
                yield "\" 
                                style=\"width: 150px; height: 120px; object-fit: cover; 
                                        border: 3px solid white; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);\">
                        </div>

                    ";
            } else {
                // line 48
                yield "                        <div class=\"d-flex justify-content-center\">
                            <img src=\"";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/default.png"), "html", null, true);
                yield "\" class=\"card-img-top rounded-circle\" alt=\"Image par défaut\" width=\"100\" height=\"100\">
                        </div>
                    ";
            }
            // line 52
            yield "                    <div class=\"card-body d-flex flex-column justify-content-between\">
                        <h5 class=\"card-title text-center\">";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "nomposte", [], "any", false, false, false, 53), "html", null, true);
            yield "</h5>
                        <p class=\"card-text text-center\">
                            <strong>Entreprise:</strong> ";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "entreprise", [], "any", false, false, false, 55), "html", null, true);
            yield "<br>
                            <strong>Localisation:</strong> ";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "localisation", [], "any", false, false, false, 56), "html", null, true);
            yield "<br>
                            <strong>Salaire:</strong> ";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "salaire", [], "any", false, false, false, 57), "html", null, true);
            yield " DT<br>
                            <strong>Type:</strong> ";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "typeoffre", [], "any", false, false, false, 58), "nom", [], "any", false, false, false, 58), "html", null, true);
            yield " | ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "typecontrat", [], "any", false, false, false, 58), "nom", [], "any", false, false, false, 58), "html", null, true);
            yield "<br>
                        </p>

                        <div class=\"d-flex justify-content-center\">
                            <span class=\"badge ";
            // line 62
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "disponibilite", [], "any", false, false, false, 62)) ? ("bg-success") : ("bg-danger"));
            yield "\">
                                ";
            // line 63
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "disponibilite", [], "any", false, false, false, 63)) ? ("Disponible") : ("Non disponible"));
            yield "
                            </span>
                        </div>
                        <div class=\"mt-3\">
                            <a href=\"";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_postuler", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 67)]), "html", null, true);
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
        // line 78
        if (!$context['_iterated']) {
            // line 75
            yield "            <div class=\"col-12 text-center\">
                <p class=\"text-muted\">Aucune offre disponible.</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['offre'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
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
        return array (  237 => 79,  228 => 75,  226 => 78,  214 => 67,  207 => 63,  203 => 62,  194 => 58,  190 => 57,  186 => 56,  182 => 55,  177 => 53,  174 => 52,  168 => 49,  165 => 48,  156 => 42,  151 => 40,  148 => 39,  146 => 38,  142 => 36,  137 => 35,  124 => 25,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Offres{% endblock %}

{% block body %}
   <div class=\"row\">
   <div class=\"col-md-12\">
   </div>
   </div>
<h1 class=\"mb-3 text-center\">Liste des Offres</h1>

<!-- Recherche avec icône -->
<div class=\"d-flex justify-content-between mb-3\">
    <!-- Bouton \"Consulter état de candidature\" avec marge à gauche et couleur baby blue -->
    <a href=\"{{ path('app_candidature') }}\" class=\"btn\" 
        style=\"background-color:rgb(219, 230, 240); /* Gris Bootstrap */
          margin-right: 30px; /* Marge à droite */
          margin-bottom: 20px; /* Marge en bas */
          color: rgb(50, 52, 53);; 
          border-radius: 20px;\">Consulter état de candidature
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
