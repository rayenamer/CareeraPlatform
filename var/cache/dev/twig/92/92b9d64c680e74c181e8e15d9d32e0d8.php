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

/* home/index.html.twig */
class __TwigTemplate_0484d79c92a7af258ab91d25baef666b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        yield "Careera";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "        <!-- Navbar Start -->
        <div class=\"container-fluid nav-bar bg-transparent\">
            <nav class=\"navbar navbar-expand-lg bg-white navbar-light py-0 px-3\">
                <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"navbar-brand d-flex align-items-center text-center\">
                    
                    <img class=\"img-fluid\" src=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/transparentcareera.png"), "html", null, true);
        yield "\" alt=\"Icon\" style=\"width: 150px; height: 100px;\">
                </a>
                <button type=\"button\" class=\"navbar-toggler\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                    <div class=\"navbar-nav ms-auto\">
                        <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"nav-item nav-link active\">Acceuil</a>
                        <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offremod");
        yield "\" class=\"nav-item nav-link\">Offres d'emploi</a>
                        <a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event");
        yield "\" class=\"nav-item nav-link\">Evénements</a>
                        <a href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offrefrelencer_index");
        yield "\" class=\"nav-item nav-link\">Mission freelance</a>
                        <a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("discussion_stats");
        yield "\" class=\"nav-item nav-link\">Communication</a>
                        <a href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chatbot_page");
        yield "\" class=\"nav-item nav-link ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "request", [], "any", false, false, false, 23), "get", ["_route"], "method", false, false, false, 23) == "chatbot_page")) {
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
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profilemoderateur");
        yield "\">Profile</a></li>
                            <li>
                                <a class=\"dropdown-item\" href=\"";
        // line 34
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
        yield "<!-- Header Start -->
        <div class=\"row mt-5\">
            <div class=\"col\"></div>
        </div>

        <div class=\"container-fluid header bg-white p-0\">
            <div class=\"row g-0 align-items-center flex-column-reverse flex-md-row\">
                <div class=\"col-md-6 p-5 mt-lg-5\">
                    <h1 class=\"display-5 animated fadeIn mb-4 mt-5\">Plateforme <span class=\"text-primary\">des opportunités</span></h1>
                    <h3 class=\"animated fadeIn mb-4 pb-3\">pour les étudiants et jeunes professionnels.</h3>
                   
                </div>
             <div class=\"col-lg-6 animated fadeIn\">
                <div class=\"owl-carousel header-carousel\">
                    <div class=\"owl-carousel-item\">
                        <img class=\"img-fluid\" src=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/careeraflyer.png"), "html", null, true);
        yield "\" alt=\"flyer\" style=\"width: 90%; height: 450px; object-fit: cover;\">
                    </div>
                    <div class=\"owl-carousel-item\">
                        <img class=\"img-fluid\" src=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/careeragalss.png"), "html", null, true);
        yield "\" alt=\"\" style=\"width: 90%; height: 450px; object-fit: cover;\">
                    </div>
                </div>
            </div>

            </div>
        </div>

        <!-- Header End -->

<div class=\"row mt-5\">
        <div class=\"col-lg-4\">
        </div>
        <div class=\"col-lg-6\"><h1 class=\"mb-3\">Gestion des opportunités</h1></div>

        <div class=\"col-lg-2\">
        </div>
</div
       
