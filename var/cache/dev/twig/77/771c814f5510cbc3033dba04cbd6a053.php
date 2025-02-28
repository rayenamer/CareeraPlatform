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

/* evenements/event_detail.html.twig */
class __TwigTemplate_fc3306163c732be084e525ed3ec2d9fa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenements/event_detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenements/event_detail.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "evenements/event_detail.html.twig", 1);
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

        yield "Détails de l'événement - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 3, $this->source); })()), "description", [], "any", false, false, false, 3), "html", null, true);
        
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
        yield "<div class=\"container mt-5 mb-5\">
    <div class=\"row g-4\"> <!-- Ajout de g-4 pour espacement consistent -->
        <div class=\"col-lg-8\">
            <!-- Card principale pour un effet visuel moderne -->
            <div class=\"card shadow-sm border-0\">
                <div class=\"card-body p-4\">
                    <!-- Titre avec badge pour le type -->
                    <div class=\"d-flex align-items-center justify-content-between mb-4\">
                        <h1 class=\"h2 fw-bold\">";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 14, $this->source); })()), "description", [], "any", false, false, false, 14), "html", null, true);
        yield "</h1>
                        <span class=\"badge bg-primary\">";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 15, $this->source); })()), "TypeEvent", [], "any", false, false, false, 15), "nom", [], "any", false, false, false, 15), "html", null, true);
        yield "</span>
                    </div>

                    <!-- Image avec effet de chargement progressif -->
                    ";
        // line 19
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 19, $this->source); })()), "imageUrl", [], "any", false, false, false, 19)) {
            // line 20
            yield "                        <div class=\"position-relative overflow-hidden rounded-3 mb-4\">
                            <img src=\"";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 21, $this->source); })()), "imageUrl", [], "any", false, false, false, 21), "html", null, true);
            yield "\" 
                                 alt=\"";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 22, $this->source); })()), "description", [], "any", false, false, false, 22), "html", null, true);
            yield "\" 
                                 class=\"img-fluid w-100\" 
                                 style=\"max-height: 450px; object-fit: cover;\"
                                 loading=\"lazy\">
                        </div>
                    ";
        } else {
            // line 28
            yield "                        <div class=\"bg-light text-center p-5 mb-4 rounded-3 border\">
                            <i class=\"fas fa-image fa-2x text-muted mb-2\"></i>
                            <p class=\"text-muted mb-0\">Aucune image disponible</p>
                        </div>
                    ";
        }
        // line 33
        yield "
                    <!-- Description avec mise en forme améliorée -->
                    <section class=\"mb-4\">
                        <h3 class=\"h4 fw-semibold border-bottom pb-2\">Description</h3>
                        <p class=\"text-muted\">";
        // line 37
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 37, $this->source); })()), "Description", [], "any", false, false, false, 37), "html", null, true));
        yield "</p>
                    </section>

                    <!-- Informations avec icônes -->
                    <section class=\"mb-4\">
                        <h3 class=\"h4 fw-semibold border-bottom pb-2\">Détails</h3>
                        <ul class=\"list-group list-group-flush\">
                            <li class=\"list-group-item px-0 d-flex align-items-center\">
                                <i class=\"fas fa-calendar-alt me-2 text-primary\"></i>
                                <span>";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 46, $this->source); })()), "date", [], "any", false, false, false, 46), "d M Y à H:i"), "html", null, true);
        yield "</span>
                            </li>
                            <li class=\"list-group-item px-0 d-flex align-items-center\">
                                <i class=\"fas fa-map-marker-alt me-2 text-primary\"></i>
                                <span>";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 50, $this->source); })()), "lieu", [], "any", false, false, false, 50), "html", null, true);
        yield "</span>
                            </li>
                            <li class=\"list-group-item px-0 d-flex align-items-center\">
                                <i class=\"fas fa-chair me-2 text-primary\"></i>
                                <span class=\"badge ";
        // line 54
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 54, $this->source); })()), "disponibilite", [], "any", false, false, false, 54)) ? ("bg-success") : ("bg-danger"));
        yield "\">
                                    ";
        // line 55
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 55, $this->source); })()), "disponibilite", [], "any", false, false, false, 55)) ? ("Places disponibles") : ("Complet"));
        yield "
                                </span>
                            </li>
                        </ul>
                    </section>
                </div>
            </div>
        </div>

        <!-- Partie \"Participer\" dans le template Twig -->
