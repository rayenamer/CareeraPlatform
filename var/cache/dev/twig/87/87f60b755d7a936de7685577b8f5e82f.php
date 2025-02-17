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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        yield "<h1 class=\"text-center my-4\">Inscription Freelancer</h1>
<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <div class=\"wow fadeInUp\" data-wow-delay=\"0.5s\">
                <p class=\"mb-4\">
                    Remplissez le formulaire ci-dessous pour créer votre compte en tant que freelancer.
                </p>
                ";
        // line 14
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 14, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "enctype" => "multipart/form-data"]]);
        yield "
                <div class=\"row g-4\">
                    
                    ";
        // line 18
        yield "                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 20, $this->source); })()), "nom", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "form-control", "required" => "required"]]);
        yield "
                            <label for=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 21, $this->source); })()), "nom", [], "any", false, false, false, 21), "vars", [], "any", false, false, false, 21), "id", [], "any", false, false, false, 21), "html", null, true);
        yield "\">Nom</label>
                            ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 22, $this->source); })()), "nom", [], "any", false, false, false, 22), 'errors');
        yield "
                        </div>
                    </div>

                    ";
        // line 27
        yield "                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 29, $this->source); })()), "prenom", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control", "required" => "required"]]);
        yield "
                            <label for=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 30, $this->source); })()), "prenom", [], "any", false, false, false, 30), "vars", [], "any", false, false, false, 30), "id", [], "any", false, false, false, 30), "html", null, true);
        yield "\">Prénom</label>
                            ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 31, $this->source); })()), "prenom", [], "any", false, false, false, 31), 'errors');
        yield "
                        </div>
                    </div>

                    ";
        // line 36
        yield "                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 38, $this->source); })()), "datedenais", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control", "type" => "date", "required" => "required"]]);
        // line 44
        yield "
                            <label for=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 45, $this->source); })()), "datedenais", [], "any", false, false, false, 45), "vars", [], "any", false, false, false, 45), "id", [], "any", false, false, false, 45), "html", null, true);
        yield "\">Date de Naissance</label>
                            ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 46, $this->source); })()), "datedenais", [], "any", false, false, false, 46), 'errors');
        yield "
                        </div>
                    </div>

                    ";
        // line 50
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 62
        yield "
                    ";
        // line 64
        yield "                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 66, $this->source); })()), "tel", [], "any", false, false, false, 66), 'widget', ["attr" => ["class" => "form-control", "required" => "required"]]);
        yield "
                            <label for=\"";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 67, $this->source); })()), "tel", [], "any", false, false, false, 67), "vars", [], "any", false, false, false, 67), "id", [], "any", false, false, false, 67), "html", null, true);
        yield "\">Téléphone</label>
                            ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 68, $this->source); })()), "tel", [], "any", false, false, false, 68), 'errors');
        yield "
                        </div>
                    </div>
                    ";
        // line 72
        yield "                    <div class=\"col-md-12\">
                        <div class=\"form-floating\">
                            ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 74, $this->source); })()), "email", [], "any", false, false, false, 74), 'widget', ["attr" => ["class" => "form-control", "required" => "required"]]);
        yield "
                            <label for=\"";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 75, $this->source); })()), "email", [], "any", false, false, false, 75), "vars", [], "any", false, false, false, 75), "id", [], "any", false, false, false, 75), "html", null, true);
        yield "\">Email</label>
                            ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 76, $this->source); })()), "email", [], "any", false, false, false, 76), 'errors');
        yield "
                        </div>
                    </div>

                    

                    ";
        // line 83
        yield "                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            ";
        // line 85
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 85, $this->source); })()), "motdepasse", [], "any", false, false, false, 85), 'widget', ["attr" => ["class" => "form-control", "required" => "required"]]);
        yield "
                            <label for=\"";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 86, $this->source); })()), "motdepasse", [], "any", false, false, false, 86), "vars", [], "any", false, false, false, 86), "id", [], "any", false, false, false, 86), "html", null, true);
        yield "\">Mot de passe</label>
                            ";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 87, $this->source); })()), "motdepasse", [], "any", false, false, false, 87), 'errors');
        yield "
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            ";
        // line 92
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 92, $this->source); })()), "confirmpasse", [], "any", false, false, false, 92), 'widget', ["attr" => ["class" => "form-control", "required" => "required"]]);
        yield "
                            <label for=\"";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 93, $this->source); })()), "confirmpasse", [], "any", false, false, false, 93), "vars", [], "any", false, false, false, 93), "id", [], "any", false, false, false, 93), "html", null, true);
        yield "\">Confirmer Mot de passe</label>
                            ";
        // line 94
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 94, $this->source); })()), "confirmpasse", [], "any", false, false, false, 94), 'errors');
        yield "
                        </div>
                    </div>

                    ";
        // line 99
        yield "                    <div class=\"col-md-12\">
                        <div class=\"form-floating\">
                            ";
        // line 101
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 101, $this->source); })()), "Adresse", [], "any", false, false, false, 101), 'widget', ["attr" => ["class" => "form-control", "required" => "required"]]);
        yield "
                            <label for=\"";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 102, $this->source); })()), "Adresse", [], "any", false, false, false, 102), "vars", [], "any", false, false, false, 102), "id", [], "any", false, false, false, 102), "html", null, true);
        yield "\">Adresse</label>
                            ";
        // line 103
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 103, $this->source); })()), "Adresse", [], "any", false, false, false, 103), 'errors');
        yield "
                        </div>
                    </div>

                    ";
        // line 108
        yield "                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            ";
        // line 110
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 110, $this->source); })()), "domaine", [], "any", false, false, false, 110), 'widget', ["attr" => ["class" => "form-control", "required" => "required"]]);
        yield "
                            <label for=\"";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 111, $this->source); })()), "domaine", [], "any", false, false, false, 111), "vars", [], "any", false, false, false, 111), "id", [], "any", false, false, false, 111), "html", null, true);
        yield "\">Domaine</label>
                            ";
        // line 112
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 112, $this->source); })()), "domaine", [], "any", false, false, false, 112), 'errors');
        yield "
                        </div>
                    </div>

                    ";
        // line 117
        yield "                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            ";
        // line 119
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 119, $this->source); })()), "sexe", [], "any", false, false, false, 119), 'widget', ["attr" => ["class" => "form-control", "required" => "required"]]);
        yield "
                            <label for=\"";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 120, $this->source); })()), "sexe", [], "any", false, false, false, 120), "vars", [], "any", false, false, false, 120), "id", [], "any", false, false, false, 120), "html", null, true);
        yield "\">Sexe</label>
                            ";
        // line 121
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 121, $this->source); })()), "sexe", [], "any", false, false, false, 121), 'errors');
        yield "
                        </div>
                    </div>

                    ";
        // line 126
        yield "                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            ";
        // line 128
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 128, $this->source); })()), "experience", [], "any", false, false, false, 128), 'widget', ["attr" => ["class" => "form-control", "required" => "required"]]);
        yield "
                            <label for=\"";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 129, $this->source); })()), "experience", [], "any", false, false, false, 129), "vars", [], "any", false, false, false, 129), "id", [], "any", false, false, false, 129), "html", null, true);
        yield "\">Années d'expérience</label>
                            ";
        // line 130
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 130, $this->source); })()), "experience", [], "any", false, false, false, 130), 'errors');
        yield "
                        </div>
                    </div>

                    ";
        // line 135
        yield "                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            ";
        // line 137
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 137, $this->source); })()), "photo", [], "any", false, false, false, 137), 'widget', ["attr" => ["class" => "form-control", "accept" => "image/*"]]);
        yield "
                            <label for=\"";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 138, $this->source); })()), "photo", [], "any", false, false, false, 138), "vars", [], "any", false, false, false, 138), "id", [], "any", false, false, false, 138), "html", null, true);
        yield "\">Photo</label>
                            ";
        // line 139
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 139, $this->source); })()), "photo", [], "any", false, false, false, 139), 'errors');
        yield "
                        </div>
                    </div>

                    ";
        // line 144
        yield "                    <div class=\"col-md-12\">
                        <div class=\"form-floating\">
                            ";
        // line 146
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 146, $this->source); })()), "cv", [], "any", false, false, false, 146), 'widget', ["attr" => ["class" => "form-control", "accept" => ".pdf,image/*"]]);
        yield "
                            <label for=\"";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 147, $this->source); })()), "cv", [], "any", false, false, false, 147), "vars", [], "any", false, false, false, 147), "id", [], "any", false, false, false, 147), "html", null, true);
        yield "\">CV</label>
                            ";
        // line 148
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 148, $this->source); })()), "cv", [], "any", false, false, false, 148), 'errors');
        yield "
                        </div>
                    </div>

                    ";
        // line 153
        yield "                    <div class=\"col-12 text-center mt-4\">
                        <button class=\"btn btn-success w-75 py-3\" type=\"submit\">S'inscrire</button>
                    </div>
                </div>
                ";
        // line 157
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 157, $this->source); })()), 'form_end');
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

    // line 50
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 51
        yield "                        <style>
                            input[type=\"date\"] {
                                background-color: #fff;
                                border-radius: 4px;
                                border: 1px solid #ccc;
                                padding: 0.5rem;
                                font-size: 1rem;
                                width: 100%;
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
        return array (  404 => 51,  391 => 50,  374 => 157,  368 => 153,  361 => 148,  357 => 147,  353 => 146,  349 => 144,  342 => 139,  338 => 138,  334 => 137,  330 => 135,  323 => 130,  319 => 129,  315 => 128,  311 => 126,  304 => 121,  300 => 120,  296 => 119,  292 => 117,  285 => 112,  281 => 111,  277 => 110,  273 => 108,  266 => 103,  262 => 102,  258 => 101,  254 => 99,  247 => 94,  243 => 93,  239 => 92,  231 => 87,  227 => 86,  223 => 85,  219 => 83,  210 => 76,  206 => 75,  202 => 74,  198 => 72,  192 => 68,  188 => 67,  184 => 66,  180 => 64,  177 => 62,  175 => 50,  168 => 46,  164 => 45,  161 => 44,  159 => 38,  155 => 36,  148 => 31,  144 => 30,  140 => 29,  136 => 27,  129 => 22,  125 => 21,  121 => 20,  117 => 18,  111 => 14,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Inscription Freelancer{% endblock %}

{% block body %}
<h1 class=\"text-center my-4\">Inscription Freelancer</h1>
<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <div class=\"wow fadeInUp\" data-wow-delay=\"0.5s\">
                <p class=\"mb-4\">
                    Remplissez le formulaire ci-dessous pour créer votre compte en tant que freelancer.
                </p>
                {{ form_start(addform, {'attr': {'novalidate': 'novalidate', 'enctype': 'multipart/form-data'}}) }}
                <div class=\"row g-4\">
                    
                    {# Nom #}
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            {{ form_widget(addform.nom, {'attr': {'class': 'form-control', 'required': 'required'}}) }}
                            <label for=\"{{ addform.nom.vars.id }}\">Nom</label>
                            {{ form_errors(addform.nom) }}
                        </div>
                    </div>

                    {# Prénom #}
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            {{ form_widget(addform.prenom, {'attr': {'class': 'form-control', 'required': 'required'}}) }}
                            <label for=\"{{ addform.prenom.vars.id }}\">Prénom</label>
                            {{ form_errors(addform.prenom) }}
                        </div>
                    </div>

                    {# Date de Naissance #}
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            {{ form_widget(addform.datedenais, {
                                'attr': {
                                    'class': 'form-control',
                                    'type': 'date',  # Spécifie que le champ est de type \"date\"
                                    'required': 'required'
                                }
                            }) }}
                            <label for=\"{{ addform.datedenais.vars.id }}\">Date de Naissance</label>
                            {{ form_errors(addform.datedenais) }}
                        </div>
                    </div>

                    {% block stylesheets %}
                        <style>
                            input[type=\"date\"] {
                                background-color: #fff;
                                border-radius: 4px;
                                border: 1px solid #ccc;
                                padding: 0.5rem;
                                font-size: 1rem;
                                width: 100%;
                            }
                        </style>
                    {% endblock %}

                    {# Téléphone #}
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            {{ form_widget(addform.tel, {'attr': {'class': 'form-control', 'required': 'required'}}) }}
                            <label for=\"{{ addform.tel.vars.id }}\">Téléphone</label>
                            {{ form_errors(addform.tel) }}
                        </div>
                    </div>
                    {# Email #}
                    <div class=\"col-md-12\">
                        <div class=\"form-floating\">
                            {{ form_widget(addform.email, {'attr': {'class': 'form-control', 'required': 'required'}}) }}
                            <label for=\"{{ addform.email.vars.id }}\">Email</label>
                            {{ form_errors(addform.email) }}
                        </div>
                    </div>

                    

                    {# Mot de passe #}
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            {{ form_widget(addform.motdepasse, {'attr': {'class': 'form-control', 'required': 'required'}}) }}
                            <label for=\"{{ addform.motdepasse.vars.id }}\">Mot de passe</label>
                            {{ form_errors(addform.motdepasse) }}
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            {{ form_widget(addform.confirmpasse, {'attr': {'class': 'form-control', 'required': 'required'}}) }}
                            <label for=\"{{ addform.confirmpasse.vars.id }}\">Confirmer Mot de passe</label>
                            {{ form_errors(addform.confirmpasse) }}
                        </div>
                    </div>

                    {# Adresse #}
                    <div class=\"col-md-12\">
                        <div class=\"form-floating\">
                            {{ form_widget(addform.Adresse, {'attr': {'class': 'form-control', 'required': 'required'}}) }}
                            <label for=\"{{ addform.Adresse.vars.id }}\">Adresse</label>
                            {{ form_errors(addform.Adresse) }}
                        </div>
                    </div>

                    {# Domaine #}
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            {{ form_widget(addform.domaine, {'attr': {'class': 'form-control', 'required': 'required'}}) }}
                            <label for=\"{{ addform.domaine.vars.id }}\">Domaine</label>
                            {{ form_errors(addform.domaine) }}
                        </div>
                    </div>

                    {# Sexe (liste déroulante) #}
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            {{ form_widget(addform.sexe, {'attr': {'class': 'form-control', 'required': 'required'}}) }}
                            <label for=\"{{ addform.sexe.vars.id }}\">Sexe</label>
                            {{ form_errors(addform.sexe) }}
                        </div>
                    </div>

                    {# Années d'expérience #}
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            {{ form_widget(addform.experience, {'attr': {'class': 'form-control', 'required': 'required'}}) }}
                            <label for=\"{{ addform.experience.vars.id }}\">Années d'expérience</label>
                            {{ form_errors(addform.experience) }}
                        </div>
                    </div>

                    {# Photo (upload image) #}
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            {{ form_widget(addform.photo, {'attr': {'class': 'form-control', 'accept': 'image/*'}}) }}
                            <label for=\"{{ addform.photo.vars.id }}\">Photo</label>
                            {{ form_errors(addform.photo) }}
                        </div>
                    </div>

                    {# CV (upload PDF ou image) #}
                    <div class=\"col-md-12\">
                        <div class=\"form-floating\">
                            {{ form_widget(addform.cv, {'attr': {'class': 'form-control', 'accept': '.pdf,image/*'}}) }}
                            <label for=\"{{ addform.cv.vars.id }}\">CV</label>
                            {{ form_errors(addform.cv) }}
                        </div>
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
