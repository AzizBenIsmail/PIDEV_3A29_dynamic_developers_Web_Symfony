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

/* security/login.html.twig */
class __TwigTemplate_6de5c41b397ccfca8a3d3eaa8a888ed7362f60cf48d648cb9cc8a0f3147c434f extends Template
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
        return "Front/frontL.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("Front/frontL.html.twig", "security/login.html.twig", 1);
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
\t <section class=\"post\">
\t\t<header class=\"major\">
\t\t  <span class=\"date\">April 25, 2017</span>
\t\t\t <h1>Se<br />
\t\t\t\tConnecter</h1>
\t\t\t  </header>
\t\t\t    <form action=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
        echo "\" method=\"post\">
\t\t\t\t\t<div class=\"row gtr-uniform\">
\t\t\t\t\t  <div class=\"col-6 col-12-xsmall\">
\t\t\t\t\t    <input type=\"email\" name=\"_username\" required id=\"demo-name\"  placeholder=\"Adresse email....\" />
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"col-6 col-12-xsmall\">
\t\t\t\t\t\t<input type=\"password\" name=\"_password\" required id=\"demo-email\"  placeholder=\"Mot de passe....\" />
\t\t\t\t\t  </div>
                      <div class=\"col-12\">
\t\t\t\t\t  <ul class=\"actions\">
\t\t\t\t\t\t  <li><input type=\"submit\" value=\"Se Connecter\" class=\"primary\" /></li>
\t\t\t\t\t\t  <li><input type=\"reset\" value=\"SingUp\" href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_registration");
        echo "\" /></li>
\t\t\t\t\t  </ul>
\t\t\t\t\t</div>
   
\t\t\t\t</form>
    </section> 
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 24,  79 => 13,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Front/frontL.html.twig' %}

{% block body %}

   <div id=\"main\">
           <!-- Post -->
\t <section class=\"post\">
\t\t<header class=\"major\">
\t\t  <span class=\"date\">April 25, 2017</span>
\t\t\t <h1>Se<br />
\t\t\t\tConnecter</h1>
\t\t\t  </header>
\t\t\t    <form action=\"{{ path('security_login') }}\" method=\"post\">
\t\t\t\t\t<div class=\"row gtr-uniform\">
\t\t\t\t\t  <div class=\"col-6 col-12-xsmall\">
\t\t\t\t\t    <input type=\"email\" name=\"_username\" required id=\"demo-name\"  placeholder=\"Adresse email....\" />
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"col-6 col-12-xsmall\">
\t\t\t\t\t\t<input type=\"password\" name=\"_password\" required id=\"demo-email\"  placeholder=\"Mot de passe....\" />
\t\t\t\t\t  </div>
                      <div class=\"col-12\">
\t\t\t\t\t  <ul class=\"actions\">
\t\t\t\t\t\t  <li><input type=\"submit\" value=\"Se Connecter\" class=\"primary\" /></li>
\t\t\t\t\t\t  <li><input type=\"reset\" value=\"SingUp\" href=\"{{ path('security_registration') }}\" /></li>
\t\t\t\t\t  </ul>
\t\t\t\t\t</div>
   
\t\t\t\t</form>
    </section> 
</div>
{% endblock %}", "security/login.html.twig", "C:\\xampp\\htdocs\\PIDEVF1\\templates\\security\\login.html.twig");
    }
}
