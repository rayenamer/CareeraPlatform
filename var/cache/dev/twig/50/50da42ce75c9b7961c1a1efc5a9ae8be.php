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

/* security/chercheur.html.twig */
class __TwigTemplate_b86c6bbf7693b34e18eac3286ea5670f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/chercheur.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/chercheur.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/chercheur.html.twig", 1);
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

        yield "Inscription Jeune / Sénior Diplômé";
        
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"UTF-8\">
    <title>Inscription Jeune / Sénior Diplômé</title>
    ";
        // line 13
        yield "  </head>
  <body>
    <div class=\"container mt-5\">
      <div class=\"row justify-content-center\">
        <div class=\"col-md-6\">
          <h1 class=\"text-center mb-4\">Inscription Jeune / Sénior Diplômé</h1>
          <form method=\"post\" action=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chercheur");
        yield "\" enctype=\"multipart/form-data\">
            
            <div class=\"form-group\">
              <label for=\"nom\">Nom :</label>
              <input type=\"text\" id=\"nom\" name=\"nom\" class=\"form-control\" placeholder=\"Votre nom\" required><br>
            </div>
            
            <div class=\"form-group mt-3\">
              <label for=\"prenom\">Prénom :</label>
              <input type=\"text\" id=\"prenom\" name=\"prenom\" class=\"form-control\" placeholder=\"Votre prénom\" required><br>
            </div>

            <div class=\"form-group mt-3\">
              <label for=\"tel\">Téléphone :</label>
              <input type=\"text\" id=\"tel\" name=\"tel\" class=\"form-control\" placeholder=\"+216 99 999 999\" required><br>
            </div>

            <div class=\"form-group mt-3\">
              <label for=\"email\">Email :</label>
              <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" placeholder=\"exemple@email.com\"
                     required><br>
            </div>

            <div class=\"form-group mt-3\">
              <label for=\"password\">Mot de passe :</label>
              <input type=\"password\" id=\"password\" name=\"password\" class=\"form-control\" placeholder=\"********\"
                     required><br>
            </div>

            <div class=\"form-group mt-3\">
              <label for=\"confirm_password\">Confirmation du mot de passe :</label>
              <input type=\"password\" id=\"confirm_password\" name=\"confirm_password\" class=\"form-control\"
                     placeholder=\"Confirmer votre mot de passe\" required><br>
            </div>

            <div class=\"form-group mt-3\">
              <label for=\"domaine\">Domaine :</label>
              <input type=\"text\" id=\"domaine\" name=\"domaine\" class=\"form-control\" placeholder=\"Votre domaine\"><br>
            </div>

            <div class=\"form-group mt-3\">
              <label for=\"sexe\">Sexe :</label>
              <select id=\"sexe\" name=\"sexe\" class=\"form-control\">
                <option value=\"\" disabled selected>Choisir un sexe</option>
                <option value=\"femme\">Femme</option>
                <option value=\"homme\">Homme</option>
                <option value=\"autre\">Autre</option>
              </select><br>
            </div>

            <div class=\"form-group mt-3\">
              <label for=\"experience\">Années d'expérience :</label>
              <input type=\"number\" id=\"experience\" name=\"experience\" class=\"form-control\"
                     placeholder=\"Nombre d'années\"><br>
            </div>

            ";
        // line 76
        yield "
            <div class=\"form-group mt-3\">
              <label for=\"photo\">Photo :</label>
              <input type=\"file\" id=\"photo\" name=\"photo\" accept=\"image/*\" class=\"form-control\"><br>
            </div>

            <div class=\"form-group mt-3\">
              <label for=\"cv\">CV (PDF ou image) :</label>
              <input type=\"file\" id=\"cv\" name=\"cv\" accept=\".pdf,image/*\" class=\"form-control\"><br>
            </div>

            <div class=\"form-group mt-4 text-center\">
              <button type=\"submit\" class=\"btn btn-primary\">S'inscrire</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
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
        return "security/chercheur.html.twig";
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
        return array (  197 => 76,  138 => 19,  130 => 13,  123 => 7,  110 => 6,  88 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Inscription Jeune / Sénior Diplômé{% endblock %}
{% block navbar %}
{% endblock %}
{% block body %}
<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"UTF-8\">
    <title>Inscription Jeune / Sénior Diplômé</title>
    {# Ajoutez ici vos liens CSS (par exemple Bootstrap) si nécessaire #}
  </head>
  <body>
    <div class=\"container mt-5\">
      <div class=\"row justify-content-center\">
        <div class=\"col-md-6\">
          <h1 class=\"text-center mb-4\">Inscription Jeune / Sénior Diplômé</h1>
          <form method=\"post\" action=\"{{ path('app_chercheur') }}\" enctype=\"multipart/form-data\">
            
            <div class=\"form-group\">
              <label for=\"nom\">Nom :</label>
              <input type=\"text\" id=\"nom\" name=\"nom\" class=\"form-control\" placeholder=\"Votre nom\" required><br>
            </div>
            
            <div class=\"form-group mt-3\">
              <label for=\"prenom\">Prénom :</label>
              <input type=\"text\" id=\"prenom\" name=\"prenom\" class=\"form-control\" placeholder=\"Votre prénom\" required><br>
            </div>

            <div class=\"form-group mt-3\">
              <label for=\"tel\">Téléphone :</label>
              <input type=\"text\" id=\"tel\" name=\"tel\" class=\"form-control\" placeholder=\"+216 99 999 999\" required><br>
            </div>

            <div class=\"form-group mt-3\">
              <label for=\"email\">Email :</label>
              <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" placeholder=\"exemple@email.com\"
                     required><br>
            </div>

            <div class=\"form-group mt-3\">
              <label for=\"password\">Mot de passe :</label>
              <input type=\"password\" id=\"password\" name=\"password\" class=\"form-control\" placeholder=\"********\"
                     required><br>
            </div>

            <div class=\"form-group mt-3\">
              <label for=\"confirm_password\">Confirmation du mot de passe :</label>
              <input type=\"password\" id=\"confirm_password\" name=\"confirm_password\" class=\"form-control\"
                     placeholder=\"Confirmer votre mot de passe\" required><br>
            </div>

            <div class=\"form-group mt-3\">
              <label for=\"domaine\">Domaine :</label>
              <input type=\"text\" id=\"domaine\" name=\"domaine\" class=\"form-control\" placeholder=\"Votre domaine\"><br>
            </div>

            <div class=\"form-group mt-3\">
              <label for=\"sexe\">Sexe :</label>
              <select id=\"sexe\" name=\"sexe\" class=\"form-control\">
                <option value=\"\" disabled selected>Choisir un sexe</option>
                <option value=\"femme\">Femme</option>
                <option value=\"homme\">Homme</option>
                <option value=\"autre\">Autre</option>
              </select><br>
            </div>

            <div class=\"form-group mt-3\">
              <label for=\"experience\">Années d'expérience :</label>
              <input type=\"number\" id=\"experience\" name=\"experience\" class=\"form-control\"
                     placeholder=\"Nombre d'années\"><br>
            </div>

            {# Le champ Adresse est supprimé pour le formulaire Jeune / Sénior Diplômé #}

            <div class=\"form-group mt-3\">
              <label for=\"photo\">Photo :</label>
              <input type=\"file\" id=\"photo\" name=\"photo\" accept=\"image/*\" class=\"form-control\"><br>
            </div>

            <div class=\"form-group mt-3\">
              <label for=\"cv\">CV (PDF ou image) :</label>
              <input type=\"file\" id=\"cv\" name=\"cv\" accept=\".pdf,image/*\" class=\"form-control\"><br>
            </div>

            <div class=\"form-group mt-4 text-center\">
              <button type=\"submit\" class=\"btn btn-primary\">S'inscrire</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
{% endblock %}
", "security/chercheur.html.twig", "C:\\careera\\templates\\security\\chercheur.html.twig");
    }
}