<div class=\"container\">
    <div class=\"row g-4\">
        <!-- Section 1 : Offres d'emploi -->
        <div class=\"col-lg-1\"> </div>
        <div class=\"col-lg-5\">
            <div class=\"bg-light rounded p-3\">
                <div class=\"row g-3 align-items-center\">
                    <div class=\"col-3\">
                        <img class=\"img-fluid rounded w-100\" src=\"";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/emp.jpg"), "html", null, true);
        yield "\" alt=\"Offres d'emploi\">
                    </div>
                    <div class=\"col-9\">
                        <h1>Vos offres d'emploi</h1>
                        <p>Ajoutez, modifiez, ou supprimez vos offres d'emploi en quelques clics. Notre plateforme vous permet de gérer facilement toutes vos opportunités.</p>
                        <a href=\"";
        // line 95
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offre");
        yield "\" class=\"btn btn-primary py-2 px-4\"><i class=\"fas fa-cogs me-2\"></i>Gérer les offres</a>
                    </div>
                </div>
            </div> 
        </div>
        <!-- Section 2 : Événements -->
        <div class=\"col-lg-5\">
            <div class=\"bg-light rounded p-3\">
                <div class=\"row g-3 align-items-center\">
                    <div class=\"col-3\">
                        <img class=\"img-fluid rounded w-100\" src=\"";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/event.jpg"), "html", null, true);
        yield "\" alt=\"Événements\">
                    </div>
                    <div class=\"col-9\">
                        <h1>Événements à venir</h1>
                        <p>Participez à des événements conçus pour propulser votre carrière. De la formation au réseautage, nous avons tout ce qu'il vous faut.</p>
                        <a href=\"";
        // line 110
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_events");
        yield "\" class=\"btn btn-primary py-2 px-4\"><i class=\"fas fa-cogs me-2\"></i>Gérer les évènements</a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-1\"> </div>
        <!-- Section 3 : Missions freelance -->
        <div class=\"col-lg-1\"> </div>
        <div class=\"col-lg-5\">
            <div class=\"bg-light rounded p-3\">
                <div class=\"row g-3 align-items-center\">
                    <div class=\"col-3\">
                        <img class=\"img-fluid rounded w-100\" src=\"";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/free.jpg"), "html", null, true);
        yield "\" alt=\"Missions freelance\">
                    </div>
                    <div class=\"col-9\">
                        <h1>Missions freelance</h1>
                        <p>Nous sommes déterminés à offrir à nos utilisateurs des outils efficaces pour améliorer leurs chances de réussite et d'épanouissement professionnel.</p>
                        <a href=\"mission/missionmod.html\" class=\"btn btn-primary py-2 px-4\"><i class=\"fas fa-cogs me-2\"></i>Gérer les missions</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Section 4 : Les Demandes -->
        <div class=\"col-lg-5\">
            <div class=\"bg-light rounded p-3\">
                <div class=\"row g-3 align-items-center\">
                    <div class=\"col-3\">
                        <img class=\"img-fluid rounded w-100\" src=\"";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/demande.jpg"), "html", null, true);
        yield "\" alt=\"Demandes\">
                    </div>
                    <div class=\"col-9\">
                        <h1>Les Demandes</h1>
                        <p>Gérez vos demandes de missions pour collaborer efficacement avec des freelances qualifiés et compétents.</p>
                        <a href=\"demande.html\" class=\"btn btn-primary py-2 px-4\"><i class=\"fas fa-cogs me-2\"></i>Gérer les demandes</a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-1\"> </div>
    </div>
