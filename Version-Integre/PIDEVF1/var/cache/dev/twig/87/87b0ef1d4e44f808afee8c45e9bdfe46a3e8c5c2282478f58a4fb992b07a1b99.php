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

/* Front/front.html.twig */
class __TwigTemplate_2e5d2ed6495152b82f65efa56c5d7fc169f6c8ca75898a3cb3778dd753ab63ec extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/front.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/front.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html>
\t<head>
\t\t<title> ";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo " </title>
\t\t<meta charset=\"utf-8\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\" />
\t\t<!-- plugins:css -->
\t\t<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/img.ico"), "html", null, true);
        echo "\">
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "\t</head>
\t<body class=\"is-preload\">

\t\t<!-- Wrapper -->
\t\t\t<div id=\"wrapper\" class=\"fade-in\">

\t\t\t\t<!-- Intro -->
\t\t\t\t\t<div id=\"intro\">
\t\t\t\t\t\t<div class=\"logo\"><img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/img.png"), "html", null, true);
        echo "\" width=\"150\" height=\"150\" /></div>
\t\t\t\t\t\t<h1>TRAVEL
\t\t\t\t\t\t\tME</h1>
\t\t\t\t\t\t<p>Discover Your Life ,
\t\t\t\t\t\t\tTravel Where You Want
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>

\t\t\t\t<!-- Header -->
\t\t\t\t\t<header id=\"header\">
\t\t\t\t\t\t<a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"logo\">TRAVEL ME</a>
\t\t\t\t\t</header>

\t\t\t\t<!-- Nav -->
\t\t\t\t\t<nav id=\"nav\">
\t\t\t\t\t\t<ul class=\"links\">
\t\t\t\t\t\t\t<li class=\"active\"><a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Actuelle</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyage_index");
        echo "\">La liste des Voyage</a></li>
\t\t\t\t\t\t\t<li><a href=\"generic.html\">La liste des Excursion</a></li>
\t\t\t\t\t\t\t<li><a href=\"elements.html\">La liste des retaurant</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<ul class=\"icons\">
\t\t\t\t\t\t\t<li><a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
        echo "\" ><img src=\"https://img.icons8.com/external-kmg-design-outline-color-kmg-design/32/000000/external-log-out-user-interface-kmg-design-outline-color-kmg-design.png\"/></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"icon brands fa-twitter\"><span class=\"label\">Twitter</span></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"icon brands fa-facebook-f\"><span class=\"label\">Facebook</span></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"icon brands fa-instagram\"><span class=\"label\">Instagram</span></a></li>
\t\t\t\t\t\t\t<li><a href=\"https://github.com/AzizBenIsmail/PIDEV-3A29-dynamic-developers\" class=\"icon brands fa-github\"><span class=\"label\">GitHub</span></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>

\t\t\t\t<!-- Main -->
                  ";
        // line 53
        $this->displayBlock('body', $context, $blocks);
        // line 195
        echo "\t\t\t\t<!-- Footer -->
