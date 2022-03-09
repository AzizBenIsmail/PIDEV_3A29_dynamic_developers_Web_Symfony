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

/* reservation_voyage/show.html.twig */
class __TwigTemplate_25b7c2dafcc6161b899a7b4cb715e4e787f7ea70880462a44eef658f9e2bcf29 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation_voyage/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation_voyage/show.html.twig"));

        $this->parent = $this->loadTemplate("Front/front.html.twig", "reservation_voyage/show.html.twig", 1);
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

        echo "ReservationVoyage";
        
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
        echo "<div id=\"main\">
    <!-- Post -->
    <section class=\"post\">
        <header class=\"major\">
            <fieldset>
                <div class=\"colums\">
                    <script type=\"text/javascript\">
                        function imprimer_page(){
                            window.print();
                        }
                    </script>
                <form>
                    <input id=\"impression\" class=\"js-programmatic-set-val btn btn-outline-primary mr-1 mb-1s\" name=\"impression\" type=\"button\" onclick=\"imprimer_page()\" value=\"Print this page\" />
                </form>
    <h1>ReservationVoyage</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation_voyage"]) || array_key_exists("reservation_voyage", $context) ? $context["reservation_voyage"] : (function () { throw new RuntimeError('Variable "reservation_voyage" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Voyage</th>
                ";
        // line 30
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservation_voyage"]) || array_key_exists("reservation_voyage", $context) ? $context["reservation_voyage"] : (function () { throw new RuntimeError('Variable "reservation_voyage" does not exist.', 30, $this->source); })()), "voyage", [], "any", false, false, false, 30), "image", [], "any", false, false, false, 30)), 0))) {
            // line 31
            echo "                    <td><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservation_voyage"]) || array_key_exists("reservation_voyage", $context) ? $context["reservation_voyage"] : (function () { throw new RuntimeError('Variable "reservation_voyage" does not exist.', 31, $this->source); })()), "voyage", [], "any", false, false, false, 31), "image", [], "any", false, false, false, 31))), "html", null, true);
            echo "\" width=\"450\" height=\"250\"></td>
                ";
        } else {
            // line 33
            echo "                    <td><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . "Not found.jpg")), "html", null, true);
            echo "\" width=\"250\" height=\"150\"></td>
                ";
        }
        // line 34
        echo "            </tr>
            <tr>
                <th>Client</th>
                <td>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservation_voyage"]) || array_key_exists("reservation_voyage", $context) ? $context["reservation_voyage"] : (function () { throw new RuntimeError('Variable "reservation_voyage" does not exist.', 37, $this->source); })()), "Client", [], "any", false, false, false, 37), "UserName", [], "any", false, false, false, 37), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date_Reservation</th>
                <td>";
        // line 41
        ((twig_get_attribute($this->env, $this->source, (isset($context["reservation_voyage"]) || array_key_exists("reservation_voyage", $context) ? $context["reservation_voyage"] : (function () { throw new RuntimeError('Variable "reservation_voyage" does not exist.', 41, $this->source); })()), "DateReservation", [], "any", false, false, false, 41)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation_voyage"]) || array_key_exists("reservation_voyage", $context) ? $context["reservation_voyage"] : (function () { throw new RuntimeError('Variable "reservation_voyage" does not exist.', 41, $this->source); })()), "DateReservation", [], "any", false, false, false, 41), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Travel_Class</th>
                <td>";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation_voyage"]) || array_key_exists("reservation_voyage", $context) ? $context["reservation_voyage"] : (function () { throw new RuntimeError('Variable "reservation_voyage" does not exist.', 45, $this->source); })()), "TravelClass", [], "any", false, false, false, 45), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Age</th>
                <td>";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation_voyage"]) || array_key_exists("reservation_voyage", $context) ? $context["reservation_voyage"] : (function () { throw new RuntimeError('Variable "reservation_voyage" does not exist.', 49, $this->source); })()), "Age", [], "any", false, false, false, 49), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_voyage_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_voyage_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["reservation_voyage"]) || array_key_exists("reservation_voyage", $context) ? $context["reservation_voyage"] : (function () { throw new RuntimeError('Variable "reservation_voyage" does not exist.', 56, $this->source); })()), "id", [], "any", false, false, false, 56)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 58
        echo twig_include($this->env, $context, "reservation_voyage/_delete_form.html.twig");
        echo "

    </section>
    <iframe style=\"border:0; width: 100%; height: 350px;\" class=\"img-fluid\" src=\"https://maps.google.com/maps?q=+";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservation_voyage"]) || array_key_exists("reservation_voyage", $context) ? $context["reservation_voyage"] : (function () { throw new RuntimeError('Variable "reservation_voyage" does not exist.', 61, $this->source); })()), "voyage", [], "any", false, false, false, 61), "NomVoyage", [], "any", false, false, false, 61), "html", null, true);
        echo "+&hl=fr&z=14&amp;output=embed\" frameborder=\"0\" allowfullscreen></iframe>              <div class=\"map-wrapper-300 mb-3\">

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reservation_voyage/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 61,  175 => 58,  170 => 56,  165 => 54,  157 => 49,  150 => 45,  143 => 41,  136 => 37,  131 => 34,  125 => 33,  119 => 31,  117 => 30,  110 => 26,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Front/front.html.twig' %}

