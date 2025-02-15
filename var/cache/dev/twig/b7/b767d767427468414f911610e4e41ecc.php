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

/* forum_details/index.html.twig */
class __TwigTemplate_038d70f97f2bb394d06ddbef8b65ecb0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forum_details/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forum_details/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "forum_details/index.html.twig", 1);
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

        // line 4
        yield "    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "<h3>Discussion title</h3>
<h6>Discussion content</h6>

    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["Replies"]) || array_key_exists("Replies", $context) ? $context["Replies"] : (function () { throw new RuntimeError('Variable "Replies" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["Reply"]) {
            // line 12
            yield "    <!-- Reply 1 -->
    <div class=\"testimonial-item bg-light rounded p-3 mb-4 ms-5\">
        <div class=\"bg-white border rounded p-4\">
            <div class=\"d-flex align-items-center\">
                <img class=\"img-fluid flex-shrink-0 rounded\" src=\"";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/testimonial-2.jpg"), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["Reply"], "UserId", [], "any", false, false, false, 16), "html", null, true);
            yield "\" style=\"width: 45px; height: 45px;\">
                <div class=\"ps-3\">
                    <h6 class=\"fw-bold mb-1\">";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["Reply"], "UserId", [], "any", false, false, false, 18), "html", null, true);
            yield "</h6>
                    <small>";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["Reply"], "CreatedAt", [], "any", false, false, false, 19), "d F"), "html", null, true);
            yield "</small>
                </div>
            </div>
            <p class=\"mt-3\">";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["Reply"], "content", [], "any", false, false, false, 22), "html", null, true);
            yield "</p>
    
            <!-- Buttons for Reply -->
            <div class=\"d-flex gap-2 mt-3\">
                <button class=\"btn btn-outline-primary btn-sm\">
                    <small>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["Reply"], "likes", [], "any", false, false, false, 27), "html", null, true);
            yield "</small>
                    <i class=\"fas fa-thumbs-up\"></i> Like
                </button>
                <button class=\"btn btn-outline-danger btn-sm\">
                    <small>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["Reply"], "dislikes", [], "any", false, false, false, 31), "html", null, true);
            yield "</small>
                    <i class=\"fas fa-thumbs-down\"></i> Dislike
                </button>
            </div>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['Reply'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "    

    <!-- Section to Add a New Discussion Starter -->
    ";
        // line 41
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["NewReply"]) || array_key_exists("NewReply", $context) ? $context["NewReply"] : (function () { throw new RuntimeError('Variable "NewReply" does not exist.', 41, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_addReply", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["Discussion"]) || array_key_exists("Discussion", $context) ? $context["Discussion"] : (function () { throw new RuntimeError('Variable "Discussion" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41)]), "method" => "POST"]);
        yield "
        <div class=\"mb-3\">
            ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["NewReply"]) || array_key_exists("NewReply", $context) ? $context["NewReply"] : (function () { throw new RuntimeError('Variable "NewReply" does not exist.', 43, $this->source); })()), "content", [], "any", false, false, false, 43), 'label');
        yield "
            ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["NewReply"]) || array_key_exists("NewReply", $context) ? $context["NewReply"] : (function () { throw new RuntimeError('Variable "NewReply" does not exist.', 44, $this->source); })()), "content", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control", "rows" => 4, "placeholder" => "Write your discussion here..."]]);
        yield "
            <div class=\"text-danger\">
                ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["NewReply"]) || array_key_exists("NewReply", $context) ? $context["NewReply"] : (function () { throw new RuntimeError('Variable "NewReply" does not exist.', 46, $this->source); })()), "content", [], "any", false, false, false, 46), 'errors');
        yield "
            </div>
        </div>

        <div class=\"d-flex justify-content-end\">
            ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["NewReply"]) || array_key_exists("NewReply", $context) ? $context["NewReply"] : (function () { throw new RuntimeError('Variable "NewReply" does not exist.', 51, $this->source); })()), "submit", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "btn btn-primary"]]);
        yield "
        </div>

        ";
        // line 54
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["NewReply"]) || array_key_exists("NewReply", $context) ? $context["NewReply"] : (function () { throw new RuntimeError('Variable "NewReply" does not exist.', 54, $this->source); })()), 'form_end');
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
        return "forum_details/index.html.twig";
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
        return array (  195 => 54,  189 => 51,  181 => 46,  176 => 44,  172 => 43,  167 => 41,  162 => 38,  149 => 31,  142 => 27,  134 => 22,  128 => 19,  124 => 18,  117 => 16,  111 => 12,  107 => 11,  102 => 8,  89 => 7,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    
{% endblock %}

{% block body %}
<h3>Discussion title</h3>
<h6>Discussion content</h6>

    {% for Reply in Replies %}
    <!-- Reply 1 -->
    <div class=\"testimonial-item bg-light rounded p-3 mb-4 ms-5\">
        <div class=\"bg-white border rounded p-4\">
            <div class=\"d-flex align-items-center\">
                <img class=\"img-fluid flex-shrink-0 rounded\" src=\"{{ asset('img/testimonial-2.jpg') }}\" alt=\"{{ Reply.UserId }}\" style=\"width: 45px; height: 45px;\">
                <div class=\"ps-3\">
                    <h6 class=\"fw-bold mb-1\">{{ Reply.UserId }}</h6>
                    <small>{{ Reply.CreatedAt|date('d F') }}</small>
                </div>
            </div>
            <p class=\"mt-3\">{{ Reply.content }}</p>
    
            <!-- Buttons for Reply -->
            <div class=\"d-flex gap-2 mt-3\">
                <button class=\"btn btn-outline-primary btn-sm\">
                    <small>{{ Reply.likes }}</small>
                    <i class=\"fas fa-thumbs-up\"></i> Like
                </button>
                <button class=\"btn btn-outline-danger btn-sm\">
                    <small>{{ Reply.dislikes }}</small>
                    <i class=\"fas fa-thumbs-down\"></i> Dislike
                </button>
            </div>
        </div>
    </div>
    {%endfor%}
    

    <!-- Section to Add a New Discussion Starter -->
    {{ form_start(NewReply, {'action': path('app_addReply', {'id': Discussion.id}), 'method': 'POST'}) }}
        <div class=\"mb-3\">
            {{ form_label(NewReply.content) }}
            {{ form_widget(NewReply.content, {'attr': {'class': 'form-control', 'rows': 4, 'placeholder': 'Write your discussion here...'}}) }}
            <div class=\"text-danger\">
                {{ form_errors(NewReply.content) }}
            </div>
        </div>

        <div class=\"d-flex justify-content-end\">
            {{ form_widget(NewReply.submit, {'attr': {'class': 'btn btn-primary'}}) }}
        </div>

        {{ form_end(NewReply) }}
{% endblock %}
", "forum_details/index.html.twig", "C:\\Users\\User\\Desktop\\CareeraPlatform\\templates\\forum_details\\index.html.twig");
    }
}
