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

/* forum/UpdateDiscussion.html.twig */
class __TwigTemplate_6cc3a8b7ff78c8c5fee97f464832d477 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forum/UpdateDiscussion.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forum/UpdateDiscussion.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "forum/UpdateDiscussion.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        // line 5
        yield "<div class=\"testimonial-item bg-light rounded p-3 mb-4\">
    <div class=\"bg-white border rounded p-4\">
        <h5 class=\"fw-bold mb-3\">Update Discussion</h5>
    
        ";
        // line 9
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["UpdateDiscussion"]) || array_key_exists("UpdateDiscussion", $context) ? $context["UpdateDiscussion"] : (function () { throw new RuntimeError('Variable "UpdateDiscussion" does not exist.', 9, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_updateDiscussion", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["discussion"]) || array_key_exists("discussion", $context) ? $context["discussion"] : (function () { throw new RuntimeError('Variable "discussion" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9)])]);
        yield "
    
        <div class=\"mb-3\">
            ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["UpdateDiscussion"]) || array_key_exists("UpdateDiscussion", $context) ? $context["UpdateDiscussion"] : (function () { throw new RuntimeError('Variable "UpdateDiscussion" does not exist.', 12, $this->source); })()), "title", [], "any", false, false, false, 12), 'label');
        yield "
            ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["UpdateDiscussion"]) || array_key_exists("UpdateDiscussion", $context) ? $context["UpdateDiscussion"] : (function () { throw new RuntimeError('Variable "UpdateDiscussion" does not exist.', 13, $this->source); })()), "title", [], "any", false, false, false, 13), 'widget', ["attr" => ["class" => "form-control shadow-sm", "placeholder" => "Enter discussion title"]]);
        yield "
            <div class=\"text-danger\">
                ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["UpdateDiscussion"]) || array_key_exists("UpdateDiscussion", $context) ? $context["UpdateDiscussion"] : (function () { throw new RuntimeError('Variable "UpdateDiscussion" does not exist.', 15, $this->source); })()), "title", [], "any", false, false, false, 15), 'errors');
        yield "
            </div>
        </div>
    
        <div class=\"mb-3\">
            ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["UpdateDiscussion"]) || array_key_exists("UpdateDiscussion", $context) ? $context["UpdateDiscussion"] : (function () { throw new RuntimeError('Variable "UpdateDiscussion" does not exist.', 20, $this->source); })()), "content", [], "any", false, false, false, 20), 'label');
        yield "
            ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["UpdateDiscussion"]) || array_key_exists("UpdateDiscussion", $context) ? $context["UpdateDiscussion"] : (function () { throw new RuntimeError('Variable "UpdateDiscussion" does not exist.', 21, $this->source); })()), "content", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control shadow-sm", "rows" => 4, "placeholder" => "Write your discussion here..."]]);
        yield "
            <div class=\"text-danger\">
                ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["UpdateDiscussion"]) || array_key_exists("UpdateDiscussion", $context) ? $context["UpdateDiscussion"] : (function () { throw new RuntimeError('Variable "UpdateDiscussion" does not exist.', 23, $this->source); })()), "content", [], "any", false, false, false, 23), 'errors');
        yield "
            </div>
        </div>
    
        <div class=\"d-flex justify-content-end\">
            ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["UpdateDiscussion"]) || array_key_exists("UpdateDiscussion", $context) ? $context["UpdateDiscussion"] : (function () { throw new RuntimeError('Variable "UpdateDiscussion" does not exist.', 28, $this->source); })()), "submit", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "btn btn-primary btn-lg py-2 px-4", "style" => "width: auto;"]]);
        yield "
        </div>
    
        ";
        // line 31
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["UpdateDiscussion"]) || array_key_exists("UpdateDiscussion", $context) ? $context["UpdateDiscussion"] : (function () { throw new RuntimeError('Variable "UpdateDiscussion" does not exist.', 31, $this->source); })()), 'form_end');
        yield "
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
        return "forum/UpdateDiscussion.html.twig";
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
        return array (  128 => 31,  122 => 28,  114 => 23,  109 => 21,  105 => 20,  97 => 15,  92 => 13,  88 => 12,  82 => 9,  76 => 5,  63 => 4,  40 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
{% extends 'base.html.twig' %}

{% block body %}
<div class=\"testimonial-item bg-light rounded p-3 mb-4\">
    <div class=\"bg-white border rounded p-4\">
        <h5 class=\"fw-bold mb-3\">Update Discussion</h5>
    
        {{ form_start(UpdateDiscussion, { 'action': path('app_updateDiscussion', { 'id': discussion.id }) }) }}
    
        <div class=\"mb-3\">
            {{ form_label(UpdateDiscussion.title) }}
            {{ form_widget(UpdateDiscussion.title, {'attr': {'class': 'form-control shadow-sm', 'placeholder': 'Enter discussion title'}}) }}
            <div class=\"text-danger\">
                {{ form_errors(UpdateDiscussion.title) }}
            </div>
        </div>
    
        <div class=\"mb-3\">
            {{ form_label(UpdateDiscussion.content) }}
            {{ form_widget(UpdateDiscussion.content, {'attr': {'class': 'form-control shadow-sm', 'rows': 4, 'placeholder': 'Write your discussion here...'}}) }}
            <div class=\"text-danger\">
                {{ form_errors(UpdateDiscussion.content) }}
            </div>
        </div>
    
        <div class=\"d-flex justify-content-end\">
            {{ form_widget(UpdateDiscussion.submit, {'attr': {'class': 'btn btn-primary btn-lg py-2 px-4', 'style': 'width: auto;'}}) }}
        </div>
    
        {{ form_end(UpdateDiscussion) }}
    </div>
</div>

{% endblock %}
", "forum/UpdateDiscussion.html.twig", "C:\\careera\\templates\\forum\\UpdateDiscussion.html.twig");
    }
}
