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

/* offre/offremod.html.twig */
class __TwigTemplate_225582a38905e43aafff58e818812756 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offre/offremod.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offre/offremod.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "offre/offremod.html.twig", 1);
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

        yield "Gestion des Offres";
        
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
        yield "<h1 class=\"mt-5 mb-4 text-center\">Gestion des Offres</h1>

<div class=\"container\">
    <!-- Boutons alignés à gauche avec le logo de statistiques -->
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
    <!-- Conteneur des boutons à gauche -->
    <div>
        <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_showcandidature");
        yield "\" class=\"btn btn-dark me-2\">Consulter les Candidatures</a>
        <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ajoutoffre");
        yield "\" class=\"btn btn-success me-2\">Ajouter une Offre</a>
        <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_export_pdf2");
        yield "\" class=\"btn btn-primary\">Exporter en PDF</a>
    </div>
    
   <!-- Bouton Statistiques à droite -->
     ";
        // line 19
        $context["offre"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["taboffre"]) || array_key_exists("taboffre", $context) ? $context["taboffre"] : (function () { throw new RuntimeError('Variable "taboffre" does not exist.', 19, $this->source); })()), 0, [], "array", false, false, false, 19);
        // line 20
        yield "    <a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_statistiques", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20)]), "html", null, true);
        yield "\" class=\"btn btn-info d-flex align-items-center\">
        <i class=\"fas fa-chart-bar me-2\"></i> Voir les Statistiques
    </a>



