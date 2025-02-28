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

/* evenements/index.html.twig */
class __TwigTemplate_b71ca4fd3fb3de4fb2a8decf47905720 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenements/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenements/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "evenements/index.html.twig", 1);
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

        yield "Evènements";
        
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
        yield "<div class=\"text-end mb-3\" style=\"margin-right: 20px;\">
    <label for=\"languageSelect\" ></label>
    <select id=\"languageSelect\" class=\"form-select d-inline-block\" style=\"width: 200px;\">
        <option value=\"fr\">Français</option>
        <option value=\"en\">English</option>
        <option value=\"es\">Español</option>
        <option value=\"ar\">العربية</option>
    </select>
</div> 

<h1 class=\"mb-3 text-center\">Evènements</h1>  

<div class=\"d-flex justify-content-center mb-3\">
    <button id=\"sortAZ\" class=\"btn btn-outline-primary me-2\">Trier A-Z</button>
    <button id=\"sortZA\" class=\"btn btn-outline-primary me-2\">Trier Z-A</button>
    <button id=\"sortDateAsc\" class=\"btn btn-outline-primary me-2\">Trier par date (ancien)</button>
    <button id=\"sortDateDesc\" class=\"btn btn-outline-primary me-2\">Trier par date (récent)</button>
    <button id=\"sortType\" class=\"btn btn-outline-primary\">Trier par type</button>
</div>

<!-- Formulaire de recherche -->
<form id=\"searchForm\" class=\"d-flex\" style=\"margin-left: 20px;\">
    <input type=\"text\" id=\"searchInput\" class=\"form-control\" placeholder=\"Rechercher une offre...\" style=\"border-radius: 20px; padding-left: 10px;\">
    <button type=\"submit\" class=\"btn btn-outline\" style=\"border-radius: 20px;\">
        <i class=\"fa fa-search\" style=\"color:rgb(115, 160, 141);\"></i>
    </button>
</form>

<div class=\"container mt-5\">
    <div class=\"row\" id=\"eventList\">
        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tabevent"]) || array_key_exists("tabevent", $context) ? $context["tabevent"] : (function () { throw new RuntimeError('Variable "tabevent" does not exist.', 36, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 37
            yield "            <div class=\"col-md-4 mb-4\">
                <div class=\"card shadow-sm d-flex flex-column\">
                    <div class=\"card-body d-flex flex-column justify-content-between\">
                        <h5 class=\"card-title text-center\">";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 40), "html", null, true);
            yield "</h5>
                        <p class=\"card-text text-center\">
                            <strong>Date:</strong> ";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "date", [], "any", false, false, false, 42), "Y-m-d H:i"), "html", null, true);
            yield "<br>
                            <strong>Lieu:</strong> ";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "lieu", [], "any", false, false, false, 43), "html", null, true);
            yield "<br> 
                            <strong>Type:</strong> ";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "TypeEvent", [], "any", false, false, false, 44), "nom", [], "any", false, false, false, 44), "html", null, true);
            yield "<br>
                        </p>

                       
