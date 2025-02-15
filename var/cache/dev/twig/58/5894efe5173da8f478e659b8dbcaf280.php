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

/* candidature/addcandidature.html.twig */
class __TwigTemplate_881a7a64a9ee717077e07c850e6dbafe extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidature/addcandidature.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidature/addcandidature.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "candidature/addcandidature.html.twig", 1);
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

        yield "Ajouter une Candidature";
        
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
        yield "<h1 class=\"text-center my-4\">Ajouter une Candidature</h1>
<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <div class=\"wow fadeInUp\" data-wow-delay=\"0.5s\">
                <p class=\"mb-4\">Ajoutez votre candidature pour une offre disponible. Remplissez les informations ci-dessous.</p>
                ";
        // line 12
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 12, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
                <div class=\"row g-4\">
                    <div class=\"col-md-12\">
                        <div class=\"form-floating\">
                            ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 16, $this->source); })()), "offre", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            <label for=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 17, $this->source); })()), "offre", [], "any", false, false, false, 17), "vars", [], "any", false, false, false, 17), "id", [], "any", false, false, false, 17), "html", null, true);
        yield "\">Offre</label>
                        </div>
                    </div>
                   <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 22, $this->source); })()), "utilisateur", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            <label for=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 23, $this->source); })()), "utilisateur", [], "any", false, false, false, 23), "vars", [], "any", false, false, false, 23), "id", [], "any", false, false, false, 23), "html", null, true);
        yield "\">Utilisateur</label>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 28, $this->source); })()), "datesoumission", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            <label for=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 29, $this->source); })()), "datesoumission", [], "any", false, false, false, 29), "vars", [], "any", false, false, false, 29), "id", [], "any", false, false, false, 29), "html", null, true);
        yield "\">Date de Soumission</label>
                        </div>
                    </div>
                    
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 35, $this->source); })()), "cv", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            <label for=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 36, $this->source); })()), "cv", [], "any", false, false, false, 36), "vars", [], "any", false, false, false, 36), "id", [], "any", false, false, false, 36), "html", null, true);
        yield "\">CV</label>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 41, $this->source); })()), "lettremotivation", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            <label for=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 42, $this->source); })()), "lettremotivation", [], "any", false, false, false, 42), "vars", [], "any", false, false, false, 42), "id", [], "any", false, false, false, 42), "html", null, true);
        yield "\">Lettre de Motivation</label>
                        </div>
                    </div>
                    
                   <div class=\"col-12 text-center mt-4\">
                        <button class=\"btn btn-success w-75 py-3\" type=\"submit\">Enregistrer</button>
                    </div>


                </div>
                ";
        // line 52
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 52, $this->source); })()), 'form_end');
        yield "
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
        return "candidature/addcandidature.html.twig";
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
        return array (  181 => 52,  168 => 42,  164 => 41,  156 => 36,  152 => 35,  143 => 29,  139 => 28,  131 => 23,  127 => 22,  119 => 17,  115 => 16,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ajouter une Candidature{% endblock %}

{% block body %}
<h1 class=\"text-center my-4\">Ajouter une Candidature</h1>
<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <div class=\"wow fadeInUp\" data-wow-delay=\"0.5s\">
                <p class=\"mb-4\">Ajoutez votre candidature pour une offre disponible. Remplissez les informations ci-dessous.</p>
                {{ form_start(addform, {'attr': {'novalidate': 'novalidate'}}) }}
                <div class=\"row g-4\">
                    <div class=\"col-md-12\">
                        <div class=\"form-floating\">
                            {{ form_widget(addform.offre, {'attr': {'class': 'form-control'}}) }}
                            <label for=\"{{ addform.offre.vars.id }}\">Offre</label>
                        </div>
                    </div>
                   <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            {{ form_widget(addform.utilisateur, {'attr': {'class': 'form-control'}}) }}
                            <label for=\"{{ addform.utilisateur.vars.id }}\">Utilisateur</label>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            {{ form_widget(addform.datesoumission, {'attr': {'class': 'form-control'}}) }}
                            <label for=\"{{ addform.datesoumission.vars.id }}\">Date de Soumission</label>
                        </div>
                    </div>
                    
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            {{ form_widget(addform.cv, {'attr': {'class': 'form-control'}}) }}
                            <label for=\"{{ addform.cv.vars.id }}\">CV</label>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            {{ form_widget(addform.lettremotivation, {'attr': {'class': 'form-control'}}) }}
                            <label for=\"{{ addform.lettremotivation.vars.id }}\">Lettre de Motivation</label>
                        </div>
                    </div>
                    
                   <div class=\"col-12 text-center mt-4\">
                        <button class=\"btn btn-success w-75 py-3\" type=\"submit\">Enregistrer</button>
                    </div>


                </div>
                {{ form_end(addform) }}
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "candidature/addcandidature.html.twig", "C:\\careera\\templates\\candidature\\addcandidature.html.twig");
    }
}
