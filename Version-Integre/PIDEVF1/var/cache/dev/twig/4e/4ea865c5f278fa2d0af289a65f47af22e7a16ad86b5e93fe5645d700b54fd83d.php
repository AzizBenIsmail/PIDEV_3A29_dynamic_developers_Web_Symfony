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
class __TwigTemplate_afe0d674a7b1f3c1884a89c36be2f7ce9c780eec5763f50c419b8aea2a9f25f2 extends Template
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
        echo "<!-- pour le logine seulement-->
<!DOCTYPE HTML>
<html>
\t<head>
\t\t<title> ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " </title>
\t\t<meta charset=\"utf-8\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\" />
\t\t<!-- plugins:css -->
\t\t<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/img.ico"), "html", null, true);
        echo "\">
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "\t</head>
\t<body class=\"is-preload\">

\t\t<!-- Wrapper -->
\t\t\t<div id=\"wrapper\" class=\"fade-in\">

\t\t\t\t<!-- Intro -->
\t\t\t\t\t<div id=\"intro\">
\t\t\t\t\t\t<div class=\"logo\"><img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/img.png"), "html", null, true);
        echo "\" width=\"150\" height=\"150\" /></div>
\t\t\t\t\t\t<h1>TRAVEL
\t\t\t\t\t\t\tME</h1>
\t\t\t\t\t\t<p>Discover Your Life ,
\t\t\t\t\t\t\tTravel Where You Want
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<ul class=\"actions\">
\t\t\t\t\t\t\t<li><a href=\"#header\" class=\"button icon solid solo fa-arrow-down scrolly\">Continue</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>

\t\t\t\t<!-- Header -->
\t\t\t\t\t<header id=\"header\">
\t\t\t\t\t\t<a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"logo\">TRAVEL ME</a>
\t\t\t\t\t</header>

\t\t\t\t<!-- Nav -->
\t\t\t\t\t<nav id=\"nav\">
\t\t\t\t\t\t";
        // line 41
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41)) {
            // line 42
            echo "\t\t\t\t\t\t<ul class=\"links\">
\t\t\t\t\t\t\t<li class=\"active\"><a href=\"";
            // line 43
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\">Se Connecter</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
            // line 44
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_registration");
            echo "\">Inscription</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
        } else {
            // line 47
            echo "\t\t\t\t\t\t<ul class=\"links\">
\t\t\t\t\t\t\t<li class=\"active\"><a href=\"";
            // line 48
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
            echo "\">Actuelle</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
            // line 49
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyage_index");
            echo "\">Voyage</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
            // line 50
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("excursion_index");
            echo "\"> Excursion</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
            // line 51
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("restaurant_index");
            echo "\"> restaurant</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
            // line 52
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_new");
            echo "\">Acceuil</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
        }
        // line 55
        echo "\t\t\t\t\t\t<ul class=\"icons\">
\t\t\t\t\t\t\t";
        // line 56
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56)) {
            // line 57
            echo "\t\t\t\t\t\t\t<li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\" ><img src=\"https://img.icons8.com/external-aficons-studio-flat-aficons-studio/68/000000/external-login-user-interface-aficons-studio-flat-aficons-studio.png\"/></a></li>
\t\t\t\t\t\t\t";
        } else {
            // line 59
            echo "\t\t\t\t\t\t\t<li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
            echo "\" ><img src=\"https://img.icons8.com/external-kmg-design-outline-color-kmg-design/32/000000/external-log-out-user-interface-kmg-design-outline-color-kmg-design.png\"/></a></li>
\t\t\t\t\t\t\t";
        }
        // line 61
        echo "\t\t\t\t\t\t\t<li><a href=\"#\" class=\"icon brands fa-twitter\"><span class=\"label\">Twitter</span></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"icon brands fa-facebook-f\"><span class=\"label\">Facebook</span></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"icon brands fa-instagram\"><span class=\"label\">Instagram</span></a></li>
\t\t\t\t\t\t\t<li><a href=\"https://github.com/AzizBenIsmail/PIDEV-3A29-dynamic-developers\" class=\"icon brands fa-github\"><span class=\"label\">GitHub</span></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t<!-- Main -->
                  ";
        // line 68
        $this->displayBlock('body', $context, $blocks);
        // line 298
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
        // line 355
        $this->displayBlock('js', $context, $blocks);
        // line 365
        echo "

