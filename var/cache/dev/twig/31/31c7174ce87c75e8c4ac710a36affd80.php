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
class __TwigTemplate_963d8365a513daf3e9d8269f474ee94d extends Template
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
<div class=\"text-end mb-3\">
    <label for=\"languageSelect\" class=\"me-2\">Langue :</label>
    <select id=\"languageSelect\" class=\"form-select w-auto d-inline-block\">
        <option value=\"fr\">Français</option>
        <option value=\"en\">English</option>
        <option value=\"es\">Español</option>
        <option value=\"de\">Deutsch</option>
    </select>
</div>
    <div class=\"row g-4\">
        <div class=\"col-lg-8\">
        <!-- Sélecteur de langue -->

            <div class=\"card shadow-sm border-0\">
                <div class=\"card-body p-4\">
                    <div class=\"d-flex align-items-center justify-content-between mb-4\">
                        <h1 class=\"h2 fw-bold\">";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 23, $this->source); })()), "description", [], "any", false, false, false, 23), "html", null, true);
        yield "</h1>
                        <span class=\"badge bg-primary\">";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 24, $this->source); })()), "TypeEvent", [], "any", false, false, false, 24), "nom", [], "any", false, false, false, 24), "html", null, true);
        yield "</span>
                    </div>

                    ";
        // line 27
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 27, $this->source); })()), "imageUrl", [], "any", false, false, false, 27)) {
            // line 28
            yield "                        <div class=\"position-relative overflow-hidden rounded-3 mb-4\">
                            <img src=\"";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 29, $this->source); })()), "imageUrl", [], "any", false, false, false, 29), "html", null, true);
            yield "\" 
                                 alt=\"";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 30, $this->source); })()), "description", [], "any", false, false, false, 30), "html", null, true);
            yield "\" 
                                 class=\"img-fluid w-100\" 
                                 style=\"max-height: 450px; object-fit: cover;\"
                                 loading=\"lazy\">
                        </div>
                    ";
        } else {
            // line 36
            yield "                        <div class=\"bg-light text-center p-5 mb-4 rounded-3 border\">
                            <i class=\"fas fa-image fa-2x text-muted mb-2\"></i>
                            <p class=\"text-muted mb-0\">Aucune image disponible</p>
                        </div>
                    ";
        }
        // line 41
        yield "
                    <section class=\"mb-4\">
                        <h3 class=\"h4 fw-semibold border-bottom pb-2\">Description</h3>
                        <p class=\"text-muted\">";
        // line 44
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 44, $this->source); })()), "Description", [], "any", false, false, false, 44), "html", null, true));
        yield "</p>
                    </section>

                    <section class=\"mb-4\">
                        <h3 class=\"h4 fw-semibold border-bottom pb-2\">Détails</h3>
                        <ul class=\"list-group list-group-flush\">
                            <li class=\"list-group-item px-0 d-flex align-items-center\">
                                <i class=\"fas fa-calendar-alt me-2 text-primary\"></i>
                                <span>";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 52, $this->source); })()), "date", [], "any", false, false, false, 52), "d M Y à H:i"), "html", null, true);
        yield "</span>
                            </li>
                            <li class=\"list-group-item px-0 d-flex align-items-center\">
                                <i class=\"fas fa-map-marker-alt me-2 text-primary\"></i>
                                <span>";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 56, $this->source); })()), "lieu", [], "any", false, false, false, 56), "html", null, true);
        yield "</span>
                            </li>
                            <li class=\"list-group-item px-0 d-flex align-items-center\">
                                <i class=\"fas fa-chair me-2 text-primary\"></i>
                                <span class=\"badge ";
        // line 60
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 60, $this->source); })()), "disponibilite", [], "any", false, false, false, 60)) ? ("bg-success") : ("bg-danger"));
        yield "\">
                                    ";
        // line 61
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 61, $this->source); })()), "disponibilite", [], "any", false, false, false, 61)) ? ("Places disponibles") : ("Complet"));
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
        // line 75
        if (CoreExtension::inFilter((isset($context["userId"]) || array_key_exists("userId", $context) ? $context["userId"] : (function () { throw new RuntimeError('Variable "userId" does not exist.', 75, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 75, $this->source); })()), "participantsIds", [], "any", false, false, false, 75))) {
            // line 76
            yield "    <form action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_annuler", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 76, $this->source); })()), "id", [], "any", false, false, false, 76)]), "html", null, true);
            yield "\" method=\"POST\" class=\"d-grid\">
        <button type=\"submit\" class=\"btn btn-outline-danger w-100 d-flex align-items-center justify-content-center gap-2\">
            <i class=\"fas fa-times\"></i> Annuler ma participation
        </button>
    </form>