</div>

            
            <!-- main End -->
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
        return "home/index.html.twig";
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
        return array (  312 => 138,  293 => 122,  278 => 110,  270 => 105,  257 => 95,  249 => 90,  219 => 63,  213 => 60,  196 => 45,  183 => 44,  162 => 34,  157 => 32,  141 => 23,  137 => 22,  133 => 21,  129 => 20,  125 => 19,  121 => 18,  111 => 11,  106 => 9,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Careera{% endblock %}

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
<!-- Header Start -->
        <div class=\"row mt-5\">
            <div class=\"col\"></div>
        </div>

        <div class=\"container-fluid header bg-white p-0\">
            <div class=\"row g-0 align-items-center flex-column-reverse flex-md-row\">
                <div class=\"col-md-6 p-5 mt-lg-5\">
                    <h1 class=\"display-5 animated fadeIn mb-4 mt-5\">Plateforme <span class=\"text-primary\">des opportunités</span></h1>
                    <h3 class=\"animated fadeIn mb-4 pb-3\">pour les étudiants et jeunes professionnels.</h3>
                   
                </div>
             <div class=\"col-lg-6 animated fadeIn\">
                <div class=\"owl-carousel header-carousel\">
                    <div class=\"owl-carousel-item\">
                        <img class=\"img-fluid\" src=\"{{ asset('/img/careeraflyer.png') }}\" alt=\"flyer\" style=\"width: 90%; height: 450px; object-fit: cover;\">
                    </div>
                    <div class=\"owl-carousel-item\">
                        <img class=\"img-fluid\" src=\"{{ asset('img/careeragalss.png') }}\" alt=\"\" style=\"width: 90%; height: 450px; object-fit: cover;\">
                    </div>
                </div>
            </div>

            </div>
        </div>

        <!-- Header End -->

<div class=\"row mt-5\">
        <div class=\"col-lg-4\">
        </div>
        <div class=\"col-lg-6\"><h1 class=\"mb-3\">Gestion des opportunités</h1></div>

        <div class=\"col-lg-2\">
        </div>
</div
       
<div class=\"container\">
    <div class=\"row g-4\">
        <!-- Section 1 : Offres d'emploi -->
        <div class=\"col-lg-1\"> </div>
        <div class=\"col-lg-5\">
            <div class=\"bg-light rounded p-3\">
                <div class=\"row g-3 align-items-center\">
                    <div class=\"col-3\">
                        <img class=\"img-fluid rounded w-100\" src=\"{{ asset('img/emp.jpg') }}\" alt=\"Offres d'emploi\">
                    </div>
                    <div class=\"col-9\">
                        <h1>Vos offres d'emploi</h1>
                        <p>Ajoutez, modifiez, ou supprimez vos offres d'emploi en quelques clics. Notre plateforme vous permet de gérer facilement toutes vos opportunités.</p>
                        <a href=\"{{ path('app_offre') }}\" class=\"btn btn-primary py-2 px-4\"><i class=\"fas fa-cogs me-2\"></i>Gérer les offres</a>
                    </div>
                </div>
            </div> 
        </div>
        <!-- Section 2 : Événements -->
        <div class=\"col-lg-5\">
            <div class=\"bg-light rounded p-3\">
                <div class=\"row g-3 align-items-center\">
                    <div class=\"col-3\">
                        <img class=\"img-fluid rounded w-100\" src=\"{{ asset('img/event.jpg') }}\" alt=\"Événements\">
                    </div>
                    <div class=\"col-9\">
                        <h1>Événements à venir</h1>
                        <p>Participez à des événements conçus pour propulser votre carrière. De la formation au réseautage, nous avons tout ce qu'il vous faut.</p>
                        <a href=\"{{ path('app_events') }}\" class=\"btn btn-primary py-2 px-4\"><i class=\"fas fa-cogs me-2\"></i>Gérer les évènements</a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-1\"> </div>
        <!-- Section 3 : Missions freelance -->
        <div class=\"col-lg-1\"> </div>
        <div class=\"col-lg-5\">
            <div class=\"bg-light rounded p-3\">
                <div class=\"row g-3 align-items-center\">
                    <div class=\"col-3\">
                        <img class=\"img-fluid rounded w-100\" src=\"{{ asset('img/free.jpg') }}\" alt=\"Missions freelance\">
                    </div>
                    <div class=\"col-9\">
                        <h1>Missions freelance</h1>
                        <p>Nous sommes déterminés à offrir à nos utilisateurs des outils efficaces pour améliorer leurs chances de réussite et d'épanouissement professionnel.</p>
                        <a href=\"mission/missionmod.html\" class=\"btn btn-primary py-2 px-4\"><i class=\"fas fa-cogs me-2\"></i>Gérer les missions</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Section 4 : Les Demandes -->
        <div class=\"col-lg-5\">
            <div class=\"bg-light rounded p-3\">
                <div class=\"row g-3 align-items-center\">
                    <div class=\"col-3\">
                        <img class=\"img-fluid rounded w-100\" src=\"{{ asset('img/demande.jpg') }}\" alt=\"Demandes\">
                    </div>
                    <div class=\"col-9\">
                        <h1>Les Demandes</h1>
                        <p>Gérez vos demandes de missions pour collaborer efficacement avec des freelances qualifiés et compétents.</p>
                        <a href=\"demande.html\" class=\"btn btn-primary py-2 px-4\"><i class=\"fas fa-cogs me-2\"></i>Gérer les demandes</a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-1\"> </div>
    </div>
</div>

            
            <!-- main End -->
{% endblock %}
", "home/index.html.twig", "C:\\careera\\templates\\home\\index.html.twig");
    }
}
