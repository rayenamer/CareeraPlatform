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

/* demande_mission/mes_candidatures.html.twig */
class __TwigTemplate_8e3d1e6311321d39939ad76b03c1ad3e extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "demande_mission/mes_candidatures.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "demande_mission/mes_candidatures.html.twig"));

        // line 2
        yield "
<h1>Mes candidatures</h1>

";
        // line 5
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["candidatures"]) || array_key_exists("candidatures", $context) ? $context["candidatures"] : (function () { throw new RuntimeError('Variable "candidatures" does not exist.', 5, $this->source); })()))) {
            // line 6
            yield "    <ul>
        ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["candidatures"]) || array_key_exists("candidatures", $context) ? $context["candidatures"] : (function () { throw new RuntimeError('Variable "candidatures" does not exist.', 7, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["candidature"]) {
                // line 8
                yield "            <li>
                <strong>";
                // line 9
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "mission", [], "any", false, false, false, 9), "titre", [], "any", false, false, false, 9), "html", null, true);
                yield "</strong><br>
                Statut: ";
                // line 10
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "etat", [], "any", false, false, false, 10)), "html", null, true);
                yield "<br>
                Score: ";
                // line 11
                yield (( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "score", [], "any", false, false, false, 11))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "score", [], "any", false, false, false, 11), "html", null, true)) : ("N/A"));
                yield "<br>
                <small>Demande envoyée le : ";
                // line 12
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "demande", [], "any", false, false, false, 12), "createdAt", [], "any", false, false, false, 12), "d/m/Y"), "html", null, true);
                yield "</small>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['candidature'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            yield "    </ul>
";
        } else {
            // line 17
            yield "    <p>Aucune candidature trouvée.</p>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "demande_mission/mes_candidatures.html.twig";
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
        return array (  90 => 17,  86 => 15,  77 => 12,  73 => 11,  69 => 10,  65 => 9,  62 => 8,  58 => 7,  55 => 6,  53 => 5,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/demande_mission/mes_candidatures.html.twig #}

<h1>Mes candidatures</h1>

{% if candidatures is not empty %}
    <ul>
        {% for candidature in candidatures %}
            <li>
                <strong>{{ candidature.mission.titre }}</strong><br>
                Statut: {{ candidature.etat|capitalize }}<br>
                Score: {{ candidature.score is not null ? candidature.score : 'N/A' }}<br>
                <small>Demande envoyée le : {{ candidature.demande.createdAt|date('d/m/Y') }}</small>
            </li>
        {% endfor %}
    </ul>
{% else %}
    <p>Aucune candidature trouvée.</p>
{% endif %}
", "demande_mission/mes_candidatures.html.twig", "C:\\Users\\wiem\\Desktop\\CareeraPlatform\\templates\\demande_mission\\mes_candidatures.html.twig");
    }
}
