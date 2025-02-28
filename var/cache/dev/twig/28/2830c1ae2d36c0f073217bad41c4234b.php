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

/* candidature/index.html.twig */
class __TwigTemplate_2f35d3b9b36ee260504e8f881e2ba2ab extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidature/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidature/index.html.twig"));

        // line 1
        yield "<h1>Candidatures pour l'offre: ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 1, $this->source); })()), "titre", [], "any", false, false, false, 1), "html", null, true);
        yield "</h1>

<table>
    <thead>
        <tr>
            <th>Freelancer</th>
            <th>État</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["candidatures"]) || array_key_exists("candidatures", $context) ? $context["candidatures"] : (function () { throw new RuntimeError('Variable "candidatures" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["candidature"]) {
            // line 13
            yield "            <tr>
                <td>";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "utilisateur", [], "any", false, false, false, 14), "nom", [], "any", false, false, false, 14), "html", null, true);
            yield "</td>
                <td>";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "etat", [], "any", false, false, false, 15), "html", null, true);
            yield "</td>
                <td>
                    ";
            // line 17
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "etat", [], "any", false, false, false, 17) == "EN_ATTENTE")) {
                // line 18
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("traiter_candidature", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "id", [], "any", false, false, false, 18), "action" => "accepter"]), "html", null, true);
                yield "\">Accepter</a> |
                        <a href=\"";
                // line 19
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("traiter_candidature", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "id", [], "any", false, false, false, 19), "action" => "refuser"]), "html", null, true);
                yield "\">Refuser</a>
                    ";
            }
            // line 21
            yield "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['candidature'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        yield "    </tbody>
</table>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "candidature/index.html.twig";
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
        return array (  99 => 24,  91 => 21,  86 => 19,  81 => 18,  79 => 17,  74 => 15,  70 => 14,  67 => 13,  63 => 12,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<h1>Candidatures pour l'offre: {{ offre.titre }}</h1>

<table>
    <thead>
        <tr>
            <th>Freelancer</th>
            <th>État</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        {% for candidature in candidatures %}
            <tr>
                <td>{{ candidature.utilisateur.nom }}</td>
                <td>{{ candidature.etat }}</td>
                <td>
                    {% if candidature.etat == 'EN_ATTENTE' %}
                        <a href=\"{{ path('traiter_candidature', { 'id': candidature.id, 'action': 'accepter' }) }}\">Accepter</a> |
                        <a href=\"{{ path('traiter_candidature', { 'id': candidature.id, 'action': 'refuser' }) }}\">Refuser</a>
                    {% endif %}
                </td>
            </tr>
        {% endfor %}
    </tbody>
</table>
", "candidature/index.html.twig", "C:\\Users\\wiem\\Desktop\\CareeraPlatform\\templates\\candidature\\index.html.twig");
    }
}
