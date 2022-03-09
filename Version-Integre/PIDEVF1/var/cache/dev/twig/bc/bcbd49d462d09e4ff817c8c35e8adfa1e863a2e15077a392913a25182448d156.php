<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* security/registration.html.twig */
class __TwigTemplate_feec6571089ffd5cfcedf4fda930aeb2940b0be94a0819560c475743d0cc8160 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "Front/frontL.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/registration.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/registration.html.twig"));

        $this->parent = $this->loadTemplate("Front/frontL.html.twig", "security/registration.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

   <div id=\"main\">
           <!-- Post -->
\t <section class=\"post\">
\t\t  <header class=\"major\">
\t\t     <span class=\"date\">April 25, 2017</span>
\t\t\t   <h1>S'inscrire</h1>
\t\t  </header>

    <div class=\"section-content\">
              ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'form_start');
        echo "
          <div class=\"col-md-12\">
             <fieldset>
              ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "CIN", [], "any", false, false, false, 18), 'row', ["label" => "Votre CIN", "attr" => ["placeholder" => "CIN..."]]);
        echo "
             </fieldset>
          </div>

          <div class=\"col-md-12\">
            <fieldset>
             ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "UserName", [], "any", false, false, false, 24), 'row', ["attr" => ["placeholder" => "Username"]]);
        echo "
            </fieldset>
          </div>

          <div class=\"col-md-12\">
            <fieldset>
             ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "Numero", [], "any", false, false, false, 30), 'row', ["attr" => ["placeholder" => "numero..."]]);
        echo "
            </fieldset>
          </div>

          <div class=\"col-md-12\">
            <fieldset>
             ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "Email", [], "any", false, false, false, 36), 'row', ["label" => "Email de clien", "attr" => ["placeholder" => "Adresse email...."]]);
        echo "
            </fieldset>
          </div>

         <div class=\"col-md-12\">
            <fieldset>
             ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "Adresse", [], "any", false, false, false, 42), 'row', ["attr" => ["placeholder" => "Votre Adresse"]]);
        echo "
            </fieldset>
         </div>

         <div class=\"col-md-12\">
           <fieldset>
             ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "Password", [], "any", false, false, false, 48), 'row', ["attr" => ["placeholder" => "password"]]);
        echo "
           </fieldset>
         </div>

         <div class=\"col-md-12\">
            <fieldset>
             ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "confirm_password", [], "any", false, false, false, 54), 'row', ["attr" => ["placeholder" => "Confirm_password"]]);
        echo "
            </fieldset>
         </div>

         <div class=\"col-md-12\">
           <fieldset>
             <button type= \"submit\" class=\"btn btn-success\"> Inscription ! </button>
           </fieldset>
         </div>

         <div class=\"col-md-12\">
           <fieldset>
             <a href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
        echo "\">SingIN !<a>
           </fieldset>
        </div>

       ";
        // line 70
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), 'form_end');
        echo "

    </div>
  </section>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 70,  156 => 66,  141 => 54,  132 => 48,  123 => 42,  114 => 36,  105 => 30,  96 => 24,  87 => 18,  81 => 15,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Front/frontL.html.twig' %}

{% block body %}


   <div id=\"main\">
           <!-- Post -->
\t <section class=\"post\">
\t\t  <header class=\"major\">
\t\t     <span class=\"date\">April 25, 2017</span>
\t\t\t   <h1>S'inscrire</h1>
\t\t  </header>

    <div class=\"section-content\">
              {{ form_start(form) }}
          <div class=\"col-md-12\">
             <fieldset>
              {{ form_row(form.CIN, {'label':'Votre CIN' ,'attr':{'placeholder': 'CIN...'}}) }}
             </fieldset>
          </div>

          <div class=\"col-md-12\">
            <fieldset>
             {{ form_row(form.UserName, {'attr':{'placeholder': 'Username'}}) }}
            </fieldset>
          </div>

          <div class=\"col-md-12\">
            <fieldset>
             {{ form_row(form.Numero, {'attr':{'placeholder': 'numero...'}}) }}
            </fieldset>
          </div>

          <div class=\"col-md-12\">
            <fieldset>
             {{ form_row(form.Email, {'label':'Email de clien' ,'attr':{'placeholder': 'Adresse email....'}}) }}
            </fieldset>
          </div>

         <div class=\"col-md-12\">
            <fieldset>
             {{ form_row(form.Adresse, {'attr':{'placeholder': 'Votre Adresse'}}) }}
            </fieldset>
         </div>

         <div class=\"col-md-12\">
           <fieldset>
             {{ form_row(form.Password, {'attr':{'placeholder': 'password'}}) }}
           </fieldset>
         </div>

         <div class=\"col-md-12\">
            <fieldset>
             {{ form_row(form.confirm_password, {'attr':{'placeholder': 'Confirm_password'}}) }}
            </fieldset>
         </div>

         <div class=\"col-md-12\">
           <fieldset>
             <button type= \"submit\" class=\"btn btn-success\"> Inscription ! </button>
           </fieldset>
         </div>

         <div class=\"col-md-12\">
           <fieldset>
             <a href=\"{{ path('security_login') }}\">SingIN !<a>
           </fieldset>
        </div>

       {{ form_end(form) }}

    </div>
  </section>
</div>
{% endblock %}", "security/registration.html.twig", "C:\\xampp\\htdocs\\PIDEVF1\\templates\\security\\registration.html.twig");
    }
}
