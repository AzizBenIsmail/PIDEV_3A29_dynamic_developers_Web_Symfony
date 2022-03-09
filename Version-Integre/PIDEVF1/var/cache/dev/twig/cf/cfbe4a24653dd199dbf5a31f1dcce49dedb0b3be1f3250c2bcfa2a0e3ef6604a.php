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
class __TwigTemplate_fee74c7803b45a89d8e3da0f0232811fb6addd1ec23565f0fdf2546ae1a941a6 extends Template
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
        return "Front/front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/registration.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/registration.html.twig"));

        $this->parent = $this->loadTemplate("Front/front.html.twig", "security/registration.html.twig", 1);
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
        echo "   <div id=\"main\">
           <!-- Post -->
\t <section class=\"post\">
\t\t  <header class=\"major\">
\t\t     <span class=\"date\">April 25, 2017</span>
\t\t\t   <h1>S'inscrire</h1>
\t\t  </header>
    <div class=\"section-content\">
              ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start');
        echo "
          <div class=\"col-md-12\">
             <fieldset>
              ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "CIN", [], "any", false, false, false, 15), 'row', ["label" => "Votre CIN", "attr" => ["placeholder" => "CIN..."]]);
        echo "
             </fieldset>
          </div>

          <div class=\"col-md-12\">
            <fieldset>
             ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "UserName", [], "any", false, false, false, 21), 'row', ["attr" => ["placeholder" => "Username"]]);
        echo "
            </fieldset>
          </div>

          <div class=\"col-md-12\">
            <fieldset>
             ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "Numero", [], "any", false, false, false, 27), 'row', ["attr" => ["placeholder" => "numero..."]]);
        echo "
            </fieldset>
          </div>

          <div class=\"col-md-12\">
            <fieldset>
             ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "Email", [], "any", false, false, false, 33), 'row', ["label" => "Email de clien", "attr" => ["placeholder" => "Adresse email...."]]);
        echo "
            </fieldset>
          </div>

         <div class=\"col-md-12\">
            <fieldset>
             ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "Adresse", [], "any", false, false, false, 39), 'row', ["attr" => ["placeholder" => "Votre Adresse"]]);
        echo "
            </fieldset>
         </div>

         <div class=\"col-md-12\">
           <fieldset>
             ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "Password", [], "any", false, false, false, 45), 'row', ["attr" => ["placeholder" => "password"]]);
        echo "
           </fieldset>
         </div>

         <div class=\"col-md-12\">
            <fieldset>
             ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "confirm_password", [], "any", false, false, false, 51), 'row', ["attr" => ["placeholder" => "Confirm_password"]]);
        echo "
            </fieldset>
         </div>

         <div class=\"col-md-12\">
           <fieldset>
             <button type= \"submit\" class=\"btn btn-success\"> Inscription ! </button>
           </fieldset>
         </div>
       ";
        // line 60
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), 'form_end');
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
        return array (  150 => 60,  138 => 51,  129 => 45,  120 => 39,  111 => 33,  102 => 27,  93 => 21,  84 => 15,  78 => 12,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Front/front.html.twig' %}

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
       {{ form_end(form) }}

    </div>
  </section>
</div>
{% endblock %}", "security/registration.html.twig", "C:\\xampp\\htdocs\\PIDEVF1\\templates\\security\\registration.html.twig");
    }
}
