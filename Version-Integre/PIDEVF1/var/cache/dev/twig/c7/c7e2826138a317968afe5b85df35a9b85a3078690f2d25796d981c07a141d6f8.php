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

/* voyage/show.html.twig */
class __TwigTemplate_c38b793a9f2a724ea4127e7ca63a7f9b1477d875fa56fe9bc023a681682a2c2d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "voyage/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "voyage/show.html.twig"));

        $this->parent = $this->loadTemplate("Front/front.html.twig", "voyage/show.html.twig", 1);
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
        <section class=\"post\">
            <header class=\"major\">
                <script type=\"text/javascript\">
                    function imprimer_page(){
                        window.print();
                    }
                </script>
                <fieldset>
                    <div class=\"colums\">
                        <h1>Voyage</h1>
                        <form>
                            <input id=\"impression\" class=\"js-programmatic-set-val btn btn-outline-primary mr-1 mb-1s\" name=\"impression\" type=\"button\" onclick=\"imprimer_page()\" value=\"Print this page\" />
                        </form>
                        <table class=\"table\">
                            <tbody>
                            <tr>
                                <th>Image</th>
                                ";
        // line 24
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 24, $this->source); })()), "image", [], "any", false, false, false, 24)), 0))) {
            // line 25
            echo "                                    <td><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 25, $this->source); })()), "image", [], "any", false, false, false, 25))), "html", null, true);
            echo "\" width=\"450\" height=\"250\"></td>
                                ";
        } else {
            // line 27
            echo "                                    <td><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . "Not found.jpg")), "html", null, true);
            echo "\" width=\"250\" height=\"150\"></td>
                                ";
        }
        // line 29
        echo "                            </tr>
                            <tr>
                                <th>Destination</th>
                                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 32, $this->source); })()), "Destination", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th>Nom_Voyage</th>
                                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 36, $this->source); })()), "NomVoyage", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th>Duree_Voyage</th>
                                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 40, $this->source); })()), "DureeVoyage", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th>Date</th>
                                <td>";
        // line 44
        ((twig_get_attribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 44, $this->source); })()), "date", [], "any", false, false, false, 44)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 44, $this->source); })()), "date", [], "any", false, false, false, 44), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
                            </tr>
                            <tr>
                                <th>Valabilite</th>
                                <td>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 48, $this->source); })()), "valabilite", [], "any", false, false, false, 48), "html", null, true);
        echo "</td>
                            </tr>
                            </tbody>
                        </table>


                        <a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyage_index");
        echo "\">back to list</a>

                        <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyage_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 56, $this->source); })()), "id", [], "any", false, false, false, 56)]), "html", null, true);
        echo "\">edit</a>

                        ";
        // line 58
        echo twig_include($this->env, $context, "voyage/_delete_form.html.twig");
        echo "


        </section>
    </div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "voyage/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 58,  151 => 56,  146 => 54,  137 => 48,  130 => 44,  123 => 40,  116 => 36,  109 => 32,  104 => 29,  98 => 27,  92 => 25,  90 => 24,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Front/front.html.twig' %}

{% block body %}

    <div id=\"main\">
        <!-- Post -->
        <section class=\"post\">
            <header class=\"major\">
                <script type=\"text/javascript\">
                    function imprimer_page(){
                        window.print();
                    }
                </script>
                <fieldset>
                    <div class=\"colums\">
                        <h1>Voyage</h1>
                        <form>
                            <input id=\"impression\" class=\"js-programmatic-set-val btn btn-outline-primary mr-1 mb-1s\" name=\"impression\" type=\"button\" onclick=\"imprimer_page()\" value=\"Print this page\" />
                        </form>
                        <table class=\"table\">
                            <tbody>
                            <tr>
                                <th>Image</th>
                                {% if voyage.image|length > 0 %}
                                    <td><img src=\"{{ asset('uploads/'~ voyage.image ) }}\" width=\"450\" height=\"250\"></td>
                                {% else %}
                                    <td><img src=\"{{ asset('uploads/'~ \"Not found.jpg\" ) }}\" width=\"250\" height=\"150\"></td>
                                {% endif %}
                            </tr>
                            <tr>
                                <th>Destination</th>
                                <td>{{ voyage.Destination }}</td>
                            </tr>
                            <tr>
                                <th>Nom_Voyage</th>
                                <td>{{ voyage.NomVoyage }}</td>
                            </tr>
                            <tr>
                                <th>Duree_Voyage</th>
                                <td>{{ voyage.DureeVoyage }}</td>
                            </tr>
                            <tr>
                                <th>Date</th>
                                <td>{{ voyage.date ? voyage.date|date('Y-m-d') : '' }}</td>
                            </tr>
                            <tr>
                                <th>Valabilite</th>
                                <td>{{ voyage.valabilite }}</td>
                            </tr>
                            </tbody>
                        </table>


                        <a href=\"{{ path('voyage_index') }}\">back to list</a>

                        <a href=\"{{ path('voyage_edit', {'id': voyage.id}) }}\">edit</a>

                        {{ include('voyage/_delete_form.html.twig') }}


        </section>
    </div>



{% endblock %}", "voyage/show.html.twig", "C:\\xampp\\htdocs\\PIDEVF1\\templates\\voyage\\show.html.twig");
    }
}
