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

/* candidature/index.html.twig */
class __TwigTemplate_5e483597cbd7598b39e5bc72d391cc43 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidature/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidature/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "candidature/index.html.twig", 1);
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

        yield "Listes des Candidatures";
        
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
        yield "<div class=\"d-flex justify-content-start mb-2 mt-5  \">
   <a href=\"";
        // line 7
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offre");
        yield "\" class=\"btn btn-success btn-sm\">
      <i class=\"fa fa-arrow-left\"></i> Retour
   </a>
</div>
<h1 class=\"mb-3 text-center\">Listes des Candidatures</h1>

<div class=\"container\">
   
    <!-- Tableau des candidatures -->
    <table class=\"table table-bordered\"> 
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Poste/Stage</th>
                <th>Entreprise</th>
                <th>Date de Soumission</th>
                <th>CV</th>
                <th>Lettre de Motivation</th>
                <th>Statut</th>
                <th>Actions</th>
                
            </tr>
        </thead>
        <tbody>
            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tabcandidature"]) || array_key_exists("tabcandidature", $context) ? $context["tabcandidature"] : (function () { throw new RuntimeError('Variable "tabcandidature" does not exist.', 32, $this->source); })()));
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
            // line 33
            yield "                <tr>
                    <td>";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 34), "html", null, true);
            yield "</td>
                    <td>";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "utilisateur", [], "any", false, false, false, 35), "html", null, true);
            yield "</td>
                    <td>";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "offre", [], "any", false, false, false, 36), "nomposte", [], "any", false, false, false, 36), "html", null, true);
            yield "</td>
                    <td>";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "offre", [], "any", false, false, false, 37), "entreprise", [], "any", false, false, false, 37), "html", null, true);
            yield "</td>
                    <td>";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "datesoumission", [], "any", false, false, false, 38), "d/m/Y"), "html", null, true);
            yield "</td>
                    <td>
                        <a href=\"";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/cv/" . CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "cv", [], "any", false, false, false, 40))), "html", null, true);
            yield "\" target=\"_blank\" class=\"btn btn btn-sm\">Voir CV</a>
                    </td>
                    <td>
                        <button type=\"button\" class=\"btn btn btn-sm\" data-bs-toggle=\"modal\" data-bs-target=\"#motivationModal";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "id", [], "any", false, false, false, 43), "html", null, true);
            yield "\">Voir</button>
                    </td>
                    <td>
                        ";
            // line 46
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "statut", [], "any", false, false, false, 46) == "acceptée")) {
                // line 47
                yield "                            <span class=\"badge bg-success\">Acceptée</span>
                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 48
$context["candidature"], "statut", [], "any", false, false, false, 48) == "rejetée")) {
                // line 49
                yield "                            <span class=\"badge bg-danger\">Rejetée</span>
                        ";
            } else {
                // line 51
                yield "                            <span class=\"badge bg-warning text-dark\">En attente</span>
                        ";
            }
            // line 53
            yield "                    </td>
                    <td>
                        <a href=\"";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deletecandidature", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "id", [], "any", false, false, false, 55)]), "html", null, true);
            yield "\" class=\"btn btn-outline-danger\">Supprimer</a>
                             ";
            // line 56
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "statut", [], "any", false, false, false, 56) == "acceptée")) {
                // line 57
                yield "                                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_export_pdf", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "id", [], "any", false, false, false, 57)]), "html", null, true);
                yield "\" class=\"btn btn-primary\">Exporter en PDF</a> 
                                
                            ";
            } else {
                // line 60
                yield "                                <span class=\"badge  \">none</span>
                            ";
            }
            // line 61
            yield " 
                            ";
            // line 62
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "statut", [], "any", false, false, false, 62) == "en_attente")) {
                // line 63
                yield "                                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_updatecandidature", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "id", [], "any", false, false, false, 63)]), "html", null, true);
                yield "\" class=\"btn btn-outline-warning\">Modifier</a>
                            ";
            } else {
                // line 65
                yield "                                <span class=\"badge  \">none</span>
                            ";
            }
            // line 66
            yield " 
                
                          
                            
                    </td>   
                </tr>

                <!-- Modal pour la lettre de motivation -->
                <div class=\"modal fade\" id=\"motivationModal";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "id", [], "any", false, false, false, 74), "html", null, true);
            yield "\" tabindex=\"-1\" aria-labelledby=\"motivationModalLabel\" aria-hidden=\"true\">
                   <div class=\"modal-dialog modal-dialog-centered\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\" id=\"motivationModalLabel\">Lettre de Motivation</h5>
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                            </div>
                            <div class=\"modal-body\">
                                ";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "lettremotivation", [], "any", false, false, false, 82), "html", null, true);
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
        // line 88
        if (!$context['_iterated']) {
            // line 89
            yield "                <tr>
                    <td colspan=\"8\" class=\"text-center\">Aucune candidature trouvée.</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['candidature'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
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
        return "candidature/index.html.twig";
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
        return array (  287 => 93,  278 => 89,  276 => 88,  257 => 82,  246 => 74,  236 => 66,  232 => 65,  226 => 63,  224 => 62,  221 => 61,  217 => 60,  210 => 57,  208 => 56,  204 => 55,  200 => 53,  196 => 51,  192 => 49,  190 => 48,  187 => 47,  185 => 46,  179 => 43,  173 => 40,  168 => 38,  164 => 37,  160 => 36,  156 => 35,  152 => 34,  149 => 33,  131 => 32,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Listes des Candidatures{% endblock %}

{% block body %}
<div class=\"d-flex justify-content-start mb-2 mt-5  \">
   <a href=\"{{ path('app_offre') }}\" class=\"btn btn-success btn-sm\">
      <i class=\"fa fa-arrow-left\"></i> Retour
   </a>
</div>
<h1 class=\"mb-3 text-center\">Listes des Candidatures</h1>

<div class=\"container\">
   
    <!-- Tableau des candidatures -->
    <table class=\"table table-bordered\"> 
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Poste/Stage</th>
                <th>Entreprise</th>
                <th>Date de Soumission</th>
                <th>CV</th>
                <th>Lettre de Motivation</th>
                <th>Statut</th>
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
                        <a href=\"{{ asset('uploads/cv/' ~ candidature.cv) }}\" target=\"_blank\" class=\"btn btn btn-sm\">Voir CV</a>
                    </td>
                    <td>
                        <button type=\"button\" class=\"btn btn btn-sm\" data-bs-toggle=\"modal\" data-bs-target=\"#motivationModal{{ candidature.id }}\">Voir</button>
                    </td>
                    <td>
                        {% if candidature.statut == 'acceptée' %}
                            <span class=\"badge bg-success\">Acceptée</span>
                        {% elseif candidature.statut == 'rejetée' %}
                            <span class=\"badge bg-danger\">Rejetée</span>
                        {% else %}
                            <span class=\"badge bg-warning text-dark\">En attente</span>
                        {% endif %}
                    </td>
                    <td>
                        <a href=\"{{ path('app_deletecandidature', {'id': candidature.id}) }}\" class=\"btn btn-outline-danger\">Supprimer</a>
                             {% if candidature.statut == 'acceptée' %}
                                <a href=\"{{ path('app_export_pdf', {'id': candidature.id}) }}\" class=\"btn btn-primary\">Exporter en PDF</a> 
                                
                            {% else %}
                                <span class=\"badge  \">none</span>
                            {% endif %} 
                            {% if candidature.statut == 'en_attente' %}
                                <a href=\"{{ path('app_updatecandidature', {'id': candidature.id}) }}\" class=\"btn btn-outline-warning\">Modifier</a>
                            {% else %}
                                <span class=\"badge  \">none</span>
                            {% endif %} 
                
                          
                            
                    </td>   
                </tr>

                <!-- Modal pour la lettre de motivation -->
                <div class=\"modal fade\" id=\"motivationModal{{ candidature.id }}\" tabindex=\"-1\" aria-labelledby=\"motivationModalLabel\" aria-hidden=\"true\">
                   <div class=\"modal-dialog modal-dialog-centered\">
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
                    <td colspan=\"8\" class=\"text-center\">Aucune candidature trouvée.</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
</div>

{% endblock %}
", "candidature/index.html.twig", "C:\\careera\\templates\\candidature\\index.html.twig");
    }
}
