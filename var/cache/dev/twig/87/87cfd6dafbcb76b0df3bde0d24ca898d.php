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

<<<<<<<< HEAD:var/cache/dev/twig/9b/9b83cfe483157a697cee10a3fc281628.php
/* offre/modifoffre.html.twig */
class __TwigTemplate_5f34ab95d3f95213aacb201d2b069515 extends Template
========
/* evenements/ajoutevent.html.twig */
class __TwigTemplate_d648b3aac4e741dc2dae8a82ec2329f6 extends Template
>>>>>>>> origin/HechBackUp:var/cache/dev/twig/87/87cfd6dafbcb76b0df3bde0d24ca898d.php
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenements/ajoutevent.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenements/ajoutevent.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "evenements/ajoutevent.html.twig", 1);
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

        yield "Ajouter un événement";
        
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
        yield "<div class=\"container my-5\">
    <h1 class=\"text-center mb-4 text-primary fw-bold\">Créer un nouvel événement</h1>
    <div class=\"row justify-content-center\">
<<<<<<<< HEAD:var/cache/dev/twig/9b/9b83cfe483157a697cee10a3fc281628.php
        <div class=\"col-md-8\">
            <div class=\"wow fadeInUp\" data-wow-delay=\"0.5s\">
                <p class=\"mb-4\">Modifier une offre sur notre plateforme. Remplissez les informations ci-dessous.</p>
========
        <div class=\"col-md-8 col-lg-6\">
            <div class=\"card shadow-sm p-4 wow fadeInUp\" data-wow-delay=\"0.5s\">
                <p class=\"text-muted text-center mb-4\">Remplissez les détails ci-dessous pour ajouter votre événement.</p>
                
>>>>>>>> origin/HechBackUp:var/cache/dev/twig/87/87cfd6dafbcb76b0df3bde0d24ca898d.php
                ";
        // line 13
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 13, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "needs-validation"]]);
        yield "
                <div class=\"row g-3\">
                    <!-- Nom -->
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 18, $this->source); })()), "nom", [], "any", false, false, false, 18), 'row', ["attr" => ["class" => "form-control border-primary-subtle", "placeholder" => "Nom de l'événement", "required" => "required"]]);
        yield "
                            <label for=\"";
<<<<<<<< HEAD:var/cache/dev/twig/9b/9b83cfe483157a697cee10a3fc281628.php
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 17, $this->source); })()), "nomposte", [], "any", false, false, false, 17), "vars", [], "any", false, false, false, 17), "id", [], "any", false, false, false, 17), "html", null, true);
        yield "\">Nom du Poste (emploi ou stage)</label>
                        </div>
                        <div class=\"text-danger\">
                            ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 20, $this->source); })()), "nomposte", [], "any", false, false, false, 20), 'errors');
        yield "
                        </div>
                    </div>

========
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 19, $this->source); })()), "nom", [], "any", false, false, false, 19), "vars", [], "any", false, false, false, 19), "id", [], "any", false, false, false, 19), "html", null, true);
        yield "\"><span class=\"text-danger\">*</span></label>
                        </div>
                    </div>

                    <!-- Date -->
>>>>>>>> origin/HechBackUp:var/cache/dev/twig/87/87cfd6dafbcb76b0df3bde0d24ca898d.php
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            ";
        // line 26
<<<<<<<< HEAD:var/cache/dev/twig/9b/9b83cfe483157a697cee10a3fc281628.php
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 26, $this->source); })()), "entreprise", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            <label for=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 27, $this->source); })()), "entreprise", [], "any", false, false, false, 27), "vars", [], "any", false, false, false, 27), "id", [], "any", false, false, false, 27), "html", null, true);
        yield "\">Entreprise</label>
========
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 26, $this->source); })()), "date", [], "any", false, false, false, 26), 'row', ["attr" => ["class" => "form-control border-primary-subtle", "placeholder" => "Date", "required" => "required"]]);
        yield "
                            <label for=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 27, $this->source); })()), "date", [], "any", false, false, false, 27), "vars", [], "any", false, false, false, 27), "id", [], "any", false, false, false, 27), "html", null, true);
        yield "\"> <span class=\"text-danger\">*</span></label>
>>>>>>>> origin/HechBackUp:var/cache/dev/twig/87/87cfd6dafbcb76b0df3bde0d24ca898d.php
                        </div>
                        <div class=\"text-danger\">
                            ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 30, $this->source); })()), "entreprise", [], "any", false, false, false, 30), 'errors');
        yield "
                        </div>
                    </div>

