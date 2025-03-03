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

/* evenements/ajoutevent.html.twig */
class __TwigTemplate_6bf6ab3bd11c51b1dd134e1a6406606a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenements/ajoutevent.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenements/ajoutevent.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "evenements/ajoutevent.html.twig", 1);
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

        yield "Ajouter un événement";
        
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
        yield "<div class=\"container my-5\">
    <h1 class=\"text-center mb-4 text-primary fw-bold\">Créer un nouvel événement</h1>
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8 col-lg-6\">
            <div class=\"card shadow-sm p-4 wow fadeInUp\" data-wow-delay=\"0.5s\">
                <p class=\"text-muted text-center mb-4\">Remplissez les détails ci-dessous pour ajouter votre événement.</p>
                
                ";
        // line 13
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 13, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "needs-validation"]]);
        yield "
                <div class=\"row g-3\">
                    <!-- Nom -->
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 18, $this->source); })()), "nom", [], "any", false, false, false, 18), 'row', ["attr" => ["class" => "form-control border-primary-subtle", "placeholder" => "Nom de l'événement", "required" => "required"]]);
        yield "
                            <label for=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 19, $this->source); })()), "nom", [], "any", false, false, false, 19), "vars", [], "any", false, false, false, 19), "id", [], "any", false, false, false, 19), "html", null, true);
        yield "\"><span class=\"text-danger\">*</span></label>
                        </div>
                    </div>

                    <!-- Date -->
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 26, $this->source); })()), "date", [], "any", false, false, false, 26), 'row', ["attr" => ["class" => "form-control border-primary-subtle", "placeholder" => "Date", "required" => "required"]]);
        yield "
                            <label for=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 27, $this->source); })()), "date", [], "any", false, false, false, 27), "vars", [], "any", false, false, false, 27), "id", [], "any", false, false, false, 27), "html", null, true);
        yield "\"> <span class=\"text-danger\">*</span></label>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class=\"col-12\">
                        <div class=\"form-floating\">
                            ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 34, $this->source); })()), "description", [], "any", false, false, false, 34), 'row', ["attr" => ["class" => "form-control border-primary-subtle", "placeholder" => "Description", "rows" => "6", "required" => "required"]]);
        yield "
                            <label for=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 35, $this->source); })()), "description", [], "any", false, false, false, 35), "vars", [], "any", false, false, false, 35), "id", [], "any", false, false, false, 35), "html", null, true);
        yield "\"><span class=\"text-danger\">*</span></label>
                        </div>
                    </div>

                    <!-- Lieu -->
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 42, $this->source); })()), "lieu", [], "any", false, false, false, 42), 'row', ["attr" => ["class" => "form-control border-primary-subtle", "placeholder" => "Lieu", "required" => "required"]]);
        yield "
                            <label for=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 43, $this->source); })()), "lieu", [], "any", false, false, false, 43), "vars", [], "any", false, false, false, 43), "id", [], "any", false, false, false, 43), "html", null, true);
        yield "\"> <span class=\"text-danger\">*</span></label>
                        </div>
                    </div>

                    <!-- Type d'événement -->
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 50, $this->source); })()), "TypeEvent", [], "any", false, false, false, 50), 'row', ["attr" => ["class" => "form-select border-primary-subtle", "placeholder" => "Type d'événement"]]);
        yield "
                            <label for=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 51, $this->source); })()), "TypeEvent", [], "any", false, false, false, 51), "vars", [], "any", false, false, false, 51), "id", [], "any", false, false, false, 51), "html", null, true);
        yield "\"></label>
                        </div>
                    </div>

                    <!-- URL Image Cloudinary -->
                    <div class=\"col-12\">
                        <div class=\"form-floating\">
                            ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 58, $this->source); })()), "imageUrl", [], "any", false, false, false, 58), 'row', ["attr" => ["class" => "form-control border-primary-subtle", "placeholder" => "URL de l'image "]]);
        yield "
                            <label for=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 59, $this->source); })()), "imageUrl", [], "any", false, false, false, 59), "vars", [], "any", false, false, false, 59), "id", [], "any", false, false, false, 59), "html", null, true);
        yield "\"></label>
                        </div>
                    </div>

                    <!-- Disponibilité -->
                    <div class=\"col-12\">
                        <div class=\"form-check form-switch\">
                            ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 66, $this->source); })()), "disponibilite", [], "any", false, false, false, 66), 'row', ["attr" => ["class" => "form-check-input"]]);
        yield "
                            <label for=\"";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 67, $this->source); })()), "disponibilite", [], "any", false, false, false, 67), "vars", [], "any", false, false, false, 67), "id", [], "any", false, false, false, 67), "html", null, true);
        yield "\" class=\"form-check-label fw-medium\"></label>
                        </div>
                    </div>

                    <!-- Bouton Soumettre -->
                    <div class=\"col-12 text-center mt-4\">
                        <button class=\"btn btn-success w-50 py-2 rounded-pill fw-semibold\" type=\"submit\">
                            <i class=\"fas fa-save me-2\"></i> Enregistrer l'événement
                        </button>
                    </div>
                </div>
                ";
        // line 78
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 78, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>
</div>

