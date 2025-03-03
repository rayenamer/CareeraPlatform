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

/* forum/stats.html.twig */
class __TwigTemplate_0c0f033f48450090531bda59f2d4ca17 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forum/stats.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forum/stats.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "forum/stats.html.twig", 1);
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

        yield "Discussion Statistics";
        
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
        yield "    <div class=\"container mt-5\">
        <h1 class=\"mb-4\">Discussion Statistics</h1>

        <!-- Total Discussions -->
        <div class=\"card p-3 mb-3\">
            <h3>Total Discussions</h3>
            <p class=\"display-4\">";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalDiscussions"]) || array_key_exists("totalDiscussions", $context) ? $context["totalDiscussions"] : (function () { throw new RuntimeError('Variable "totalDiscussions" does not exist.', 12, $this->source); })()), "html", null, true);
        yield "</p>
        </div>

        <!-- Top Liked Discussions -->
        <div class=\"card p-3 mb-3\">
            <h3>Top 5 Most Liked Discussions</h3>
            <ul class=\"list-group\">
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["topLikedDiscussions"]) || array_key_exists("topLikedDiscussions", $context) ? $context["topLikedDiscussions"] : (function () { throw new RuntimeError('Variable "topLikedDiscussions" does not exist.', 19, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["discussion"]) {
            // line 20
            yield "                    <li class=\"list-group-item\">
                        <strong>";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["discussion"], "title", [], "any", false, false, false, 21), "html", null, true);
            yield "</strong> - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["discussion"], "likes", [], "any", false, false, false, 21), "html", null, true);
            yield " likes
                    </li>
                ";
            $context['_iterated'] = true;
        }
        // line 23
        if (!$context['_iterated']) {
            // line 24
            yield "                    <li class=\"list-group-item text-muted\">No discussions found.</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['discussion'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        yield "            </ul>
        </div>

        <!-- Top Replied Discussions -->
        <div class=\"card p-3\">
            <h3>Top 5 Discussions with Most Replies</h3>
            <ul class=\"list-group\">
                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["topRepliedDiscussions"]) || array_key_exists("topRepliedDiscussions", $context) ? $context["topRepliedDiscussions"] : (function () { throw new RuntimeError('Variable "topRepliedDiscussions" does not exist.', 33, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["discussion"]) {
            // line 34
            yield "                    <li class=\"list-group-item\">
                        <strong>";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["discussion"], "title", [], "any", false, false, false, 35), "html", null, true);
            yield "</strong> - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["discussion"], "replies", [], "any", false, false, false, 35)), "html", null, true);
            yield " replies
                    </li>
                ";
            $context['_iterated'] = true;
        }
        // line 37
        if (!$context['_iterated']) {
            // line 38
            yield "                    <li class=\"list-group-item text-muted\">No discussions found.</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['discussion'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "            </ul>
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
        return "forum/stats.html.twig";
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
        return array (  179 => 40,  172 => 38,  170 => 37,  161 => 35,  158 => 34,  153 => 33,  144 => 26,  137 => 24,  135 => 23,  126 => 21,  123 => 20,  118 => 19,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Discussion Statistics{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <h1 class=\"mb-4\">Discussion Statistics</h1>

        <!-- Total Discussions -->
        <div class=\"card p-3 mb-3\">
            <h3>Total Discussions</h3>
            <p class=\"display-4\">{{ totalDiscussions }}</p>
        </div>

        <!-- Top Liked Discussions -->
        <div class=\"card p-3 mb-3\">
            <h3>Top 5 Most Liked Discussions</h3>
            <ul class=\"list-group\">
                {% for discussion in topLikedDiscussions %}
                    <li class=\"list-group-item\">
                        <strong>{{ discussion.title }}</strong> - {{ discussion.likes }} likes
                    </li>
                {% else %}
                    <li class=\"list-group-item text-muted\">No discussions found.</li>
                {% endfor %}
            </ul>
        </div>

        <!-- Top Replied Discussions -->
        <div class=\"card p-3\">
            <h3>Top 5 Discussions with Most Replies</h3>
            <ul class=\"list-group\">
                {% for discussion in topRepliedDiscussions %}
                    <li class=\"list-group-item\">
                        <strong>{{ discussion.title }}</strong> - {{ discussion.replies|length }} replies
                    </li>
                {% else %}
                    <li class=\"list-group-item text-muted\">No discussions found.</li>
                {% endfor %}
            </ul>
        </div>
    </div>
{% endblock %}
", "forum/stats.html.twig", "C:\\careera\\templates\\forum\\stats.html.twig");
    }
}