<<<<<<<< HEAD:var/cache/dev/twig/9b/9b83cfe483157a697cee10a3fc281628.php
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 36, $this->source); })()), "localisation", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            <label for=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 37, $this->source); })()), "localisation", [], "any", false, false, false, 37), "vars", [], "any", false, false, false, 37), "id", [], "any", false, false, false, 37), "html", null, true);
        yield "\">Localisation</label>
                        </div>
                        <div class=\"text-danger\">
                            ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 40, $this->source); })()), "localisation", [], "any", false, false, false, 40), 'errors');
        yield "
                        </div>
                    </div>

                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 46, $this->source); })()), "salaire", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            <label for=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 47, $this->source); })()), "salaire", [], "any", false, false, false, 47), "vars", [], "any", false, false, false, 47), "id", [], "any", false, false, false, 47), "html", null, true);
        yield "\">Salaire</label>
                        </div>
                        <div class=\"text-danger\">
                            ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 50, $this->source); })()), "salaire", [], "any", false, false, false, 50), 'errors');
        yield "
                        </div>
                    </div>

                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 56, $this->source); })()), "typecontrat", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            <label for=\"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 57, $this->source); })()), "typecontrat", [], "any", false, false, false, 57), "vars", [], "any", false, false, false, 57), "id", [], "any", false, false, false, 57), "html", null, true);
        yield "\">Type de Contrat</label>
                        </div>
                        <div class=\"text-danger\">
                            ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 60, $this->source); })()), "typecontrat", [], "any", false, false, false, 60), 'errors');
        yield "
                        </div>
                    </div>

                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 66, $this->source); })()), "typeOffre", [], "any", false, false, false, 66), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            <label for=\"";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 67, $this->source); })()), "typeOffre", [], "any", false, false, false, 67), "vars", [], "any", false, false, false, 67), "id", [], "any", false, false, false, 67), "html", null, true);
        yield "\">Type d'Offre</label>
========
                    <!-- Description -->
                    <div class=\"col-12\">
                        <div class=\"form-floating\">
                            ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 34, $this->source); })()), "description", [], "any", false, false, false, 34), 'row', ["attr" => ["class" => "form-control border-primary-subtle", "placeholder" => "Description", "rows" => "6", "required" => "required"]]);
        yield "
                            <label for=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 35, $this->source); })()), "description", [], "any", false, false, false, 35), "vars", [], "any", false, false, false, 35), "id", [], "any", false, false, false, 35), "html", null, true);
        yield "\"><span class=\"text-danger\">*</span></label>
                        </div>
                    </div>

                    <!-- Lieu -->
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 42, $this->source); })()), "lieu", [], "any", false, false, false, 42), 'row', ["attr" => ["class" => "form-control border-primary-subtle", "placeholder" => "Lieu", "required" => "required"]]);
        yield "
                            <label for=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 43, $this->source); })()), "lieu", [], "any", false, false, false, 43), "vars", [], "any", false, false, false, 43), "id", [], "any", false, false, false, 43), "html", null, true);
        yield "\"> <span class=\"text-danger\">*</span></label>
                        </div>
                    </div>

                    <!-- Type d'événement -->
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 50, $this->source); })()), "TypeEvent", [], "any", false, false, false, 50), 'row', ["attr" => ["class" => "form-select border-primary-subtle", "placeholder" => "Type d'événement"]]);
        yield "
                            <label for=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 51, $this->source); })()), "TypeEvent", [], "any", false, false, false, 51), "vars", [], "any", false, false, false, 51), "id", [], "any", false, false, false, 51), "html", null, true);
        yield "\"></label>
>>>>>>>> origin/HechBackUp:var/cache/dev/twig/87/87cfd6dafbcb76b0df3bde0d24ca898d.php
                        </div>
                        <div class=\"text-danger\">
                            ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 70, $this->source); })()), "typeOffre", [], "any", false, false, false, 70), 'errors');
        yield "
                        </div>
                    </div>

                    <!-- URL Image Cloudinary -->
                    <div class=\"col-12\">
                        <div class=\"form-floating\">
                            ";
