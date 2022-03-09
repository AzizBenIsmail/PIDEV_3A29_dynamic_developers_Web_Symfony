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

/* base.html.twig */
class __TwigTemplate_990cfacf8418c137659d357937eb5d1c48fdd2d699ce043e293bbff107b793e6 extends Template
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
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

  <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  <meta content=\"\" name=\"description\">
  <meta content=\"\" name=\"keywords\">

  <!-- Favicons -->
  <link href=\"img/favicon.png\" rel=\"icon\">
  <link href=\"img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

  <!-- Google Fonts -->
  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">
 ";
        // line 19
        $this->displayBlock('css', $context, $blocks);
        // line 32
        echo "  <!-- =======================================================
  * Template Name: Kelly - v2.1.0
  * Template URL: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id=\"header\" class=\"fixed-top\">
 
    <div class=\"container-fluid d-flex justify-content-between align-items-center\">

      <h1 class=\"logo\"><a href=\"index.html\">Esprit</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href=\"index.html\" class=\"logo\"><img src=\"assets/img/logo.png\" alt=\"\" class=\"img-fluid\"></a>-->

      <nav class=\"nav-menu d-none d-lg-block\">
      
        <ul>
          <li class=\"active\"><a href=\"\">Esprit</a></li>
          <li><a href=\"\">About</a></li>
          <li><a href=\"\">Student</a></li>
          <li><a href=\"\">Add student</a></li>
          <li><a href=\"\">Club</a></li>
          <li><a href=\"\">Contact</a></li>
        </ul>
      </nav><!-- .nav-menu -->

      <div class=\"header-social-links\">
        <a href=\"#\" class=\"twitter\"><i class=\"icofont-twitter\"></i></a>
        <a href=\"#\" class=\"facebook\"><i class=\"icofont-facebook\"></i></a>
        <a href=\"#\" class=\"instagram\"><i class=\"icofont-instagram\"></i></a>
        <a href=\"#\" class=\"linkedin\"><i class=\"icofont-linkedin\"></i></i></a>
      </div>
    </div>
  </header><!-- End Header -->
  <!-- ======= Hero Section ======= -->
  <section id=\"hero\" class=\"d-flex align-items-center\">
    ";
        // line 73
        $this->displayBlock('body', $context, $blocks);
        // line 80
        echo "  </section>
  <!-- End Hero -->

  <!-- ======= Footer ======= -->
  <footer id=\"footer\">
    <div class=\"container\">
      <div class=\"copyright\">
        &copy; Copyright <strong><span>Kelly</span></strong>. All Rights Reserved
      </div>
      <div class=\"credits\">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/ -->
        Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
      </div>
    </div>
    
  </footer><!-- End  Footer -->

  <div id=\"preloader\"></div>
  <a href=\"#\" class=\"back-to-top\"><i class=\"bx bx-up-arrow-alt\"></i></a>
 ";
        // line 102
        $this->displayBlock('js', $context, $blocks);
        // line 119
        echo "</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Esprit SF ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 20
        echo "  <!-- Vendor CSS Files -->
  <link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
  <link href=\"vendor/icofont/icofont.min.css\" rel=\"stylesheet\">
  <link href=\"vendor/owl.carousel/assets/owl.carousel.min.css\" rel=\"stylesheet\">
  <link href=\"vendor/boxicons/css/boxicons.min.css\" rel=\"stylesheet\">
  <link href=\"vendor/venobox/venobox.css\" rel=\"stylesheet\">
  <link href=\"vendor/aos/aos.css\" rel=\"stylesheet\">

  <!-- Template Main CSS File -->
  
  <link href=\"css/style.css\" rel=\"stylesheet\">
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 73
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 74
        echo "    <div class=\"container d-flex flex-column align-items-center\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
      <h1>Kelly Adams</h1>
      <h2>I'm a professional illustrator from San Francisco</h2>
      <a href=\"about.html\" class=\"btn-about\">About Me</a>
    </div>
     ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 102
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 103
        echo "  <!-- Vendor JS Files -->
  <script src=\"vendor/jquery/jquery.min.js\"></script>
  <script src=\"vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>
  <script src=\"vendor/jquery.easing/jquery.easing.min.js\"></script>
  <script src=\"vendor/php-email-form/validate.js\"></script>
  <script src=\"vendor/waypoints/jquery.waypoints.min.js\"></script>
  <script src=\"vendor/counterup/counterup.min.js\"></script>
  <script src=\"vendor/owl.carousel/owl.carousel.min.js\"></script>
  <script src=\"vendor/isotope-layout/isotope.pkgd.min.js\"></script>
  <script src=\"vendor/venobox/venobox.min.js\"></script>
  <script src=\"vendor/aos/aos.js\"></script>
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>

  <!-- Template Main JS File -->
  <script src=\"js/main.js\"></script>
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  240 => 103,  230 => 102,  215 => 74,  205 => 73,  184 => 20,  174 => 19,  155 => 9,  143 => 119,  141 => 102,  117 => 80,  115 => 73,  72 => 32,  70 => 19,  57 => 9,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

  <title>{% block title %}Esprit SF {% endblock %}</title>
  <meta content=\"\" name=\"description\">
  <meta content=\"\" name=\"keywords\">

  <!-- Favicons -->
  <link href=\"img/favicon.png\" rel=\"icon\">
  <link href=\"img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

  <!-- Google Fonts -->
  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">
 {% block css %}
  <!-- Vendor CSS Files -->
  <link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
  <link href=\"vendor/icofont/icofont.min.css\" rel=\"stylesheet\">
  <link href=\"vendor/owl.carousel/assets/owl.carousel.min.css\" rel=\"stylesheet\">
  <link href=\"vendor/boxicons/css/boxicons.min.css\" rel=\"stylesheet\">
  <link href=\"vendor/venobox/venobox.css\" rel=\"stylesheet\">
  <link href=\"vendor/aos/aos.css\" rel=\"stylesheet\">

  <!-- Template Main CSS File -->
  
  <link href=\"css/style.css\" rel=\"stylesheet\">
 {% endblock %}
  <!-- =======================================================
  * Template Name: Kelly - v2.1.0
  * Template URL: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id=\"header\" class=\"fixed-top\">
 
    <div class=\"container-fluid d-flex justify-content-between align-items-center\">

      <h1 class=\"logo\"><a href=\"index.html\">Esprit</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href=\"index.html\" class=\"logo\"><img src=\"assets/img/logo.png\" alt=\"\" class=\"img-fluid\"></a>-->

      <nav class=\"nav-menu d-none d-lg-block\">
      
        <ul>
          <li class=\"active\"><a href=\"\">Esprit</a></li>
          <li><a href=\"\">About</a></li>
          <li><a href=\"\">Student</a></li>
          <li><a href=\"\">Add student</a></li>
          <li><a href=\"\">Club</a></li>
          <li><a href=\"\">Contact</a></li>
        </ul>
      </nav><!-- .nav-menu -->

      <div class=\"header-social-links\">
        <a href=\"#\" class=\"twitter\"><i class=\"icofont-twitter\"></i></a>
        <a href=\"#\" class=\"facebook\"><i class=\"icofont-facebook\"></i></a>
        <a href=\"#\" class=\"instagram\"><i class=\"icofont-instagram\"></i></a>
        <a href=\"#\" class=\"linkedin\"><i class=\"icofont-linkedin\"></i></i></a>
      </div>
    </div>
  </header><!-- End Header -->
  <!-- ======= Hero Section ======= -->
  <section id=\"hero\" class=\"d-flex align-items-center\">
    {% block body %}
    <div class=\"container d-flex flex-column align-items-center\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
      <h1>Kelly Adams</h1>
      <h2>I'm a professional illustrator from San Francisco</h2>
      <a href=\"about.html\" class=\"btn-about\">About Me</a>
    </div>
     {% endblock %}
  </section>
  <!-- End Hero -->

  <!-- ======= Footer ======= -->
  <footer id=\"footer\">
    <div class=\"container\">
      <div class=\"copyright\">
        &copy; Copyright <strong><span>Kelly</span></strong>. All Rights Reserved
      </div>
      <div class=\"credits\">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/ -->
        Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
      </div>
    </div>
    
  </footer><!-- End  Footer -->

  <div id=\"preloader\"></div>
  <a href=\"#\" class=\"back-to-top\"><i class=\"bx bx-up-arrow-alt\"></i></a>
 {% block js %}
  <!-- Vendor JS Files -->
  <script src=\"vendor/jquery/jquery.min.js\"></script>
  <script src=\"vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>
  <script src=\"vendor/jquery.easing/jquery.easing.min.js\"></script>
  <script src=\"vendor/php-email-form/validate.js\"></script>
  <script src=\"vendor/waypoints/jquery.waypoints.min.js\"></script>
  <script src=\"vendor/counterup/counterup.min.js\"></script>
  <script src=\"vendor/owl.carousel/owl.carousel.min.js\"></script>
  <script src=\"vendor/isotope-layout/isotope.pkgd.min.js\"></script>
  <script src=\"vendor/venobox/venobox.min.js\"></script>
  <script src=\"vendor/aos/aos.js\"></script>
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>

  <!-- Template Main JS File -->
  <script src=\"js/main.js\"></script>
 {% endblock %}
</body>

</html>", "base.html.twig", "C:\\xampp\\htdocs\\PIDEVF1\\templates\\base.html.twig");
    }
}
