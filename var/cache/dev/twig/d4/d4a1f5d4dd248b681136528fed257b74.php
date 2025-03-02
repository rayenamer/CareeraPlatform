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

/* security/freelancer.html.twig */
class __TwigTemplate_19ed0c0598cb4513099645f1dbf9a288 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/freelancer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/freelancer.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/freelancer.html.twig", 1);
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

        yield "Inscription Freelancer";
        
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
        yield "    <meta charset=\"UTF-8\">
    <title>Inscription Freelancer</title>

    <div class=\"container mt-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6\">
                <h1 class=\"text-center mb-4\">Inscription Freelancer</h1> 
                
                <form method=\"post\" action=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_freelancer");
        yield "\" enctype=\"multipart/form-data\">

                    <div class=\"form-group\">
                        <label for=\"nom\">Nom :</label>
                        <input type=\"text\" id=\"nom\" name=\"nom\" class=\"form-control\" placeholder=\"Votre nom\" value=\"";
        // line 19
        yield (((array_key_exists("nom", $context) &&  !(null === $context["nom"]))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["nom"], "html", null, true)) : (""));
        yield "\" required>
                        ";
        // line 20
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "nom", [], "any", true, true, false, 20)) {
            // line 21
            yield "                            <div class=\"text-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 21, $this->source); })()), "nom", [], "any", false, false, false, 21), "html", null, true);
            yield "</div>
                        ";
        }
        // line 23
        yield "                    </div>

                    <div class=\"form-group mt-3\">
                        <label for=\"prenom\">Prénom :</label>
                        <input type=\"text\" id=\"prenom\" name=\"prenom\" class=\"form-control\" placeholder=\"Votre prénom\" value=\"";
        // line 27
        yield (((array_key_exists("prenom", $context) &&  !(null === $context["prenom"]))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["prenom"], "html", null, true)) : (""));
        yield "\" required>
                        ";
        // line 28
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "prenom", [], "any", true, true, false, 28)) {
            // line 29
            yield "                            <div class=\"text-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 29, $this->source); })()), "prenom", [], "any", false, false, false, 29), "html", null, true);
            yield "</div>
                        ";
        }
        // line 31
        yield "                    </div>

                    <div class=\"form-group mt-3\">
                        <label for=\"tel\">Téléphone :</label>
                        <input type=\"text\" id=\"tel\" name=\"tel\" class=\"form-control\" placeholder=\"+216 99 999 999\" value=\"";
        // line 35
        yield (((array_key_exists("tel", $context) &&  !(null === $context["tel"]))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["tel"], "html", null, true)) : (""));
        yield "\" required>
                        ";
        // line 36
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "tel", [], "any", true, true, false, 36)) {
            // line 37
            yield "                            <div class=\"text-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 37, $this->source); })()), "tel", [], "any", false, false, false, 37), "html", null, true);
            yield "</div>
                        ";
        }
        // line 39
        yield "                    </div>

                    <div class=\"form-group mt-3\">
                        <label for=\"email\">Email :</label>
                        <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" placeholder=\"exemple@email.com\" value=\"";
        // line 43
        yield (((array_key_exists("email", $context) &&  !(null === $context["email"]))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["email"], "html", null, true)) : (""));
        yield "\" required>
                        ";
        // line 44
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "email", [], "any", true, true, false, 44)) {
            // line 45
            yield "                            <div class=\"text-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 45, $this->source); })()), "email", [], "any", false, false, false, 45), "html", null, true);
            yield "</div>
                        ";
        }
        // line 47
        yield "                    </div>

                    <div class=\"form-group mt-3\">
                        <label for=\"password\">Mot de passe :</label>
                        <input type=\"password\" id=\"password\" name=\"password\" class=\"form-control\" placeholder=\"********\" required>
                        ";
        // line 52
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", true, true, false, 52)) {
            // line 53
            yield "                            <div class=\"text-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 53, $this->source); })()), "password", [], "any", false, false, false, 53), "html", null, true);
            yield "</div>
                        ";
        }
        // line 55
        yield "                    </div>

                    <div class=\"form-group mt-3\">
                        <label for=\"confirm_password\">Confirmation du mot de passe :</label>
                        <input type=\"password\" id=\"confirm_password\" name=\"confirm_password\" class=\"form-control\" placeholder=\"Confirmer votre mot de passe\" required>
                        ";
        // line 60
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "confirm_password", [], "any", true, true, false, 60)) {
            // line 61
            yield "                            <div class=\"text-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 61, $this->source); })()), "confirm_password", [], "any", false, false, false, 61), "html", null, true);
            yield "</div>
                        ";
        }
        // line 63
        yield "                    </div>

                    <div class=\"form-group mt-3\">
                        <label for=\"domaine\">Domaine :</label>
                        <input type=\"text\" id=\"domaine\" name=\"domaine\" class=\"form-control\" placeholder=\"Votre domaine\" value=\"";
        // line 67
        yield (((array_key_exists("domaine", $context) &&  !(null === $context["domaine"]))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["domaine"], "html", null, true)) : (""));
        yield "\">
                        ";
        // line 68
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "domaine", [], "any", true, true, false, 68)) {
            // line 69
            yield "                            <div class=\"text-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 69, $this->source); })()), "domaine", [], "any", false, false, false, 69), "html", null, true);
            yield "</div>
                        ";
        }
        // line 71
        yield "                    </div>

                    <div class=\"form-group mt-3\">
                        <label for=\"sexe\">Sexe :</label>
                        <select id=\"sexe\" name=\"sexe\" class=\"form-control\">
                            ";
        // line 76
        $context["sexe"] = ((array_key_exists("sexe", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["sexe"]) || array_key_exists("sexe", $context) ? $context["sexe"] : (function () { throw new RuntimeError('Variable "sexe" does not exist.', 76, $this->source); })()), "")) : (""));
        // line 77
        yield "                            <option value=\"choisir un sexe\" ";
        if (((isset($context["sexe"]) || array_key_exists("sexe", $context) ? $context["sexe"] : (function () { throw new RuntimeError('Variable "sexe" does not exist.', 77, $this->source); })()) == "choisir un sexe")) {
            yield "selected";
        }
        yield ">Choisir un sexe</option>
                            <option value=\"femme\" ";
        // line 78
        if (((isset($context["sexe"]) || array_key_exists("sexe", $context) ? $context["sexe"] : (function () { throw new RuntimeError('Variable "sexe" does not exist.', 78, $this->source); })()) == "femme")) {
            yield "selected";
        }
        yield ">Femme</option>
                            <option value=\"homme\" ";
        // line 79
        if (((isset($context["sexe"]) || array_key_exists("sexe", $context) ? $context["sexe"] : (function () { throw new RuntimeError('Variable "sexe" does not exist.', 79, $this->source); })()) == "homme")) {
            yield "selected";
        }
        yield ">Homme</option>
                            <option value=\"autre\" ";
        // line 80
        if (((isset($context["sexe"]) || array_key_exists("sexe", $context) ? $context["sexe"] : (function () { throw new RuntimeError('Variable "sexe" does not exist.', 80, $this->source); })()) == "autre")) {
            yield "selected";
        }
        yield ">Autre</option>
                        </select>
                        ";
        // line 82
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "sexe", [], "any", true, true, false, 82)) {
            // line 83
            yield "                            <div class=\"text-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 83, $this->source); })()), "sexe", [], "any", false, false, false, 83), "html", null, true);
            yield "</div>
                        ";
        }
        // line 85
        yield "                    </div>

                    <div class=\"form-group mt-3\">
                        <label for=\"experience\">Années d'expérience :</label>
                        <input type=\"number\" id=\"experience\" name=\"experience\" class=\"form-control\" placeholder=\"Nombre d'années\" value=\"";
        // line 89
        yield (((array_key_exists("experience", $context) &&  !(null === $context["experience"]))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["experience"], "html", null, true)) : (""));
        yield "\">
                        ";
        // line 90
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "experience", [], "any", true, true, false, 90)) {
            // line 91
            yield "                            <div class=\"text-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 91, $this->source); })()), "experience", [], "any", false, false, false, 91), "html", null, true);
            yield "</div>
                        ";
        }
        // line 93
        yield "                    </div>

                    <div class=\"form-group mt-3\">
                        <label for=\"adresse\">Adresse :</label>
                        <input type=\"text\" id=\"adresse\" name=\"adresse\" class=\"form-control\" placeholder=\"Votre adresse\" value=\"";
        // line 97
        yield (((array_key_exists("adresse", $context) &&  !(null === $context["adresse"]))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["adresse"], "html", null, true)) : (""));
        yield "\" required>
                        ";
        // line 98
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "adresse", [], "any", true, true, false, 98)) {
            // line 99
            yield "                            <div class=\"text-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 99, $this->source); })()), "adresse", [], "any", false, false, false, 99), "html", null, true);
            yield "</div>
                        ";
        }
        // line 101
        yield "                    </div>

                    <div class=\"form-group mt-3\">
                        <label for=\"photo\">Photo :</label>
                        <input type=\"file\" id=\"photo\" name=\"photo\" accept=\"image/*\" class=\"form-control\">
                        ";
        // line 106
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "photo", [], "any", true, true, false, 106)) {
            // line 107
            yield "                            <div class=\"text-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 107, $this->source); })()), "photo", [], "any", false, false, false, 107), "html", null, true);
            yield "</div>
                        ";
        }
        // line 109
        yield "                    </div>

                    <div class=\"form-group mt-3\">
                        <label for=\"cv\">CV (PDF ou image) :</label>
                        <input type=\"file\" id=\"cv\" name=\"cv\" accept=\".pdf,image/*\" class=\"form-control\">
                        ";
        // line 114
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "cv", [], "any", true, true, false, 114)) {
            // line 115
            yield "                            <div class=\"text-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 115, $this->source); })()), "cv", [], "any", false, false, false, 115), "html", null, true);
            yield "</div>
                        ";
        }
        // line 117
        yield "                    </div>

                    <div class=\"form-group mt-4 text-center\">
                        <button type=\"submit\" class=\"btn btn-primary\">S'inscrire</button>
                    </div>

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
        return "security/freelancer.html.twig";
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
        return array (  363 => 117,  357 => 115,  355 => 114,  348 => 109,  342 => 107,  340 => 106,  333 => 101,  327 => 99,  325 => 98,  321 => 97,  315 => 93,  309 => 91,  307 => 90,  303 => 89,  297 => 85,  291 => 83,  289 => 82,  282 => 80,  276 => 79,  270 => 78,  263 => 77,  261 => 76,  254 => 71,  248 => 69,  246 => 68,  242 => 67,  236 => 63,  230 => 61,  228 => 60,  221 => 55,  215 => 53,  213 => 52,  206 => 47,  200 => 45,  198 => 44,  194 => 43,  188 => 39,  182 => 37,  180 => 36,  176 => 35,  170 => 31,  164 => 29,  162 => 28,  158 => 27,  152 => 23,  146 => 21,  144 => 20,  140 => 19,  133 => 15,  123 => 7,  110 => 6,  88 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Inscription Freelancer{% endblock %}
{% block navbar %}
{% endblock %}
{% block body %}
    <meta charset=\"UTF-8\">
    <title>Inscription Freelancer</title>

    <div class=\"container mt-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6\">
                <h1 class=\"text-center mb-4\">Inscription Freelancer</h1> 
                
                <form method=\"post\" action=\"{{ path('app_freelancer') }}\" enctype=\"multipart/form-data\">

                    <div class=\"form-group\">
                        <label for=\"nom\">Nom :</label>
                        <input type=\"text\" id=\"nom\" name=\"nom\" class=\"form-control\" placeholder=\"Votre nom\" value=\"{{ nom ?? '' }}\" required>
                        {% if errors.nom is defined %}
                            <div class=\"text-danger\">{{ errors.nom }}</div>
                        {% endif %}
                    </div>

                    <div class=\"form-group mt-3\">
                        <label for=\"prenom\">Prénom :</label>
                        <input type=\"text\" id=\"prenom\" name=\"prenom\" class=\"form-control\" placeholder=\"Votre prénom\" value=\"{{ prenom ?? '' }}\" required>
                        {% if errors.prenom is defined %}
                            <div class=\"text-danger\">{{ errors.prenom }}</div>
                        {% endif %}
                    </div>

                    <div class=\"form-group mt-3\">
                        <label for=\"tel\">Téléphone :</label>
                        <input type=\"text\" id=\"tel\" name=\"tel\" class=\"form-control\" placeholder=\"+216 99 999 999\" value=\"{{ tel ?? '' }}\" required>
                        {% if errors.tel is defined %}
                            <div class=\"text-danger\">{{ errors.tel }}</div>
                        {% endif %}
                    </div>

                    <div class=\"form-group mt-3\">
                        <label for=\"email\">Email :</label>
                        <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" placeholder=\"exemple@email.com\" value=\"{{ email ?? '' }}\" required>
                        {% if errors.email is defined %}
                            <div class=\"text-danger\">{{ errors.email }}</div>
                        {% endif %}
                    </div>

                    <div class=\"form-group mt-3\">
                        <label for=\"password\">Mot de passe :</label>
                        <input type=\"password\" id=\"password\" name=\"password\" class=\"form-control\" placeholder=\"********\" required>
                        {% if errors.password is defined %}
                            <div class=\"text-danger\">{{ errors.password }}</div>
                        {% endif %}
                    </div>

                    <div class=\"form-group mt-3\">
                        <label for=\"confirm_password\">Confirmation du mot de passe :</label>
                        <input type=\"password\" id=\"confirm_password\" name=\"confirm_password\" class=\"form-control\" placeholder=\"Confirmer votre mot de passe\" required>
                        {% if errors.confirm_password is defined %}
                            <div class=\"text-danger\">{{ errors.confirm_password }}</div>
                        {% endif %}
                    </div>

                    <div class=\"form-group mt-3\">
                        <label for=\"domaine\">Domaine :</label>
                        <input type=\"text\" id=\"domaine\" name=\"domaine\" class=\"form-control\" placeholder=\"Votre domaine\" value=\"{{ domaine ?? '' }}\">
                        {% if errors.domaine is defined %}
                            <div class=\"text-danger\">{{ errors.domaine }}</div>
                        {% endif %}
                    </div>

                    <div class=\"form-group mt-3\">
                        <label for=\"sexe\">Sexe :</label>
                        <select id=\"sexe\" name=\"sexe\" class=\"form-control\">
                            {% set sexe = sexe|default('') %}
                            <option value=\"choisir un sexe\" {% if sexe == 'choisir un sexe' %}selected{% endif %}>Choisir un sexe</option>
                            <option value=\"femme\" {% if sexe == 'femme' %}selected{% endif %}>Femme</option>
                            <option value=\"homme\" {% if sexe == 'homme' %}selected{% endif %}>Homme</option>
                            <option value=\"autre\" {% if sexe == 'autre' %}selected{% endif %}>Autre</option>
                        </select>
                        {% if errors.sexe is defined %}
                            <div class=\"text-danger\">{{ errors.sexe }}</div>
                        {% endif %}
                    </div>

                    <div class=\"form-group mt-3\">
                        <label for=\"experience\">Années d'expérience :</label>
                        <input type=\"number\" id=\"experience\" name=\"experience\" class=\"form-control\" placeholder=\"Nombre d'années\" value=\"{{ experience ?? '' }}\">
                        {% if errors.experience is defined %}
                            <div class=\"text-danger\">{{ errors.experience }}</div>
                        {% endif %}
                    </div>

                    <div class=\"form-group mt-3\">
                        <label for=\"adresse\">Adresse :</label>
                        <input type=\"text\" id=\"adresse\" name=\"adresse\" class=\"form-control\" placeholder=\"Votre adresse\" value=\"{{ adresse ?? '' }}\" required>
                        {% if errors.adresse is defined %}
                            <div class=\"text-danger\">{{ errors.adresse }}</div>
                        {% endif %}
                    </div>

                    <div class=\"form-group mt-3\">
                        <label for=\"photo\">Photo :</label>
                        <input type=\"file\" id=\"photo\" name=\"photo\" accept=\"image/*\" class=\"form-control\">
                        {% if errors.photo is defined %}
                            <div class=\"text-danger\">{{ errors.photo }}</div>
                        {% endif %}
                    </div>

                    <div class=\"form-group mt-3\">
                        <label for=\"cv\">CV (PDF ou image) :</label>
                        <input type=\"file\" id=\"cv\" name=\"cv\" accept=\".pdf,image/*\" class=\"form-control\">
                        {% if errors.cv is defined %}
                            <div class=\"text-danger\">{{ errors.cv }}</div>
                        {% endif %}
                    </div>

                    <div class=\"form-group mt-4 text-center\">
                        <button type=\"submit\" class=\"btn btn-primary\">S'inscrire</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
{% endblock %}
", "security/freelancer.html.twig", "C:\\careera\\templates\\security\\freelancer.html.twig");
    }
}