<<<<<<<< HEAD:var/cache/dev/twig/9b/9b83cfe483157a697cee10a3fc281628.php
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 76, $this->source); })()), "image", [], "any", false, false, false, 76), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            <label for=\"";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 77, $this->source); })()), "image", [], "any", false, false, false, 77), "vars", [], "any", false, false, false, 77), "id", [], "any", false, false, false, 77), "html", null, true);
        yield "\">Image</label>
                            ";
        // line 78
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 78, $this->source); })()), "image", [], "any", false, false, false, 78), "vars", [], "any", false, false, false, 78), "value", [], "any", false, false, false, 78)) {
            // line 79
            yield "                                <div class=\"mt-2\">
                                    <p>Image actuelle :</p>
                                    <img src=\"";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 81, $this->source); })()), "image", [], "any", false, false, false, 81), "vars", [], "any", false, false, false, 81), "value", [], "any", false, false, false, 81))), "html", null, true);
            yield "\" alt=\"Image actuelle\" width=\"100\">
                                </div>
                            ";
        }
        // line 84
        yield "                        </div>
                        <div class=\"text-danger\">
                            ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 86, $this->source); })()), "image", [], "any", false, false, false, 86), 'errors');
        yield "
                        </div>
                    </div>

                    <div class=\"col-md-6\">
                        <div class=\"form-check\">
                            ";
        // line 92
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 92, $this->source); })()), "disponibilite", [], "any", false, false, false, 92), 'widget', ["attr" => ["class" => "form-check-input"]]);
        yield "
                            <label for=\"";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 93, $this->source); })()), "disponibilite", [], "any", false, false, false, 93), "vars", [], "any", false, false, false, 93), "id", [], "any", false, false, false, 93), "html", null, true);
        yield "\" class=\"form-check-label\">Disponibilité</label>
========
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 58, $this->source); })()), "imageUrl", [], "any", false, false, false, 58), 'row', ["attr" => ["class" => "form-control border-primary-subtle", "placeholder" => "URL de l'image (Cloudinary)"]]);
        yield "
                            <label for=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 59, $this->source); })()), "imageUrl", [], "any", false, false, false, 59), "vars", [], "any", false, false, false, 59), "id", [], "any", false, false, false, 59), "html", null, true);
        yield "\"></label>
                        </div>
                    </div>

                    <!-- Disponibilité -->
                    <div class=\"col-12\">
                        <div class=\"form-check form-switch\">
                            ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 66, $this->source); })()), "disponibilite", [], "any", false, false, false, 66), 'row', ["attr" => ["class" => "form-check-input"]]);
        yield "
                            <label for=\"";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 67, $this->source); })()), "disponibilite", [], "any", false, false, false, 67), "vars", [], "any", false, false, false, 67), "id", [], "any", false, false, false, 67), "html", null, true);
        yield "\" class=\"form-check-label fw-medium\"></label>
>>>>>>>> origin/HechBackUp:var/cache/dev/twig/87/87cfd6dafbcb76b0df3bde0d24ca898d.php
                        </div>
                        <div class=\"text-danger\">
                            ";
        // line 96
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 96, $this->source); })()), "disponibilite", [], "any", false, false, false, 96), 'errors');
        yield "
                        </div>
                    </div>

                    <!-- Bouton Soumettre -->
                    <div class=\"col-12 text-center mt-4\">
<<<<<<<< HEAD:var/cache/dev/twig/9b/9b83cfe483157a697cee10a3fc281628.php
                        <button class=\"btn btn-success w-75 py-3\" type=\"submit\">Enregistrer</button>
                    </div>
                </div>
                ";
        // line 104
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 104, $this->source); })()), 'form_end');
========
                        <button class=\"btn btn-success w-50 py-2 rounded-pill fw-semibold\" type=\"submit\">
                            <i class=\"fas fa-save me-2\"></i> Enregistrer l'événement
                        </button>
                    </div>
                </div>
                ";
        // line 78
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addform"]) || array_key_exists("addform", $context) ? $context["addform"] : (function () { throw new RuntimeError('Variable "addform" does not exist.', 78, $this->source); })()), 'form_end');
>>>>>>>> origin/HechBackUp:var/cache/dev/twig/87/87cfd6dafbcb76b0df3bde0d24ca898d.php
        yield "
            </div>
        </div>
    </div>
</div>

