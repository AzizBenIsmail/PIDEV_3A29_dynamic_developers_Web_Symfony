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
class __TwigTemplate_e1de212449e3766a21eac24338f97398ddcfb899eb15c52a91071db8d965d3c3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation_voyage/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation_voyage/show.html.twig"));

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
            height: 400px;
            background-image: url(\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/Designe_interface/Voyage.jpg"), "html", null, true);
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
            <h1>        <a href=\"";
        // line 211
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Travel<em><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/travel.png"), "html", null, true);
        echo "\" width=\"100\" height=\"100\">me</em></a>
            </h1>
        </div>
        <br/>
        <fieldset>
            <legend>ReservationVoyage</legend>
            <div class=\"colums\">
    <h1>ReservationVoyage</h1>

    <table class=\"table\" border=\"5\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 224
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation_voyage"]) || array_key_exists("reservation_voyage", $context) ? $context["reservation_voyage"] : (function () { throw new RuntimeError('Variable "reservation_voyage" does not exist.', 224, $this->source); })()), "id", [], "any", false, false, false, 224), "html", null, true);
        echo "</td>
                <th>Action</th>
            </tr>
            <tr>
                <th>Client</th>
                <td><img src=\"/image/Client/";
        // line 229
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservation_voyage"]) || array_key_exists("reservation_voyage", $context) ? $context["reservation_voyage"] : (function () { throw new RuntimeError('Variable "reservation_voyage" does not exist.', 229, $this->source); })()), "IDClient", [], "any", false, false, false, 229), "Image", [], "any", false, false, false, 229)), "html", null, true);
        echo ".jpg\" width=\"700\" height=\"350\"> </td>
            </tr>
                <th>Nom_Client</th>
            <td>";
        // line 232
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservation_voyage"]) || array_key_exists("reservation_voyage", $context) ? $context["reservation_voyage"] : (function () { throw new RuntimeError('Variable "reservation_voyage" does not exist.', 232, $this->source); })()), "IDClient", [], "any", false, false, false, 232), "Nom", [], "any", false, false, false, 232), "html", null, true);
        echo "</td>
            <td>    <a href=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_voyage_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["reservation_voyage"]) || array_key_exists("reservation_voyage", $context) ? $context["reservation_voyage"] : (function () { throw new RuntimeError('Variable "reservation_voyage" does not exist.', 233, $this->source); })()), "id", [], "any", false, false, false, 233)]), "html", null, true);
        echo "\"><button class=\"btn\">Edit</button></a></td>
            <tr>
                <th>Destination</th>
                <td><img src=\"/image/Voyage/";
        // line 236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservation_voyage"]) || array_key_exists("reservation_voyage", $context) ? $context["reservation_voyage"] : (function () { throw new RuntimeError('Variable "reservation_voyage" does not exist.', 236, $this->source); })()), "IDVoyage", [], "any", false, false, false, 236), "Image", [], "any", false, false, false, 236)), "html", null, true);
        echo ".jpg\" width=\"700\" height=\"350\"> </td>
            </tr>
            <tr>
                <th>Nom_Voyage</th>
                <td>";
        // line 240
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservation_voyage"]) || array_key_exists("reservation_voyage", $context) ? $context["reservation_voyage"] : (function () { throw new RuntimeError('Variable "reservation_voyage" does not exist.', 240, $this->source); })()), "IDVoyage", [], "any", false, false, false, 240), "NomVoyage", [], "any", false, false, false, 240), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date_Reservation</th>
                <td>";
        // line 244
        ((twig_get_attribute($this->env, $this->source, (isset($context["reservation_voyage"]) || array_key_exists("reservation_voyage", $context) ? $context["reservation_voyage"] : (function () { throw new RuntimeError('Variable "reservation_voyage" does not exist.', 244, $this->source); })()), "DateReservation", [], "any", false, false, false, 244)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation_voyage"]) || array_key_exists("reservation_voyage", $context) ? $context["reservation_voyage"] : (function () { throw new RuntimeError('Variable "reservation_voyage" does not exist.', 244, $this->source); })()), "DateReservation", [], "any", false, false, false, 244), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>

            </tr>
            <tr>

                <th>Travel_Class</th>
                <td>";
        // line 250
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation_voyage"]) || array_key_exists("reservation_voyage", $context) ? $context["reservation_voyage"] : (function () { throw new RuntimeError('Variable "reservation_voyage" does not exist.', 250, $this->source); })()), "TravelClass", [], "any", false, false, false, 250), "html", null, true);
        echo "</td>

            </tr>
            <tr>
                <th>Age</th>
                <td>";
        // line 255
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation_voyage"]) || array_key_exists("reservation_voyage", $context) ? $context["reservation_voyage"] : (function () { throw new RuntimeError('Variable "reservation_voyage" does not exist.', 255, $this->source); })()), "Age", [], "any", false, false, false, 255), "html", null, true);
        echo "</td>
            </tr>
            <tr> <th>Delete</th>
                <td>-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</td>
                <td>
                    ";
        // line 260
        echo twig_include($this->env, $context, "reservation_voyage/_delete_form.html.twig");
        echo "
                </td>

        </tbody>
    </table>

    <a href=\"";
        // line 266
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_voyage_index");
        echo "\"><button class=\"btn\">Back to list</button></a>

            </div>
        </fieldset>
    </div>



    </div>

</div>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  351 => 266,  342 => 260,  334 => 255,  326 => 250,  317 => 244,  310 => 240,  303 => 236,  297 => 233,  293 => 232,  287 => 229,  279 => 224,  261 => 211,  102 => 55,  51 => 7,  43 => 1,);
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
            height: 400px;
            background-image: url(\"{{ asset('image/Designe_interface/Voyage.jpg') }}\");
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
            <h1>        <a href=\"{{ path('home') }}\">Travel<em><img src=\"{{ asset('Front/img/travel.png') }}\" width=\"100\" height=\"100\">me</em></a>
            </h1>
        </div>
        <br/>
        <fieldset>
            <legend>ReservationVoyage</legend>
            <div class=\"colums\">
    <h1>ReservationVoyage</h1>

    <table class=\"table\" border=\"5\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ reservation_voyage.id }}</td>
                <th>Action</th>
            </tr>
            <tr>
                <th>Client</th>
                <td><img src=\"/image/Client/{{ asset( reservation_voyage.IDClient.Image ) }}.jpg\" width=\"700\" height=\"350\"> </td>
            </tr>
                <th>Nom_Client</th>
            <td>{{ reservation_voyage.IDClient.Nom }}</td>
            <td>    <a href=\"{{ path('reservation_voyage_edit', {'id': reservation_voyage.id}) }}\"><button class=\"btn\">Edit</button></a></td>
            <tr>
                <th>Destination</th>
                <td><img src=\"/image/Voyage/{{ asset( reservation_voyage.IDVoyage.Image ) }}.jpg\" width=\"700\" height=\"350\"> </td>
            </tr>
            <tr>
                <th>Nom_Voyage</th>
                <td>{{ reservation_voyage.IDVoyage.NomVoyage }}</td>
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
            <tr> <th>Delete</th>
                <td>-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</td>
                <td>
                    {{ include('reservation_voyage/_delete_form.html.twig') }}
                </td>

        </tbody>
    </table>

    <a href=\"{{ path('reservation_voyage_index') }}\"><button class=\"btn\">Back to list</button></a>

            </div>
        </fieldset>
    </div>



    </div>

</div>
</body>
</html>", "reservation_voyage/show.html.twig", "C:\\xampp\\htdocs\\PIDEV\\templates\\reservation_voyage\\show.html.twig");
    }
}
