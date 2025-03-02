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

/* security/profilemoderateur.html.twig */
class __TwigTemplate_883f30003b8e5119c23b4601550069bf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/profilemoderateur.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/profilemoderateur.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/profilemoderateur.html.twig", 1);
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

        yield "Profil du RH / Recruteur ";
        
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
        
            </div>

            <div class=\"col-md-8\">
                ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tabprofile"]) || array_key_exists("tabprofile", $context) ? $context["tabprofile"] : (function () { throw new RuntimeError('Variable "tabprofile" does not exist.', 14, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["profile"]) {
            // line 15
            yield "                    <h2 class=\"text-primary\">
                        ";
            // line 16
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["profile"], "nom", [], "any", true, true, false, 16)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["profile"], "nom", [], "any", false, false, false, 16), "html", null, true)) : ("Nom indisponible"));
            yield "
                        ";
            // line 17
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["profile"], "prenom", [], "any", true, true, false, 17)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["profile"], "prenom", [], "any", false, false, false, 17), "html", null, true)) : ("Prénom indisponible"));
            yield "
                    </h2>
                    <p><strong>Email :</strong> ";
            // line 19
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["profile"], "email", [], "any", true, true, false, 19)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["profile"], "email", [], "any", false, false, false, 19), "html", null, true)) : ("Email indisponible"));
            yield "</p>
                    <p><strong>Téléphone :</strong> ";
            // line 20
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["profile"], "tel", [], "any", true, true, false, 20)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["profile"], "tel", [], "any", false, false, false, 20), "html", null, true)) : ("Téléphone indisponible"));
            yield "</p>
                    <p><strong>Domaine :</strong> ";
            // line 21
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["profile"], "domaine", [], "any", true, true, false, 21)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["profile"], "domaine", [], "any", false, false, false, 21), "html", null, true)) : ("Domaine indisponible"));
            yield "</p>
                    <p><strong>Société :</strong> ";
            // line 22
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["profile"], "societe", [], "any", true, true, false, 22)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["profile"], "societe", [], "any", false, false, false, 22), "html", null, true)) : ("societe indisponible"));
            yield "</p>

                    ";
            // line 24
            if (CoreExtension::getAttribute($this->env, $this->source, $context["profile"], "cv", [], "any", true, true, false, 24)) {
                // line 25
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/cv/" . CoreExtension::getAttribute($this->env, $this->source, $context["profile"], "cv", [], "any", false, false, false, 25))), "html", null, true);
                yield "\" class=\"btn btn-outline-primary mt-3\" download>
                            Télécharger CV
                        </a>
                    ";
            } else {
                // line 29
                yield "                        <p>CV non disponible</p>
                    ";
            }
            // line 31
            yield "
                    <!-- Bouton Modifier -->
                    <a href=\"";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_updatemoderateur", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["profile"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            yield "\" class=\"btn btn-success mt-3\">
                        Modifier
                    </a>

                    <!-- Bouton Supprimer -->
                    <a href=\"";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deletemoderateur", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["profile"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            yield "\" class=\"btn btn-danger mt-3\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer ce profil ?')\">
                        Supprimer
                    </a>
                ";
            $context['_iterated'] = true;
        }
        // line 41
        if (!$context['_iterated']) {
            // line 42
            yield "                    <p>Aucun profil trouvé.</p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['profile'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
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
        return "security/profilemoderateur.html.twig";
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
        return array (  187 => 44,  180 => 42,  178 => 41,  170 => 38,  162 => 33,  158 => 31,  154 => 29,  146 => 25,  144 => 24,  139 => 22,  135 => 21,  131 => 20,  127 => 19,  122 => 17,  118 => 16,  115 => 15,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Profil du RH / Recruteur {% endblock %}

{% block body %}
<div class=\"container mt-5\">
    <div class=\"card shadow-lg p-4\">
        <div class=\"row\">
            <div class=\"col-md-4 text-center\">
        
            </div>

            <div class=\"col-md-8\">
                {% for profile in tabprofile %}
                    <h2 class=\"text-primary\">
                        {{ profile.nom is defined ? profile.nom : 'Nom indisponible' }}
                        {{ profile.prenom is defined ? profile.prenom : 'Prénom indisponible' }}
                    </h2>
                    <p><strong>Email :</strong> {{ profile.email is defined ? profile.email : 'Email indisponible' }}</p>
                    <p><strong>Téléphone :</strong> {{ profile.tel is defined ? profile.tel : 'Téléphone indisponible' }}</p>
                    <p><strong>Domaine :</strong> {{ profile.domaine is defined ? profile.domaine : 'Domaine indisponible' }}</p>
                    <p><strong>Société :</strong> {{ profile.societe is defined ? profile.societe : 'societe indisponible' }}</p>

                    {% if profile.cv is defined %}
                        <a href=\"{{ asset('uploads/cv/' ~ profile.cv) }}\" class=\"btn btn-outline-primary mt-3\" download>
                            Télécharger CV
                        </a>
                    {% else %}
                        <p>CV non disponible</p>
                    {% endif %}

                    <!-- Bouton Modifier -->
                    <a href=\"{{ path('app_updatemoderateur', {'id': profile.id}) }}\" class=\"btn btn-success mt-3\">
                        Modifier
                    </a>

                    <!-- Bouton Supprimer -->
                    <a href=\"{{ path('app_deletemoderateur', {'id': profile.id}) }}\" class=\"btn btn-danger mt-3\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer ce profil ?')\">
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
", "security/profilemoderateur.html.twig", "C:\\careera\\templates\\security\\profilemoderateur.html.twig");
    }
}
