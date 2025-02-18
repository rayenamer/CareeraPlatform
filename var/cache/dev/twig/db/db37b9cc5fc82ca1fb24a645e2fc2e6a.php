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

/* candidature/showcandidature.html.twig */
class __TwigTemplate_64afd572ebbfa3e8e26096d89f8cf805 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidature/showcandidature.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidature/showcandidature.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "candidature/showcandidature.html.twig", 1);
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

        yield "Gestion des Candidatures";
        
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
        yield "<div class=\"d-flex justify-content-start mb-2\">
   <a href=\"";
        // line 7
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offremod");
        yield "\" class=\"btn btn-sm\">Retour</a>
</div>

<h2 class=\"text-center mt-4\">Gestion des Candidatures</h2>

<div class=\"container mt-4\">
    <!-- Tableau des candidatures -->
    <table class=\"table table-striped table-bordered text-center\">
        <thead class=\"table-dark\">
            <tr>
                <th>ID</th>
                <th>Utilisateur</th>
                <th>Poste/Stage</th>
                <th>Entreprise</th>
                <th>Date de Soumission</th>
                <th>CV</th>
                <th>Lettre de Motivation</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tabcandidature"]) || array_key_exists("tabcandidature", $context) ? $context["tabcandidature"] : (function () { throw new RuntimeError('Variable "tabcandidature" does not exist.', 28, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["candidature"]) {
            // line 29
            yield "                <tr>
                    <td>";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 30), "html", null, true);
            yield "</td>
                    <td>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "utilisateur", [], "any", false, false, false, 31), "html", null, true);
            yield "</td>
                    <td>";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "offre", [], "any", false, false, false, 32), "nomposte", [], "any", false, false, false, 32), "html", null, true);
            yield "</td>
                    <td>";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "offre", [], "any", false, false, false, 33), "entreprise", [], "any", false, false, false, 33), "html", null, true);
            yield "</td>
                    <td>";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "datesoumission", [], "any", false, false, false, 34), "d/m/Y"), "html", null, true);
            yield "</td>
                    <td>
                        <a href=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/cv/" . CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "cv", [], "any", false, false, false, 36))), "html", null, true);
            yield "\" target=\"_blank\" class=\"btn btn-dark btn-sm\">Voir CV</a>
                    </td>
                    <td>
                        <button type=\"button\" class=\"btn btn-dark btn-sm\" data-bs-toggle=\"modal\" data-bs-target=\"#motivationModal";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "id", [], "any", false, false, false, 39), "html", null, true);
            yield "\">Voir</button>
                    </td>
                    <td>
                        <a href=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_accept", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            yield "\" class=\"btn btn-primary btn-sm\">Accepter</a>
                        <a href=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reject", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            yield "\" class=\"btn btn-danger btn-sm\">Rejeter</a>
                    </td>
                </tr>

                <!-- Modal pour la lettre de motivation -->
                <div class=\"modal fade\" id=\"motivationModal";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "id", [], "any", false, false, false, 48), "html", null, true);
            yield "\" tabindex=\"-1\" aria-labelledby=\"motivationModalLabel";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "id", [], "any", false, false, false, 48), "html", null, true);
            yield "\" aria-hidden=\"true\">
                    <div class=\"modal-dialog\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\" id=\"motivationModalLabel";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "id", [], "any", false, false, false, 52), "html", null, true);
            yield "\">Lettre de Motivation</h5>
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                            </div>
                            <div class=\"modal-body\">
                                ";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "lettremotivation", [], "any", false, false, false, 56), "html", null, true);
            yield "
                            </div>
                        </div>
                    </div>
                </div>
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
        // line 65
        if (!$context['_iterated']) {
            // line 62
            yield "                <tr>
                    <td colspan=\"8\" class=\"text-center\">Aucune candidature trouvée.</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['candidature'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        yield "        </tbody>
    </table>
    
    <!-- Liens sous le tableau -->
    <div class=\"text-center mt-3\">
        <a href=\"";
        // line 71
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_acceptees");
        yield "\" class=\"btn btn-primary\">Candidatures Acceptées</a> |
        <a href=\"";
        // line 72
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rejetees");
        yield "\" class=\"btn btn-danger\">Candidatures Rejetées</a>
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
        return "candidature/showcandidature.html.twig";
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
        return array (  249 => 72,  245 => 71,  238 => 66,  229 => 62,  227 => 65,  209 => 56,  202 => 52,  193 => 48,  185 => 43,  181 => 42,  175 => 39,  169 => 36,  164 => 34,  160 => 33,  156 => 32,  152 => 31,  148 => 30,  145 => 29,  127 => 28,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des Candidatures{% endblock %}

{% block body %}
<div class=\"d-flex justify-content-start mb-2\">
   <a href=\"{{ path('app_offremod') }}\" class=\"btn btn-sm\">Retour</a>
</div>

<h2 class=\"text-center mt-4\">Gestion des Candidatures</h2>

<div class=\"container mt-4\">
    <!-- Tableau des candidatures -->
    <table class=\"table table-striped table-bordered text-center\">
        <thead class=\"table-dark\">
            <tr>
                <th>ID</th>
                <th>Utilisateur</th>
                <th>Poste/Stage</th>
                <th>Entreprise</th>
                <th>Date de Soumission</th>
                <th>CV</th>
                <th>Lettre de Motivation</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            {% for candidature in tabcandidature %}
                <tr>
                    <td>{{ loop.index }}</td>
                    <td>{{ candidature.utilisateur }}</td>
                    <td>{{ candidature.offre.nomposte }}</td>
                    <td>{{ candidature.offre.entreprise }}</td>
                    <td>{{ candidature.datesoumission|date('d/m/Y') }}</td>
                    <td>
                        <a href=\"{{ asset('uploads/cv/' ~ candidature.cv) }}\" target=\"_blank\" class=\"btn btn-dark btn-sm\">Voir CV</a>
                    </td>
                    <td>
                        <button type=\"button\" class=\"btn btn-dark btn-sm\" data-bs-toggle=\"modal\" data-bs-target=\"#motivationModal{{ candidature.id }}\">Voir</button>
                    </td>
                    <td>
                        <a href=\"{{ path('app_accept', { 'id': candidature.id }) }}\" class=\"btn btn-primary btn-sm\">Accepter</a>
                        <a href=\"{{ path('app_reject', { 'id': candidature.id }) }}\" class=\"btn btn-danger btn-sm\">Rejeter</a>
                    </td>
                </tr>

                <!-- Modal pour la lettre de motivation -->
                <div class=\"modal fade\" id=\"motivationModal{{ candidature.id }}\" tabindex=\"-1\" aria-labelledby=\"motivationModalLabel{{ candidature.id }}\" aria-hidden=\"true\">
                    <div class=\"modal-dialog\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\" id=\"motivationModalLabel{{ candidature.id }}\">Lettre de Motivation</h5>
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                            </div>
                            <div class=\"modal-body\">
                                {{ candidature.lettremotivation }}
                            </div>
                        </div>
                    </div>
                </div>
            {% else %}
                <tr>
                    <td colspan=\"8\" class=\"text-center\">Aucune candidature trouvée.</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
    
    <!-- Liens sous le tableau -->
    <div class=\"text-center mt-3\">
        <a href=\"{{ path('app_acceptees') }}\" class=\"btn btn-primary\">Candidatures Acceptées</a> |
        <a href=\"{{ path('app_rejetees') }}\" class=\"btn btn-danger\">Candidatures Rejetées</a>
    </div>
</div>

{% endblock %}
", "candidature/showcandidature.html.twig", "C:\\careera\\templates\\candidature\\showcandidature.html.twig");
    }
}
