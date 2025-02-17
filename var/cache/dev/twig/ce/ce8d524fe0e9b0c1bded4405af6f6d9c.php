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

/* moderateur/index.html.twig */
class __TwigTemplate_f1d77a2667efcaf24305016c9fa55ca5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "moderateur/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "moderateur/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "moderateur/index.html.twig", 1);
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

        yield "Inscription Recruteur";
        
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
      <div class=\"card shadow p-4\">
        <h3 class=\"text-center mb-4\" style=\"font-size: 1.6rem; font-weight: bold;\">
          Inscription Recruteur
        </h3>
        ";
        // line 13
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 13, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "enctype" => "multipart/form-data"]]);
        yield "

        <div class=\"row mb-4\">
          <div class=\"col\">
            <label for=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 17, $this->source); })()), "nom", [], "any", false, false, false, 17), "vars", [], "any", false, false, false, 17), "id", [], "any", false, false, false, 17), "html", null, true);
        yield "\" class=\"form-label\">Nom:</label>
            ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 18, $this->source); })()), "nom", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "form-control", "required" => "required"]]);
        yield "
            ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 19, $this->source); })()), "nom", [], "any", false, false, false, 19), 'errors');
        yield "
          </div>
          <div class=\"col\">
            <label for=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 22, $this->source); })()), "prenom", [], "any", false, false, false, 22), "vars", [], "any", false, false, false, 22), "id", [], "any", false, false, false, 22), "html", null, true);
        yield "\" class=\"form-label\">Prénom:</label>
            ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 23, $this->source); })()), "prenom", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "form-control", "required" => "required"]]);
        yield "
            ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 24, $this->source); })()), "prenom", [], "any", false, false, false, 24), 'errors');
        yield "
          </div>
        </div>
        
        <div class=\"mb-4\">
          <label for=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 29, $this->source); })()), "email", [], "any", false, false, false, 29), "vars", [], "any", false, false, false, 29), "id", [], "any", false, false, false, 29), "html", null, true);
        yield "\" class=\"form-label\">Email:</label>
          ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 30, $this->source); })()), "email", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-control", "required" => "required"]]);
        yield "
          ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 31, $this->source); })()), "email", [], "any", false, false, false, 31), 'errors');
        yield "
        </div>

        <div class=\"row mb-4\">
          <div class=\"col\">
            <label for=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 36, $this->source); })()), "motdepasse", [], "any", false, false, false, 36), "vars", [], "any", false, false, false, 36), "id", [], "any", false, false, false, 36), "html", null, true);
        yield "\" class=\"form-label\">Mot de passe:</label>
            ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 37, $this->source); })()), "motdepasse", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control", "required" => "required"]]);
        yield "
            ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 38, $this->source); })()), "motdepasse", [], "any", false, false, false, 38), 'errors');
        yield "
          </div>
          <div class=\"col\">
            <label for=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 41, $this->source); })()), "confirmpasse", [], "any", false, false, false, 41), "vars", [], "any", false, false, false, 41), "id", [], "any", false, false, false, 41), "html", null, true);
        yield "\" class=\"form-label\">Confirmer le mot de passe:</label>
            ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 42, $this->source); })()), "confirmpasse", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control", "required" => "required"]]);
        yield "
            ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 43, $this->source); })()), "confirmpasse", [], "any", false, false, false, 43), 'errors');
        yield "
          </div>
        </div>

        <div class=\"mb-4\">
          <label for=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 48, $this->source); })()), "Adresse", [], "any", false, false, false, 48), "vars", [], "any", false, false, false, 48), "id", [], "any", false, false, false, 48), "html", null, true);
        yield "\" class=\"form-label\">Adresse:</label>
          ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 49, $this->source); })()), "Adresse", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control", "required" => "required"]]);
        yield "
          ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 50, $this->source); })()), "Adresse", [], "any", false, false, false, 50), 'errors');
        yield "
        </div>

        <div class=\"mb-4\">
          <label for=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 54, $this->source); })()), "societe", [], "any", false, false, false, 54), "vars", [], "any", false, false, false, 54), "id", [], "any", false, false, false, 54), "html", null, true);
        yield "\" class=\"form-label\">Société:</label>
          ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 55, $this->source); })()), "societe", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "form-control", "required" => "required"]]);
        yield "
          ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 56, $this->source); })()), "societe", [], "any", false, false, false, 56), 'errors');
        yield "
        </div>

        <div class=\"mb-4\">
          <label for=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 60, $this->source); })()), "domaine", [], "any", false, false, false, 60), "vars", [], "any", false, false, false, 60), "id", [], "any", false, false, false, 60), "html", null, true);
        yield "\" class=\"form-label\">Domaine:</label>
          ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 61, $this->source); })()), "domaine", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "form-control", "required" => "required"]]);
        yield "
          ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 62, $this->source); })()), "domaine", [], "any", false, false, false, 62), 'errors');
        yield "
        </div>

        <div class=\"mb-4\">
          <label for=\"";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 66, $this->source); })()), "tel", [], "any", false, false, false, 66), "vars", [], "any", false, false, false, 66), "id", [], "any", false, false, false, 66), "html", null, true);
        yield "\" class=\"form-label\">Numéro de téléphone:</label>
          ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 67, $this->source); })()), "tel", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => "form-control", "required" => "required"]]);
        yield "
          ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 68, $this->source); })()), "tel", [], "any", false, false, false, 68), 'errors');
        yield "
        </div>

        <div class=\"mb-4\">
          <label for=\"";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 72, $this->source); })()), "photo", [], "any", false, false, false, 72), "vars", [], "any", false, false, false, 72), "id", [], "any", false, false, false, 72), "html", null, true);
        yield "\" class=\"form-label\">Photo de profil:</label>
          ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 73, $this->source); })()), "photo", [], "any", false, false, false, 73), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
          ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 74, $this->source); })()), "photo", [], "any", false, false, false, 74), 'errors');
        yield "
        </div>

        <div class=\"mb-4\">
          <label for=\"";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 78, $this->source); })()), "sexe", [], "any", false, false, false, 78), "vars", [], "any", false, false, false, 78), "id", [], "any", false, false, false, 78), "html", null, true);
        yield "\" class=\"form-label\">Sexe:</label>
          ";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 79, $this->source); })()), "sexe", [], "any", false, false, false, 79), 'widget', ["attr" => ["class" => "form-control", "required" => "required"]]);
        yield "
          ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 80, $this->source); })()), "sexe", [], "any", false, false, false, 80), 'errors');
        yield "
        </div>

        <button type=\"submit\" class=\"btn btn-primary w-100\">S'inscrire</button>
        ";
        // line 84
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 84, $this->source); })()), 'form_end');
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
        return "moderateur/index.html.twig";
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
        return array (  282 => 84,  275 => 80,  271 => 79,  267 => 78,  260 => 74,  256 => 73,  252 => 72,  245 => 68,  241 => 67,  237 => 66,  230 => 62,  226 => 61,  222 => 60,  215 => 56,  211 => 55,  207 => 54,  200 => 50,  196 => 49,  192 => 48,  184 => 43,  180 => 42,  176 => 41,  170 => 38,  166 => 37,  162 => 36,  154 => 31,  150 => 30,  146 => 29,  138 => 24,  134 => 23,  130 => 22,  124 => 19,  120 => 18,  116 => 17,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Inscription Recruteur{% endblock %}

{% block body %}
<div class=\"container mb-5\">
  <div class=\"row justify-content-center align-items-center\">
    <div class=\"col-md-6\">
      <div class=\"card shadow p-4\">
        <h3 class=\"text-center mb-4\" style=\"font-size: 1.6rem; font-weight: bold;\">
          Inscription Recruteur
        </h3>
        {{ form_start(addform, {'attr': {'novalidate': 'novalidate', 'enctype': 'multipart/form-data'}}) }}

        <div class=\"row mb-4\">
          <div class=\"col\">
            <label for=\"{{ addform.nom.vars.id }}\" class=\"form-label\">Nom:</label>
            {{ form_widget(addform.nom, {'attr': {'class': 'form-control', 'required': 'required'}}) }}
            {{ form_errors(addform.nom) }}
          </div>
          <div class=\"col\">
            <label for=\"{{ addform.prenom.vars.id }}\" class=\"form-label\">Prénom:</label>
            {{ form_widget(addform.prenom, {'attr': {'class': 'form-control', 'required': 'required'}}) }}
            {{ form_errors(addform.prenom) }}
          </div>
        </div>
        
        <div class=\"mb-4\">
          <label for=\"{{ addform.email.vars.id }}\" class=\"form-label\">Email:</label>
          {{ form_widget(addform.email, {'attr': {'class': 'form-control', 'required': 'required'}}) }}
          {{ form_errors(addform.email) }}
        </div>

        <div class=\"row mb-4\">
          <div class=\"col\">
            <label for=\"{{ addform.motdepasse.vars.id }}\" class=\"form-label\">Mot de passe:</label>
            {{ form_widget(addform.motdepasse, {'attr': {'class': 'form-control', 'required': 'required'}}) }}
            {{ form_errors(addform.motdepasse) }}
          </div>
          <div class=\"col\">
            <label for=\"{{ addform.confirmpasse.vars.id }}\" class=\"form-label\">Confirmer le mot de passe:</label>
            {{ form_widget(addform.confirmpasse, {'attr': {'class': 'form-control', 'required': 'required'}}) }}
            {{ form_errors(addform.confirmpasse) }}
          </div>
        </div>

        <div class=\"mb-4\">
          <label for=\"{{ addform.Adresse.vars.id }}\" class=\"form-label\">Adresse:</label>
          {{ form_widget(addform.Adresse, {'attr': {'class': 'form-control', 'required': 'required'}}) }}
          {{ form_errors(addform.Adresse) }}
        </div>

        <div class=\"mb-4\">
          <label for=\"{{ addform.societe.vars.id }}\" class=\"form-label\">Société:</label>
          {{ form_widget(addform.societe, {'attr': {'class': 'form-control', 'required': 'required'}}) }}
          {{ form_errors(addform.societe) }}
        </div>

        <div class=\"mb-4\">
          <label for=\"{{ addform.domaine.vars.id }}\" class=\"form-label\">Domaine:</label>
          {{ form_widget(addform.domaine, {'attr': {'class': 'form-control', 'required': 'required'}}) }}
          {{ form_errors(addform.domaine) }}
        </div>

        <div class=\"mb-4\">
          <label for=\"{{ addform.tel.vars.id }}\" class=\"form-label\">Numéro de téléphone:</label>
          {{ form_widget(addform.tel, {'attr': {'class': 'form-control', 'required': 'required'}}) }}
          {{ form_errors(addform.tel) }}
        </div>

        <div class=\"mb-4\">
          <label for=\"{{ addform.photo.vars.id }}\" class=\"form-label\">Photo de profil:</label>
          {{ form_widget(addform.photo, {'attr': {'class': 'form-control'}}) }}
          {{ form_errors(addform.photo) }}
        </div>

        <div class=\"mb-4\">
          <label for=\"{{ addform.sexe.vars.id }}\" class=\"form-label\">Sexe:</label>
          {{ form_widget(addform.sexe, {'attr': {'class': 'form-control', 'required': 'required'}}) }}
          {{ form_errors(addform.sexe) }}
        </div>

        <button type=\"submit\" class=\"btn btn-primary w-100\">S'inscrire</button>
        {{ form_end(addform) }}
      </div>
    </div>
  </div>
</div>
{% endblock %}
", "moderateur/index.html.twig", "C:\\Users\\choub\\Desktop\\CareeraPlatform - Copie\\templates\\moderateur\\index.html.twig");
    }
}
