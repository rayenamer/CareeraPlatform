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

/* freelancer/index.html.twig */
class __TwigTemplate_0c05ad72884887c37e8dbf320591411d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "freelancer/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "freelancer/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "freelancer/index.html.twig", 1);
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

        yield "Inscription Freelancer";
        
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
          <i class=\"fas fa-user-plus\"></i> Inscription Freelancer
        </h3>
        ";
        // line 13
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 13, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "enctype" => "multipart/form-data"]]);
        yield "
        <div class=\"row g-3\">
          
          ";
        // line 17
        yield "          <div class=\"col-md-6\">
            <label for=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 18, $this->source); })()), "nom", [], "any", false, false, false, 18), "vars", [], "any", false, false, false, 18), "id", [], "any", false, false, false, 18), "html", null, true);
        yield "\" class=\"form-label fw-semibold\">Nom :</label>
            ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 19, $this->source); })()), "nom", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Votre nom", "required" => "required"]]);
        yield "
            ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 20, $this->source); })()), "nom", [], "any", false, false, false, 20), 'errors');
        yield "
          </div>
          <div class=\"col-md-6\">
            <label for=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 23, $this->source); })()), "prenom", [], "any", false, false, false, 23), "vars", [], "any", false, false, false, 23), "id", [], "any", false, false, false, 23), "html", null, true);
        yield "\" class=\"form-label fw-semibold\">Prénom :</label>
            ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 24, $this->source); })()), "prenom", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Votre prénom", "required" => "required"]]);
        yield "
            ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 25, $this->source); })()), "prenom", [], "any", false, false, false, 25), 'errors');
        yield "
          </div>
          
         
          
          ";
        // line 31
        yield "          <div class=\"col-md-6\">
            <label for=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 32, $this->source); })()), "tel", [], "any", false, false, false, 32), "vars", [], "any", false, false, false, 32), "id", [], "any", false, false, false, 32), "html", null, true);
        yield "\" class=\"form-label fw-semibold\">Téléphone :</label>
            ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 33, $this->source); })()), "tel", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "+216 99 999 999", "required" => "required"]]);
        yield "
            ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 34, $this->source); })()), "tel", [], "any", false, false, false, 34), 'errors');
        yield "
          </div>
          
          ";
        // line 38
        yield "          <div class=\"col-md-12\">
            <label for=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 39, $this->source); })()), "email", [], "any", false, false, false, 39), "vars", [], "any", false, false, false, 39), "id", [], "any", false, false, false, 39), "html", null, true);
        yield "\" class=\"form-label fw-semibold\">Email :</label>
            ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 40, $this->source); })()), "email", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "exemple@email.com", "required" => "required"]]);
        // line 41
        yield "
            ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 42, $this->source); })()), "email", [], "any", false, false, false, 42), 'errors');
        yield "
          </div>
          
          ";
        // line 46
        yield "          <div class=\"col-md-6\">
            <label for=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 47, $this->source); })()), "motdepasse", [], "any", false, false, false, 47), "vars", [], "any", false, false, false, 47), "id", [], "any", false, false, false, 47), "html", null, true);
        yield "\" class=\"form-label fw-semibold\">Mot de passe :</label>
            ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 48, $this->source); })()), "motdepasse", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "********", "required" => "required"]]);
        yield "
            ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 49, $this->source); })()), "motdepasse", [], "any", false, false, false, 49), 'errors');
        yield "
          </div>
          <div class=\"col-md-6\">
            <label for=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 52, $this->source); })()), "confirmpasse", [], "any", false, false, false, 52), "vars", [], "any", false, false, false, 52), "id", [], "any", false, false, false, 52), "html", null, true);
        yield "\" class=\"form-label fw-semibold\">Confirmer :</label>
            ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 53, $this->source); })()), "confirmpasse", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "********", "required" => "required"]]);
        yield "
            ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 54, $this->source); })()), "confirmpasse", [], "any", false, false, false, 54), 'errors');
        yield "
          </div>
          
          ";
        // line 58
        yield "          <div class=\"col-md-12\">
            <label for=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 59, $this->source); })()), "Adresse", [], "any", false, false, false, 59), "vars", [], "any", false, false, false, 59), "id", [], "any", false, false, false, 59), "html", null, true);
        yield "\" class=\"form-label fw-semibold\">Adresse :</label>
            ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 60, $this->source); })()), "Adresse", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Votre adresse", "required" => "required"]]);
        yield "
            ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 61, $this->source); })()), "Adresse", [], "any", false, false, false, 61), 'errors');
        yield "
          </div>
          
          ";
        // line 65
        yield "          <div class=\"col-md-6\">
            <label for=\"";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 66, $this->source); })()), "domaine", [], "any", false, false, false, 66), "vars", [], "any", false, false, false, 66), "id", [], "any", false, false, false, 66), "html", null, true);
        yield "\" class=\"form-label fw-semibold\">Domaine :</label>
            ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 67, $this->source); })()), "domaine", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Votre domaine", "required" => "required"]]);
        yield "
            ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 68, $this->source); })()), "domaine", [], "any", false, false, false, 68), 'errors');
        yield "
          </div>
          
          ";
        // line 72
        yield "          <div class=\"col-md-6\">
            <label for=\"";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 73, $this->source); })()), "sexe", [], "any", false, false, false, 73), "vars", [], "any", false, false, false, 73), "id", [], "any", false, false, false, 73), "html", null, true);
        yield "\" class=\"form-label fw-semibold\">Sexe :</label>
            ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 74, $this->source); })()), "sexe", [], "any", false, false, false, 74), 'widget', ["attr" => ["class" => "form-control", "required" => "required"]]);
        yield "
            ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 75, $this->source); })()), "sexe", [], "any", false, false, false, 75), 'errors');
        yield "
          </div>
          
          ";
        // line 79
        yield "          <div class=\"col-md-6\">
            <label for=\"";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 80, $this->source); })()), "experience", [], "any", false, false, false, 80), "vars", [], "any", false, false, false, 80), "id", [], "any", false, false, false, 80), "html", null, true);
        yield "\" class=\"form-label fw-semibold\">Années d'expérience :</label>
            ";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 81, $this->source); })()), "experience", [], "any", false, false, false, 81), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nombre d'années", "required" => "required"]]);
        yield "
            ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 82, $this->source); })()), "experience", [], "any", false, false, false, 82), 'errors');
        yield "
          </div>
          
          ";
        // line 86
        yield "          <div class=\"col-md-6\">
            <label for=\"";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 87, $this->source); })()), "photo", [], "any", false, false, false, 87), "vars", [], "any", false, false, false, 87), "id", [], "any", false, false, false, 87), "html", null, true);
        yield "\" class=\"form-label fw-semibold\">Photo :</label>
            ";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 88, $this->source); })()), "photo", [], "any", false, false, false, 88), 'widget', ["attr" => ["class" => "form-control", "accept" => "image/*"]]);
        yield "
            ";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 89, $this->source); })()), "photo", [], "any", false, false, false, 89), 'errors');
        yield "
          </div>
          
          ";
        // line 93
        yield "          <div class=\"col-md-12\">
            <label for=\"";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 94, $this->source); })()), "cv", [], "any", false, false, false, 94), "vars", [], "any", false, false, false, 94), "id", [], "any", false, false, false, 94), "html", null, true);
        yield "\" class=\"form-label fw-semibold\">CV :</label>
            ";
        // line 95
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 95, $this->source); })()), "cv", [], "any", false, false, false, 95), 'widget', ["attr" => ["class" => "form-control", "accept" => ".pdf,image/*"]]);
        yield "
            ";
        // line 96
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 96, $this->source); })()), "cv", [], "any", false, false, false, 96), 'errors');
        yield "
          </div>
          
          ";
        // line 100
        yield "          <div class=\"col-12 text-center mt-4\">
            <button class=\"btn btn-success w-75 py-3\" type=\"submit\">S'inscrire</button>
          </div>
        </div>
        ";
        // line 104
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 104, $this->source); })()), 'form_end');
        yield "
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
        return "freelancer/index.html.twig";
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
        return array (  322 => 104,  316 => 100,  310 => 96,  306 => 95,  302 => 94,  299 => 93,  293 => 89,  289 => 88,  285 => 87,  282 => 86,  276 => 82,  272 => 81,  268 => 80,  265 => 79,  259 => 75,  255 => 74,  251 => 73,  248 => 72,  242 => 68,  238 => 67,  234 => 66,  231 => 65,  225 => 61,  221 => 60,  217 => 59,  214 => 58,  208 => 54,  204 => 53,  200 => 52,  194 => 49,  190 => 48,  186 => 47,  183 => 46,  177 => 42,  174 => 41,  172 => 40,  168 => 39,  165 => 38,  159 => 34,  155 => 33,  151 => 32,  148 => 31,  140 => 25,  136 => 24,  132 => 23,  126 => 20,  122 => 19,  118 => 18,  115 => 17,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Inscription Freelancer{% endblock %}

{% block body %}
<div class=\"container mb-5\">
  <div class=\"row justify-content-center align-items-center\">
    <div class=\"col-md-6\">
      <div class=\"card shadow-lg p-4 rounded-4\">
        <h3 class=\"text-center mb-4 fw-bold text-primary\">
          <i class=\"fas fa-user-plus\"></i> Inscription Freelancer
        </h3>
        {{ form_start(addform, {'attr': {'novalidate': 'novalidate', 'enctype': 'multipart/form-data'}}) }}
        <div class=\"row g-3\">
          
          {# Nom & Prénom #}
          <div class=\"col-md-6\">
            <label for=\"{{ addform.nom.vars.id }}\" class=\"form-label fw-semibold\">Nom :</label>
            {{ form_widget(addform.nom, {'attr': {'class': 'form-control', 'placeholder': 'Votre nom', 'required': 'required'}}) }}
            {{ form_errors(addform.nom) }}
          </div>
          <div class=\"col-md-6\">
            <label for=\"{{ addform.prenom.vars.id }}\" class=\"form-label fw-semibold\">Prénom :</label>
            {{ form_widget(addform.prenom, {'attr': {'class': 'form-control', 'placeholder': 'Votre prénom', 'required': 'required'}}) }}
            {{ form_errors(addform.prenom) }}
          </div>
          
         
          
          {# Téléphone #}
          <div class=\"col-md-6\">
            <label for=\"{{ addform.tel.vars.id }}\" class=\"form-label fw-semibold\">Téléphone :</label>
            {{ form_widget(addform.tel, {'attr': {'class': 'form-control', 'placeholder': '+216 99 999 999', 'required': 'required'}}) }}
            {{ form_errors(addform.tel) }}
          </div>
          
          {# Email #}
          <div class=\"col-md-12\">
            <label for=\"{{ addform.email.vars.id }}\" class=\"form-label fw-semibold\">Email :</label>
            {{ form_widget(addform.email, {'attr': {'class': 'form-control', 'placeholder': 'exemple@email.com',
             'required': 'required'}}) }}
            {{ form_errors(addform.email) }}
          </div>
          
          {# Mot de passe & Confirmation #}
          <div class=\"col-md-6\">
            <label for=\"{{ addform.motdepasse.vars.id }}\" class=\"form-label fw-semibold\">Mot de passe :</label>
            {{ form_widget(addform.motdepasse, {'attr': {'class': 'form-control', 'placeholder': '********', 'required': 'required'}}) }}
            {{ form_errors(addform.motdepasse) }}
          </div>
          <div class=\"col-md-6\">
            <label for=\"{{ addform.confirmpasse.vars.id }}\" class=\"form-label fw-semibold\">Confirmer :</label>
            {{ form_widget(addform.confirmpasse, {'attr': {'class': 'form-control', 'placeholder': '********', 'required': 'required'}}) }}
            {{ form_errors(addform.confirmpasse) }}
          </div>
          
          {# Adresse #}
          <div class=\"col-md-12\">
            <label for=\"{{ addform.Adresse.vars.id }}\" class=\"form-label fw-semibold\">Adresse :</label>
            {{ form_widget(addform.Adresse, {'attr': {'class': 'form-control', 'placeholder': 'Votre adresse', 'required': 'required'}}) }}
            {{ form_errors(addform.Adresse) }}
          </div>
          
          {# Domaine #}
          <div class=\"col-md-6\">
            <label for=\"{{ addform.domaine.vars.id }}\" class=\"form-label fw-semibold\">Domaine :</label>
            {{ form_widget(addform.domaine, {'attr': {'class': 'form-control', 'placeholder': 'Votre domaine', 'required': 'required'}}) }}
            {{ form_errors(addform.domaine) }}
          </div>
          
          {# Sexe - Liste déroulante #}
          <div class=\"col-md-6\">
            <label for=\"{{ addform.sexe.vars.id }}\" class=\"form-label fw-semibold\">Sexe :</label>
            {{ form_widget(addform.sexe, {'attr': {'class': 'form-control', 'required': 'required'}}) }}
            {{ form_errors(addform.sexe) }}
          </div>
          
          {# Années d'expérience #}
          <div class=\"col-md-6\">
            <label for=\"{{ addform.experience.vars.id }}\" class=\"form-label fw-semibold\">Années d'expérience :</label>
            {{ form_widget(addform.experience, {'attr': {'class': 'form-control', 'placeholder': 'Nombre d\\'années', 'required': 'required'}}) }}
            {{ form_errors(addform.experience) }}
          </div>
          
          {# Photo (upload image) #}
          <div class=\"col-md-6\">
            <label for=\"{{ addform.photo.vars.id }}\" class=\"form-label fw-semibold\">Photo :</label>
            {{ form_widget(addform.photo, {'attr': {'class': 'form-control', 'accept': 'image/*'}}) }}
            {{ form_errors(addform.photo) }}
          </div>
          
          {# CV (upload PDF ou image) #}
          <div class=\"col-md-12\">
            <label for=\"{{ addform.cv.vars.id }}\" class=\"form-label fw-semibold\">CV :</label>
            {{ form_widget(addform.cv, {'attr': {'class': 'form-control', 'accept': '.pdf,image/*'}}) }}
            {{ form_errors(addform.cv) }}
          </div>
          
          {# Bouton de soumission #}
          <div class=\"col-12 text-center mt-4\">
            <button class=\"btn btn-success w-75 py-3\" type=\"submit\">S'inscrire</button>
          </div>
        </div>
        {{ form_end(addform) }}
      </div>
    </div>
  </div>
</div>
{% endblock %}
", "freelancer/index.html.twig", "C:\\Users\\choub\\Desktop\\CareeraPlatform - Copie\\templates\\freelancer\\index.html.twig");
    }
}