\t</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
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

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "\t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/css/main.css"), "html", null, true);
        echo "\" />
\t\t<noscript><link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/css/noscript.css"), "html", null, true);
        echo "\" /></noscript>

        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 68
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 69
        echo "\t\t\t\t\t<div id=\"main\">

\t\t\t\t\t\t<!-- Featured Post -->
\t\t\t\t\t\t<article class=\"post featured\">
\t\t\t\t\t\t\t<header class=\"major\">
\t\t\t\t\t\t\t\t<span class=\"date\">";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "user", [], "any", false, false, false, 74), "UserName", [], "any", false, false, false, 74), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t<a href=\"#\" class=\"image main\"> ";
        // line 76
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76), "image", [], "any", false, false, false, 76)), 0))) {
            // line 77
            echo "\t\t\t\t\t\t\t\t\t<td><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77), "image", [], "any", false, false, false, 77))), "html", null, true);
            echo "\" width=\"500\" height=\"350\"></td>
\t\t\t\t\t\t\t\t";
        } else {
            // line 79
            echo "\t\t\t\t\t\t\t\t\t<td><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . "Not found.jpg")), "html", null, true);
            echo "\" width=\"250\" height=\"150\"></td>
\t\t\t\t\t\t\t\t";
        }
        // line 80
        echo "</a>

\t\t\t\t\t\t</article>

\t\t\t\t\t\t<article class=\"post featured\">
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
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["voyages"]) || array_key_exists("voyages", $context) ? $context["voyages"] : (function () { throw new RuntimeError('Variable "voyages" does not exist.', 101, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["voyage"]) {
            // line 102
            echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "id", [], "any", false, false, false, 103), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 104
            if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "image", [], "any", false, false, false, 104)), 0))) {
                // line 105
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<td><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["voyage"], "image", [], "any", false, false, false, 105))), "html", null, true);
                echo "\" width=\"250\" height=\"150\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 107
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<td><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . "Not found.jpg")), "html", null, true);
                echo "\" width=\"250\" height=\"150\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 109
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "Destination", [], "any", false, false, false, 109), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "NomVoyage", [], "any", false, false, false, 110), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "DureeVoyage", [], "any", false, false, false, 111), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "prix", [], "any", false, false, false, 112), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 113
            ((twig_get_attribute($this->env, $this->source, $context["voyage"], "date", [], "any", false, false, false, 113)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "date", [], "any", false, false, false, 113), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 114
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "valabilite", [], "any", false, false, false, 114), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 117
            echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"8\">no records found</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voyage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t<div class=\"align-center\"> ";
        // line 123
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["voyages"]) || array_key_exists("voyages", $context) ? $context["voyages"] : (function () { throw new RuntimeError('Variable "voyages" does not exist.', 123, $this->source); })()));
        echo "</div>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<ul class=\"actions special\">
\t\t\t\t\t\t\t\t\t<li><a <a href=\"";
        // line 126
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_voyage_new");
        echo "\"class=\"button large\">Reserver Voyage</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</article>

\t\t\t\t\t\t<article class=\"post featured\">
\t\t\t\t\t\t\t<header class=\"major\">
\t\t\t\t\t\t\t\t<span class=\"date\">La Liste Des Restaurant </span>
\t\t\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>Id</th>
\t\t\t\t\t\t\t\t\t\t<th>Image</th>
\t\t\t\t\t\t\t\t\t\t<th>Nom_Restaurant</th>
\t\t\t\t\t\t\t\t\t\t<th>Adresse_Restaurant</th>
\t\t\t\t\t\t\t\t\t\t<th>Num_Tel_Restaurant</th>
\t\t\t\t\t\t\t\t\t\t<th>Description_Restaurant</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t";
        // line 145
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["restaurants"]) || array_key_exists("restaurants", $context) ? $context["restaurants"] : (function () { throw new RuntimeError('Variable "restaurants" does not exist.', 145, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["restaurant"]) {
            // line 146
            echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 147
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurant"], "id", [], "any", false, false, false, 147), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 148
            if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurant"], "Image", [], "any", false, false, false, 148)), 0))) {
                // line 149
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<td><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["restaurant"], "Image", [], "any", false, false, false, 149))), "html", null, true);
                echo "\" width=\"250\" height=\"150\"></td>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 151
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<td><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . "Not found.jpg")), "html", null, true);
                echo "\" width=\"250\" height=\"150\"></td>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 153
            echo "\t\t\t\t\t\t\t\t\t\t\t<td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurant"], "NomRestaurant", [], "any", false, false, false, 153), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 154
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurant"], "AdresseRestaurant", [], "any", false, false, false, 154), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 155
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurant"], "NumTelRestaurant", [], "any", false, false, false, 155), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 156
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurant"], "DescriptionRestaurant", [], "any", false, false, false, 156), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 159
            echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"7\">no records found</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['restaurant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t<ul class=\"actions special\">
