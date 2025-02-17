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

/* login/forgot_password.html.twig */
class __TwigTemplate_bbd69b1cf130977a01994fe3c9a95880 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/forgot_password.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/forgot_password.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "login/forgot_password.html.twig", 1);
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

        yield "Mot de Passe Oublié";
        
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
            <h1 class=\"text-center mb-4\" style=\"font-weight: bold;\">Mot de Passe Oublié</h1>
            <p class=\"text-center\" style=\"font-size: 0.9rem;\">Entrez votre adresse e-mail pour recevoir un lien de réinitialisation.</p>
            
            <form method=\"POST\" action=\"\">
                <!-- Champ Email -->
                <div class=\"mb-3\">
                    <label for=\"email\" class=\"form-label\" style=\"font-size: 0.9rem;\">Adresse Email:</label>
                    <input 
                        type=\"email\" 
                        class=\"form-control\" 
                        id=\"email\" 
                        name=\"email\" 
                        required
                        placeholder=\"Entrez votre email\"
                        style=\"font-size: 0.9rem;\"
                    >
                </div>
                
                <!-- Bouton Soumettre -->
                <button type=\"submit\" class=\"btn btn-primary w-100\" style=\"font-size: 1rem;\">
                    Envoyer le lien de réinitialisation
                </button>
            </form>
            
            <hr>
            
            <!-- Lien Retour Connexion -->
            <div class=\"text-center mt-2\">
                <a href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"text-decoration-none\" style=\"font-size: 0.9rem;\">
                    Retour à la connexion
                </a>
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
        return "login/forgot_password.html.twig";
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
        return array (  133 => 37,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mot de Passe Oublié{% endblock %}

{% block body %}
<div class=\"container d-flex justify-content-center align-items-center vh-100\">
    <div class=\"col-md-6\">
        <div class=\"card shadow p-4\">
            <h1 class=\"text-center mb-4\" style=\"font-weight: bold;\">Mot de Passe Oublié</h1>
            <p class=\"text-center\" style=\"font-size: 0.9rem;\">Entrez votre adresse e-mail pour recevoir un lien de réinitialisation.</p>
            
            <form method=\"POST\" action=\"\">
                <!-- Champ Email -->
                <div class=\"mb-3\">
                    <label for=\"email\" class=\"form-label\" style=\"font-size: 0.9rem;\">Adresse Email:</label>
                    <input 
                        type=\"email\" 
                        class=\"form-control\" 
                        id=\"email\" 
                        name=\"email\" 
                        required
                        placeholder=\"Entrez votre email\"
                        style=\"font-size: 0.9rem;\"
                    >
                </div>
                
                <!-- Bouton Soumettre -->
                <button type=\"submit\" class=\"btn btn-primary w-100\" style=\"font-size: 1rem;\">
                    Envoyer le lien de réinitialisation
                </button>
            </form>
            
            <hr>
            
            <!-- Lien Retour Connexion -->
            <div class=\"text-center mt-2\">
                <a href=\"{{ path('app_login') }}\" class=\"text-decoration-none\" style=\"font-size: 0.9rem;\">
                    Retour à la connexion
                </a>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "login/forgot_password.html.twig", "C:\\Users\\choub\\Desktop\\CareeraPlatform - Copie\\templates\\login\\forgot_password.html.twig");
    }
}