<div class=\"card shadow-sm border-0 mb-4\">
    <div class=\"card-body p-4\">
        <h5 class=\"fw-semibold mb-3\">Participer</h5>
        ";
        // line 68
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "user", [], "any", false, false, false, 68)) {
            // line 69
            yield "            ";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69), "id", [], "any", false, false, false, 69), CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 69, $this->source); })()), "participantsIds", [], "any", false, false, false, 69))) {
                // line 70
                yield "                <form action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_annuler", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 70, $this->source); })()), "id", [], "any", false, false, false, 70)]), "html", null, true);
                yield "\" method=\"POST\" class=\"d-grid\">
                    <button type=\"submit\" class=\"btn btn-outline-danger w-100 d-flex align-items-center justify-content-center gap-2\">
                        <i class=\"fas fa-times\"></i> Annuler ma participation
                    </button>
                </form>
            ";
            } else {
                // line 76
                yield "                <form action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_participer", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 76, $this->source); })()), "id", [], "any", false, false, false, 76)]), "html", null, true);
                yield "\" method=\"POST\" class=\"d-grid\">
                    <button type=\"submit\" class=\"btn btn-primary w-100 d-flex align-items-center justify-content-center gap-2\">
                        <i class=\"fas fa-check\"></i> Je participe
                    </button>
                </form>
            ";
            }
            // line 82
            yield "        ";
        } else {
            // line 83
            yield "            <a href=\"{}\" 
               class=\"btn btn-outline-primary w-100 d-flex align-items-center justify-content-center gap-2\">
                <i class=\"fas fa-sign-in-alt\"></i> Connexion requise
            </a>
        ";
        }
        // line 88
        yield "    </div>
</div>


               <!-- Card partage -->
<div class=\"card shadow-sm border-0\">
    <div class=\"card-body p-4\">
        <h5 class=\"fw-semibold mb-3\">Partager cet événement</h5>
        <div class=\"d-flex justify-content-around\">
            <!-- Lien pour partager sur Facebook -->
            <a href=\"#\" 
               class=\"btn btn-outline-primary rounded-circle share-facebook\" 
               target=\"_blank\" 
               title=\"Partager sur Facebook\">
                <i class=\"fab fa-facebook-f\"></i>
            </a>
            <!-- Lien pour partager sur Twitter -->
            <a href=\"#\" 
               class=\"btn btn-outline-primary rounded-circle share-twitter\" 
               target=\"_blank\" 
               title=\"Partager sur Twitter\">
                <i class=\"fab fa-twitter\"></i>
            </a>
            <!-- Lien pour partager sur LinkedIn -->
            <a href=\"#\" 
               class=\"btn btn-outline-primary rounded-circle share-linkedin\" 
               target=\"_blank\" 
               title=\"Partager sur LinkedIn\">
                <i class=\"fab fa-linkedin-in\"></i>
            </a>
        </div>
    </div>
</div>
            </div>
        </div>
    </div>
</div> 


<!-- Script pour générer les URLs de partage dynamiquement -->
<script>
    // Récupérer l'URL actuelle de la page
    const currentUrl = encodeURIComponent(window.location.href);
    const title = encodeURIComponent(document.title); // Titre de la page

    // Mettre à jour les liens de partage
    document.querySelector('.share-facebook').href = `https://www.facebook.com/sharer/sharer.php?u=\${currentUrl}`;
    document.querySelector('.share-twitter').href = `https://twitter.com/intent/tweet?url=\${currentUrl}&text=\${title}`;
    document.querySelector('.share-linkedin').href = `https://www.linkedin.com/sharing/share-offsite/?url=\${currentUrl}`;
</script>



<style>
    .card {
        transition: transform 0.2s;
    }
    .card:hover {
        transform: translateY(-5px);
    }
    .btn {
        transition: all 0.3s;
    }
    .btn:hover {
        transform: scale(1.05);
    }
