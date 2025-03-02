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

/* typecontrat/index.html.twig */
class __TwigTemplate_86eff1d20d023104027f911d3ddb3235 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "typecontrat/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "typecontrat/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "typecontrat/index.html.twig", 1);
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

        yield "Liste des Types de Contrat";
        
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
        yield "<div class=\"container mt-4\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\"> <!-- Limite la largeur du tableau à 8 colonnes -->
            <div class=\"card shadow-sm\">
                <div class=\"card-header text-center\">
                    <h3>Liste des Types de Contrat</h3>
                </div>
                    <div class=\"d-flex justify-content-start mb-2 mt-5  \">
                        <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offremod");
        yield "\" class=\"btn btn-success btn-sm\">
                            <i class=\"fa fa-arrow-left\"></i> Retour
                        </a>
                </div>
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-end mb-3\">
                        <a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_addtypecontrat");
        yield "\" class=\"btn btn-success\">Ajouter un Type de Contrat</a>
                    </div>
                    <table class=\"table table-striped table-bordered text-center\">
                        <thead class=\"table-dark\">
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tabtypecontrat"]) || array_key_exists("tabtypecontrat", $context) ? $context["tabtypecontrat"] : (function () { throw new RuntimeError('Variable "tabtypecontrat" does not exist.', 31, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["typecontrat"]) {
            // line 32
            yield "                                <tr>
                                    <td>";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["typecontrat"], "id", [], "any", false, false, false, 33), "html", null, true);
            yield "</td>
                                    <td>";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["typecontrat"], "nom", [], "any", false, false, false, 34), "html", null, true);
            yield "</td>
                                    <td>
                                        <a href=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_updatetypecontrat", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["typecontrat"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm\">Modifier</a>
                                        <a href=\"";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deletetypecontrat", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["typecontrat"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            yield "\" class=\"btn btn-danger btn-sm\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer ce type de contrat ?');\">Supprimer</a>
                                    </td>
                                </tr>
                            ";
            $context['_iterated'] = true;
        }
        // line 40
        if (!$context['_iterated']) {
            // line 41
            yield "                                <tr>
                                    <td colspan=\"3\" class=\"text-center\">Aucun type de contrat trouvé.</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['typecontrat'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "                        </tbody>
                    </table>
                </div>
            </div>
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
        return "typecontrat/index.html.twig";
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
        return array (  173 => 45,  164 => 41,  162 => 40,  154 => 37,  150 => 36,  145 => 34,  141 => 33,  138 => 32,  133 => 31,  119 => 20,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Types de Contrat{% endblock %}

{% block body %}
<div class=\"container mt-4\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\"> <!-- Limite la largeur du tableau à 8 colonnes -->
            <div class=\"card shadow-sm\">
                <div class=\"card-header text-center\">
                    <h3>Liste des Types de Contrat</h3>
                </div>
                    <div class=\"d-flex justify-content-start mb-2 mt-5  \">
                        <a href=\"{{ path('app_offremod') }}\" class=\"btn btn-success btn-sm\">
                            <i class=\"fa fa-arrow-left\"></i> Retour
                        </a>
                </div>
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-end mb-3\">
                        <a href=\"{{ path('app_addtypecontrat') }}\" class=\"btn btn-success\">Ajouter un Type de Contrat</a>
                    </div>
                    <table class=\"table table-striped table-bordered text-center\">
                        <thead class=\"table-dark\">
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for typecontrat in tabtypecontrat %}
                                <tr>
                                    <td>{{ typecontrat.id }}</td>
                                    <td>{{ typecontrat.nom }}</td>
                                    <td>
                                        <a href=\"{{ path('app_updatetypecontrat', {'id': typecontrat.id}) }}\" class=\"btn btn-warning btn-sm\">Modifier</a>
                                        <a href=\"{{ path('app_deletetypecontrat', {'id': typecontrat.id}) }}\" class=\"btn btn-danger btn-sm\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer ce type de contrat ?');\">Supprimer</a>
                                    </td>
                                </tr>
                            {% else %}
                                <tr>
                                    <td colspan=\"3\" class=\"text-center\">Aucun type de contrat trouvé.</td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "typecontrat/index.html.twig", "C:\\careera\\templates\\typecontrat\\index.html.twig");
    }
}
