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

/* base.html.twig */
class __TwigTemplate_4bfc19d18ed25a08864d0f9161bcefff extends Template
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

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'extra_css' => [$this, 'block_extra_css'],
            'navbar' => [$this, 'block_navbar'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">

    <!-- Favicon -->
    <link href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/transparentcareera.png"), "html", null, true);
        yield "\" rel=\"icon\">

    <!-- Google Web Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap\" rel=\"stylesheet\">
    
    <!-- Icon Font Stylesheet -->
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\" integrity=\"sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMC4A5M3b6B+QZgq1RQFOc6CkzZZU0jzKh7H7r\" crossorigin=\"anonymous\">


";
        // line 26
        yield from $this->unwrap()->yieldBlock('extra_css', $context, $blocks);
        // line 37
        yield "</head>


<body>
    <div class=\"container-xxl bg-white p-0\">
        <!-- Spinner Start -->
        <div id=\"spinner\" class=\"show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
            <div class=\"spinner-border text-primary\" style=\"width: 2rem; height: 2rem;\" role=\"status\">
                <span class=\"sr-only\">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

";
        // line 50
        yield from $this->unwrap()->yieldBlock('navbar', $context, $blocks);
        // line 93
        yield "
        <main>";
        // line 94
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        yield "</main>
         <!-- Footer Start -->
        <div class=\"container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn\" data-wow-delay=\"0.1s\">
            <div class=\"container py-5\">
                <div class=\"row g-5\">
                    <div class=\"col-lg-3 col-md-6\">
                         <h5 class=\"text-white mb-4\">Contactez-nous</h5>
                        <p class=\"mb-2\"><i class=\"fa fa-map-marker-alt me-3\"></i>Ariana soghra, Ariana, Tunisie</p>
                        <p class=\"mb-2\"><i class=\"fa fa-phone-alt me-3\"></i>+216 55 666 888 </p>
                        <p class=\"mb-2\"><i class=\"fa fa-envelope me-3\"></i>careera@gmail.com</p>
                        <div class=\"d-flex pt-2\">
                            <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                            <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                            <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-youtube\"></i></a>
                            <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6\">
                        <h5 class=\"text-white mb-4\">Autre liens</h5>
                        <a class=\"btn btn-link text-white-50\" href=\"\">À propos</a>
                        <a class=\"btn btn-link text-white-50\" href=\"\">Contactez-nous</a>
                        <a class=\"btn btn-link text-white-50\" href=\"\">Nos Services</a>
                        <a class=\"btn btn-link text-white-50\" href=\"\">politique de confidentialité</a>
                        <a class=\"btn btn-link text-white-50\" href=\"\">Termes & conditions</a>
                    </div>
                    <div class=\"col-lg-3 col-md-4\">
                        
                    </div>

                    <div class=\"col-lg-3 col-md-6\">
                        <h5 class=\"text-white mb-4\">S'inscrire</h5>
                        <p>Inscrivez-vous en une seconde et restez connecté(e) à l'essentiel.</p>
                        <div class=\"position-relative mx-auto\" style=\"max-width: 400px;\">
                            <input class=\"form-control bg-transparent w-100 py-3 ps-4 pe-5\" type=\"text\" placeholder=\"Votre email\">
                            <button type=\"button\" class=\"btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2\">S'inscrire</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"container\">
                <div class=\"copyright\">
                    <div class=\"row\">
                        <div class=\"col-md-6 text-center text-md-start mb-3 mb-md-0\">
                            &copy; <a class=\"border-bottom\" href=\"#\">CareEra</a>, Tous droits réservés. 
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". Thank you for your support. ***/-->
\t\t\t\t\t\t\tDesigned By <a class=\"border-bottom\" href=\"https://htmlcodex.com\">CreEra Team</a>
                        </div>
                        <div class=\"col-md-6 text-center text-md-end\">
                            <div class=\"footer-menu\">
                                <a href=\"\">Aceuil</a>
                                <a href=\"\">Cookies</a>
                                <a href=\"\">Aide</a>
                                <a href=\"\">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square back-to-top\"><i class=\"bi bi-arrow-up\"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"";
        // line 164
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/wow/wow.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/easing/easing.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/waypoints/waypoints.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/owlcarousel/owl.carousel.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>

    <!-- Template Javascript -->
    <script src=\"";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        yield "\"></script>
</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
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

        yield " Carrera ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 26
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_extra_css(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_css"));

        // line 27
        yield "    <!-- Libraries Stylesheet -->
    <link href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/animate/animate.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/owlcarousel/assets/owl.carousel.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

    <!-- Template Stylesheet -->
    <link href=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 50
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

        // line 51
        yield "<!-- Navbar Start -->
<div class=\"container-fluid nav-bar bg-transparent\">
    <nav class=\"navbar navbar-expand-lg bg-white navbar-light py-0 px-3\">
        <a href=\"";
        // line 54
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_indexhome");
        yield "\" class=\"navbar-brand d-flex align-items-center text-center\">
            <img class=\"img-fluid\" src=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/transparentcareera.png"), "html", null, true);
        yield "\" alt=\"Icon\" style=\"width: 150px; height: 100px;\">
        </a>
        <button type=\"button\" class=\"navbar-toggler\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
            <div class=\"navbar-nav ms-auto\">
                <a href=\"";
        // line 62
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_indexhome");
        yield "\" class=\"nav-item nav-link ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "request", [], "any", false, false, false, 62), "get", ["_route"], "method", false, false, false, 62) == "app_indexhome")) {
            yield "active";
        }
        yield "\">Acceuil</a>
                <a href=\"";
        // line 63
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offre");
        yield "\" class=\"nav-item nav-link ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "request", [], "any", false, false, false, 63), "get", ["_route"], "method", false, false, false, 63) == "app_offre")) {
            yield "active text-primary fw-bold";
        }
        yield "\">Offres d'emploi</a>
                <a href=\"";
        // line 64
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_events");
        yield "\" class=\"nav-item nav-link ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "request", [], "any", false, false, false, 64), "get", ["_route"], "method", false, false, false, 64) == "app_events")) {
            yield "active";
        }
        yield "\">Evénements</a>
                <a href=\"";
        // line 65
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offrefrelencer_index");
        yield "\" class=\"nav-item nav-link ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "request", [], "any", false, false, false, 65), "get", ["_route"], "method", false, false, false, 65) == "app_offrefrelencer_index")) {
            yield "active";
        }
        yield "\">Mission freelance</a>
                <a href=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forum");
        yield "\" class=\"nav-item nav-link ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "request", [], "any", false, false, false, 66), "get", ["_route"], "method", false, false, false, 66) == "app_forum")) {
            yield "active";
        }
        yield "\">Forum</a>
                <a href=\"";
        // line 67
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_community");
        yield "\" class=\"nav-item nav-link ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "request", [], "any", false, false, false, 67), "get", ["_route"], "method", false, false, false, 67) == "app_community")) {
            yield "active";
        }
        yield "\">Community</a>
                <a href=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_notification");
        yield "\" class=\"nav-item nav-link ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "request", [], "any", false, false, false, 68), "get", ["_route"], "method", false, false, false, 68) == "app_notification")) {
            yield "active";
        }
        yield "\">
                    <i class=\"fa-solid fa-bell\"></i> 
                    <span class=\"badge bg-danger\">5</span> 
                </a>
                <a href=\"";
        // line 72
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chatbot_page");
        yield "\" class=\"nav-item nav-link ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "request", [], "any", false, false, false, 72), "get", ["_route"], "method", false, false, false, 72) == "chatbot_page")) {
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
        // line 82
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\">Profile</a></li>
                    <li>
                        <a class=\"dropdown-item\" href=\"";
        // line 84
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

    // line 94
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  415 => 94,  395 => 84,  390 => 82,  373 => 72,  362 => 68,  354 => 67,  346 => 66,  338 => 65,  330 => 64,  322 => 63,  314 => 62,  304 => 55,  300 => 54,  295 => 51,  282 => 50,  269 => 35,  263 => 32,  257 => 29,  253 => 28,  250 => 27,  237 => 26,  214 => 6,  199 => 171,  192 => 167,  188 => 166,  184 => 165,  180 => 164,  107 => 94,  104 => 93,  102 => 50,  87 => 37,  85 => 26,  68 => 12,  59 => 6,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <title>{% block title %} Carrera {% endblock %}</title>
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">

    <!-- Favicon -->
    <link href=\"{{asset ('img/transparentcareera.png') }}\" rel=\"icon\">

    <!-- Google Web Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap\" rel=\"stylesheet\">
    
    <!-- Icon Font Stylesheet -->
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\" integrity=\"sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMC4A5M3b6B+QZgq1RQFOc6CkzZZU0jzKh7H7r\" crossorigin=\"anonymous\">


