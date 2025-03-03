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

/* evenements/typemod.html.twig */
class __TwigTemplate_806f326c76252648a3c52cfa20885f66 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenements/typemod.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenements/typemod.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "evenements/typemod.html.twig", 1);
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

        yield "Gestion des Evènements";
        
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
        yield "<h1 class=\"mb-3 text-center\">Gestion des Evènements</h1>

<div class=\"container\">
    <!-- Boutons alignés à gauche -->
    <div class=\"d-flex justify-content-start mb-4\">
    <a href=\"event\"  class=\"btn btn-outline-dark px-3\">
                <i class=\"fas fa-list me-2\"></i>consulter les évenement
            </a>
     
        <!-- Bouton pour ajouter une nouvelle offre -->
        <a href=\"addtypeEvent\" class=\"btn btn-success\">Ajouter un type evènement</a> 
        
    </div>

    <!-- Tableau des offres -->
    <table class=\"table table-bordered\"> 
        <thead>
            <tr>
                <th>type de evènement</th>
                
                
            </tr>
        </thead>
        <tbody>
            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tabevent"]) || array_key_exists("tabevent", $context) ? $context["tabevent"] : (function () { throw new RuntimeError('Variable "tabevent" does not exist.', 30, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 31
            yield "                <tr>
                    <td>";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "nom", [], "any", false, false, false, 32), "html", null, true);
            yield "</dt>
                  
                    
                    ";
            // line 38
            yield "                    <td>
                        <a href=\"editType/";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 39), "html", null, true);
            yield "\" class=\"btn btn-primary btn-sm\">Modifier</a>
                        <a href=\"deltypeEvent/";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 40), "html", null, true);
            yield "\"
                            class=\"btn btn-danger btn-sm\" 
                            onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cette offre ?');\">Supprimer
                        </a>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 46
        if (!$context['_iterated']) {
            // line 47
            yield "                <tr>
                    <td colspan=\"10\" class=\"text-center\">Aucune type d'evènement trouvée.</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        yield "        </tbody>
    </table>

    

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
        return "evenements/typemod.html.twig";
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
        return array (  169 => 51,  160 => 47,  158 => 46,  147 => 40,  143 => 39,  140 => 38,  134 => 32,  131 => 31,  126 => 30,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des Evènements{% endblock %}

{% block body %}
<h1 class=\"mb-3 text-center\">Gestion des Evènements</h1>

<div class=\"container\">
    <!-- Boutons alignés à gauche -->
    <div class=\"d-flex justify-content-start mb-4\">
    <a href=\"event\"  class=\"btn btn-outline-dark px-3\">
                <i class=\"fas fa-list me-2\"></i>consulter les évenement
            </a>
     
        <!-- Bouton pour ajouter une nouvelle offre -->
        <a href=\"addtypeEvent\" class=\"btn btn-success\">Ajouter un type evènement</a> 
        
    </div>

    <!-- Tableau des offres -->
    <table class=\"table table-bordered\"> 
        <thead>
            <tr>
                <th>type de evènement</th>
                
                
            </tr>
        </thead>
        <tbody>
            {% for event in tabevent %}
                <tr>
                    <td>{{ event.nom }}</dt>
                  
                    
                    {# Ceci est un commentaire Twig. Il ne sera pas affiché dans le HTML final. 

                    <td><img src=\"{{ asset('uploads/images/' ~ offre.image) }}\" alt=\"Image de {{ offre.nomposte }}\" width=\"50\"></td>#}
                    <td>
                        <a href=\"editType/{{event.id}}\" class=\"btn btn-primary btn-sm\">Modifier</a>
                        <a href=\"deltypeEvent/{{event.id}}\"
                            class=\"btn btn-danger btn-sm\" 
                            onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cette offre ?');\">Supprimer
                        </a>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"10\" class=\"text-center\">Aucune type d'evènement trouvée.</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>

    

</div>

{% endblock %}", "evenements/typemod.html.twig", "C:\\careera\\templates\\evenements\\typemod.html.twig");
    }
}
