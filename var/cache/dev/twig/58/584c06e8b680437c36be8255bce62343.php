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

/* evenements/ajoutevent.html.twig */
class __TwigTemplate_6bf6ab3bd11c51b1dd134e1a6406606a extends Template
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
            'navbar' => [$this, 'block_navbar'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenements/ajoutevent.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenements/ajoutevent.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "evenements/ajoutevent.html.twig", 1);
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

        yield "Ajouter un événement";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 5
        yield "        <!-- Navbar Start -->
        <div class=\"container-fluid nav-bar bg-transparent\">
            <nav class=\"navbar navbar-expand-lg bg-white navbar-light py-0 px-3\">
                <a href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"navbar-brand d-flex align-items-center text-center\">
                    
                    <img class=\"img-fluid\" src=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/transparentcareera.png"), "html", null, true);
        yield "\" alt=\"Icon\" style=\"width: 150px; height: 100px;\">
                </a>
                <button type=\"button\" class=\"navbar-toggler\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                    <div class=\"navbar-nav ms-auto\">
                        <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"nav-item nav-link active\">Acceuil</a>
                        <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offremod");
        yield "\" class=\"nav-item nav-link\">Offres d'emploi</a>
                        <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event");
        yield "\" class=\"nav-item nav-link\">Evénements</a>
                        <a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offrefrelencer_index");
        yield "\" class=\"nav-item nav-link\">Mission freelance</a>
                        <a href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("discussion_stats");
        yield "\" class=\"nav-item nav-link\">Communication</a>
                        <a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chatbot_page");
        yield "\" class=\"nav-item nav-link ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "request", [], "any", false, false, false, 22), "get", ["_route"], "method", false, false, false, 22) == "chatbot_page")) {
            yield "active";
        }
        yield "\">
                            <i class=\"fa-solid fa-robot\"></i>  
                        </a>
                    </div>
                     <div class=\"dropdown\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            <i class=\"fa-solid fa-user-circle fa-2x\"></i>
                        </a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                            <li><a class=\"dropdown-item\" href=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profilemoderateur");
        yield "\">Profile</a></li>
                            <li>
                                <a class=\"dropdown-item\" href=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">Logout</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </nav>
        </div>
        <!-- Navbar End -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 44
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

        // line 45
        yield "<div class=\"container my-5\">
    <h1 class=\"text-center mb-4 text-primary fw-bold\">Créer un nouvel événement</h1>
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8 col-lg-6\">
            <div class=\"card shadow-sm p-4 wow fadeInUp\" data-wow-delay=\"0.5s\">
                <p class=\"text-muted text-center mb-4\">Remplissez les détails ci-dessous pour ajouter votre événement.</p>
                
                ";
        // line 52
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 52, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "needs-validation"]]);
        yield "
                <div class=\"row g-3\">
                    <!-- Nom -->
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 57, $this->source); })()), "nom", [], "any", false, false, false, 57), 'row', ["attr" => ["class" => "form-control border-primary-subtle", "placeholder" => "Nom de l'événement", "required" => "required"]]);
        yield "
                            <label for=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 58, $this->source); })()), "nom", [], "any", false, false, false, 58), "vars", [], "any", false, false, false, 58), "id", [], "any", false, false, false, 58), "html", null, true);
        yield "\"><span class=\"text-danger\">*</span></label>
                        </div>
                    </div>

                    <!-- Date -->
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 65, $this->source); })()), "date", [], "any", false, false, false, 65), 'row', ["attr" => ["class" => "form-control border-primary-subtle", "placeholder" => "Date", "required" => "required"]]);
        yield "
                            <label for=\"";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 66, $this->source); })()), "date", [], "any", false, false, false, 66), "vars", [], "any", false, false, false, 66), "id", [], "any", false, false, false, 66), "html", null, true);
        yield "\"> <span class=\"text-danger\">*</span></label>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class=\"col-12\">
                        <div class=\"form-floating\">
                            ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 73, $this->source); })()), "description", [], "any", false, false, false, 73), 'row', ["attr" => ["class" => "form-control border-primary-subtle", "placeholder" => "Description", "rows" => "6", "required" => "required"]]);
        yield "
                            <label for=\"";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 74, $this->source); })()), "description", [], "any", false, false, false, 74), "vars", [], "any", false, false, false, 74), "id", [], "any", false, false, false, 74), "html", null, true);
        yield "\"><span class=\"text-danger\">*</span></label>
                        </div>
                    </div>

                    <!-- Lieu -->
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            ";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 81, $this->source); })()), "lieu", [], "any", false, false, false, 81), 'row', ["attr" => ["class" => "form-control border-primary-subtle", "placeholder" => "Lieu", "required" => "required"]]);
        yield "
                            <label for=\"";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 82, $this->source); })()), "lieu", [], "any", false, false, false, 82), "vars", [], "any", false, false, false, 82), "id", [], "any", false, false, false, 82), "html", null, true);
        yield "\"> <span class=\"text-danger\">*</span></label>
                        </div>
                    </div>

                    <!-- Type d'événement -->
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            ";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 89, $this->source); })()), "TypeEvent", [], "any", false, false, false, 89), 'row', ["attr" => ["class" => "form-select border-primary-subtle", "placeholder" => "Type d'événement"]]);
        yield "
                            <label for=\"";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 90, $this->source); })()), "TypeEvent", [], "any", false, false, false, 90), "vars", [], "any", false, false, false, 90), "id", [], "any", false, false, false, 90), "html", null, true);
        yield "\"></label>
                        </div>
                    </div>

                    <!-- URL Image Cloudinary -->
                    <div class=\"col-12\">
                        <div class=\"form-floating\">
                            ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 97, $this->source); })()), "imageUrl", [], "any", false, false, false, 97), 'row', ["attr" => ["class" => "form-control border-primary-subtle", "placeholder" => "URL de l'image "]]);
        yield "
                            <label for=\"";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 98, $this->source); })()), "imageUrl", [], "any", false, false, false, 98), "vars", [], "any", false, false, false, 98), "id", [], "any", false, false, false, 98), "html", null, true);
        yield "\"></label>
                        </div>
                    </div>

                    <!-- Disponibilité -->
                    <div class=\"col-12\">
                        <div class=\"form-check form-switch\">
                            ";
        // line 105
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 105, $this->source); })()), "disponibilite", [], "any", false, false, false, 105), 'row', ["attr" => ["class" => "form-check-input"]]);
        yield "
                            <label for=\"";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 106, $this->source); })()), "disponibilite", [], "any", false, false, false, 106), "vars", [], "any", false, false, false, 106), "id", [], "any", false, false, false, 106), "html", null, true);
        yield "\" class=\"form-check-label fw-medium\"></label>
                        </div>
                    </div>

                    <!-- Bouton Soumettre -->
                    <div class=\"col-12 text-center mt-4\">
                        <button class=\"btn btn-success w-50 py-2 rounded-pill fw-semibold\" type=\"submit\">
                            <i class=\"fas fa-save me-2\"></i> Enregistrer l'événement
                        </button>
                    </div>
                </div>
                ";
        // line 117
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 117, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>
</div>

