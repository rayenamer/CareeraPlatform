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
class __TwigTemplate_a4790955f1dbd7e699da7bbc6b104730 extends Template
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

        yield "Hello MessageController!";
        
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
<div class=\"chat-container\">
    <h2>Conversation between 2 users</h2>

    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 10, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            yield "        <div class=\"d-flex align-items-center ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["message"], "messager1", [], "any", false, false, false, 11) == (isset($context["messager1Id"]) || array_key_exists("messager1Id", $context) ? $context["messager1Id"] : (function () { throw new RuntimeError('Variable "messager1Id" does not exist.', 11, $this->source); })()))) {
                yield "sent";
            } else {
                yield "received";
            }
            yield "\">
            <img class=\"img-fluid flex-shrink-0 rounded\" src=\"";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/testimonial-2.jpg"), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "messager1", [], "any", false, false, false, 12), "html", null, true);
            yield "\" style=\"width: 45px; height: 45px;\">
            <div class=\"ps-3\">
                <h6 class=\"fw-bold mb-1\">";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "messager1", [], "any", false, false, false, 14), "html", null, true);
            yield "</h6>
                <small>";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "createdAt", [], "any", false, false, false, 15), "d F H:i")), "html", null, true);
            yield "</small>
                <button class=\"btn btn-link text-muted p-0\" type=\"button\" id=\"dropdownMenuButton\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                    <i class=\"fas fa-ellipsis-v\"></i> <!-- Three dots icon -->
                </button>
                <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                    <li><a class=\"dropdown-item\" href=\"#\">Modify</a></li>
                    <li><a class=\"dropdown-item text-danger\" href=\"#\">Delete</a></li>
                </ul>
                <p class=\"mt-2\">";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "content", [], "any", false, false, false, 23), "html", null, true);
            yield "</p>
            </div>
        </div>
    ";
            $context['_iterated'] = true;
        }
        // line 28
        if (!$context['_iterated']) {
            // line 27
            yield "        <p>No messages found between these users.</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        yield "</div>
<div>
    ";
        // line 31
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["NewMessage"]) || array_key_exists("NewMessage", $context) ? $context["NewMessage"] : (function () { throw new RuntimeError('Variable "NewMessage" does not exist.', 31, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("send_message", ["messager1Id" => 42, "messager2Id" => 69]), "method" => "POST"]);
        // line 34
        yield "
        <div class=\"mb-3\">
            ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["NewMessage"]) || array_key_exists("NewMessage", $context) ? $context["NewMessage"] : (function () { throw new RuntimeError('Variable "NewMessage" does not exist.', 36, $this->source); })()), "content", [], "any", false, false, false, 36), 'label');
        yield "
            ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["NewMessage"]) || array_key_exists("NewMessage", $context) ? $context["NewMessage"] : (function () { throw new RuntimeError('Variable "NewMessage" does not exist.', 37, $this->source); })()), "content", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control", "rows" => 4, "placeholder" => "Write your discussion here..."]]);
        // line 43
        yield "
            <div class=\"text-danger\">
                ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["NewMessage"]) || array_key_exists("NewMessage", $context) ? $context["NewMessage"] : (function () { throw new RuntimeError('Variable "NewMessage" does not exist.', 45, $this->source); })()), "content", [], "any", false, false, false, 45), 'errors');
        yield "
            </div>
        </div>

        <button type=\"submit\" class=\"btn btn-primary\">Send Message</button>
    ";
        // line 50
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["NewMessage"]) || array_key_exists("NewMessage", $context) ? $context["NewMessage"] : (function () { throw new RuntimeError('Variable "NewMessage" does not exist.', 50, $this->source); })()), 'form_end');
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
        return array (  187 => 50,  179 => 45,  175 => 43,  173 => 37,  169 => 36,  165 => 34,  163 => 31,  159 => 29,  152 => 27,  150 => 28,  142 => 23,  131 => 15,  127 => 14,  120 => 12,  111 => 11,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello MessageController!{% endblock %}

{% block body %}

<div class=\"chat-container\">
    <h2>Conversation between 2 users</h2>

    {% for message in messages %}
        <div class=\"d-flex align-items-center {% if message.messager1 == messager1Id %}sent{% else %}received{% endif %}\">
            <img class=\"img-fluid flex-shrink-0 rounded\" src=\"{{ asset('img/testimonial-2.jpg') }}\" alt=\"{{ message.messager1 }}\" style=\"width: 45px; height: 45px;\">
            <div class=\"ps-3\">
                <h6 class=\"fw-bold mb-1\">{{ message.messager1 }}</h6>
                <small>{{ message.createdAt|date('d F H:i')|lower }}</small>
                <button class=\"btn btn-link text-muted p-0\" type=\"button\" id=\"dropdownMenuButton\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                    <i class=\"fas fa-ellipsis-v\"></i> <!-- Three dots icon -->
                </button>
                <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                    <li><a class=\"dropdown-item\" href=\"#\">Modify</a></li>
                    <li><a class=\"dropdown-item text-danger\" href=\"#\">Delete</a></li>
                </ul>
                <p class=\"mt-2\">{{ message.content }}</p>
            </div>
        </div>
    {% else %}
        <p>No messages found between these users.</p>
    {% endfor %}
</div>
<div>
    {{ form_start(NewMessage, {
        'action': path('send_message', {'messager1Id': 42, 'messager2Id': 69}),
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
", "message/index.html.twig", "C:\\Users\\User\\Desktop\\CareeraPlatform\\templates\\message\\index.html.twig");
    }
}
