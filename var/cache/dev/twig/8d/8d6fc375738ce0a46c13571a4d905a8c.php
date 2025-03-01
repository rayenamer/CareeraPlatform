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

<<<<<<<< HEAD:var/cache/dev/twig/3d/5f62745ed7f8caca3e4dcb16c894d020.php
/* reset_password/check_email.html.twig */
class __TwigTemplate_10531a379685d81137ecd5620dce4e0b extends Template
========
/* evenements/ajoutetypeEvent.html.twig */
class __TwigTemplate_d75fab7acb0d520dd782c6cd27c28d05 extends Template
>>>>>>>> origin/HechBackUp:var/cache/dev/twig/8d/8d6fc375738ce0a46c13571a4d905a8c.php
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
<<<<<<<< HEAD:var/cache/dev/twig/3d/5f62745ed7f8caca3e4dcb16c894d020.php
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/check_email.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/check_email.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reset_password/check_email.html.twig", 1);
========
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenements/ajoutetypeEvent.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenements/ajoutetypeEvent.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "evenements/ajoutetypeEvent.html.twig", 1);
>>>>>>>> origin/HechBackUp:var/cache/dev/twig/8d/8d6fc375738ce0a46c13571a4d905a8c.php
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

<<<<<<<< HEAD:var/cache/dev/twig/3d/5f62745ed7f8caca3e4dcb16c894d020.php
        yield "Password Reset Email Sent";
========
        yield "Ajouter un type événement ";
>>>>>>>> origin/HechBackUp:var/cache/dev/twig/8d/8d6fc375738ce0a46c13571a4d905a8c.php
        
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
<<<<<<<< HEAD:var/cache/dev/twig/3d/5f62745ed7f8caca3e4dcb16c894d020.php
        yield "    <p>
        If an account matching your email exists, then an email was just sent that contains a link that you can use to reset your password.
        This link will expire in ";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["resetToken"]) || array_key_exists("resetToken", $context) ? $context["resetToken"] : (function () { throw new RuntimeError('Variable "resetToken" does not exist.', 8, $this->source); })()), "expirationMessageKey", [], "any", false, false, false, 8), CoreExtension::getAttribute($this->env, $this->source, (isset($context["resetToken"]) || array_key_exists("resetToken", $context) ? $context["resetToken"] : (function () { throw new RuntimeError('Variable "resetToken" does not exist.', 8, $this->source); })()), "expirationMessageData", [], "any", false, false, false, 8), "ResetPasswordBundle"), "html", null, true);
        yield ".
    </p>
    <p>If you don't receive an email please check your spam folder or <a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        yield "\">try again</a>.</p>
========
        yield "<h1 class=\"text-center my-4\">Ajouter une type d'événement </h1>
<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <div class=\"wow fadeInUp\" data-wow-delay=\"0.5s\">
                <p class=\"mb-4\">Ajoutez un type d'événement  à notre plateforme. Remplissez les informations ci-dessous.</p>
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
                        <button class=\"btn btn-success w-75 py-3\" type=\"submit\"> enregistrer</button>
                    </div>
                </div>
                ";
        // line 26
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 26, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>
</div>
>>>>>>>> origin/HechBackUp:var/cache/dev/twig/8d/8d6fc375738ce0a46c13571a4d905a8c.php
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
<<<<<<<< HEAD:var/cache/dev/twig/3d/5f62745ed7f8caca3e4dcb16c894d020.php
        return "reset_password/check_email.html.twig";
========
        return "evenements/ajoutetypeEvent.html.twig";
>>>>>>>> origin/HechBackUp:var/cache/dev/twig/8d/8d6fc375738ce0a46c13571a4d905a8c.php
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
<<<<<<<< HEAD:var/cache/dev/twig/3d/5f62745ed7f8caca3e4dcb16c894d020.php
        return array (  109 => 10,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
========
        return array (  131 => 26,  119 => 17,  115 => 16,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
>>>>>>>> origin/HechBackUp:var/cache/dev/twig/8d/8d6fc375738ce0a46c13571a4d905a8c.php
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

<<<<<<<< HEAD:var/cache/dev/twig/3d/5f62745ed7f8caca3e4dcb16c894d020.php
{% block title %}Password Reset Email Sent{% endblock %}

{% block body %}
    <p>
        If an account matching your email exists, then an email was just sent that contains a link that you can use to reset your password.
        This link will expire in {{ resetToken.expirationMessageKey|trans(resetToken.expirationMessageData, 'ResetPasswordBundle') }}.
    </p>
    <p>If you don't receive an email please check your spam folder or <a href=\"{{ path('app_forgot_password_request') }}\">try again</a>.</p>
{% endblock %}
", "reset_password/check_email.html.twig", "C:\\careera\\templates\\reset_password\\check_email.html.twig");
========
{% block title %}Ajouter un type événement {% endblock %}

{% block body %}
<h1 class=\"text-center my-4\">Ajouter une type d'événement </h1>
<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <div class=\"wow fadeInUp\" data-wow-delay=\"0.5s\">
                <p class=\"mb-4\">Ajoutez un type d'événement  à notre plateforme. Remplissez les informations ci-dessous.</p>
                {{ form_start(addform, {'attr': {'novalidate': 'novalidate'}}) }}
                <div class=\"row g-4\">
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                             {{ form_row(addform.nom, {'attr': {'class': 'form-control', 'required': 'required'}}) }}
                            <label for=\"{{ addform.nom.vars.id }}\"></label> 
                           
                        </div>
                    </div>
                    
                    <div class=\"col-12 text-center mt-4\">
                        <button class=\"btn btn-success w-75 py-3\" type=\"submit\"> enregistrer</button>
                    </div>
                </div>
                {{ form_end(addform) }}
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "evenements/ajoutetypeEvent.html.twig", "C:\\Users\\medhe\\OneDrive\\Bureau\\New folder (9)\\CareeraPlatform\\templates\\evenements\\ajoutetypeEvent.html.twig");
>>>>>>>> origin/HechBackUp:var/cache/dev/twig/8d/8d6fc375738ce0a46c13571a4d905a8c.php
    }
}