<!-- Inclure FontAwesome pour les icônes (si non déjà inclus dans base.html.twig) -->
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\">
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
        return "evenements/ajoutevent.html.twig";
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
        return array (  315 => 117,  301 => 106,  297 => 105,  287 => 98,  283 => 97,  273 => 90,  269 => 89,  259 => 82,  255 => 81,  245 => 74,  241 => 73,  231 => 66,  227 => 65,  217 => 58,  213 => 57,  205 => 52,  196 => 45,  183 => 44,  162 => 33,  157 => 31,  141 => 22,  137 => 21,  133 => 20,  129 => 19,  125 => 18,  121 => 17,  111 => 10,  106 => 8,  101 => 5,  88 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ajouter un événement{% endblock %}
{% block navbar %}
        <!-- Navbar Start -->
        <div class=\"container-fluid nav-bar bg-transparent\">
            <nav class=\"navbar navbar-expand-lg bg-white navbar-light py-0 px-3\">
                <a href=\"{{ path('app_home') }}\" class=\"navbar-brand d-flex align-items-center text-center\">
                    
                    <img class=\"img-fluid\" src=\"{{ asset('img/transparentcareera.png') }}\" alt=\"Icon\" style=\"width: 150px; height: 100px;\">
                </a>
                <button type=\"button\" class=\"navbar-toggler\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                    <div class=\"navbar-nav ms-auto\">
                        <a href=\"{{ path('app_home') }}\" class=\"nav-item nav-link active\">Acceuil</a>
                        <a href=\"{{ path('app_offremod') }}\" class=\"nav-item nav-link\">Offres d'emploi</a>
                        <a href=\"{{ path('app_event') }}\" class=\"nav-item nav-link\">Evénements</a>
                        <a href=\"{{ path('app_offrefrelencer_index') }}\" class=\"nav-item nav-link\">Mission freelance</a>
                        <a href=\"{{ path('discussion_stats') }}\" class=\"nav-item nav-link\">Communication</a>
                        <a href=\"{{ path('chatbot_page') }}\" class=\"nav-item nav-link {% if app.request.get('_route') == 'chatbot_page' %}active{% endif %}\">
                            <i class=\"fa-solid fa-robot\"></i>  
                        </a>
                    </div>
                     <div class=\"dropdown\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            <i class=\"fa-solid fa-user-circle fa-2x\"></i>
                        </a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                            <li><a class=\"dropdown-item\" href=\"{{ path('app_profilemoderateur') }}\">Profile</a></li>
                            <li>
                                <a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\">Logout</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </nav>
        </div>
        <!-- Navbar End -->
{% endblock %}

{% block body %}
<div class=\"container my-5\">
    <h1 class=\"text-center mb-4 text-primary fw-bold\">Créer un nouvel événement</h1>
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8 col-lg-6\">
            <div class=\"card shadow-sm p-4 wow fadeInUp\" data-wow-delay=\"0.5s\">
                <p class=\"text-muted text-center mb-4\">Remplissez les détails ci-dessous pour ajouter votre événement.</p>
                
                {{ form_start(addform, {'attr': {'novalidate': 'novalidate', 'class': 'needs-validation'}}) }}
                <div class=\"row g-3\">
                    <!-- Nom -->
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            {{ form_row(addform.nom, {'attr': {'class': 'form-control border-primary-subtle', 'placeholder': 'Nom de l\\'événement', 'required': 'required'}}) }}
                            <label for=\"{{ addform.nom.vars.id }}\"><span class=\"text-danger\">*</span></label>
                        </div>
                    </div>

                    <!-- Date -->
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            {{ form_row(addform.date, {'attr': {'class': 'form-control border-primary-subtle', 'placeholder': 'Date', 'required': 'required'}}) }}
                            <label for=\"{{ addform.date.vars.id }}\"> <span class=\"text-danger\">*</span></label>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class=\"col-12\">
                        <div class=\"form-floating\">
                            {{ form_row(addform.description, {'attr': {'class': 'form-control border-primary-subtle', 'placeholder': 'Description', 'rows': '6', 'required': 'required'}}) }}
                            <label for=\"{{ addform.description.vars.id }}\"><span class=\"text-danger\">*</span></label>
                        </div>
                    </div>

                    <!-- Lieu -->
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            {{ form_row(addform.lieu, {'attr': {'class': 'form-control border-primary-subtle', 'placeholder': 'Lieu', 'required': 'required'}}) }}
                            <label for=\"{{ addform.lieu.vars.id }}\"> <span class=\"text-danger\">*</span></label>
                        </div>
                    </div>

                    <!-- Type d'événement -->
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            {{ form_row(addform.TypeEvent, {'attr': {'class': 'form-select border-primary-subtle', 'placeholder': 'Type d\\'événement'}}) }}
                            <label for=\"{{ addform.TypeEvent.vars.id }}\"></label>
                        </div>
                    </div>

                    <!-- URL Image Cloudinary -->
                    <div class=\"col-12\">
                        <div class=\"form-floating\">
                            {{ form_row(addform.imageUrl, {'attr': {'class': 'form-control border-primary-subtle', 'placeholder': 'URL de l\\'image '}}) }}
                            <label for=\"{{ addform.imageUrl.vars.id }}\"></label>
                        </div>
                    </div>

                    <!-- Disponibilité -->
                    <div class=\"col-12\">
                        <div class=\"form-check form-switch\">
                            {{ form_row(addform.disponibilite, {'attr': {'class': 'form-check-input'}}) }}
                            <label for=\"{{ addform.disponibilite.vars.id }}\" class=\"form-check-label fw-medium\"></label>
                        </div>
                    </div>

                    <!-- Bouton Soumettre -->
                    <div class=\"col-12 text-center mt-4\">
                        <button class=\"btn btn-success w-50 py-2 rounded-pill fw-semibold\" type=\"submit\">
                            <i class=\"fas fa-save me-2\"></i> Enregistrer l'événement
                        </button>
                    </div>
                </div>
                {{ form_end(addform) }}
            </div>
        </div>
    </div>
</div>

<!-- Inclure FontAwesome pour les icônes (si non déjà inclus dans base.html.twig) -->
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\">
{% endblock %}", "evenements/ajoutevent.html.twig", "C:\\careera\\templates\\evenements\\ajoutevent.html.twig");
    }
}