{% block title %}ReservationVoyage{% endblock %}

{% block body %}
<div id=\"main\">
    <!-- Post -->
    <section class=\"post\">
        <header class=\"major\">
            <fieldset>
                <div class=\"colums\">
                    <script type=\"text/javascript\">
                        function imprimer_page(){
                            window.print();
                        }
                    </script>
                <form>
                    <input id=\"impression\" class=\"js-programmatic-set-val btn btn-outline-primary mr-1 mb-1s\" name=\"impression\" type=\"button\" onclick=\"imprimer_page()\" value=\"Print this page\" />
                </form>
    <h1>ReservationVoyage</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ reservation_voyage.id }}</td>
            </tr>
            <tr>
                <th>Voyage</th>
                {% if reservation_voyage.voyage.image|length > 0 %}
                    <td><img src=\"{{ asset('uploads/'~ reservation_voyage.voyage.image ) }}\" width=\"450\" height=\"250\"></td>
                {% else %}
                    <td><img src=\"{{ asset('uploads/'~ \"Not found.jpg\" ) }}\" width=\"250\" height=\"150\"></td>
                {% endif %}            </tr>
            <tr>
                <th>Client</th>
                <td>{{ reservation_voyage.Client.UserName }}</td>
            </tr>
            <tr>
                <th>Date_Reservation</th>
                <td>{{ reservation_voyage.DateReservation ? reservation_voyage.DateReservation|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Travel_Class</th>
                <td>{{ reservation_voyage.TravelClass }}</td>
            </tr>
            <tr>
                <th>Age</th>
                <td>{{ reservation_voyage.Age }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('reservation_voyage_index') }}\">back to list</a>

    <a href=\"{{ path('reservation_voyage_edit', {'id': reservation_voyage.id}) }}\">edit</a>

    {{ include('reservation_voyage/_delete_form.html.twig') }}

    </section>
    <iframe style=\"border:0; width: 100%; height: 350px;\" class=\"img-fluid\" src=\"https://maps.google.com/maps?q=+{{reservation_voyage.voyage.NomVoyage}}+&hl=fr&z=14&amp;output=embed\" frameborder=\"0\" allowfullscreen></iframe>              <div class=\"map-wrapper-300 mb-3\">

    </div>
{% endblock %}
", "reservation_voyage/show.html.twig", "C:\\xampp\\htdocs\\PIDEVF1\\templates\\reservation_voyage\\show.html.twig");
    }
}