\t\t\t\t\t<footer id=\"footer\">
\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t<form method=\"post\" action=\"#\">
\t\t\t\t\t\t\t\t<div class=\"fields\">
\t\t\t\t\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t\t\t\t\t<label for=\"name\">Name</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" id=\"name\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t\t\t\t\t<label for=\"email\">Email</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"email\" id=\"email\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t\t\t\t\t<label for=\"message\">Message</label>
\t\t\t\t\t\t\t\t\t\t<textarea name=\"message\" id=\"message\" rows=\"3\"></textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<ul class=\"actions\">
\t\t\t\t\t\t\t\t\t<li><input type=\"submit\" value=\"Send Message\" /></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</section>
\t\t\t\t\t\t<section class=\"split contact\">
\t\t\t\t\t\t\t<section class=\"alt\">
\t\t\t\t\t\t\t\t<h3>Address</h3>
\t\t\t\t\t\t\t\t<p>1234 Somewhere Road #87257<br />
\t\t\t\t\t\t\t\tNashville, TN 00000-0000</p>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t\t<h3>Phone</h3>
\t\t\t\t\t\t\t\t<p><a href=\"#\">(000) 000-0000</a></p>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t\t<h3>Email</h3>
\t\t\t\t\t\t\t\t<p><a href=\"#\">info@untitled.tld</a></p>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t\t<h3>Social</h3>
\t\t\t\t\t\t\t\t<ul class=\"icons alt\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"icon brands alt fa-twitter\"><span class=\"label\">Twitter</span></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"icon brands alt fa-facebook-f\"><span class=\"label\">Facebook</span></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"icon brands alt fa-instagram\"><span class=\"label\">Instagram</span></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"icon brands alt fa-github\"><span class=\"label\">GitHub</span></a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t</section>
\t\t\t\t\t</footer>

\t\t\t\t<!-- Copyright -->
\t\t\t\t\t<div id=\"copyright\">
\t\t\t\t\t\t<ul><li>&copy; Untitled</li><li>Design: <a href=\"https://html5up.net\">HTML5 UP</a></li></ul>
\t\t\t\t\t</div>

\t\t\t</div>

            ";
        // line 251
        $this->displayBlock('js', $context, $blocks);
        // line 261
        echo "
\t</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " TRAVEL ME ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "\t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/css/main.css"), "html", null, true);
        echo "\" />
\t\t<noscript><link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/css/noscript.css"), "html", null, true);
        echo "\" /></noscript>

        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 53
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 54
        echo "\t\t\t\t\t<div id=\"main\">

\t\t\t\t\t\t<!-- Featured Post -->
\t\t\t\t\t\t\t<article class=\"post featured\">
\t\t\t\t\t\t\t\t<header class=\"major\">
\t\t\t\t\t\t\t\t\t<span class=\"date\">La Liste Des Voyage </span>
\t\t\t\t\t\t\t\t\t<table class=\"table\" >
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>Id</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Image</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Destination</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Nom_Voyage</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Duree_Voyage</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Prix</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Date</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Valabilite</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["voyages"]) || array_key_exists("voyages", $context) ? $context["voyages"] : (function () { throw new RuntimeError('Variable "voyages" does not exist.', 74, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["voyage"]) {
            // line 75
            echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "id", [], "any", false, false, false, 76), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 77
            if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "image", [], "any", false, false, false, 77)), 0))) {
                // line 78
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<td><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["voyage"], "image", [], "any", false, false, false, 78))), "html", null, true);
                echo "\" width=\"250\" height=\"150\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 80
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<td><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . "Not found.jpg")), "html", null, true);
                echo "\" width=\"250\" height=\"150\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 82
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "Destination", [], "any", false, false, false, 82), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "NomVoyage", [], "any", false, false, false, 83), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "DureeVoyage", [], "any", false, false, false, 84), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "prix", [], "any", false, false, false, 85), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 86
            ((twig_get_attribute($this->env, $this->source, $context["voyage"], "date", [], "any", false, false, false, 86)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "date", [], "any", false, false, false, 86), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "valabilite", [], "any", false, false, false, 87), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 90
            echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"8\">no records found</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voyage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<ul class=\"actions special\">
\t\t\t\t\t\t\t\t\t<li><a <a href=\"";
        // line 98
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyage_new");
        echo "\"class=\"button large\">Reserver Voyage</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</article>

