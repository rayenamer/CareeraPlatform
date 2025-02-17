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

/* login/login.html.twig */
class __TwigTemplate_332641041299029d15f3f5e3a79d50ae extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "login/login.html.twig", 1);
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

        yield "Connexion";
        
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
        yield "<div class=\"container vh-100\">
  <div class=\"row h-100 justify-content-center align-items-center\">
    <div class=\"col-md-6\">
      <div class=\"card shadow p-4\">
        <h3 class=\"text-center mb-4\" style=\"font-size: 1.6rem; font-weight: bold;\">
          Connexion
        </h3>
        
        ";
        // line 14
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["loginForm"]) || array_key_exists("loginForm", $context) ? $context["loginForm"] : (function () { throw new RuntimeError('Variable "loginForm" does not exist.', 14, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

        <div class=\"mb-4\">
          <div class=\"form-floating\">
            ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["loginForm"]) || array_key_exists("loginForm", $context) ? $context["loginForm"] : (function () { throw new RuntimeError('Variable "loginForm" does not exist.', 18, $this->source); })()), "email", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "form-control", "required" => "required"]]);
        yield "
            <label for=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["loginForm"]) || array_key_exists("loginForm", $context) ? $context["loginForm"] : (function () { throw new RuntimeError('Variable "loginForm" does not exist.', 19, $this->source); })()), "email", [], "any", false, false, false, 19), "vars", [], "any", false, false, false, 19), "id", [], "any", false, false, false, 19), "html", null, true);
        yield "\">Email</label>
            ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["loginForm"]) || array_key_exists("loginForm", $context) ? $context["loginForm"] : (function () { throw new RuntimeError('Variable "loginForm" does not exist.', 20, $this->source); })()), "email", [], "any", false, false, false, 20), 'errors');
        yield "
          </div>
        </div>

        <div class=\"mb-4\">
          <div class=\"form-floating\">
            ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["loginForm"]) || array_key_exists("loginForm", $context) ? $context["loginForm"] : (function () { throw new RuntimeError('Variable "loginForm" does not exist.', 26, $this->source); })()), "motdepasse", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control", "required" => "required"]]);
        yield "
            <label for=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["loginForm"]) || array_key_exists("loginForm", $context) ? $context["loginForm"] : (function () { throw new RuntimeError('Variable "loginForm" does not exist.', 27, $this->source); })()), "motdepasse", [], "any", false, false, false, 27), "vars", [], "any", false, false, false, 27), "id", [], "any", false, false, false, 27), "html", null, true);
        yield "\">Mot de passe</label>
            ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["loginForm"]) || array_key_exists("loginForm", $context) ? $context["loginForm"] : (function () { throw new RuntimeError('Variable "loginForm" does not exist.', 28, $this->source); })()), "motdepasse", [], "any", false, false, false, 28), 'errors');
        yield "
          </div>
        </div>

        <button type=\"submit\" class=\"btn btn-primary w-100\">Se connecter</button>

        ";
        // line 34
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["loginForm"]) || array_key_exists("loginForm", $context) ? $context["loginForm"] : (function () { throw new RuntimeError('Variable "loginForm" does not exist.', 34, $this->source); })()), 'form_end');
        yield "

        <div class=\"mt-3 text-center\">
          <a href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forgot_password");
        yield "\" class=\"text-decoration-none\">
            Mot de passe oublié ?
          </a>
        </div>

        <hr>

        <button 
          type=\"button\" 
          class=\"btn btn-success w-100\"
          onclick=\"window.location.href='";
        // line 47
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "'\"
        >
          Créer un compte
        </button>
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
        return "login/login.html.twig";
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
        return array (  170 => 47,  157 => 37,  151 => 34,  142 => 28,  138 => 27,  134 => 26,  125 => 20,  121 => 19,  117 => 18,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Connexion{% endblock %}

{% block body %}
<div class=\"container vh-100\">
  <div class=\"row h-100 justify-content-center align-items-center\">
    <div class=\"col-md-6\">
      <div class=\"card shadow p-4\">
        <h3 class=\"text-center mb-4\" style=\"font-size: 1.6rem; font-weight: bold;\">
          Connexion
        </h3>
        
        {{ form_start(loginForm, {'attr': {'novalidate': 'novalidate'}}) }}

        <div class=\"mb-4\">
          <div class=\"form-floating\">
            {{ form_widget(loginForm.email, {'attr': {'class': 'form-control', 'required': 'required'}}) }}
            <label for=\"{{ loginForm.email.vars.id }}\">Email</label>
            {{ form_errors(loginForm.email) }}
          </div>
        </div>

        <div class=\"mb-4\">
          <div class=\"form-floating\">
            {{ form_widget(loginForm.motdepasse, {'attr': {'class': 'form-control', 'required': 'required'}}) }}
            <label for=\"{{ loginForm.motdepasse.vars.id }}\">Mot de passe</label>
            {{ form_errors(loginForm.motdepasse) }}
          </div>
        </div>

        <button type=\"submit\" class=\"btn btn-primary w-100\">Se connecter</button>

        {{ form_end(loginForm) }}

        <div class=\"mt-3 text-center\">
          <a href=\"{{ path('forgot_password') }}\" class=\"text-decoration-none\">
            Mot de passe oublié ?
          </a>
        </div>

        <hr>

        <button 
          type=\"button\" 
          class=\"btn btn-success w-100\"
          onclick=\"window.location.href='{{ path('app_register') }}'\"
        >
          Créer un compte
        </button>
      </div>
    </div>
  </div>
</div>
{% endblock %}
", "login/login.html.twig", "C:\\Users\\choub\\Desktop\\CareeraPlatform - Copie\\templates\\login\\login.html.twig");
    }
}
