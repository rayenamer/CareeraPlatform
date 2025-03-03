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

/* security/profilefreelancer.html.twig */
class __TwigTemplate_3d8a5ed0f997a2062c60695e6e8b7c79 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/profilefreelancer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/profilefreelancer.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/profilefreelancer.html.twig", 1);
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

        yield "Profil du Freelancer";
        
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
        yield "<div class=\"container mt-5\">
    <div class=\"card shadow-lg p-4\">
        <div class=\"row\">
            <div class=\"col-md-4 text-center\">
                ";
        // line 10
        if ((array_key_exists("tabprofile", $context) &&  !(null === (isset($context["tabprofile"]) || array_key_exists("tabprofile", $context) ? $context["tabprofile"] : (function () { throw new RuntimeError('Variable "tabprofile" does not exist.', 10, $this->source); })())))) {
            // line 11
            yield "                    <div class=\"mb-4\">
                        ";
            // line 12
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["tabprofile"]) || array_key_exists("tabprofile", $context) ? $context["tabprofile"] : (function () { throw new RuntimeError('Variable "tabprofile" does not exist.', 12, $this->source); })()), "photo", [], "any", false, false, false, 12)) {
                // line 13
                yield "                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["tabprofile"]) || array_key_exists("tabprofile", $context) ? $context["tabprofile"] : (function () { throw new RuntimeError('Variable "tabprofile" does not exist.', 13, $this->source); })()), "photo", [], "any", false, false, false, 13))), "html", null, true);
                yield "\" class=\"rounded-circle img-fluid\" alt=\"Photo de ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tabprofile"]) || array_key_exists("tabprofile", $context) ? $context["tabprofile"] : (function () { throw new RuntimeError('Variable "tabprofile" does not exist.', 13, $this->source); })()), "nom", [], "any", false, false, false, 13), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tabprofile"]) || array_key_exists("tabprofile", $context) ? $context["tabprofile"] : (function () { throw new RuntimeError('Variable "tabprofile" does not exist.', 13, $this->source); })()), "prenom", [], "any", false, false, false, 13), "html", null, true);
                yield "\" style=\"width: 200px; height: 200px; object-fit: cover;\">
                        ";
            } else {
                // line 15
                yield "                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/default.png"), "html", null, true);
                yield "\" class=\"rounded-circle img-fluid\" alt=\"Image par défaut\" style=\"width: 200px; height: 200px; object-fit: cover;\">
                        ";
            }
            // line 17
            yield "                    </div>
                ";
        }
        // line 19
        yield "            </div>

            <div class=\"col-md-8\">
                ";
        // line 22
        if ((array_key_exists("tabprofile", $context) &&  !(null === (isset($context["tabprofile"]) || array_key_exists("tabprofile", $context) ? $context["tabprofile"] : (function () { throw new RuntimeError('Variable "tabprofile" does not exist.', 22, $this->source); })())))) {
            // line 23
            yield "                    <h2 class=\"text-primary\">
                        ";
            // line 24
            yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["tabprofile"] ?? null), "nom", [], "any", true, true, false, 24)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tabprofile"]) || array_key_exists("tabprofile", $context) ? $context["tabprofile"] : (function () { throw new RuntimeError('Variable "tabprofile" does not exist.', 24, $this->source); })()), "nom", [], "any", false, false, false, 24), "html", null, true)) : ("Nom indisponible"));
            yield "
                        ";
            // line 25
            yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["tabprofile"] ?? null), "prenom", [], "any", true, true, false, 25)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tabprofile"]) || array_key_exists("tabprofile", $context) ? $context["tabprofile"] : (function () { throw new RuntimeError('Variable "tabprofile" does not exist.', 25, $this->source); })()), "prenom", [], "any", false, false, false, 25), "html", null, true)) : ("Prénom indisponible"));
            yield "
                    </h2>
                    <p><strong>Email :</strong> ";
            // line 27
            yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["tabprofile"] ?? null), "email", [], "any", true, true, false, 27)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tabprofile"]) || array_key_exists("tabprofile", $context) ? $context["tabprofile"] : (function () { throw new RuntimeError('Variable "tabprofile" does not exist.', 27, $this->source); })()), "email", [], "any", false, false, false, 27), "html", null, true)) : ("Email indisponible"));
            yield "</p>
                    <p><strong>Téléphone :</strong> ";
            // line 28
            yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["tabprofile"] ?? null), "tel", [], "any", true, true, false, 28)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tabprofile"]) || array_key_exists("tabprofile", $context) ? $context["tabprofile"] : (function () { throw new RuntimeError('Variable "tabprofile" does not exist.', 28, $this->source); })()), "tel", [], "any", false, false, false, 28), "html", null, true)) : ("Téléphone indisponible"));
            yield "</p>
                    <p><strong>Adresse :</strong> ";
            // line 29
            yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["tabprofile"] ?? null), "adresse", [], "any", true, true, false, 29)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tabprofile"]) || array_key_exists("tabprofile", $context) ? $context["tabprofile"] : (function () { throw new RuntimeError('Variable "tabprofile" does not exist.', 29, $this->source); })()), "adresse", [], "any", false, false, false, 29), "html", null, true)) : ("Adresse indisponible"));
            yield "</p>
                    <p><strong>Domaine :</strong> ";
            // line 30
            yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["tabprofile"] ?? null), "domaine", [], "any", true, true, false, 30)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tabprofile"]) || array_key_exists("tabprofile", $context) ? $context["tabprofile"] : (function () { throw new RuntimeError('Variable "tabprofile" does not exist.', 30, $this->source); })()), "domaine", [], "any", false, false, false, 30), "html", null, true)) : ("Domaine indisponible"));
            yield "</p>
                    <p><strong>Sexe :</strong> ";
            // line 31
            yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["tabprofile"] ?? null), "sexe", [], "any", true, true, false, 31)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tabprofile"]) || array_key_exists("tabprofile", $context) ? $context["tabprofile"] : (function () { throw new RuntimeError('Variable "tabprofile" does not exist.', 31, $this->source); })()), "sexe", [], "any", false, false, false, 31), "html", null, true)) : ("Sexe indisponible"));
            yield "</p>

                    ";
            // line 33
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["tabprofile"] ?? null), "cv", [], "any", true, true, false, 33) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["tabprofile"]) || array_key_exists("tabprofile", $context) ? $context["tabprofile"] : (function () { throw new RuntimeError('Variable "tabprofile" does not exist.', 33, $this->source); })()), "cv", [], "any", false, false, false, 33)))) {
                // line 34
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/cv/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["tabprofile"]) || array_key_exists("tabprofile", $context) ? $context["tabprofile"] : (function () { throw new RuntimeError('Variable "tabprofile" does not exist.', 34, $this->source); })()), "cv", [], "any", false, false, false, 34))), "html", null, true);
                yield "\" class=\"btn btn-outline-primary mt-3\" download>
                            Télécharger CV
                        </a>
                    ";
            } else {
                // line 38
                yield "                        <p>CV non disponible</p>
                    ";
            }
            // line 40
            yield "
                    <!-- Bouton Modifier -->
                    <a href=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_updatefreelancer", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["tabprofile"]) || array_key_exists("tabprofile", $context) ? $context["tabprofile"] : (function () { throw new RuntimeError('Variable "tabprofile" does not exist.', 42, $this->source); })()), "id", [], "any", false, false, false, 42)]), "html", null, true);
            yield "\" class=\"btn btn-success mt-3\">
                        Modifier
                    </a>

                    <!-- Bouton Supprimer -->
                    <a href=\"";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deletefreelancer", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["tabprofile"]) || array_key_exists("tabprofile", $context) ? $context["tabprofile"] : (function () { throw new RuntimeError('Variable "tabprofile" does not exist.', 47, $this->source); })()), "id", [], "any", false, false, false, 47)]), "html", null, true);
            yield "\" class=\"btn btn-danger mt-3\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer ce profil ?')\">
                        Supprimer
                    </a>
                ";
        } else {
            // line 51
            yield "                    <p>Aucun profil trouvé.</p>
                ";
        }
        // line 53
        yield "            </div>
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
        return "security/profilefreelancer.html.twig";
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
        return array (  210 => 53,  206 => 51,  199 => 47,  191 => 42,  187 => 40,  183 => 38,  175 => 34,  173 => 33,  168 => 31,  164 => 30,  160 => 29,  156 => 28,  152 => 27,  147 => 25,  143 => 24,  140 => 23,  138 => 22,  133 => 19,  129 => 17,  123 => 15,  113 => 13,  111 => 12,  108 => 11,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Profil du Freelancer{% endblock %}

{% block body %}
<div class=\"container mt-5\">
    <div class=\"card shadow-lg p-4\">
        <div class=\"row\">
            <div class=\"col-md-4 text-center\">
                {% if tabprofile is defined and tabprofile is not null %}
                    <div class=\"mb-4\">
                        {% if tabprofile.photo %}
                            <img src=\"{{ asset('uploads/images/' ~ tabprofile.photo) }}\" class=\"rounded-circle img-fluid\" alt=\"Photo de {{ tabprofile.nom }} {{ tabprofile.prenom }}\" style=\"width: 200px; height: 200px; object-fit: cover;\">
                        {% else %}
                            <img src=\"{{ asset('uploads/default.png') }}\" class=\"rounded-circle img-fluid\" alt=\"Image par défaut\" style=\"width: 200px; height: 200px; object-fit: cover;\">
                        {% endif %}
                    </div>
                {% endif %}
            </div>

            <div class=\"col-md-8\">
                {% if tabprofile is defined and tabprofile is not null %}
                    <h2 class=\"text-primary\">
                        {{ tabprofile.nom is defined ? tabprofile.nom : 'Nom indisponible' }}
                        {{ tabprofile.prenom is defined ? tabprofile.prenom : 'Prénom indisponible' }}
                    </h2>
                    <p><strong>Email :</strong> {{ tabprofile.email is defined ? tabprofile.email : 'Email indisponible' }}</p>
                    <p><strong>Téléphone :</strong> {{ tabprofile.tel is defined ? tabprofile.tel : 'Téléphone indisponible' }}</p>
                    <p><strong>Adresse :</strong> {{ tabprofile.adresse is defined ? tabprofile.adresse : 'Adresse indisponible' }}</p>
                    <p><strong>Domaine :</strong> {{ tabprofile.domaine is defined ? tabprofile.domaine : 'Domaine indisponible' }}</p>
                    <p><strong>Sexe :</strong> {{ tabprofile.sexe is defined ? tabprofile.sexe : 'Sexe indisponible' }}</p>

                    {% if tabprofile.cv is defined and tabprofile.cv is not null %}
                        <a href=\"{{ asset('uploads/cv/' ~ tabprofile.cv) }}\" class=\"btn btn-outline-primary mt-3\" download>
                            Télécharger CV
                        </a>
                    {% else %}
                        <p>CV non disponible</p>
                    {% endif %}

                    <!-- Bouton Modifier -->
                    <a href=\"{{ path('app_updatefreelancer', {'id': tabprofile.id}) }}\" class=\"btn btn-success mt-3\">
                        Modifier
                    </a>

                    <!-- Bouton Supprimer -->
                    <a href=\"{{ path('app_deletefreelancer', {'id': tabprofile.id}) }}\" class=\"btn btn-danger mt-3\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer ce profil ?')\">
                        Supprimer
                    </a>
                {% else %}
                    <p>Aucun profil trouvé.</p>
                {% endif %}
            </div>
        </div>
    </div>
</div>
{% endblock %}", "security/profilefreelancer.html.twig", "C:\\careera\\templates\\security\\profilefreelancer.html.twig");
    }
}
