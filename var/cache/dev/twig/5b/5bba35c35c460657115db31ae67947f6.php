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

/* forum_details/UpdateReply.html.twig */
class __TwigTemplate_489505f4b2166d3bf7e82dc7992beeb7 extends Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forum_details/UpdateReply.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forum_details/UpdateReply.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "forum_details/UpdateReply.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["UpdateReply"]) || array_key_exists("UpdateReply", $context) ? $context["UpdateReply"] : (function () { throw new RuntimeError('Variable "UpdateReply" does not exist.', 4, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_UpdateReply", ["discussionId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["Discussion"]) || array_key_exists("Discussion", $context) ? $context["Discussion"] : (function () { throw new RuntimeError('Variable "Discussion" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4), "replyId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["Reply"]) || array_key_exists("Reply", $context) ? $context["Reply"] : (function () { throw new RuntimeError('Variable "Reply" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4)]), "method" => "POST"]);
        yield "
        <div class=\"mb-3\">
            ";
        // line 6
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["UpdateReply"]) || array_key_exists("UpdateReply", $context) ? $context["UpdateReply"] : (function () { throw new RuntimeError('Variable "UpdateReply" does not exist.', 6, $this->source); })()), "content", [], "any", false, false, false, 6), 'label');
        yield "
            ";
        // line 7
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["UpdateReply"]) || array_key_exists("UpdateReply", $context) ? $context["UpdateReply"] : (function () { throw new RuntimeError('Variable "UpdateReply" does not exist.', 7, $this->source); })()), "content", [], "any", false, false, false, 7), 'widget', ["attr" => ["class" => "form-control", "rows" => 4, "placeholder" => "Write your discussion here..."]]);
        yield "
            <div class=\"text-danger\">
                ";
        // line 9
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["UpdateReply"]) || array_key_exists("UpdateReply", $context) ? $context["UpdateReply"] : (function () { throw new RuntimeError('Variable "UpdateReply" does not exist.', 9, $this->source); })()), "content", [], "any", false, false, false, 9), 'errors');
        yield "
            </div>
        </div>

        <div class=\"d-flex justify-content-end\">
            ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["UpdateReply"]) || array_key_exists("UpdateReply", $context) ? $context["UpdateReply"] : (function () { throw new RuntimeError('Variable "UpdateReply" does not exist.', 14, $this->source); })()), "submit", [], "any", false, false, false, 14), 'widget', ["attr" => ["class" => "btn btn-primary"]]);
        yield "
        </div>

        ";
        // line 17
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["UpdateReply"]) || array_key_exists("UpdateReply", $context) ? $context["UpdateReply"] : (function () { throw new RuntimeError('Variable "UpdateReply" does not exist.', 17, $this->source); })()), 'form_end');
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
        return "forum_details/UpdateReply.html.twig";
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
        return array (  104 => 17,  98 => 14,  90 => 9,  85 => 7,  81 => 6,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
{{ form_start(UpdateReply, {'action': path('app_UpdateReply', {'discussionId': Discussion.id, 'replyId': Reply.id}), 'method': 'POST'}) }}
        <div class=\"mb-3\">
            {{ form_label(UpdateReply.content) }}
            {{ form_widget(UpdateReply.content, {'attr': {'class': 'form-control', 'rows': 4, 'placeholder': 'Write your discussion here...'}}) }}
            <div class=\"text-danger\">
                {{ form_errors(UpdateReply.content) }}
            </div>
        </div>

        <div class=\"d-flex justify-content-end\">
            {{ form_widget(UpdateReply.submit, {'attr': {'class': 'btn btn-primary'}}) }}
        </div>

        {{ form_end(UpdateReply) }}


{% endblock %}", "forum_details/UpdateReply.html.twig", "C:\\careera\\templates\\forum_details\\UpdateReply.html.twig");
    }
}
