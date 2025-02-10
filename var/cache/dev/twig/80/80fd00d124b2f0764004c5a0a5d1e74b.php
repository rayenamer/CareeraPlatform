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
    <!-- Discussion Starter -->
    <div class=\"testimonial-item bg-light rounded p-3 mb-4\">
        <div class=\"bg-white border rounded p-4\">
            <div class=\"d-flex align-items-center\">
                <img class=\"img-fluid flex-shrink-0 rounded\" src=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/testimonial-1.jpg"), "html", null, true);
        yield "\" style=\"width: 45px; height: 45px;\">
                <div class=\"ps-3\">
                    <h6 class=\"fw-bold mb-1\">Dorra MAAROUF</h6>
                    <small>Professeur d'anglais</small>
                </div>
            </div>
            
            <div class=\"resource-feedback\">
                <h6>Un Outil Essentiel pour Réussir</h6>
                <p class=\"mt-3\">
                Je me sens beaucoup plus confiant dans ma recherche grâce aux ressources disponibles sur la plateforme 
                (articles, conseils d'experts, webinaires). Elle est super utile et je recommande vivement aux étudiants 
                et jeunes professionnels de l'utiliser.
                </p>
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
                    <i class=\"fas fa-reply\"></i> Reply
                </button>
            </div>
        </div>
    </div>

    <!-- Reply 1 -->
    <div class=\"testimonial-item bg-light rounded p-3 mb-4 ms-5\">
        <div class=\"bg-white border rounded p-4\">
            <div class=\"d-flex align-items-center\">
                <img class=\"img-fluid flex-shrink-0 rounded\" src=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/testimonial-2.jpg"), "html", null, true);
        yield "\" style=\"width: 45px; height: 45px;\">
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
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/testimonial-3.jpg"), "html", null, true);
        yield "\" style=\"width: 45px; height: 45px;\">
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
    <div class=\"testimonial-item bg-light rounded p-3 mb-4\">
        <div class=\"bg-white border rounded p-4\">
            <h5 class=\"fw-bold mb-3\">Start a New Discussion</h5>
            <form action=\"\" method=\"\">
                <div class=\"mb-3\">
                    <label for=\"discussionTitle\" class=\"form-label\">Title</label>
                    <input type=\"text\" class=\"form-control\" id=\"discussionTitle\" name=\"discussionTitle\" placeholder=\"Enter discussion title\" required>
                </div>
                <div class=\"mb-3\">
                    <label for=\"discussionContent\" class=\"form-label\">Content</label>
                    <textarea class=\"form-control\" id=\"discussionContent\" name=\"discussionContent\" rows=\"4\" placeholder=\"Write your discussion here...\" required></textarea>
                </div>
                <div class=\"d-flex justify-content-end\">
                    <button type=\"submit\" class=\"btn btn-primary\">
                        <i class=\"fas fa-paper-plane\"></i> Submit
                    </button>
                </div>
            </form>
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
        return array (  172 => 70,  145 => 46,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Forum Discussion{% endblock %}

{% block body %}
<div class=\"container mt-5\">
    <!-- Existing Discussions -->
    <!-- Discussion Starter -->
    <div class=\"testimonial-item bg-light rounded p-3 mb-4\">
        <div class=\"bg-white border rounded p-4\">
            <div class=\"d-flex align-items-center\">
                <img class=\"img-fluid flex-shrink-0 rounded\" src=\"{{ asset('img/testimonial-1.jpg') }}\" style=\"width: 45px; height: 45px;\">
                <div class=\"ps-3\">
                    <h6 class=\"fw-bold mb-1\">Dorra MAAROUF</h6>
                    <small>Professeur d'anglais</small>
                </div>
            </div>
            
            <div class=\"resource-feedback\">
                <h6>Un Outil Essentiel pour Réussir</h6>
                <p class=\"mt-3\">
                Je me sens beaucoup plus confiant dans ma recherche grâce aux ressources disponibles sur la plateforme 
                (articles, conseils d'experts, webinaires). Elle est super utile et je recommande vivement aux étudiants 
                et jeunes professionnels de l'utiliser.
                </p>
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
                    <i class=\"fas fa-reply\"></i> Reply
                </button>
            </div>
        </div>
    </div>

    <!-- Reply 1 -->
    <div class=\"testimonial-item bg-light rounded p-3 mb-4 ms-5\">
        <div class=\"bg-white border rounded p-4\">
            <div class=\"d-flex align-items-center\">
                <img class=\"img-fluid flex-shrink-0 rounded\" src=\"{{ asset('img/testimonial-2.jpg') }}\" style=\"width: 45px; height: 45px;\">
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
                <img class=\"img-fluid flex-shrink-0 rounded\" src=\"{{ asset('img/testimonial-3.jpg') }}\" style=\"width: 45px; height: 45px;\">
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
    <div class=\"testimonial-item bg-light rounded p-3 mb-4\">
        <div class=\"bg-white border rounded p-4\">
            <h5 class=\"fw-bold mb-3\">Start a New Discussion</h5>
            <form action=\"\" method=\"\">
                <div class=\"mb-3\">
                    <label for=\"discussionTitle\" class=\"form-label\">Title</label>
                    <input type=\"text\" class=\"form-control\" id=\"discussionTitle\" name=\"discussionTitle\" placeholder=\"Enter discussion title\" required>
                </div>
                <div class=\"mb-3\">
                    <label for=\"discussionContent\" class=\"form-label\">Content</label>
                    <textarea class=\"form-control\" id=\"discussionContent\" name=\"discussionContent\" rows=\"4\" placeholder=\"Write your discussion here...\" required></textarea>
                </div>
                <div class=\"d-flex justify-content-end\">
                    <button type=\"submit\" class=\"btn btn-primary\">
                        <i class=\"fas fa-paper-plane\"></i> Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
{% endblock %}", "forum/index.html.twig", "C:\\Users\\User\\Desktop\\CareeraPlatform\\templates\\forum\\index.html.twig");
    }
}
