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

/* chatbot/index.html.twig */
class __TwigTemplate_07db49eb8158ce225650a98b60f6b7af extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chatbot/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chatbot/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "chatbot/index.html.twig", 1);
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

        yield "Chatbot";
        
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
        yield "<div class=\"container d-flex justify-content-center align-items-center min-vh-100\">
    <div class=\"card shadow-sm p-4\" style=\"width: 100%; max-width: 600px;\">
        <h1 class=\"mb-3 text-center\">Chatbot</h1>
        <p class=\"text-center\">Ask me anything and I will assist you with your queries!</p>

        <!-- Chatbox for the conversation -->
        <div class=\"chat-box\" id=\"chat-box\" style=\"border: 1px solid #ccc; padding: 15px; margin-bottom: 15px; height: 300px; overflow-y: auto; background-color: #f9f9f9;\"></div>

        <!-- User input section -->
        <input type=\"text\" id=\"user-question\" class=\"form-control mb-3\" placeholder=\"Ask me anything...\" />

        <!-- Button to send the message -->
        <button id=\"send-btn\" class=\"btn btn-primary w-100\">Ask</button>

        <!-- Back to home button -->
        <a href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"btn btn-secondary w-100 mt-3\">Back to Home</a>
    </div>
</div>

<script>
    document.getElementById('send-btn').addEventListener('click', function() {
        const userQuestion = document.getElementById('user-question').value;
        if (userQuestion.trim() === '') return;

        // Display the user's message
        document.getElementById('chat-box').innerHTML += `<div class=\"user-message\" style=\"color: blue; font-weight: bold;\">You: \${userQuestion}</div>`;
        
        // Send the question to the Symfony backend via AJAX (POST request)
        fetch('/chatbot', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ question: userQuestion }),
        })
        .then(response => response.json())
        .then(data => {
            const answer = data.answer || \"I don't know, but I'll learn more!\";
            // Display the chatbot's answer
            document.getElementById('chat-box').innerHTML += `<div class=\"bot-message\" style=\"color: green; font-weight: bold;\">Bot: \${answer}</div>`;
            // Clear the input field
            document.getElementById('user-question').value = '';
            // Scroll to the bottom of the chat box
            document.getElementById('chat-box').scrollTop = document.getElementById('chat-box').scrollHeight;
        })
        .catch(error => {
            console.error('Error:', error);
            alert('An error occurred. Please try again later.');
        });
    });
</script>
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
        return "chatbot/index.html.twig";
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
        return array (  117 => 21,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Chatbot{% endblock %}

{% block body %}
<div class=\"container d-flex justify-content-center align-items-center min-vh-100\">
    <div class=\"card shadow-sm p-4\" style=\"width: 100%; max-width: 600px;\">
        <h1 class=\"mb-3 text-center\">Chatbot</h1>
        <p class=\"text-center\">Ask me anything and I will assist you with your queries!</p>

        <!-- Chatbox for the conversation -->
        <div class=\"chat-box\" id=\"chat-box\" style=\"border: 1px solid #ccc; padding: 15px; margin-bottom: 15px; height: 300px; overflow-y: auto; background-color: #f9f9f9;\"></div>

        <!-- User input section -->
        <input type=\"text\" id=\"user-question\" class=\"form-control mb-3\" placeholder=\"Ask me anything...\" />

        <!-- Button to send the message -->
        <button id=\"send-btn\" class=\"btn btn-primary w-100\">Ask</button>

        <!-- Back to home button -->
        <a href=\"{{ path('app_home') }}\" class=\"btn btn-secondary w-100 mt-3\">Back to Home</a>
    </div>
</div>

<script>
    document.getElementById('send-btn').addEventListener('click', function() {
        const userQuestion = document.getElementById('user-question').value;
        if (userQuestion.trim() === '') return;

        // Display the user's message
        document.getElementById('chat-box').innerHTML += `<div class=\"user-message\" style=\"color: blue; font-weight: bold;\">You: \${userQuestion}</div>`;
        
        // Send the question to the Symfony backend via AJAX (POST request)
        fetch('/chatbot', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ question: userQuestion }),
        })
        .then(response => response.json())
        .then(data => {
            const answer = data.answer || \"I don't know, but I'll learn more!\";
            // Display the chatbot's answer
            document.getElementById('chat-box').innerHTML += `<div class=\"bot-message\" style=\"color: green; font-weight: bold;\">Bot: \${answer}</div>`;
            // Clear the input field
            document.getElementById('user-question').value = '';
            // Scroll to the bottom of the chat box
            document.getElementById('chat-box').scrollTop = document.getElementById('chat-box').scrollHeight;
        })
        .catch(error => {
            console.error('Error:', error);
            alert('An error occurred. Please try again later.');
        });
    });
</script>
{% endblock %}
", "chatbot/index.html.twig", "C:\\careera\\templates\\chatbot\\index.html.twig");
    }
}
