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

/* chercheur/profile.html.twig */
class __TwigTemplate_1ea1ef8352bb1735e13a02689356df16 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chercheur/profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chercheur/profile.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "chercheur/profile.html.twig", 1);
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

        yield "Profil du Chercheur";
        
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
                <div class=\"col-md-4 text-center\">
                    ";
        // line 11
        if (((isset($context["tabprofile"]) || array_key_exists("tabprofile", $context) ? $context["tabprofile"] : (function () { throw new RuntimeError('Variable "tabprofile" does not exist.', 11, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["tabprofile"]) || array_key_exists("tabprofile", $context) ? $context["tabprofile"] : (function () { throw new RuntimeError('Variable "tabprofile" does not exist.', 11, $this->source); })()), "photo", [], "any", false, false, false, 11))) {
            // line 12
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["tabprofile"]) || array_key_exists("tabprofile", $context) ? $context["tabprofile"] : (function () { throw new RuntimeError('Variable "tabprofile" does not exist.', 12, $this->source); })()), "photo", [], "any", false, false, false, 12))), "html", null, true);
            yield "\" 
                            class=\"rounded-circle img-fluid\" 
                            alt=\"Photo de ";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tabprofile"]) || array_key_exists("tabprofile", $context) ? $context["tabprofile"] : (function () { throw new RuntimeError('Variable "tabprofile" does not exist.', 14, $this->source); })()), "nom", [], "any", false, false, false, 14), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tabprofile"]) || array_key_exists("tabprofile", $context) ? $context["tabprofile"] : (function () { throw new RuntimeError('Variable "tabprofile" does not exist.', 14, $this->source); })()), "prenom", [], "any", false, false, false, 14), "html", null, true);
            yield "\" 
                            style=\"width: 200px; height: 200px; object-fit: cover;\">
                    ";
        } else {
            // line 17
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/default.png"), "html", null, true);
            yield "\" 
                            class=\"rounded-circle img-fluid\" 
                            alt=\"Image par défaut\" 
                            style=\"width: 200px; height: 200px; object-fit: cover;\">
                    ";
        }
        // line 22
        yield "                </div>
            </div>

            <div class=\"col-md-8\">
                <h2 class=\"text-primary\">
                    ";
        // line 27
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["tabprofile"] ?? null), "nom", [], "any", true, true, false, 27)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tabprofile"]) || array_key_exists("tabprofile", $context) ? $context["tabprofile"] : (function () { throw new RuntimeError('Variable "tabprofile" does not exist.', 27, $this->source); })()), "nom", [], "any", false, false, false, 27), "html", null, true)) : ("Nom indisponible"));
        yield "
                    ";
        // line 28
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["tabprofile"] ?? null), "prenom", [], "any", true, true, false, 28)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tabprofile"]) || array_key_exists("tabprofile", $context) ? $context["tabprofile"] : (function () { throw new RuntimeError('Variable "tabprofile" does not exist.', 28, $this->source); })()), "prenom", [], "any", false, false, false, 28), "html", null, true)) : ("Prénom indisponible"));
        yield "
                </h2>

                ";
        // line 31
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["tabprofile"]) || array_key_exists("tabprofile", $context) ? $context["tabprofile"] : (function () { throw new RuntimeError('Variable "tabprofile" does not exist.', 31, $this->source); })()))) {
            // line 32
            yield "                    <p><strong>Email :</strong> ";
            yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["tabprofile"] ?? null), "email", [], "any", true, true, false, 32)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tabprofile"]) || array_key_exists("tabprofile", $context) ? $context["tabprofile"] : (function () { throw new RuntimeError('Variable "tabprofile" does not exist.', 32, $this->source); })()), "email", [], "any", false, false, false, 32), "html", null, true)) : ("Email indisponible"));
            yield "</p>
                    <p><strong>Téléphone :</strong> ";
            // line 33
            yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["tabprofile"] ?? null), "tel", [], "any", true, true, false, 33)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tabprofile"]) || array_key_exists("tabprofile", $context) ? $context["tabprofile"] : (function () { throw new RuntimeError('Variable "tabprofile" does not exist.', 33, $this->source); })()), "tel", [], "any", false, false, false, 33), "html", null, true)) : ("Téléphone indisponible"));
            yield "</p>
                    <p><strong>Adresse :</strong> ";
            // line 34
            yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["tabprofile"] ?? null), "Adresse", [], "any", true, true, false, 34)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tabprofile"]) || array_key_exists("tabprofile", $context) ? $context["tabprofile"] : (function () { throw new RuntimeError('Variable "tabprofile" does not exist.', 34, $this->source); })()), "Adresse", [], "any", false, false, false, 34), "html", null, true)) : ("Adresse indisponible"));
            yield "</p>
                    <p><strong>Domaine :</strong> ";
            // line 35
            yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["tabprofile"] ?? null), "domaine", [], "any", true, true, false, 35)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tabprofile"]) || array_key_exists("tabprofile", $context) ? $context["tabprofile"] : (function () { throw new RuntimeError('Variable "tabprofile" does not exist.', 35, $this->source); })()), "domaine", [], "any", false, false, false, 35), "html", null, true)) : ("Domaine indisponible"));
            yield "</p>
                    <p><strong>Date de naissance :</strong> ";
            // line 36
            yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["tabprofile"] ?? null), "datedenaiss", [], "any", true, true, false, 36)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tabprofile"]) || array_key_exists("tabprofile", $context) ? $context["tabprofile"] : (function () { throw new RuntimeError('Variable "tabprofile" does not exist.', 36, $this->source); })()), "datedenaiss", [], "any", false, false, false, 36), "d/m/Y"), "html", null, true)) : ("Date de naissance indisponible"));
            yield "</p>
                    <p><strong>Sexe :</strong> ";
            // line 37
            yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["tabprofile"] ?? null), "sexe", [], "any", true, true, false, 37)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tabprofile"]) || array_key_exists("tabprofile", $context) ? $context["tabprofile"] : (function () { throw new RuntimeError('Variable "tabprofile" does not exist.', 37, $this->source); })()), "sexe", [], "any", false, false, false, 37), "html", null, true)) : ("Sexe indisponible"));
            yield "</p>

                    ";
            // line 39
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["tabprofile"]) || array_key_exists("tabprofile", $context) ? $context["tabprofile"] : (function () { throw new RuntimeError('Variable "tabprofile" does not exist.', 39, $this->source); })()), "cv", [], "any", false, false, false, 39)) {
                // line 40
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/cv/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["tabprofile"]) || array_key_exists("tabprofile", $context) ? $context["tabprofile"] : (function () { throw new RuntimeError('Variable "tabprofile" does not exist.', 40, $this->source); })()), "cv", [], "any", false, false, false, 40))), "html", null, true);
                yield "\" class=\"btn btn-outline-primary mt-3\" download>
                            Télécharger CV
                        </a>
                    ";
            }
            // line 44
            yield "                ";
        } else {
            // line 45
            yield "                    <p>Aucun profil trouvé.</p>
                ";
        }
        // line 47
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
        return "chercheur/profile.html.twig";
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
        return array (  194 => 47,  190 => 45,  187 => 44,  179 => 40,  177 => 39,  172 => 37,  168 => 36,  164 => 35,  160 => 34,  156 => 33,  151 => 32,  149 => 31,  143 => 28,  139 => 27,  132 => 22,  123 => 17,  115 => 14,  109 => 12,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Profil du Chercheur{% endblock %}

{% block body %}
<div class=\"container mt-5\">
    <div class=\"card shadow-lg p-4\">
        <div class=\"row\">
            <div class=\"col-md-4 text-center\">
                <div class=\"col-md-4 text-center\">
                    {% if tabprofile and tabprofile.photo %}
                        <img src=\"{{ asset('uploads/images/' ~ tabprofile.photo) }}\" 
                            class=\"rounded-circle img-fluid\" 
                            alt=\"Photo de {{ tabprofile.nom }} {{ tabprofile.prenom }}\" 
                            style=\"width: 200px; height: 200px; object-fit: cover;\">
                    {% else %}
                        <img src=\"{{ asset('uploads/default.png') }}\" 
                            class=\"rounded-circle img-fluid\" 
                            alt=\"Image par défaut\" 
                            style=\"width: 200px; height: 200px; object-fit: cover;\">
                    {% endif %}
                </div>
            </div>

            <div class=\"col-md-8\">
                <h2 class=\"text-primary\">
                    {{ tabprofile.nom is defined ? tabprofile.nom : 'Nom indisponible' }}
                    {{ tabprofile.prenom is defined ? tabprofile.prenom : 'Prénom indisponible' }}
                </h2>

                {% if tabprofile is not empty %}
                    <p><strong>Email :</strong> {{ tabprofile.email is defined ? tabprofile.email : 'Email indisponible' }}</p>
                    <p><strong>Téléphone :</strong> {{ tabprofile.tel is defined ? tabprofile.tel : 'Téléphone indisponible' }}</p>
                    <p><strong>Adresse :</strong> {{ tabprofile.Adresse is defined ? tabprofile.Adresse : 'Adresse indisponible' }}</p>
                    <p><strong>Domaine :</strong> {{ tabprofile.domaine is defined ? tabprofile.domaine : 'Domaine indisponible' }}</p>
                    <p><strong>Date de naissance :</strong> {{ tabprofile.datedenaiss is defined ? tabprofile.datedenaiss|date('d/m/Y') : 'Date de naissance indisponible' }}</p>
                    <p><strong>Sexe :</strong> {{ tabprofile.sexe is defined ? tabprofile.sexe : 'Sexe indisponible' }}</p>

                    {% if tabprofile.cv %}
                        <a href=\"{{ asset('uploads/cv/' ~ tabprofile.cv) }}\" class=\"btn btn-outline-primary mt-3\" download>
                            Télécharger CV
                        </a>
                    {% endif %}
                {% else %}
                    <p>Aucun profil trouvé.</p>
                {% endif %}
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "chercheur/profile.html.twig", "C:\\Users\\choub\\Desktop\\CareeraPlatform - Copie\\templates\\chercheur\\profile.html.twig");
    }
}
