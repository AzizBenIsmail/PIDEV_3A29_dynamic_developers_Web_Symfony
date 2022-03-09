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

/* Front/Menu.html.twig */
class __TwigTemplate_7a0c4931c12acd84be32919e7f18e7c4d5434b62a93516e3cebca82c7b09394c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/Menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/Menu.html.twig"));

        // line 1
        echo "<style>@import url(\"https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap\");
    * {
        margin: 0;
        padding: 0;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }

    body {
        background: #272727;
        font-family: \"Montserrat\", sans-serif;
    }

    .navMenu {
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }

    .navMenu a {
        color: #f6f4e6;
        text-decoration: none;
        font-size: 1.2em;
        text-transform: uppercase;
        font-weight: 500;
        display: inline-block;
        width: 80px;
        -webkit-transition: all 0.2s ease-in-out;
        transition: all 0.2s ease-in-out;
    }

    .navMenu a:hover {
        color: #fddb3a;
    }

    .navMenu .dot {
        width: 6px;
        height: 6px;
        background: #fddb3a;
        border-radius: 50%;
        opacity: 0;
        -webkit-transform: translateX(30px);
        transform: translateX(30px);
        -webkit-transition: all 0.2s ease-in-out;
        transition: all 0.2s ease-in-out;
    }

    .navMenu a:nth-child(1):hover ~ .dot {
        -webkit-transform: translateX(30px);
        transform: translateX(30px);
        -webkit-transition: all 0.2s ease-in-out;
        transition: all 0.2s ease-in-out;
        opacity: 1;
    }

    .navMenu a:nth-child(2):hover ~ .dot {
        -webkit-transform: translateX(110px);
        transform: translateX(110px);
        -webkit-transition: all 0.2s ease-in-out;
        transition: all 0.2s ease-in-out;
        opacity: 1;
    }

    .navMenu a:nth-child(3):hover ~ .dot {
        -webkit-transform: translateX(200px);
        transform: translateX(200px);
        -webkit-transition: all 0.2s ease-in-out;
        transition: all 0.2s ease-in-out;
        opacity: 1;
    }

    .navMenu a:nth-child(4):hover ~ .dot {
        -webkit-transform: translateX(285px);
        transform: translateX(285px);
        -webkit-transition: all 0.2s ease-in-out;
        transition: all 0.2s ease-in-out;
        opacity: 1;
    }
</style>
<body>
<nav class=\"navMenu\">
    <a href=\"#\">Home</a>
    <a href=\"#\">Blog</a>
    <a href=\"#\">Work</a>
    <a href=\"#\">About</a>
    <div class=\"dot\"></div>
</nav>
</body>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Front/Menu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>@import url(\"https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap\");
    * {
        margin: 0;
        padding: 0;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }

    body {
        background: #272727;
        font-family: \"Montserrat\", sans-serif;
    }

    .navMenu {
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }

    .navMenu a {
        color: #f6f4e6;
        text-decoration: none;
        font-size: 1.2em;
        text-transform: uppercase;
        font-weight: 500;
        display: inline-block;
        width: 80px;
        -webkit-transition: all 0.2s ease-in-out;
        transition: all 0.2s ease-in-out;
    }

    .navMenu a:hover {
        color: #fddb3a;
    }

    .navMenu .dot {
        width: 6px;
        height: 6px;
        background: #fddb3a;
        border-radius: 50%;
        opacity: 0;
        -webkit-transform: translateX(30px);
        transform: translateX(30px);
        -webkit-transition: all 0.2s ease-in-out;
        transition: all 0.2s ease-in-out;
    }

    .navMenu a:nth-child(1):hover ~ .dot {
        -webkit-transform: translateX(30px);
        transform: translateX(30px);
        -webkit-transition: all 0.2s ease-in-out;
        transition: all 0.2s ease-in-out;
        opacity: 1;
    }

    .navMenu a:nth-child(2):hover ~ .dot {
        -webkit-transform: translateX(110px);
        transform: translateX(110px);
        -webkit-transition: all 0.2s ease-in-out;
        transition: all 0.2s ease-in-out;
        opacity: 1;
    }

    .navMenu a:nth-child(3):hover ~ .dot {
        -webkit-transform: translateX(200px);
        transform: translateX(200px);
        -webkit-transition: all 0.2s ease-in-out;
        transition: all 0.2s ease-in-out;
        opacity: 1;
    }

    .navMenu a:nth-child(4):hover ~ .dot {
        -webkit-transform: translateX(285px);
        transform: translateX(285px);
        -webkit-transition: all 0.2s ease-in-out;
        transition: all 0.2s ease-in-out;
        opacity: 1;
    }
</style>
<body>
<nav class=\"navMenu\">
    <a href=\"#\">Home</a>
    <a href=\"#\">Blog</a>
    <a href=\"#\">Work</a>
    <a href=\"#\">About</a>
    <div class=\"dot\"></div>
</nav>
</body>", "Front/Menu.html.twig", "C:\\xampp\\htdocs\\PIDEV\\templates\\Front\\Menu.html.twig");
    }
}