</style>
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
        return "evenements/event_detail.html.twig";
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
        return array (  234 => 88,  227 => 83,  224 => 82,  214 => 76,  204 => 70,  201 => 69,  199 => 68,  183 => 55,  179 => 54,  172 => 50,  165 => 46,  153 => 37,  147 => 33,  140 => 28,  131 => 22,  127 => 21,  124 => 20,  122 => 19,  115 => 15,  111 => 14,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails de l'événement - {{ event.description }}{% endblock %}

{% block body %}
<div class=\"container mt-5 mb-5\">
    <div class=\"row g-4\"> <!-- Ajout de g-4 pour espacement consistent -->
        <div class=\"col-lg-8\">
            <!-- Card principale pour un effet visuel moderne -->
            <div class=\"card shadow-sm border-0\">
                <div class=\"card-body p-4\">
                    <!-- Titre avec badge pour le type -->
                    <div class=\"d-flex align-items-center justify-content-between mb-4\">
                        <h1 class=\"h2 fw-bold\">{{ event.description }}</h1>
                        <span class=\"badge bg-primary\">{{ event.TypeEvent.nom }}</span>
                    </div>

                    <!-- Image avec effet de chargement progressif -->
                    {% if event.imageUrl %}
                        <div class=\"position-relative overflow-hidden rounded-3 mb-4\">
                            <img src=\"{{ event.imageUrl }}\" 
                                 alt=\"{{ event.description }}\" 
                                 class=\"img-fluid w-100\" 
                                 style=\"max-height: 450px; object-fit: cover;\"
                                 loading=\"lazy\">
                        </div>
                    {% else %}
                        <div class=\"bg-light text-center p-5 mb-4 rounded-3 border\">
                            <i class=\"fas fa-image fa-2x text-muted mb-2\"></i>
                            <p class=\"text-muted mb-0\">Aucune image disponible</p>
                        </div>
                    {% endif %}

                    <!-- Description avec mise en forme améliorée -->
                    <section class=\"mb-4\">
                        <h3 class=\"h4 fw-semibold border-bottom pb-2\">Description</h3>
                        <p class=\"text-muted\">{{ event.Description|nl2br }}</p>
                    </section>

                    <!-- Informations avec icônes -->
                    <section class=\"mb-4\">
                        <h3 class=\"h4 fw-semibold border-bottom pb-2\">Détails</h3>
                        <ul class=\"list-group list-group-flush\">
                            <li class=\"list-group-item px-0 d-flex align-items-center\">
                                <i class=\"fas fa-calendar-alt me-2 text-primary\"></i>
                                <span>{{ event.date|date('d M Y à H:i') }}</span>
                            </li>
                            <li class=\"list-group-item px-0 d-flex align-items-center\">
                                <i class=\"fas fa-map-marker-alt me-2 text-primary\"></i>
                                <span>{{ event.lieu }}</span>
                            </li>
                            <li class=\"list-group-item px-0 d-flex align-items-center\">
                                <i class=\"fas fa-chair me-2 text-primary\"></i>
                                <span class=\"badge {{ event.disponibilite ? 'bg-success' : 'bg-danger' }}\">
                                    {{ event.disponibilite ? 'Places disponibles' : 'Complet' }}
                                </span>
                            </li>
                        </ul>
                    </section>
                </div>
            </div>
        </div>

        <!-- Partie \"Participer\" dans le template Twig -->
<div class=\"card shadow-sm border-0 mb-4\">
    <div class=\"card-body p-4\">
        <h5 class=\"fw-semibold mb-3\">Participer</h5>
        {% if app.user %}
            {% if app.user.id in event.participantsIds %}
                <form action=\"{{ path('evenement_annuler', { id: event.id }) }}\" method=\"POST\" class=\"d-grid\">
                    <button type=\"submit\" class=\"btn btn-outline-danger w-100 d-flex align-items-center justify-content-center gap-2\">
                        <i class=\"fas fa-times\"></i> Annuler ma participation
                    </button>
                </form>
            {% else %}
                <form action=\"{{ path('evenement_participer', { id: event.id }) }}\" method=\"POST\" class=\"d-grid\">
                    <button type=\"submit\" class=\"btn btn-primary w-100 d-flex align-items-center justify-content-center gap-2\">
                        <i class=\"fas fa-check\"></i> Je participe
                    </button>
                </form>
            {% endif %}
        {% else %}
            <a href=\"{}\" 
               class=\"btn btn-outline-primary w-100 d-flex align-items-center justify-content-center gap-2\">
                <i class=\"fas fa-sign-in-alt\"></i> Connexion requise
            </a>
        {% endif %}
    </div>
</div>


               <!-- Card partage -->
<div class=\"card shadow-sm border-0\">
    <div class=\"card-body p-4\">
        <h5 class=\"fw-semibold mb-3\">Partager cet événement</h5>
        <div class=\"d-flex justify-content-around\">
            <!-- Lien pour partager sur Facebook -->
            <a href=\"#\" 
               class=\"btn btn-outline-primary rounded-circle share-facebook\" 
               target=\"_blank\" 
               title=\"Partager sur Facebook\">
                <i class=\"fab fa-facebook-f\"></i>
            </a>
            <!-- Lien pour partager sur Twitter -->
            <a href=\"#\" 
               class=\"btn btn-outline-primary rounded-circle share-twitter\" 
               target=\"_blank\" 
               title=\"Partager sur Twitter\">
                <i class=\"fab fa-twitter\"></i>
            </a>
            <!-- Lien pour partager sur LinkedIn -->
            <a href=\"#\" 
               class=\"btn btn-outline-primary rounded-circle share-linkedin\" 
               target=\"_blank\" 
               title=\"Partager sur LinkedIn\">
                <i class=\"fab fa-linkedin-in\"></i>
            </a>
        </div>
    </div>
</div>
            </div>
        </div>
    </div>
</div> 


<!-- Script pour générer les URLs de partage dynamiquement -->
<script>
    // Récupérer l'URL actuelle de la page
    const currentUrl = encodeURIComponent(window.location.href);
    const title = encodeURIComponent(document.title); // Titre de la page

    // Mettre à jour les liens de partage
    document.querySelector('.share-facebook').href = `https://www.facebook.com/sharer/sharer.php?u=\${currentUrl}`;
    document.querySelector('.share-twitter').href = `https://twitter.com/intent/tweet?url=\${currentUrl}&text=\${title}`;
    document.querySelector('.share-linkedin').href = `https://www.linkedin.com/sharing/share-offsite/?url=\${currentUrl}`;
</script>



<style>
    .card {
        transition: transform 0.2s;
    }
    .card:hover {
        transform: translateY(-5px);
    }
    .btn {
        transition: all 0.3s;
    }
    .btn:hover {
        transform: scale(1.05);
    }
</style>
{% endblock %}", "evenements/event_detail.html.twig", "C:\\Users\\medhe\\OneDrive\\Bureau\\New folder (9)\\CareeraPlatform\\templates\\evenements\\event_detail.html.twig");
    }
}