\t\t\t\t\t\t<!-- Posts -->
\t\t\t\t\t\t\t<section class=\"posts\">
\t\t\t\t\t\t\t\t<article>
\t\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t\t<span class=\"date\">April 24, 2017</span>
\t\t\t\t\t\t\t\t\t\t<h2><a href=\"#\">La liste<br />
\t\t\t\t\t\t\t\t\t\tDes Voyages</a></h2>
\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"image fit\"><img src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/pic02.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a>
\t\t\t\t\t\t\t\t\t<p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
\t\t\t\t\t\t\t\t\t<ul class=\"actions special\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"button\">Full Story</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t\t<article>
\t\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t\t<span class=\"date\">April 22, 2017</span>
\t\t\t\t\t\t\t\t\t\t<h2><a href=\"#\">Primis eget<br />
\t\t\t\t\t\t\t\t\t\timperdiet lorem</a></h2>
\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"image fit\"><img src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/pic03.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a>
\t\t\t\t\t\t\t\t\t<p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
\t\t\t\t\t\t\t\t\t<ul class=\"actions special\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"button\">Full Story</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t\t<article>
\t\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t\t<span class=\"date\">April 18, 2017</span>
\t\t\t\t\t\t\t\t\t\t<h2><a href=\"#\">Ante mattis<br />
\t\t\t\t\t\t\t\t\t\tinterdum dolor</a></h2>
\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"image fit\"><img src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/pic04.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a>
\t\t\t\t\t\t\t\t\t<p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
\t\t\t\t\t\t\t\t\t<ul class=\"actions special\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"button\">Full Story</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t\t<article>
\t\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t\t<span class=\"date\">April 14, 2017</span>
\t\t\t\t\t\t\t\t\t\t<h2><a href=\"#\">Tempus sed<br />
\t\t\t\t\t\t\t\t\t\tnulla imperdiet</a></h2>
\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"image fit\"><img src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/pic05.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a>
\t\t\t\t\t\t\t\t\t<p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
\t\t\t\t\t\t\t\t\t<ul class=\"actions special\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"button\">Full Story</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t\t<article>
\t\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t\t<span class=\"date\">April 11, 2017</span>
\t\t\t\t\t\t\t\t\t\t<h2><a href=\"#\">Odio magna<br />
\t\t\t\t\t\t\t\t\t\tsed consectetur</a></h2>
\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"image fit\"><img src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/pic06.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a>
\t\t\t\t\t\t\t\t\t<p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
\t\t\t\t\t\t\t\t\t<ul class=\"actions special\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"button\">Full Story</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t\t<article>
\t\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t\t<span class=\"date\">April 7, 2017</span>
\t\t\t\t\t\t\t\t\t\t<h2><a href=\"#\">Augue lorem<br />
\t\t\t\t\t\t\t\t\t\tprimis vestibulum</a></h2>
\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"image fit\"><img src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/pic07.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a>
\t\t\t\t\t\t\t\t\t<p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
\t\t\t\t\t\t\t\t\t<ul class=\"actions special\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"button\">Full Story</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t</section>

\t\t\t\t\t\t<!-- Footer -->
\t\t\t\t\t\t\t<footer>
\t\t\t\t\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t\t\t\t\t<!--<a href=\"#\" class=\"previous\">Prev</a>-->
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"page active\">1</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"page\">2</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"page\">3</a>
\t\t\t\t\t\t\t\t\t<span class=\"extra\">&hellip;</span>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"page\">8</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"page\">9</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"page\">10</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"next\">Next</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</footer>

\t\t\t\t\t</div>
                       ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 251
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 252
        echo "\t\t<!-- Scripts -->
\t\t\t<script src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/js/jquery.scrollex.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/js/jquery.scrolly.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/js/browser.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/js/breakpoints.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/js/util.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/js/main.js"), "html", null, true);
        echo "\"></script>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Front/front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  506 => 259,  502 => 258,  498 => 257,  494 => 256,  490 => 255,  486 => 254,  482 => 253,  479 => 252,  469 => 251,  434 => 170,  419 => 158,  404 => 146,  389 => 134,  374 => 122,  359 => 110,  344 => 98,  338 => 94,  329 => 90,  321 => 87,  317 => 86,  313 => 85,  309 => 84,  305 => 83,  300 => 82,  294 => 80,  288 => 78,  286 => 77,  282 => 76,  279 => 75,  274 => 74,  252 => 54,  242 => 53,  229 => 11,  224 => 10,  214 => 9,  195 => 4,  183 => 261,  181 => 251,  123 => 195,  121 => 53,  109 => 44,  101 => 39,  97 => 38,  88 => 32,  75 => 22,  65 => 14,  63 => 9,  59 => 8,  52 => 4,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE HTML>