\t\t\t\t\t\t\t\t<li><a <a href=\"";
        // line 167
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_restaurant_new");
        echo "\"class=\"button large\">Reserver Restaurant</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</article>

\t\t\t\t\t\t<!-- Posts -->
\t\t\t\t\t\t<article class=\"post featured\">
\t\t\t\t\t\t\t<header class=\"major\">
\t\t\t\t\t\t\t\t<span class=\"date\">La Liste Des Excursion </span>
\t\t\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>Id</th>
\t\t\t\t\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t\t\t\t\t<th>Description_Excursion</th>
\t\t\t\t\t\t\t\t\t\t<th>Type_Excursion</th>
\t\t\t\t\t\t\t\t\t\t<th>Lieu</th>
\t\t\t\t\t\t\t\t\t\t<th>prix</th>
\t\t\t\t\t\t\t\t\t\t<th>Date</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t";
        // line 188
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["excursions"]) || array_key_exists("excursions", $context) ? $context["excursions"] : (function () { throw new RuntimeError('Variable "excursions" does not exist.', 188, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["excursion"]) {
            // line 189
            echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 190
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["excursion"], "id", [], "any", false, false, false, 190), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>                                ";
            // line 191
            if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["excursion"], "image", [], "any", false, false, false, 191)), 0))) {
                // line 192
                echo "\t\t\t\t\t\t\t\t\t\t\t<td><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["excursion"], "image", [], "any", false, false, false, 192))), "html", null, true);
                echo "\" width=\"250\" height=\"150\"></td>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 194
                echo "\t\t\t\t\t\t\t\t\t\t\t<td><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . "Not found.jpg")), "html", null, true);
                echo "\" width=\"250\" height=\"150\"></td>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 195
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 196
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["excursion"], "DescriptionExcursion", [], "any", false, false, false, 196), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 197
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["excursion"], "TypeExcursion", [], "any", false, false, false, 197), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 198
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["excursion"], "Lieu", [], "any", false, false, false, 198), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 199
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["excursion"], "prix", [], "any", false, false, false, 199), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 200
            ((twig_get_attribute($this->env, $this->source, $context["excursion"], "Date", [], "any", false, false, false, 200)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["excursion"], "Date", [], "any", false, false, false, 200), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>

\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 206
            echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"4\">no records found</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['excursion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 210
        echo "\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>

\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t<ul class=\"actions special\">
\t\t\t\t\t\t\t\t<li><a <a href=\"";
        // line 215
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("excursion_index");
        echo "\"class=\"button large\">Reserver Excursion</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</article>

\t\t\t\t\t\t<article class=\"post featured\">
\t\t\t\t\t\t\t<header class=\"major\">
\t\t\t\t\t\t\t\t<span class=\"date\">La Liste Des Commentaire </span>
\t\t\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>Id</th>
\t\t\t\t\t\t\t\t\t\t<th>Objet</th>
\t\t\t\t\t\t\t\t\t\t<th>Commentaire</th>
\t\t\t\t\t\t\t\t\t\t<th>actions</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t";
        // line 232
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new RuntimeError('Variable "commentaires" does not exist.', 232, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 233
            echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 234
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 234), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 235
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "Objet", [], "any", false, false, false, 235), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 236
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "Commentaire", [], "any", false, false, false, 236), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 238
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commentaire_show", ["id" => twig_get_attribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 238)]), "html", null, true);
            echo "\">show</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 239
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commentaire_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 239)]), "html", null, true);
            echo "\">edit</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 243
            echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"4\">no records found</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 247
        echo "\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t<ul class=\"actions special\">
