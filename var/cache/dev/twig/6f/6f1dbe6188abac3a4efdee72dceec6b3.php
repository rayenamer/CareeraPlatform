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

/* login/index.html.twig */
class __TwigTemplate_d2b316c3bb323f92ccc9ced9ef091fcc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "login/index.html.twig", 1);
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
        yield "<div class=\"container d-flex justify-content-center align-items-center vh-100\">
    <div class=\"col-md-6\">
        <div class=\"card shadow p-4\">
            <h1 class=\"text-center mb-4\" style=\"font-weight: bold;\">Page de Connexion</h1>
            <form method=\"POST\" action=\"\">
                <!-- Champ Email ou Téléphone -->
                <div class=\"mb-3\">
                    <label for=\"login\" class=\"form-label\" style=\"font-size: 0.9rem;\">Email ou Téléphone:</label>
                    <input 
                        type=\"text\" 
                        class=\"form-control\" 
                        id=\"login\" 
                        name=\"login\" 
                        required
                        placeholder=\"Entrez votre email ou numéro de téléphone\"
                        style=\"font-size: 0.9rem;\"
                    >
                </div>

                <!-- Mot de passe -->
                <div class=\"mb-3\">
                    <label for=\"password\" class=\"form-label\" style=\"font-size: 0.9rem;\">Mot de passe:</label>
                    <input 
                        type=\"password\" 
                        class=\"form-control\" 
                        id=\"password\" 
                        name=\"password\" 
                        required
                        placeholder=\"Entrez votre mot de passe\"
                        style=\"font-size: 0.9rem;\"
                    >
                </div>

                <!-- Bouton de connexion -->
                <button type=\"submit\" class=\"btn btn-primary w-100\" style=\"font-size: 1rem;\">
                    Se connecter
                </button>

                <!-- Lien Mot de passe oublié -->
                <div class=\"text-center mt-2\">
                    <a href=\"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forgot_password");
        yield "\" class=\"text-decoration-none\" style=\"font-size: 0.9rem;\">
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
        // line 58
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
        return "login/index.html.twig";
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
        return array (  157 => 58,  142 => 46,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Page de Connexion{% endblock %}

{% block body %}
<div class=\"container d-flex justify-content-center align-items-center vh-100\">
    <div class=\"col-md-6\">
        <div class=\"card shadow p-4\">
            <h1 class=\"text-center mb-4\" style=\"font-weight: bold;\">Page de Connexion</h1>
            <form method=\"POST\" action=\"\">
                <!-- Champ Email ou Téléphone -->
                <div class=\"mb-3\">
                    <label for=\"login\" class=\"form-label\" style=\"font-size: 0.9rem;\">Email ou Téléphone:</label>
                    <input 
                        type=\"text\" 
                        class=\"form-control\" 
                        id=\"login\" 
                        name=\"login\" 
                        required
                        placeholder=\"Entrez votre email ou numéro de téléphone\"
                        style=\"font-size: 0.9rem;\"
                    >
                </div>

                <!-- Mot de passe -->
                <div class=\"mb-3\">
                    <label for=\"password\" class=\"form-label\" style=\"font-size: 0.9rem;\">Mot de passe:</label>
                    <input 
                        type=\"password\" 
                        class=\"form-control\" 
                        id=\"password\" 
                        name=\"password\" 
                        required
                        placeholder=\"Entrez votre mot de passe\"
                        style=\"font-size: 0.9rem;\"
                    >
                </div>

                <!-- Bouton de connexion -->
                <button type=\"submit\" class=\"btn btn-primary w-100\" style=\"font-size: 1rem;\">
                    Se connecter
                </button>

                <!-- Lien Mot de passe oublié -->
                <div class=\"text-center mt-2\">
                    <a href=\"{{ path('forgot_password') }}\" class=\"text-decoration-none\" style=\"font-size: 0.9rem;\">
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

", "login/index.html.twig", "C:\\Users\\choub\\Desktop\\CareeraPlatform - Copie\\templates\\login\\index.html.twig");
    }
}
