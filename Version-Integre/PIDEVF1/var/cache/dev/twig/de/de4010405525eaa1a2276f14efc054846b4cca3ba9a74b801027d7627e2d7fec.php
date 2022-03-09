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

/* voyage/edit.html.twig */
class __TwigTemplate_41e414bfdc7a05d10b3604d85e6070d6dcf812fa0dc776c391c3312f5a4cb217 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "voyage/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "voyage/edit.html.twig"));

        $this->parent = $this->loadTemplate("Front/front.html.twig", "voyage/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Edit Voyage";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
    <div id=\"main\">
        <!-- Post -->
        <section class=\"post\">
            <header class=\"major\">
                <span class=\"date\">Edit Voyage</span>
            </header>

            <div class=\"section-content\">
                ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'form_start');
        echo "
                <div class=\"col-md-12\">
                    <fieldset>
                        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "Clien", [], "any", false, false, false, 17), 'row', ["label" => "Votre CIN", "attr" => ["placeholder" => "CIN..."]]);
        echo "
                    </fieldset>
                </div>

                <div class=\"col-md-12\">
                    <fieldset>
                        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "Destination", [], "any", false, false, false, 23), 'row', ["attr" => ["placeholder" => "Destination"]]);
        echo "
                    </fieldset>
                </div>

                <div class=\"col-md-12\">
                    <fieldset>
                        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "Nom_Voyage", [], "any", false, false, false, 29), 'row', ["attr" => ["placeholder" => "Nom_Voyage..."]]);
        echo "
                    </fieldset>
                </div>

                <div class=\"col-md-12\">
                    <fieldset>
                        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "Duree_Voyage", [], "any", false, false, false, 35), 'row', ["attr" => ["placeholder" => "Duree_Voyage"]]);
        echo "
                    </fieldset>
                </div>

                <div class=\"col-md-12\">
                    <fieldset>
                        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "Prix", [], "any", false, false, false, 41), 'row', ["attr" => ["placeholder" => "prix_Voyage"]]);
        echo "
                    </fieldset>
                </div>

                <div class=\"col-md-12\">
                    <fieldset>
                        ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "date", [], "any", false, false, false, 47), 'row', ["attr" => ["placeholder" => "date"]]);
        echo "
                    </fieldset>
                </div>

                <div class=\"col-md-12\">
                    <fieldset>
                        ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "valabilite", [], "any", false, false, false, 53), 'row', ["attr" => ["placeholder" => "oui,non"]]);
        echo "
                    </fieldset>
                </div>

                <div class=\"col-md-12\">
                    <fieldset>
                        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "image", [], "any", false, false, false, 59), 'row', ["attr" => ["placeholder" => "Confirm_password"]]);
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
<br>
                    </fieldset>
                </div>

                ";
        // line 75
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), 'form_end');
        echo "
                ";
        // line 76
        echo twig_include($this->env, $context, "voyage/_delete_form.html.twig");
        echo "
                <a href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyage_index");
        echo "\">back to list</a>

            </div>

        </section>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "voyage/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 77,  191 => 76,  187 => 75,  168 => 59,  159 => 53,  150 => 47,  141 => 41,  132 => 35,  123 => 29,  114 => 23,  105 => 17,  99 => 14,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Front/front.html.twig' %}
    {% block title %}Edit Voyage{% endblock %}

{% block body %}

    <div id=\"main\">
        <!-- Post -->
        <section class=\"post\">
            <header class=\"major\">
                <span class=\"date\">Edit Voyage</span>
            </header>

            <div class=\"section-content\">
                {{ form_start(form) }}
                <div class=\"col-md-12\">
                    <fieldset>
                        {{ form_row(form.Clien, {'label':'Votre CIN' ,'attr':{'placeholder': 'CIN...'}}) }}
                    </fieldset>
                </div>

                <div class=\"col-md-12\">
                    <fieldset>
                        {{ form_row(form.Destination, {'attr':{'placeholder': 'Destination'}}) }}
                    </fieldset>
                </div>

                <div class=\"col-md-12\">
                    <fieldset>
                        {{ form_row(form.Nom_Voyage, {'attr':{'placeholder': 'Nom_Voyage...'}}) }}
                    </fieldset>
                </div>

                <div class=\"col-md-12\">
                    <fieldset>
                        {{ form_row(form.Duree_Voyage, {'attr':{'placeholder': 'Duree_Voyage'}}) }}
                    </fieldset>
                </div>

                <div class=\"col-md-12\">
                    <fieldset>
                        {{ form_row(form.Prix, {'attr':{'placeholder': 'prix_Voyage'}}) }}
                    </fieldset>
                </div>

                <div class=\"col-md-12\">
                    <fieldset>
                        {{ form_row(form.date, {'attr':{'placeholder': 'date'}}) }}
                    </fieldset>
                </div>

                <div class=\"col-md-12\">
                    <fieldset>
                        {{ form_row(form.valabilite, {'attr':{'placeholder': 'oui,non'}}) }}
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
<br>
                    </fieldset>
                </div>

                {{ form_end(form) }}
                {{ include('voyage/_delete_form.html.twig') }}
                <a href=\"{{ path('voyage_index') }}\">back to list</a>

            </div>

        </section>
    </div>
{% endblock %}", "voyage/edit.html.twig", "C:\\xampp\\htdocs\\PIDEVF1\\templates\\voyage\\edit.html.twig");
    }
}