{% block extra_css %}
    <!-- Libraries Stylesheet -->
    <link href=\"{{ asset('lib/animate/animate.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}\" rel=\"stylesheet\">

    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"{{ asset('css/bootstrap.min.css') }}\" rel=\"stylesheet\">

    <!-- Template Stylesheet -->
    <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\">
{% endblock %}
</head>


<body>
    <div class=\"container-xxl bg-white p-0\">
        <!-- Spinner Start -->
        <div id=\"spinner\" class=\"show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
            <div class=\"spinner-border text-primary\" style=\"width: 2rem; height: 2rem;\" role=\"status\">
                <span class=\"sr-only\">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

{% block navbar %}
<!-- Navbar Start -->
<div class=\"container-fluid nav-bar bg-transparent\">
    <nav class=\"navbar navbar-expand-lg bg-white navbar-light py-0 px-3\">
        <a href=\"{{ path('app_indexhome') }}\" class=\"navbar-brand d-flex align-items-center text-center\">
            <img class=\"img-fluid\" src=\"{{ asset('img/transparentcareera.png') }}\" alt=\"Icon\" style=\"width: 150px; height: 100px;\">
        </a>
        <button type=\"button\" class=\"navbar-toggler\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
            <div class=\"navbar-nav ms-auto\">
                <a href=\"{{ path('app_indexhome') }}\" class=\"nav-item nav-link {% if app.request.get('_route') == 'app_indexhome' %}active{% endif %}\">Acceuil</a>
                <a href=\"{{ path('app_offre') }}\" class=\"nav-item nav-link {% if app.request.get('_route') == 'app_offre' %}active text-primary fw-bold{% endif %}\">Offres d'emploi</a>
                <a href=\"{{ path('app_events') }}\" class=\"nav-item nav-link {% if app.request.get('_route') == 'app_events' %}active{% endif %}\">Evénements</a>
                <a href=\"{{ path('app_offrefrelencer_index') }}\" class=\"nav-item nav-link {% if app.request.get('_route') == 'app_offrefrelencer_index' %}active{% endif %}\">Mission freelance</a>
                <a href=\"{{ path('app_forum') }}\" class=\"nav-item nav-link {% if app.request.get('_route') == 'app_forum' %}active{% endif %}\">Forum</a>
                <a href=\"{{ path('app_community') }}\" class=\"nav-item nav-link {% if app.request.get('_route') == 'app_community' %}active{% endif %}\">Community</a>
                <a href=\"{{ path('app_notification') }}\" class=\"nav-item nav-link {% if app.request.get('_route') == 'app_notification' %}active{% endif %}\">
                    <i class=\"fa-solid fa-bell\"></i> 
                    <span class=\"badge bg-danger\">5</span> 
                </a>
                <a href=\"{{ path('chatbot_page') }}\" class=\"nav-item nav-link {% if app.request.get('_route') == 'chatbot_page' %}active{% endif %}\">
                    <i class=\"fa-solid fa-robot\"></i>  
                </a>

            </div>
            <div class=\"dropdown\">
                <a href=\"#\" class=\"nav-link dropdown-toggle\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                    <i class=\"fa-solid fa-user-circle fa-2x\"></i>
                </a>
                <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                    <li><a class=\"dropdown-item\" href=\"{{ path('app_profile') }}\">Profile</a></li>
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

        <main>{% block body %}{% endblock %}</main>
         <!-- Footer Start -->
        <div class=\"container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn\" data-wow-delay=\"0.1s\">
            <div class=\"container py-5\">
                <div class=\"row g-5\">
                    <div class=\"col-lg-3 col-md-6\">
                         <h5 class=\"text-white mb-4\">Contactez-nous</h5>
                        <p class=\"mb-2\"><i class=\"fa fa-map-marker-alt me-3\"></i>Ariana soghra, Ariana, Tunisie</p>
                        <p class=\"mb-2\"><i class=\"fa fa-phone-alt me-3\"></i>+216 55 666 888 </p>
                        <p class=\"mb-2\"><i class=\"fa fa-envelope me-3\"></i>careera@gmail.com</p>
                        <div class=\"d-flex pt-2\">
                            <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                            <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                            <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-youtube\"></i></a>
                            <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6\">
                        <h5 class=\"text-white mb-4\">Autre liens</h5>
                        <a class=\"btn btn-link text-white-50\" href=\"\">À propos</a>
                        <a class=\"btn btn-link text-white-50\" href=\"\">Contactez-nous</a>
                        <a class=\"btn btn-link text-white-50\" href=\"\">Nos Services</a>
                        <a class=\"btn btn-link text-white-50\" href=\"\">politique de confidentialité</a>
                        <a class=\"btn btn-link text-white-50\" href=\"\">Termes & conditions</a>
                    </div>
                    <div class=\"col-lg-3 col-md-4\">
                        
                    </div>

                    <div class=\"col-lg-3 col-md-6\">
                        <h5 class=\"text-white mb-4\">S'inscrire</h5>
                        <p>Inscrivez-vous en une seconde et restez connecté(e) à l'essentiel.</p>
                        <div class=\"position-relative mx-auto\" style=\"max-width: 400px;\">
                            <input class=\"form-control bg-transparent w-100 py-3 ps-4 pe-5\" type=\"text\" placeholder=\"Votre email\">
                            <button type=\"button\" class=\"btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2\">S'inscrire</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"container\">
                <div class=\"copyright\">
                    <div class=\"row\">
                        <div class=\"col-md-6 text-center text-md-start mb-3 mb-md-0\">
                            &copy; <a class=\"border-bottom\" href=\"#\">CareEra</a>, Tous droits réservés. 
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". Thank you for your support. ***/-->
\t\t\t\t\t\t\tDesigned By <a class=\"border-bottom\" href=\"https://htmlcodex.com\">CreEra Team</a>
                        </div>
                        <div class=\"col-md-6 text-center text-md-end\">
                            <div class=\"footer-menu\">
                                <a href=\"\">Aceuil</a>
                                <a href=\"\">Cookies</a>
                                <a href=\"\">Aide</a>
                                <a href=\"\">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square back-to-top\"><i class=\"bi bi-arrow-up\"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"{{ asset('lib/wow/wow.min.js') }}\"></script>
    <script src=\"{{ asset('lib/easing/easing.min.js') }}\"></script>
    <script src=\"{{ asset('lib/waypoints/waypoints.min.js') }}\"></script>
    <script src=\"{{ asset('lib/owlcarousel/owl.carousel.min.js') }}\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>

    <!-- Template Javascript -->
    <script src=\"{{ asset('js/main.js') }}\"></script>
</body>

</html>", "base.html.twig", "C:\\careera\\templates\\base.html.twig");
    }
}
