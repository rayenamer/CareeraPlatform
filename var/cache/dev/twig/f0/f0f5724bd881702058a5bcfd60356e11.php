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
class __TwigTemplate_523abb832d9d58b075179026634e0448 extends Template
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
        yield "    <meta charset=\"UTF-8\">
    <title>Inscription Freelancer</title>

    <div class=\"container mt-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6\">
                <h1 class=\"text-center mb-4\">Inscription Freelancer</h1> 
                
                <form method=\"post\" action=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_freelancer");
        yield "\" enctype=\"multipart/form-data\">

                    <div class=\"form-group\">
                        <label for=\"nom\">Nom :</label>
                        <input type=\"text\" id=\"nom\" name=\"nom\" class=\"form-control\" placeholder=\"Votre nom\" value=\"";
        // line 18
        yield (((array_key_exists("nom", $context) &&  !(null === $context["nom"]))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["nom"], "html", null, true)) : (""));
        yield "\" required>
                        ";
        // line 19
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "nom", [], "any", true, true, false, 19)) {
            // line 20
            yield "                            <div class=\"text-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 20, $this->source); })()), "nom", [], "any", false, false, false, 20), "html", null, true);
            yield "</div>
                        ";
        }
        // line 22
        yield "                    </div>

                    <div class=\"form-group mt-3\">
                        <label for=\"prenom\">Prénom :</label>
                        <input type=\"text\" id=\"prenom\" name=\"prenom\" class=\"form-control\" placeholder=\"Votre prénom\" value=\"";
        // line 26
        yield (((array_key_exists("prenom", $context) &&  !(null === $context["prenom"]))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["prenom"], "html", null, true)) : (""));
        yield "\" required>
                        ";
        // line 27
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "prenom", [], "any", true, true, false, 27)) {
            // line 28
            yield "                            <div class=\"text-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 28, $this->source); })()), "prenom", [], "any", false, false, false, 28), "html", null, true);
            yield "</div>
                        ";
        }
        // line 30
        yield "                    </div>

                    <div class=\"form-group mt-3\">
                        <label for=\"tel\">Téléphone :</label>
                        <input type=\"text\" id=\"tel\" name=\"tel\" class=\"form-control\" placeholder=\"+216 99 999 999\" value=\"";
        // line 34
        yield (((array_key_exists("tel", $context) &&  !(null === $context["tel"]))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["tel"], "html", null, true)) : (""));
        yield "\" required>
                        ";
        // line 35
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "tel", [], "any", true, true, false, 35)) {
            // line 36
            yield "                            <div class=\"text-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 36, $this->source); })()), "tel", [], "any", false, false, false, 36), "html", null, true);
            yield "</div>
                        ";
        }
        // line 38
        yield "                    </div>

                    <div class=\"form-group mt-3\">
                        <label for=\"email\">Email :</label>
                        <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" placeholder=\"exemple@email.com\" value=\"";
        // line 42
        yield (((array_key_exists("email", $context) &&  !(null === $context["email"]))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["email"], "html", null, true)) : (""));
        yield "\" required>
                        ";
        // line 43
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "email", [], "any", true, true, false, 43)) {
            // line 44
            yield "                            <div class=\"text-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 44, $this->source); })()), "email", [], "any", false, false, false, 44), "html", null, true);
            yield "</div>
                        ";
        }
        // line 46
        yield "                    </div>

                    <div class=\"form-group mt-3\">
                        <label for=\"password\">Mot de passe :</label>
                        <input type=\"password\" id=\"password\" name=\"password\" class=\"form-control\" placeholder=\"********\" required>
                        ";
        // line 51
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", true, true, false, 51)) {
            // line 52
            yield "                            <div class=\"text-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 52, $this->source); })()), "password", [], "any", false, false, false, 52), "html", null, true);
            yield "</div>
                        ";
        }
        // line 54
        yield "                    </div>

                    <div class=\"form-group mt-3\">
                        <label for=\"confirm_password\">Confirmation du mot de passe :</label>
                        <input type=\"password\" id=\"confirm_password\" name=\"confirm_password\" class=\"form-control\" placeholder=\"Confirmer votre mot de passe\" required>
                        ";
        // line 59
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "confirm_password", [], "any", true, true, false, 59)) {
            // line 60
            yield "                            <div class=\"text-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 60, $this->source); })()), "confirm_password", [], "any", false, false, false, 60), "html", null, true);
            yield "</div>
                        ";
        }
        // line 62
        yield "                    </div>

                    <div class=\"form-group mt-3\">
                        <label for=\"domaine\">Domaine :</label>
                        <input type=\"text\" id=\"domaine\" name=\"domaine\" class=\"form-control\" placeholder=\"Votre domaine\" value=\"";
        // line 66
        yield (((array_key_exists("domaine", $context) &&  !(null === $context["domaine"]))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["domaine"], "html", null, true)) : (""));
        yield "\">
                        ";
        // line 67
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "domaine", [], "any", true, true, false, 67)) {
            // line 68
            yield "                            <div class=\"text-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 68, $this->source); })()), "domaine", [], "any", false, false, false, 68), "html", null, true);
            yield "</div>
                        ";
        }
        // line 70
        yield "                    </div>

                    <div class=\"form-group mt-3\">
                        <label for=\"sexe\">Sexe :</label>
                        <select id=\"sexe\" name=\"sexe\" class=\"form-control\">
                            ";
        // line 75
        $context["sexe"] = ((array_key_exists("sexe", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["sexe"]) || array_key_exists("sexe", $context) ? $context["sexe"] : (function () { throw new RuntimeError('Variable "sexe" does not exist.', 75, $this->source); })()), "")) : (""));
        // line 76
        yield "                            <option value=\"choisir un sexe\" ";
        if (((isset($context["sexe"]) || array_key_exists("sexe", $context) ? $context["sexe"] : (function () { throw new RuntimeError('Variable "sexe" does not exist.', 76, $this->source); })()) == "choisir un sexe")) {
            yield "selected";
        }
        yield ">Choisir un sexe</option>
                            <option value=\"femme\" ";
        // line 77
        if (((isset($context["sexe"]) || array_key_exists("sexe", $context) ? $context["sexe"] : (function () { throw new RuntimeError('Variable "sexe" does not exist.', 77, $this->source); })()) == "femme")) {
            yield "selected";
        }
        yield ">Femme</option>
                            <option value=\"homme\" ";
        // line 78
        if (((isset($context["sexe"]) || array_key_exists("sexe", $context) ? $context["sexe"] : (function () { throw new RuntimeError('Variable "sexe" does not exist.', 78, $this->source); })()) == "homme")) {
            yield "selected";
        }
        yield ">Homme</option>
                            <option value=\"autre\" ";
        // line 79
        if (((isset($context["sexe"]) || array_key_exists("sexe", $context) ? $context["sexe"] : (function () { throw new RuntimeError('Variable "sexe" does not exist.', 79, $this->source); })()) == "autre")) {
            yield "selected";
        }
        yield ">Autre</option>
                        </select>
                        ";
        // line 81
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "sexe", [], "any", true, true, false, 81)) {
            // line 82
            yield "                            <div class=\"text-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 82, $this->source); })()), "sexe", [], "any", false, false, false, 82), "html", null, true);
            yield "</div>
                        ";
        }
        // line 84
        yield "                    </div>

                    <div class=\"form-group mt-3\">
                        <label for=\"experience\">Années d'expérience :</label>
                        <input type=\"number\" id=\"experience\" name=\"experience\" class=\"form-control\" placeholder=\"Nombre d'années\" value=\"";
        // line 88
        yield (((array_key_exists("experience", $context) &&  !(null === $context["experience"]))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["experience"], "html", null, true)) : (""));
        yield "\">
                        ";
        // line 89
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "experience", [], "any", true, true, false, 89)) {
            // line 90
            yield "                            <div class=\"text-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 90, $this->source); })()), "experience", [], "any", false, false, false, 90), "html", null, true);
            yield "</div>
                        ";
        }
        // line 92
        yield "                    </div>

                    <div class=\"form-group mt-3\">
                        <label for=\"adresse\">Adresse :</label>
                        <input type=\"text\" id=\"adresse\" name=\"adresse\" class=\"form-control\" placeholder=\"Votre adresse\" value=\"";
        // line 96
        yield (((array_key_exists("adresse", $context) &&  !(null === $context["adresse"]))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["adresse"], "html", null, true)) : (""));
        yield "\" required>
                        ";
        // line 97
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "adresse", [], "any", true, true, false, 97)) {
            // line 98
            yield "                            <div class=\"text-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 98, $this->source); })()), "adresse", [], "any", false, false, false, 98), "html", null, true);
            yield "</div>
                        ";
        }
        // line 100
        yield "                    </div>

                    <div class=\"form-group mt-3\">
                        <label for=\"photo\">Photo :</label>
                        <input type=\"file\" id=\"photo\" name=\"photo\" accept=\"image/*\" class=\"form-control\">
                        ";
        // line 105
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "photo", [], "any", true, true, false, 105)) {
            // line 106
            yield "                            <div class=\"text-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 106, $this->source); })()), "photo", [], "any", false, false, false, 106), "html", null, true);
            yield "</div>
                        ";
        }
        // line 108
        yield "                    </div>

                    <div class=\"form-group mt-3\">
                        <label for=\"cv\">CV (PDF ou image) :</label>
                        <input type=\"file\" id=\"cv\" name=\"cv\" accept=\".pdf,image/*\" class=\"form-control\">
                        ";
        // line 113
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "cv", [], "any", true, true, false, 113)) {
            // line 114
            yield "                            <div class=\"text-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 114, $this->source); })()), "cv", [], "any", false, false, false, 114), "html", null, true);
            yield "</div>
                        ";
        }
        // line 116
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
        return array (  340 => 116,  334 => 114,  332 => 113,  325 => 108,  319 => 106,  317 => 105,  310 => 100,  304 => 98,  302 => 97,  298 => 96,  292 => 92,  286 => 90,  284 => 89,  280 => 88,  274 => 84,  268 => 82,  266 => 81,  259 => 79,  253 => 78,  247 => 77,  240 => 76,  238 => 75,  231 => 70,  225 => 68,  223 => 67,  219 => 66,  213 => 62,  207 => 60,  205 => 59,  198 => 54,  192 => 52,  190 => 51,  183 => 46,  177 => 44,  175 => 43,  171 => 42,  165 => 38,  159 => 36,  157 => 35,  153 => 34,  147 => 30,  141 => 28,  139 => 27,  135 => 26,  129 => 22,  123 => 20,  121 => 19,  117 => 18,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Inscription Freelancer{% endblock %}

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