<!-- Inclure FontAwesome pour les icônes (si non déjà inclus dans base.html.twig) -->
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\">
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
        return "evenements/ajoutevent.html.twig";
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
<<<<<<<< HEAD:var/cache/dev/twig/9b/9b83cfe483157a697cee10a3fc281628.php
        return array (  283 => 104,  272 => 96,  266 => 93,  262 => 92,  253 => 86,  249 => 84,  243 => 81,  239 => 79,  237 => 78,  233 => 77,  229 => 76,  220 => 70,  214 => 67,  210 => 66,  201 => 60,  195 => 57,  191 => 56,  182 => 50,  176 => 47,  172 => 46,  163 => 40,  157 => 37,  153 => 36,  144 => 30,  138 => 27,  134 => 26,  125 => 20,  119 => 17,  115 => 16,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
========
        return array (  219 => 78,  205 => 67,  201 => 66,  191 => 59,  187 => 58,  177 => 51,  173 => 50,  163 => 43,  159 => 42,  149 => 35,  145 => 34,  135 => 27,  131 => 26,  121 => 19,  117 => 18,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
>>>>>>>> origin/HechBackUp:var/cache/dev/twig/87/87cfd6dafbcb76b0df3bde0d24ca898d.php
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ajouter un événement{% endblock %}

{% block body %}
<div class=\"container my-5\">
    <h1 class=\"text-center mb-4 text-primary fw-bold\">Créer un nouvel événement</h1>
    <div class=\"row justify-content-center\">
<<<<<<<< HEAD:var/cache/dev/twig/9b/9b83cfe483157a697cee10a3fc281628.php
        <div class=\"col-md-8\">
            <div class=\"wow fadeInUp\" data-wow-delay=\"0.5s\">
                <p class=\"mb-4\">Modifier une offre sur notre plateforme. Remplissez les informations ci-dessous.</p>
                {{ form_start(addform, {'attr': {'novalidate': 'novalidate'}}) }}
                <div class=\"row g-4\">
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            {{ form_widget(addform.nomposte, {'attr': {'class': 'form-control'}}) }}
                            <label for=\"{{ addform.nomposte.vars.id }}\">Nom du Poste (emploi ou stage)</label>
                        </div>
                        <div class=\"text-danger\">
                            {{ form_errors(addform.nomposte) }}
                        </div>
                    </div>

                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            {{ form_widget(addform.entreprise, {'attr': {'class': 'form-control'}}) }}
                            <label for=\"{{ addform.entreprise.vars.id }}\">Entreprise</label>
                        </div>
                        <div class=\"text-danger\">
                            {{ form_errors(addform.entreprise) }}
                        </div>
                    </div>

                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            {{ form_widget(addform.localisation, {'attr': {'class': 'form-control'}}) }}
                            <label for=\"{{ addform.localisation.vars.id }}\">Localisation</label>
                        </div>
                        <div class=\"text-danger\">
                            {{ form_errors(addform.localisation) }}
                        </div>
                    </div>

                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            {{ form_widget(addform.salaire, {'attr': {'class': 'form-control'}}) }}
                            <label for=\"{{ addform.salaire.vars.id }}\">Salaire</label>
                        </div>
                        <div class=\"text-danger\">
                            {{ form_errors(addform.salaire) }}
                        </div>
                    </div>

                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            {{ form_widget(addform.typecontrat, {'attr': {'class': 'form-control'}}) }}
                            <label for=\"{{ addform.typecontrat.vars.id }}\">Type de Contrat</label>
                        </div>
                        <div class=\"text-danger\">
                            {{ form_errors(addform.typecontrat) }}
                        </div>
                    </div>

                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            {{ form_widget(addform.typeOffre, {'attr': {'class': 'form-control'}}) }}
                            <label for=\"{{ addform.typeOffre.vars.id }}\">Type d'Offre</label>
                        </div>
                        <div class=\"text-danger\">
                            {{ form_errors(addform.typeOffre) }}
                        </div>
                    </div>
                    
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            {{ form_widget(addform.image, {'attr': {'class': 'form-control'}}) }}
                            <label for=\"{{ addform.image.vars.id }}\">Image</label>
                            {% if addform.image.vars.value %}
                                <div class=\"mt-2\">
                                    <p>Image actuelle :</p>
                                    <img src=\"{{ asset('uploads/images/' ~ addform.image.vars.value) }}\" alt=\"Image actuelle\" width=\"100\">
                                </div>
                            {% endif %}
                        </div>
                        <div class=\"text-danger\">
                            {{ form_errors(addform.image) }}
                        </div>
                    </div>

                    <div class=\"col-md-6\">
                        <div class=\"form-check\">
                            {{ form_widget(addform.disponibilite, {'attr': {'class': 'form-check-input'}}) }}
                            <label for=\"{{ addform.disponibilite.vars.id }}\" class=\"form-check-label\">Disponibilité</label>
========
        <div class=\"col-md-8 col-lg-6\">
            <div class=\"card shadow-sm p-4 wow fadeInUp\" data-wow-delay=\"0.5s\">
                <p class=\"text-muted text-center mb-4\">Remplissez les détails ci-dessous pour ajouter votre événement.</p>
                
                {{ form_start(addform, {'attr': {'novalidate': 'novalidate', 'class': 'needs-validation'}}) }}
                <div class=\"row g-3\">
                    <!-- Nom -->
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            {{ form_row(addform.nom, {'attr': {'class': 'form-control border-primary-subtle', 'placeholder': 'Nom de l\\'événement', 'required': 'required'}}) }}
                            <label for=\"{{ addform.nom.vars.id }}\"><span class=\"text-danger\">*</span></label>
>>>>>>>> origin/HechBackUp:var/cache/dev/twig/87/87cfd6dafbcb76b0df3bde0d24ca898d.php
                        </div>
                        <div class=\"text-danger\">
                            {{ form_errors(addform.disponibilite) }}
                        </div>
                    </div>

                    <!-- Date -->
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            {{ form_row(addform.date, {'attr': {'class': 'form-control border-primary-subtle', 'placeholder': 'Date', 'required': 'required'}}) }}
                            <label for=\"{{ addform.date.vars.id }}\"> <span class=\"text-danger\">*</span></label>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class=\"col-12\">
                        <div class=\"form-floating\">
                            {{ form_row(addform.description, {'attr': {'class': 'form-control border-primary-subtle', 'placeholder': 'Description', 'rows': '6', 'required': 'required'}}) }}
                            <label for=\"{{ addform.description.vars.id }}\"><span class=\"text-danger\">*</span></label>
                        </div>
                    </div>

                    <!-- Lieu -->
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            {{ form_row(addform.lieu, {'attr': {'class': 'form-control border-primary-subtle', 'placeholder': 'Lieu', 'required': 'required'}}) }}
                            <label for=\"{{ addform.lieu.vars.id }}\"> <span class=\"text-danger\">*</span></label>
                        </div>
                    </div>

                    <!-- Type d'événement -->
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            {{ form_row(addform.TypeEvent, {'attr': {'class': 'form-select border-primary-subtle', 'placeholder': 'Type d\\'événement'}}) }}
                            <label for=\"{{ addform.TypeEvent.vars.id }}\"></label>
                        </div>
                    </div>

                    <!-- URL Image Cloudinary -->
                    <div class=\"col-12\">
                        <div class=\"form-floating\">
                            {{ form_row(addform.imageUrl, {'attr': {'class': 'form-control border-primary-subtle', 'placeholder': 'URL de l\\'image (Cloudinary)'}}) }}
                            <label for=\"{{ addform.imageUrl.vars.id }}\"></label>
                        </div>
                    </div>

                    <!-- Disponibilité -->
                    <div class=\"col-12\">
                        <div class=\"form-check form-switch\">
                            {{ form_row(addform.disponibilite, {'attr': {'class': 'form-check-input'}}) }}
                            <label for=\"{{ addform.disponibilite.vars.id }}\" class=\"form-check-label fw-medium\"></label>
                        </div>
                    </div>

                    <!-- Bouton Soumettre -->
                    <div class=\"col-12 text-center mt-4\">
<<<<<<<< HEAD:var/cache/dev/twig/9b/9b83cfe483157a697cee10a3fc281628.php
                        <button class=\"btn btn-success w-75 py-3\" type=\"submit\">Enregistrer</button>
========
                        <button class=\"btn btn-success w-50 py-2 rounded-pill fw-semibold\" type=\"submit\">
                            <i class=\"fas fa-save me-2\"></i> Enregistrer l'événement
                        </button>
>>>>>>>> origin/HechBackUp:var/cache/dev/twig/87/87cfd6dafbcb76b0df3bde0d24ca898d.php
                    </div>
                </div>
                {{ form_end(addform) }}
            </div>
        </div>
    </div>
</div>

<!-- Inclure FontAwesome pour les icônes (si non déjà inclus dans base.html.twig) -->
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\">
{% endblock %}", "evenements/ajoutevent.html.twig", "C:\\Users\\medhe\\OneDrive\\Bureau\\New folder (9)\\CareeraPlatform\\templates\\evenements\\ajoutevent.html.twig");
    }
}
