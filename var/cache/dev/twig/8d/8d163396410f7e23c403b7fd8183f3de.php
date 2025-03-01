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

<<<<<<<< HEAD:var/cache/dev/twig/9b/9b5aba2010a2286192957083f6e81c25.php
/* offre/postuler.html.twig */
class __TwigTemplate_71c76e5fff29ba4b4660cc2947bbb57e extends Template
========
/* evenements/editTypeEvent.html.twig */
class __TwigTemplate_4e1b293fa31bf428fb9970efe6935b8e extends Template
>>>>>>>> origin/HechBackUp:var/cache/dev/twig/8d/8d163396410f7e23c403b7fd8183f3de.php
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenements/editTypeEvent.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenements/editTypeEvent.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "evenements/editTypeEvent.html.twig", 1);
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

        yield "Modifier un type événement ";
        
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
<<<<<<<< HEAD:var/cache/dev/twig/9b/9b5aba2010a2286192957083f6e81c25.php
        yield "<div class=\"container d-flex justify-content-center align-items-center min-vh-100\">
    <div class=\"card shadow-sm p-4\" style=\"width: 100%; max-width: 600px;\">
        <h1 class=\"mb-3 text-center\">Postuler pour \"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 8, $this->source); })()), "nomposte", [], "any", false, false, false, 8), "html", null, true);
        yield "\"</h1>
        <p>Entreprise : ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 9, $this->source); })()), "entreprise", [], "any", false, false, false, 9), "html", null, true);
        yield "</p>
        <p>Localisation : ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 10, $this->source); })()), "localisation", [], "any", false, false, false, 10), "html", null, true);
        yield "</p>
        <p>Salaire : ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 11, $this->source); })()), "salaire", [], "any", false, false, false, 11), "html", null, true);
        yield " DT</p>
        <form method=\"post\">
            <a href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_addcandidature", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13)]), "html", null, true);
        yield "\" class=\"btn btn-primary w-100\">Envoyer ma candidature</a>
            <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offre");
        yield "\" class=\"btn btn-secondary w-100\">Retour</a>
        </form>
========
        yield "<h1 class=\"text-center my-4\">Modifier </h1>
<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <div class=\"wow fadeInUp\" data-wow-delay=\"0.5s\">
                <p class=\"mb-4\">Modifier un type événement à notre plateforme. Remplissez les informations ci-dessous.</p>
                ";
        // line 12
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 12, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
                <div class=\"row g-4\">
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                             ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 16, $this->source); })()), "nom", [], "any", false, false, false, 16), 'row', ["attr" => ["class" => "form-control", "required" => "required"]]);
        yield "
                            <label for=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 17, $this->source); })()), "nom", [], "any", false, false, false, 17), "vars", [], "any", false, false, false, 17), "id", [], "any", false, false, false, 17), "html", null, true);
        yield "\"></label> 
                           
                        </div>
                    </div>
                    
                    <div class=\"col-12 text-center mt-4\">
                        <button class=\"btn btn-success w-75 py-3\" type=\"submit\">enregistrer</button>
                    </div>
                </div>
                ";
        // line 26
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 26, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
>>>>>>>> origin/HechBackUp:var/cache/dev/twig/8d/8d163396410f7e23c403b7fd8183f3de.php
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
        return "evenements/editTypeEvent.html.twig";
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
        return array (  131 => 26,  119 => 17,  115 => 16,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier un type événement {% endblock %}

{% block body %}
<<<<<<<< HEAD:var/cache/dev/twig/9b/9b5aba2010a2286192957083f6e81c25.php
<div class=\"container d-flex justify-content-center align-items-center min-vh-100\">
    <div class=\"card shadow-sm p-4\" style=\"width: 100%; max-width: 600px;\">
        <h1 class=\"mb-3 text-center\">Postuler pour \"{{ offre.nomposte }}\"</h1>
        <p>Entreprise : {{ offre.entreprise }}</p>
        <p>Localisation : {{ offre.localisation }}</p>
        <p>Salaire : {{ offre.salaire }} DT</p>
        <form method=\"post\">
            <a href=\"{{ path('app_addcandidature', {'id': offre.id}) }}\" class=\"btn btn-primary w-100\">Envoyer ma candidature</a>
            <a href=\"{{ path('app_offre') }}\" class=\"btn btn-secondary w-100\">Retour</a>
        </form>
    </div>
</div>
{% endblock %}", "offre/postuler.html.twig", "C:\\careera\\templates\\offre\\postuler.html.twig");
========
<h1 class=\"text-center my-4\">Modifier </h1>
<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <div class=\"wow fadeInUp\" data-wow-delay=\"0.5s\">
                <p class=\"mb-4\">Modifier un type événement à notre plateforme. Remplissez les informations ci-dessous.</p>
                {{ form_start(addform, {'attr': {'novalidate': 'novalidate'}}) }}
                <div class=\"row g-4\">
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                             {{ form_row(addform.nom, {'attr': {'class': 'form-control','required': 'required' }}) }}
                            <label for=\"{{ addform.nom.vars.id }}\"></label> 
                           
                        </div>
                    </div>
                    
                    <div class=\"col-12 text-center mt-4\">
                        <button class=\"btn btn-success w-75 py-3\" type=\"submit\">enregistrer</button>
                    </div>
                </div>
                {{ form_end(addform) }}
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "evenements/editTypeEvent.html.twig", "C:\\Users\\medhe\\OneDrive\\Bureau\\New folder (9)\\CareeraPlatform\\templates\\evenements\\editTypeEvent.html.twig");
>>>>>>>> origin/HechBackUp:var/cache/dev/twig/8d/8d163396410f7e23c403b7fd8183f3de.php
    }
}
