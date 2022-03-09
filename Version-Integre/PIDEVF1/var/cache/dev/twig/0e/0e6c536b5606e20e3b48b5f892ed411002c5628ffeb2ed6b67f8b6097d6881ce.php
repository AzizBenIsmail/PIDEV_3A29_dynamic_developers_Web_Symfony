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

/* reservation_restaurant/show.html.twig */
class __TwigTemplate_4d4bc8aa6550b964cc8a6ffa3b86add6715336b801667c270d9dff5ed65d1ef0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation_restaurant/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation_restaurant/show.html.twig"));

        $this->parent = $this->loadTemplate("Front/front.html.twig", "reservation_restaurant/show.html.twig", 1);
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

        echo "ReservationRestaurant";
        
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
    <h1>ReservationRestaurant</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation_restaurant"]) || array_key_exists("reservation_restaurant", $context) ? $context["reservation_restaurant"] : (function () { throw new RuntimeError('Variable "reservation_restaurant" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Restaurant</th>
                ";
        // line 30
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservation_restaurant"]) || array_key_exists("reservation_restaurant", $context) ? $context["reservation_restaurant"] : (function () { throw new RuntimeError('Variable "reservation_restaurant" does not exist.', 30, $this->source); })()), "Restaurant", [], "any", false, false, false, 30), "Image", [], "any", false, false, false, 30)), 0))) {
            // line 31
            echo "                    <td><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservation_restaurant"]) || array_key_exists("reservation_restaurant", $context) ? $context["reservation_restaurant"] : (function () { throw new RuntimeError('Variable "reservation_restaurant" does not exist.', 31, $this->source); })()), "Restaurant", [], "any", false, false, false, 31), "Image", [], "any", false, false, false, 31))), "html", null, true);
            echo "\" width=\"450\" height=\"250\"></td>
                ";
        } else {
            // line 33
            echo "                    <td><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . "Not found.jpg")), "html", null, true);
            echo "\" width=\"250\" height=\"150\"></td>
                ";
        }
        // line 35
        echo "            </tr>
            <tr>
                <th>Client </th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservation_restaurant"]) || array_key_exists("reservation_restaurant", $context) ? $context["reservation_restaurant"] : (function () { throw new RuntimeError('Variable "reservation_restaurant" does not exist.', 38, $this->source); })()), "Client", [], "any", false, false, false, 38), "UserName", [], "any", false, false, false, 38), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date_Reservation</th>
                <td>";
        // line 42
        ((twig_get_attribute($this->env, $this->source, (isset($context["reservation_restaurant"]) || array_key_exists("reservation_restaurant", $context) ? $context["reservation_restaurant"] : (function () { throw new RuntimeError('Variable "reservation_restaurant" does not exist.', 42, $this->source); })()), "DateReservation", [], "any", false, false, false, 42)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation_restaurant"]) || array_key_exists("reservation_restaurant", $context) ? $context["reservation_restaurant"] : (function () { throw new RuntimeError('Variable "reservation_restaurant" does not exist.', 42, $this->source); })()), "DateReservation", [], "any", false, false, false, 42), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Nbr_Personne</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation_restaurant"]) || array_key_exists("reservation_restaurant", $context) ? $context["reservation_restaurant"] : (function () { throw new RuntimeError('Variable "reservation_restaurant" does not exist.', 46, $this->source); })()), "NbrPersonne", [], "any", false, false, false, 46), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_restaurant_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_restaurant_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["reservation_restaurant"]) || array_key_exists("reservation_restaurant", $context) ? $context["reservation_restaurant"] : (function () { throw new RuntimeError('Variable "reservation_restaurant" does not exist.', 53, $this->source); })()), "id", [], "any", false, false, false, 53)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 55
        echo twig_include($this->env, $context, "reservation_restaurant/_delete_form.html.twig");
        echo "
    </section>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reservation_restaurant/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 55,  163 => 53,  158 => 51,  150 => 46,  143 => 42,  136 => 38,  131 => 35,  125 => 33,  119 => 31,  117 => 30,  110 => 26,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Front/front.html.twig' %}

{% block title %}ReservationRestaurant{% endblock %}

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
    <h1>ReservationRestaurant</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ reservation_restaurant.id }}</td>
            </tr>
            <tr>
                <th>Restaurant</th>
                {% if reservation_restaurant.Restaurant.Image|length > 0 %}
                    <td><img src=\"{{ asset('uploads/'~ reservation_restaurant.Restaurant.Image ) }}\" width=\"450\" height=\"250\"></td>
                {% else %}
                    <td><img src=\"{{ asset('uploads/'~ \"Not found.jpg\" ) }}\" width=\"250\" height=\"150\"></td>
                {% endif %}
            </tr>
            <tr>
                <th>Client </th>
                <td>{{ reservation_restaurant.Client.UserName }}</td>
            </tr>
            <tr>
                <th>Date_Reservation</th>
                <td>{{ reservation_restaurant.DateReservation ? reservation_restaurant.DateReservation|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Nbr_Personne</th>
                <td>{{ reservation_restaurant.NbrPersonne }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('reservation_restaurant_index') }}\">back to list</a>

    <a href=\"{{ path('reservation_restaurant_edit', {'id': reservation_restaurant.id}) }}\">edit</a>

    {{ include('reservation_restaurant/_delete_form.html.twig') }}
    </section>
</div>
{% endblock %}
", "reservation_restaurant/show.html.twig", "C:\\xampp\\htdocs\\PIDEVF1\\templates\\reservation_restaurant\\show.html.twig");
    }
}