";
            // line 49
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["weatherData"]) || array_key_exists("weatherData", $context) ? $context["weatherData"] : (function () { throw new RuntimeError('Variable "weatherData" does not exist.', 49, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 49), [], "array", false, false, false, 49)) {
                // line 50
                yield "    <div class=\"text-center\">
        <strong>Météo :</strong><br>
        <div style=\"font-size: 24px;\">
            ";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["weatherData"]) || array_key_exists("weatherData", $context) ? $context["weatherData"] : (function () { throw new RuntimeError('Variable "weatherData" does not exist.', 53, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 53), [], "array", false, false, false, 53), "icon", [], "array", false, false, false, 53), "html", null, true);
                yield "
        </div>
        Température : ";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["weatherData"]) || array_key_exists("weatherData", $context) ? $context["weatherData"] : (function () { throw new RuntimeError('Variable "weatherData" does not exist.', 55, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 55), [], "array", false, false, false, 55), "temperature_max", [], "array", false, false, false, 55), 0), "html", null, true);
                yield "°C / ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["weatherData"]) || array_key_exists("weatherData", $context) ? $context["weatherData"] : (function () { throw new RuntimeError('Variable "weatherData" does not exist.', 55, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 55), [], "array", false, false, false, 55), "temperature_min", [], "array", false, false, false, 55), 0), "html", null, true);
                yield "°C<br>
    </div>
";
            } else {
                // line 58
                yield "    <p class=\"text-center text-muted\">Données météo non disponibles.</p>
";
            }
            // line 60
            yield "                        

                        <div class=\"d-flex justify-content-center\">
                            <span class=\"badge ";
            // line 63
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "disponibilite", [], "any", false, false, false, 63)) ? ("bg-success") : ("bg-danger"));
            yield "\">
                                ";
            // line 64
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "disponibilite", [], "any", false, false, false, 64)) ? ("Disponible") : ("Non disponible"));
            yield "
                            </span>
                        </div>

                        <div class=\"mt-3\">
                            ";
            // line 69
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69)) {
                // line 70
                yield "                                ";
                // line 71
                yield "                                ";
                if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 71, $this->source); })()), "user", [], "any", false, false, false, 71), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "utilisateurs", [], "any", false, false, false, 71))) {
                    // line 72
                    yield "                                    ";
                    // line 73
                    yield "                                    <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_annuler", ["idevenement" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 73), "iduser" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "user", [], "any", false, false, false, 73), "id", [], "any", false, false, false, 73)]), "html", null, true);
                    yield "\" class=\"btn btn-danger btn-sm w-100\">
                                        Annuler participation
                                    </a>
                                ";
                } else {
                    // line 77
                    yield "                                    ";
                    // line 78
                    yield "                                    <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_postuler", ["idevenement" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 78), "iduser" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "user", [], "any", false, false, false, 78), "id", [], "any", false, false, false, 78)]), "html", null, true);
                    yield "\" class=\"btn btn-primary btn-sm w-100\">
                                        Participer
                                    </a>
                                ";
                }
                // line 82
                yield "                            ";
            } else {
                // line 83
                yield "                                ";
                // line 84
                yield "                                <p class=\"text-center\">Connectez-vous pour participer.</p>
                            ";
            }
            // line 85
            yield " 
                            <!-- Bouton \"Voir les détails\" -->
    <a href=\"";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 87)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-sm w-100\">
        Voir les détails
    </a>
                        </div>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        // line 94
        if (!$context['_iterated']) {
            // line 95
            yield "            <div class=\"col-12 text-center\">
                <p class=\"text-muted\">Aucun événement disponible.</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        yield "    </div>
</div>

<script>
    // Gérer la soumission du formulaire de recherche
    document.getElementById('searchForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Empêcher la soumission du formulaire

        const searchTerm = document.getElementById('searchInput').value;

        // Envoyer une requête AJAX à l'API
        fetch(`/api/evenements/recherche?search=\${encodeURIComponent(searchTerm)}`)
            .then(response => response.json())
            .then(data => {
                const eventList = document.getElementById('eventList');
                eventList.innerHTML = ''; // Effacer les résultats précédents

                // Afficher les nouveaux résultats
                data.forEach(event => {
                    const eventCard = `
                        <div class=\"col-md-4 mb-4\">
                            <div class=\"card shadow-sm d-flex flex-column\">
                                <div class=\"card-body d-flex flex-column justify-content-between\">
                                    <h5 class=\"card-title text-center\">\${event.description}</h5>
                                    <p class=\"card-text text-center\">
                                        <strong>Date:</strong> \${event.date}<br>
                                        <strong>Lieu:</strong> \${event.lieu}<br> 
                                        <strong>Type:</strong> \${event.type}<br>
                                    </p>

                                    <div class=\"d-flex justify-content-center\">
                                        <span class=\"badge \${event.disponibilite === 'Disponible' ? 'bg-success' : 'bg-danger'}\">
                                            \${event.disponibilite}
                                        </span>
                                    </div>

                                    <div class=\"mt-3\">
                                        \${event.isParticipating ?
                                            `<a href=\"/evenement/\${event.id}/annuler/\${event.userId}\" class=\"btn btn-danger btn-sm w-100\">
                                                Annuler participation
                                            </a>` :
                                            `<a href=\"/evenement/\${event.id}/postuler/\${event.userId}\" class=\"btn btn-primary btn-sm w-100\">
                                                Participer
                                            </a>`
                                        }
                                    </div>
                                </div>
                            </div>
                        </div>
                    `;
                    eventList.innerHTML += eventCard;
                });

                if (data.length === 0) {
                    eventList.innerHTML = '<div class=\"col-12 text-center\"><p class=\"text-muted\">Aucun événement trouvé.</p></div>';
                }
            })
            .catch(error => console.error('Erreur lors de la recherche:', error));
    });
