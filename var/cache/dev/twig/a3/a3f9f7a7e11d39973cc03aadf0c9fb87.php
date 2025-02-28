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

/* candidature/voir_candidatures.html.twig */
class __TwigTemplate_63e98d24a93df044c76ec05be9127cc6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidature/voir_candidatures.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidature/voir_candidatures.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "candidature/voir_candidatures.html.twig", 1);
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

        yield "Voir les Candidatures";
        
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
        yield "    <div class=\"container mt-4\">
        <h1 class=\"mb-4 text-center\">Toutes les candidatures</h1>

        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "flashes", ["success"], "method", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 10
            yield "            <div class=\"alert alert-success\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        yield "
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "flashes", ["error"], "method", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 14
            yield "            <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        yield "
        <div class=\"table-responsive\">
            <table class=\"table table-striped table-bordered text-center\">
                <thead class=\"table-dark\">
                    <tr>
                        <th>ID</th>
                        <th>Mission</th>
                      
                        <th>État</th>
                        <th>Action</th>
                        <th>Voir plus</th>
                        <th>Évaluer</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["candidatures"]) || array_key_exists("candidatures", $context) ? $context["candidatures"] : (function () { throw new RuntimeError('Variable "candidatures" does not exist.', 31, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["candidature"]) {
            // line 32
            yield "                        <tr>
                            <td>";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "id", [], "any", false, false, false, 33), "html", null, true);
            yield "</td>
                            <td>";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "mission", [], "any", false, false, false, 34), "titre", [], "any", false, false, false, 34), "html", null, true);
            yield "</td>
                            <td>
                                <span class=\"badge ";
            // line 36
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "etat", [], "any", false, false, false, 36) == "EN_ATTENTE")) {
                yield "bg-warning";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "etat", [], "any", false, false, false, 36) == "ACCEPTEE")) {
                yield "bg-success";
            } else {
                yield "bg-danger";
            }
            yield "\">
                                    ";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "etat", [], "any", false, false, false, 37), "html", null, true);
            yield "
                                </span>
                            </td>
                            <td>
                                <form action=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accepter_refuser_candidature", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "id", [], "any", false, false, false, 41), "action" => "accepter"]), "html", null, true);
            yield "\" method=\"post\" style=\"display:inline;\">
                                    <button type=\"submit\" class=\"btn btn-success btn-sm\">Accepter</button>
                                </form>
                                <form action=\"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accepter_refuser_candidature", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "id", [], "any", false, false, false, 44), "action" => "refuser"]), "html", null, true);
            yield "\" method=\"post\" style=\"display:inline;\">
                                    <button type=\"submit\" class=\"btn btn-danger btn-sm\">Refuser</button>
                                </form>
                            </td>
                                     <td>
                        <a href=\"";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voir_demande_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "demande", [], "any", false, false, false, 49), "id", [], "any", false, false, false, 49)]), "html", null, true);
            yield "\">
                            <button type=\"button\">Voir plus</button>
                        </a>
                    </td>
                            <td>
                                <form action=\"";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evaluer_candidature", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "id", [], "any", false, false, false, 54)]), "html", null, true);
            yield "\" method=\"post\" style=\"display:inline;\">
                                    <select name=\"score\" class=\"form-select form-select-sm d-inline w-auto\" required>
                                        ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 57
                yield "                                            <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "</option>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            yield "                                    </select>
                                    <button type=\"submit\" class=\"btn btn-primary btn-sm\">Évaluer</button>
                                </form>
                            </td>
                    
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 69
        if (!$context['_iterated']) {
            // line 66
            yield "                        <tr>
                            <td colspan=\"5\" class=\"text-center\">Aucune candidature disponible.</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['candidature'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        yield "                </tbody>
            </table>
        </div>
    </div>
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
        return "candidature/voir_candidatures.html.twig";
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
        return array (  248 => 70,  239 => 66,  237 => 69,  227 => 59,  216 => 57,  212 => 56,  207 => 54,  199 => 49,  191 => 44,  185 => 41,  178 => 37,  168 => 36,  163 => 34,  159 => 33,  156 => 32,  151 => 31,  134 => 16,  125 => 14,  121 => 13,  118 => 12,  109 => 10,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Voir les Candidatures{% endblock %}

{% block body %}
    <div class=\"container mt-4\">
        <h1 class=\"mb-4 text-center\">Toutes les candidatures</h1>

        {% for message in app.flashes('success') %}
            <div class=\"alert alert-success\">{{ message }}</div>
        {% endfor %}

        {% for message in app.flashes('error') %}
            <div class=\"alert alert-danger\">{{ message }}</div>
        {% endfor %}

        <div class=\"table-responsive\">
            <table class=\"table table-striped table-bordered text-center\">
                <thead class=\"table-dark\">
                    <tr>
                        <th>ID</th>
                        <th>Mission</th>
                      
                        <th>État</th>
                        <th>Action</th>
                        <th>Voir plus</th>
                        <th>Évaluer</th>
                    </tr>
                </thead>
                <tbody>
                    {% for candidature in candidatures %}
                        <tr>
                            <td>{{ candidature.id }}</td>
                            <td>{{ candidature.mission.titre }}</td>
                            <td>
                                <span class=\"badge {% if candidature.etat == 'EN_ATTENTE' %}bg-warning{% elseif candidature.etat == 'ACCEPTEE' %}bg-success{% else %}bg-danger{% endif %}\">
                                    {{ candidature.etat }}
                                </span>
                            </td>
                            <td>
                                <form action=\"{{ path('accepter_refuser_candidature', {'id': candidature.id, 'action': 'accepter'}) }}\" method=\"post\" style=\"display:inline;\">
                                    <button type=\"submit\" class=\"btn btn-success btn-sm\">Accepter</button>
                                </form>
                                <form action=\"{{ path('accepter_refuser_candidature', {'id': candidature.id, 'action': 'refuser'}) }}\" method=\"post\" style=\"display:inline;\">
                                    <button type=\"submit\" class=\"btn btn-danger btn-sm\">Refuser</button>
                                </form>
                            </td>
                                     <td>
                        <a href=\"{{ path('voir_demande_details', {'id': candidature.demande.id}) }}\">
                            <button type=\"button\">Voir plus</button>
                        </a>
                    </td>
                            <td>
                                <form action=\"{{ path('evaluer_candidature', {'id': candidature.id}) }}\" method=\"post\" style=\"display:inline;\">
                                    <select name=\"score\" class=\"form-select form-select-sm d-inline w-auto\" required>
                                        {% for i in 1..10 %}
                                            <option value=\"{{ i }}\">{{ i }}</option>
                                        {% endfor %}
                                    </select>
                                    <button type=\"submit\" class=\"btn btn-primary btn-sm\">Évaluer</button>
                                </form>
                            </td>
                    
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"5\" class=\"text-center\">Aucune candidature disponible.</td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
{% endblock %}
", "candidature/voir_candidatures.html.twig", "C:\\Users\\wiem\\Desktop\\CareeraPlatform\\templates\\candidature\\voir_candidatures.html.twig");
    }
}
