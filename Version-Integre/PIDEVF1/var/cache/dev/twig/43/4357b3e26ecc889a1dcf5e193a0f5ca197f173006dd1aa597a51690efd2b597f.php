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

/* Front/frontL.html.twig */
class __TwigTemplate_0d59b23618c1aebba63c7b0f0c715009039a204adc741771340647eddb650e7f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/frontL.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/frontL.html.twig"));

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
        // line 13
        echo "\t</head>
\t<body class=\"is-preload\">

\t\t<!-- Wrapper -->
\t\t\t<div id=\"wrapper\" class=\"fade-in\">

\t\t\t\t<!-- Intro -->
\t\t\t\t\t<div id=\"intro\">
\t\t\t\t\t\t<div class=\"logo\"><img src=\"";
        // line 21
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
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"logo\">TRAVEL ME</a>
\t\t\t\t\t</header>

\t\t\t\t<!-- Nav -->
\t\t\t\t\t<nav id=\"nav\">
\t\t\t\t\t\t<ul class=\"links\">
\t\t\t\t\t\t\t<li class=\"active\"><a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
        echo "\">Se Connecter</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_registration");
        echo "\">Inscription</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<ul class=\"icons\">
\t\t\t\t\t\t\t<li><a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
        echo "\" ><img src=\"https://img.icons8.com/external-aficons-studio-flat-aficons-studio/68/000000/external-login-user-interface-aficons-studio-flat-aficons-studio.png\"/></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"icon brands fa-twitter\"><span class=\"label\">Twitter</span></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"icon brands fa-facebook-f\"><span class=\"label\">Facebook</span></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"icon brands fa-instagram\"><span class=\"label\">Instagram</span></a></li>
\t\t\t\t\t\t\t<li><a href=\"https://github.com/AzizBenIsmail/PIDEV-3A29-dynamic-developers\" class=\"icon brands fa-github\"><span class=\"label\">GitHub</span></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>

\t\t\t\t<!-- Main -->
                  ";
        // line 50
        $this->displayBlock('body', $context, $blocks);
        // line 162
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
        // line 218
        $this->displayBlock('js', $context, $blocks);
        // line 228
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

    // line 50
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 51
        echo "\t\t\t\t\t<div id=\"main\">

\t\t\t\t\t\t<!-- Featured Post -->
\t\t\t\t\t\t\t<article class=\"post featured\">
\t\t\t\t\t\t\t\t<header class=\"major\">
\t\t\t\t\t\t\t\t\t<span class=\"date\">April 25, 2017</span>
\t\t\t\t\t\t\t\t\t<h2><a href=\"#\">And this is a<br />
\t\t\t\t\t\t\t\t\tmassive headline</a></h2>
\t\t\t\t\t\t\t\t\t<p>Aenean ornare velit lacus varius enim ullamcorper proin aliquam<br />
\t\t\t\t\t\t\t\t\tfacilisis ante sed etiam magna interdum congue. Lorem ipsum dolor<br />
\t\t\t\t\t\t\t\t\tamet nullam sed etiam veroeros.</p>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"image main\"><img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/pic01.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a>
\t\t\t\t\t\t\t\t<ul class=\"actions special\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"button large\">Full Story</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</article>

\t\t\t\t\t\t<!-- Posts -->
\t\t\t\t\t\t\t<section class=\"posts\">
\t\t\t\t\t\t\t\t<article>
\t\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t\t<span class=\"date\">April 24, 2017</span>
\t\t\t\t\t\t\t\t\t\t<h2><a href=\"#\">Sed magna<br />
\t\t\t\t\t\t\t\t\t\tipsum faucibus</a></h2>
\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"image fit\"><img src=\"";
        // line 77
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
        // line 89
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
        // line 101
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
        // line 113
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
        // line 125
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
        // line 137
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

    // line 218
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 219
        echo "\t\t<!-- Scripts -->
\t\t\t<script src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/js/jquery.scrollex.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/js/jquery.scrolly.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/js/browser.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/js/breakpoints.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/js/util.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/js/main.js"), "html", null, true);
        echo "\"></script>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Front/frontL.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  427 => 226,  423 => 225,  419 => 224,  415 => 223,  411 => 222,  407 => 221,  403 => 220,  400 => 219,  390 => 218,  355 => 137,  340 => 125,  325 => 113,  310 => 101,  295 => 89,  280 => 77,  263 => 63,  249 => 51,  239 => 50,  227 => 11,  222 => 10,  212 => 9,  193 => 4,  181 => 228,  179 => 218,  121 => 162,  119 => 50,  107 => 41,  101 => 38,  97 => 37,  88 => 31,  75 => 21,  65 => 13,  63 => 9,  59 => 8,  52 => 4,  47 => 1,);
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
\t\t\t\t\t\t\t<li class=\"active\"><a href=\"{{ path('security_login') }}\">Se Connecter</a></li>
\t\t\t\t\t\t\t<li><a href=\"{{ path('security_registration') }}\">Inscription</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<ul class=\"icons\">
\t\t\t\t\t\t\t<li><a href=\"{{ path('security_login') }}\" ><img src=\"https://img.icons8.com/external-aficons-studio-flat-aficons-studio/68/000000/external-login-user-interface-aficons-studio-flat-aficons-studio.png\"/></a></li>
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
\t\t\t\t\t\t\t\t\t<span class=\"date\">April 25, 2017</span>
\t\t\t\t\t\t\t\t\t<h2><a href=\"#\">And this is a<br />
\t\t\t\t\t\t\t\t\tmassive headline</a></h2>
\t\t\t\t\t\t\t\t\t<p>Aenean ornare velit lacus varius enim ullamcorper proin aliquam<br />
\t\t\t\t\t\t\t\t\tfacilisis ante sed etiam magna interdum congue. Lorem ipsum dolor<br />
\t\t\t\t\t\t\t\t\tamet nullam sed etiam veroeros.</p>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"image main\"><img src=\"{{ asset('Front/images/pic01.jpg')}}\" alt=\"\" /></a>
\t\t\t\t\t\t\t\t<ul class=\"actions special\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"button large\">Full Story</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</article>

\t\t\t\t\t\t<!-- Posts -->
\t\t\t\t\t\t\t<section class=\"posts\">
\t\t\t\t\t\t\t\t<article>
\t\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t\t<span class=\"date\">April 24, 2017</span>
\t\t\t\t\t\t\t\t\t\t<h2><a href=\"#\">Sed magna<br />
\t\t\t\t\t\t\t\t\t\tipsum faucibus</a></h2>
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
</html>", "Front/frontL.html.twig", "C:\\xampp\\htdocs\\PIDEVF1\\templates\\Front\\frontL.html.twig");
    }
}
