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

/* evaluation/new.html.twig */
class __TwigTemplate_6fc1f79e56caff3f8e8dab5e88a9853b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evaluation/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evaluation/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "evaluation/new.html.twig", 1);
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

        yield "New Evaluation";
        
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
        yield "    <h1>Créer une nouvelle évaluation</h1>

    <style>
        .form-container {
            background-color: #f9f9f9;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: 0 auto;
        }

        h1 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
            display: flex;
            flex-direction: column;
        }

        .form-label {
            font-size: 16px;
            color: #333;
            margin-bottom: 8px;
        }

        .form-control {
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #ced4da;
            width: 100%;
            font-size: 16px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        .form-control:focus {
            border-color: #3498db;
            box-shadow: 0 0 5px rgba(52, 152, 219, 0.5);
        }

        .btn {
            background-color:#45a049;
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
            margin-top: 20px;
        }

        .btn:hover {
            background-color:rgb(212, 241, 219);
        }

        .back-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #2980b9;
            text-decoration: none;
        }

        .back-link:hover {
            text-decoration: underline;
        }
    </style>

    <div class=\"form-container\">
        ";
        // line 81
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), 'form_start');
        yield "
            ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 83
            yield "                <div class=\"form-group\">
                    <label for=\"";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 84), "id", [], "any", false, false, false, 84), "html", null, true);
            yield "\" class=\"form-label\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'label');
            yield "</label>
                    ";
            // line 85
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                    ";
            // line 86
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'errors');
            yield "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        yield "            <button type=\"submit\" class=\"btn\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 89, $this->source); })()), "Soumettre")) : ("Soumettre")), "html", null, true);
        yield "</button>
        ";
        // line 90
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), 'form_end');
        yield "
    </div>

    <a class=\"back-link\" href=\"";
        // line 93
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evaluation_index");
        yield "\">Retourner à la liste</a>
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
        return "evaluation/new.html.twig";
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
        return array (  218 => 93,  212 => 90,  207 => 89,  198 => 86,  194 => 85,  188 => 84,  185 => 83,  181 => 82,  177 => 81,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}New Evaluation{% endblock %}

{% block body %}
    <h1>Créer une nouvelle évaluation</h1>

    <style>
        .form-container {
            background-color: #f9f9f9;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: 0 auto;
        }

        h1 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
            display: flex;
            flex-direction: column;
        }

        .form-label {
            font-size: 16px;
            color: #333;
            margin-bottom: 8px;
        }

        .form-control {
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #ced4da;
            width: 100%;
            font-size: 16px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        .form-control:focus {
            border-color: #3498db;
            box-shadow: 0 0 5px rgba(52, 152, 219, 0.5);
        }

        .btn {
            background-color:#45a049;
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
            margin-top: 20px;
        }

        .btn:hover {
            background-color:rgb(212, 241, 219);
        }

        .back-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #2980b9;
            text-decoration: none;
        }

        .back-link:hover {
            text-decoration: underline;
        }
    </style>

    <div class=\"form-container\">
        {{ form_start(form) }}
            {% for field in form %}
                <div class=\"form-group\">
                    <label for=\"{{ field.vars.id }}\" class=\"form-label\">{{ form_label(field) }}</label>
                    {{ form_widget(field, {'attr': {'class': 'form-control'}}) }}
                    {{ form_errors(field) }}
                </div>
            {% endfor %}
            <button type=\"submit\" class=\"btn\">{{ button_label|default('Soumettre') }}</button>
        {{ form_end(form) }}
    </div>

    <a class=\"back-link\" href=\"{{ path('app_evaluation_index') }}\">Retourner à la liste</a>
{% endblock %}
", "evaluation/new.html.twig", "C:\\Users\\wiem\\Desktop\\CareeraPlatform\\templates\\evaluation\\new.html.twig");
    }
}
