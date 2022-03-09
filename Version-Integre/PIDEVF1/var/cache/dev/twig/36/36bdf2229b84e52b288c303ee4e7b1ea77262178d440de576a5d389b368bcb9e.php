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

/* restaurant/edit.html.twig */
class __TwigTemplate_86d57d4952fc6f4ae4384ff75e7621dbce934134354a8a9ea2387baf0665e945 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "restaurant/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "restaurant/edit.html.twig"));

        $this->parent = $this->loadTemplate("Front/front.html.twig", "restaurant/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Edit Restaurant";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "        <div id=\"main\">
            <!-- Post -->
            <section class=\"post\">
                <header class=\"major\">
                    <span class=\"date\">Edit Restaurant<</span>
                    <h1>Edit Restaurant<</h1>
                </header>

                <div class=\"section-content\">
                    ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal", "novalidate" => "novalidate"]]);
        echo "
                    <div class=\"col-md-12\">
                        <fieldset>
                            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "Nom_Restaurant", [], "any", false, false, false, 18), 'row', ["label" => "Nom du Restaurant", "attr" => ["placeholder" => "Nom du Restaurant..."]]);
        echo "
                        </fieldset>
                    </div>

                    <div class=\"col-md-12\">
                        <fieldset>
                            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "Adresse_Restaurant", [], "any", false, false, false, 24), 'row', ["attr" => ["placeholder" => "Adresse_Restaurant....."]]);
        echo "
                        </fieldset>
                    </div>

                    <div class=\"col-md-12\">
                        <fieldset>
                            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "Num_Tel_Restaurant", [], "any", false, false, false, 30), 'row', ["attr" => ["placeholder" => "Num_Tel_Restaurant..."]]);
        echo "
                        </fieldset>
                    </div>

                    <div class=\"col-md-12\">
                        <fieldset>
                            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "Description_Restaurant", [], "any", false, false, false, 36), 'row', ["attr" => ["placeholder" => "Description_Restaurant....."]]);
        echo "
                        </fieldset>
                    </div>

                    <div class=\"col-md-12\">
                        <fieldset>
                            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "image", [], "any", false, false, false, 42), 'row', ["attr" => ["placeholder" => "Confirm_password"]]);
        echo "
                        </fieldset>
                    </div>

                    <div class=\"col-md-12\">
                        <fieldset>
                            <button type= \"submit\" class=\"btn btn-success\"> Modifier ! </button>
                        </fieldset>
                    </div>

                    <div class=\"col-md-12\">
                        <fieldset>
                            <a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("restaurant_index");
        echo "\">back to list</a>
                        </fieldset>
                    </div>

                    ";
        // line 58
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), 'form_end');
        echo "

                </div>

    <a href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("restaurant_index");
        echo "\">back to list</a>

    ";
        // line 64
        echo twig_include($this->env, $context, "restaurant/_delete_form.html.twig");
        echo "

            </section>
        </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "restaurant/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 64,  170 => 62,  163 => 58,  156 => 54,  141 => 42,  132 => 36,  123 => 30,  114 => 24,  105 => 18,  99 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Front/front.html.twig' %}

{% block title %}Edit Restaurant{% endblock %}

{% block body %}
        <div id=\"main\">
            <!-- Post -->
            <section class=\"post\">
                <header class=\"major\">
                    <span class=\"date\">Edit Restaurant<</span>
                    <h1>Edit Restaurant<</h1>
                </header>

                <div class=\"section-content\">
                    {{ form_start(form , {'attr': {'class':'form-horizontal','novalidate':'novalidate'}} ) }}
                    <div class=\"col-md-12\">
                        <fieldset>
                            {{ form_row(form.Nom_Restaurant, {'label':'Nom du Restaurant' ,'attr':{'placeholder': 'Nom du Restaurant...'}}) }}
                        </fieldset>
                    </div>

                    <div class=\"col-md-12\">
                        <fieldset>
                            {{ form_row(form.Adresse_Restaurant, {'attr':{'placeholder': 'Adresse_Restaurant.....'}}) }}
                        </fieldset>
                    </div>

                    <div class=\"col-md-12\">
                        <fieldset>
                            {{ form_row(form.Num_Tel_Restaurant, {'attr':{'placeholder': 'Num_Tel_Restaurant...'}}) }}
                        </fieldset>
                    </div>

                    <div class=\"col-md-12\">
                        <fieldset>
                            {{ form_row(form.Description_Restaurant, {'attr':{'placeholder': 'Description_Restaurant.....'}}) }}
                        </fieldset>
                    </div>

                    <div class=\"col-md-12\">
                        <fieldset>
                            {{ form_row(form.image, {'attr':{'placeholder': 'Confirm_password'}}) }}
                        </fieldset>
                    </div>

                    <div class=\"col-md-12\">
                        <fieldset>
                            <button type= \"submit\" class=\"btn btn-success\"> Modifier ! </button>
                        </fieldset>
                    </div>

                    <div class=\"col-md-12\">
                        <fieldset>
                            <a href=\"{{ path('restaurant_index') }}\">back to list</a>
                        </fieldset>
                    </div>

                    {{ form_end(form) }}

                </div>

    <a href=\"{{ path('restaurant_index') }}\">back to list</a>

    {{ include('restaurant/_delete_form.html.twig') }}

            </section>
        </div>
{% endblock %}
", "restaurant/edit.html.twig", "C:\\xampp\\htdocs\\PIDEVF1\\templates\\restaurant\\edit.html.twig");
    }
}
