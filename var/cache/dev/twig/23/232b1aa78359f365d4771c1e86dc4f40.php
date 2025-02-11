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
class __TwigTemplate_991ee50a1415f3e4084304b1da9bbfa7 extends Template
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

    <!-- Reply 1 -->
    <div class=\"testimonial-item bg-light rounded p-3 mb-4 ms-5\">
        <div class=\"bg-white border rounded p-4\">
            <div class=\"d-flex align-items-center\">
                <img class=\"img-fluid flex-shrink-0 rounded\" src=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/testimonial-2.jpg"), "html", null, true);
        yield "\" alt=\"Jean Dupont\" style=\"width: 45px; height: 45px;\">
                <div class=\"ps-3\">
                    <h6 class=\"fw-bold mb-1\">Jean Dupont</h6>
                    <small>Étudiant en informatique</small>
                </div>
            </div>
            <p class=\"mt-3\">Je suis tout à fait d'accord avec vous, Dorra ! Les webinaires sont particulièrement utiles pour approfondir mes connaissances. Merci pour la recommandation !</p>
            
            <!-- Buttons for Reply 1 -->
            <div class=\"d-flex gap-2 mt-3\">
                <button class=\"btn btn-outline-primary btn-sm\">
                    <i class=\"fas fa-thumbs-up\"></i> Like
                </button>
                <button class=\"btn btn-outline-danger btn-sm\">
                    <i class=\"fas fa-thumbs-down\"></i> Dislike
                </button>
            </div>
        </div>
    </div>

    <!-- Reply 2 -->
    <div class=\"testimonial-item bg-light rounded p-3 mb-4 ms-5\">
        <div class=\"bg-white border rounded p-4\">
            <div class=\"d-flex align-items-center\">
                <img class=\"img-fluid flex-shrink-0 rounded\" src=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/testimonial-3.jpg"), "html", null, true);
        yield "\" alt=\"Marie Curie\" style=\"width: 45px; height: 45px;\">
                <div class=\"ps-3\">
                    <h6 class=\"fw-bold mb-1\">Marie Curie</h6>
                    <small>Jeune professionnelle</small>
                </div>
            </div>
            <p class=\"mt-3\">Les articles sont très bien rédigés et faciles à comprendre. J'ai appris beaucoup de choses grâce à cette plateforme. Merci pour le partage !</p>
            
            <!-- Buttons for Reply 2 -->
            <div class=\"d-flex gap-2 mt-3\">
                <button class=\"btn btn-outline-primary btn-sm\">
                    <i class=\"fas fa-thumbs-up\"></i> Like
                </button>
                <button class=\"btn btn-outline-danger btn-sm\">
                    <i class=\"fas fa-thumbs-down\"></i> Dislike
                </button>
            </div>
        </div>
    </div>

    <!-- Section to Add a New Discussion Starter -->
    ";
        // line 60
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["NewReply"]) || array_key_exists("NewReply", $context) ? $context["NewReply"] : (function () { throw new RuntimeError('Variable "NewReply" does not exist.', 60, $this->source); })()), 'form_start');
        yield "
        <div class=\"mb-3\">
            ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["NewReply"]) || array_key_exists("NewReply", $context) ? $context["NewReply"] : (function () { throw new RuntimeError('Variable "NewReply" does not exist.', 62, $this->source); })()), "content", [], "any", false, false, false, 62), 'label');
        yield "
            ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["NewReply"]) || array_key_exists("NewReply", $context) ? $context["NewReply"] : (function () { throw new RuntimeError('Variable "NewReply" does not exist.', 63, $this->source); })()), "content", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "form-control", "rows" => 4, "placeholder" => "Write your discussion here..."]]);
        yield "
            <div class=\"text-danger\">
                ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["NewReply"]) || array_key_exists("NewReply", $context) ? $context["NewReply"] : (function () { throw new RuntimeError('Variable "NewReply" does not exist.', 65, $this->source); })()), "content", [], "any", false, false, false, 65), 'errors');
        yield "
            </div>
        </div>

        <div class=\"d-flex justify-content-end\">
            ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["NewReply"]) || array_key_exists("NewReply", $context) ? $context["NewReply"] : (function () { throw new RuntimeError('Variable "NewReply" does not exist.', 70, $this->source); })()), "submit", [], "any", false, false, false, 70), 'widget', ["attr" => ["class" => "btn btn-primary"]]);
        yield "
        </div>

        ";
        // line 73
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["NewReply"]) || array_key_exists("NewReply", $context) ? $context["NewReply"] : (function () { throw new RuntimeError('Variable "NewReply" does not exist.', 73, $this->source); })()), 'form_end');
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
        return array (  190 => 73,  184 => 70,  176 => 65,  171 => 63,  167 => 62,  162 => 60,  138 => 39,  111 => 15,  102 => 8,  89 => 7,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    
{% endblock %}

{% block body %}
<h3>Discussion title</h3>
<h6>Discussion content</h6>

    <!-- Reply 1 -->
    <div class=\"testimonial-item bg-light rounded p-3 mb-4 ms-5\">
        <div class=\"bg-white border rounded p-4\">
            <div class=\"d-flex align-items-center\">
                <img class=\"img-fluid flex-shrink-0 rounded\" src=\"{{ asset('img/testimonial-2.jpg') }}\" alt=\"Jean Dupont\" style=\"width: 45px; height: 45px;\">
                <div class=\"ps-3\">
                    <h6 class=\"fw-bold mb-1\">Jean Dupont</h6>
                    <small>Étudiant en informatique</small>
                </div>
            </div>
            <p class=\"mt-3\">Je suis tout à fait d'accord avec vous, Dorra ! Les webinaires sont particulièrement utiles pour approfondir mes connaissances. Merci pour la recommandation !</p>
            
            <!-- Buttons for Reply 1 -->
            <div class=\"d-flex gap-2 mt-3\">
                <button class=\"btn btn-outline-primary btn-sm\">
                    <i class=\"fas fa-thumbs-up\"></i> Like
                </button>
                <button class=\"btn btn-outline-danger btn-sm\">
                    <i class=\"fas fa-thumbs-down\"></i> Dislike
                </button>
            </div>
        </div>
    </div>

    <!-- Reply 2 -->
    <div class=\"testimonial-item bg-light rounded p-3 mb-4 ms-5\">
        <div class=\"bg-white border rounded p-4\">
            <div class=\"d-flex align-items-center\">
                <img class=\"img-fluid flex-shrink-0 rounded\" src=\"{{ asset('img/testimonial-3.jpg') }}\" alt=\"Marie Curie\" style=\"width: 45px; height: 45px;\">
                <div class=\"ps-3\">
                    <h6 class=\"fw-bold mb-1\">Marie Curie</h6>
                    <small>Jeune professionnelle</small>
                </div>
            </div>
            <p class=\"mt-3\">Les articles sont très bien rédigés et faciles à comprendre. J'ai appris beaucoup de choses grâce à cette plateforme. Merci pour le partage !</p>
            
            <!-- Buttons for Reply 2 -->
            <div class=\"d-flex gap-2 mt-3\">
                <button class=\"btn btn-outline-primary btn-sm\">
                    <i class=\"fas fa-thumbs-up\"></i> Like
                </button>
                <button class=\"btn btn-outline-danger btn-sm\">
                    <i class=\"fas fa-thumbs-down\"></i> Dislike
                </button>
            </div>
        </div>
    </div>

    <!-- Section to Add a New Discussion Starter -->
    {{ form_start(NewReply) }}
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
