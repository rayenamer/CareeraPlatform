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
class __TwigTemplate_a81e7ee3b5212e4722cdf0fca7cc098a extends Template
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["Discussion"], "UserPhoto", [], "any", false, false, false, 12))), "html", null, true);
            yield "\" style=\"width: 45px; height: 45px;\">  
                <div class=\"ps-3\">
                    <h6 class=\"fw-bold mb-1\">";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["Discussion"], "UserName", [], "any", false, false, false, 14), "html", null, true);
            yield "</h6>
                    <small>";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["Discussion"], "CreatedAt", [], "any", false, false, false, 15), "d F H:i")), "html", null, true);
            yield "</small>

                    <button class=\"btn btn-link text-muted p-0\" type=\"button\" id=\"dropdownMenuButton\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        <i class=\"fas fa-ellipsis-v\"></i> <!-- Three dots icon -->
                    </button>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                        <li><a class=\"dropdown-item\" href=\"";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_updateDiscussion", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["Discussion"], "id", [], "any", false, false, false, 21)]), "html", null, true);
            yield "\">Modify</a></li>
                        <li><a class=\"dropdown-item text-danger\" href=\"";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deleteDiscussion", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["Discussion"], "id", [], "any", false, false, false, 22)]), "html", null, true);
            yield "\">Delete</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"resource-feedback\">
                <h6>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["Discussion"], "title", [], "any", false, false, false, 27), "html", null, true);
            yield "</h6>
                <p class=\"mt-3\">";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["Discussion"], "content", [], "any", false, false, false, 28), "html", null, true);
            yield "</p>
            </div>

            <div class=\"d-flex gap-2 mt-3\">
                <button class=\"btn btn-outline-primary btn-sm\">
                    <a class=\"text-primary\" href=\"";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_AddLike", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["Discussion"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            yield "\">
                        <i class=\"fas fa-thumbs-up\"></i> Like
                    </a>
                    <small>";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["Discussion"], "likes", [], "any", false, false, false, 36), "html", null, true);
            yield "</small>
                </button>
                
                <!-- Dislike Button -->
                <button class=\"btn btn-outline-danger btn-sm\">
                    <a class=\"text-danger\" href=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_AddDisLike", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["Discussion"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            yield "\">
                        <i class=\"fas fa-thumbs-down\"></i> Dislike
                    </a>
                    <small>";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["Discussion"], "dislikes", [], "any", false, false, false, 44), "html", null, true);
            yield "</small>
                </button>
                
                <button class=\"btn btn-outline-secondary btn-sm\">
                    <a href=\"";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forum_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["Discussion"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            yield "\">
                        <i class=\"fas fa-reply\"></i> Reply
                    </a>
                </button>
            </div>

            <!-- Replies -->
            ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["Discussion"], "replies", [], "any", false, false, false, 55));
            foreach ($context['_seq'] as $context["_key"] => $context["Reply"]) {
                // line 56
                yield "                <div class=\"testimonial-item bg-light rounded p-3 mb-4 ms-5\">
                    <div class=\"bg-white border rounded p-4\">
                        <div class=\"d-flex align-items-center\">
                            <img class=\"img-fluid flex-shrink-0 rounded\" src=\"";
                // line 59
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["Reply"], "UserPhoto", [], "any", false, false, false, 59))), "html", null, true);
                yield "\" style=\"width: 45px; height: 45px;\"> 
                            <div class=\"ps-3\">
                                 <h6 class=\"fw-bold mb-1\">";
                // line 61
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["Reply"], "UserName", [], "any", false, false, false, 61), "html", null, true);
                yield "</h6>
                                <small>";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["Reply"], "CreatedAt", [], "any", false, false, false, 62), "d F")), "html", null, true);
                yield "</small>
                            </div>
                        </div>
                        <p class=\"mt-3\">";
                // line 65
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["Reply"], "content", [], "any", false, false, false, 65), "html", null, true);
                yield "</p>
                        <div class=\"d-flex gap-2 mt-3\">
                            <button class=\"btn btn-outline-primary btn-sm\">
                                <small>";
                // line 68
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["Reply"], "likes", [], "any", false, false, false, 68), "html", null, true);
                yield "</small>
                                <a class=\"text-primary\" href=\"";
                // line 69
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_AddLikeToReply", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["Reply"], "id", [], "any", false, false, false, 69)]), "html", null, true);
                yield "\">
                                    <i class=\"fas fa-thumbs-up\"></i> Like
                                </a>
                            </button>
                            <button class=\"btn btn-outline-danger btn-sm\">
                                <small>";
                // line 74
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["Reply"], "dislikes", [], "any", false, false, false, 74), "html", null, true);
                yield "</small>
                                <a class=\"text-danger\" href=\"";
                // line 75
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_AdddisLikeToReply", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["Reply"], "id", [], "any", false, false, false, 75)]), "html", null, true);
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
            // line 83
            yield "        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['Discussion'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        yield "

    <!-- Section to Add a New Discussion -->
    <div class=\"testimonial-item bg-light rounded p-3 mb-4\">
        <div class=\"bg-white border rounded p-4\">
            <h5 class=\"fw-bold mb-3\">Start a New Discussion</h5>
        
            ";
        // line 93
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["NewDiscussion"]) || array_key_exists("NewDiscussion", $context) ? $context["NewDiscussion"] : (function () { throw new RuntimeError('Variable "NewDiscussion" does not exist.', 93, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_addDiscussion")]);
        yield "
        
            <div class=\"mb-3\">
                ";
        // line 96
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["NewDiscussion"]) || array_key_exists("NewDiscussion", $context) ? $context["NewDiscussion"] : (function () { throw new RuntimeError('Variable "NewDiscussion" does not exist.', 96, $this->source); })()), "title", [], "any", false, false, false, 96), 'label');
        yield "
                ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["NewDiscussion"]) || array_key_exists("NewDiscussion", $context) ? $context["NewDiscussion"] : (function () { throw new RuntimeError('Variable "NewDiscussion" does not exist.', 97, $this->source); })()), "title", [], "any", false, false, false, 97), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Enter discussion title"]]);
        yield "
                <div class=\"text-danger\">
                    ";
        // line 99
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["NewDiscussion"]) || array_key_exists("NewDiscussion", $context) ? $context["NewDiscussion"] : (function () { throw new RuntimeError('Variable "NewDiscussion" does not exist.', 99, $this->source); })()), "title", [], "any", false, false, false, 99), 'errors');
        yield "
                </div>
            </div>
        
            <div class=\"mb-3\">
                ";
        // line 104
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["NewDiscussion"]) || array_key_exists("NewDiscussion", $context) ? $context["NewDiscussion"] : (function () { throw new RuntimeError('Variable "NewDiscussion" does not exist.', 104, $this->source); })()), "content", [], "any", false, false, false, 104), 'label');
        yield "
                ";
        // line 105
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["NewDiscussion"]) || array_key_exists("NewDiscussion", $context) ? $context["NewDiscussion"] : (function () { throw new RuntimeError('Variable "NewDiscussion" does not exist.', 105, $this->source); })()), "content", [], "any", false, false, false, 105), 'widget', ["attr" => ["class" => "form-control", "rows" => 4, "placeholder" => "Write your discussion here..."]]);
        yield "
                <div class=\"text-danger\">
                    ";
        // line 107
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["NewDiscussion"]) || array_key_exists("NewDiscussion", $context) ? $context["NewDiscussion"] : (function () { throw new RuntimeError('Variable "NewDiscussion" does not exist.', 107, $this->source); })()), "content", [], "any", false, false, false, 107), 'errors');
        yield "
                </div>
            </div>
        
        
            <div class=\"d-flex justify-content-end\">
                ";
        // line 113
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["NewDiscussion"]) || array_key_exists("NewDiscussion", $context) ? $context["NewDiscussion"] : (function () { throw new RuntimeError('Variable "NewDiscussion" does not exist.', 113, $this->source); })()), "submit", [], "any", false, false, false, 113), 'widget', ["attr" => ["class" => "btn btn-primary"]]);
        yield "
            </div>
        
            ";
        // line 116
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["NewDiscussion"]) || array_key_exists("NewDiscussion", $context) ? $context["NewDiscussion"] : (function () { throw new RuntimeError('Variable "NewDiscussion" does not exist.', 116, $this->source); })()), 'form_end');
        yield "
        </div>
        
    </div>
