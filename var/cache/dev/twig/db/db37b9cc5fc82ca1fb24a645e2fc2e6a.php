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
        yield "<h1 class=\"mb-3 text-center\">Gestion des Candidatures</h1>

<div class=\"container\">
    
    <!-- Tableau des candidatures -->
    <table class=\"table table-bordered\"> 
        <thead>
            <tr>
                <th>ID</th>
                <th>Utilisateur</th>
                <th>Poste/Stage</th>
                <th>Entreprise</th>
                <th>Statut</th>
                <th>Date de Soumission</th>
                <th>CV</th>
                <th>Lettre de Motivation</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tabcandidature"]) || array_key_exists("tabcandidature", $context) ? $context["tabcandidature"] : (function () { throw new RuntimeError('Variable "tabcandidature" does not exist.', 26, $this->source); })()));
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
            // line 27
            yield "                <tr>
                    <td>";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 28), "html", null, true);
            yield "</td>
                    <td>";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "utilisateur", [], "any", false, false, false, 29), "html", null, true);
            yield "</td>
                    <td>";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "offre", [], "any", false, false, false, 30), "nomposte", [], "any", false, false, false, 30), "html", null, true);
            yield "</td>
                    <td>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "offre", [], "any", false, false, false, 31), "entreprise", [], "any", false, false, false, 31), "html", null, true);
            yield "</td>
                    <td>";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "statut", [], "any", false, false, false, 32), "html", null, true);
            yield "</td>
                    <td>";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "datesoumission", [], "any", false, false, false, 33), "d/m/Y"), "html", null, true);
            yield "</td>
                    <td>
                        <a href=\"";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/cv/" . CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "cv", [], "any", false, false, false, 35))), "html", null, true);
            yield "\" target=\"_blank\" class=\"btn btn-dark btn-sm\">Voir CV</a>
                    </td>
                    <td>
                        <button type=\"button\" class=\"btn btn-dark btn-sm\" data-bs-toggle=\"modal\" data-bs-target=\"#motivationModal";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "id", [], "any", false, false, false, 38), "html", null, true);
            yield "\">Voir</button>
                    </td>
                    <td>
                        <a href=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_updatecandidature", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            yield "\" class=\"btn btn-primary btn-sm\">Modifier</a>
                        <a href=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deletecandidature", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            yield "\" 
                            class=\"btn btn-danger btn-sm\" 
                            onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cette candidature ?');\">Supprimer
                        </a>
                    </td>
                </tr>

                <!-- Modal pour la lettre de motivation -->
                <div class=\"modal fade\" id=\"motivationModal";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "id", [], "any", false, false, false, 50), "html", null, true);
            yield "\" tabindex=\"-1\" aria-labelledby=\"motivationModalLabel\" aria-hidden=\"true\">
                    <div class=\"modal-dialog\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\" id=\"motivationModalLabel\">Lettre de Motivation</h5>
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                            </div>
                            <div class=\"modal-body\">
                                ";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "lettremotivation", [], "any", false, false, false, 58), "html", null, true);
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
        // line 67
        if (!$context['_iterated']) {
            // line 64
            yield "                <tr>
                    <td colspan=\"9\" class=\"text-center\">Aucune candidature trouvée.</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['candidature'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        yield "        </tbody>
    </table>
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
        return array (  235 => 68,  226 => 64,  224 => 67,  206 => 58,  195 => 50,  184 => 42,  180 => 41,  174 => 38,  168 => 35,  163 => 33,  159 => 32,  155 => 31,  151 => 30,  147 => 29,  143 => 28,  140 => 27,  122 => 26,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des Candidatures{% endblock %}

{% block body %}
<h1 class=\"mb-3 text-center\">Gestion des Candidatures</h1>

<div class=\"container\">
    
    <!-- Tableau des candidatures -->
    <table class=\"table table-bordered\"> 
        <thead>
            <tr>
                <th>ID</th>
                <th>Utilisateur</th>
                <th>Poste/Stage</th>
                <th>Entreprise</th>
                <th>Statut</th>
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
                    <td>{{ candidature.statut }}</td>
                    <td>{{ candidature.datesoumission|date('d/m/Y') }}</td>
                    <td>
                        <a href=\"{{ asset('uploads/cv/' ~ candidature.cv) }}\" target=\"_blank\" class=\"btn btn-dark btn-sm\">Voir CV</a>
                    </td>
                    <td>
                        <button type=\"button\" class=\"btn btn-dark btn-sm\" data-bs-toggle=\"modal\" data-bs-target=\"#motivationModal{{ candidature.id }}\">Voir</button>
                    </td>
                    <td>
                        <a href=\"{{ path('app_updatecandidature', { 'id': candidature.id }) }}\" class=\"btn btn-primary btn-sm\">Modifier</a>
                        <a href=\"{{ path('app_deletecandidature', { 'id': candidature.id }) }}\" 
                            class=\"btn btn-danger btn-sm\" 
                            onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cette candidature ?');\">Supprimer
                        </a>
                    </td>
                </tr>

                <!-- Modal pour la lettre de motivation -->
                <div class=\"modal fade\" id=\"motivationModal{{ candidature.id }}\" tabindex=\"-1\" aria-labelledby=\"motivationModalLabel\" aria-hidden=\"true\">
                    <div class=\"modal-dialog\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\" id=\"motivationModalLabel\">Lettre de Motivation</h5>
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
                    <td colspan=\"9\" class=\"text-center\">Aucune candidature trouvée.</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
</div>

{% endblock %}
", "candidature/showcandidature.html.twig", "C:\\careera\\templates\\candidature\\showcandidature.html.twig");
    }
}