<html>
\t<head>
\t\t<title> {% block title %} TRAVEL ME {% endblock %} </title>
\t\t<meta charset=\"utf-8\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\" />
\t\t<!-- plugins:css -->
\t\t<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"{{ asset('Front/images/img.ico')}}\">
        {% block stylesheets %}
\t\t<link rel=\"stylesheet\" href=\"{{ asset('Front/assets/css/main.css') }}\" />
\t\t<noscript><link rel=\"stylesheet\" href=\"{{ asset('Front/assets/css/noscript.css') }}\" /></noscript>

        {% endblock %}
\t</head>
\t<body class=\"is-preload\">

\t\t<!-- Wrapper -->
\t\t\t<div id=\"wrapper\" class=\"fade-in\">

\t\t\t\t<!-- Intro -->
\t\t\t\t\t<div id=\"intro\">
\t\t\t\t\t\t<div class=\"logo\"><img src=\"{{ asset('img/img.png') }}\" width=\"150\" height=\"150\" /></div>
\t\t\t\t\t\t<h1>TRAVEL
\t\t\t\t\t\t\tME</h1>
\t\t\t\t\t\t<p>Discover Your Life ,
\t\t\t\t\t\t\tTravel Where You Want
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>

\t\t\t\t<!-- Header -->
\t\t\t\t\t<header id=\"header\">
\t\t\t\t\t\t<a href=\"{{ path('home') }}\" class=\"logo\">TRAVEL ME</a>
\t\t\t\t\t</header>

\t\t\t\t<!-- Nav -->
\t\t\t\t\t<nav id=\"nav\">
\t\t\t\t\t\t<ul class=\"links\">
\t\t\t\t\t\t\t<li class=\"active\"><a href=\"{{ path('home') }}\">Actuelle</a></li>
\t\t\t\t\t\t\t<li><a href=\"{{ path('voyage_index') }}\">La liste des Voyage</a></li>
\t\t\t\t\t\t\t<li><a href=\"generic.html\">La liste des Excursion</a></li>
\t\t\t\t\t\t\t<li><a href=\"elements.html\">La liste des retaurant</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<ul class=\"icons\">
\t\t\t\t\t\t\t<li><a href=\"{{ path('security_logout') }}\" ><img src=\"https://img.icons8.com/external-kmg-design-outline-color-kmg-design/32/000000/external-log-out-user-interface-kmg-design-outline-color-kmg-design.png\"/></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"icon brands fa-twitter\"><span class=\"label\">Twitter</span></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"icon brands fa-facebook-f\"><span class=\"label\">Facebook</span></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"icon brands fa-instagram\"><span class=\"label\">Instagram</span></a></li>
\t\t\t\t\t\t\t<li><a href=\"https://github.com/AzizBenIsmail/PIDEV-3A29-dynamic-developers\" class=\"icon brands fa-github\"><span class=\"label\">GitHub</span></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>

\t\t\t\t<!-- Main -->
                  {% block body %}
\t\t\t\t\t<div id=\"main\">