</div>

    <!-- Tableau des offres -->
    <table class=\"table table-bordered\"> 
        <thead>
            <tr>
                <th>ID</th>
                <th>Poste/Stage</th>
                <th>Entreprise</th>
                <th>Localisation</th>
                <th>Salaire</th>
                <th>Type de Contrat</th>
                <th>Type d'Offre</th>
                <th>Disponibilité</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["taboffre"]) || array_key_exists("taboffre", $context) ? $context["taboffre"] : (function () { throw new RuntimeError('Variable "taboffre" does not exist.', 45, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
            // line 46
            yield "                <tr>
                    <td>";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 47), "html", null, true);
            yield "</td>
                    <td>";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "nomposte", [], "any", false, false, false, 48), "html", null, true);
            yield "</td>
                    <td>";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "entreprise", [], "any", false, false, false, 49), "html", null, true);
            yield "</td>
                    <td>";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "localisation", [], "any", false, false, false, 50), "html", null, true);
            yield "</td>
                    <td>";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "salaire", [], "any", false, false, false, 51), "html", null, true);
            yield " DT</td>
                    <td>";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "typecontrat", [], "any", false, false, false, 52), "nom", [], "any", false, false, false, 52), "html", null, true);
            yield "</td>
                    <td>";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "typeoffre", [], "any", false, false, false, 53), "nom", [], "any", false, false, false, 53), "html", null, true);
            yield "</td>
                    <td>";
            // line 54
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "disponibilite", [], "any", false, false, false, 54)) ? ("Disponible") : ("Indisponible"));
            yield "</td>
                    <td><img src=\"";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "image", [], "any", false, false, false, 55))), "html", null, true);
            yield "\" alt=\"Image de ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "nomposte", [], "any", false, false, false, 55), "html", null, true);
            yield "\" width=\"50\"></td>
                    <td>
                        <a href=\"";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_modifoffre", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 57)]), "html", null, true);
            yield "\" class=\"btn btn-primary btn-sm\">Modifier</a>
                        <a href=\"";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supprimeroffre", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 58)]), "html", null, true);
            yield "\" 
                            class=\"btn btn-danger btn-sm\" 
                            onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cette offre ?');\">Supprimer
                        </a>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        // line 64
        if (!$context['_iterated']) {
            // line 65
            yield "                <tr>
                    <td colspan=\"10\" class=\"text-center\">Aucune offre trouvée.</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['offre'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        yield "        </tbody>
    </table>

    <!-- Liens vers les pages \"Type d'Offre\" et \"Type de Contrat\" -->
    <div class=\"d-flex justify-content-end mt-4\">
        <a href=\"";
        // line 74
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_typeoffre");
        yield "\" class=\"btn btn me-2\">Gérer les Types d'Offre</a>
        <span class=\"mx-2\">|</span>
        <a href=\"";
        // line 76
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_typecontrat");
        yield "\" class=\"btn btn\">Gérer les Types de Contrat</a>
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
        return "offre/offremod.html.twig";
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
        return array (  261 => 76,  256 => 74,  249 => 69,  240 => 65,  238 => 64,  219 => 58,  215 => 57,  208 => 55,  204 => 54,  200 => 53,  196 => 52,  192 => 51,  188 => 50,  184 => 49,  180 => 48,  176 => 47,  173 => 46,  155 => 45,  126 => 20,  124 => 19,  117 => 15,  113 => 14,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des Offres{% endblock %}

{% block body %}
<h1 class=\"mt-5 mb-4 text-center\">Gestion des Offres</h1>

<div class=\"container\">
    <!-- Boutons alignés à gauche avec le logo de statistiques -->
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
    <!-- Conteneur des boutons à gauche -->
    <div>
        <a href=\"{{ path('app_showcandidature') }}\" class=\"btn btn-dark me-2\">Consulter les Candidatures</a>
        <a href=\"{{ path('app_ajoutoffre') }}\" class=\"btn btn-success me-2\">Ajouter une Offre</a>
        <a href=\"{{ path('app_export_pdf2') }}\" class=\"btn btn-primary\">Exporter en PDF</a>
    </div>
    
   <!-- Bouton Statistiques à droite -->
     {% set offre = taboffre[0] %}
    <a href=\"{{ path('app_statistiques', {'id': offre.id}) }}\" class=\"btn btn-info d-flex align-items-center\">
        <i class=\"fas fa-chart-bar me-2\"></i> Voir les Statistiques
    </a>



</div>

    <!-- Tableau des offres -->
    <table class=\"table table-bordered\"> 
        <thead>
            <tr>
                <th>ID</th>
                <th>Poste/Stage</th>
                <th>Entreprise</th>
                <th>Localisation</th>
                <th>Salaire</th>
                <th>Type de Contrat</th>
                <th>Type d'Offre</th>
                <th>Disponibilité</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            {% for offre in taboffre %}
                <tr>
                    <td>{{ loop.index }}</td>
                    <td>{{ offre.nomposte }}</td>
                    <td>{{ offre.entreprise }}</td>
                    <td>{{ offre.localisation }}</td>
                    <td>{{ offre.salaire }} DT</td>
                    <td>{{ offre.typecontrat.nom }}</td>
                    <td>{{ offre.typeoffre.nom }}</td>
                    <td>{{ offre.disponibilite ? 'Disponible' : 'Indisponible' }}</td>
                    <td><img src=\"{{ asset('uploads/images/' ~ offre.image) }}\" alt=\"Image de {{ offre.nomposte }}\" width=\"50\"></td>
                    <td>
                        <a href=\"{{ path('app_modifoffre', { 'id': offre.id }) }}\" class=\"btn btn-primary btn-sm\">Modifier</a>
                        <a href=\"{{ path('app_supprimeroffre', { 'id': offre.id }) }}\" 
                            class=\"btn btn-danger btn-sm\" 
                            onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cette offre ?');\">Supprimer
                        </a>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"10\" class=\"text-center\">Aucune offre trouvée.</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>

    <!-- Liens vers les pages \"Type d'Offre\" et \"Type de Contrat\" -->
    <div class=\"d-flex justify-content-end mt-4\">
        <a href=\"{{ path('app_typeoffre') }}\" class=\"btn btn me-2\">Gérer les Types d'Offre</a>
        <span class=\"mx-2\">|</span>
        <a href=\"{{ path('app_typecontrat') }}\" class=\"btn btn\">Gérer les Types de Contrat</a>
    </div>

    

</div>

{% endblock %}
", "offre/offremod.html.twig", "C:\\Users\\hedir\\OneDrive\\Desktop\\Careera\\templates\\offre\\offremod.html.twig");
    }
}
