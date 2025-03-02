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

/* admin/index.html.twig */
class __TwigTemplate_1bd9a22cd13dac4bc36ec8fd0de0bf60 extends Template
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
            'navbar' => [$this, 'block_navbar'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
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

        yield "Dashboard";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 6
        yield "<div class=\"container-fluid nav-bar bg-transparent\">
    <nav class=\"navbar navbar-expand-lg bg-white navbar-light py-0 px-3\">
        <a href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_indexhome");
        yield "\" class=\"navbar-brand d-flex align-items-center text-center\">
            <img class=\"img-fluid\" src=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/transparentcareera.png"), "html", null, true);
        yield "\" alt=\"Icon\" style=\"width: 150px; height: 100px;\">
        </a>
        <button type=\"button\" class=\"navbar-toggler\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
    </nav>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 18
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

        // line 19
        yield "    <h1 class=\"mt-5 mb-4 text-center\">Dashboard</h1>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4 col-sm-12 mb-4\">
                <canvas id=\"evenementChart\" width=\"200\" height=\"100\"></canvas>
            </div>
            <div class=\"col-md-4 col-sm-12 mb-4\">
                <canvas id=\"offreChart\" width=\"200\" height=\"100\"></canvas>
            </div>
            <div class=\"col-md-4 col-sm-12 mb-4\">
                <canvas id=\"discussionChart\" width=\"200\" height=\"100\"></canvas>
            </div>
        </div>
    </div>

    <!-- Tables below the charts -->
    <div class=\"mt-5\">
        <div class=\"row\">
            <!-- Liste des offres -->
            <div class=\"col-md-4 mb-4\">
                <h3 class=\"text-center\">Liste des Offres</h3>
                <table class=\"table table-striped shadow-sm rounded\">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Poste</th>
                            <th>Entreprise</th>
                            <th>Localisation</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["offre_count"]) || array_key_exists("offre_count", $context) ? $context["offre_count"] : (function () { throw new RuntimeError('Variable "offre_count" does not exist.', 51, $this->source); })()));
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
            // line 52
            yield "                            <tr>
                                <td>";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 53), "html", null, true);
            yield "</td>
                                <td>";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "nomposte", [], "any", false, false, false, 54), "html", null, true);
            yield "</td>
                                <td>";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "entreprise", [], "any", false, false, false, 55), "html", null, true);
            yield "</td>
                                <td>";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "localisation", [], "any", false, false, false, 56), "html", null, true);
            yield "</td>
                            </tr>
                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        yield "                    </tbody>
                </table>
            </div>

            <!-- Liste des Evenements -->
            <div class=\"col-md-4 mb-4\">
                <h3 class=\"text-center\">Liste des Evenements</h3>
                <table class=\"table table-striped shadow-sm rounded\">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Date</th>
                            <th>Lieu</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["evenement_count"]) || array_key_exists("evenement_count", $context) ? $context["evenement_count"] : (function () { throw new RuntimeError('Variable "evenement_count" does not exist.', 76, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 77
            yield "                            <tr>
                                <td>";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 78), "html", null, true);
            yield "</td>
                                <td>";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "nom", [], "any", false, false, false, 79), "html", null, true);
            yield "</td>
                                <td>";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "date", [], "any", false, false, false, 80), "Y-m-d"), "html", null, true);
            yield "</td>
                                <td>";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "lieu", [], "any", false, false, false, 81), "html", null, true);
            yield "</td>
                            </tr>
                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        yield "                    </tbody>
                </table>
            </div>

            <!-- Liste des Freelance -->
            <div class=\"col-md-4 mb-4\">
                <h3 class=\"text-center\">Liste des Freelance</h3>
                <table class=\"table table-striped shadow-sm rounded\">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Compétence</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 111
        yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Chart.js script inclusion -->
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>

    <!-- Bootstrap CSS inclusion -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css\" rel=\"stylesheet\">

    <script>
        // Assurez-vous que les données sont disponibles dans le JavaScript
        var evenementCount = ";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("evenement_count", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["evenement_count"]) || array_key_exists("evenement_count", $context) ? $context["evenement_count"] : (function () { throw new RuntimeError('Variable "evenement_count" does not exist.', 125, $this->source); })()), 0)) : (0)), "html", null, true);
        yield ";
        var offreCount = ";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("offre_count", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["offre_count"]) || array_key_exists("offre_count", $context) ? $context["offre_count"] : (function () { throw new RuntimeError('Variable "offre_count" does not exist.', 126, $this->source); })()), 0)) : (0)), "html", null, true);
        yield ";
        var discussionCount = ";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("discussion_count", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["discussion_count"]) || array_key_exists("discussion_count", $context) ? $context["discussion_count"] : (function () { throw new RuntimeError('Variable "discussion_count" does not exist.', 127, $this->source); })()), 0)) : (0)), "html", null, true);
        yield ";
      
        // Graphique Evenement (bar)
        var ctxEvenement = document.getElementById('evenementChart').getContext('2d');
        var evenementChart = new Chart(ctxEvenement, {
            type: 'bar',
            data: {
                labels: ['Evenements'],
                datasets: [{
                    label: '# of Evenements',
                    data: [evenementCount],
                    backgroundColor: ['rgba(75, 192, 192, 0.2)'],
                    borderColor: ['rgba(75, 192, 192, 1)'],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Graphique Offre (pie)
        var ctxOffre = document.getElementById('offreChart').getContext('2d');
        var offreChart = new Chart(ctxOffre, {
            type: 'pie',
            data: {
                labels: ['Offres'],
                datasets: [{
                    label: '# of Offres',
                    data: [offreCount],
                    backgroundColor: ['rgba(255, 99, 132, 0.2)'],
                    borderColor: ['rgba(255, 99, 132, 1)'],
                    borderWidth: 1
                }]
            }
        });

        // Graphique Discussion (line)
        var ctxDiscussion = document.getElementById('discussionChart').getContext('2d');
        var discussionChart = new Chart(ctxDiscussion, {
            type: 'line',
            data: {
                labels: ['Discussions'],
                datasets: [{
                    label: '# of Discussions',
                    data: [discussionCount],
                    fill: false,
                    borderColor: 'rgb(54, 162, 235)',
                    tension: 0.1
                }]
            }
        });
    </script>

    <style>
        .container {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        canvas {
            max-width: 500px;
            width: 100%;
            height: auto;
        }

        .table {
            margin-top: 20px;
            border-radius: 8px;
        }

        th, td {
            text-align: center;
            vertical-align: middle;
        }
        
        h3 {
            font-size: 1.5rem;
            color: #333;
        }

        .row {
            margin-bottom: 20px;
        }
        
        .shadow-sm {
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
        }
    </style>
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
        return "admin/index.html.twig";
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
        return array (  334 => 127,  330 => 126,  326 => 125,  310 => 111,  292 => 84,  275 => 81,  271 => 80,  267 => 79,  263 => 78,  260 => 77,  243 => 76,  224 => 59,  207 => 56,  203 => 55,  199 => 54,  195 => 53,  192 => 52,  175 => 51,  141 => 19,  128 => 18,  109 => 9,  105 => 8,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Dashboard{% endblock %}

{% block navbar %}
<div class=\"container-fluid nav-bar bg-transparent\">
    <nav class=\"navbar navbar-expand-lg bg-white navbar-light py-0 px-3\">
        <a href=\"{{ path('app_indexhome') }}\" class=\"navbar-brand d-flex align-items-center text-center\">
            <img class=\"img-fluid\" src=\"{{ asset('img/transparentcareera.png') }}\" alt=\"Icon\" style=\"width: 150px; height: 100px;\">
        </a>
        <button type=\"button\" class=\"navbar-toggler\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
    </nav>
</div>
{% endblock %}

{% block body %}
    <h1 class=\"mt-5 mb-4 text-center\">Dashboard</h1>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4 col-sm-12 mb-4\">
                <canvas id=\"evenementChart\" width=\"200\" height=\"100\"></canvas>
            </div>
            <div class=\"col-md-4 col-sm-12 mb-4\">
                <canvas id=\"offreChart\" width=\"200\" height=\"100\"></canvas>
            </div>
            <div class=\"col-md-4 col-sm-12 mb-4\">
                <canvas id=\"discussionChart\" width=\"200\" height=\"100\"></canvas>
            </div>
        </div>
    </div>

    <!-- Tables below the charts -->
    <div class=\"mt-5\">
        <div class=\"row\">
            <!-- Liste des offres -->
            <div class=\"col-md-4 mb-4\">
                <h3 class=\"text-center\">Liste des Offres</h3>
                <table class=\"table table-striped shadow-sm rounded\">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Poste</th>
                            <th>Entreprise</th>
                            <th>Localisation</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for offre in offre_count %}
                            <tr>
                                <td>{{ loop.index }}</td>
                                <td>{{ offre.nomposte }}</td>
                                <td>{{ offre.entreprise }}</td>
                                <td>{{ offre.localisation }}</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>

            <!-- Liste des Evenements -->
            <div class=\"col-md-4 mb-4\">
                <h3 class=\"text-center\">Liste des Evenements</h3>
                <table class=\"table table-striped shadow-sm rounded\">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Date</th>
                            <th>Lieu</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for evenement in evenement_count %}
                            <tr>
                                <td>{{ loop.index }}</td>
                                <td>{{ evenement.nom }}</td>
                                <td>{{ evenement.date | date('Y-m-d') }}</td>
                                <td>{{ evenement.lieu }}</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>

            <!-- Liste des Freelance -->
            <div class=\"col-md-4 mb-4\">
                <h3 class=\"text-center\">Liste des Freelance</h3>
                <table class=\"table table-striped shadow-sm rounded\">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Compétence</th>
                        </tr>
                    </thead>
                    <tbody>
                        {# 
                        <tbody>
                            {% for freelance in freelances %}
                                <tr>
                                    <td>{{ loop.index }}</td>
                                    <td>{{ freelance.nom }}</td>
                                    <td>{{ freelance.competence }}</td>
                                </tr>
                            {% endfor %}
                        </tbody>
                        #}
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Chart.js script inclusion -->
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>

    <!-- Bootstrap CSS inclusion -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css\" rel=\"stylesheet\">

    <script>
        // Assurez-vous que les données sont disponibles dans le JavaScript
        var evenementCount = {{ evenement_count|default(0) }};
        var offreCount = {{ offre_count|default(0) }};
        var discussionCount = {{ discussion_count|default(0) }};
      
        // Graphique Evenement (bar)
        var ctxEvenement = document.getElementById('evenementChart').getContext('2d');
        var evenementChart = new Chart(ctxEvenement, {
            type: 'bar',
            data: {
                labels: ['Evenements'],
                datasets: [{
                    label: '# of Evenements',
                    data: [evenementCount],
                    backgroundColor: ['rgba(75, 192, 192, 0.2)'],
                    borderColor: ['rgba(75, 192, 192, 1)'],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Graphique Offre (pie)
        var ctxOffre = document.getElementById('offreChart').getContext('2d');
        var offreChart = new Chart(ctxOffre, {
            type: 'pie',
            data: {
                labels: ['Offres'],
                datasets: [{
                    label: '# of Offres',
                    data: [offreCount],
                    backgroundColor: ['rgba(255, 99, 132, 0.2)'],
                    borderColor: ['rgba(255, 99, 132, 1)'],
                    borderWidth: 1
                }]
            }
        });

        // Graphique Discussion (line)
        var ctxDiscussion = document.getElementById('discussionChart').getContext('2d');
        var discussionChart = new Chart(ctxDiscussion, {
            type: 'line',
            data: {
                labels: ['Discussions'],
                datasets: [{
                    label: '# of Discussions',
                    data: [discussionCount],
                    fill: false,
                    borderColor: 'rgb(54, 162, 235)',
                    tension: 0.1
                }]
            }
        });
    </script>

    <style>
        .container {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        canvas {
            max-width: 500px;
            width: 100%;
            height: auto;
        }

        .table {
            margin-top: 20px;
            border-radius: 8px;
        }

        th, td {
            text-align: center;
            vertical-align: middle;
        }
        
        h3 {
            font-size: 1.5rem;
            color: #333;
        }

        .row {
            margin-bottom: 20px;
        }
        
        .shadow-sm {
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
        }
    </style>
{% endblock %}
", "admin/index.html.twig", "C:\\careera\\templates\\admin\\index.html.twig");
    }
}