\t\t\t\t\t\t<!-- Featured Post -->
\t\t\t\t\t\t\t<article class=\"post featured\">
\t\t\t\t\t\t\t\t<header class=\"major\">
\t\t\t\t\t\t\t\t\t<span class=\"date\">La Liste Des Voyage </span>
\t\t\t\t\t\t\t\t\t<table class=\"table\" >
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>Id</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Image</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Destination</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Nom_Voyage</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Duree_Voyage</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Prix</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Date</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Valabilite</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t{% for voyage in voyages %}
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ voyage.id }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t{% if voyage.image|length > 0 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<td><img src=\"{{ asset('uploads/'~ voyage.image ) }}\" width=\"250\" height=\"150\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<td><img src=\"{{ asset('uploads/'~ \"Not found.jpg\" ) }}\" width=\"250\" height=\"150\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ voyage.Destination }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ voyage.NomVoyage }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ voyage.DureeVoyage }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ voyage.prix }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ voyage.date ? voyage.date|date('Y-m-d') : '' }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ voyage.valabilite }}</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"8\">no records found</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<ul class=\"actions special\">
\t\t\t\t\t\t\t\t\t<li><a <a href=\"{{ path('voyage_new') }}\"class=\"button large\">Reserver Voyage</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</article>

\t\t\t\t\t\t<!-- Posts -->
\t\t\t\t\t\t\t<section class=\"posts\">
\t\t\t\t\t\t\t\t<article>
\t\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t\t<span class=\"date\">April 24, 2017</span>
\t\t\t\t\t\t\t\t\t\t<h2><a href=\"#\">La liste<br />
\t\t\t\t\t\t\t\t\t\tDes Voyages</a></h2>
\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"image fit\"><img src=\"{{ asset('Front/images/pic02.jpg')}}\" alt=\"\" /></a>
\t\t\t\t\t\t\t\t\t<p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
\t\t\t\t\t\t\t\t\t<ul class=\"actions special\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"button\">Full Story</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t\t<article>
\t\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t\t<span class=\"date\">April 22, 2017</span>
\t\t\t\t\t\t\t\t\t\t<h2><a href=\"#\">Primis eget<br />
\t\t\t\t\t\t\t\t\t\timperdiet lorem</a></h2>
\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"image fit\"><img src=\"{{ asset('Front/images/pic03.jpg')}}\" alt=\"\" /></a>
\t\t\t\t\t\t\t\t\t<p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
\t\t\t\t\t\t\t\t\t<ul class=\"actions special\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"button\">Full Story</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t\t<article>
\t\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t\t<span class=\"date\">April 18, 2017</span>
\t\t\t\t\t\t\t\t\t\t<h2><a href=\"#\">Ante mattis<br />
\t\t\t\t\t\t\t\t\t\tinterdum dolor</a></h2>
\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"image fit\"><img src=\"{{ asset('Front/images/pic04.jpg')}}\" alt=\"\" /></a>
\t\t\t\t\t\t\t\t\t<p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
\t\t\t\t\t\t\t\t\t<ul class=\"actions special\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"button\">Full Story</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t\t<article>
\t\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t\t<span class=\"date\">April 14, 2017</span>
\t\t\t\t\t\t\t\t\t\t<h2><a href=\"#\">Tempus sed<br />
\t\t\t\t\t\t\t\t\t\tnulla imperdiet</a></h2>
\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"image fit\"><img src=\"{{ asset('Front/images/pic05.jpg')}}\" alt=\"\" /></a>
\t\t\t\t\t\t\t\t\t<p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
\t\t\t\t\t\t\t\t\t<ul class=\"actions special\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"button\">Full Story</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t\t<article>
\t\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t\t<span class=\"date\">April 11, 2017</span>
\t\t\t\t\t\t\t\t\t\t<h2><a href=\"#\">Odio magna<br />
\t\t\t\t\t\t\t\t\t\tsed consectetur</a></h2>
\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"image fit\"><img src=\"{{ asset('Front/images/pic06.jpg')}}\" alt=\"\" /></a>
\t\t\t\t\t\t\t\t\t<p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
\t\t\t\t\t\t\t\t\t<ul class=\"actions special\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"button\">Full Story</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t\t<article>
\t\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t\t<span class=\"date\">April 7, 2017</span>
\t\t\t\t\t\t\t\t\t\t<h2><a href=\"#\">Augue lorem<br />
\t\t\t\t\t\t\t\t\t\tprimis vestibulum</a></h2>
\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"image fit\"><img src=\"{{ asset('Front/images/pic07.jpg')}}\" alt=\"\" /></a>
\t\t\t\t\t\t\t\t\t<p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
\t\t\t\t\t\t\t\t\t<ul class=\"actions special\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"button\">Full Story</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t</section>

\t\t\t\t\t\t<!-- Footer -->
\t\t\t\t\t\t\t<footer>
\t\t\t\t\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t\t\t\t\t<!--<a href=\"#\" class=\"previous\">Prev</a>-->
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"page active\">1</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"page\">2</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"page\">3</a>
\t\t\t\t\t\t\t\t\t<span class=\"extra\">&hellip;</span>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"page\">8</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"page\">9</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"page\">10</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"next\">Next</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</footer>

\t\t\t\t\t</div>
                       {% endblock %}
\t\t\t\t<!-- Footer -->
\t\t\t\t\t<footer id=\"footer\">
\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t<form method=\"post\" action=\"#\">
\t\t\t\t\t\t\t\t<div class=\"fields\">
\t\t\t\t\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t\t\t\t\t<label for=\"name\">Name</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" id=\"name\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t\t\t\t\t<label for=\"email\">Email</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"email\" id=\"email\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t\t\t\t\t<label for=\"message\">Message</label>
\t\t\t\t\t\t\t\t\t\t<textarea name=\"message\" id=\"message\" rows=\"3\"></textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<ul class=\"actions\">
\t\t\t\t\t\t\t\t\t<li><input type=\"submit\" value=\"Send Message\" /></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</section>
\t\t\t\t\t\t<section class=\"split contact\">
\t\t\t\t\t\t\t<section class=\"alt\">
\t\t\t\t\t\t\t\t<h3>Address</h3>
\t\t\t\t\t\t\t\t<p>1234 Somewhere Road #87257<br />
\t\t\t\t\t\t\t\tNashville, TN 00000-0000</p>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t\t<h3>Phone</h3>
\t\t\t\t\t\t\t\t<p><a href=\"#\">(000) 000-0000</a></p>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t\t<h3>Email</h3>
\t\t\t\t\t\t\t\t<p><a href=\"#\">info@untitled.tld</a></p>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t\t<h3>Social</h3>
\t\t\t\t\t\t\t\t<ul class=\"icons alt\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"icon brands alt fa-twitter\"><span class=\"label\">Twitter</span></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"icon brands alt fa-facebook-f\"><span class=\"label\">Facebook</span></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"icon brands alt fa-instagram\"><span class=\"label\">Instagram</span></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"icon brands alt fa-github\"><span class=\"label\">GitHub</span></a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t</section>
\t\t\t\t\t</footer>

\t\t\t\t<!-- Copyright -->
\t\t\t\t\t<div id=\"copyright\">
\t\t\t\t\t\t<ul><li>&copy; Untitled</li><li>Design: <a href=\"https://html5up.net\">HTML5 UP</a></li></ul>
\t\t\t\t\t</div>

\t\t\t</div>

            {% block js %}
\t\t<!-- Scripts -->
\t\t\t<script src=\"{{ asset('Front/assets/js/jquery.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('Front/assets/js/jquery.scrollex.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('Front/assets/js/jquery.scrolly.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('Front/assets/js/browser.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('Front/assets/js/breakpoints.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('Front/assets/js/util.js') }}\"></script>
\t\t\t<script src=\"{{ asset('Front/assets/js/main.js') }}\"></script>
            {% endblock %}

\t</body>
</html>", "Front/front.html.twig", "C:\\xampp\\htdocs\\PIDEVF1\\templates\\Front\\front.html.twig");
    }
}