</div>


<script>
    setTimeout(function() {
        window.location.reload();
    }, 300000); // 5 minute fel milliseconds
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
        return array (  316 => 116,  310 => 113,  301 => 107,  296 => 105,  292 => 104,  284 => 99,  279 => 97,  275 => 96,  269 => 93,  260 => 86,  252 => 83,  238 => 75,  234 => 74,  226 => 69,  222 => 68,  216 => 65,  210 => 62,  206 => 61,  201 => 59,  196 => 56,  192 => 55,  182 => 48,  175 => 44,  169 => 41,  161 => 36,  155 => 33,  147 => 28,  143 => 27,  135 => 22,  131 => 21,  122 => 15,  118 => 14,  113 => 12,  108 => 9,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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
                <img class=\"img-fluid flex-shrink-0 rounded\" src=\"{{ asset('uploads/images/' ~ Discussion.UserPhoto) }}\" style=\"width: 45px; height: 45px;\">  
                <div class=\"ps-3\">
                    <h6 class=\"fw-bold mb-1\">{{ Discussion.UserName }}</h6>
                    <small>{{ Discussion.CreatedAt|date('d F H:i')|lower }}</small>

                    <button class=\"btn btn-link text-muted p-0\" type=\"button\" id=\"dropdownMenuButton\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        <i class=\"fas fa-ellipsis-v\"></i> <!-- Three dots icon -->
                    </button>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                        <li><a class=\"dropdown-item\" href=\"{{ path('app_updateDiscussion', { id: Discussion.id }) }}\">Modify</a></li>
                        <li><a class=\"dropdown-item text-danger\" href=\"{{ path('app_deleteDiscussion', { id: Discussion.id }) }}\">Delete</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"resource-feedback\">
                <h6>{{ Discussion.title }}</h6>
                <p class=\"mt-3\">{{ Discussion.content }}</p>
            </div>

            <div class=\"d-flex gap-2 mt-3\">
                <button class=\"btn btn-outline-primary btn-sm\">
                    <a class=\"text-primary\" href=\"{{ path('app_AddLike', {'id': Discussion.id}) }}\">
                        <i class=\"fas fa-thumbs-up\"></i> Like
                    </a>
                    <small>{{ Discussion.likes }}</small>
                </button>
                
                <!-- Dislike Button -->
                <button class=\"btn btn-outline-danger btn-sm\">
                    <a class=\"text-danger\" href=\"{{ path('app_AddDisLike', {'id': Discussion.id}) }}\">
                        <i class=\"fas fa-thumbs-down\"></i> Dislike
                    </a>
                    <small>{{ Discussion.dislikes }}</small>
                </button>
                
                <button class=\"btn btn-outline-secondary btn-sm\">
                    <a href=\"{{ path('app_forum_details', { id: Discussion.id }) }}\">
                        <i class=\"fas fa-reply\"></i> Reply
                    </a>
                </button>
            </div>

            <!-- Replies -->
            {% for Reply in Discussion.replies %}
                <div class=\"testimonial-item bg-light rounded p-3 mb-4 ms-5\">
                    <div class=\"bg-white border rounded p-4\">
                        <div class=\"d-flex align-items-center\">
                            <img class=\"img-fluid flex-shrink-0 rounded\" src=\"{{ asset('uploads/images/' ~ Reply.UserPhoto) }}\" style=\"width: 45px; height: 45px;\"> 
                            <div class=\"ps-3\">
                                 <h6 class=\"fw-bold mb-1\">{{ Reply.UserName }}</h6>
                                <small>{{ Reply.CreatedAt|date('d F')|lower }}</small>
                            </div>
                        </div>
                        <p class=\"mt-3\">{{ Reply.content }}</p>
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
            {% endfor %}
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


<script>
    setTimeout(function() {
        window.location.reload();
    }, 300000); // 5 minute fel milliseconds
</script>

{% endblock %}
", "forum/index.html.twig", "C:\\careera\\templates\\forum\\index.html.twig");
    }
}