\t\t\t\t\t\t\t\t<li><a <a href=\"";
        // line 251
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commentaire_new");
        echo "\"class=\"button large\">Ajouter Un commentaire</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</article>

\t\t\t\t\t\t<article class=\"post featured\">
\t\t\t\t\t\t\t<header class=\"major\">
\t\t\t\t\t\t\t\t<span class=\"date\">La Liste Des Reclamation </span>
\t\t\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>Id</th>
\t\t\t\t\t\t\t\t\t\t<th>Objet</th>
\t\t\t\t\t\t\t\t\t\t<th>Type_De_Reclamation</th>
\t\t\t\t\t\t\t\t\t\t<th>Description_Reclamation</th>
\t\t\t\t\t\t\t\t\t\t<th>Date</th>
\t\t\t\t\t\t\t\t\t\t<th>actions</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t";
        // line 270
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 270, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 271
            echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 272
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 272), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 273
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "Objet", [], "any", false, false, false, 273), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 274
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "TypeDeReclamation", [], "any", false, false, false, 274), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 275
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "DescriptionReclamation", [], "any", false, false, false, 275), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 276
            ((twig_get_attribute($this->env, $this->source, $context["reclamation"], "Date", [], "any", false, false, false, 276)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "Date", [], "any", false, false, false, 276), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 278
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 278)]), "html", null, true);
            echo "\">show</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 279
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 279)]), "html", null, true);
            echo "\">edit</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 283
            echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"6\">no records found</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclamation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 287
        echo "\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t<ul class=\"actions special\">
\t\t\t\t\t\t\t\t<li><a <a href=\"";
        // line 291
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_new");
        echo "\"class=\"button large\">Passer une reclamation</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</article>
\t\t\t\t\t\t<!-- Footer -->

\t\t\t\t\t</div>
                       ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 355
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 356
        echo "\t\t<!-- Scripts -->
