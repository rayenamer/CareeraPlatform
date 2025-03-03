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

/* security/updatechercheur.html.twig */
class __TwigTemplate_af87f5703ccda61117a9c72d4c743ea3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/updatechercheur.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/updatechercheur.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/updatechercheur.html.twig", 1);
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

        yield "Modifier";
        
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
        yield "<div class=\"container mb-5\">
  <div class=\"row justify-content-center align-items-center\">
    <div class=\"col-md-6\">
      <div class=\"card shadow-lg p-4 rounded-4\">
        <h3 class=\"text-center mb-4 fw-bold text-primary\">
          <i class=\"fas fa-user-plus\"></i> Modifier
        </h3>
        <form action=\"\" method=\"post\" enctype=\"multipart/form-data\" novalidate=\"novalidate\">
          <div class=\"row mb-3\">
            <div class=\"col\">
              <label for=\"nom\" class=\"form-label fw-semibold\">Nom :</label>
              <input type=\"text\" id=\"nom\" name=\"nom\" class=\"form-control\" placeholder=\"Votre nom\" value=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["chercheur"] ?? null), "nom", [], "any", true, true, false, 17)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chercheur"]) || array_key_exists("chercheur", $context) ? $context["chercheur"] : (function () { throw new RuntimeError('Variable "chercheur" does not exist.', 17, $this->source); })()), "nom", [], "any", false, false, false, 17), "")) : ("")), "html", null, true);
        yield "\" required>
            </div>
            <div class=\"col\">
              <label for=\"prenom\" class=\"form-label fw-semibold\">Prénom :</label>
              <input type=\"text\" id=\"prenom\" name=\"prenom\" class=\"form-control\" placeholder=\"Votre prénom\" value=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["chercheur"] ?? null), "prenom", [], "any", true, true, false, 21)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chercheur"]) || array_key_exists("chercheur", $context) ? $context["chercheur"] : (function () { throw new RuntimeError('Variable "chercheur" does not exist.', 21, $this->source); })()), "prenom", [], "any", false, false, false, 21), "")) : ("")), "html", null, true);
        yield "\" required>
            </div>
          </div>
          
          <div class=\"mb-3\">
            <label for=\"email\" class=\"form-label fw-semibold\">Email :</label>
            <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" placeholder=\"exemple@email.com\"
                   value=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["chercheur"] ?? null), "email", [], "any", true, true, false, 28)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chercheur"]) || array_key_exists("chercheur", $context) ? $context["chercheur"] : (function () { throw new RuntimeError('Variable "chercheur" does not exist.', 28, $this->source); })()), "email", [], "any", false, false, false, 28), "")) : ("")), "html", null, true);
        yield "\" required>
          </div>
          
          <div class=\"row mb-3\">
            <div class=\"col\">
              <label for=\"motdepasse\" class=\"form-label fw-semibold\">Mot de passe :</label>
              <input type=\"password\" id=\"motdepasse\" name=\"motdepasse\" class=\"form-control\" placeholder=\"********\" required>
            </div>
            <div class=\"col\">
              <label for=\"confirmpasse\" class=\"form-label fw-semibold\">Confirmer :</label>
              <input type=\"password\" id=\"confirmpasse\" name=\"confirmpasse\" class=\"form-control\" placeholder=\"********\" required>
            </div>
          </div>
       
          
          <div class=\"mb-3\">
            <label for=\"domaine\" class=\"form-label fw-semibold\">Domaine :</label>
            <input type=\"text\" id=\"domaine\" name=\"domaine\" class=\"form-control\" placeholder=\"Domaine d'activité\" value=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["chercheur"] ?? null), "domaine", [], "any", true, true, false, 45)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chercheur"]) || array_key_exists("chercheur", $context) ? $context["chercheur"] : (function () { throw new RuntimeError('Variable "chercheur" does not exist.', 45, $this->source); })()), "domaine", [], "any", false, false, false, 45), "")) : ("")), "html", null, true);
        yield "\">
          </div>
          
          <div class=\"mb-3\">
            <label for=\"tel\" class=\"form-label fw-semibold\">Téléphone :</label>
            <input type=\"text\" id=\"tel\" name=\"tel\" class=\"form-control\" placeholder=\"+216 99 999 999\" value=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["chercheur"] ?? null), "tel", [], "any", true, true, false, 50)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chercheur"]) || array_key_exists("chercheur", $context) ? $context["chercheur"] : (function () { throw new RuntimeError('Variable "chercheur" does not exist.', 50, $this->source); })()), "tel", [], "any", false, false, false, 50), "")) : ("")), "html", null, true);
        yield "\">
          </div>
          
          <div class=\"mb-3\">
            <label for=\"photo\" class=\"form-label fw-semibold\">Photo de profil :</label>
            <input type=\"file\" id=\"photo\" name=\"photo\" class=\"form-control\">
          </div>
          
       <div class=\"mb-3\">
  <label for=\"sexe\" class=\"form-label fw-semibold\">Sexe :</label>
  <select id=\"sexe\" name=\"sexe\" class=\"form-control\">
    <option value=\"\">Choisir un sexe</option>
    <option value=\"Homme\" ";
        // line 62
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["chercheur"] ?? null), "sexe", [], "any", true, true, false, 62) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["chercheur"]) || array_key_exists("chercheur", $context) ? $context["chercheur"] : (function () { throw new RuntimeError('Variable "chercheur" does not exist.', 62, $this->source); })()), "sexe", [], "any", false, false, false, 62) == "Homme"))) {
            yield "selected";
        }
        yield ">Homme</option>
    <option value=\"Femme\" ";
        // line 63
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["chercheur"] ?? null), "sexe", [], "any", true, true, false, 63) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["chercheur"]) || array_key_exists("chercheur", $context) ? $context["chercheur"] : (function () { throw new RuntimeError('Variable "chercheur" does not exist.', 63, $this->source); })()), "sexe", [], "any", false, false, false, 63) == "Femme"))) {
            yield "selected";
        }
        yield ">Femme</option>
    <option value=\"Autres\" ";
        // line 64
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["chercheur"] ?? null), "sexe", [], "any", true, true, false, 64) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["chercheur"]) || array_key_exists("chercheur", $context) ? $context["chercheur"] : (function () { throw new RuntimeError('Variable "chercheur" does not exist.', 64, $this->source); })()), "sexe", [], "any", false, false, false, 64) == "Autres"))) {
            yield "selected";
        }
        yield ">Autres</option>
  </select>
