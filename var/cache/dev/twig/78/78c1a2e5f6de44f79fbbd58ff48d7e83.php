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

/* message/index.html.twig */
class __TwigTemplate_d3fe894796794dfd6d9ef2b94516adcd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "message/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "message/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "message/index.html.twig", 1);
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

        yield "Only Professional Conversations please";
        
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
        yield "
";
        // line 7
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 7, $this->source); })()))) {
            // line 8
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 8, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 9
                yield "        <div class=\"d-flex align-items-center\">
            <img class=\"img-fluid flex-shrink-0 rounded\" 
                 src=\"";
                // line 11
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["message"], "UserPhotoSender", [], "any", false, false, false, 11))), "html", null, true);
                yield "\" 
                 style=\"width: 45px; height: 45px;\">
            <div class=\"ps-3\"> 
                <strong>";
                // line 14
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "UserNameSender", [], "any", false, false, false, 14), "html", null, true);
                yield "</strong>  
                <small>";
                // line 15
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "createdAt", [], "any", false, false, false, 15), "d F H:i"), "html", null, true);
                yield "</small>    
                <p class=\"mt-2\">";
                // line 16
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "content", [], "any", false, false, false, 16), "html", null, true);
                yield "</p>   
            </div>
        </div>
        <!-- Fine line separating messages -->
        <hr style=\"border-top: 1px solid #ddd; margin: 10px 0;\">
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 23
            yield "    <p>Aucun message à afficher.</p>
";
        }
        // line 25
        yield "
<!-- Formulaire d'envoi de message -->
<div>
    ";
        // line 28
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["NewMessage"]) || array_key_exists("NewMessage", $context) ? $context["NewMessage"] : (function () { throw new RuntimeError('Variable "NewMessage" does not exist.', 28, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("send_message", ["messager2Id" =>         // line 29
(isset($context["messager2Id"]) || array_key_exists("messager2Id", $context) ? $context["messager2Id"] : (function () { throw new RuntimeError('Variable "messager2Id" does not exist.', 29, $this->source); })())]), "method" => "POST"]);
        // line 31
        yield "
        <div class=\"mb-3\">
            ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["NewMessage"]) || array_key_exists("NewMessage", $context) ? $context["NewMessage"] : (function () { throw new RuntimeError('Variable "NewMessage" does not exist.', 33, $this->source); })()), "content", [], "any", false, false, false, 33), 'label');
        yield "
            ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["NewMessage"]) || array_key_exists("NewMessage", $context) ? $context["NewMessage"] : (function () { throw new RuntimeError('Variable "NewMessage" does not exist.', 34, $this->source); })()), "content", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control", "rows" => 4, "placeholder" => "Write your discussion here..."]]);
        // line 40
        yield "
            <div class=\"text-danger\">
                ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["NewMessage"]) || array_key_exists("NewMessage", $context) ? $context["NewMessage"] : (function () { throw new RuntimeError('Variable "NewMessage" does not exist.', 42, $this->source); })()), "content", [], "any", false, false, false, 42), 'errors');
        yield "
            </div>
        </div>

        <button type=\"submit\" class=\"btn btn-primary\">Send Message</button>
    ";
        // line 47
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["NewMessage"]) || array_key_exists("NewMessage", $context) ? $context["NewMessage"] : (function () { throw new RuntimeError('Variable "NewMessage" does not exist.', 47, $this->source); })()), 'form_end');
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
        return "message/index.html.twig";
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
        return array (  175 => 47,  167 => 42,  163 => 40,  161 => 34,  157 => 33,  153 => 31,  151 => 29,  150 => 28,  145 => 25,  141 => 23,  128 => 16,  124 => 15,  120 => 14,  114 => 11,  110 => 9,  105 => 8,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Only Professional Conversations please{% endblock %}

{% block body %}

{% if messages is not empty %}
    {% for message in messages %}
        <div class=\"d-flex align-items-center\">
            <img class=\"img-fluid flex-shrink-0 rounded\" 
                 src=\"{{ asset('uploads/images/' ~ message.UserPhotoSender) }}\" 
                 style=\"width: 45px; height: 45px;\">
            <div class=\"ps-3\"> 
                <strong>{{ message.UserNameSender }}</strong>  
                <small>{{ message.createdAt|date('d F H:i') }}</small>    
                <p class=\"mt-2\">{{ message.content }}</p>   
            </div>
        </div>
        <!-- Fine line separating messages -->
        <hr style=\"border-top: 1px solid #ddd; margin: 10px 0;\">
    {% endfor %}
{% else %}
    <p>Aucun message à afficher.</p>
{% endif %}

<!-- Formulaire d'envoi de message -->
<div>
    {{ form_start(NewMessage, {
        'action': path('send_message', {'messager2Id': messager2Id}),
        'method': 'POST'
    }) }}
        <div class=\"mb-3\">
            {{ form_label(NewMessage.content) }}
            {{ form_widget(NewMessage.content, {
                'attr': {
                    'class': 'form-control',
                    'rows': 4,
                    'placeholder': 'Write your discussion here...'
                }
            }) }}
            <div class=\"text-danger\">
                {{ form_errors(NewMessage.content) }}
            </div>
        </div>

        <button type=\"submit\" class=\"btn btn-primary\">Send Message</button>
    {{ form_end(NewMessage) }}
</div>



{% endblock %}
", "message/index.html.twig", "C:\\careera\\templates\\message\\index.html.twig");
    }
}