\t\t\t<script src=\"";
        // line 357
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/js/jquery.scrollex.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/js/jquery.scrolly.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 360
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/js/browser.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 361
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/js/breakpoints.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 362
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/js/util.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 363
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
        return array (  804 => 363,  800 => 362,  796 => 361,  792 => 360,  788 => 359,  784 => 358,  780 => 357,  777 => 356,  767 => 355,  750 => 291,  744 => 287,  735 => 283,  726 => 279,  722 => 278,  717 => 276,  713 => 275,  709 => 274,  705 => 273,  701 => 272,  698 => 271,  693 => 270,  671 => 251,  665 => 247,  656 => 243,  647 => 239,  643 => 238,  638 => 236,  634 => 235,  630 => 234,  627 => 233,  622 => 232,  602 => 215,  595 => 210,  586 => 206,  575 => 200,  571 => 199,  567 => 198,  563 => 197,  559 => 196,  556 => 195,  550 => 194,  544 => 192,  542 => 191,  538 => 190,  535 => 189,  530 => 188,  506 => 167,  500 => 163,  491 => 159,  483 => 156,  479 => 155,  475 => 154,  470 => 153,  464 => 151,  458 => 149,  456 => 148,  452 => 147,  449 => 146,  444 => 145,  422 => 126,  416 => 123,  412 => 121,  403 => 117,  395 => 114,  391 => 113,  387 => 112,  383 => 111,  379 => 110,  374 => 109,  368 => 107,  362 => 105,  360 => 104,  356 => 103,  353 => 102,  348 => 101,  325 => 80,  319 => 79,  313 => 77,  311 => 76,  306 => 74,  299 => 69,  289 => 68,  276 => 12,  271 => 11,  261 => 10,  242 => 5,  229 => 365,  227 => 355,  168 => 298,  166 => 68,  157 => 61,  151 => 59,  145 => 57,  143 => 56,  140 => 55,  134 => 52,  130 => 51,  126 => 50,  122 => 49,  118 => 48,  115 => 47,  109 => 44,  105 => 43,  102 => 42,  100 => 41,  92 => 36,  76 => 23,  66 => 15,  64 => 10,  60 => 9,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- pour le logine seulement-->
<!DOCTYPE HTML>
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
\t\t\t\t\t\t<ul class=\"actions\">
\t\t\t\t\t\t\t<li><a href=\"#header\" class=\"button icon solid solo fa-arrow-down scrolly\">Continue</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>

\t\t\t\t<!-- Header -->
\t\t\t\t\t<header id=\"header\">
\t\t\t\t\t\t<a href=\"{{ path('home') }}\" class=\"logo\">TRAVEL ME</a>
\t\t\t\t\t</header>

\t\t\t\t<!-- Nav -->
\t\t\t\t\t<nav id=\"nav\">
\t\t\t\t\t\t{% if not app.user %}
\t\t\t\t\t\t<ul class=\"links\">
\t\t\t\t\t\t\t<li class=\"active\"><a href=\"{{ path('security_login') }}\">Se Connecter</a></li>
\t\t\t\t\t\t\t<li><a href=\"{{ path('security_registration') }}\">Inscription</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t<ul class=\"links\">
\t\t\t\t\t\t\t<li class=\"active\"><a href=\"{{ path('home') }}\">Actuelle</a></li>
\t\t\t\t\t\t\t<li><a href=\"{{ path('voyage_index') }}\">Voyage</a></li>
\t\t\t\t\t\t\t<li><a href=\"{{ path('excursion_index') }}\"> Excursion</a></li>
\t\t\t\t\t\t\t<li><a href=\"{{ path('restaurant_index') }}\"> restaurant</a></li>
\t\t\t\t\t\t\t<li><a href=\"{{ path('post_new') }}\">Acceuil</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<ul class=\"icons\">
\t\t\t\t\t\t\t{% if not app.user %}
\t\t\t\t\t\t\t<li><a href=\"{{ path('security_login') }}\" ><img src=\"https://img.icons8.com/external-aficons-studio-flat-aficons-studio/68/000000/external-login-user-interface-aficons-studio-flat-aficons-studio.png\"/></a></li>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<li><a href=\"{{ path('security_logout') }}\" ><img src=\"https://img.icons8.com/external-kmg-design-outline-color-kmg-design/32/000000/external-log-out-user-interface-kmg-design-outline-color-kmg-design.png\"/></a></li>
\t\t\t\t\t\t\t{% endif %}
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
\t\t\t\t\t\t<article class=\"post featured\">
\t\t\t\t\t\t\t<header class=\"major\">
\t\t\t\t\t\t\t\t<span class=\"date\">{{ app.user.UserName }}</span>
\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t<a href=\"#\" class=\"image main\"> {% if app.user.image|length > 0 %}
\t\t\t\t\t\t\t\t\t<td><img src=\"{{ asset('uploads/'~ app.user.image ) }}\" width=\"500\" height=\"350\"></td>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<td><img src=\"{{ asset('uploads/'~ \"Not found.jpg\" ) }}\" width=\"250\" height=\"150\"></td>
\t\t\t\t\t\t\t\t{% endif %}</a>

\t\t\t\t\t\t</article>

\t\t\t\t\t\t<article class=\"post featured\">
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
\t\t\t\t\t\t\t\t\t<div class=\"align-center\"> {{ knp_pagination_render(voyages) }}</div>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<ul class=\"actions special\">
\t\t\t\t\t\t\t\t\t<li><a <a href=\"{{ path('reservation_voyage_new') }}\"class=\"button large\">Reserver Voyage</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</article>

\t\t\t\t\t\t<article class=\"post featured\">
\t\t\t\t\t\t\t<header class=\"major\">
\t\t\t\t\t\t\t\t<span class=\"date\">La Liste Des Restaurant </span>
\t\t\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>Id</th>
\t\t\t\t\t\t\t\t\t\t<th>Image</th>
\t\t\t\t\t\t\t\t\t\t<th>Nom_Restaurant</th>
\t\t\t\t\t\t\t\t\t\t<th>Adresse_Restaurant</th>
\t\t\t\t\t\t\t\t\t\t<th>Num_Tel_Restaurant</th>
\t\t\t\t\t\t\t\t\t\t<th>Description_Restaurant</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t{% for restaurant in restaurants %}
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ restaurant.id }}</td>
\t\t\t\t\t\t\t\t\t\t\t{% if restaurant.Image|length > 0 %}
\t\t\t\t\t\t\t\t\t\t\t\t<td><img src=\"{{ asset('uploads/'~ restaurant.Image ) }}\" width=\"250\" height=\"150\"></td>
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t<td><img src=\"{{ asset('uploads/'~ \"Not found.jpg\" ) }}\" width=\"250\" height=\"150\"></td>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t<td>{{ restaurant.NomRestaurant }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ restaurant.AdresseRestaurant }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ restaurant.NumTelRestaurant }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ restaurant.DescriptionRestaurant }}</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"7\">no records found</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t<ul class=\"actions special\">
\t\t\t\t\t\t\t\t<li><a <a href=\"{{ path('reservation_restaurant_new') }}\"class=\"button large\">Reserver Restaurant</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</article>

