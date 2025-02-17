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

/* chercheur/index.html.twig */
class __TwigTemplate_8a602feb62f8a4a43bd14db8b26c52ba extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chercheur/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chercheur/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "chercheur/index.html.twig", 1);
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

        yield "Inscription Jeune Diplômé / Professionnel";
        
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
        yield "<div class=\"container vh-100\">
  <div class=\"row h-100 justify-content-center align-items-center\">
    <div class=\"col-md-6\">
      <div class=\"card shadow p-4\">
        <h3 class=\"text-center mb-4\" style=\"font-size: 1.6rem; font-weight: bold;\">
          Inscription Jeune Diplômé / Professionnel
        </h3>
        ";
        // line 13
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 13, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "enctype" => "multipart/form-data"]]);
        yield "
        
        <div class=\"row mb-4\">
          <div class=\"col\">
            <div class=\"form-floating\">
              ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 18, $this->source); })()), "nom", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "form-control", "required" => "required"]]);
        yield "
              <label for=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 19, $this->source); })()), "nom", [], "any", false, false, false, 19), "vars", [], "any", false, false, false, 19), "id", [], "any", false, false, false, 19), "html", null, true);
        yield "\">Nom</label>
              ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 20, $this->source); })()), "nom", [], "any", false, false, false, 20), 'errors');
        yield "
            </div>
          </div>
          <div class=\"col\">
            <div class=\"addform-floating\">
              ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 25, $this->source); })()), "prenom", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control", "required" => "required"]]);
        yield "
              <label for=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 26, $this->source); })()), "prenom", [], "any", false, false, false, 26), "vars", [], "any", false, false, false, 26), "id", [], "any", false, false, false, 26), "html", null, true);
        yield "\">Prénom</label>
              ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 27, $this->source); })()), "prenom", [], "any", false, false, false, 27), 'errors');
        yield "
            </div>
          </div>
        </div>

        <div class=\"row mb-4\">
          <div class=\"col\">
            <div class=\"addform-floating\">
              ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 35, $this->source); })()), "email", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-control", "required" => "required"]]);
        yield "
              <label for=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 36, $this->source); })()), "email", [], "any", false, false, false, 36), "vars", [], "any", false, false, false, 36), "id", [], "any", false, false, false, 36), "html", null, true);
        yield "\">Email</label>
              ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 37, $this->source); })()), "email", [], "any", false, false, false, 37), 'errors');
        yield "
            </div>
          </div>
          <div class=\"col\">
            <div class=\"form-floating\">
              ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 42, $this->source); })()), "tel", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control", "required" => "required"]]);
        yield "
              <label for=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 43, $this->source); })()), "tel", [], "any", false, false, false, 43), "vars", [], "any", false, false, false, 43), "id", [], "any", false, false, false, 43), "html", null, true);
        yield "\">Téléphone</label>
              ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 44, $this->source); })()), "tel", [], "any", false, false, false, 44), 'errors');
        yield "
            </div>
          </div>
        </div>
        <div class=\"col\">
            <div class=\"form-floating\">
              ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 50, $this->source); })()), "sexe", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control", "required" => "required"]]);
        yield "
              <label for=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 51, $this->source); })()), "sexe", [], "any", false, false, false, 51), "vars", [], "any", false, false, false, 51), "id", [], "any", false, false, false, 51), "html", null, true);
        yield "\">Sexe</label>
              ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 52, $this->source); })()), "sexe", [], "any", false, false, false, 52), 'errors');
        yield "
            </div>
          </div>
        </div>

        <div class=\"row mb-4\">
          <div class=\"col\">
            <div class=\"form-floating\">
              ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 60, $this->source); })()), "motdepasse", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "form-control", "required" => "required"]]);
        yield "
              <label for=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 61, $this->source); })()), "motdepasse", [], "any", false, false, false, 61), "vars", [], "any", false, false, false, 61), "id", [], "any", false, false, false, 61), "html", null, true);
        yield "\">Mot de passe</label>
              ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 62, $this->source); })()), "motdepasse", [], "any", false, false, false, 62), 'errors');
        yield "
            </div>
          </div>
          <div class=\"col\">
            <div class=\"form-floating\">
              ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 67, $this->source); })()), "confirmpasse", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => "form-control", "required" => "required"]]);
        yield "
              <label for=\"";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 68, $this->source); })()), "confirmpasse", [], "any", false, false, false, 68), "vars", [], "any", false, false, false, 68), "id", [], "any", false, false, false, 68), "html", null, true);
        yield "\">Confirmer le mot de passe</label>
              ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 69, $this->source); })()), "confirmpasse", [], "any", false, false, false, 69), 'errors');
        yield "
            </div>
          </div>
        </div>

        <div class=\"mb-4\">
          <div class=\"form-floating\">
            ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 76, $this->source); })()), "Adresse", [], "any", false, false, false, 76), 'widget', ["attr" => ["class" => "form-control", "required" => "required"]]);
        yield "
            <label for=\"";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 77, $this->source); })()), "Adresse", [], "any", false, false, false, 77), "vars", [], "any", false, false, false, 77), "id", [], "any", false, false, false, 77), "html", null, true);
        yield "\">Adresse</label>
            ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 78, $this->source); })()), "Adresse", [], "any", false, false, false, 78), 'errors');
        yield "
          </div>
        </div>

        <div class=\"mb-4\">
          <div class=\"form-floating\">
            ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 84, $this->source); })()), "domaine", [], "any", false, false, false, 84), 'widget', ["attr" => ["class" => "form-control", "required" => "required"]]);
        yield "
            <label for=\"";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 85, $this->source); })()), "domaine", [], "any", false, false, false, 85), "vars", [], "any", false, false, false, 85), "id", [], "any", false, false, false, 85), "html", null, true);
        yield "\">Domaine</label>
            ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 86, $this->source); })()), "domaine", [], "any", false, false, false, 86), 'errors');
        yield "
          </div>
        </div>

        <div class=\"mb-4\">
          <div class=\"form-floating\">
            ";
        // line 92
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 92, $this->source); })()), "datedenaiss", [], "any", false, false, false, 92), 'widget', ["attr" => ["class" => "form-control", "required" => "required"]]);
        yield "
            <label for=\"";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 93, $this->source); })()), "datedenaiss", [], "any", false, false, false, 93), "vars", [], "any", false, false, false, 93), "id", [], "any", false, false, false, 93), "html", null, true);
        yield "\">Date de naissance</label>
            ";
        // line 94
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 94, $this->source); })()), "datedenaiss", [], "any", false, false, false, 94), 'errors');
        yield "
          </div>
        </div>

        <div class=\"mb-4\">
          <div class=\"form-floating\">
            ";
        // line 100
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 100, $this->source); })()), "photo", [], "any", false, false, false, 100), 'widget', ["attr" => ["class" => "form-control", "accept" => "image/*"]]);
        yield "
            <label for=\"";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 101, $this->source); })()), "photo", [], "any", false, false, false, 101), "vars", [], "any", false, false, false, 101), "id", [], "any", false, false, false, 101), "html", null, true);
        yield "\">Photo (facultatif)</label>
            ";
        // line 102
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 102, $this->source); })()), "photo", [], "any", false, false, false, 102), 'errors');
        yield "
          </div>
        </div>

        <div class=\"mb-4\">
          <div class=\"form-floating\">
            ";
        // line 108
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 108, $this->source); })()), "cv", [], "any", false, false, false, 108), 'widget', ["attr" => ["class" => "form-control", "accept" => ".pdf"]]);
        yield "
            <label for=\"";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 109, $this->source); })()), "cv", [], "any", false, false, false, 109), "vars", [], "any", false, false, false, 109), "id", [], "any", false, false, false, 109), "html", null, true);
        yield "\">CV (PDF)</label>
            ";
        // line 110
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 110, $this->source); })()), "cv", [], "any", false, false, false, 110), 'errors');
        yield "
          </div>
        </div>


        <button type=\"submit\" class=\"btn btn-primary w-100\">S'inscrire</button>
        ";
        // line 116
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 116, $this->source); })()), 'form_end');
        yield "
      </div>
      <div class=\"mt-3\">
                            <a href=\"";
        // line 119
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\" class=\"btn btn-primary btn-sm w-100\">
                                profile
                            </a>
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
        return "chercheur/index.html.twig";
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
        return array (  329 => 119,  323 => 116,  314 => 110,  310 => 109,  306 => 108,  297 => 102,  293 => 101,  289 => 100,  280 => 94,  276 => 93,  272 => 92,  263 => 86,  259 => 85,  255 => 84,  246 => 78,  242 => 77,  238 => 76,  228 => 69,  224 => 68,  220 => 67,  212 => 62,  208 => 61,  204 => 60,  193 => 52,  189 => 51,  185 => 50,  176 => 44,  172 => 43,  168 => 42,  160 => 37,  156 => 36,  152 => 35,  141 => 27,  137 => 26,  133 => 25,  125 => 20,  121 => 19,  117 => 18,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Inscription Jeune Diplômé / Professionnel{% endblock %}

{% block body %}
<div class=\"container vh-100\">
  <div class=\"row h-100 justify-content-center align-items-center\">
    <div class=\"col-md-6\">
      <div class=\"card shadow p-4\">
        <h3 class=\"text-center mb-4\" style=\"font-size: 1.6rem; font-weight: bold;\">
          Inscription Jeune Diplômé / Professionnel
        </h3>
        {{ form_start(addform, {'attr': {'novalidate': 'novalidate', 'enctype': 'multipart/form-data'}}) }}
        
        <div class=\"row mb-4\">
          <div class=\"col\">
            <div class=\"form-floating\">
              {{ form_widget(addform.nom, {'attr': {'class': 'form-control', 'required': 'required'}}) }}
              <label for=\"{{ addform.nom.vars.id }}\">Nom</label>
              {{ form_errors(addform.nom) }}
            </div>
          </div>
          <div class=\"col\">
            <div class=\"addform-floating\">
              {{ form_widget(addform.prenom, {'attr': {'class': 'form-control', 'required': 'required'}}) }}
              <label for=\"{{ addform.prenom.vars.id }}\">Prénom</label>
              {{ form_errors(addform.prenom) }}
            </div>
          </div>
        </div>

        <div class=\"row mb-4\">
          <div class=\"col\">
            <div class=\"addform-floating\">
              {{ form_widget(addform.email, {'attr': {'class': 'form-control', 'required': 'required'}}) }}
              <label for=\"{{ addform.email.vars.id }}\">Email</label>
              {{ form_errors(addform.email) }}
            </div>
          </div>
          <div class=\"col\">
            <div class=\"form-floating\">
              {{ form_widget(addform.tel, {'attr': {'class': 'form-control', 'required': 'required'}}) }}
              <label for=\"{{ addform.tel.vars.id }}\">Téléphone</label>
              {{ form_errors(addform.tel) }}
            </div>
          </div>
        </div>
        <div class=\"col\">
            <div class=\"form-floating\">
              {{ form_widget(addform.sexe, {'attr': {'class': 'form-control', 'required': 'required'}}) }}
              <label for=\"{{ addform.sexe.vars.id }}\">Sexe</label>
              {{ form_errors(addform.sexe) }}
            </div>
          </div>
        </div>

        <div class=\"row mb-4\">
          <div class=\"col\">
            <div class=\"form-floating\">
              {{ form_widget(addform.motdepasse, {'attr': {'class': 'form-control', 'required': 'required'}}) }}
              <label for=\"{{ addform.motdepasse.vars.id }}\">Mot de passe</label>
              {{ form_errors(addform.motdepasse) }}
            </div>
          </div>
          <div class=\"col\">
            <div class=\"form-floating\">
              {{ form_widget(addform.confirmpasse, {'attr': {'class': 'form-control', 'required': 'required'}}) }}
              <label for=\"{{ addform.confirmpasse.vars.id }}\">Confirmer le mot de passe</label>
              {{ form_errors(addform.confirmpasse) }}
            </div>
          </div>
        </div>

        <div class=\"mb-4\">
          <div class=\"form-floating\">
            {{ form_widget(addform.Adresse, {'attr': {'class': 'form-control', 'required': 'required'}}) }}
            <label for=\"{{ addform.Adresse.vars.id }}\">Adresse</label>
            {{ form_errors(addform.Adresse) }}
          </div>
        </div>

        <div class=\"mb-4\">
          <div class=\"form-floating\">
            {{ form_widget(addform.domaine, {'attr': {'class': 'form-control', 'required': 'required'}}) }}
            <label for=\"{{ addform.domaine.vars.id }}\">Domaine</label>
            {{ form_errors(addform.domaine) }}
          </div>
        </div>

        <div class=\"mb-4\">
          <div class=\"form-floating\">
            {{ form_widget(addform.datedenaiss, {'attr': {'class': 'form-control', 'required': 'required'}}) }}
            <label for=\"{{ addform.datedenaiss.vars.id }}\">Date de naissance</label>
            {{ form_errors(addform.datedenaiss) }}
          </div>
        </div>

        <div class=\"mb-4\">
          <div class=\"form-floating\">
            {{ form_widget(addform.photo, {'attr': {'class': 'form-control', 'accept': 'image/*'}}) }}
            <label for=\"{{ addform.photo.vars.id }}\">Photo (facultatif)</label>
            {{ form_errors(addform.photo) }}
          </div>
        </div>

        <div class=\"mb-4\">
          <div class=\"form-floating\">
            {{ form_widget(addform.cv, {'attr': {'class': 'form-control', 'accept': '.pdf'}}) }}
            <label for=\"{{ addform.cv.vars.id }}\">CV (PDF)</label>
            {{ form_errors(addform.cv) }}
          </div>
        </div>


        <button type=\"submit\" class=\"btn btn-primary w-100\">S'inscrire</button>
        {{ form_end(addform) }}
      </div>
      <div class=\"mt-3\">
                            <a href=\"{{ path('app_profile') }}\" class=\"btn btn-primary btn-sm w-100\">
                                profile
                            </a>
    </div>
  </div>
</div>
{% endblock %}
", "chercheur/index.html.twig", "C:\\Users\\choub\\Desktop\\CareeraPlatform - Copie\\templates\\chercheur\\index.html.twig");
    }
}
