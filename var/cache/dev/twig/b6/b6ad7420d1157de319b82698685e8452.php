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

/* security/login.html.twig */
class __TwigTemplate_0030983c3409121d90e06a58987ab2c3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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

        yield "Page de Connexion";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
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

        // line 5
        yield "    

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 8
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

        // line 9
        yield "<div class=\"container d-flex justify-content-center align-items-center vh-100\">
    <div class=\"col-md-6\">
        <div class=\"card shadow p-4\">
            <h1 class=\"text-center mb-4\" style=\"font-weight: bold;\">Page de Connexion</h1>
            <form method=\"POST\" action=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">
                <!-- CSRF Token for security -->
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">

                <!-- Champ Email ou Téléphone -->
                <div class=\"mb-3\">
                    <label for=\"email\" class=\"form-label\" style=\"font-size: 0.9rem;\">Email ou Téléphone:</label>
                    <input 
                        type=\"text\" 
                        class=\"form-control\" 
                        id=\"email\" 
                        name=\"email\" 
                          value=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 25, $this->source); })()), "html", null, true);
        yield "\" 
                        required
                        placeholder=\"Entrez votre email ou numéro de téléphone\"
                        style=\"font-size: 0.9rem;\"
                    >
                </div>

                <!-- Mot de passe -->
                <div class=\"mb-3\">
                    <label for=\"motdepasse\" class=\"form-label\" style=\"font-size: 0.9rem;\">Mot de passe:</label>
                    <input 
                        type=\"password\" 
                        class=\"form-control\" 
                        id=\"motdepasse\" 
                        name=\"motdepasse\" 
                        required
                        placeholder=\"Entrez votre mot de passe\"
                        style=\"font-size: 0.9rem;\"
                    >
                </div>

                <!-- Bouton de connexion -->
                <button type=\"submit\" class=\"btn btn-primary w-100\" style=\"font-size: 1rem;\">
                    Se connecter
                </button>
       <!-- Lien mot de passe oublié sous le bouton de connexion -->
                <div class=\"text-center mt-3\">
                    <a href=\"";
        // line 52
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        yield "\" style=\"font-size: 0.9rem; color: #007bff;\" >
                        Mot de passe oublié ?
                    </a>
                </div>
                <hr> 


                <!-- Bouton Créer un compte -->
                <button 
                    type=\"button\" 
                    class=\"btn btn-success w-100\" 
                    style=\"font-size: 1rem;\"
                    onclick=\"window.location.href='";
        // line 64
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "'\"
                >
                    Créer un compte
                </button>

         
            </form>
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
        return "security/login.html.twig";
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
        return array (  196 => 64,  181 => 52,  151 => 25,  138 => 15,  133 => 13,  127 => 9,  114 => 8,  101 => 5,  88 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Page de Connexion{% endblock %}
{% block navbar %}
    

{% endblock %}
{% block body %}
<div class=\"container d-flex justify-content-center align-items-center vh-100\">
    <div class=\"col-md-6\">
        <div class=\"card shadow p-4\">
            <h1 class=\"text-center mb-4\" style=\"font-weight: bold;\">Page de Connexion</h1>
            <form method=\"POST\" action=\"{{ path('app_login') }}\">
                <!-- CSRF Token for security -->
                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

                <!-- Champ Email ou Téléphone -->
                <div class=\"mb-3\">
                    <label for=\"email\" class=\"form-label\" style=\"font-size: 0.9rem;\">Email ou Téléphone:</label>
                    <input 
                        type=\"text\" 
                        class=\"form-control\" 
                        id=\"email\" 
                        name=\"email\" 
                          value=\"{{ last_username }}\" 
                        required
                        placeholder=\"Entrez votre email ou numéro de téléphone\"
                        style=\"font-size: 0.9rem;\"
                    >
                </div>

                <!-- Mot de passe -->
                <div class=\"mb-3\">
                    <label for=\"motdepasse\" class=\"form-label\" style=\"font-size: 0.9rem;\">Mot de passe:</label>
                    <input 
                        type=\"password\" 
                        class=\"form-control\" 
                        id=\"motdepasse\" 
                        name=\"motdepasse\" 
                        required
                        placeholder=\"Entrez votre mot de passe\"
                        style=\"font-size: 0.9rem;\"
                    >
                </div>

                <!-- Bouton de connexion -->
                <button type=\"submit\" class=\"btn btn-primary w-100\" style=\"font-size: 1rem;\">
                    Se connecter
                </button>
       <!-- Lien mot de passe oublié sous le bouton de connexion -->
                <div class=\"text-center mt-3\">
                    <a href=\"{{path('app_forgot_password_request')}}\" style=\"font-size: 0.9rem; color: #007bff;\" >
                        Mot de passe oublié ?
                    </a>
                </div>
                <hr> 


                <!-- Bouton Créer un compte -->
                <button 
                    type=\"button\" 
                    class=\"btn btn-success w-100\" 
                    style=\"font-size: 1rem;\"
                    onclick=\"window.location.href='{{ path('app_register') }}'\"
                >
                    Créer un compte
                </button>

         
            </form>
        </div>
    </div>
</div>

{% endblock %}
", "security/login.html.twig", "C:\\careera\\templates\\security\\login.html.twig");
    }
}