\t\t\t\t\t\t<!-- Posts -->
\t\t\t\t\t\t<article class=\"post featured\">
\t\t\t\t\t\t\t<header class=\"major\">
\t\t\t\t\t\t\t\t<span class=\"date\">La Liste Des Excursion </span>
\t\t\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>Id</th>
\t\t\t\t\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t\t\t\t\t<th>Description_Excursion</th>
\t\t\t\t\t\t\t\t\t\t<th>Type_Excursion</th>
\t\t\t\t\t\t\t\t\t\t<th>Lieu</th>
\t\t\t\t\t\t\t\t\t\t<th>prix</th>
\t\t\t\t\t\t\t\t\t\t<th>Date</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t{% for excursion in excursions %}
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ excursion.id }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>                                {% if excursion.image|length > 0 %}
\t\t\t\t\t\t\t\t\t\t\t<td><img src=\"{{ asset('uploads/'~ excursion.image ) }}\" width=\"250\" height=\"150\"></td>
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<td><img src=\"{{ asset('uploads/'~ \"Not found.jpg\" ) }}\" width=\"250\" height=\"150\"></td>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ excursion.DescriptionExcursion }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ excursion.TypeExcursion }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ excursion.Lieu }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ excursion.prix }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ excursion.Date ? excursion.Date|date('Y-m-d') : ''  }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>

\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"4\">no records found</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>

\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t<ul class=\"actions special\">
\t\t\t\t\t\t\t\t<li><a <a href=\"{{ path('excursion_index') }}\"class=\"button large\">Reserver Excursion</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</article>

\t\t\t\t\t\t<article class=\"post featured\">
\t\t\t\t\t\t\t<header class=\"major\">
\t\t\t\t\t\t\t\t<span class=\"date\">La Liste Des Commentaire </span>
\t\t\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>Id</th>
\t\t\t\t\t\t\t\t\t\t<th>Objet</th>
\t\t\t\t\t\t\t\t\t\t<th>Commentaire</th>
\t\t\t\t\t\t\t\t\t\t<th>actions</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t{% for commentaire in commentaires %}
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ commentaire.id }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ commentaire.Objet }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ commentaire.Commentaire }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('commentaire_show', {'id': commentaire.id}) }}\">show</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('commentaire_edit', {'id': commentaire.id}) }}\">edit</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"4\">no records found</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t<ul class=\"actions special\">
\t\t\t\t\t\t\t\t<li><a <a href=\"{{ path('commentaire_new') }}\"class=\"button large\">Ajouter Un commentaire</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</article>

\t\t\t\t\t\t<article class=\"post featured\">
\t\t\t\t\t\t\t<header class=\"major\">
\t\t\t\t\t\t\t\t<span class=\"date\">La Liste Des Reclamation </span>
\t\t\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>Id</th>
\t\t\t\t\t\t\t\t\t\t<th>Objet</th>
\t\t\t\t\t\t\t\t\t\t<th>Type_De_Reclamation</th>
\t\t\t\t\t\t\t\t\t\t<th>Description_Reclamation</th>
\t\t\t\t\t\t\t\t\t\t<th>Date</th>
\t\t\t\t\t\t\t\t\t\t<th>actions</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t{% for reclamation in reclamations %}
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ reclamation.id }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ reclamation.Objet }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ reclamation.TypeDeReclamation }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ reclamation.DescriptionReclamation }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ reclamation.Date ? reclamation.Date|date('Y-m-d') : '' }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('reclamation_show', {'id': reclamation.id}) }}\">show</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('reclamation_edit', {'id': reclamation.id}) }}\">edit</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"6\">no records found</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t<ul class=\"actions special\">
\t\t\t\t\t\t\t\t<li><a <a href=\"{{ path('reclamation_new') }}\"class=\"button large\">Passer une reclamation</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</article>
\t\t\t\t\t\t<!-- Footer -->

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
