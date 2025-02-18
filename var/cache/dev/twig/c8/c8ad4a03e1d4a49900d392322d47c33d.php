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

        yield "Détails de l'Offre";
        
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
                        <img src=\"https://www.miss-seo-girl.com/wp-content/uploads/2019/09/freelance-ou-agence-web.jpg\" alt=\"Image de l'offre\">
                        <div class=\"down-content\">
                            <h4>ID</h4>
                            <p>";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21), "html", null, true);
        yield "</p>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-4\">
                    <div class=\"service-item\">
                        <div class=\"down-content\">
                            <h4>Titre</h4>
                            <p>";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 30, $this->source); })()), "titre", [], "any", false, false, false, 30), "html", null, true);
        yield "</p>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-4\">
                    <div class=\"service-item\">
                        <div class=\"down-content\">
                            <h4>Prix</h4>
                            <p>";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 39, $this->source); })()), "prix", [], "any", false, false, false, 39), "html", null, true);
        yield " dt</p>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-4\">
                    <div class=\"service-item\">
                        <div class=\"down-content\">
                            <h4>Description</h4>
                            <p>";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 48, $this->source); })()), "description", [], "any", false, false, false, 48), "html", null, true);
        yield "</p>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-4\">
                    <div class=\"service-item\">
                        <div class=\"down-content\">
                            <h4>Date Limite</h4>
                            <p>";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 57, $this->source); })()), "datelimite", [], "any", false, false, false, 57), "d/m/Y"), "html", null, true);
        yield "</p>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-4\">
                    <div class=\"service-item\">
                        <div class=\"down-content\">
                            <h4>Spécialité</h4>
                            <p>";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 66, $this->source); })()), "specialite", [], "any", false, false, false, 66), "html", null, true);
        yield "</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"text-center\">
        <a href=\"";
        // line 75
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offrefrelencer_index");
        yield "\" class=\"filled-button\">Retour à la liste</a>
        <a href=\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offrefrelencer_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 76, $this->source); })()), "id", [], "any", false, false, false, 76)]), "html", null, true);
        yield "\" class=\"filled-button\">Modifier</a>
        ";
        // line 77
        yield Twig\Extension\CoreExtension::include($this->env, $context, "offrefrelencer/_delete_form.html.twig");
        yield "
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
        return array (  197 => 77,  193 => 76,  189 => 75,  177 => 66,  165 => 57,  153 => 48,  141 => 39,  129 => 30,  117 => 21,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails de l'Offre{% endblock %}

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
                        <img src=\"https://www.miss-seo-girl.com/wp-content/uploads/2019/09/freelance-ou-agence-web.jpg\" alt=\"Image de l'offre\">
                        <div class=\"down-content\">
                            <h4>ID</h4>
                            <p>{{ offre.id }}</p>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-4\">
                    <div class=\"service-item\">
                        <div class=\"down-content\">
                            <h4>Titre</h4>
                            <p>{{ offre.titre }}</p>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-4\">
                    <div class=\"service-item\">
                        <div class=\"down-content\">
                            <h4>Prix</h4>
                            <p>{{ offre.prix }} dt</p>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-4\">
                    <div class=\"service-item\">
                        <div class=\"down-content\">
                            <h4>Description</h4>
                            <p>{{ offre.description }}</p>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-4\">
                    <div class=\"service-item\">
                        <div class=\"down-content\">
                            <h4>Date Limite</h4>
                            <p>{{ offre.datelimite|date('d/m/Y') }}</p>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-4\">
                    <div class=\"service-item\">
                        <div class=\"down-content\">
                            <h4>Spécialité</h4>
                            <p>{{ offre.specialite }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"text-center\">
        <a href=\"{{ path('app_offrefrelencer_index') }}\" class=\"filled-button\">Retour à la liste</a>
        <a href=\"{{ path('app_offrefrelencer_edit', {'id': offre.id}) }}\" class=\"filled-button\">Modifier</a>
        {{ include('offrefrelencer/_delete_form.html.twig') }}
    </div>
{% endblock %}
", "offrefrelencer/show.html.twig", "C:\\Users\\wiem\\Desktop\\CareeraPlatform\\templates\\offrefrelencer\\show.html.twig");
    }
}