</script>










<script>
    // Fonction pour traduire un texte avec MyMemory API
    async function translateText(text, sourceLang, targetLang) {
        // Si la langue source et la langue cible sont identiques, retourner le texte original
        if (sourceLang === targetLang) {
            return text;
        }

        const apiUrl = `https://api.mymemory.translated.net/get?q=\${encodeURIComponent(text)}&langpair=\${sourceLang}|\${targetLang}`;

        try {
            const response = await fetch(apiUrl);
            const data = await response.json();

            if (data.responseData && data.responseData.translatedText) {
                return data.responseData.translatedText;
            } else {
                console.error('Erreur de traduction :', data);
                return text; // Retourne le texte original en cas d'erreur
            }
        } catch (error) {
            console.error('Erreur de traduction :', error);
            return text; // Retourne le texte original en cas d'erreur
        }
    }

    // Fonction pour traduire toute la page
    async function translatePage(targetLang) {
        const sourceLang = 'fr'; // Langue source fixée au français

        // Sélectionner tous les éléments à traduire
        const elementsToTranslate = document.querySelectorAll(
            'h1, h5.card-title, p.card-text, span.badge, a.btn, p.text-center, p.text-muted, button.btn, text-end mb-3'
        );

        // Traduire chaque élément
        for (const element of elementsToTranslate) {
            // Stocker le texte original dans un attribut personnalisé
            if (!element.hasAttribute('data-original-text')) {
                element.setAttribute('data-original-text', element.innerText.trim());
            }

            const originalText = element.getAttribute('data-original-text');
            if (originalText) {
                if (sourceLang === targetLang) {
                    // Restaurer le texte original si la langue cible est la même que la langue source
                    element.innerText = originalText;
                } else {
                    // Traduire le texte si la langue cible est différente
                    const translatedText = await translateText(originalText, sourceLang, targetLang);
                    element.innerText = translatedText;
                }
            }
        }

        // Traduire le placeholder du champ de recherche
        const searchInput = document.getElementById('searchInput');
        if (searchInput) {
            // Stocker le placeholder original dans un attribut personnalisé
            if (!searchInput.hasAttribute('data-original-placeholder')) {
                searchInput.setAttribute('data-original-placeholder', searchInput.getAttribute('placeholder'));
            }

            const originalPlaceholder = searchInput.getAttribute('data-original-placeholder');
            if (originalPlaceholder) {
                if (sourceLang === targetLang) {
                    // Restaurer le placeholder original si la langue cible est la même que la langue source
                    searchInput.setAttribute('placeholder', originalPlaceholder);
                } else {
                    // Traduire le placeholder si la langue cible est différente
                    const translatedPlaceholder = await translateText(originalPlaceholder, sourceLang, targetLang);
                    searchInput.setAttribute('placeholder', translatedPlaceholder);
                }
            }
        }
    }

    // Gérer le changement de langue
    document.getElementById('languageSelect').addEventListener('change', async function() {
        const selectedLang = this.value;
        await translatePage(selectedLang);
    });

    // Gérer la soumission du formulaire de recherche
    document.getElementById('searchForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Empêcher la soumission du formulaire

        const searchTerm = document.getElementById('searchInput').value;

        // Envoyer une requête AJAX à l'API
        fetch(`/api/evenements/recherche?search=\${encodeURIComponent(searchTerm)}`)
            .then(response => response.json())
            .then(data => {
                const eventList = document.getElementById('eventList');
                eventList.innerHTML = ''; // Effacer les résultats précédents

                // Afficher les nouveaux résultats
                data.forEach(event => {
                    const eventCard = `
                        <div class=\"col-md-4 mb-4\">
                            <div class=\"card shadow-sm d-flex flex-column\">
                                <div class=\"card-body d-flex flex-column justify-content-between\">
                                    <h5 class=\"card-title text-center\">\${event.description}</h5>
                                    <p class=\"card-text text-center\">
                                        <strong>Date:</strong> \${event.date}<br>
                                        <strong>Lieu:</strong> \${event.lieu}<br> 
                                        <strong>Type:</strong> \${event.type}<br>
                                    </p>

                                    <div class=\"d-flex justify-content-center\">
                                        <span class=\"badge \${event.disponibilite === 'Disponible' ? 'bg-success' : 'bg-danger'}\">
                                            \${event.disponibilite}
                                        </span>
                                    </div>

                                    <div class=\"mt-3\">
                                        <a href=\"/evenement/\${event.id}/postuler/\${event.userId}\" class=\"btn btn-primary btn-sm w-100\">
                                            Participer
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `;
                    eventList.innerHTML += eventCard;
                });

                if (data.length === 0) {
                    eventList.innerHTML = '<div class=\"col-12 text-center\"><p class=\"text-muted\">Aucun événement trouvé.</p></div>';
                }
            })
            .catch(error => console.error('Erreur lors de la recherche:', error));
    });

    // Gérer le tri des événements
    document.addEventListener('DOMContentLoaded', function() {
        const eventList = document.getElementById('eventList');
        const sortAZ = document.getElementById('sortAZ');
        const sortZA = document.getElementById('sortZA');
        const sortDateAsc = document.getElementById('sortDateAsc');
        const sortDateDesc = document.getElementById('sortDateDesc');
        const sortType = document.getElementById('sortType');

        function sortEvents(order) {
            const events = Array.from(eventList.getElementsByClassName('col-md-4'));

            events.sort((a, b) => {
                const titleA = a.querySelector('.card-title').textContent.toLowerCase();
                const titleB = b.querySelector('.card-title').textContent.toLowerCase();
                const dateA = new Date(a.querySelector('.card-text').textContent.match(/\\d{4}-\\d{2}-\\d{2} \\d{2}:\\d{2}/)[0]);
                const dateB = new Date(b.querySelector('.card-text').textContent.match(/\\d{4}-\\d{2}-\\d{2} \\d{2}:\\d{2}/)[0]);
                const typeA = a.querySelector('.card-text').textContent.match(/Type: (.+)/)[1].toLowerCase();
                const typeB = b.querySelector('.card-text').textContent.match(/Type: (.+)/)[1].toLowerCase();

                switch (order) {
                    case 'AZ':
                        return titleA.localeCompare(titleB);
                    case 'ZA':
                        return titleB.localeCompare(titleA);
                    case 'dateAsc':
                        return dateA - dateB;
                    case 'dateDesc':
                        return dateB - dateA;
                    case 'type':
                        return typeA.localeCompare(typeB);
                    default:
                        return 0;
                }
            });

            // Effacer la liste actuelle
            eventList.innerHTML = '';

            // Ajouter les événements triés
            events.forEach(event => eventList.appendChild(event));
        }

        sortAZ.addEventListener('click', () => sortEvents('AZ'));
        sortZA.addEventListener('click', () => sortEvents('ZA'));
        sortDateAsc.addEventListener('click', () => sortEvents('dateAsc'));
        sortDateDesc.addEventListener('click', () => sortEvents('dateDesc'));
        sortType.addEventListener('click', () => sortEvents('type'));
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
        return "evenements/index.html.twig";
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
        return array (  266 => 99,  257 => 95,  255 => 94,  243 => 87,  239 => 85,  235 => 84,  233 => 83,  230 => 82,  222 => 78,  220 => 77,  212 => 73,  210 => 72,  207 => 71,  205 => 70,  203 => 69,  195 => 64,  191 => 63,  186 => 60,  182 => 58,  174 => 55,  169 => 53,  164 => 50,  162 => 49,  155 => 44,  151 => 43,  147 => 42,  142 => 40,  137 => 37,  132 => 36,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Evènements{% endblock %}

{% block body %}
<div class=\"text-end mb-3\" style=\"margin-right: 20px;\">
    <label for=\"languageSelect\" ></label>
    <select id=\"languageSelect\" class=\"form-select d-inline-block\" style=\"width: 200px;\">
        <option value=\"fr\">Français</option>
        <option value=\"en\">English</option>
        <option value=\"es\">Español</option>
        <option value=\"ar\">العربية</option>
    </select>
</div> 

<h1 class=\"mb-3 text-center\">Evènements</h1>  

<div class=\"d-flex justify-content-center mb-3\">
    <button id=\"sortAZ\" class=\"btn btn-outline-primary me-2\">Trier A-Z</button>
    <button id=\"sortZA\" class=\"btn btn-outline-primary me-2\">Trier Z-A</button>
    <button id=\"sortDateAsc\" class=\"btn btn-outline-primary me-2\">Trier par date (ancien)</button>
    <button id=\"sortDateDesc\" class=\"btn btn-outline-primary me-2\">Trier par date (récent)</button>
    <button id=\"sortType\" class=\"btn btn-outline-primary\">Trier par type</button>
</div>

<!-- Formulaire de recherche -->
<form id=\"searchForm\" class=\"d-flex\" style=\"margin-left: 20px;\">
    <input type=\"text\" id=\"searchInput\" class=\"form-control\" placeholder=\"Rechercher une offre...\" style=\"border-radius: 20px; padding-left: 10px;\">
    <button type=\"submit\" class=\"btn btn-outline\" style=\"border-radius: 20px;\">
        <i class=\"fa fa-search\" style=\"color:rgb(115, 160, 141);\"></i>
    </button>
</form>

<div class=\"container mt-5\">
    <div class=\"row\" id=\"eventList\">
        {% for event in tabevent %}
            <div class=\"col-md-4 mb-4\">
                <div class=\"card shadow-sm d-flex flex-column\">
                    <div class=\"card-body d-flex flex-column justify-content-between\">
                        <h5 class=\"card-title text-center\">{{ event.description }}</h5>
                        <p class=\"card-text text-center\">
                            <strong>Date:</strong> {{ event.date|date('Y-m-d H:i') }}<br>
                            <strong>Lieu:</strong> {{ event.lieu }}<br> 
                            <strong>Type:</strong> {{ event.TypeEvent.nom }}<br>
                        </p>

                       
{# Afficher la météo #}
{% if weatherData[event.id] %}
    <div class=\"text-center\">
        <strong>Météo :</strong><br>
        <div style=\"font-size: 24px;\">
            {{ weatherData[event.id]['icon'] }}
        </div>
        Température : {{ weatherData[event.id]['temperature_max']|round(0) }}°C / {{ weatherData[event.id]['temperature_min']|round(0) }}°C<br>
    </div>
{% else %}
    <p class=\"text-center text-muted\">Données météo non disponibles.</p>
{% endif %}
                        

                        <div class=\"d-flex justify-content-center\">
                            <span class=\"badge {{ event.disponibilite ? 'bg-success' : 'bg-danger' }}\">
                                {{ event.disponibilite ? 'Disponible' : 'Non disponible' }}
                            </span>
                        </div>

                        <div class=\"mt-3\">
                            {% if app.user %}
                                {# Si l'utilisateur est connecté #}
                                {% if app.user in event.utilisateurs %}
                                    {# Si l'utilisateur participe déjà, afficher \"Annuler participation\" #}
                                    <a href=\"{{ path('evenement_annuler', { idevenement: event.id, iduser: app.user.id }) }}\" class=\"btn btn-danger btn-sm w-100\">
                                        Annuler participation
                                    </a>
                                {% else %}
                                    {# Sinon, afficher \"Participer\" #}
                                    <a href=\"{{ path('evenement_postuler', { idevenement: event.id, iduser: app.user.id }) }}\" class=\"btn btn-primary btn-sm w-100\">
                                        Participer
                                    </a>
                                {% endif %}
                            {% else %}
                                {# Si l'utilisateur n'est pas connecté, afficher un message #}
                                <p class=\"text-center\">Connectez-vous pour participer.</p>
                            {% endif %} 
                            <!-- Bouton \"Voir les détails\" -->
    <a href=\"{{ path('app_event_show', { id: event.id }) }}\" class=\"btn btn-info btn-sm w-100\">
        Voir les détails
    </a>
                        </div>
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"col-12 text-center\">
                <p class=\"text-muted\">Aucun événement disponible.</p>
            </div>
        {% endfor %}
    </div>
</div>

<script>
    // Gérer la soumission du formulaire de recherche
    document.getElementById('searchForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Empêcher la soumission du formulaire

        const searchTerm = document.getElementById('searchInput').value;

        // Envoyer une requête AJAX à l'API
        fetch(`/api/evenements/recherche?search=\${encodeURIComponent(searchTerm)}`)
            .then(response => response.json())
            .then(data => {
                const eventList = document.getElementById('eventList');
                eventList.innerHTML = ''; // Effacer les résultats précédents

                // Afficher les nouveaux résultats
                data.forEach(event => {
                    const eventCard = `
                        <div class=\"col-md-4 mb-4\">
                            <div class=\"card shadow-sm d-flex flex-column\">
                                <div class=\"card-body d-flex flex-column justify-content-between\">
                                    <h5 class=\"card-title text-center\">\${event.description}</h5>
                                    <p class=\"card-text text-center\">
                                        <strong>Date:</strong> \${event.date}<br>
                                        <strong>Lieu:</strong> \${event.lieu}<br> 
                                        <strong>Type:</strong> \${event.type}<br>
                                    </p>

                                    <div class=\"d-flex justify-content-center\">
                                        <span class=\"badge \${event.disponibilite === 'Disponible' ? 'bg-success' : 'bg-danger'}\">
                                            \${event.disponibilite}
                                        </span>
                                    </div>

                                    <div class=\"mt-3\">
                                        \${event.isParticipating ?
                                            `<a href=\"/evenement/\${event.id}/annuler/\${event.userId}\" class=\"btn btn-danger btn-sm w-100\">
                                                Annuler participation
                                            </a>` :
                                            `<a href=\"/evenement/\${event.id}/postuler/\${event.userId}\" class=\"btn btn-primary btn-sm w-100\">
                                                Participer
                                            </a>`
                                        }
                                    </div>
                                </div>
                            </div>
                        </div>
                    `;
                    eventList.innerHTML += eventCard;
                });

                if (data.length === 0) {
                    eventList.innerHTML = '<div class=\"col-12 text-center\"><p class=\"text-muted\">Aucun événement trouvé.</p></div>';
                }
            })
            .catch(error => console.error('Erreur lors de la recherche:', error));
    });
</script>










<script>
    // Fonction pour traduire un texte avec MyMemory API
    async function translateText(text, sourceLang, targetLang) {
        // Si la langue source et la langue cible sont identiques, retourner le texte original
        if (sourceLang === targetLang) {
            return text;
        }

        const apiUrl = `https://api.mymemory.translated.net/get?q=\${encodeURIComponent(text)}&langpair=\${sourceLang}|\${targetLang}`;

        try {
            const response = await fetch(apiUrl);
            const data = await response.json();

            if (data.responseData && data.responseData.translatedText) {
                return data.responseData.translatedText;
            } else {
                console.error('Erreur de traduction :', data);
                return text; // Retourne le texte original en cas d'erreur
            }
        } catch (error) {
            console.error('Erreur de traduction :', error);
            return text; // Retourne le texte original en cas d'erreur
        }
    }

    // Fonction pour traduire toute la page
    async function translatePage(targetLang) {
        const sourceLang = 'fr'; // Langue source fixée au français

        // Sélectionner tous les éléments à traduire
        const elementsToTranslate = document.querySelectorAll(
            'h1, h5.card-title, p.card-text, span.badge, a.btn, p.text-center, p.text-muted, button.btn, text-end mb-3'
        );

        // Traduire chaque élément
        for (const element of elementsToTranslate) {
            // Stocker le texte original dans un attribut personnalisé
            if (!element.hasAttribute('data-original-text')) {
                element.setAttribute('data-original-text', element.innerText.trim());
            }

            const originalText = element.getAttribute('data-original-text');
            if (originalText) {
                if (sourceLang === targetLang) {
                    // Restaurer le texte original si la langue cible est la même que la langue source
                    element.innerText = originalText;
                } else {
                    // Traduire le texte si la langue cible est différente
                    const translatedText = await translateText(originalText, sourceLang, targetLang);
                    element.innerText = translatedText;
                }
            }
        }

        // Traduire le placeholder du champ de recherche
        const searchInput = document.getElementById('searchInput');
        if (searchInput) {
            // Stocker le placeholder original dans un attribut personnalisé
            if (!searchInput.hasAttribute('data-original-placeholder')) {
                searchInput.setAttribute('data-original-placeholder', searchInput.getAttribute('placeholder'));
            }

            const originalPlaceholder = searchInput.getAttribute('data-original-placeholder');
            if (originalPlaceholder) {
                if (sourceLang === targetLang) {
                    // Restaurer le placeholder original si la langue cible est la même que la langue source
                    searchInput.setAttribute('placeholder', originalPlaceholder);
                } else {
                    // Traduire le placeholder si la langue cible est différente
                    const translatedPlaceholder = await translateText(originalPlaceholder, sourceLang, targetLang);
                    searchInput.setAttribute('placeholder', translatedPlaceholder);
                }
            }
        }
    }

    // Gérer le changement de langue
    document.getElementById('languageSelect').addEventListener('change', async function() {
        const selectedLang = this.value;
        await translatePage(selectedLang);
    });

    // Gérer la soumission du formulaire de recherche
    document.getElementById('searchForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Empêcher la soumission du formulaire

        const searchTerm = document.getElementById('searchInput').value;

        // Envoyer une requête AJAX à l'API
        fetch(`/api/evenements/recherche?search=\${encodeURIComponent(searchTerm)}`)
            .then(response => response.json())
            .then(data => {
                const eventList = document.getElementById('eventList');
                eventList.innerHTML = ''; // Effacer les résultats précédents

                // Afficher les nouveaux résultats
                data.forEach(event => {
                    const eventCard = `
                        <div class=\"col-md-4 mb-4\">
                            <div class=\"card shadow-sm d-flex flex-column\">
                                <div class=\"card-body d-flex flex-column justify-content-between\">
                                    <h5 class=\"card-title text-center\">\${event.description}</h5>
                                    <p class=\"card-text text-center\">
                                        <strong>Date:</strong> \${event.date}<br>
                                        <strong>Lieu:</strong> \${event.lieu}<br> 
                                        <strong>Type:</strong> \${event.type}<br>
                                    </p>

                                    <div class=\"d-flex justify-content-center\">
                                        <span class=\"badge \${event.disponibilite === 'Disponible' ? 'bg-success' : 'bg-danger'}\">
                                            \${event.disponibilite}
                                        </span>
                                    </div>

                                    <div class=\"mt-3\">
                                        <a href=\"/evenement/\${event.id}/postuler/\${event.userId}\" class=\"btn btn-primary btn-sm w-100\">
                                            Participer
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `;
                    eventList.innerHTML += eventCard;
                });

                if (data.length === 0) {
                    eventList.innerHTML = '<div class=\"col-12 text-center\"><p class=\"text-muted\">Aucun événement trouvé.</p></div>';
                }
            })
            .catch(error => console.error('Erreur lors de la recherche:', error));
    });

    // Gérer le tri des événements
    document.addEventListener('DOMContentLoaded', function() {
        const eventList = document.getElementById('eventList');
        const sortAZ = document.getElementById('sortAZ');
        const sortZA = document.getElementById('sortZA');
        const sortDateAsc = document.getElementById('sortDateAsc');
        const sortDateDesc = document.getElementById('sortDateDesc');
        const sortType = document.getElementById('sortType');

        function sortEvents(order) {
            const events = Array.from(eventList.getElementsByClassName('col-md-4'));

            events.sort((a, b) => {
                const titleA = a.querySelector('.card-title').textContent.toLowerCase();
                const titleB = b.querySelector('.card-title').textContent.toLowerCase();
                const dateA = new Date(a.querySelector('.card-text').textContent.match(/\\d{4}-\\d{2}-\\d{2} \\d{2}:\\d{2}/)[0]);
                const dateB = new Date(b.querySelector('.card-text').textContent.match(/\\d{4}-\\d{2}-\\d{2} \\d{2}:\\d{2}/)[0]);
                const typeA = a.querySelector('.card-text').textContent.match(/Type: (.+)/)[1].toLowerCase();
                const typeB = b.querySelector('.card-text').textContent.match(/Type: (.+)/)[1].toLowerCase();

                switch (order) {
                    case 'AZ':
                        return titleA.localeCompare(titleB);
                    case 'ZA':
                        return titleB.localeCompare(titleA);
                    case 'dateAsc':
                        return dateA - dateB;
                    case 'dateDesc':
                        return dateB - dateA;
                    case 'type':
                        return typeA.localeCompare(typeB);
                    default:
                        return 0;
                }
            });

            // Effacer la liste actuelle
            eventList.innerHTML = '';

            // Ajouter les événements triés
            events.forEach(event => eventList.appendChild(event));
        }

        sortAZ.addEventListener('click', () => sortEvents('AZ'));
        sortZA.addEventListener('click', () => sortEvents('ZA'));
        sortDateAsc.addEventListener('click', () => sortEvents('dateAsc'));
        sortDateDesc.addEventListener('click', () => sortEvents('dateDesc'));
        sortType.addEventListener('click', () => sortEvents('type'));
    });
</script>

{% endblock %}", "evenements/index.html.twig", "C:\\careera\\templates\\evenements\\index.html.twig");
    }
}
