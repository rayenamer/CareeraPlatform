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

/* evenements/eventmod.html.twig */
class __TwigTemplate_9a8a12c7543f2b7a28f4c8ad92a7921c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenements/eventmod.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenements/eventmod.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "evenements/eventmod.html.twig", 1);
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

        yield "Gestion des Événements";
        
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
        yield "<div class=\"container py-5\">
    <h1 class=\"mb-4 text-center fw-bold\">Gestion des Événements</h1>

    <!-- Boutons d'action -->
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div class=\"btn-group\" role=\"group\">
            
            <a href=\"new\" class=\"btn btn-success px-3\">
                <i class=\"fas fa-plus me-2\"></i>Ajouter un événement
            </a> 
            <a href=\"type\"  class=\"btn btn-outline-dark px-3\">
                <i class=\"fas fa-list me-2\"></i>consulter les types des evenement
            </a>
        </div>
        <!-- Recherche rapide -->
        <div class=\"input-group w-25\">
            <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher...\" id=\"searchEvent\">
            <button class=\"btn btn-outline-secondary\" type=\"button\"><i class=\"fas fa-search\"></i></button>
        </div>
    </div>

    <!-- Tableau amélioré -->
    <div class=\"card shadow-sm border-0\">
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover mb-0\">
                    <thead class=\"bg-light\">
                        <tr>
                            <th class=\"ps-4\">Description</th>
                            <th>Date</th>
                            <th>Lieu</th>
                            <th>Type</th>
                            <th>Disponibilité</th>
                            <th>Participants</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tabevent"]) || array_key_exists("tabevent", $context) ? $context["tabevent"] : (function () { throw new RuntimeError('Variable "tabevent" does not exist.', 44, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 45
            yield "                            <tr>
                                <td class=\"ps-4\">";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 46), "html", null, true);
            yield "</td>
                                <td>";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "date", [], "any", false, false, false, 47), "d M Y, H:i"), "html", null, true);
            yield "</td>
                                <td>";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "lieu", [], "any", false, false, false, 48), "html", null, true);
            yield "</td>
                                <td>
                                    <span class=\"badge bg-primary\">";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "TypeEvent", [], "any", false, false, false, 50), "nom", [], "any", false, false, false, 50), "html", null, true);
            yield "</span>
                                </td>
                                <td>
                                    <span class=\"badge ";
            // line 53
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "disponibilite", [], "any", false, false, false, 53)) ? ("bg-success") : ("bg-danger"));
            yield "\">
                                        ";
            // line 54
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "disponibilite", [], "any", false, false, false, 54)) ? ("Oui") : ("Non"));
            yield "
                                    </span>
                                </td>
                                <td>
                                    ";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "participantsIds", [], "any", false, false, false, 58)), "html", null, true);
            yield "
                                </td>
                                <td>
                                    <div class=\"btn-group\" role=\"group\">
                                        <a href=\"edit/";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 62), "html", null, true);
            yield "\"
                                           class=\"btn btn-outline-primary btn-sm\">
                                            <i class=\"fas fa-edit\"></i>
                                        </a>
                                        <a href=\"delEvent/";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 66), "html", null, true);
            yield "\"
                                           class=\"btn btn-outline-danger btn-sm\"
                                           onclick=\"return confirm('Confirmez-vous la suppression de « ";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 68), "html", null, true);
            yield " » ?');\">
                                            <i class=\"fas fa-trash\"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 74
        if (!$context['_iterated']) {
            // line 75
            yield "                            <tr>
                                <td colspan=\"7\" class=\"text-center py-4 text-muted\">
                                    <i class=\"fas fa-calendar-times me-2\"></i>Aucun événement trouvé
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


    <script>
        // Recherche simple côté client
        document.getElementById('searchEvent').addEventListener('keyup', function(e) {
            const searchString = e.target.value.toLowerCase();
            const rows = document.querySelectorAll('tbody tr');
            
            rows.forEach(row => {
                const text = row.textContent.toLowerCase();
                row.style.display = text.includes(searchString) ? '' : 'none';
            });
        });

        // Initialisation des popovers Bootstrap
        const popoverTriggerList = document.querySelectorAll('[data-bs-toggle=\"popover\"]');
        popoverTriggerList.forEach(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl));
    </script>


