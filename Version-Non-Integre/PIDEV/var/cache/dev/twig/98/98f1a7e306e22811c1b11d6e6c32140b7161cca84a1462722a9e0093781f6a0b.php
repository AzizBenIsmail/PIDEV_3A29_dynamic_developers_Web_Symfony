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

/* reservation_restaurant/index.html.twig */
class __TwigTemplate_fe48591ae52d76ad92138730a506bdc76e3c8f803fa3ca98bf828672bc297683 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation_restaurant/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation_restaurant/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>Travel me</title>
    <link href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.5.0/css/all.css\" integrity=\"sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU\" crossorigin=\"anonymous\">
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/travel.ico"), "html", null, true);
        echo "\">

    <style>
        html, body {
            min-height: 100%;
        }
        body, div, form, input, select, textarea, label {
            padding: 0;
            margin: 0;
            outline: none;
            font-family: Roboto, Arial, sans-serif;
            font-size: 14px;
            color: #666;
            line-height: 22px;
        }
        h1 {
            position: absolute;
            margin:0;
            font-size: 60px;
            color: #fff;
            z-index: 2;
            line-height: 83px;
            top:30px;
        }
        legend {
            padding: 10px;
            font-family: Roboto, Arial, sans-serif;
            font-size: 18px;
            color: #fff;
            background-color: #1c87c9;
        }
        textarea {
            width: calc(100% - 12px);
            padding: 5px;
        }
        .testbox {
            display: flex;
            justify-content: center;
            align-items: center;
            height: inherit;
            padding: 20px;
        }
        form {

        }
        .banner {
            position: relative;
            height: 500px;
            background-image: url(\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/Designe_interface/ResrRestaurant.jpg"), "html", null, true);
        echo "\");
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .banner::after {
            content: \"\";
            background-color: rgba(0, 0, 0, 0.4);
            position: absolute;
            width: 100%;
            height: 100%;
        }
        input, select, textarea {
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        input {
            width: calc(100% - 10px);
            padding: 5px;
        }
        input[type=\"date\"] {
            padding: 4px 5px;
        }
        textarea {
            width: calc(100% - 12px);
            padding: 5px;
        }
        .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
            color:  #006622;
        }
        .checkbox input[type=checkbox] {
            display:inline-block;
            height:15px;
            width:15px;
            margin-right:5px;
            vertical-align:text-top;
        }
        .item input:hover, .item select:hover, .item textarea:hover {
            border: 1px solid transparent;
            box-shadow: 0 0 3px 0  #006622;
            color: #006622;
        }
        .item {
            position: relative;
            margin: 10px 0;
        }
        .item span {
            color: red;
        }
        .week {
            display:flex;
            justfiy-content:space-between;
        }
        .colums {
            display:flex;
            justify-content:space-between;
            flex-direction:row;
            flex-wrap:wrap;
        }
        .colums div {
            width:48%;
        }
        input[type=radio], input[type=checkbox]  {
            display: none;
        }
        label.radio {
            position: relative;
            display: inline-block;
            margin: 5px 20px 15px 0;
            cursor: pointer;
        }
        .question span {
            margin-left: 30px;
        }
        .question-answer label {
            display: block;
        }
        label.radio:before {
            content: \"\";
            position: absolute;
            left: 0;
            width: 17px;
            height: 17px;
            border-radius: 50%;
            border: 2px solid #ccc;
        }
        input[type=radio]:checked + label:before, label.radio:hover:before {
            border: 2px solid  #006622;
        }
        label.radio:after {
            content: \"\";
            position: absolute;
            top: 6px;
            left: 5px;
            width: 8px;
            height: 4px;
            border: 3px solid  #006622;
            border-top: none;
            border-right: none;
            transform: rotate(-45deg);
            opacity: 0;
        }
        input[type=radio]:checked + label:after {
            opacity: 1;
        }
        .flax {
            display:flex;
            justify-content:space-around;
        }
        .btn-block {
            margin-top: 10px;
            text-align: center;
        }
        button {
            width: 150px;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background:  #1c87c9;
            font-size: 16px;
            color: #fff;
            cursor: pointer;
        }
        button:hover {
            background:  #0692e8;
        }
        @media (min-width: 568px) {
            .name-item, .city-item {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
            }
            .name-item input, .name-item div {
                width: calc(50% - 20px);
            }
            .name-item div input {
                width:97%;}
            .name-item div label {
                display:block;
                padding-bottom:5px;
            }
        }
    </style>
</head>
<body>
<div class=\"testbox\">
    <div style=\" width: 100%;
            padding: 20px;
            border-radius: 6px;
            background: #fff;
            box-shadow: 0 0 8px #006622;\">

        <div class=\"banner\">

            <h1>
                <br>     <a href=\"";
        // line 213
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Travel<em><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/travel.png"), "html", null, true);
        echo "\" width=\"100\" height=\"100\">me</em></a>
            </h1>
        </div>
        <br/>
        <fieldset>
            <legend>ReservationRestaurant</legend>
            <div class=\"colums\">
    <h1>ReservationRestaurant</h1>

    <table class=\"table\" border=\"8\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Date_Reservation</th>
                <th>Nbr_Personne</th>
                <th>Client</th>
                <th>Restaurant</th>
                <th>Action
                </th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 235
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservation_restaurants"]) || array_key_exists("reservation_restaurants", $context) ? $context["reservation_restaurants"] : (function () { throw new RuntimeError('Variable "reservation_restaurants" does not exist.', 235, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reservation_restaurant"]) {
            // line 236
            echo "            <tr>
                <td>";
            // line 237
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_restaurant"], "id", [], "any", false, false, false, 237), "html", null, true);
            echo "</td>
                <td>";
            // line 238
            ((twig_get_attribute($this->env, $this->source, $context["reservation_restaurant"], "DateReservation", [], "any", false, false, false, 238)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_restaurant"], "DateReservation", [], "any", false, false, false, 238), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 239
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_restaurant"], "NbrPersonne", [], "any", false, false, false, 239), "html", null, true);
            echo "</td>
                <td>";
            // line 240
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation_restaurant"], "IDClient", [], "any", false, false, false, 240), "Nom", [], "any", false, false, false, 240), "html", null, true);
            echo "</td>
                <td>";
            // line 241
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation_restaurant"], "IDRestaurant", [], "any", false, false, false, 241), "NomRestaurant", [], "any", false, false, false, 241), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 243
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_restaurant_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reservation_restaurant"], "id", [], "any", false, false, false, 243)]), "html", null, true);
            echo "\"><button>Show</button></a>
                    <a href=\"";
            // line 244
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_restaurant_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["reservation_restaurant"], "id", [], "any", false, false, false, 244)]), "html", null, true);
            echo "\"><button>Edit</button></a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 248
            echo "            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation_restaurant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 252
        echo "        </tbody>
    </table>

                <a href=\"";
        // line 255
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_restaurant_new");
        echo "\"><button>Create new</button></a>
            </div>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "reservation_restaurant/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  346 => 255,  341 => 252,  332 => 248,  323 => 244,  319 => 243,  314 => 241,  310 => 240,  306 => 239,  302 => 238,  298 => 237,  295 => 236,  290 => 235,  263 => 213,  102 => 55,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <title>Travel me</title>
    <link href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.5.0/css/all.css\" integrity=\"sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU\" crossorigin=\"anonymous\">
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"{{ asset('Front/img/travel.ico')}}\">

    <style>
        html, body {
            min-height: 100%;
        }
        body, div, form, input, select, textarea, label {
            padding: 0;
            margin: 0;
            outline: none;
            font-family: Roboto, Arial, sans-serif;
            font-size: 14px;
            color: #666;
            line-height: 22px;
        }
        h1 {
            position: absolute;
            margin:0;
            font-size: 60px;
            color: #fff;
            z-index: 2;
            line-height: 83px;
            top:30px;
        }
        legend {
            padding: 10px;
            font-family: Roboto, Arial, sans-serif;
            font-size: 18px;
            color: #fff;
            background-color: #1c87c9;
        }
        textarea {
            width: calc(100% - 12px);
            padding: 5px;
        }
        .testbox {
            display: flex;
            justify-content: center;
            align-items: center;
            height: inherit;
            padding: 20px;
        }
        form {

        }
        .banner {
            position: relative;
            height: 500px;
            background-image: url(\"{{ asset('image/Designe_interface/ResrRestaurant.jpg') }}\");
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .banner::after {
            content: \"\";
            background-color: rgba(0, 0, 0, 0.4);
            position: absolute;
            width: 100%;
            height: 100%;
        }
        input, select, textarea {
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        input {
            width: calc(100% - 10px);
            padding: 5px;
        }
        input[type=\"date\"] {
            padding: 4px 5px;
        }
        textarea {
            width: calc(100% - 12px);
            padding: 5px;
        }
        .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
            color:  #006622;
        }
        .checkbox input[type=checkbox] {
            display:inline-block;
            height:15px;
            width:15px;
            margin-right:5px;
            vertical-align:text-top;
        }
        .item input:hover, .item select:hover, .item textarea:hover {
            border: 1px solid transparent;
            box-shadow: 0 0 3px 0  #006622;
            color: #006622;
        }
        .item {
            position: relative;
            margin: 10px 0;
        }
        .item span {
            color: red;
        }
        .week {
            display:flex;
            justfiy-content:space-between;
        }
        .colums {
            display:flex;
            justify-content:space-between;
            flex-direction:row;
            flex-wrap:wrap;
        }
        .colums div {
            width:48%;
        }
        input[type=radio], input[type=checkbox]  {
            display: none;
        }
        label.radio {
            position: relative;
            display: inline-block;
            margin: 5px 20px 15px 0;
            cursor: pointer;
        }
        .question span {
            margin-left: 30px;
        }
        .question-answer label {
            display: block;
        }
        label.radio:before {
            content: \"\";
            position: absolute;
            left: 0;
            width: 17px;
            height: 17px;
            border-radius: 50%;
            border: 2px solid #ccc;
        }
        input[type=radio]:checked + label:before, label.radio:hover:before {
            border: 2px solid  #006622;
        }
        label.radio:after {
            content: \"\";
            position: absolute;
            top: 6px;
            left: 5px;
            width: 8px;
            height: 4px;
            border: 3px solid  #006622;
            border-top: none;
            border-right: none;
            transform: rotate(-45deg);
            opacity: 0;
        }
        input[type=radio]:checked + label:after {
            opacity: 1;
        }
        .flax {
            display:flex;
            justify-content:space-around;
        }
        .btn-block {
            margin-top: 10px;
            text-align: center;
        }
        button {
            width: 150px;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background:  #1c87c9;
            font-size: 16px;
            color: #fff;
            cursor: pointer;
        }
        button:hover {
            background:  #0692e8;
        }
        @media (min-width: 568px) {
            .name-item, .city-item {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
            }
            .name-item input, .name-item div {
                width: calc(50% - 20px);
            }
            .name-item div input {
                width:97%;}
            .name-item div label {
                display:block;
                padding-bottom:5px;
            }
        }
    </style>
</head>
<body>
<div class=\"testbox\">
    <div style=\" width: 100%;
            padding: 20px;
            border-radius: 6px;
            background: #fff;
            box-shadow: 0 0 8px #006622;\">

        <div class=\"banner\">

            <h1>
                <br>     <a href=\"{{ path('home') }}\">Travel<em><img src=\"{{ asset('Front/img/travel.png') }}\" width=\"100\" height=\"100\">me</em></a>
            </h1>
        </div>
        <br/>
        <fieldset>
            <legend>ReservationRestaurant</legend>
            <div class=\"colums\">
    <h1>ReservationRestaurant</h1>

    <table class=\"table\" border=\"8\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Date_Reservation</th>
                <th>Nbr_Personne</th>
                <th>Client</th>
                <th>Restaurant</th>
                <th>Action
                </th>
            </tr>
        </thead>
        <tbody>
        {% for reservation_restaurant in reservation_restaurants %}
            <tr>
                <td>{{ reservation_restaurant.id }}</td>
                <td>{{ reservation_restaurant.DateReservation ? reservation_restaurant.DateReservation|date('Y-m-d') : '' }}</td>
                <td>{{ reservation_restaurant.NbrPersonne }}</td>
                <td>{{ reservation_restaurant.IDClient.Nom}}</td>
                <td>{{ reservation_restaurant.IDRestaurant.NomRestaurant }}</td>
                <td>
                    <a href=\"{{ path('reservation_restaurant_show', {'id': reservation_restaurant.id}) }}\"><button>Show</button></a>
                    <a href=\"{{ path('reservation_restaurant_edit', {'id': reservation_restaurant.id}) }}\"><button>Edit</button></a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

                <a href=\"{{ path('reservation_restaurant_new') }}\"><button>Create new</button></a>
            </div>
</body>
</html>", "reservation_restaurant/index.html.twig", "C:\\xampp\\htdocs\\PIDEV\\templates\\reservation_restaurant\\index.html.twig");
    }
}