";
        } else {
            // line 82
            yield "    <form action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_participer", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 82, $this->source); })()), "id", [], "any", false, false, false, 82)]), "html", null, true);
            yield "\" method=\"POST\" class=\"d-grid\">
        <button type=\"submit\" class=\"btn btn-primary w-100 d-flex align-items-center justify-content-center gap-2\">
            <i class=\"fas fa-check\"></i> Je participe
        </button>
    </form>
";
        }
        // line 88
        yield "
        <div class=\"card shadow-sm border-0\">
            <div class=\"card-body p-4\">
                <h5 class=\"fw-semibold mb-3\">Partager cet événement</h5>
                <div class=\"d-flex justify-content-around\">
                    <a href=\"#\" class=\"btn btn-outline-primary rounded-circle share-facebook\" target=\"_blank\">
                        <i class=\"fab fa-facebook-f\"></i>
                    </a>
                    <a href=\"#\" class=\"btn btn-outline-primary rounded-circle share-twitter\" target=\"_blank\">
                        <i class=\"fab fa-twitter\"></i>
                    </a>
                    <a href=\"#\" class=\"btn btn-outline-primary rounded-circle share-linkedin\" target=\"_blank\">
                        <i class=\"fab fa-linkedin-in\"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Script pour la traduction -->
<script>
    async function translateText(text, sourceLang, targetLang) {
        if (sourceLang === targetLang) {
            return text;
        }

        const apiUrl = `https://api.mymemory.translated.net/get?q=\${encodeURIComponent(text)}&langpair=\${sourceLang}|\${targetLang}`;

        try {
            const response = await fetch(apiUrl);
            const data = await response.json();
            return data.responseData && data.responseData.translatedText ? data.responseData.translatedText : text;
        } catch (error) {
            console.error('Erreur de traduction :', error);
            return text;
        }
    }

    async function translatePage(targetLang) {
        const sourceLang = 'fr';
        const elementsToTranslate = document.querySelectorAll(
            'h1, h5.card-title, p.card-text, span.badge, a.btn, p.text-center, p.text-muted, button.btn'
        );

        for (const element of elementsToTranslate) {
            if (!element.hasAttribute('data-original-text')) {
                element.setAttribute('data-original-text', element.innerText.trim());
            }

            const originalText = element.getAttribute('data-original-text');
            if (originalText) {
                if (sourceLang === targetLang) {
                    element.innerText = originalText;
                } else {
                    element.innerText = await translateText(originalText, sourceLang, targetLang);
                }
            }
        }

        const searchInput = document.getElementById('searchInput');
        if (searchInput) {
            if (!searchInput.hasAttribute('data-original-placeholder')) {
                searchInput.setAttribute('data-original-placeholder', searchInput.getAttribute('placeholder'));
            }

            const originalPlaceholder = searchInput.getAttribute('data-original-placeholder');
            if (originalPlaceholder) {
                searchInput.setAttribute('placeholder', targetLang === sourceLang ? originalPlaceholder : await translateText(originalPlaceholder, sourceLang, targetLang));
            }
        }
    }

    document.getElementById('languageSelect').addEventListener('change', async function() {
        await translatePage(this.value);
    });
</script>

<script>
    const currentUrl = encodeURIComponent(window.location.href);
    const title = encodeURIComponent(document.title);
    document.querySelector('.share-facebook').href = `https://www.facebook.com/sharer/sharer.php?u=\${currentUrl}`;
    document.querySelector('.share-twitter').href = `https://twitter.com/intent/tweet?url=\${currentUrl}&text=\${title}`;
    document.querySelector('.share-linkedin').href = `https://www.linkedin.com/sharing/share-offsite/?url=\${currentUrl}`;
</script>

