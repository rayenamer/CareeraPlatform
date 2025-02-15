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

/* typecontrat/index.html.twig */
class __TwigTemplate_199a855998a2b65287a04a9f40a6ad9d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "typecontrat/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "typecontrat/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "typecontrat/index.html.twig", 1);
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

        yield "Gestion de type de contrat";
        
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
        yield "    <div class=\"container d-flex justify-content-center align-items-center\" style=\"min-height: 100vh;\">
        <div class=\"w-75\">
            <h1 class=\"text-center mb-4\">Type Contrat</h1>

            ";
        // line 11
        yield "            ";
        if (array_key_exists("addform", $context)) {
            // line 12
            yield "                <h3 class=\"text-center\">Ajouter Type Contrat</h3>
                ";
            // line 13
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 13, $this->source); })()), 'form_start');
            yield "
                    ";
            // line 14
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 14, $this->source); })()), "nom", [], "any", false, false, false, 14), 'row');
            yield "
                    <button type=\"submit\" class=\"btn btn-primary d-block mx-auto\">Ajouter Type Contrat</button>
                ";
            // line 16
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 16, $this->source); })()), 'form_end');
            yield "
            ";
        }
        // line 18
        yield "
            ";
        // line 20
        yield "            ";
        if (array_key_exists("addform", $context)) {
            // line 21
            yield "                <h3 class=\"text-center\">Mettre à jour Type Contrat</h3>
                ";
            // line 22
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 22, $this->source); })()), 'form_start');
            yield "
                    ";
            // line 23
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 23, $this->source); })()), "nom", [], "any", false, false, false, 23), 'row');
            yield "
                    <button type=\"submit\" class=\"btn btn-warning d-block mx-auto\">Mettre à jour Types Contrat</button>
                ";
            // line 25
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 25, $this->source); })()), 'form_end');
            yield "
            ";
        }
        // line 27
        yield "
            ";
        // line 29
        yield "            <h3 class=\"text-center mb-4\">Tous Types de Contrats</h3>
            <table class=\"table table-bordered text-center\">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tabtypecontrat"]) || array_key_exists("tabtypecontrat", $context) ? $context["tabtypecontrat"] : (function () { throw new RuntimeError('Variable "tabtypecontrat" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 39
            yield "                        <tr>
                            <td>";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "nom", [], "any", false, false, false, 40), "html", null, true);
            yield "</td>
                            <td>
                                <a href=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_updatetypecontrat", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            yield "\" class=\"btn btn-warning\">Modifier</a>
                                <a href=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deletetypecontrat", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            yield "\" class=\"btn btn-danger\" onclick=\"return confirm('Are you sure?')\">Supprimer</a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['type'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        yield "                </tbody>
            </table>

            ";
        // line 51
        yield "            <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_addtypecontrat");
        yield "\" class=\"btn btn-success d-block mx-auto\">Ajouter un Type Contrat</a>
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
        return "typecontrat/index.html.twig";
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
        return array (  194 => 51,  189 => 47,  179 => 43,  175 => 42,  170 => 40,  167 => 39,  163 => 38,  152 => 29,  149 => 27,  144 => 25,  139 => 23,  135 => 22,  132 => 21,  129 => 20,  126 => 18,  121 => 16,  116 => 14,  112 => 13,  109 => 12,  106 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion de type de contrat{% endblock %}

{% block body %}
    <div class=\"container d-flex justify-content-center align-items-center\" style=\"min-height: 100vh;\">
        <div class=\"w-75\">
            <h1 class=\"text-center mb-4\">Type Contrat</h1>

            {# Add Section #}
            {% if addform is defined %}
                <h3 class=\"text-center\">Ajouter Type Contrat</h3>
                {{ form_start(addform) }}
                    {{ form_row(addform.nom) }}
                    <button type=\"submit\" class=\"btn btn-primary d-block mx-auto\">Ajouter Type Contrat</button>
                {{ form_end(addform) }}
            {% endif %}

            {# Update Section #}
            {% if addform is defined %}
                <h3 class=\"text-center\">Mettre à jour Type Contrat</h3>
                {{ form_start(addform) }}
                    {{ form_row(addform.nom) }}
                    <button type=\"submit\" class=\"btn btn-warning d-block mx-auto\">Mettre à jour Types Contrat</button>
                {{ form_end(addform) }}
            {% endif %}

            {# Show Section #}
            <h3 class=\"text-center mb-4\">Tous Types de Contrats</h3>
            <table class=\"table table-bordered text-center\">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for type in tabtypecontrat %}
                        <tr>
                            <td>{{ type.nom }}</td>
                            <td>
                                <a href=\"{{ path('app_updatetypecontrat', {id: type.id}) }}\" class=\"btn btn-warning\">Modifier</a>
                                <a href=\"{{ path('app_deletetypecontrat', {id: type.id}) }}\" class=\"btn btn-danger\" onclick=\"return confirm('Are you sure?')\">Supprimer</a>
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>

            {# Link to Add New Type Contrat #}
            <a href=\"{{ path('app_addtypecontrat') }}\" class=\"btn btn-success d-block mx-auto\">Ajouter un Type Contrat</a>
        </div>
    </div>
{% endblock %}
", "typecontrat/index.html.twig", "C:\\careera\\templates\\typecontrat\\index.html.twig");
    }
}
