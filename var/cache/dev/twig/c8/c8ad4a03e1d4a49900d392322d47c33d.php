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

/* offrefrelencer/show.html.twig */
class __TwigTemplate_5c6004b91966f786cecf332368daf018 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offrefrelencer/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offrefrelencer/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "offrefrelencer/show.html.twig", 1);
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

        yield "Offre";
        
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
        yield "    <div class=\"services\" id=\"services\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"section-heading\">
                        <h1>Offre <em>Détails</em></h1>
                        <span>Détails de l'offre sélectionnée</span>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"service-item\">
                        <img src=\"assets/images/service_01.jpg\" alt=\"\">
                        <div class=\"down-content\">
                            <h4>ID</h4>
                            <p>";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20), "html", null, true);
        yield "</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"service-item\">
                        <img src=\"assets/images/service_02.jpg\" alt=\"\">
                        <div class=\"down-content\">
                            <h4>Titre</h4>
                            <p>";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 29, $this->source); })()), "titre", [], "any", false, false, false, 29), "html", null, true);
        yield "</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"service-item\">
                        <img src=\"assets/images/service_03.jpg\" alt=\"\">
                        <div class=\"down-content\">
                            <h4>Prix</h4>
                            <p>";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 38, $this->source); })()), "prix", [], "any", false, false, false, 38), "html", null, true);
        yield "</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"service-item\">
                        <img src=\"assets/images/service_01.jpg\" alt=\"\">
                        <div class=\"down-content\">
                            <h4>Description</h4>
                            <p>";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 47, $this->source); })()), "description", [], "any", false, false, false, 47), "html", null, true);
        yield "</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"service-item\">
                        <img src=\"assets/images/service_02.jpg\" alt=\"\">
                        <div class=\"down-content\">
                            <h4>Date Limite</h4>
                            <p>";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 56, $this->source); })()), "datelimite", [], "any", false, false, false, 56), "html", null, true);
        yield "</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"service-item\">
                        <img src=\"assets/images/service_03.jpg\" alt=\"\">
                        <div class=\"down-content\">
                            <h4>Specialite</h4>
                            <p>";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 65, $this->source); })()), "specialite", [], "any", false, false, false, 65), "html", null, true);
        yield "</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <a href=\"";
        // line 73
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offrefrelencer_index");
        yield "\">Retour à la liste</a>

    <a href=\"";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offrefrelencer_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 75, $this->source); })()), "id", [], "any", false, false, false, 75)]), "html", null, true);
        yield "\">Modifier</a>

    ";
        // line 77
        yield Twig\Extension\CoreExtension::include($this->env, $context, "offrefrelencer/_delete_form.html.twig");
        yield "
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
        return "offrefrelencer/show.html.twig";
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
        return array (  197 => 77,  192 => 75,  187 => 73,  176 => 65,  164 => 56,  152 => 47,  140 => 38,  128 => 29,  116 => 20,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Offre{% endblock %}

{% block body %}
    <div class=\"services\" id=\"services\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"section-heading\">
                        <h1>Offre <em>Détails</em></h1>
                        <span>Détails de l'offre sélectionnée</span>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"service-item\">
                        <img src=\"assets/images/service_01.jpg\" alt=\"\">
                        <div class=\"down-content\">
                            <h4>ID</h4>
                            <p>{{ offre.id }}</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"service-item\">
                        <img src=\"assets/images/service_02.jpg\" alt=\"\">
                        <div class=\"down-content\">
                            <h4>Titre</h4>
                            <p>{{ offre.titre }}</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"service-item\">
                        <img src=\"assets/images/service_03.jpg\" alt=\"\">
                        <div class=\"down-content\">
                            <h4>Prix</h4>
                            <p>{{ offre.prix }}</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"service-item\">
                        <img src=\"assets/images/service_01.jpg\" alt=\"\">
                        <div class=\"down-content\">
                            <h4>Description</h4>
                            <p>{{ offre.description }}</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"service-item\">
                        <img src=\"assets/images/service_02.jpg\" alt=\"\">
                        <div class=\"down-content\">
                            <h4>Date Limite</h4>
                            <p>{{ offre.datelimite }}</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"service-item\">
                        <img src=\"assets/images/service_03.jpg\" alt=\"\">
                        <div class=\"down-content\">
                            <h4>Specialite</h4>
                            <p>{{ offre.specialite }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <a href=\"{{ path('app_offrefrelencer_index') }}\">Retour à la liste</a>

    <a href=\"{{ path('app_offrefrelencer_edit', {'id': offre.id}) }}\">Modifier</a>

    {{ include('offrefrelencer/_delete_form.html.twig') }}
{% endblock %}", "offrefrelencer/show.html.twig", "C:\\Users\\wiem\\Desktop\\CareeraPlatform\\templates\\offrefrelencer\\show.html.twig");
    }
}