<style>
    .card { transition: transform 0.2s; }
    .card:hover { transform: translateY(-5px); }
    .btn { transition: all 0.3s; }
    .btn:hover { transform: scale(1.05); }
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
        return array (  228 => 88,  218 => 82,  208 => 76,  206 => 75,  189 => 61,  185 => 60,  178 => 56,  171 => 52,  160 => 44,  155 => 41,  148 => 36,  139 => 30,  135 => 29,  132 => 28,  130 => 27,  124 => 24,  120 => 23,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails de l'événement - {{ event.description }}{% endblock %}

{% block body %}
<div class=\"container mt-5 mb-5\"> 
<div class=\"text-end mb-3\">
    <label for=\"languageSelect\" class=\"me-2\">Langue :</label>
    <select id=\"languageSelect\" class=\"form-select w-auto d-inline-block\">
        <option value=\"fr\">Français</option>
        <option value=\"en\">English</option>
        <option value=\"es\">Español</option>
        <option value=\"de\">Deutsch</option>
    </select>
</div>
    <div class=\"row g-4\">
        <div class=\"col-lg-8\">
        <!-- Sélecteur de langue -->

            <div class=\"card shadow-sm border-0\">
                <div class=\"card-body p-4\">
                    <div class=\"d-flex align-items-center justify-content-between mb-4\">
                        <h1 class=\"h2 fw-bold\">{{ event.description }}</h1>
                        <span class=\"badge bg-primary\">{{ event.TypeEvent.nom }}</span>
                    </div>

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

                    <section class=\"mb-4\">
                        <h3 class=\"h4 fw-semibold border-bottom pb-2\">Description</h3>
                        <p class=\"text-muted\">{{ event.Description|nl2br }}</p>
                    </section>

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
        
            {% if userId in event.participantsIds %}
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

        <div class=\"card shadow-sm border-0\">
            <div class=\"card-body p-4\">
                <h5 class=\"fw-semibold mb-3\">Partager cet événement</h5>
                <div class=\"d-flex justify-content-around\">
                    <a href=\"#\" class=\"btn btn-outline-primary rounded-circle share-facebook\" target=\"_blank\">
                        <i class=\"fab fa-facebook-f\"></i>
                    </a>
                    <a href=\"#\" class=\"btn btn-outline-primary rounded-circle share-twitter\" target=\"_blank\">
                        <i class=\"fab fa-twitter\"></i>
                    </a>
                    <a href=\"#\" class=\"btn btn-outline-primary rounded-circle share-linkedin\" target=\"_blank\">
                        <i class=\"fab fa-linkedin-in\"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Script pour la traduction -->
<script>
    async function translateText(text, sourceLang, targetLang) {
        if (sourceLang === targetLang) {
            return text;
        }

        const apiUrl = `https://api.mymemory.translated.net/get?q=\${encodeURIComponent(text)}&langpair=\${sourceLang}|\${targetLang}`;

        try {
            const response = await fetch(apiUrl);
            const data = await response.json();
            return data.responseData && data.responseData.translatedText ? data.responseData.translatedText : text;
        } catch (error) {
            console.error('Erreur de traduction :', error);
            return text;
        }
    }

    async function translatePage(targetLang) {
        const sourceLang = 'fr';
        const elementsToTranslate = document.querySelectorAll(
            'h1, h5.card-title, p.card-text, span.badge, a.btn, p.text-center, p.text-muted, button.btn'
        );

        for (const element of elementsToTranslate) {
            if (!element.hasAttribute('data-original-text')) {
                element.setAttribute('data-original-text', element.innerText.trim());
            }

            const originalText = element.getAttribute('data-original-text');
            if (originalText) {
                if (sourceLang === targetLang) {
                    element.innerText = originalText;
                } else {
                    element.innerText = await translateText(originalText, sourceLang, targetLang);
                }
            }
        }

        const searchInput = document.getElementById('searchInput');
        if (searchInput) {
            if (!searchInput.hasAttribute('data-original-placeholder')) {
                searchInput.setAttribute('data-original-placeholder', searchInput.getAttribute('placeholder'));
            }

            const originalPlaceholder = searchInput.getAttribute('data-original-placeholder');
            if (originalPlaceholder) {
                searchInput.setAttribute('placeholder', targetLang === sourceLang ? originalPlaceholder : await translateText(originalPlaceholder, sourceLang, targetLang));
            }
        }
    }

    document.getElementById('languageSelect').addEventListener('change', async function() {
        await translatePage(this.value);
    });
</script>

<script>
    const currentUrl = encodeURIComponent(window.location.href);
    const title = encodeURIComponent(document.title);
    document.querySelector('.share-facebook').href = `https://www.facebook.com/sharer/sharer.php?u=\${currentUrl}`;
    document.querySelector('.share-twitter').href = `https://twitter.com/intent/tweet?url=\${currentUrl}&text=\${title}`;
    document.querySelector('.share-linkedin').href = `https://www.linkedin.com/sharing/share-offsite/?url=\${currentUrl}`;
</script>

<style>
    .card { transition: transform 0.2s; }
    .card:hover { transform: translateY(-5px); }
    .btn { transition: all 0.3s; }
    .btn:hover { transform: scale(1.05); }
</style>
{% endblock %}
", "evenements/event_detail.html.twig", "C:\\careera\\templates\\evenements\\event_detail.html.twig");
    }
}
