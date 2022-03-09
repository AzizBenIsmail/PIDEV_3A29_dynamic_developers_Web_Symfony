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

/* voyage/index.html.twig */
class __TwigTemplate_f7e5d269a3311eac6232686f753382f7f0c224ee45f47ebd10df1ad6920b9cc7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "voyage/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "voyage/index.html.twig"));

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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/Designe_interface/image.jpg"), "html", null, true);
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
        #wrap {
            width: 100%;
            height: 50px;
            margin: 0;
            z-index: 99;
            position: relative;
            background-color: #ffffff;
        }
        .navbar {
            height: 50px;
            padding: 0;
            margin: 0;
            position: absolute;
        }
        .navbar li {
            height: auto;
            width: 135.8px;
            float: left;
            text-align: center;
            list-style: none;
            font: normal bold 13px/1em Arial, Verdana, Helvetica;
            padding: 0;
            margin: 0;
            background-color: #1c87c9;
        }
        .navbar a {
            padding: 18px 0;
            border-left: 1px solid #ccc9c9;
            text-decoration: none;
            color: white;
            display: block;
        }
        .navbar li:hover,
        a:hover {
            background-color: rgba(28, 135, 201, 0.31);
        }
        .navbar li ul {
            display: none;
            height: auto;
            margin: 0;
            padding: 0;
        }
        .navbar li:hover ul {
            display: block;
        }
        .navbar li ul li {
            background-color: #1c87c9;
        }
        .navbar li ul li a {
            border-left: 1px solid #64ef07;
            border-right: 1px solid #3ce10e;
            border-top: 1px solid #c9d4d8;
            border-bottom: 1px solid #1c87c9;
        }
        .navbar li ul li a:hover {
            background-color: #8100ff;
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
        // line 270
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Travel<em><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/travel.png"), "html", null, true);
        echo "\" width=\"100\" height=\"100\">me</em></a>
            </h1>
        </div>
        <br/>
        <fieldset>
            <div id=\"wrap\">
                <ul class=\"navbar\">
                    <li>
                        <a href=\"";
        // line 278
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyage_index");
        echo "\">Actualiser</a>
                    </li>
                    <li>
                        <a href=\"#\">Trie</a>
                        <ul>
                            <li><a href=\"";
        // line 283
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order_By_Dest");
        echo "\">Trie par Destination</a></li>
                            <li><a href=\"";
        // line 284
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order_By_Nom");
        echo "\">Trie par Nom</a></li>
                            <li><a href=\"";
        // line 285
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order_By_Date");
        echo "\">Trie par Date</a></li>
                            <li><a href=\"";
        // line 286
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order_By_Prix");
        echo "\">Trie par Prix</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"#\">Dest Par Continent</a>
                        <ul>
                            <li><a href=\"";
        // line 292
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Continent_Afrique");
        echo "\">Continent_Afrique</a></li>
                            <li><a href=\"";
        // line 293
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Continent_Europe");
        echo "\">Continent_Europe</a></li>
                            <li><a href=\"";
        // line 294
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Continent_Asie");
        echo "\">Continent_Asie</a></li>
                            <li><a href=\"";
        // line 295
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Continent_Amerique");
        echo "\">Continent_Amerique</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"#\">Disponibilite</a>
                        <ul>
                            <li><a href=\"";
        // line 301
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Disponible");
        echo "\">Disponible</a></li>
                            <li><a href=\"";
        // line 302
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Non_Disponible");
        echo "\">Non Disponible</a></li>
                            <li><a href=\"";
        // line 303
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Bientot_Disponible");
        echo "\">Bientot Disponible</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"#\">Recherche</a>
                        <ul>
                            <li><a href=\"";
        // line 309
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listVoyageWithSearch");
        echo "\">Recherche Par Nom</a></li>
                            <li><a href=\"";
        // line 310
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listVoyageWithSearchPrix");
        echo "\">Recherche Par Prix</a></li>
                            <li><a href=\"";
        // line 311
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listVoyageWithSearchdate");
        echo "\">Recherche Par date</a></li>
                            <li><a href=\"#\">Compte des mots de chaîne</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"";
        // line 316
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("DateNow");
        echo "\">à partir d'aujourd'hui</a>
                    </li>
                    <li>
                        <a href=\"#\">Snnipets</a>
                        <ul>
                            <li><a href=\"#\">CSS</a></li>
                            <li><a href=\"#\">JavaScript</a></li>
                            <li><a href=\"#\">Angular</a></li>
                            <li>
                                <a href=\"#\">Java</a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>

            <h1>Voyage </h1>

            <br>
            <br>
            <table class=\"table\" border=\"15\">
        <thead><tr>

                <a class=\"btn btn-success\" href=\"";
        // line 340
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("PDF");
        echo "\">  PDF </a>
            <script type=\"text/javascript\">
                function imprimer_page(){
                    window.print();
                }
            </script>
            <form>
                <input id=\"impression\" class=\"js-programmatic-set-val btn btn-outline-primary mr-1 mb-1s\" name=\"impression\" type=\"button\" onclick=\"imprimer_page()\" value=\"Print this page\" />
            </form>
        </tr>
            <tr>
                <th>Id</th>
                <th>Destination</th>
                <th>Destination</th>
                <th>Nom_Voyage</th>
                <th>Duree_Voyage</th>
                <th>Prix_Voyage</th>
                <th>Date</th>
                <th>Valabilite</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 363
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["voyages"]) || array_key_exists("voyages", $context) ? $context["voyages"] : (function () { throw new RuntimeError('Variable "voyages" does not exist.', 363, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["voyage"]) {
            // line 364
            echo "            <tr>
                <td>";
            // line 365
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "id", [], "any", false, false, false, 365), "html", null, true);
            echo "</td>
                ";
            // line 366
            if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "image", [], "any", false, false, false, 366)), 0))) {
                // line 367
                echo "                <td><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["voyage"], "image", [], "any", false, false, false, 367))), "html", null, true);
                echo "\" width=\"250\" height=\"150\"></td>
                ";
            } else {
                // line 369
                echo "                    <td><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . "Not found.jpg")), "html", null, true);
                echo "\" width=\"250\" height=\"150\"></td>
                ";
            }
            // line 371
            echo "                <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "Destination", [], "any", false, false, false, 371), "html", null, true);
            echo "</td>
                <td>";
            // line 372
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "NomVoyage", [], "any", false, false, false, 372), "html", null, true);
            echo "</td>
                <td>";
            // line 373
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "DureeVoyage", [], "any", false, false, false, 373), "html", null, true);
            echo "</td>
                <td>";
            // line 374
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "PrixVoyage", [], "any", false, false, false, 374), "html", null, true);
            echo " \$</td>
                <td>";
            // line 375
            ((twig_get_attribute($this->env, $this->source, $context["voyage"], "date", [], "any", false, false, false, 375)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "date", [], "any", false, false, false, 375), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 376
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "valabilite", [], "any", false, false, false, 376), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 378
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyage_show", ["id" => twig_get_attribute($this->env, $this->source, $context["voyage"], "id", [], "any", false, false, false, 378)]), "html", null, true);
            echo "\"><button>Show</button></a>
                    <a href=\"";
            // line 379
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyage_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["voyage"], "id", [], "any", false, false, false, 379)]), "html", null, true);
            echo "\"><button>Edit</button></a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 383
            echo "            <tr>
                <td colspan=\"8\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voyage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 387
        echo "        </tbody>
    </table>

            <a href=\"";
        // line 390
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyage_new");
        echo "\"> <button>Create new</button></a>
        </div>
    </body>
    </html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "voyage/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  548 => 390,  543 => 387,  534 => 383,  525 => 379,  521 => 378,  516 => 376,  512 => 375,  508 => 374,  504 => 373,  500 => 372,  495 => 371,  489 => 369,  483 => 367,  481 => 366,  477 => 365,  474 => 364,  469 => 363,  443 => 340,  416 => 316,  408 => 311,  404 => 310,  400 => 309,  391 => 303,  387 => 302,  383 => 301,  374 => 295,  370 => 294,  366 => 293,  362 => 292,  353 => 286,  349 => 285,  345 => 284,  341 => 283,  333 => 278,  320 => 270,  102 => 55,  51 => 7,  43 => 1,);
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
            background-image: url(\"{{ asset('image/Designe_interface/image.jpg') }}\");
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
        #wrap {
            width: 100%;
            height: 50px;
            margin: 0;
            z-index: 99;
            position: relative;
            background-color: #ffffff;
        }
        .navbar {
            height: 50px;
            padding: 0;
            margin: 0;
            position: absolute;
        }
        .navbar li {
            height: auto;
            width: 135.8px;
            float: left;
            text-align: center;
            list-style: none;
            font: normal bold 13px/1em Arial, Verdana, Helvetica;
            padding: 0;
            margin: 0;
            background-color: #1c87c9;
        }
        .navbar a {
            padding: 18px 0;
            border-left: 1px solid #ccc9c9;
            text-decoration: none;
            color: white;
            display: block;
        }
        .navbar li:hover,
        a:hover {
            background-color: rgba(28, 135, 201, 0.31);
        }
        .navbar li ul {
            display: none;
            height: auto;
            margin: 0;
            padding: 0;
        }
        .navbar li:hover ul {
            display: block;
        }
        .navbar li ul li {
            background-color: #1c87c9;
        }
        .navbar li ul li a {
            border-left: 1px solid #64ef07;
            border-right: 1px solid #3ce10e;
            border-top: 1px solid #c9d4d8;
            border-bottom: 1px solid #1c87c9;
        }
        .navbar li ul li a:hover {
            background-color: #8100ff;
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
            <div id=\"wrap\">
                <ul class=\"navbar\">
                    <li>
                        <a href=\"{{ path('voyage_index')}}\">Actualiser</a>
                    </li>
                    <li>
                        <a href=\"#\">Trie</a>
                        <ul>
                            <li><a href=\"{{ path('order_By_Dest')}}\">Trie par Destination</a></li>
                            <li><a href=\"{{ path('order_By_Nom')}}\">Trie par Nom</a></li>
                            <li><a href=\"{{ path('order_By_Date')}}\">Trie par Date</a></li>
                            <li><a href=\"{{ path('order_By_Prix')}}\">Trie par Prix</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"#\">Dest Par Continent</a>
                        <ul>
                            <li><a href=\"{{ path('Continent_Afrique')}}\">Continent_Afrique</a></li>
                            <li><a href=\"{{ path('Continent_Europe')}}\">Continent_Europe</a></li>
                            <li><a href=\"{{ path('Continent_Asie')}}\">Continent_Asie</a></li>
                            <li><a href=\"{{ path('Continent_Amerique')}}\">Continent_Amerique</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"#\">Disponibilite</a>
                        <ul>
                            <li><a href=\"{{ path('Disponible')}}\">Disponible</a></li>
                            <li><a href=\"{{ path('Non_Disponible')}}\">Non Disponible</a></li>
                            <li><a href=\"{{ path('Bientot_Disponible')}}\">Bientot Disponible</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"#\">Recherche</a>
                        <ul>
                            <li><a href=\"{{ path('listVoyageWithSearch')}}\">Recherche Par Nom</a></li>
                            <li><a href=\"{{ path('listVoyageWithSearchPrix')}}\">Recherche Par Prix</a></li>
                            <li><a href=\"{{ path('listVoyageWithSearchdate')}}\">Recherche Par date</a></li>
                            <li><a href=\"#\">Compte des mots de chaîne</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"{{ path('DateNow')}}\">à partir d'aujourd'hui</a>
                    </li>
                    <li>
                        <a href=\"#\">Snnipets</a>
                        <ul>
                            <li><a href=\"#\">CSS</a></li>
                            <li><a href=\"#\">JavaScript</a></li>
                            <li><a href=\"#\">Angular</a></li>
                            <li>
                                <a href=\"#\">Java</a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>

            <h1>Voyage </h1>

            <br>
            <br>
            <table class=\"table\" border=\"15\">
        <thead><tr>

                <a class=\"btn btn-success\" href=\"{{path('PDF') }}\">  PDF </a>
            <script type=\"text/javascript\">
                function imprimer_page(){
                    window.print();
                }
            </script>
            <form>
                <input id=\"impression\" class=\"js-programmatic-set-val btn btn-outline-primary mr-1 mb-1s\" name=\"impression\" type=\"button\" onclick=\"imprimer_page()\" value=\"Print this page\" />
            </form>
        </tr>
            <tr>
                <th>Id</th>
                <th>Destination</th>
                <th>Destination</th>
                <th>Nom_Voyage</th>
                <th>Duree_Voyage</th>
                <th>Prix_Voyage</th>
                <th>Date</th>
                <th>Valabilite</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for voyage in voyages %}
            <tr>
                <td>{{ voyage.id }}</td>
                {% if voyage.image|length > 0 %}
                <td><img src=\"{{ asset('uploads/'~ voyage.image ) }}\" width=\"250\" height=\"150\"></td>
                {% else %}
                    <td><img src=\"{{ asset('uploads/'~ \"Not found.jpg\" ) }}\" width=\"250\" height=\"150\"></td>
                {% endif %}
                <td>{{ voyage.Destination }}</td>
                <td>{{ voyage.NomVoyage }}</td>
                <td>{{ voyage.DureeVoyage }}</td>
                <td>{{ voyage.PrixVoyage }} \$</td>
                <td>{{ voyage.date ? voyage.date|date('Y-m-d') : '' }}</td>
                <td>{{ voyage.valabilite }}</td>
                <td>
                    <a href=\"{{ path('voyage_show', {'id': voyage.id}) }}\"><button>Show</button></a>
                    <a href=\"{{ path('voyage_edit', {'id': voyage.id}) }}\"><button>Edit</button></a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"8\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

            <a href=\"{{ path('voyage_new') }}\"> <button>Create new</button></a>
        </div>
    </body>
    </html>", "voyage/index.html.twig", "C:\\xampp\\htdocs\\PIDEV\\templates\\voyage\\index.html.twig");
    }
}