<style>
    .table-hover tbody tr:hover {
        background-color: #f8f9fa;
        transition: background-color 0.2s;
    }
    .btn-group .btn {
        transition: all 0.2s;
    }
    .btn-group .btn:hover {
        transform: translateY(-2px);
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
        return "evenements/eventmod.html.twig";
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
        return array (  221 => 81,  210 => 75,  208 => 74,  197 => 68,  192 => 66,  185 => 62,  178 => 58,  171 => 54,  167 => 53,  161 => 50,  156 => 48,  152 => 47,  148 => 46,  145 => 45,  140 => 44,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des Événements{% endblock %}

{% block body %}
<div class=\"container py-5\">
    <h1 class=\"mb-4 text-center fw-bold\">Gestion des Événements</h1>

    <!-- Boutons d'action -->
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div class=\"btn-group\" role=\"group\">
            
            <a href=\"new\" class=\"btn btn-success px-3\">
                <i class=\"fas fa-plus me-2\"></i>Ajouter un événement
            </a> 
            <a href=\"type\"  class=\"btn btn-outline-dark px-3\">
                <i class=\"fas fa-list me-2\"></i>consulter les types des evenement
            </a>
        </div>
        <!-- Recherche rapide -->
        <div class=\"input-group w-25\">
            <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher...\" id=\"searchEvent\">
            <button class=\"btn btn-outline-secondary\" type=\"button\"><i class=\"fas fa-search\"></i></button>
        </div>
    </div>

    <!-- Tableau amélioré -->
    <div class=\"card shadow-sm border-0\">
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover mb-0\">
                    <thead class=\"bg-light\">
                        <tr>
                            <th class=\"ps-4\">Description</th>
                            <th>Date</th>
                            <th>Lieu</th>
                            <th>Type</th>
                            <th>Disponibilité</th>
                            <th>Participants</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for event in tabevent %}
                            <tr>
                                <td class=\"ps-4\">{{ event.description }}</td>
                                <td>{{ event.date|date('d M Y, H:i') }}</td>
                                <td>{{ event.lieu }}</td>
                                <td>
                                    <span class=\"badge bg-primary\">{{ event.TypeEvent.nom }}</span>
                                </td>
                                <td>
                                    <span class=\"badge {{ event.disponibilite ? 'bg-success' : 'bg-danger' }}\">
                                        {{ event.disponibilite ? 'Oui' : 'Non' }}
                                    </span>
                                </td>
                                <td>
                                    {{ event.participantsIds|length }}
                                </td>
                                <td>
                                    <div class=\"btn-group\" role=\"group\">
                                        <a href=\"edit/{{ event.id }}\"
                                           class=\"btn btn-outline-primary btn-sm\">
                                            <i class=\"fas fa-edit\"></i>
                                        </a>
                                        <a href=\"delEvent/{{ event.id }}\"
                                           class=\"btn btn-outline-danger btn-sm\"
                                           onclick=\"return confirm('Confirmez-vous la suppression de « {{ event.description }} » ?');\">
                                            <i class=\"fas fa-trash\"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"7\" class=\"text-center py-4 text-muted\">
                                    <i class=\"fas fa-calendar-times me-2\"></i>Aucun événement trouvé
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


    <script>
        // Recherche simple côté client
        document.getElementById('searchEvent').addEventListener('keyup', function(e) {
            const searchString = e.target.value.toLowerCase();
            const rows = document.querySelectorAll('tbody tr');
            
            rows.forEach(row => {
                const text = row.textContent.toLowerCase();
                row.style.display = text.includes(searchString) ? '' : 'none';
            });
        });

        // Initialisation des popovers Bootstrap
        const popoverTriggerList = document.querySelectorAll('[data-bs-toggle=\"popover\"]');
        popoverTriggerList.forEach(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl));
    </script>


<style>
    .table-hover tbody tr:hover {
        background-color: #f8f9fa;
        transition: background-color 0.2s;
    }
    .btn-group .btn {
        transition: all 0.2s;
    }
    .btn-group .btn:hover {
        transform: translateY(-2px);
    }
</style>
{% endblock %}", "evenements/eventmod.html.twig", "C:\\careera\\templates\\evenements\\eventmod.html.twig");
    }
}
