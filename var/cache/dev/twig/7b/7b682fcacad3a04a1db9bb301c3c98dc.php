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
        .service-item {
            background-color: #f0f0f0;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            text-align: center;
        }

        .service-item img {
            max-width: 100%;
            border-radius: 8px;
        }

        .filled-button {
            padding: 10px 20px;
            background-color: rgb(114, 206, 117);
            color: white;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
            margin-top: 10px;
        }
.search-bar {
            margin-bottom: 20px;
        }

        .search-input {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            width: 300px;
        }

        .search-button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .search-button:hover {
            background-color: #0056b3;
        }
        .filled-button:hover {
            background-color: #45a049;
        }
    </style>

    <div class=\"services\" id=\"services\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"section-heading\">
                        <h2>Freelance <em>Services</em></h2>
                        <span>Consultez toutes les offres disponibles</span>
                         <!-- Ajouter le bouton de notification ici -->
                       ";
        // line 67
        yield "                    </div>
                       <div>
                       <form action=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recherche_offre_mission");
        yield "\" method=\"get\" class=\"search-bar\">

                            <input type=\"text\" placeholder=\"Rechercher...\" name=\"query\" class=\"search-input\">
                            <button type=\"submit\" class=\"search-button\">🔍</button>
                        </form>
                    </div>
                </div>

                ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["offres"]) || array_key_exists("offres", $context) ? $context["offres"] : (function () { throw new RuntimeError('Variable "offres" does not exist.', 77, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
            // line 78
            yield "                    <div class=\"col-md-4\">
                        <div class=\"service-item\">
                            <img src=\"https://www.miss-seo-girl.com/wp-content/uploads/2019/09/freelance-ou-agence-web.jpg\" alt=\"Image de l'offre\">
                            <div class=\"down-content\">
                                <h4>";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "titre", [], "any", false, false, false, 82), "html", null, true);
            yield "</h4>
                                <p><strong>Prix :</strong> ";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "prix", [], "any", false, false, false, 83), "html", null, true);
            yield " dt</p>
                                <p><strong>Description :</strong> ";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "description", [], "any", false, false, false, 84), "html", null, true);
            yield "</p>
                               
                                <p><strong>Date :</strong> ";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "Date", [], "any", false, false, false, 86), "d/m/Y H:i"), "html", null, true);
            yield "</p>
                                <div class=\"actions\">
                                    <a href=\"";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offrefrelencer_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 88)]), "html", null, true);
            yield "\" class=\"filled-button\">Voir plus</a>
                                    <a href=\"";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offrefrelencer_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 89)]), "html", null, true);
            yield "\" class=\"filled-button\">Modifier</a>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        // line 98
        if (!$context['_iterated']) {
            // line 95
            yield "                    <div class=\"col-md-12\">
                        <p>Aucune offre trouvée.</p>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['offre'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        yield "            </div>
        </div>
    </div>

   <div class=\"text-center\">
  ";
        // line 105
        yield "        <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offrefrelencer_new");
        yield "\" class=\"filled-button\">Créer une nouvelle offre</a>
        <a href=\"";
        // line 106
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lister_toutes_candidatures");
        yield "\" class=\"filled-button\">Consulter les candidatures</a>
 ";
        // line 108
        yield "
   ";
        // line 110
        yield "        <br><br>
        <div>
            <a href=\"";
        // line 112
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demande_mission_new");
        yield "\" class=\"filled-button\">Postuler</a>
            <a href=\"";
        // line 113
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mes_candidatures");
        yield "\" class=\"filled-button\">consulter ma candidature</a>

        </div>
    ";
        // line 117
        yield "</div>

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
        return array (  264 => 117,  258 => 113,  254 => 112,  250 => 110,  247 => 108,  243 => 106,  238 => 105,  231 => 99,  222 => 95,  220 => 98,  210 => 89,  206 => 88,  201 => 86,  196 => 84,  192 => 83,  188 => 82,  182 => 78,  177 => 77,  166 => 69,  162 => 67,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Offres{% endblock %}

{% block body %}
    <style>
        .service-item {
            background-color: #f0f0f0;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            text-align: center;
        }

        .service-item img {
            max-width: 100%;
            border-radius: 8px;
        }

        .filled-button {
            padding: 10px 20px;
            background-color: rgb(114, 206, 117);
            color: white;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
            margin-top: 10px;
        }
.search-bar {
            margin-bottom: 20px;
        }

        .search-input {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            width: 300px;
        }

        .search-button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .search-button:hover {
            background-color: #0056b3;
        }
        .filled-button:hover {
            background-color: #45a049;
        }
    </style>

    <div class=\"services\" id=\"services\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"section-heading\">
                        <h2>Freelance <em>Services</em></h2>
                        <span>Consultez toutes les offres disponibles</span>
                         <!-- Ajouter le bouton de notification ici -->
                       {#  <button class=\"notification-button\" onclick=\"window.location.href='{{ path('app_notifications') }}'\">🔔</button>#}
                    </div>
                       <div>
                       <form action=\"{{ path('app_recherche_offre_mission') }}\" method=\"get\" class=\"search-bar\">

                            <input type=\"text\" placeholder=\"Rechercher...\" name=\"query\" class=\"search-input\">
                            <button type=\"submit\" class=\"search-button\">🔍</button>
                        </form>
                    </div>
                </div>

                {% for offre in offres %}
                    <div class=\"col-md-4\">
                        <div class=\"service-item\">
                            <img src=\"https://www.miss-seo-girl.com/wp-content/uploads/2019/09/freelance-ou-agence-web.jpg\" alt=\"Image de l'offre\">
                            <div class=\"down-content\">
                                <h4>{{ offre.titre }}</h4>
                                <p><strong>Prix :</strong> {{ offre.prix }} dt</p>
                                <p><strong>Description :</strong> {{ offre.description }}</p>
                               
                                <p><strong>Date :</strong> {{ offre.Date|date('d/m/Y H:i')  }}</p>
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
  {#  {% if isModerator %}  #}
        <a href=\"{{ path('app_offrefrelencer_new') }}\" class=\"filled-button\">Créer une nouvelle offre</a>
        <a href=\"{{ path('app_lister_toutes_candidatures') }}\" class=\"filled-button\">Consulter les candidatures</a>
 {#   {% endif %}#}

   {#  {% if isFreelancer %}  #}
        <br><br>
        <div>
            <a href=\"{{ path('app_demande_mission_new') }}\" class=\"filled-button\">Postuler</a>
            <a href=\"{{ path('app_mes_candidatures') }}\" class=\"filled-button\">consulter ma candidature</a>

        </div>
    {#{% endif %} #}
</div>

{% endblock %}
", "offrefrelencer/index.html.twig", "C:\\Users\\wiem\\Desktop\\CareeraPlatform\\templates\\offrefrelencer\\index.html.twig");
    }
}
