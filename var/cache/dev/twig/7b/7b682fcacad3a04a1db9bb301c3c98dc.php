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

/* offrefrelencer/index.html.twig */
class __TwigTemplate_3900303639393443900ef5177c4c1df4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offrefrelencer/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offrefrelencer/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "offrefrelencer/index.html.twig", 1);
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

        yield "Offre index";
        
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
        yield "    <style>
        /* Styles pour le cadre gris */
        .service-item {
            background-color: #f0f0f0; /* Gris clair */
            padding: 20px; /* Espacement interne */
            border-radius: 8px; /* Coins arrondis */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Ombre légère */
            margin-bottom: 30px; /* Espacement en bas */
        }

        .service-item img {
            max-width: 100%; /* Pour s'assurer que l'image occupe toute la largeur disponible */
            border-radius: 8px; /* Coins arrondis de l'image */
        }

        /* Autres styles pour les boutons */
        .filled-button {
            padding: 10px 20px;
            background-color:rgb(114, 206, 117);
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .filled-button:hover {
            background-color: #45a049;
        }
    </style>

    <div class=\"services\" id=\"services\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"section-heading\" style=\"text-align: center; margin-bottom: 20px;\">
                    <h2 style=\"font-size: 2rem; color: #2c3e50;\">freelance <em style=\"font-style: normal; color: #3498db;\">Services</em></h2>
                    <span>Consultez toutes les offres disponibles</span>
                </div>
            </div>
        </div>
    </div>
</div>


                ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["offres"]) || array_key_exists("offres", $context) ? $context["offres"] : (function () { throw new RuntimeError('Variable "offres" does not exist.', 49, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
            // line 50
            yield "                    <div class=\"col-md-4\">
                        <div class=\"service-item\">
                     <img src=\"https://www.freelance-informatique.fr/images/actualites/consultant%20informatique.jpg\" alt=\"img\">
                            <div class=\"down-content\">
                                <h4>";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "titre", [], "any", false, false, false, 54), "html", null, true);
            yield "</h4>
                                <p><strong>Prix :</strong> ";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "prix", [], "any", false, false, false, 55), "html", null, true);
            yield "dt</p>
                                <p><strong>Description :</strong> ";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "description", [], "any", false, false, false, 56), "html", null, true);
            yield "</p>
                                <p><strong>Date limite :</strong> ";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "datelimite", [], "any", false, false, false, 57), "html", null, true);
            yield "</p>
                                <p><strong>Spécialité :</strong> ";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "specialite", [], "any", false, false, false, 58), "html", null, true);
            yield "</p>
                                <div class=\"actions\">
                                    <a href=\"";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offrefrelencer_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 60)]), "html", null, true);
            yield "\" class=\"filled-button\">Voir plus</a>
                                    <a href=\"";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offrefrelencer_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 61)]), "html", null, true);
            yield "\" class=\"filled-button\">Modifier</a>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        // line 70
        if (!$context['_iterated']) {
            // line 67
            yield "                    <div class=\"col-md-12\">
                        <p>Aucune offre trouvée.</p>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['offre'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        yield "            </div>
        </div>
    </div>

    <div class=\"text-center\">
        <a href=\"";
        // line 76
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offrefrelencer_new");
        yield "\" class=\"filled-button\">Créer une nouvelle offre</a>
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
        return "offrefrelencer/index.html.twig";
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
        return array (  209 => 76,  202 => 71,  193 => 67,  191 => 70,  181 => 61,  177 => 60,  172 => 58,  168 => 57,  164 => 56,  160 => 55,  156 => 54,  150 => 50,  145 => 49,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Offre index{% endblock %}

{% block body %}
    <style>
        /* Styles pour le cadre gris */
        .service-item {
            background-color: #f0f0f0; /* Gris clair */
            padding: 20px; /* Espacement interne */
            border-radius: 8px; /* Coins arrondis */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Ombre légère */
            margin-bottom: 30px; /* Espacement en bas */
        }

        .service-item img {
            max-width: 100%; /* Pour s'assurer que l'image occupe toute la largeur disponible */
            border-radius: 8px; /* Coins arrondis de l'image */
        }

        /* Autres styles pour les boutons */
        .filled-button {
            padding: 10px 20px;
            background-color:rgb(114, 206, 117);
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .filled-button:hover {
            background-color: #45a049;
        }
    </style>

    <div class=\"services\" id=\"services\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"section-heading\" style=\"text-align: center; margin-bottom: 20px;\">
                    <h2 style=\"font-size: 2rem; color: #2c3e50;\">freelance <em style=\"font-style: normal; color: #3498db;\">Services</em></h2>
                    <span>Consultez toutes les offres disponibles</span>
                </div>
            </div>
        </div>
    </div>
</div>


                {% for offre in offres %}
                    <div class=\"col-md-4\">
                        <div class=\"service-item\">
                     <img src=\"https://www.freelance-informatique.fr/images/actualites/consultant%20informatique.jpg\" alt=\"img\">
                            <div class=\"down-content\">
                                <h4>{{ offre.titre }}</h4>
                                <p><strong>Prix :</strong> {{ offre.prix }}dt</p>
                                <p><strong>Description :</strong> {{ offre.description }}</p>
                                <p><strong>Date limite :</strong> {{ offre.datelimite }}</p>
                                <p><strong>Spécialité :</strong> {{ offre.specialite }}</p>
                                <div class=\"actions\">
                                    <a href=\"{{ path('app_offrefrelencer_show', {'id': offre.id}) }}\" class=\"filled-button\">Voir plus</a>
                                    <a href=\"{{ path('app_offrefrelencer_edit', {'id': offre.id}) }}\" class=\"filled-button\">Modifier</a>
                                </div>
                            </div>
                        </div>
                    </div>
                {% else %}
                    <div class=\"col-md-12\">
                        <p>Aucune offre trouvée.</p>
                    </div>
                {% endfor %}
            </div>
        </div>
    </div>

    <div class=\"text-center\">
        <a href=\"{{ path('app_offrefrelencer_new') }}\" class=\"filled-button\">Créer une nouvelle offre</a>
    </div>
{% endblock %}
", "offrefrelencer/index.html.twig", "C:\\Users\\wiem\\Desktop\\CareeraPlatform\\templates\\offrefrelencer\\index.html.twig");
    }
}
