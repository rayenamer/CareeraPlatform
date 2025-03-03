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
class __TwigTemplate_39e3beb468bf5ce40a8bd824b25d8d90 extends Template
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

        yield "Liste des Offres";
        
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
        .services {
            padding: 50px 0;
        }

        .service-item {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .service-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .service-item img {
            width: 100%;
            height: 200px; /* Hauteur fixe pour toutes les images */
            object-fit: cover; /* Pour que l'image couvre toute la zone sans déformation */
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .service-item h4 {
            font-size: 1.5em;
            margin-bottom: 10px;
            color: #333;
        }

        .service-item p {
            font-size: 1em;
            color: #666;
            margin-bottom: 10px;
        }

        .actions {
            display: flex;
            justify-content: space-around;
            margin-top: 15px;
        }

        .filled-button {
            padding: 10px 20px;
            background-color: rgb(114, 206, 117);
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .filled-button:hover {
            background-color: #45a049;
        }

        .search-bar {
            margin-bottom: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .search-input {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            width: 300px;
            margin-right: 10px;
        }

        .search-button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .search-button:hover {
            background-color: #0056b3;
        }

        .no-results {
            text-align: center;
            font-size: 1.2em;
            color: #888;
            margin-top: 20px;
        }

        .text-center {
            text-align: center;
            margin-top: 30px;
        }

        .text-center .filled-button {
            margin: 0 10px;
        }
    </style>

    <div class=\"services\" id=\"services\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"section-heading text-center\">
                        <h2>Freelance <em>Services</em></h2>
                        <span>Consultez toutes les offres disponibles</span>
                    </div>
                    
                    <!-- Formulaire de recherche -->
                    <div>
                        <form action=\"";
        // line 122
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recherche_offre_mission");
        yield "\" method=\"get\" class=\"search-bar\">
                            <input type=\"text\" name=\"query\" class=\"search-input\" placeholder=\"Rechercher...\" aria-label=\"Rechercher une offre\">
                            <button type=\"submit\" class=\"search-button\" aria-label=\"Lancer la recherche\">🔍</button>
                        </form>
                    </div>
                </div>

                ";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["offres"]) || array_key_exists("offres", $context) ? $context["offres"] : (function () { throw new RuntimeError('Variable "offres" does not exist.', 129, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
            // line 130
            yield "                    <div class=\"col-md-4\">
                        <div class=\"service-item\">
                            ";
            // line 132
            if (CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "imageUrl", [], "any", false, false, false, 132)) {
                // line 133
                yield "                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "imageUrl", [], "any", false, false, false, 133))), "html", null, true);
                yield "\" alt=\"Image de l'offre\" class=\"img-fluid\">
                            ";
            } else {
                // line 135
                yield "                                <div class=\"no-image\" style=\"height: 200px; background-color: #f0f0f0; border-radius: 8px; display: flex; align-items: center; justify-content: center;\">
                                    <p>Aucune image disponible</p>
                                </div>
                            ";
            }
            // line 139
            yield "                            <h4>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "titre", [], "any", false, false, false, 139), "html", null, true);
            yield "</h4>
                            <p><strong>Prix :</strong> ";
            // line 140
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "prix", [], "any", false, false, false, 140), "html", null, true);
            yield " dt</p>
                            <p><strong>Description :</strong> ";
            // line 141
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "description", [], "any", false, false, false, 141), "html", null, true);
            yield "</p>
                            <p><strong>Date :</strong> ";
            // line 142
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "Date", [], "any", false, false, false, 142), "d/m/Y H:i"), "html", null, true);
            yield "</p>
                            <div class=\"actions\">
                                <a href=\"";
            // line 144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offrefrelencer_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 144)]), "html", null, true);
            yield "\" class=\"filled-button\">Voir plus</a>
                                <a href=\"";
            // line 145
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offrefrelencer_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 145)]), "html", null, true);
            yield "\" class=\"filled-button\">Modifier</a>
                                <a href=\"";
            // line 146
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demande_mission_new");
            yield "\" class=\"filled-button\">Postuler</a>
                            </div>
                        </div>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        // line 150
        if (!$context['_iterated']) {
            // line 151
            yield "                    <div class=\"col-md-12 no-results\">
                        <p>Aucune offre trouvée.</p>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['offre'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        yield "            </div>
        </div>
    </div>

    <div class=\"text-center\">
        <a href=\"";
        // line 160
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offrefrelencer_new");
        yield "\" class=\"filled-button\">Créer une nouvelle offre</a>
        <a href=\"";
        // line 161
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lister_toutes_candidatures");
        yield "\" class=\"filled-button\">Consulter les candidatures</a>
    </div>

    <div class=\"text-center\">
        <a href=\"";
        // line 165
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mes_candidatures");
        yield "\" class=\"filled-button\">Consulter ma candidature</a>
        <a href=\"";
        // line 166
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demande_mission_index");
        yield "\" class=\"filled-button\">Supprimer demande</a>
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
        return array (  319 => 166,  315 => 165,  308 => 161,  304 => 160,  297 => 155,  288 => 151,  286 => 150,  277 => 146,  273 => 145,  269 => 144,  264 => 142,  260 => 141,  256 => 140,  251 => 139,  245 => 135,  239 => 133,  237 => 132,  233 => 130,  228 => 129,  218 => 122,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Offres{% endblock %}

{% block body %}
    <style>
        .services {
            padding: 50px 0;
        }

        .service-item {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .service-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .service-item img {
            width: 100%;
            height: 200px; /* Hauteur fixe pour toutes les images */
            object-fit: cover; /* Pour que l'image couvre toute la zone sans déformation */
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .service-item h4 {
            font-size: 1.5em;
            margin-bottom: 10px;
            color: #333;
        }

        .service-item p {
            font-size: 1em;
            color: #666;
            margin-bottom: 10px;
        }

        .actions {
            display: flex;
            justify-content: space-around;
            margin-top: 15px;
        }

        .filled-button {
            padding: 10px 20px;
            background-color: rgb(114, 206, 117);
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .filled-button:hover {
            background-color: #45a049;
        }

        .search-bar {
            margin-bottom: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .search-input {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            width: 300px;
            margin-right: 10px;
        }

        .search-button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .search-button:hover {
            background-color: #0056b3;
        }

        .no-results {
            text-align: center;
            font-size: 1.2em;
            color: #888;
            margin-top: 20px;
        }

        .text-center {
            text-align: center;
            margin-top: 30px;
        }

        .text-center .filled-button {
            margin: 0 10px;
        }
    </style>

    <div class=\"services\" id=\"services\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"section-heading text-center\">
                        <h2>Freelance <em>Services</em></h2>
                        <span>Consultez toutes les offres disponibles</span>
                    </div>
                    
                    <!-- Formulaire de recherche -->
                    <div>
                        <form action=\"{{ path('app_recherche_offre_mission') }}\" method=\"get\" class=\"search-bar\">
                            <input type=\"text\" name=\"query\" class=\"search-input\" placeholder=\"Rechercher...\" aria-label=\"Rechercher une offre\">
                            <button type=\"submit\" class=\"search-button\" aria-label=\"Lancer la recherche\">🔍</button>
                        </form>
                    </div>
                </div>

                {% for offre in offres %}
                    <div class=\"col-md-4\">
                        <div class=\"service-item\">
                            {% if offre.imageUrl %}
                                <img src=\"{{ asset('uploads/images/' ~ offre.imageUrl) }}\" alt=\"Image de l'offre\" class=\"img-fluid\">
                            {% else %}
                                <div class=\"no-image\" style=\"height: 200px; background-color: #f0f0f0; border-radius: 8px; display: flex; align-items: center; justify-content: center;\">
                                    <p>Aucune image disponible</p>
                                </div>
                            {% endif %}
                            <h4>{{ offre.titre }}</h4>
                            <p><strong>Prix :</strong> {{ offre.prix }} dt</p>
                            <p><strong>Description :</strong> {{ offre.description }}</p>
                            <p><strong>Date :</strong> {{ offre.Date|date('d/m/Y H:i') }}</p>
                            <div class=\"actions\">
                                <a href=\"{{ path('app_offrefrelencer_show', {'id': offre.id}) }}\" class=\"filled-button\">Voir plus</a>
                                <a href=\"{{ path('app_offrefrelencer_edit', {'id': offre.id}) }}\" class=\"filled-button\">Modifier</a>
                                <a href=\"{{ path('app_demande_mission_new') }}\" class=\"filled-button\">Postuler</a>
                            </div>
                        </div>
                    </div>
                {% else %}
                    <div class=\"col-md-12 no-results\">
                        <p>Aucune offre trouvée.</p>
                    </div>
                {% endfor %}
            </div>
        </div>
    </div>

    <div class=\"text-center\">
        <a href=\"{{ path('app_offrefrelencer_new') }}\" class=\"filled-button\">Créer une nouvelle offre</a>
        <a href=\"{{ path('app_lister_toutes_candidatures') }}\" class=\"filled-button\">Consulter les candidatures</a>
    </div>

    <div class=\"text-center\">
        <a href=\"{{ path('app_mes_candidatures') }}\" class=\"filled-button\">Consulter ma candidature</a>
        <a href=\"{{ path('app_demande_mission_index') }}\" class=\"filled-button\">Supprimer demande</a>
    </div>
{% endblock %}", "offrefrelencer/index.html.twig", "C:\\careera\\templates\\offrefrelencer\\index.html.twig");
    }
}