</div>

          
          <div class=\"mb-3\">
            <label for=\"cv\" class=\"form-label fw-semibold\">CV (PDF) :</label>
            <input type=\"file\" id=\"cv\" name=\"cv\" class=\"form-control\" accept=\".pdf\">
          </div>
          
          <button type=\"submit\" class=\"btn btn-primary w-100 fw-bold\">
            <i class=\"fas fa-check-circle\"></i> Modifier
          </button>
        </form>
      </div>
    </div>
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
        return "security/updatechercheur.html.twig";
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
        return array (  185 => 64,  179 => 63,  173 => 62,  158 => 50,  150 => 45,  130 => 28,  120 => 21,  113 => 17,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier{% endblock %}

{% block body %}
<div class=\"container mb-5\">
  <div class=\"row justify-content-center align-items-center\">
    <div class=\"col-md-6\">
      <div class=\"card shadow-lg p-4 rounded-4\">
        <h3 class=\"text-center mb-4 fw-bold text-primary\">
          <i class=\"fas fa-user-plus\"></i> Modifier
        </h3>
        <form action=\"\" method=\"post\" enctype=\"multipart/form-data\" novalidate=\"novalidate\">
          <div class=\"row mb-3\">
            <div class=\"col\">
              <label for=\"nom\" class=\"form-label fw-semibold\">Nom :</label>
              <input type=\"text\" id=\"nom\" name=\"nom\" class=\"form-control\" placeholder=\"Votre nom\" value=\"{{ chercheur.nom|default('') }}\" required>
            </div>
            <div class=\"col\">
              <label for=\"prenom\" class=\"form-label fw-semibold\">Prénom :</label>
              <input type=\"text\" id=\"prenom\" name=\"prenom\" class=\"form-control\" placeholder=\"Votre prénom\" value=\"{{ chercheur.prenom|default('') }}\" required>
            </div>
          </div>
          
          <div class=\"mb-3\">
            <label for=\"email\" class=\"form-label fw-semibold\">Email :</label>
            <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" placeholder=\"exemple@email.com\"
                   value=\"{{ chercheur.email|default('') }}\" required>
          </div>
          
          <div class=\"row mb-3\">
            <div class=\"col\">
              <label for=\"motdepasse\" class=\"form-label fw-semibold\">Mot de passe :</label>
              <input type=\"password\" id=\"motdepasse\" name=\"motdepasse\" class=\"form-control\" placeholder=\"********\" required>
            </div>
            <div class=\"col\">
              <label for=\"confirmpasse\" class=\"form-label fw-semibold\">Confirmer :</label>
              <input type=\"password\" id=\"confirmpasse\" name=\"confirmpasse\" class=\"form-control\" placeholder=\"********\" required>
            </div>
          </div>
       
          
          <div class=\"mb-3\">
            <label for=\"domaine\" class=\"form-label fw-semibold\">Domaine :</label>
            <input type=\"text\" id=\"domaine\" name=\"domaine\" class=\"form-control\" placeholder=\"Domaine d'activité\" value=\"{{ chercheur.domaine|default('') }}\">
          </div>
          
          <div class=\"mb-3\">
            <label for=\"tel\" class=\"form-label fw-semibold\">Téléphone :</label>
            <input type=\"text\" id=\"tel\" name=\"tel\" class=\"form-control\" placeholder=\"+216 99 999 999\" value=\"{{ chercheur.tel|default('') }}\">
          </div>
          
          <div class=\"mb-3\">
            <label for=\"photo\" class=\"form-label fw-semibold\">Photo de profil :</label>
            <input type=\"file\" id=\"photo\" name=\"photo\" class=\"form-control\">
          </div>
          
       <div class=\"mb-3\">
  <label for=\"sexe\" class=\"form-label fw-semibold\">Sexe :</label>
  <select id=\"sexe\" name=\"sexe\" class=\"form-control\">
    <option value=\"\">Choisir un sexe</option>
    <option value=\"Homme\" {% if chercheur.sexe is defined and chercheur.sexe == 'Homme' %}selected{% endif %}>Homme</option>
    <option value=\"Femme\" {% if chercheur.sexe is defined and chercheur.sexe == 'Femme' %}selected{% endif %}>Femme</option>
    <option value=\"Autres\" {% if chercheur.sexe is defined and chercheur.sexe == 'Autres' %}selected{% endif %}>Autres</option>
  </select>
</div>

          
          <div class=\"mb-3\">
            <label for=\"cv\" class=\"form-label fw-semibold\">CV (PDF) :</label>
            <input type=\"file\" id=\"cv\" name=\"cv\" class=\"form-control\" accept=\".pdf\">
          </div>
          
          <button type=\"submit\" class=\"btn btn-primary w-100 fw-bold\">
            <i class=\"fas fa-check-circle\"></i> Modifier
          </button>
        </form>
      </div>
    </div>
  </div>
</div>
{% endblock %}
", "security/updatechercheur.html.twig", "C:\\careera\\templates\\security\\updatechercheur.html.twig");
    }
}
