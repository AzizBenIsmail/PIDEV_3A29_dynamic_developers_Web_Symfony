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

/* Excursion/new.html.twig */
class __TwigTemplate_6f94466dd3eff13330f0f3397f2c54725b76b4a2b1d2e5b3b7be115cf686aab4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Excursion/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Excursion/new.html.twig"));

        $this->parent = $this->loadTemplate("Front/front.html.twig", "Excursion/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    <div id=\"main\">
        <!-- Post -->
        <section class=\"post\">
            <header class=\"major\">
                <span class=\"date\">April 25, 2017</span>
                <h1>Create new Excursion</h1>
            </header>

            <div class=\"section-content\">
                ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal", "novalidate" => "novalidate"]]);
        echo "
                <div class=\"col-md-12\">
                    <fieldset>
                        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "Client", [], "any", false, false, false, 16), 'row', ["label" => "Votre CIN", "attr" => ["placeholder" => "CIN..."]]);
        echo "
                    </fieldset>
                </div>

                <div class=\"col-md-12\">
                    <fieldset>
                        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "Nom_Excursion", [], "any", false, false, false, 22), 'row', ["attr" => ["placeholder" => "Nom_Excursion"]]);
        echo "
                    </fieldset>
                </div>

                <div class=\"col-md-12\">
                    <fieldset>
                        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "Description_Excursion", [], "any", false, false, false, 28), 'row', ["attr" => ["placeholder" => "Description_Excursion..."]]);
        echo "
                    </fieldset>
                </div>

                <div class=\"col-md-12\">
                    <fieldset>
                        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "Date", [], "any", false, false, false, 34), 'row', ["attr" => ["placeholder" => "Date"]]);
        echo "
                    </fieldset>
                </div>

                <div class=\"col-md-12\">
                    <fieldset>
                        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "Type_Excursion", [], "any", false, false, false, 40), 'row', ["attr" => ["placeholder" => "Type_Excursion"]]);
        echo "
                    </fieldset>
                </div>

                <div class=\"col-md-12\">
                    <fieldset>
                        ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "Lieu", [], "any", false, false, false, 46), 'row', ["attr" => ["placeholder" => "Lieu"]]);
        echo "
                    </fieldset>
                </div>

                <div class=\"col-md-12\">
                    <fieldset>
                        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "valabilite", [], "any", false, false, false, 52), 'row', ["attr" => ["placeholder" => "valabilite"]]);
        echo "
                    </fieldset>
                </div>

                <div class=\"col-md-12\">
                    <fieldset>
                        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "image", [], "any", false, false, false, 58), 'row', ["attr" => ["placeholder" => "Image"]]);
        echo "
                    </fieldset>
                </div>

                <div class=\"col-md-12\">
                    <fieldset>
                        ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "prix", [], "any", false, false, false, 64), 'row', ["attr" => ["placeholder" => "prix"]]);
        echo "
                    </fieldset>
                </div>



                <div class=\"col-md-12\">
                    <fieldset>
                        ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "valabilite", [], "any", false, false, false, 72), 'row');
        echo "
                    </fieldset>
                </div>

                <div class=\"col-md-12\">
                    <fieldset>
                        ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "image", [], "any", false, false, false, 78), 'row', ["attr" => ["placeholder" => "Confirm_password"]]);
        echo "
                    </fieldset>
                </div>

                <div class=\"col-md-12\">
                    <fieldset>
                        <button type= \"submit\" class=\"btn btn-success\"> Ajouter ! </button>
                    </fieldset>
                </div>

                <div class=\"col-md-12\">
                    <fieldset>
                        <a href=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("excursion_index");
        echo "\">back to list</a>
                    </fieldset>
                </div>

                ";
        // line 94
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), 'form_end');
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
        return "Excursion/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 94,  193 => 90,  178 => 78,  169 => 72,  158 => 64,  149 => 58,  140 => 52,  131 => 46,  122 => 40,  113 => 34,  104 => 28,  95 => 22,  86 => 16,  80 => 13,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Front/front.html.twig' %}
{% block body %}

    <div id=\"main\">
        <!-- Post -->
        <section class=\"post\">
            <header class=\"major\">
                <span class=\"date\">April 25, 2017</span>
                <h1>Create new Excursion</h1>
            </header>

            <div class=\"section-content\">
                {{ form_start(form , {'attr': {'class':'form-horizontal','novalidate':'novalidate'}} ) }}
                <div class=\"col-md-12\">
                    <fieldset>
                        {{ form_row(form.Client, {'label':'Votre CIN' ,'attr':{'placeholder': 'CIN...'}}) }}
                    </fieldset>
                </div>

                <div class=\"col-md-12\">
                    <fieldset>
                        {{ form_row(form.Nom_Excursion, {'attr':{'placeholder': 'Nom_Excursion'}}) }}
                    </fieldset>
                </div>

                <div class=\"col-md-12\">
                    <fieldset>
                        {{ form_row(form.Description_Excursion, {'attr':{'placeholder': 'Description_Excursion...'}}) }}
                    </fieldset>
                </div>

                <div class=\"col-md-12\">
                    <fieldset>
                        {{ form_row(form.Date, {'attr':{'placeholder': 'Date'}}) }}
                    </fieldset>
                </div>

                <div class=\"col-md-12\">
                    <fieldset>
                        {{ form_row(form.Type_Excursion, {'attr':{'placeholder': 'Type_Excursion'}}) }}
                    </fieldset>
                </div>

                <div class=\"col-md-12\">
                    <fieldset>
                        {{ form_row(form.Lieu, {'attr':{'placeholder': 'Lieu'}}) }}
                    </fieldset>
                </div>

                <div class=\"col-md-12\">
                    <fieldset>
                        {{ form_row(form.valabilite, {'attr':{'placeholder': 'valabilite'}}) }}
                    </fieldset>
                </div>

                <div class=\"col-md-12\">
                    <fieldset>
                        {{ form_row(form.image, {'attr':{'placeholder': 'Image'}}) }}
                    </fieldset>
                </div>

                <div class=\"col-md-12\">
                    <fieldset>
                        {{ form_row(form.prix, {'attr':{'placeholder': 'prix'}}) }}
                    </fieldset>
                </div>



                <div class=\"col-md-12\">
                    <fieldset>
                        {{ form_row(form.valabilite) }}
                    </fieldset>
                </div>

                <div class=\"col-md-12\">
                    <fieldset>
                        {{ form_row(form.image, {'attr':{'placeholder': 'Confirm_password'}}) }}
                    </fieldset>
                </div>

                <div class=\"col-md-12\">
                    <fieldset>
                        <button type= \"submit\" class=\"btn btn-success\"> Ajouter ! </button>
                    </fieldset>
                </div>

                <div class=\"col-md-12\">
                    <fieldset>
                        <a href=\"{{ path('excursion_index') }}\">back to list</a>
                    </fieldset>
                </div>

                {{ form_end(form) }}

            </div>

        </section>
    </div>
{% endblock %}", "Excursion/new.html.twig", "C:\\xampp\\htdocs\\PIDEVF1\\templates\\excursion\\new.html.twig");
    }
}
