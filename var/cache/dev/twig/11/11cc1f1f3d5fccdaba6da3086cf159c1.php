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

/* security/updatemoderateur.html.twig */
class __TwigTemplate_733af7271406e36b7a4940e4d8a95368 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/updatemoderateur.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/updatemoderateur.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/updatemoderateur.html.twig", 1);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["moderateur"] ?? null), "nom", [], "any", true, true, false, 17)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["moderateur"]) || array_key_exists("moderateur", $context) ? $context["moderateur"] : (function () { throw new RuntimeError('Variable "moderateur" does not exist.', 17, $this->source); })()), "nom", [], "any", false, false, false, 17), "")) : ("")), "html", null, true);
        yield "\" required>
            </div>
            <div class=\"col\">
              <label for=\"prenom\" class=\"form-label fw-semibold\">Prénom :</label>
              <input type=\"text\" id=\"prenom\" name=\"prenom\" class=\"form-control\" placeholder=\"Votre prénom\" value=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["moderateur"] ?? null), "prenom", [], "any", true, true, false, 21)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["moderateur"]) || array_key_exists("moderateur", $context) ? $context["moderateur"] : (function () { throw new RuntimeError('Variable "moderateur" does not exist.', 21, $this->source); })()), "prenom", [], "any", false, false, false, 21), "")) : ("")), "html", null, true);
        yield "\" required>
            </div>
          </div>
          
          <div class=\"mb-3\">
            <label for=\"email\" class=\"form-label fw-semibold\">Email :</label>
            <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" placeholder=\"exemple@email.com\"
                   value=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["moderateur"] ?? null), "email", [], "any", true, true, false, 28)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["moderateur"]) || array_key_exists("moderateur", $context) ? $context["moderateur"] : (function () { throw new RuntimeError('Variable "moderateur" does not exist.', 28, $this->source); })()), "email", [], "any", false, false, false, 28), "")) : ("")), "html", null, true);
        yield "\" required>
          </div>
          <div class=\"col\">
  <label for=\"societe\" class=\"form-label fw-semibold\">Société :</label>
  <input type=\"text\" id=\"societe\" name=\"societe\" class=\"form-control\" placeholder=\"Votre société\" value=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["moderateur"] ?? null), "societe", [], "any", true, true, false, 32)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["moderateur"]) || array_key_exists("moderateur", $context) ? $context["moderateur"] : (function () { throw new RuntimeError('Variable "moderateur" does not exist.', 32, $this->source); })()), "societe", [], "any", false, false, false, 32), "")) : ("")), "html", null, true);
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
            <label for=\"Adresse\" class=\"form-label fw-semibold\">Adresse :</label>
            <input type=\"text\" id=\"Adresse\" name=\"Adresse\" class=\"form-control\" placeholder=\"Votre adresse\" value=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["chercheur"] ?? null), "Adresse", [], "any", true, true, false, 48)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chercheur"]) || array_key_exists("chercheur", $context) ? $context["chercheur"] : (function () { throw new RuntimeError('Variable "chercheur" does not exist.', 48, $this->source); })()), "Adresse", [], "any", false, false, false, 48), "")) : ("")), "html", null, true);
        yield "\">
          </div>
          
          <div class=\"mb-3\">
            <label for=\"domaine\" class=\"form-label fw-semibold\">Domaine :</label>
            <input type=\"text\" id=\"domaine\" name=\"domaine\" class=\"form-control\" placeholder=\"Domaine d'activité\" value=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["chercheur"] ?? null), "domaine", [], "any", true, true, false, 53)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chercheur"]) || array_key_exists("chercheur", $context) ? $context["chercheur"] : (function () { throw new RuntimeError('Variable "chercheur" does not exist.', 53, $this->source); })()), "domaine", [], "any", false, false, false, 53), "")) : ("")), "html", null, true);
        yield "\">
          </div>
          
          <div class=\"mb-3\">
            <label for=\"tel\" class=\"form-label fw-semibold\">Téléphone :</label>
            <input type=\"text\" id=\"tel\" name=\"tel\" class=\"form-control\" placeholder=\"+216 99 999 999\" value=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["chercheur"] ?? null), "tel", [], "any", true, true, false, 58)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chercheur"]) || array_key_exists("chercheur", $context) ? $context["chercheur"] : (function () { throw new RuntimeError('Variable "chercheur" does not exist.', 58, $this->source); })()), "tel", [], "any", false, false, false, 58), "")) : ("")), "html", null, true);
        yield "\">
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
        return "security/updatemoderateur.html.twig";
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
        return array (  172 => 58,  164 => 53,  156 => 48,  137 => 32,  130 => 28,  120 => 21,  113 => 17,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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
              <input type=\"text\" id=\"nom\" name=\"nom\" class=\"form-control\" placeholder=\"Votre nom\" value=\"{{  moderateur.nom|default('') }}\" required>
            </div>
            <div class=\"col\">
              <label for=\"prenom\" class=\"form-label fw-semibold\">Prénom :</label>
              <input type=\"text\" id=\"prenom\" name=\"prenom\" class=\"form-control\" placeholder=\"Votre prénom\" value=\"{{  moderateur.prenom|default('') }}\" required>
            </div>
          </div>
          
          <div class=\"mb-3\">
            <label for=\"email\" class=\"form-label fw-semibold\">Email :</label>
            <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" placeholder=\"exemple@email.com\"
                   value=\"{{ moderateur.email|default('') }}\" required>
          </div>
          <div class=\"col\">
  <label for=\"societe\" class=\"form-label fw-semibold\">Société :</label>
  <input type=\"text\" id=\"societe\" name=\"societe\" class=\"form-control\" placeholder=\"Votre société\" value=\"{{ moderateur.societe|default('') }}\" required>
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
            <label for=\"Adresse\" class=\"form-label fw-semibold\">Adresse :</label>
            <input type=\"text\" id=\"Adresse\" name=\"Adresse\" class=\"form-control\" placeholder=\"Votre adresse\" value=\"{{ chercheur.Adresse|default('') }}\">
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
", "security/updatemoderateur.html.twig", "C:\\careera\\templates\\security\\updatemoderateur.html.twig");
    }
}
