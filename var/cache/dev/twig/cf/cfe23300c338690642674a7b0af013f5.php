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

/* notification/index.html.twig */
class __TwigTemplate_2925234e1227f41750a6fc9b9852a874 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "notification/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "notification/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "notification/index.html.twig", 1);
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

        yield "Hello NotificationController!
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "\t<div class=\"container mt-5\">
\t\t<div
\t\t\tclass=\"row\">
\t\t\t";
        // line 11
        yield "\t\t\t";
        $context["sorted_notifications"] = Twig\Extension\CoreExtension::sort($this->env, (isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 11, $this->source); })()), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 11, $this->source); })()), "isRead", [], "any", false, false, false, 11)) ? (1) : ( -1)); });
        // line 12
        yield "
\t\t\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sorted_notifications"]) || array_key_exists("sorted_notifications", $context) ? $context["sorted_notifications"] : (function () { throw new RuntimeError('Variable "sorted_notifications" does not exist.', 13, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
            // line 14
            yield "\t\t\t\t<div class=\"col-md-4 mb-4\">
\t\t\t\t\t<div class=\"card shadow-sm d-flex flex-column\">
\t\t\t\t\t\t<div class=\"card-body d-flex flex-column justify-content-between\">
\t\t\t\t\t\t\t<h5 class=\"card-title text-center\">Notification</h5>
\t\t\t\t\t\t\t<p class=\"card-text text-center\">
\t\t\t\t\t\t\t\t";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "message", [], "any", false, false, false, 19), "html", null, true);
            yield "
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t<small class=\"text-muted\">";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "createdAt", [], "any", false, false, false, 22), "Y-m-d H:i:s"), "html", null, true);
            yield "</small>
\t\t\t\t\t\t\t\t<span class=\"badge ";
            // line 23
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "isRead", [], "any", false, false, false, 23)) ? ("bg-secondary") : ("bg-primary"));
            yield "\">
\t\t\t\t\t\t\t\t\t";
            // line 24
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "isRead", [], "any", false, false, false, 24)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Read"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Unread"), "html", null, true)));
            yield "
\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t";
            // line 27
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "isRead", [], "any", false, false, false, 27)) {
                // line 28
                yield "\t\t\t\t\t\t\t\t\t<a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_setNotificationTrue", ["Id" => CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "id", [], "any", false, false, false, 28)]), "html", null, true);
                yield "\" class=\"btn btn-link btn-sm\">
\t\t\t\t\t\t\t\t\t\t";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mark as read"), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
            }
            // line 32
            yield "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            $context['_iterated'] = true;
        }
        // line 37
        if (!$context['_iterated']) {
            // line 38
            yield "\t\t\t\t<div class=\"col-12 text-center\">
\t\t\t\t\t<p class=\"text-muted\">";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("no_notifications"), "html", null, true);
            yield "</p>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['notification'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "\t\t</div>
\t</div>


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
        return "notification/index.html.twig";
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
        return array (  180 => 42,  171 => 39,  168 => 38,  166 => 37,  157 => 32,  151 => 29,  146 => 28,  144 => 27,  138 => 24,  134 => 23,  130 => 22,  124 => 19,  117 => 14,  112 => 13,  109 => 12,  106 => 11,  101 => 7,  88 => 6,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello NotificationController!
{% endblock %}

{% block body %}
\t<div class=\"container mt-5\">
\t\t<div
\t\t\tclass=\"row\">
\t\t\t{# Sort notifications: first unread, then read #}
\t\t\t{% set sorted_notifications = notifications|sort((a, b) => a.isRead ? 1 : -1) %}

\t\t\t{% for notification in sorted_notifications %}
\t\t\t\t<div class=\"col-md-4 mb-4\">
\t\t\t\t\t<div class=\"card shadow-sm d-flex flex-column\">
\t\t\t\t\t\t<div class=\"card-body d-flex flex-column justify-content-between\">
\t\t\t\t\t\t\t<h5 class=\"card-title text-center\">Notification</h5>
\t\t\t\t\t\t\t<p class=\"card-text text-center\">
\t\t\t\t\t\t\t\t{{ notification.message }}
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t<small class=\"text-muted\">{{ notification.createdAt|date('Y-m-d H:i:s') }}</small>
\t\t\t\t\t\t\t\t<span class=\"badge {{ notification.isRead ? 'bg-secondary' : 'bg-primary' }}\">
\t\t\t\t\t\t\t\t\t{{ notification.isRead ? 'Read'|trans : 'Unread'|trans }}
\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t{% if not notification.isRead %}
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_setNotificationTrue', { 'Id': notification.id }) }}\" class=\"btn btn-link btn-sm\">
\t\t\t\t\t\t\t\t\t\t{{ 'Mark as read'|trans }}
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% else %}
\t\t\t\t<div class=\"col-12 text-center\">
\t\t\t\t\t<p class=\"text-muted\">{{ 'no_notifications'|trans }}</p>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>
\t</div>


{% endblock %}
", "notification/index.html.twig", "C:\\careera\\templates\\notification\\index.html.twig");
    }
}