<!-- Inclure FontAwesome pour les icônes (si non déjà inclus dans base.html.twig) -->
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\">
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
        return "evenements/ajoutevent.html.twig";
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
        return array (  219 => 78,  205 => 67,  201 => 66,  191 => 59,  187 => 58,  177 => 51,  173 => 50,  163 => 43,  159 => 42,  149 => 35,  145 => 34,  135 => 27,  131 => 26,  121 => 19,  117 => 18,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ajouter un événement{% endblock %}

{% block body %}
<div class=\"container my-5\">
    <h1 class=\"text-center mb-4 text-primary fw-bold\">Créer un nouvel événement</h1>
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8 col-lg-6\">
            <div class=\"card shadow-sm p-4 wow fadeInUp\" data-wow-delay=\"0.5s\">
                <p class=\"text-muted text-center mb-4\">Remplissez les détails ci-dessous pour ajouter votre événement.</p>
                
                {{ form_start(addform, {'attr': {'novalidate': 'novalidate', 'class': 'needs-validation'}}) }}
                <div class=\"row g-3\">
                    <!-- Nom -->
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            {{ form_row(addform.nom, {'attr': {'class': 'form-control border-primary-subtle', 'placeholder': 'Nom de l\\'événement', 'required': 'required'}}) }}
                            <label for=\"{{ addform.nom.vars.id }}\"><span class=\"text-danger\">*</span></label>
                        </div>
                    </div>

                    <!-- Date -->
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            {{ form_row(addform.date, {'attr': {'class': 'form-control border-primary-subtle', 'placeholder': 'Date', 'required': 'required'}}) }}
                            <label for=\"{{ addform.date.vars.id }}\"> <span class=\"text-danger\">*</span></label>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class=\"col-12\">
                        <div class=\"form-floating\">
                            {{ form_row(addform.description, {'attr': {'class': 'form-control border-primary-subtle', 'placeholder': 'Description', 'rows': '6', 'required': 'required'}}) }}
                            <label for=\"{{ addform.description.vars.id }}\"><span class=\"text-danger\">*</span></label>
                        </div>
                    </div>

                    <!-- Lieu -->
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            {{ form_row(addform.lieu, {'attr': {'class': 'form-control border-primary-subtle', 'placeholder': 'Lieu', 'required': 'required'}}) }}
                            <label for=\"{{ addform.lieu.vars.id }}\"> <span class=\"text-danger\">*</span></label>
                        </div>
                    </div>

                    <!-- Type d'événement -->
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            {{ form_row(addform.TypeEvent, {'attr': {'class': 'form-select border-primary-subtle', 'placeholder': 'Type d\\'événement'}}) }}
                            <label for=\"{{ addform.TypeEvent.vars.id }}\"></label>
                        </div>
                    </div>

                    <!-- URL Image Cloudinary -->
                    <div class=\"col-12\">
                        <div class=\"form-floating\">
                            {{ form_row(addform.imageUrl, {'attr': {'class': 'form-control border-primary-subtle', 'placeholder': 'URL de l\\'image '}}) }}
                            <label for=\"{{ addform.imageUrl.vars.id }}\"></label>
                        </div>
                    </div>

                    <!-- Disponibilité -->
                    <div class=\"col-12\">
                        <div class=\"form-check form-switch\">
                            {{ form_row(addform.disponibilite, {'attr': {'class': 'form-check-input'}}) }}
                            <label for=\"{{ addform.disponibilite.vars.id }}\" class=\"form-check-label fw-medium\"></label>
                        </div>
                    </div>

                    <!-- Bouton Soumettre -->
                    <div class=\"col-12 text-center mt-4\">
                        <button class=\"btn btn-success w-50 py-2 rounded-pill fw-semibold\" type=\"submit\">
                            <i class=\"fas fa-save me-2\"></i> Enregistrer l'événement
                        </button>
                    </div>
                </div>
                {{ form_end(addform) }}
            </div>
        </div>
    </div>
</div>

<!-- Inclure FontAwesome pour les icônes (si non déjà inclus dans base.html.twig) -->
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\">
{% endblock %}", "evenements/ajoutevent.html.twig", "C:\\careera\\templates\\evenements\\ajoutevent.html.twig");
    }
}
