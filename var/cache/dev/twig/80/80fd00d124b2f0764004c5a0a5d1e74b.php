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

/* forum/index.html.twig */
class __TwigTemplate_80e864ac5598f16dc21fd41ef17f7736 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forum/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forum/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "forum/index.html.twig", 1);
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

        yield "Forum Discussion";
        
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
        yield "<div class=\"container mt-5\">
    <!-- Existing Discussions -->
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["Discussions"]) || array_key_exists("Discussions", $context) ? $context["Discussions"] : (function () { throw new RuntimeError('Variable "Discussions" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["Discussion"]) {
            // line 9
            yield "    <div class=\"testimonial-item bg-light rounded p-3 mb-4\">
        <div class=\"bg-white border rounded p-4\">
            <div class=\"d-flex align-items-center\">
                <img class=\"img-fluid flex-shrink-0 rounded\" src=\"";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/testimonial-1.jpg"), "html", null, true);
            yield "\" style=\"width: 45px; height: 45px;\">
                <div class=\"ps-3\">
                    <h6 class=\"fw-bold mb-1\">";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["Discussion"], "UserId", [], "any", false, false, false, 14), "html", null, true);
            yield "</h6>
                    <small>";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["Discussion"], "CreatedAt", [], "any", false, false, false, 15), "Y-m-d H:i"), "html", null, true);
            yield "</small>
                </div>
            </div>
            
            <div class=\"resource-feedback\">
                <h6>";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["Discussion"], "title", [], "any", false, false, false, 20), "html", null, true);
            yield "</h6>
                <p class=\"mt-3\">";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["Discussion"], "content", [], "any", false, false, false, 21), "html", null, true);
            yield "</p>
            </div>

            <!-- Buttons for Discussion Starter -->
            <div class=\"d-flex gap-2 mt-3\">
                <button class=\"btn btn-outline-primary btn-sm\">
                    <i class=\"fas fa-thumbs-up\"></i> Like
                </button>
                <button class=\"btn btn-outline-danger btn-sm\">
                    <i class=\"fas fa-thumbs-down\"></i> Dislike
                </button>
                <button class=\"btn btn-outline-secondary btn-sm\">
                    <a href=\"";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forum_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["Discussion"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            yield "\">
                         <i class=\"fas fa-reply\"></i> Reply
                    </a>
                </button>
            </div>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['Discussion'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        yield "
    <!-- Section to Add a New Discussion -->
    <div class=\"testimonial-item bg-light rounded p-3 mb-4\">
        <div class=\"bg-white border rounded p-4\">
            <h5 class=\"fw-bold mb-3\">Start a New Discussion</h5>
        
            ";
        // line 47
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["NewDiscussion"]) || array_key_exists("NewDiscussion", $context) ? $context["NewDiscussion"] : (function () { throw new RuntimeError('Variable "NewDiscussion" does not exist.', 47, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_addDiscussion")]);
        yield "
        
            <div class=\"mb-3\">
                ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["NewDiscussion"]) || array_key_exists("NewDiscussion", $context) ? $context["NewDiscussion"] : (function () { throw new RuntimeError('Variable "NewDiscussion" does not exist.', 50, $this->source); })()), "title", [], "any", false, false, false, 50), 'label');
        yield "
                ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["NewDiscussion"]) || array_key_exists("NewDiscussion", $context) ? $context["NewDiscussion"] : (function () { throw new RuntimeError('Variable "NewDiscussion" does not exist.', 51, $this->source); })()), "title", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Enter discussion title"]]);
        yield "
                <div class=\"text-danger\">
                    ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["NewDiscussion"]) || array_key_exists("NewDiscussion", $context) ? $context["NewDiscussion"] : (function () { throw new RuntimeError('Variable "NewDiscussion" does not exist.', 53, $this->source); })()), "title", [], "any", false, false, false, 53), 'errors');
        yield "
                </div>
            </div>
        
            <div class=\"mb-3\">
                ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["NewDiscussion"]) || array_key_exists("NewDiscussion", $context) ? $context["NewDiscussion"] : (function () { throw new RuntimeError('Variable "NewDiscussion" does not exist.', 58, $this->source); })()), "content", [], "any", false, false, false, 58), 'label');
        yield "
                ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["NewDiscussion"]) || array_key_exists("NewDiscussion", $context) ? $context["NewDiscussion"] : (function () { throw new RuntimeError('Variable "NewDiscussion" does not exist.', 59, $this->source); })()), "content", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "form-control", "rows" => 4, "placeholder" => "Write your discussion here..."]]);
        yield "
                <div class=\"text-danger\">
                    ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["NewDiscussion"]) || array_key_exists("NewDiscussion", $context) ? $context["NewDiscussion"] : (function () { throw new RuntimeError('Variable "NewDiscussion" does not exist.', 61, $this->source); })()), "content", [], "any", false, false, false, 61), 'errors');
        yield "
                </div>
            </div>
        
        
            <div class=\"d-flex justify-content-end\">
                ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["NewDiscussion"]) || array_key_exists("NewDiscussion", $context) ? $context["NewDiscussion"] : (function () { throw new RuntimeError('Variable "NewDiscussion" does not exist.', 67, $this->source); })()), "submit", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => "btn btn-primary"]]);
        yield "
            </div>
        
            ";
        // line 70
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["NewDiscussion"]) || array_key_exists("NewDiscussion", $context) ? $context["NewDiscussion"] : (function () { throw new RuntimeError('Variable "NewDiscussion" does not exist.', 70, $this->source); })()), 'form_end');
        yield "
        </div>
        
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
        return "forum/index.html.twig";
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
        return array (  218 => 70,  212 => 67,  203 => 61,  198 => 59,  194 => 58,  186 => 53,  181 => 51,  177 => 50,  171 => 47,  163 => 41,  149 => 33,  134 => 21,  130 => 20,  122 => 15,  118 => 14,  113 => 12,  108 => 9,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Forum Discussion{% endblock %}

{% block body %}
<div class=\"container mt-5\">
    <!-- Existing Discussions -->
    {% for Discussion in Discussions %}
    <div class=\"testimonial-item bg-light rounded p-3 mb-4\">
        <div class=\"bg-white border rounded p-4\">
            <div class=\"d-flex align-items-center\">
                <img class=\"img-fluid flex-shrink-0 rounded\" src=\"{{ asset('img/testimonial-1.jpg') }}\" style=\"width: 45px; height: 45px;\">
                <div class=\"ps-3\">
                    <h6 class=\"fw-bold mb-1\">{{ Discussion.UserId }}</h6>
                    <small>{{ Discussion.CreatedAt|date('Y-m-d H:i') }}</small>
                </div>
            </div>
            
            <div class=\"resource-feedback\">
                <h6>{{ Discussion.title }}</h6>
                <p class=\"mt-3\">{{ Discussion.content }}</p>
            </div>

            <!-- Buttons for Discussion Starter -->
            <div class=\"d-flex gap-2 mt-3\">
                <button class=\"btn btn-outline-primary btn-sm\">
                    <i class=\"fas fa-thumbs-up\"></i> Like
                </button>
                <button class=\"btn btn-outline-danger btn-sm\">
                    <i class=\"fas fa-thumbs-down\"></i> Dislike
                </button>
                <button class=\"btn btn-outline-secondary btn-sm\">
                    <a href=\"{{ path('app_forum_details', { id: Discussion.id }) }}\">
                         <i class=\"fas fa-reply\"></i> Reply
                    </a>
                </button>
            </div>
        </div>
    </div>
    {% endfor %}

    <!-- Section to Add a New Discussion -->
    <div class=\"testimonial-item bg-light rounded p-3 mb-4\">
        <div class=\"bg-white border rounded p-4\">
            <h5 class=\"fw-bold mb-3\">Start a New Discussion</h5>
        
            {{ form_start(NewDiscussion, { 'action': path('app_addDiscussion') }) }}
        
            <div class=\"mb-3\">
                {{ form_label(NewDiscussion.title) }}
                {{ form_widget(NewDiscussion.title, {'attr': {'class': 'form-control', 'placeholder': 'Enter discussion title'}}) }}
                <div class=\"text-danger\">
                    {{ form_errors(NewDiscussion.title) }}
                </div>
            </div>
        
            <div class=\"mb-3\">
                {{ form_label(NewDiscussion.content) }}
                {{ form_widget(NewDiscussion.content, {'attr': {'class': 'form-control', 'rows': 4, 'placeholder': 'Write your discussion here...'}}) }}
                <div class=\"text-danger\">
                    {{ form_errors(NewDiscussion.content) }}
                </div>
            </div>
        
        
            <div class=\"d-flex justify-content-end\">
                {{ form_widget(NewDiscussion.submit, {'attr': {'class': 'btn btn-primary'}}) }}
            </div>
        
            {{ form_end(NewDiscussion) }}
        </div>
        
    </div>
</div>
{% endblock %}
", "forum/index.html.twig", "C:\\Users\\User\\Desktop\\CareeraPlatform\\templates\\forum\\index.html.twig");
    }
}
