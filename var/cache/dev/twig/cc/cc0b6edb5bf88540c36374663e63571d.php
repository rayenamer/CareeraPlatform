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

/* security/profilechercheur.html.twig */
class __TwigTemplate_5802484a79717557480420e0c677c2db extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/profilechercheur.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/profilechercheur.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/profilechercheur.html.twig", 1);
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

        yield "Profil du moderateur ";
        
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
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tabprofile"]) || array_key_exists("tabprofile", $context) ? $context["tabprofile"] : (function () { throw new RuntimeError('Variable "tabprofile" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["profile"]) {
            // line 11
            yield "                    <div class=\"mb-4\">
                        ";
            // line 12
            if (CoreExtension::getAttribute($this->env, $this->source, $context["profile"], "photo", [], "any", false, false, false, 12)) {
                // line 13
                yield "                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["profile"], "photo", [], "any", false, false, false, 13))), "html", null, true);
                yield "\" class=\"rounded-circle img-fluid\" alt=\"Photo de ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["profile"], "nom", [], "any", false, false, false, 13), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["profile"], "prenom", [], "any", false, false, false, 13), "html", null, true);
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
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['profile'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        yield "            </div>

            <div class=\"col-md-8\">
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tabprofile"]) || array_key_exists("tabprofile", $context) ? $context["tabprofile"] : (function () { throw new RuntimeError('Variable "tabprofile" does not exist.', 22, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["profile"]) {
            // line 23
            yield "                    <h2 class=\"text-primary\">
                        ";
            // line 24
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["profile"], "nom", [], "any", true, true, false, 24)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["profile"], "nom", [], "any", false, false, false, 24), "html", null, true)) : ("Nom indisponible"));
            yield "
                        ";
            // line 25
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["profile"], "prenom", [], "any", true, true, false, 25)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["profile"], "prenom", [], "any", false, false, false, 25), "html", null, true)) : ("Prénom indisponible"));
            yield "
                    </h2>
                    <p><strong>Email :</strong> ";
            // line 27
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["profile"], "email", [], "any", true, true, false, 27)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["profile"], "email", [], "any", false, false, false, 27), "html", null, true)) : ("Email indisponible"));
            yield "</p>
                    <p><strong>Téléphone :</strong> ";
            // line 28
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["profile"], "tel", [], "any", true, true, false, 28)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["profile"], "tel", [], "any", false, false, false, 28), "html", null, true)) : ("Téléphone indisponible"));
            yield "</p>
                    <p><strong>Adresse :</strong> ";
            // line 29
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["profile"], "adresse", [], "any", true, true, false, 29)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["profile"], "adresse", [], "any", false, false, false, 29), "html", null, true)) : ("Adresse indisponible"));
            yield "</p>
                    <p><strong>Domaine :</strong> ";
            // line 30
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["profile"], "domaine", [], "any", true, true, false, 30)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["profile"], "domaine", [], "any", false, false, false, 30), "html", null, true)) : ("Domaine indisponible"));
            yield "</p>
                    <p><strong>Sexe :</strong> ";
            // line 31
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["profile"], "sexe", [], "any", true, true, false, 31)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["profile"], "sexe", [], "any", false, false, false, 31), "html", null, true)) : ("Sexe indisponible"));
            yield "</p>

                    ";
            // line 33
            if (CoreExtension::getAttribute($this->env, $this->source, $context["profile"], "cv", [], "any", true, true, false, 33)) {
                // line 34
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/cv/" . CoreExtension::getAttribute($this->env, $this->source, $context["profile"], "cv", [], "any", false, false, false, 34))), "html", null, true);
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_updatechercheur", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["profile"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            yield "\" class=\"btn btn-success mt-3\">
                        Modifier
                    </a>

                    <!-- Bouton Supprimer -->
                    <a href=\"";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deletechercheur", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["profile"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            yield "\" class=\"btn btn-danger mt-3\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer ce profil ?')\">
                        Supprimer
                    </a>
                ";
            $context['_iterated'] = true;
        }
        // line 52
        if (!$context['_iterated']) {
            // line 51
            yield "                    <p>Aucun profil trouvé.</p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['profile'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
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
        return "security/profilechercheur.html.twig";
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
        return array (  224 => 53,  217 => 51,  215 => 52,  207 => 47,  199 => 42,  195 => 40,  191 => 38,  183 => 34,  181 => 33,  176 => 31,  172 => 30,  168 => 29,  164 => 28,  160 => 27,  155 => 25,  151 => 24,  148 => 23,  143 => 22,  138 => 19,  131 => 17,  125 => 15,  115 => 13,  113 => 12,  110 => 11,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Profil du moderateur {% endblock %}

{% block body %}
<div class=\"container mt-5\">
    <div class=\"card shadow-lg p-4\">
        <div class=\"row\">
            <div class=\"col-md-4 text-center\">
                {% for profile in tabprofile %}
                    <div class=\"mb-4\">
                        {% if profile.photo %}
                            <img src=\"{{ asset('uploads/images/' ~ profile.photo) }}\" class=\"rounded-circle img-fluid\" alt=\"Photo de {{ profile.nom }} {{ profile.prenom }}\" style=\"width: 200px; height: 200px; object-fit: cover;\">
                        {% else %}
                            <img src=\"{{ asset('uploads/default.png') }}\" class=\"rounded-circle img-fluid\" alt=\"Image par défaut\" style=\"width: 200px; height: 200px; object-fit: cover;\">
                        {% endif %}
                    </div>
                {% endfor %}
            </div>

            <div class=\"col-md-8\">
                {% for profile in tabprofile %}
                    <h2 class=\"text-primary\">
                        {{ profile.nom is defined ? profile.nom : 'Nom indisponible' }}
                        {{ profile.prenom is defined ? profile.prenom : 'Prénom indisponible' }}
                    </h2>
                    <p><strong>Email :</strong> {{ profile.email is defined ? profile.email : 'Email indisponible' }}</p>
                    <p><strong>Téléphone :</strong> {{ profile.tel is defined ? profile.tel : 'Téléphone indisponible' }}</p>
                    <p><strong>Adresse :</strong> {{ profile.adresse is defined ? profile.adresse : 'Adresse indisponible' }}</p>
                    <p><strong>Domaine :</strong> {{ profile.domaine is defined ? profile.domaine : 'Domaine indisponible' }}</p>
                    <p><strong>Sexe :</strong> {{ profile.sexe is defined ? profile.sexe : 'Sexe indisponible' }}</p>

                    {% if profile.cv is defined %}
                        <a href=\"{{ asset('uploads/cv/' ~ profile.cv) }}\" class=\"btn btn-outline-primary mt-3\" download>
                            Télécharger CV
                        </a>
                    {% else %}
                        <p>CV non disponible</p>
                    {% endif %}

                    <!-- Bouton Modifier -->
                    <a href=\"{{ path('app_updatechercheur', {'id': profile.id}) }}\" class=\"btn btn-success mt-3\">
                        Modifier
                    </a>

                    <!-- Bouton Supprimer -->
                    <a href=\"{{ path('app_deletechercheur', {'id': profile.id}) }}\" class=\"btn btn-danger mt-3\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer ce profil ?')\">
                        Supprimer
                    </a>
                {% else %}
                    <p>Aucun profil trouvé.</p>
                {% endfor %}
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "security/profilechercheur.html.twig", "C:\\CareeraPlatform\\templates\\security\\profilechercheur.html.twig");
    }
}
