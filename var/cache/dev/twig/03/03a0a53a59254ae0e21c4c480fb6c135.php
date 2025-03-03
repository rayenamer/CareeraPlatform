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
   

    <!-- Chart.js script inclusion -->
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>

    <!-- Bootstrap CSS inclusion -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css\" rel=\"stylesheet\">

    <script>
        // Assurez-vous que les données sont disponibles dans le JavaScript
        var evenementCount = ";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("evenement_count", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["evenement_count"]) || array_key_exists("evenement_count", $context) ? $context["evenement_count"] : (function () { throw new RuntimeError('Variable "evenement_count" does not exist.', 46, $this->source); })()), 0)) : (0)), "html", null, true);
        yield ";
        var offreCount = ";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("offre_count", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["offre_count"]) || array_key_exists("offre_count", $context) ? $context["offre_count"] : (function () { throw new RuntimeError('Variable "offre_count" does not exist.', 47, $this->source); })()), 0)) : (0)), "html", null, true);
        yield ";
        var discussionCount = ";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("discussion_count", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["discussion_count"]) || array_key_exists("discussion_count", $context) ? $context["discussion_count"] : (function () { throw new RuntimeError('Variable "discussion_count" does not exist.', 48, $this->source); })()), 0)) : (0)), "html", null, true);
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
        return array (  178 => 48,  174 => 47,  170 => 46,  141 => 19,  128 => 18,  109 => 9,  105 => 8,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
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
