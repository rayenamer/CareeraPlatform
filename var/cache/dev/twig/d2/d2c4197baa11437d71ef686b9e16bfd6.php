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
class __TwigTemplate_9b7004240e91136c2f9ed09f78bdf994 extends Template
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["Reply"], "UserPhoto", [], "any", false, false, false, 16))), "html", null, true);
            yield "\" style=\"width: 45px; height: 45px;\"> 
                <div class=\"ps-3\">
                    <h6 class=\"fw-bold mb-1\">";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["Reply"], "UserName", [], "any", false, false, false, 18), "html", null, true);
            yield "</h6>
                    <small>";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["Reply"], "CreatedAt", [], "any", false, false, false, 19), "d F H:i")), "html", null, true);
            yield "</small>
                    <button class=\"btn btn-link text-muted p-0\" type=\"button\" id=\"dropdownMenuButton\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        <i class=\"fas fa-ellipsis-v\"></i> <!-- Three dots icon -->
                    </button>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                        <li><a class=\"dropdown-item\" href=\"";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_UpdateReply", ["discussionId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["Discussion"]) || array_key_exists("Discussion", $context) ? $context["Discussion"] : (function () { throw new RuntimeError('Variable "Discussion" does not exist.', 24, $this->source); })()), "id", [], "any", false, false, false, 24), "replyId" => CoreExtension::getAttribute($this->env, $this->source, $context["Reply"], "id", [], "any", false, false, false, 24)]), "html", null, true);
            yield "\">Modify</a></li>
                        <li><a class=\"dropdown-item text-danger\" href=\"";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deleteReply", ["discussionId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["Discussion"]) || array_key_exists("Discussion", $context) ? $context["Discussion"] : (function () { throw new RuntimeError('Variable "Discussion" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25), "replyId" => CoreExtension::getAttribute($this->env, $this->source, $context["Reply"], "id", [], "any", false, false, false, 25)]), "html", null, true);
            yield "\">Delete</a></li>
                    </ul>
                </div>
            </div>
            <p class=\"mt-3\">";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["Reply"], "content", [], "any", false, false, false, 29), "html", null, true);
            yield "</p>
    
            <!-- Buttons for Reply -->
            <div class=\"d-flex gap-2 mt-3\">
                <button class=\"btn btn-outline-primary btn-sm\">
                    <small>";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["Reply"], "likes", [], "any", false, false, false, 34), "html", null, true);
            yield "</small>
                    <a class=\"text-primary\" href=\"";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_AddLikeToReply", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["Reply"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            yield "\">
                        <i class=\"fas fa-thumbs-up\"></i> Like
                    </a>
                </button>
                <button class=\"btn btn-outline-danger btn-sm\">
                    <small>";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["Reply"], "dislikes", [], "any", false, false, false, 40), "html", null, true);
            yield "</small>
                    <a class=\"text-danger\" href=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_AdddisLikeToReply", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["Reply"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            yield "\">
                        <i class=\"fas fa-thumbs-down\"></i> Dislike
                    </a>
                </button>
            </div>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['Reply'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        yield "    <div>
        <button class=\"btn btn-outline-danger d-flex align-items-center\">
            <a class=\"\"  href=\"";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forum");
        yield "\">
                <i class=\"fas fa-arrow-left me-2\"></i> Go BACK
            </a>
        </button>
    </div>
    

    <!-- Section to Add a New Discussion Starter -->
    ";
        // line 59
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["NewReply"]) || array_key_exists("NewReply", $context) ? $context["NewReply"] : (function () { throw new RuntimeError('Variable "NewReply" does not exist.', 59, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_addReply", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["Discussion"]) || array_key_exists("Discussion", $context) ? $context["Discussion"] : (function () { throw new RuntimeError('Variable "Discussion" does not exist.', 59, $this->source); })()), "id", [], "any", false, false, false, 59)]), "method" => "POST"]);
        yield "
        <div class=\"mb-3\">
            ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["NewReply"]) || array_key_exists("NewReply", $context) ? $context["NewReply"] : (function () { throw new RuntimeError('Variable "NewReply" does not exist.', 61, $this->source); })()), "content", [], "any", false, false, false, 61), 'label');
        yield "
            ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["NewReply"]) || array_key_exists("NewReply", $context) ? $context["NewReply"] : (function () { throw new RuntimeError('Variable "NewReply" does not exist.', 62, $this->source); })()), "content", [], "any", false, false, false, 62), 'widget', ["attr" => ["class" => "form-control", "rows" => 4, "placeholder" => "Write your discussion here..."]]);
        yield "
            <div class=\"text-danger\">
                ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["NewReply"]) || array_key_exists("NewReply", $context) ? $context["NewReply"] : (function () { throw new RuntimeError('Variable "NewReply" does not exist.', 64, $this->source); })()), "content", [], "any", false, false, false, 64), 'errors');
        yield "
            </div>
        </div>

        <div class=\"d-flex justify-content-end\">
            ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["NewReply"]) || array_key_exists("NewReply", $context) ? $context["NewReply"] : (function () { throw new RuntimeError('Variable "NewReply" does not exist.', 69, $this->source); })()), "submit", [], "any", false, false, false, 69), 'widget', ["attr" => ["class" => "btn btn-primary"]]);
        yield "
        </div>

        ";
        // line 72
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["NewReply"]) || array_key_exists("NewReply", $context) ? $context["NewReply"] : (function () { throw new RuntimeError('Variable "NewReply" does not exist.', 72, $this->source); })()), 'form_end');
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
        return array (  226 => 72,  220 => 69,  212 => 64,  207 => 62,  203 => 61,  198 => 59,  187 => 51,  183 => 49,  169 => 41,  165 => 40,  157 => 35,  153 => 34,  145 => 29,  138 => 25,  134 => 24,  126 => 19,  122 => 18,  117 => 16,  111 => 12,  107 => 11,  102 => 8,  89 => 7,  77 => 4,  64 => 3,  41 => 1,);
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
                <img class=\"img-fluid flex-shrink-0 rounded\" src=\"{{ asset('uploads/images/' ~ Reply.UserPhoto) }}\" style=\"width: 45px; height: 45px;\"> 
                <div class=\"ps-3\">
                    <h6 class=\"fw-bold mb-1\">{{ Reply.UserName }}</h6>
                    <small>{{ Reply.CreatedAt|date('d F H:i')|lower }}</small>
                    <button class=\"btn btn-link text-muted p-0\" type=\"button\" id=\"dropdownMenuButton\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        <i class=\"fas fa-ellipsis-v\"></i> <!-- Three dots icon -->
                    </button>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                        <li><a class=\"dropdown-item\" href=\"{{ path('app_UpdateReply', { discussionId: Discussion.id ,replyId:Reply.id }) }}\">Modify</a></li>
                        <li><a class=\"dropdown-item text-danger\" href=\"{{ path('app_deleteReply', { discussionId: Discussion.id,replyId:Reply.id}) }}\">Delete</a></li>
                    </ul>
                </div>
            </div>
            <p class=\"mt-3\">{{ Reply.content }}</p>
    
            <!-- Buttons for Reply -->
            <div class=\"d-flex gap-2 mt-3\">
                <button class=\"btn btn-outline-primary btn-sm\">
                    <small>{{ Reply.likes }}</small>
                    <a class=\"text-primary\" href=\"{{ path('app_AddLikeToReply', {'id': Reply.id}) }}\">
                        <i class=\"fas fa-thumbs-up\"></i> Like
                    </a>
                </button>
                <button class=\"btn btn-outline-danger btn-sm\">
                    <small>{{ Reply.dislikes }}</small>
                    <a class=\"text-danger\" href=\"{{ path('app_AdddisLikeToReply', {'id': Reply.id}) }}\">
                        <i class=\"fas fa-thumbs-down\"></i> Dislike
                    </a>
                </button>
            </div>
        </div>
    </div>
    {%endfor%}
    <div>
        <button class=\"btn btn-outline-danger d-flex align-items-center\">
            <a class=\"\"  href=\"{{ path('app_forum')}}\">
                <i class=\"fas fa-arrow-left me-2\"></i> Go BACK
            </a>
        </button>
    </div>
    

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
", "forum_details/index.html.twig", "C:\\careera\\templates\\forum_details\\index.html.twig");
    }
}
