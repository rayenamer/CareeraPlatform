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

/* offre/statistiques.html.twig */
class __TwigTemplate_256bb1fb176c9f19859ef2dd01ffdac8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offre/statistiques.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offre/statistiques.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "offre/statistiques.html.twig", 1);
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

        yield "Statistiques des Offres";
        
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
        yield "<h1 class=\"mt-5 mb-4 text-center\">Statistiques des Offres</h1>

<div class=\"charts-container\">
    <div class=\"chart-box\">
        <h5 class=\"text-center\">Les offres par type d'offre</h3>
        <canvas id=\"offreChart\"></canvas>
    </div>
    <div class=\"chart-box\">
        <h5 class=\"text-center\">Les offres par localisation</h3>
        <canvas id=\"localisationChart\"></canvas>
    </div>
    <div class=\"chart-box\">
        <h5 class=\"text-center\">Les offres par salaire</h3>
        <canvas id=\"salaireChart\"></canvas>
    </div>
</div>

<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>

<script>
    function generateColors(count) {
        let colors = [];
        let borderColors = [];
        for (let i = 0; i < count; i++) {
            let color = `hsl(\${Math.random() * 360}, 70%, 60%)`;
            colors.push(color.replace(\"hsl\", \"hsla\").replace(\")\", \", 0.5)\"));
            borderColors.push(color);
        }
        return { colors, borderColors };
    }

    function createChart(id, labels, data, type, title) {
        var ctx = document.getElementById(id).getContext('2d');
        var colorSet = generateColors(labels.length);
        
        new Chart(ctx, {
            type: type,
            data: {
                labels: labels,
                datasets: [{
                    label: title,
                    data: data,
                    backgroundColor: colorSet.colors,
                    borderColor: colorSet.borderColors,
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: type === 'bar' ? { y: { beginAtZero: true } } : {}
            }
        });
    }

    createChart(\"offreChart\", JSON.parse('";
        // line 61
        yield (isset($context["labelsOffre"]) || array_key_exists("labelsOffre", $context) ? $context["labelsOffre"] : (function () { throw new RuntimeError('Variable "labelsOffre" does not exist.', 61, $this->source); })());
        yield "'), JSON.parse('";
        yield (isset($context["dataOffre"]) || array_key_exists("dataOffre", $context) ? $context["dataOffre"] : (function () { throw new RuntimeError('Variable "dataOffre" does not exist.', 61, $this->source); })());
        yield "'), \"pie\", \"Répartition par Type d'Offre\");
    createChart(\"localisationChart\", JSON.parse('";
        // line 62
        yield (isset($context["labelsLocalisation"]) || array_key_exists("labelsLocalisation", $context) ? $context["labelsLocalisation"] : (function () { throw new RuntimeError('Variable "labelsLocalisation" does not exist.', 62, $this->source); })());
        yield "'), JSON.parse('";
        yield (isset($context["dataLocalisation"]) || array_key_exists("dataLocalisation", $context) ? $context["dataLocalisation"] : (function () { throw new RuntimeError('Variable "dataLocalisation" does not exist.', 62, $this->source); })());
        yield "'), \"bar\", \"Répartition par Localisation\", true);
    createChart(\"salaireChart\", JSON.parse('";
        // line 63
        yield (isset($context["labelsSalaire"]) || array_key_exists("labelsSalaire", $context) ? $context["labelsSalaire"] : (function () { throw new RuntimeError('Variable "labelsSalaire" does not exist.', 63, $this->source); })());
        yield "'), JSON.parse('";
        yield (isset($context["dataSalaire"]) || array_key_exists("dataSalaire", $context) ? $context["dataSalaire"] : (function () { throw new RuntimeError('Variable "dataSalaire" does not exist.', 63, $this->source); })());
        yield "'), \"doughnut\", \"Répartition par Tranche de Salaire\");

</script>

<style> 
    .charts-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        gap: 30px;
        margin-top: 20px;
    }

    .chart-box {
        width: 400px;
        height: 450px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background: #f8f9fa;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    }

    canvas {
        width: 100% !important;
        height: 100% !important;
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
        return "offre/statistiques.html.twig";
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
        return array (  169 => 63,  163 => 62,  157 => 61,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Statistiques des Offres{% endblock %}

{% block body %}
<h1 class=\"mt-5 mb-4 text-center\">Statistiques des Offres</h1>

<div class=\"charts-container\">
    <div class=\"chart-box\">
        <h5 class=\"text-center\">Les offres par type d'offre</h3>
        <canvas id=\"offreChart\"></canvas>
    </div>
    <div class=\"chart-box\">
        <h5 class=\"text-center\">Les offres par localisation</h3>
        <canvas id=\"localisationChart\"></canvas>
    </div>
    <div class=\"chart-box\">
        <h5 class=\"text-center\">Les offres par salaire</h3>
        <canvas id=\"salaireChart\"></canvas>
    </div>
</div>

<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>

<script>
    function generateColors(count) {
        let colors = [];
        let borderColors = [];
        for (let i = 0; i < count; i++) {
            let color = `hsl(\${Math.random() * 360}, 70%, 60%)`;
            colors.push(color.replace(\"hsl\", \"hsla\").replace(\")\", \", 0.5)\"));
            borderColors.push(color);
        }
        return { colors, borderColors };
    }

    function createChart(id, labels, data, type, title) {
        var ctx = document.getElementById(id).getContext('2d');
        var colorSet = generateColors(labels.length);
        
        new Chart(ctx, {
            type: type,
            data: {
                labels: labels,
                datasets: [{
                    label: title,
                    data: data,
                    backgroundColor: colorSet.colors,
                    borderColor: colorSet.borderColors,
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: type === 'bar' ? { y: { beginAtZero: true } } : {}
            }
        });
    }

    createChart(\"offreChart\", JSON.parse('{{ labelsOffre|raw }}'), JSON.parse('{{ dataOffre|raw }}'), \"pie\", \"Répartition par Type d'Offre\");
    createChart(\"localisationChart\", JSON.parse('{{ labelsLocalisation|raw }}'), JSON.parse('{{ dataLocalisation|raw }}'), \"bar\", \"Répartition par Localisation\", true);
    createChart(\"salaireChart\", JSON.parse('{{ labelsSalaire|raw }}'), JSON.parse('{{ dataSalaire|raw }}'), \"doughnut\", \"Répartition par Tranche de Salaire\");

</script>

<style> 
    .charts-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        gap: 30px;
        margin-top: 20px;
    }

    .chart-box {
        width: 400px;
        height: 450px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background: #f8f9fa;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    }

    canvas {
        width: 100% !important;
        height: 100% !important;
    }
</style>

{% endblock %}
", "offre/statistiques.html.twig", "C:\\careera\\templates\\offre\\statistiques.html.twig");
    }
}
