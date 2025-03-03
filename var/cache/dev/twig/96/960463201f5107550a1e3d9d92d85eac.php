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

/* candidature/pdf.html.twig */
class __TwigTemplate_03a8b1269940af1e8e246283106417d6 extends Template
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

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidature/pdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidature/pdf.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

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

        // line 2
        yield "<style>
    body {
        font-family: Arial, sans-serif;
        font-size: 14px;
        text-align: center;
    }
    .container {
        width: 100%;
        margin: auto;
        position: relative;
    }
    .logo {
        position: absolute;
        top: 10px;
        right: 10px;
        width: 100px;
    }
    .header {
        position: absolute;
        top: 10px;
        right: 10px; /* Positionné à droite */
        text-align: right; /* Alignement à droite */
        font-size: 20px; /* Taille de la police pour le nom */
        font-weight: bold; /* Mettre en gras */
    }
    .candidature {
        margin-bottom: 20px;
        padding: 10px;
        border: 1px solid #000;
        font-size: 16px;
    }
    .candidature h3 {
        margin-bottom: 5px;
        font-size: 18px;
    }
    .candidature p {
        margin: 2px 0;
    }
    .footer-message {
        margin-top: 20px;
        font-size: 18px;
        font-weight: bold;
    }
</style>

<div class=\"container\">
    <div class=\"header\">
        CareEra <!-- Nom positionné ici -->
    </div>
    
    <h2 class=\"text-center\">Candidature Acceptée</h2>
    ";
        // line 53
        if ((array_key_exists("candidature", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["candidature"]) || array_key_exists("candidature", $context) ? $context["candidature"] : (function () { throw new RuntimeError('Variable "candidature" does not exist.', 53, $this->source); })())))) {
            // line 54
            yield "        <div class=\"candidature\">
            <h3>";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["candidature"]) || array_key_exists("candidature", $context) ? $context["candidature"] : (function () { throw new RuntimeError('Variable "candidature" does not exist.', 55, $this->source); })()), "utilisateur", [], "any", false, false, false, 55), "html", null, true);
            yield "</h3>
            <p><strong>Poste/Stage :</strong> ";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["candidature"]) || array_key_exists("candidature", $context) ? $context["candidature"] : (function () { throw new RuntimeError('Variable "candidature" does not exist.', 56, $this->source); })()), "offre", [], "any", false, false, false, 56), "nomposte", [], "any", false, false, false, 56), "html", null, true);
            yield "</p>
            <p><strong>Entreprise :</strong> ";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["candidature"]) || array_key_exists("candidature", $context) ? $context["candidature"] : (function () { throw new RuntimeError('Variable "candidature" does not exist.', 57, $this->source); })()), "offre", [], "any", false, false, false, 57), "entreprise", [], "any", false, false, false, 57), "html", null, true);
            yield "</p>
            <p><strong>Statut :</strong> ";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["candidature"]) || array_key_exists("candidature", $context) ? $context["candidature"] : (function () { throw new RuntimeError('Variable "candidature" does not exist.', 58, $this->source); })()), "statut", [], "any", false, false, false, 58), "html", null, true);
            yield "</p>
            <p><strong>Date de Soumission :</strong> ";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["candidature"]) || array_key_exists("candidature", $context) ? $context["candidature"] : (function () { throw new RuntimeError('Variable "candidature" does not exist.', 59, $this->source); })()), "datesoumission", [], "any", false, false, false, 59), "d/m/Y"), "html", null, true);
            yield "</p>
            <p><strong>Lettre de Motivation :</strong> ";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["candidature"]) || array_key_exists("candidature", $context) ? $context["candidature"] : (function () { throw new RuntimeError('Variable "candidature" does not exist.', 60, $this->source); })()), "lettremotivation", [], "any", false, false, false, 60), "html", null, true);
            yield "</p>
        </div>
        <p class=\"footer-message\">Accomplissez votre dossier et prenez-le avec vous pour l'entretien.</p>
    ";
        } else {
            // line 64
            yield "        <p class=\"text-center\">Aucune candidature acceptée.</p>
    ";
        }
        // line 66
        yield "</div>
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
        return "candidature/pdf.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  161 => 66,  157 => 64,  150 => 60,  146 => 59,  142 => 58,  138 => 57,  134 => 56,  130 => 55,  127 => 54,  125 => 53,  72 => 2,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block body %}
<style>
    body {
        font-family: Arial, sans-serif;
        font-size: 14px;
        text-align: center;
    }
    .container {
        width: 100%;
        margin: auto;
        position: relative;
    }
    .logo {
        position: absolute;
        top: 10px;
        right: 10px;
        width: 100px;
    }
    .header {
        position: absolute;
        top: 10px;
        right: 10px; /* Positionné à droite */
        text-align: right; /* Alignement à droite */
        font-size: 20px; /* Taille de la police pour le nom */
        font-weight: bold; /* Mettre en gras */
    }
    .candidature {
        margin-bottom: 20px;
        padding: 10px;
        border: 1px solid #000;
        font-size: 16px;
    }
    .candidature h3 {
        margin-bottom: 5px;
        font-size: 18px;
    }
    .candidature p {
        margin: 2px 0;
    }
    .footer-message {
        margin-top: 20px;
        font-size: 18px;
        font-weight: bold;
    }
</style>

<div class=\"container\">
    <div class=\"header\">
        CareEra <!-- Nom positionné ici -->
    </div>
    
    <h2 class=\"text-center\">Candidature Acceptée</h2>
    {% if candidature is defined and candidature is not empty %}
        <div class=\"candidature\">
            <h3>{{ candidature.utilisateur }}</h3>
            <p><strong>Poste/Stage :</strong> {{ candidature.offre.nomposte }}</p>
            <p><strong>Entreprise :</strong> {{ candidature.offre.entreprise }}</p>
            <p><strong>Statut :</strong> {{ candidature.statut }}</p>
            <p><strong>Date de Soumission :</strong> {{ candidature.datesoumission|date('d/m/Y') }}</p>
            <p><strong>Lettre de Motivation :</strong> {{ candidature.lettremotivation }}</p>
        </div>
        <p class=\"footer-message\">Accomplissez votre dossier et prenez-le avec vous pour l'entretien.</p>
    {% else %}
        <p class=\"text-center\">Aucune candidature acceptée.</p>
    {% endif %}
</div>
{% endblock %}
", "candidature/pdf.html.twig", "C:\\careera\\templates\\candidature\\pdf.html.twig");
    }
}
