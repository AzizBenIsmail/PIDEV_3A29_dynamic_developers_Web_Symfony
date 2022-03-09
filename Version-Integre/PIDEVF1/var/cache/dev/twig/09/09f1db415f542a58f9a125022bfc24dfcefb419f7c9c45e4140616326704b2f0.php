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

/* Back/Back.html.twig */
class __TwigTemplate_0b629dd14266eef0697395e34f0c6431dab3e0cca877b491c8acb1d5bdf0c9fb extends Template
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
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/Back.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/Back.html.twig"));

        // line 1
        echo "    <!DOCTYPE html>
<html lang=\"en\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <!-- plugins:css -->
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/travel.ico"), "html", null, true);
        echo "\">
    <!-- Favicon -->
  ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 29
        echo "
    



    <body xmlns=\"http://www.w3.org/1999/html\">

        <!-- partial:partials/_navbar.html -->
        <nav class=\"navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row\">
            <div class=\"text-center navbar-brand-wrapper d-flex align-items-center justify-content-start\">
                <div class=\"me-3\">
                    <button class=\"navbar-toggler navbar-toggler align-self-center\" type=\"button\" data-bs-toggle=\"minimize\">
                        <span class=\"icon-menu\"></span>
                    </button>
                </div>
                <div>
                    <a class=\"navbar-brand brand-logo\" href=\"index.html\">
                        <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/images/logo.svg"), "html", null, true);
        echo "\" alt=\"logo\" />
                    </a>
                    <a class=\"navbar-brand brand-logo-mini\" href=\"index.html\">
                        <img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/images/logo-mini.svg"), "html", null, true);
        echo "images/logo-mini.svg\" alt=\"logo\" />
                    </a>
                </div>
            </div>
            <div class=\"navbar-menu-wrapper d-flex align-items-top\">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item font-weight-semibold d-none d-lg-block ms-0\">
                        <h1 class=\"welcome-text\">Good Morning, <span class=\"text-black fw-bold\">Travel me</span></h1>
                        <h3 class=\"welcome-sub-text\">Your performance summary this week </h3>
                    </li>
                </ul>
                ";
        // line 62
        echo "<ul class=\"navbar-nav ms-auto\">
                    <li><a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
        echo "\" ><img src=\"https://img.icons8.com/external-kmg-design-outline-color-kmg-design/32/000000/external-log-out-user-interface-kmg-design-outline-color-kmg-design.png\"/></a></li>

                    <li class=\"nav-item dropdown d-none d-lg-block\">

                    <a class=\"nav-link dropdown-bordered dropdown-toggle dropdown-toggle-split\" id=\"messageDropdown\" href=\"#\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"> Select Category </a>

                        <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0\" aria-labelledby=\"messageDropdown\">

                            <a class=\"dropdown-item py-3\" >
                                <p class=\"mb-0 font-weight-medium float-left\">Select category</p>
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item preview-item\" href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_index");
        echo "\">
                                <div class=\"preview-item-content flex-grow py-2\" >
                                    <p class=\"preview-subject ellipsis font-weight-medium text-dark\" >    liste de tous les Users </p>
                                </div>
                            </a>
                            <a class=\"dropdown-item preview-item\" href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyage_index");
        echo "\">
                                <div class=\"preview-item-content flex-grow py-2\" >
                                    <p class=\"preview-subject ellipsis font-weight-medium text-dark\" >    liste de tous les voyage </p>
                                </div>
                            </a>
                            <a class=\"dropdown-item preview-item\" href=\"\">
                                <div class=\"preview-item-content flex-grow py-2\" >
                                    <p class=\"preview-subject ellipsis font-weight-medium text-dark\" >    liste de tous les excursion </p>
                                </div>
                            </a>
                            <a class=\"dropdown-item preview-item\" href=\"\">
                                <div class=\"preview-item-content flex-grow py-2\">
                                    <p class=\"preview-subject ellipsis font-weight-medium text-dark\" \"> liste de tous les restaurant </p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class=\"nav-item d-none d-lg-block\">
                        <div id=\"datepicker-popup\" class=\"input-group date datepicker navbar-date-picker\">
              <span class=\"input-group-addon input-group-prepend border-right\">
                <span class=\"icon-calendar input-group-text calendar-icon\"></span>
              </span>
                            <input type=\"text\" class=\"form-control\">
                        </div>
                    </li>
                    <li class=\"nav-item\">
                        <form class=\"search-form\" action=\"#\">
                            <i class=\"icon-search\"></i>
                            <input type=\"search\" class=\"form-control\" placeholder=\"Search Here\" title=\"Search here\">
                        </form>
                    </li>
                    ";
        // line 112
        echo "<li class=\"nav-item dropdown\">
                        <a class=\"nav-link count-indicator\" id=\"notificationDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
                            <i class=\"icon-mail icon-lg\"></i>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0\" aria-labelledby=\"notificationDropdown\">
                            <a class=\"dropdown-item py-3 border-bottom\">
                                <p class=\"mb-0 font-weight-medium float-left\">You have 4 new notifications </p>
                                <span class=\"badge badge-pill badge-primary float-right\">View all</span>
                            </a>
                            <a class=\"dropdown-item preview-item py-3\">
                                <div class=\"preview-thumbnail\">
                                    <i class=\"mdi mdi-alert m-auto text-primary\"></i>
                                </div>
                                <div class=\"preview-item-content\">
                                    <h6 class=\"preview-subject fw-normal text-dark mb-1\">Application Error</h6>
                                    <p class=\"fw-light small-text mb-0\"> Just now </p>
                                </div>
                            </a>
                            <a class=\"dropdown-item preview-item py-3\">
                                <div class=\"preview-thumbnail\">
                                    <i class=\"mdi mdi-settings m-auto text-primary\"></i>
                                </div>
                                <div class=\"preview-item-content\">
                                    <h6 class=\"preview-subject fw-normal text-dark mb-1\">Settings</h6>
                                    <p class=\"fw-light small-text mb-0\"> Private message </p>
                                </div>
                            </a>
                            <a class=\"dropdown-item preview-item py-3\">
                                <div class=\"preview-thumbnail\">
                                    <i class=\"mdi mdi-airballoon m-auto text-primary\"></i>
                                </div>
                                <div class=\"preview-item-content\">
                                    <h6 class=\"preview-subject fw-normal text-dark mb-1\">New user registration</h6>
                                    <p class=\"fw-light small-text mb-0\"> 2 days ago </p>
                                </div>
                            </a>
                        </div>
                    </li>
                    ";
        // line 152
        echo "<li class=\"nav-item dropdown\">
                        <a class=\"nav-link count-indicator\" id=\"countDropdown\" href=\"#\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            <i class=\"icon-bell\"></i>
                            <span class=\"count\"></span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0\" aria-labelledby=\"countDropdown\">
                            <a class=\"dropdown-item py-3\">
                                <p class=\"mb-0 font-weight-medium float-left\">You have 7 unread mails </p>
                                <span class=\"badge badge-pill badge-primary float-right\">View all</span>
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item preview-item\">
                                <div class=\"preview-thumbnail\">
                                    <img src=\"images/faces/face10.jpg\" alt=\"image\" class=\"img-sm profile-pic\">
                                </div>
                                <div class=\"preview-item-content flex-grow py-2\">
                                    <p class=\"preview-subject ellipsis font-weight-medium text-dark\">Marian Garner </p>
                                    <p class=\"fw-light small-text mb-0\"> The meeting is cancelled </p>
                                </div>
                            </a>
                            <a class=\"dropdown-item preview-item\">
                                <div class=\"preview-thumbnail\">
                                    <img src=\"images/faces/face12.jpg\" alt=\"image\" class=\"img-sm profile-pic\">
                                </div>
                                <div class=\"preview-item-content flex-grow py-2\">
                                    <p class=\"preview-subject ellipsis font-weight-medium text-dark\">David Grey </p>
                                    <p class=\"fw-light small-text mb-0\"> The meeting is cancelled </p>
                                </div>
                            </a>
                            <a class=\"dropdown-item preview-item\">
                                <div class=\"preview-thumbnail\">
                                    <img src=\"images/faces/face1.jpg\" alt=\"image\" class=\"img-sm profile-pic\">
                                </div>
                                <div class=\"preview-item-content flex-grow py-2\">
                                    <p class=\"preview-subject ellipsis font-weight-medium text-dark\">Travis Jenkins </p>
                                    <p class=\"fw-light small-text mb-0\"> The meeting is cancelled </p>
                                </div>
                            </a>
                        </div>
                    </li>
     ";
        // line 193
        echo "<li class=\"nav-item dropdown d-none d-lg-block user-dropdown\">
                        <a class=\"nav-link\" id=\"UserDropdown\" href=\"#\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            <img class=\"img-xs rounded-circle\" src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/images/faces/face8.jpg"), "html", null, true);
        echo "\" alt=\"Profile image\"> </a>
                        <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"UserDropdown\">
                            <div class=\"dropdown-header text-center\">
                                <img class=\"img-md rounded-circle\" src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/images/faces/face8.jpg"), "html", null, true);
        echo "\" alt=\"Profile image\">
                                <p class=\"mb-1 mt-3 font-weight-semibold\">Allen Moreno</p>
                                <p class=\"fw-light text-muted mb-0\">allenmoreno@gmail.com</p>
                            </div>
                            <a class=\"dropdown-item\" href=\"";
        // line 202
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_index");
        echo "\"><i class=\"dropdown-item-icon mdi mdi-account-outline text-primary me-2\" ></i> My Profile <span class=\"badge badge-pill badge-danger\">1</span></a>
                            <a class=\"dropdown-item\"><i class=\"dropdown-item-icon mdi mdi-message-text-outline text-primary me-2\"></i> Messages</a>
                            <a class=\"dropdown-item\"><i class=\"dropdown-item-icon mdi mdi-calendar-check-outline text-primary me-2\"></i> Activity</a>
                            <a class=\"dropdown-item\"><i class=\"dropdown-item-icon mdi mdi-help-circle-outline text-primary me-2\"></i> FAQ</a>
                            <a class=\"dropdown-item\"><i class=\"dropdown-item-icon mdi mdi-power text-primary me-2\"></i>Sign Out</a>
                        </div>
                    </li>
                </ul>
                <button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\" data-bs-toggle=\"offcanvas\">
                    <span class=\"mdi mdi-menu\"></span>
                </button>
            </div>
        </nav>
        ";
        // line 216
        echo "<!-- partial -->
        <div class=\"container-fluid page-body-wrapper\">
            <!-- partial:partials/_settings-panel.html -->
            <div class=\"theme-setting-wrapper\">
                <div id=\"settings-trigger\"><i class=\"ti-settings\"></i></div>
                <div id=\"theme-settings\" class=\"settings-panel\">
                    <i class=\"settings-close ti-close\"></i>
                    <p class=\"settings-heading\">SIDEBAR SKINS</p>
                    <div class=\"sidebar-bg-options selected\" id=\"sidebar-light-theme\"><div class=\"img-ss rounded-circle bg-light border me-3\"></div>Light</div>
                    <div class=\"sidebar-bg-options\" id=\"sidebar-dark-theme\"><div class=\"img-ss rounded-circle bg-dark border me-3\"></div>Dark</div>
                    <p class=\"settings-heading mt-2\">HEADER SKINS</p>
                    <div class=\"color-tiles mx-0 px-4\">
                        <div class=\"tiles success\"></div>
                        <div class=\"tiles warning\"></div>
                        <div class=\"tiles danger\"></div>
                        <div class=\"tiles info\"></div>
                        <div class=\"tiles dark\"></div>
                        <div class=\"tiles default\"></div>
                    </div>
                </div>
            </div>
            ";
        // line 240
        echo "<!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
                <ul class=\"nav\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 245
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back");
        echo "\">
                            <i class=\"mdi mdi-grid-large menu-icon\"></i>
                            <span class=\"menu-title\">Dashboard</span>
                        </a>
                    </li>
                    <li class=\"nav-item nav-category\">UI Elements</li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#ui-basic\" aria-expanded=\"false\" aria-controls=\"ui-basic\" >
                            <i class=\"menu-icon mdi mdi-floor-plan\"></i>
                            <span class=\"menu-title\">RESERATION</span>
                            <i class=\"menu-arrow\"></i>
                        </a>
                        <div class=\"collapse\" id=\"ui-basic\">
                            <ul class=\"nav flex-column sub-menu\">
                                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"\">Reservation Restaurant</a></li>
                                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"\">Reservation Excursion</a></li>
                                <li class=\"nav-item\"> <a class=\"nav-link\"  href=\"";
        // line 261
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_voyage_index");
        echo "\" >Reservation Voyage</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class=\"nav-item nav-category\">Forms and Datas</li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#tables\" aria-expanded=\"false\" aria-controls=\"tables\">
                            <i class=\"menu-icon mdi mdi-table\"></i>
                            <span class=\"menu-title\">Tables</span>
                            <i class=\"menu-arrow\"></i>
                        </a>
                        <div class=\"collapse\" id=\"tables\">
                            <ul class=\"nav flex-column sub-menu\">
                                <li class=\"nav-item\"> <a class=\"nav-link\"  href=\"";
        // line 275
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_index");
        echo "\">Client </a></li>
                            </ul>
                            <ul class=\"nav flex-column sub-menu\">
                                <li class=\"nav-item\"> <a class=\"nav-link\"  href=\"\">Commentaire</a></li>
                            </ul>
                            <ul class=\"nav flex-column sub-menu\">
                                <li class=\"nav-item\"> <a class=\"nav-link\"  href=\"";
        // line 281
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyage_index");
        echo ">Voyage</a></li>
                            </ul>
                            <ul class=\"nav flex-column sub-menu\">
                                <li class=\"nav-item\"> <a class=\"nav-link\"  href=\"\">Restaurant</a></li>
                            </ul>
                            <ul class=\"nav flex-column sub-menu\">
                                <li class=\"nav-item\"> <a class=\"nav-link\"  href=\"\">Excursion</a></li>
                            </ul><ul class=\"nav flex-column sub-menu\">
                                <li class=\"nav-item\"> <a class=\"nav-link\"  href=\"\">reclamation</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#icons\" aria-expanded=\"false\" aria-controls=\"icons\">
                            <i class=\"menu-icon mdi mdi-layers-outline\"></i>
                            <span class=\"menu-title\">Icons</span>
                            <i class=\"menu-arrow\"></i>
                        </a>
                        <div class=\"collapse\" id=\"icons\">
                            <ul class=\"nav flex-column sub-menu\">
                                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"pages/icons/mdi.html\">Mdi icons</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class=\"nav-item nav-category\">pages</li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#auth\" aria-expanded=\"false\" aria-controls=\"auth\">
                            <i class=\"menu-icon mdi mdi-account-circle-outline\"></i>
                            <span class=\"menu-title\">User Pages</span>
                            <i class=\"menu-arrow\"></i>
                        </a>
                        <div class=\"collapse\" id=\"auth\">
                            <ul class=\"nav flex-column sub-menu\">
                                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"pages/samples/login.html\"> Login </a></li>
                            </ul>
                        </div>
                    </li>
                    <li class=\"nav-item nav-category\">help</li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"http://bootstrapdash.com/demo/star-admin2-free/docs/documentation.html\">
                            <i class=\"menu-icon mdi mdi-file-document\"></i>
                            <span class=\"menu-title\">Documentation</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- partial -->
            <div class=\"main-panel\">
                <div class=\"content-wrapper\">
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <div class=\"home-tab\">
                                <div class=\"d-sm-flex align-items-center justify-content-between border-bottom\">
                                    <ul class=\"nav nav-tabs\" role=\"tablist\">
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link active ps-0\" id=\"home-tab\" data-bs-toggle=\"tab\" href=\"#overview\" role=\"tab\" aria-controls=\"overview\" aria-selected=\"true\">Overview</a>
                                        </li>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" id=\"profile-tab\" data-bs-toggle=\"tab\" href=\"#audiences\" role=\"tab\" aria-selected=\"false\">Audiences</a>
                                        </li>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" id=\"contact-tab\" data-bs-toggle=\"tab\" href=\"#demographics\" role=\"tab\" aria-selected=\"false\">Demographics</a>
                                        </li>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link border-0\" id=\"more-tab\" data-bs-toggle=\"tab\" href=\"#more\" role=\"tab\" aria-selected=\"false\">More</a>
                                        </li>
                                    </ul>
                                    <div>
                                        <div class=\"btn-wrapper\">
                                            <a href=\"#\" class=\"btn btn-otline-dark align-items-center\"><i class=\"icon-share\"></i> Share</a>
                                            <a href=\"#\" class=\"btn btn-otline-dark\"><i class=\"icon-printer\"></i> Print</a>
                                            <a href=\"#\" class=\"btn btn-primary text-white me-0\"><i class=\"icon-download\"></i> Export</a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"tab-content tab-content-basic\">
                                    <div class=\"tab-pane fade show active\" id=\"overview\" role=\"tabpanel\" aria-labelledby=\"overview\">
                                        <div class=\"row\">
                                            <div class=\"col-sm-12\">
                                                <div class=\"statistics-details d-flex align-items-center justify-content-between\">

                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-lg-8 d-flex flex-column\">
                                                <div class=\"row flex-grow\">
                                                    <div class=\"col-12 col-lg-4 col-lg-12 grid-margin stretch-card\">
                                                        <div class=\"card card-rounded\">
                                                            <div class=\"card-body\">
                                                                <div class=\"d-sm-flex justify-content-between align-items-start\">
                                                                    <div>
                                                                        <h4 class=\"card-title card-title-dash\">La liste des Clients</h4>
                                                                        <p class=\"card-subtitle card-subtitle-dash\">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                                                                    </div>
                                                                    <div>
                                                                        <button class=\"btn btn-primary btn-lg text-white mb-0 me-0\" type=\"button\"><i class=\"mdi mdi-account-plus\"></i> <a href=\"";
        // line 377
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_registration");
        echo "\"> Add new Client </a></button>
                                                                    </div>
                                                                </div>
                                                                <div class=\"table-responsive  mt-1\">
                                                                    <table class=\"table\">
                                                                        <thead>
                                                                        <tr>
                                                                            
                                                                            <th>CIN</th>
                                                                            <th>Image</th>
                                                                            <th>UserName</th>
                                                                            <th>Numero</th>
                                                                            <th>Email</th>
                                                                            <th>Adresse</th>
                                                                            <th>actions</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                         ";
        // line 395
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 395, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 396
            echo "                                                                            <tr>
                                                                               
                                                                                <td>";
            // line 398
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "CIN", [], "any", false, false, false, 398), "html", null, true);
            echo "</td>
                                                                                ";
            // line 399
            if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "image", [], "any", false, false, false, 399)), 0))) {
                // line 400
                echo "                                                                                    <td><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["client"], "image", [], "any", false, false, false, 400))), "html", null, true);
                echo "\" width=\"250\" height=\"150\"></td>
                                                                                ";
            } else {
                // line 402
                echo "                                                                                    <td><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . "Not found.jpg")), "html", null, true);
                echo "\" width=\"250\" height=\"150\"></td>
                                                                                ";
            }
            // line 404
            echo "                                                                                <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "UserName", [], "any", false, false, false, 404), "html", null, true);
            echo "</td> 
                                                                                <td>";
            // line 405
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "Numero", [], "any", false, false, false, 405), "html", null, true);
            echo "</td>
                                                                                <td>";
            // line 406
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "Email", [], "any", false, false, false, 406), "html", null, true);
            echo "</td>
                                                                                <td>";
            // line 407
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "Adresse", [], "any", false, false, false, 407), "html", null, true);
            echo "</td>
                                                                                <td>
                                                                                    <a href=\"";
            // line 409
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_show", ["id" => twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 409)]), "html", null, true);
            echo "\"><button>Show</button></a>
                                                                                    <a href=\"";
            // line 410
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 410)]), "html", null, true);
            echo "\"><button class=\"alert-danger\">Supprimer</button></a>
                                                                                </td>
                                                                            </tr>
                                                                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 414
            echo "                                                                            <tr>
                                                                                <td colspan=\"9\">no records found</td>
                                                                            </tr>
                                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 418
        echo "                                                                        </tbody>
                                                                    </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-lg-8 d-flex flex-column\">
                                                <div class=\"row flex-grow\">
                                                    <div class=\"col-12 grid-margin stretch-card\">
                                                        <div class=\"card card-rounded\">
                                                            <div class=\"card-body\">
                                                                <div class=\"d-sm-flex justify-content-between align-items-start\">
                                                                    <div>
                                                                        <h4 class=\"card-title card-title-dash\">La liste des Voyages</h4>
                                                                        <p class=\"card-subtitle card-subtitle-dash\">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                                                                    </div>
                                                                    <div>
                                                                        <button class=\"btn btn-primary btn-lg text-white mb-0 me-0\" type=\"button\"><i class=\"mdi mdi-account-plus\"></i><a href=\"";
        // line 439
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyage_new");
        echo "\">Add new Voyage </a> </button>
                                                                    </div>
                                                                </div>
                                                                <div class=\"table-responsive  mt-1\">
                                                                    <table class=\"table\" >
                                                                        <thead>
                                                                        <tr>
                                                                            <th>Id</th>
                                                                            <th>Image</th>
                                                                            <th>Destination</th>
                                                                            <th>Nom_Voyage</th>
                                                                            <th>Duree_Voyage</th>
                                                                            <th>Prix</th>
                                                                            <th>Date</th>
                                                                            <th>Valabilite</th>
                                                                            <th>actions</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        ";
        // line 458
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["voyages"]) || array_key_exists("voyages", $context) ? $context["voyages"] : (function () { throw new RuntimeError('Variable "voyages" does not exist.', 458, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["voyage"]) {
            // line 459
            echo "                                                                            <tr>
                                                                                <td>";
            // line 460
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "id", [], "any", false, false, false, 460), "html", null, true);
            echo "</td>
                                                                                ";
            // line 461
            if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "image", [], "any", false, false, false, 461)), 0))) {
                // line 462
                echo "                                                                                    <td><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["voyage"], "image", [], "any", false, false, false, 462))), "html", null, true);
                echo "\" width=\"250\" height=\"150\"></td>
                                                                                ";
            } else {
                // line 464
                echo "                                                                                    <td><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . "Not found.jpg")), "html", null, true);
                echo "\" width=\"250\" height=\"150\"></td>
                                                                                ";
            }
            // line 466
            echo "                                                                                <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "Destination", [], "any", false, false, false, 466), "html", null, true);
            echo "</td>
                                                                                <td>";
            // line 467
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "NomVoyage", [], "any", false, false, false, 467), "html", null, true);
            echo "</td>
                                                                                <td>";
            // line 468
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "DureeVoyage", [], "any", false, false, false, 468), "html", null, true);
            echo "</td>
                                                                                <td>";
            // line 469
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "prix", [], "any", false, false, false, 469), "html", null, true);
            echo "</td>
                                                                                <td>";
            // line 470
            ((twig_get_attribute($this->env, $this->source, $context["voyage"], "date", [], "any", false, false, false, 470)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "date", [], "any", false, false, false, 470), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                                                                                <td>";
            // line 471
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "valabilite", [], "any", false, false, false, 471), "html", null, true);
            echo "</td>
                                                                                <td>
                                                                                    <button>  <a href=\"";
            // line 473
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyage_show", ["id" => twig_get_attribute($this->env, $this->source, $context["voyage"], "id", [], "any", false, false, false, 473)]), "html", null, true);
            echo "\">show</a> </button>
                                                                                    <button>   <a href=\"";
            // line 474
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyage_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["voyage"], "id", [], "any", false, false, false, 474)]), "html", null, true);
            echo "\">edit</a></button>
                                                                                </td>
                                                                            </tr>
                                                                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 478
            echo "                                                                            <tr>
                                                                                <td colspan=\"8\">no records found</td>
                                                                            </tr>
                                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voyage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 482
        echo "
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-lg-8 d-flex flex-column\">
                                                <div class=\"row flex-grow\">
                                                    <div class=\"col-12 grid-margin stretch-card\">
                                                        <div class=\"card card-rounded\">
                                                            <div class=\"card-body\">
                                                                <div class=\"d-sm-flex justify-content-between align-items-start\">
                                                                    <div>
                                                                        <h4 class=\"card-title card-title-dash\">La liste des Reservation des Voyages</h4>
                                                                        <p class=\"card-subtitle card-subtitle-dash\">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                                                                    </div>
                                                                    <div>
                                                                        <button class=\"btn btn-primary btn-lg text-white mb-0 me-0\" type=\"button\"><i class=\"mdi mdi-account-plus\"></i><a href=\"";
        // line 504
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_voyage_new");
        echo "\">Add new Reservation Voyage </a> </button>
                                                                    </div>
                                                                </div>
                                                                <div class=\"table-responsive  mt-1\">
                                                                    <table class=\"table\">
                                                                        <tr>
                                                                            <th>Id</th>
                                                                            <th>Voyage</th>
                                                                            <th>Date_Reservation</th>
                                                                            <th>Travel_Class</th>
                                                                            <th>Age</th>
                                                                            <th>actions</th>
                                                                        </tr>
                                                                        ";
        // line 517
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservation_voyages"]) || array_key_exists("reservation_voyages", $context) ? $context["reservation_voyages"] : (function () { throw new RuntimeError('Variable "reservation_voyages" does not exist.', 517, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reservation_voyage"]) {
            // line 518
            echo "                                                                            <tbody>
                                                                            <tr>
                                                                                <td>";
            // line 520
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_voyage"], "id", [], "any", false, false, false, 520), "html", null, true);
            echo "</td>
                                                                                ";
            // line 521
            if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation_voyage"], "voyage", [], "any", false, false, false, 521), "image", [], "any", false, false, false, 521)), 0))) {
                // line 522
                echo "                                                                                    <td><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation_voyage"], "voyage", [], "any", false, false, false, 522), "image", [], "any", false, false, false, 522))), "html", null, true);
                echo "\" width=\"250\" height=\"150\"></td>
                                                                                ";
            } else {
                // line 524
                echo "                                                                                    <td><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . "Not found.jpg")), "html", null, true);
                echo "\" width=\"250\" height=\"150\"></td>
                                                                                ";
            }
            // line 526
            echo "                                                                                <td>";
            ((twig_get_attribute($this->env, $this->source, $context["reservation_voyage"], "DateReservation", [], "any", false, false, false, 526)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_voyage"], "DateReservation", [], "any", false, false, false, 526), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                                                                                <td>";
            // line 527
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_voyage"], "TravelClass", [], "any", false, false, false, 527), "html", null, true);
            echo "</td>
                                                                                <td>";
            // line 528
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_voyage"], "Age", [], "any", false, false, false, 528), "html", null, true);
            echo "</td>
                                                                                <td>
                                                                                    <a href=\"";
            // line 530
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_voyage_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reservation_voyage"], "id", [], "any", false, false, false, 530)]), "html", null, true);
            echo "\">show</a>
                                                                                    <a href=\"";
            // line 531
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_voyage_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["reservation_voyage"], "id", [], "any", false, false, false, 531)]), "html", null, true);
            echo "\">edit</a>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 536
            echo "                                                                            <tr>
                                                                                <td colspan=\"5\">no records found</td>
                                                                            </tr>
                                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation_voyage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 540
        echo "                                                                        </tbody>

                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-lg-8 d-flex flex-column\">
                                                <div class=\"row flex-grow\">
                                                    <div class=\"col-12 grid-margin stretch-card\">
                                                        <div class=\"card card-rounded\">
                                                            <div class=\"card-body\">
                                                                <div class=\"d-sm-flex justify-content-between align-items-start\">
                                                                    <div>
                                                                        <h4 class=\"card-title card-title-dash\">la liste des Restaurants</h4>
                                                                        <p class=\"card-subtitle card-subtitle-dash\">You have 50+ new requests</p>
                                                                    </div>
                                                                    <div>
                                                                        <a href=\"\"> <button class=\"btn btn-primary btn-lg text-white mb-0 me-0\" type=\"button\"><i class=\"mdi mdi-account-plus\"></i>Add new Restaurants</button> </a>
                                                                    </div>
                                                                </div>
                                                                <div class=\"table-responsive  mt-1\">
                                                                    <table class=\"table\">
                                                                        <thead>
                                                                        <tr>
                                                                            <th>Id</th>
                                                                            <th>Image</th>
                                                                            <th>Nom_Restaurant</th>
                                                                            <th>Adresse_Restaurant</th>
                                                                            <th>Num_Tel_Restaurant</th>
                                                                            <th>Description_Restaurant</th>
                                                                            <th>actions</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        ";
        // line 579
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["restaurants"]) || array_key_exists("restaurants", $context) ? $context["restaurants"] : (function () { throw new RuntimeError('Variable "restaurants" does not exist.', 579, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["restaurant"]) {
            // line 580
            echo "                                                                            <tr>
                                                                                <td>";
            // line 581
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurant"], "id", [], "any", false, false, false, 581), "html", null, true);
            echo "</td>
                                                                                ";
            // line 582
            if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurant"], "Image", [], "any", false, false, false, 582)), 0))) {
                // line 583
                echo "                                                                                    <td><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["restaurant"], "Image", [], "any", false, false, false, 583))), "html", null, true);
                echo "\" width=\"250\" height=\"150\"></td>
                                                                                ";
            } else {
                // line 585
                echo "                                                                                    <td><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . "Not found.jpg")), "html", null, true);
                echo "\" width=\"250\" height=\"150\"></td>
                                                                                ";
            }
            // line 587
            echo "                                                                                <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurant"], "NomRestaurant", [], "any", false, false, false, 587), "html", null, true);
            echo "</td>
                                                                                <td>";
            // line 588
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurant"], "AdresseRestaurant", [], "any", false, false, false, 588), "html", null, true);
            echo "</td>
                                                                                <td>";
            // line 589
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurant"], "NumTelRestaurant", [], "any", false, false, false, 589), "html", null, true);
            echo "</td>
                                                                                <td>";
            // line 590
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurant"], "DescriptionRestaurant", [], "any", false, false, false, 590), "html", null, true);
            echo "</td>
                                                                                <td>
                                                                                    <a href=\"";
            // line 592
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("restaurant_show", ["id" => twig_get_attribute($this->env, $this->source, $context["restaurant"], "id", [], "any", false, false, false, 592)]), "html", null, true);
            echo "\">show</a>
                                                                                    <a href=\"";
            // line 593
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("restaurant_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["restaurant"], "id", [], "any", false, false, false, 593)]), "html", null, true);
            echo "\">edit</a>
                                                                                </td>
                                                                            </tr>
                                                                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 597
            echo "                                                                            <tr>
                                                                                <td colspan=\"7\">no records found</td>
                                                                            </tr>
                                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['restaurant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 601
        echo "                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"row\">
                                            <div class=\"col-lg-8 d-flex flex-column\">
                                                <div class=\"row flex-grow\">
                                                    <div class=\"col-12 grid-margin stretch-card\">
                                                        <div class=\"card card-rounded\">
                                                            <div class=\"card-body\">
                                                                <div class=\"d-sm-flex justify-content-between align-items-start\">
                                                                    <div>
                                                                        <h4 class=\"card-title card-title-dash\">la liste des Excursion</h4>
                                                                        <p class=\"card-subtitle card-subtitle-dash\">You have 50+ new requests</p>
                                                                    </div>
                                                                    <div>
                                                                        <a href=\"";
        // line 623
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("excursion_new");
        echo "\"> <button class=\"btn btn-primary btn-lg text-white mb-0 me-0\" type=\"button\"><i class=\"mdi mdi-account-plus\"></i>Add new EXcursion</button> </a>
                                                                    </div>
                                                                </div>
                                                                <div class=\"table-responsive  mt-1\">
                                                                    <table class=\"table\">
                                                                    <thead>
                                                                    <tr>
                                                                        <th>Id</th>
                                                                        <th>Nom_Excursion</th>
                                                                        <th>Description_Excursion</th>
                                                                        <th>Date</th>
                                                                        <th>Type_Excursion</th>
                                                                        <th>Lieu</th>
                                                                        <th>Valabilite</th>
                                                                        <th>Image</th>
                                                                        <th>actions</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    ";
        // line 642
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["excursions"]) || array_key_exists("excursions", $context) ? $context["excursions"] : (function () { throw new RuntimeError('Variable "excursions" does not exist.', 642, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["excursion"]) {
            // line 643
            echo "                                                                        <tr>
                                                                            <td>";
            // line 644
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["excursion"], "id", [], "any", false, false, false, 644), "html", null, true);
            echo "</td>
                                                                            <td>";
            // line 645
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["excursion"], "NomExcursion", [], "any", false, false, false, 645), "html", null, true);
            echo "</td>
                                                                            <td>";
            // line 646
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["excursion"], "DescriptionExcursion", [], "any", false, false, false, 646), "html", null, true);
            echo "</td>
                                                                            <td>";
            // line 647
            ((twig_get_attribute($this->env, $this->source, $context["excursion"], "Date", [], "any", false, false, false, 647)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["excursion"], "Date", [], "any", false, false, false, 647), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                                                                            <td>";
            // line 648
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["excursion"], "TypeExcursion", [], "any", false, false, false, 648), "html", null, true);
            echo "</td>
                                                                            <td>";
            // line 649
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["excursion"], "Lieu", [], "any", false, false, false, 649), "html", null, true);
            echo "</td>
                                                                            <td>";
            // line 650
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["excursion"], "valabilite", [], "any", false, false, false, 650), "html", null, true);
            echo "</td>
                                                                            <td>";
            // line 651
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["excursion"], "Image", [], "any", false, false, false, 651), "html", null, true);
            echo "</td>
                                                                            <td>
                                                                                <a href=\"";
            // line 653
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("excursion_show", ["id" => twig_get_attribute($this->env, $this->source, $context["excursion"], "id", [], "any", false, false, false, 653)]), "html", null, true);
            echo "\">show</a>
                                                                                <a href=\"";
            // line 654
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("excursion_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["excursion"], "id", [], "any", false, false, false, 654)]), "html", null, true);
            echo "\">edit</a>
                                                                            </td>
                                                                        </tr>
                                                                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 658
            echo "                                                                        <tr>
                                                                            <td colspan=\"9\">no records found</td>
                                                                        </tr>
                                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['excursion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 662
        echo "                                                                    </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-lg-8 d-flex flex-column\">
                                                <div class=\"row flex-grow\">
                                                    <div class=\"col-12 grid-margin stretch-card\">
                                                        <div class=\"card card-rounded\">
                                                            <div class=\"card-body\">
                                                                <div class=\"d-sm-flex justify-content-between align-items-start\">
                                                                    <div>
                                                                        <h4 class=\"card-title card-title-dash\">la liste des Resrvation des excursion</h4>
                                                                        <p class=\"card-subtitle card-subtitle-dash\">You have 50+ new requests</p>
                                                                    </div>
                                                                    <div>
                                                                        <a href=\"";
        // line 683
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_excursion_new");
        echo "\"> <button class=\"btn btn-primary btn-lg text-white mb-0 me-0\" type=\"button\"><i class=\"mdi mdi-account-plus\"></i>Add new Excursion</button> </a>
                                                                    </div>
                                                                </div>
                                                                <div class=\"table-responsive  mt-1\">
                                                                    <table class=\"table\">
                                                                        <thead>
                                                                        <tr>
                                                                            <th>Id</th>
                                                                            <th>Date_Reservation_Excursion</th>
                                                                            <th>actions</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        ";
        // line 696
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservation_excursions"]) || array_key_exists("reservation_excursions", $context) ? $context["reservation_excursions"] : (function () { throw new RuntimeError('Variable "reservation_excursions" does not exist.', 696, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reservation_excursion"]) {
            // line 697
            echo "                                                                            <tr>
                                                                                <td>";
            // line 698
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_excursion"], "id", [], "any", false, false, false, 698), "html", null, true);
            echo "</td>
                                                                                <td>";
            // line 699
            ((twig_get_attribute($this->env, $this->source, $context["reservation_excursion"], "DateReservationExcursion", [], "any", false, false, false, 699)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_excursion"], "DateReservationExcursion", [], "any", false, false, false, 699), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                                                                                <td>
                                                                                    <a href=\"";
            // line 701
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_excursion_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reservation_excursion"], "id", [], "any", false, false, false, 701)]), "html", null, true);
            echo "\">show</a>
                                                                                    <a href=\"";
            // line 702
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_excursion_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["reservation_excursion"], "id", [], "any", false, false, false, 702)]), "html", null, true);
            echo "\">edit</a>
                                                                                </td>
                                                                            </tr>
                                                                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 706
            echo "                                                                            <tr>
                                                                                <td colspan=\"3\">no records found</td>
                                                                            </tr>
                                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation_excursion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 710
        echo "                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-lg-8 d-flex flex-column\">
                                                <div class=\"row flex-grow\">
                                                    <div class=\"col-12 grid-margin stretch-card\">
                                                        <div class=\"card card-rounded\">
                                                            <div class=\"card-body\">
                                                                <div class=\"d-sm-flex justify-content-between align-items-start\">
                                                                    <div>
                                                                        <h4 class=\"card-title card-title-dash\">la liste des Reclamation</h4>
                                                                        <p class=\"card-subtitle card-subtitle-dash\">You have 50+ new requests</p>
                                                                    </div>
                                                                    <div>
                                                                        <a href=\"";
        // line 731
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_new");
        echo "\"> <button class=\"btn btn-primary btn-lg text-white mb-0 me-0\" type=\"button\"><i class=\"mdi mdi-account-plus\"></i>Add new Reclamation</button> </a>
                                                                    </div>
                                                                </div>
                                                                <div class=\"table-responsive  mt-1\">
                                                                    <table class=\"table\">
                                                                        <thead>
                                                                        <tr>
                                                                            <th>Id</th>
                                                                            <th>Objet</th>
                                                                            <th>Type_De_Reclamation</th>
                                                                            <th>Description_Reclamation</th>
                                                                            <th>Date</th>
                                                                            <th>actions</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        ";
        // line 747
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 747, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 748
            echo "                                                                            <tr>
                                                                                <td>";
            // line 749
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 749), "html", null, true);
            echo "</td>
                                                                                <td>";
            // line 750
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "Objet", [], "any", false, false, false, 750), "html", null, true);
            echo "</td>
                                                                                <td>";
            // line 751
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "TypeDeReclamation", [], "any", false, false, false, 751), "html", null, true);
            echo "</td>
                                                                                <td>";
            // line 752
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "DescriptionReclamation", [], "any", false, false, false, 752), "html", null, true);
            echo "</td>
                                                                                <td>";
            // line 753
            ((twig_get_attribute($this->env, $this->source, $context["reclamation"], "Date", [], "any", false, false, false, 753)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "Date", [], "any", false, false, false, 753), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                                                                                <td>
                                                                                    <a href=\"";
            // line 755
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 755)]), "html", null, true);
            echo "\">show</a>
                                                                                    <a href=\"";
            // line 756
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 756)]), "html", null, true);
            echo "\">edit</a>
                                                                                </td>
                                                                            </tr>
                                                                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 760
            echo "                                                                            <tr>
                                                                                <td colspan=\"6\">no records found</td>
                                                                            </tr>
                                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclamation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 764
        echo "                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-lg-8 d-flex flex-column\">
                                                <div class=\"row flex-grow\">
                                                    <div class=\"col-12 grid-margin stretch-card\">
                                                        <div class=\"card card-rounded\">
                                                            <div class=\"card-body\">
                                                                <div class=\"d-sm-flex justify-content-between align-items-start\">
                                                                    <div>
                                                                        <h4 class=\"card-title card-title-dash\">la liste des commentaires</h4>
                                                                        <p class=\"card-subtitle card-subtitle-dash\">You have 50+ new requests</p>
                                                                    </div>
                                                                    <div>
                                                                        <a href=\"";
        // line 785
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commentaire_new");
        echo "\"> <button class=\"btn btn-primary btn-lg text-white mb-0 me-0\" type=\"button\"><i class=\"mdi mdi-account-plus\"></i>Add new commentaires</button> </a>
                                                                    </div>
                                                                </div>
                                                                <div class=\"table-responsive  mt-1\">
                                                                    <table class=\"table\">
                                                                        <thead>
                                                                        <tr>
                                                                            <th>Id</th>
                                                                            <th>Objet</th>
                                                                            <th>Commentaire</th>
                                                                            <th>actions</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        ";
        // line 799
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new RuntimeError('Variable "commentaires" does not exist.', 799, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 800
            echo "                                                                            <tr>
                                                                                <td>";
            // line 801
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 801), "html", null, true);
            echo "</td>
                                                                                <td>";
            // line 802
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "Objet", [], "any", false, false, false, 802), "html", null, true);
            echo "</td>
                                                                                <td>";
            // line 803
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "Commentaire", [], "any", false, false, false, 803), "html", null, true);
            echo "</td>
                                                                                <td>
                                                                                    <a href=\"";
            // line 805
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commentaire_show", ["id" => twig_get_attribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 805)]), "html", null, true);
            echo "\">show</a>
                                                                                    <a href=\"";
            // line 806
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commentaire_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 806)]), "html", null, true);
            echo "\">edit</a>
                                                                                </td>
                                                                            </tr>
                                                                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 810
            echo "                                                                            <tr>
                                                                                <td colspan=\"4\">no records found</td>
                                                                            </tr>
                                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 814
        echo "                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class=\"footer\">
                    <div class=\"d-sm-flex justify-content-center justify-content-sm-between\">
                        <span class=\"text-muted text-center text-sm-left d-block d-sm-inline-block\">Premium <a href=\"https://www.bootstrapdash.com/\" target=\"_blank\">Bootstrap admin template</a> from BootstrapDash.</span>
                        <span class=\"float-none float-sm-right d-block mt-1 mt-sm-0 text-center\">Copyright © 2021. All rights reserved.</span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    ";
        // line 846
        $this->displayBlock('js', $context, $blocks);
        // line 873
        echo "</head>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Travel me ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendors/feather/feather.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendors/mdi/css/materialdesignicons.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendors/ti-icons/css/themify-icons.css"), "html", null, true);
        echo " \">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendors/typicons/typicons.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendors/simple-line-icons/css/simple-line-icons.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendors/css/vendor.bundle.base.css"), "html", null, true);
        echo "\">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendors/datatables.net-bs4/dataTables.bootstrap4.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/js/select.dataTables.min.css"), "html", null, true);
        echo "\">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/css/vertical-layout-light/style.css"), "html", null, true);
        echo "\">
    <!-- endinject -->

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 846
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 847
        echo "    <!-- plugins:js -->
    <script src=\"";
        // line 848
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendors/js/vendor.bundle.base.js"), "html", null, true);
        echo "\"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src=\"";
        // line 851
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendors/chart.js/Chart.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 852
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 853
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendors/progressbar.js/progressbar.min.js"), "html", null, true);
        echo "\"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src=\"";
        // line 857
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/js/off-canvas.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 858
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/js/hoverable-collapse.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 859
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/js/template.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 860
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/js/settings.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 861
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/js/todolist.js"), "html", null, true);
        echo "\"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src=\"";
        // line 864
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/js/jquery.cookie.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 865
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/js/dashboard.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 866
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/js/Chart.roundedBarCharts.js"), "html", null, true);
        echo "\"></script>
    <!-- End custom js for this page-->
    </body>

    </html>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Back/Back.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1428 => 866,  1424 => 865,  1420 => 864,  1414 => 861,  1410 => 860,  1406 => 859,  1402 => 858,  1398 => 857,  1391 => 853,  1387 => 852,  1383 => 851,  1377 => 848,  1374 => 847,  1364 => 846,  1350 => 25,  1344 => 22,  1340 => 21,  1334 => 18,  1330 => 17,  1326 => 16,  1322 => 15,  1318 => 14,  1313 => 13,  1303 => 12,  1284 => 8,  1272 => 873,  1270 => 846,  1236 => 814,  1227 => 810,  1218 => 806,  1214 => 805,  1209 => 803,  1205 => 802,  1201 => 801,  1198 => 800,  1193 => 799,  1176 => 785,  1153 => 764,  1144 => 760,  1135 => 756,  1131 => 755,  1126 => 753,  1122 => 752,  1118 => 751,  1114 => 750,  1110 => 749,  1107 => 748,  1102 => 747,  1083 => 731,  1060 => 710,  1051 => 706,  1042 => 702,  1038 => 701,  1033 => 699,  1029 => 698,  1026 => 697,  1021 => 696,  1005 => 683,  982 => 662,  973 => 658,  964 => 654,  960 => 653,  955 => 651,  951 => 650,  947 => 649,  943 => 648,  939 => 647,  935 => 646,  931 => 645,  927 => 644,  924 => 643,  919 => 642,  897 => 623,  873 => 601,  864 => 597,  855 => 593,  851 => 592,  846 => 590,  842 => 589,  838 => 588,  833 => 587,  827 => 585,  821 => 583,  819 => 582,  815 => 581,  812 => 580,  807 => 579,  766 => 540,  757 => 536,  747 => 531,  743 => 530,  738 => 528,  734 => 527,  729 => 526,  723 => 524,  717 => 522,  715 => 521,  711 => 520,  707 => 518,  702 => 517,  686 => 504,  662 => 482,  653 => 478,  644 => 474,  640 => 473,  635 => 471,  631 => 470,  627 => 469,  623 => 468,  619 => 467,  614 => 466,  608 => 464,  602 => 462,  600 => 461,  596 => 460,  593 => 459,  588 => 458,  566 => 439,  543 => 418,  534 => 414,  525 => 410,  521 => 409,  516 => 407,  512 => 406,  508 => 405,  503 => 404,  497 => 402,  491 => 400,  489 => 399,  485 => 398,  481 => 396,  476 => 395,  455 => 377,  356 => 281,  347 => 275,  330 => 261,  311 => 245,  304 => 240,  281 => 216,  265 => 202,  258 => 198,  252 => 195,  248 => 193,  206 => 152,  166 => 112,  132 => 80,  124 => 75,  109 => 63,  106 => 62,  92 => 49,  86 => 46,  67 => 29,  65 => 12,  60 => 10,  55 => 8,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    <!DOCTYPE html>
<html lang=\"en\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>{% block title %} Travel me {% endblock%}</title>
    <!-- plugins:css -->
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"{{ asset('Front/img/travel.ico')}}\">
    <!-- Favicon -->
  {% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{asset('Back/vendors/feather/feather.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('Back/vendors/mdi/css/materialdesignicons.min.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('Back/vendors/ti-icons/css/themify-icons.css')}} \">
    <link rel=\"stylesheet\" href=\"{{asset('Back/vendors/typicons/typicons.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('Back/vendors/simple-line-icons/css/simple-line-icons.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('Back/vendors/css/vendor.bundle.base.css')}}\">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel=\"stylesheet\" href=\"{{asset('Back/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('Back/js/select.dataTables.min.css')}}\">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel=\"stylesheet\" href=\"{{asset('Back/css/vertical-layout-light/style.css')}}\">
    <!-- endinject -->

    {% endblock %}

    



    <body xmlns=\"http://www.w3.org/1999/html\">

        <!-- partial:partials/_navbar.html -->
        <nav class=\"navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row\">
            <div class=\"text-center navbar-brand-wrapper d-flex align-items-center justify-content-start\">
                <div class=\"me-3\">
                    <button class=\"navbar-toggler navbar-toggler align-self-center\" type=\"button\" data-bs-toggle=\"minimize\">
                        <span class=\"icon-menu\"></span>
                    </button>
                </div>
                <div>
                    <a class=\"navbar-brand brand-logo\" href=\"index.html\">
                        <img src=\"{{ asset('Back/images/logo.svg') }}\" alt=\"logo\" />
                    </a>
                    <a class=\"navbar-brand brand-logo-mini\" href=\"index.html\">
                        <img src=\"{{ asset('Back/images/logo-mini.svg') }}images/logo-mini.svg\" alt=\"logo\" />
                    </a>
                </div>
            </div>
            <div class=\"navbar-menu-wrapper d-flex align-items-top\">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item font-weight-semibold d-none d-lg-block ms-0\">
                        <h1 class=\"welcome-text\">Good Morning, <span class=\"text-black fw-bold\">Travel me</span></h1>
                        <h3 class=\"welcome-sub-text\">Your performance summary this week </h3>
                    </li>
                </ul>
                {# -------------------------------------partie category------------------------------------------------#}

                <ul class=\"navbar-nav ms-auto\">
                    <li><a href=\"{{ path('security_logout') }}\" ><img src=\"https://img.icons8.com/external-kmg-design-outline-color-kmg-design/32/000000/external-log-out-user-interface-kmg-design-outline-color-kmg-design.png\"/></a></li>

                    <li class=\"nav-item dropdown d-none d-lg-block\">

                    <a class=\"nav-link dropdown-bordered dropdown-toggle dropdown-toggle-split\" id=\"messageDropdown\" href=\"#\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"> Select Category </a>

                        <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0\" aria-labelledby=\"messageDropdown\">

                            <a class=\"dropdown-item py-3\" >
                                <p class=\"mb-0 font-weight-medium float-left\">Select category</p>
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item preview-item\" href=\"{{ path('client_index') }}\">
                                <div class=\"preview-item-content flex-grow py-2\" >
                                    <p class=\"preview-subject ellipsis font-weight-medium text-dark\" >    liste de tous les Users </p>
                                </div>
                            </a>
                            <a class=\"dropdown-item preview-item\" href=\"{{ path('voyage_index') }}\">
                                <div class=\"preview-item-content flex-grow py-2\" >
                                    <p class=\"preview-subject ellipsis font-weight-medium text-dark\" >    liste de tous les voyage </p>
                                </div>
                            </a>
                            <a class=\"dropdown-item preview-item\" href=\"\">
                                <div class=\"preview-item-content flex-grow py-2\" >
                                    <p class=\"preview-subject ellipsis font-weight-medium text-dark\" >    liste de tous les excursion </p>
                                </div>
                            </a>
                            <a class=\"dropdown-item preview-item\" href=\"\">
                                <div class=\"preview-item-content flex-grow py-2\">
                                    <p class=\"preview-subject ellipsis font-weight-medium text-dark\" \"> liste de tous les restaurant </p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class=\"nav-item d-none d-lg-block\">
                        <div id=\"datepicker-popup\" class=\"input-group date datepicker navbar-date-picker\">
              <span class=\"input-group-addon input-group-prepend border-right\">
                <span class=\"icon-calendar input-group-text calendar-icon\"></span>
              </span>
                            <input type=\"text\" class=\"form-control\">
                        </div>
                    </li>
                    <li class=\"nav-item\">
                        <form class=\"search-form\" action=\"#\">
                            <i class=\"icon-search\"></i>
                            <input type=\"search\" class=\"form-control\" placeholder=\"Search Here\" title=\"Search here\">
                        </form>
                    </li>
                    {# -------------------------------------partie Mail------------------------------------------------#}
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link count-indicator\" id=\"notificationDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
                            <i class=\"icon-mail icon-lg\"></i>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0\" aria-labelledby=\"notificationDropdown\">
                            <a class=\"dropdown-item py-3 border-bottom\">
                                <p class=\"mb-0 font-weight-medium float-left\">You have 4 new notifications </p>
                                <span class=\"badge badge-pill badge-primary float-right\">View all</span>
                            </a>
                            <a class=\"dropdown-item preview-item py-3\">
                                <div class=\"preview-thumbnail\">
                                    <i class=\"mdi mdi-alert m-auto text-primary\"></i>
                                </div>
                                <div class=\"preview-item-content\">
                                    <h6 class=\"preview-subject fw-normal text-dark mb-1\">Application Error</h6>
                                    <p class=\"fw-light small-text mb-0\"> Just now </p>
                                </div>
                            </a>
                            <a class=\"dropdown-item preview-item py-3\">
                                <div class=\"preview-thumbnail\">
                                    <i class=\"mdi mdi-settings m-auto text-primary\"></i>
                                </div>
                                <div class=\"preview-item-content\">
                                    <h6 class=\"preview-subject fw-normal text-dark mb-1\">Settings</h6>
                                    <p class=\"fw-light small-text mb-0\"> Private message </p>
                                </div>
                            </a>
                            <a class=\"dropdown-item preview-item py-3\">
                                <div class=\"preview-thumbnail\">
                                    <i class=\"mdi mdi-airballoon m-auto text-primary\"></i>
                                </div>
                                <div class=\"preview-item-content\">
                                    <h6 class=\"preview-subject fw-normal text-dark mb-1\">New user registration</h6>
                                    <p class=\"fw-light small-text mb-0\"> 2 days ago </p>
                                </div>
                            </a>
                        </div>
                    </li>
                    {# -------------------------------------partie notifcation------------------------------------------------#}

                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link count-indicator\" id=\"countDropdown\" href=\"#\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            <i class=\"icon-bell\"></i>
                            <span class=\"count\"></span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0\" aria-labelledby=\"countDropdown\">
                            <a class=\"dropdown-item py-3\">
                                <p class=\"mb-0 font-weight-medium float-left\">You have 7 unread mails </p>
                                <span class=\"badge badge-pill badge-primary float-right\">View all</span>
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item preview-item\">
                                <div class=\"preview-thumbnail\">
                                    <img src=\"images/faces/face10.jpg\" alt=\"image\" class=\"img-sm profile-pic\">
                                </div>
                                <div class=\"preview-item-content flex-grow py-2\">
                                    <p class=\"preview-subject ellipsis font-weight-medium text-dark\">Marian Garner </p>
                                    <p class=\"fw-light small-text mb-0\"> The meeting is cancelled </p>
                                </div>
                            </a>
                            <a class=\"dropdown-item preview-item\">
                                <div class=\"preview-thumbnail\">
                                    <img src=\"images/faces/face12.jpg\" alt=\"image\" class=\"img-sm profile-pic\">
                                </div>
                                <div class=\"preview-item-content flex-grow py-2\">
                                    <p class=\"preview-subject ellipsis font-weight-medium text-dark\">David Grey </p>
                                    <p class=\"fw-light small-text mb-0\"> The meeting is cancelled </p>
                                </div>
                            </a>
                            <a class=\"dropdown-item preview-item\">
                                <div class=\"preview-thumbnail\">
                                    <img src=\"images/faces/face1.jpg\" alt=\"image\" class=\"img-sm profile-pic\">
                                </div>
                                <div class=\"preview-item-content flex-grow py-2\">
                                    <p class=\"preview-subject ellipsis font-weight-medium text-dark\">Travis Jenkins </p>
                                    <p class=\"fw-light small-text mb-0\"> The meeting is cancelled </p>
                                </div>
                            </a>
                        </div>
                    </li>
     {# -------------------------------------partie profile------------------------------------------------#}
                    <li class=\"nav-item dropdown d-none d-lg-block user-dropdown\">
                        <a class=\"nav-link\" id=\"UserDropdown\" href=\"#\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            <img class=\"img-xs rounded-circle\" src=\"{{ asset('Back/images/faces/face8.jpg') }}\" alt=\"Profile image\"> </a>
                        <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"UserDropdown\">
                            <div class=\"dropdown-header text-center\">
                                <img class=\"img-md rounded-circle\" src=\"{{ asset('Back/images/faces/face8.jpg') }}\" alt=\"Profile image\">
                                <p class=\"mb-1 mt-3 font-weight-semibold\">Allen Moreno</p>
                                <p class=\"fw-light text-muted mb-0\">allenmoreno@gmail.com</p>
                            </div>
                            <a class=\"dropdown-item\" href=\"{{ path('client_index') }}\"><i class=\"dropdown-item-icon mdi mdi-account-outline text-primary me-2\" ></i> My Profile <span class=\"badge badge-pill badge-danger\">1</span></a>
                            <a class=\"dropdown-item\"><i class=\"dropdown-item-icon mdi mdi-message-text-outline text-primary me-2\"></i> Messages</a>
                            <a class=\"dropdown-item\"><i class=\"dropdown-item-icon mdi mdi-calendar-check-outline text-primary me-2\"></i> Activity</a>
                            <a class=\"dropdown-item\"><i class=\"dropdown-item-icon mdi mdi-help-circle-outline text-primary me-2\"></i> FAQ</a>
                            <a class=\"dropdown-item\"><i class=\"dropdown-item-icon mdi mdi-power text-primary me-2\"></i>Sign Out</a>
                        </div>
                    </li>
                </ul>
                <button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\" data-bs-toggle=\"offcanvas\">
                    <span class=\"mdi mdi-menu\"></span>
                </button>
            </div>
        </nav>
        {# -------------------------------------partie Dark mode------------------------------------------------#}
        <!-- partial -->
        <div class=\"container-fluid page-body-wrapper\">
            <!-- partial:partials/_settings-panel.html -->
            <div class=\"theme-setting-wrapper\">
                <div id=\"settings-trigger\"><i class=\"ti-settings\"></i></div>
                <div id=\"theme-settings\" class=\"settings-panel\">
                    <i class=\"settings-close ti-close\"></i>
                    <p class=\"settings-heading\">SIDEBAR SKINS</p>
                    <div class=\"sidebar-bg-options selected\" id=\"sidebar-light-theme\"><div class=\"img-ss rounded-circle bg-light border me-3\"></div>Light</div>
                    <div class=\"sidebar-bg-options\" id=\"sidebar-dark-theme\"><div class=\"img-ss rounded-circle bg-dark border me-3\"></div>Dark</div>
                    <p class=\"settings-heading mt-2\">HEADER SKINS</p>
                    <div class=\"color-tiles mx-0 px-4\">
                        <div class=\"tiles success\"></div>
                        <div class=\"tiles warning\"></div>
                        <div class=\"tiles danger\"></div>
                        <div class=\"tiles info\"></div>
                        <div class=\"tiles dark\"></div>
                        <div class=\"tiles default\"></div>
                    </div>
                </div>
            </div>
            {# -------------------------------------partie TO DO------------------------------------------------#}


            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
                <ul class=\"nav\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('back') }}\">
                            <i class=\"mdi mdi-grid-large menu-icon\"></i>
                            <span class=\"menu-title\">Dashboard</span>
                        </a>
                    </li>
                    <li class=\"nav-item nav-category\">UI Elements</li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#ui-basic\" aria-expanded=\"false\" aria-controls=\"ui-basic\" >
                            <i class=\"menu-icon mdi mdi-floor-plan\"></i>
                            <span class=\"menu-title\">RESERATION</span>
                            <i class=\"menu-arrow\"></i>
                        </a>
                        <div class=\"collapse\" id=\"ui-basic\">
                            <ul class=\"nav flex-column sub-menu\">
                                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"\">Reservation Restaurant</a></li>
                                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"\">Reservation Excursion</a></li>
                                <li class=\"nav-item\"> <a class=\"nav-link\"  href=\"{{ path('reservation_voyage_index') }}\" >Reservation Voyage</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class=\"nav-item nav-category\">Forms and Datas</li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#tables\" aria-expanded=\"false\" aria-controls=\"tables\">
                            <i class=\"menu-icon mdi mdi-table\"></i>
                            <span class=\"menu-title\">Tables</span>
                            <i class=\"menu-arrow\"></i>
                        </a>
                        <div class=\"collapse\" id=\"tables\">
                            <ul class=\"nav flex-column sub-menu\">
                                <li class=\"nav-item\"> <a class=\"nav-link\"  href=\"{{ path('client_index') }}\">Client </a></li>
                            </ul>
                            <ul class=\"nav flex-column sub-menu\">
                                <li class=\"nav-item\"> <a class=\"nav-link\"  href=\"\">Commentaire</a></li>
                            </ul>
                            <ul class=\"nav flex-column sub-menu\">
                                <li class=\"nav-item\"> <a class=\"nav-link\"  href=\"{{ path('voyage_index') }}>Voyage</a></li>
                            </ul>
                            <ul class=\"nav flex-column sub-menu\">
                                <li class=\"nav-item\"> <a class=\"nav-link\"  href=\"\">Restaurant</a></li>
                            </ul>
                            <ul class=\"nav flex-column sub-menu\">
                                <li class=\"nav-item\"> <a class=\"nav-link\"  href=\"\">Excursion</a></li>
                            </ul><ul class=\"nav flex-column sub-menu\">
                                <li class=\"nav-item\"> <a class=\"nav-link\"  href=\"\">reclamation</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#icons\" aria-expanded=\"false\" aria-controls=\"icons\">
                            <i class=\"menu-icon mdi mdi-layers-outline\"></i>
                            <span class=\"menu-title\">Icons</span>
                            <i class=\"menu-arrow\"></i>
                        </a>
                        <div class=\"collapse\" id=\"icons\">
                            <ul class=\"nav flex-column sub-menu\">
                                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"pages/icons/mdi.html\">Mdi icons</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class=\"nav-item nav-category\">pages</li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#auth\" aria-expanded=\"false\" aria-controls=\"auth\">
                            <i class=\"menu-icon mdi mdi-account-circle-outline\"></i>
                            <span class=\"menu-title\">User Pages</span>
                            <i class=\"menu-arrow\"></i>
                        </a>
                        <div class=\"collapse\" id=\"auth\">
                            <ul class=\"nav flex-column sub-menu\">
                                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"pages/samples/login.html\"> Login </a></li>
                            </ul>
                        </div>
                    </li>
                    <li class=\"nav-item nav-category\">help</li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"http://bootstrapdash.com/demo/star-admin2-free/docs/documentation.html\">
                            <i class=\"menu-icon mdi mdi-file-document\"></i>
                            <span class=\"menu-title\">Documentation</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- partial -->
            <div class=\"main-panel\">
                <div class=\"content-wrapper\">
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <div class=\"home-tab\">
                                <div class=\"d-sm-flex align-items-center justify-content-between border-bottom\">
                                    <ul class=\"nav nav-tabs\" role=\"tablist\">
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link active ps-0\" id=\"home-tab\" data-bs-toggle=\"tab\" href=\"#overview\" role=\"tab\" aria-controls=\"overview\" aria-selected=\"true\">Overview</a>
                                        </li>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" id=\"profile-tab\" data-bs-toggle=\"tab\" href=\"#audiences\" role=\"tab\" aria-selected=\"false\">Audiences</a>
                                        </li>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" id=\"contact-tab\" data-bs-toggle=\"tab\" href=\"#demographics\" role=\"tab\" aria-selected=\"false\">Demographics</a>
                                        </li>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link border-0\" id=\"more-tab\" data-bs-toggle=\"tab\" href=\"#more\" role=\"tab\" aria-selected=\"false\">More</a>
                                        </li>
                                    </ul>
                                    <div>
                                        <div class=\"btn-wrapper\">
                                            <a href=\"#\" class=\"btn btn-otline-dark align-items-center\"><i class=\"icon-share\"></i> Share</a>
                                            <a href=\"#\" class=\"btn btn-otline-dark\"><i class=\"icon-printer\"></i> Print</a>
                                            <a href=\"#\" class=\"btn btn-primary text-white me-0\"><i class=\"icon-download\"></i> Export</a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"tab-content tab-content-basic\">
                                    <div class=\"tab-pane fade show active\" id=\"overview\" role=\"tabpanel\" aria-labelledby=\"overview\">
                                        <div class=\"row\">
                                            <div class=\"col-sm-12\">
                                                <div class=\"statistics-details d-flex align-items-center justify-content-between\">

                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-lg-8 d-flex flex-column\">
                                                <div class=\"row flex-grow\">
                                                    <div class=\"col-12 col-lg-4 col-lg-12 grid-margin stretch-card\">
                                                        <div class=\"card card-rounded\">
                                                            <div class=\"card-body\">
                                                                <div class=\"d-sm-flex justify-content-between align-items-start\">
                                                                    <div>
                                                                        <h4 class=\"card-title card-title-dash\">La liste des Clients</h4>
                                                                        <p class=\"card-subtitle card-subtitle-dash\">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                                                                    </div>
                                                                    <div>
                                                                        <button class=\"btn btn-primary btn-lg text-white mb-0 me-0\" type=\"button\"><i class=\"mdi mdi-account-plus\"></i> <a href=\"{{ path('security_registration') }}\"> Add new Client </a></button>
                                                                    </div>
                                                                </div>
                                                                <div class=\"table-responsive  mt-1\">
                                                                    <table class=\"table\">
                                                                        <thead>
                                                                        <tr>
                                                                            
                                                                            <th>CIN</th>
                                                                            <th>Image</th>
                                                                            <th>UserName</th>
                                                                            <th>Numero</th>
                                                                            <th>Email</th>
                                                                            <th>Adresse</th>
                                                                            <th>actions</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                         {% for client in clients %}
                                                                            <tr>
                                                                               
                                                                                <td>{{ client.CIN }}</td>
                                                                                {% if client.image|length > 0 %}
                                                                                    <td><img src=\"{{ asset('uploads/'~ client.image ) }}\" width=\"250\" height=\"150\"></td>
                                                                                {% else %}
                                                                                    <td><img src=\"{{ asset('uploads/'~ \"Not found.jpg\" ) }}\" width=\"250\" height=\"150\"></td>
                                                                                {% endif %}
                                                                                <td>{{ client.UserName }}</td> 
                                                                                <td>{{ client.Numero }}</td>
                                                                                <td>{{ client.Email }}</td>
                                                                                <td>{{ client.Adresse }}</td>
                                                                                <td>
                                                                                    <a href=\"{{ path('client_show', {'id': client.id}) }}\"><button>Show</button></a>
                                                                                    <a href=\"{{ path('client_delete', {'id': client.id}) }}\"><button class=\"alert-danger\">Supprimer</button></a>
                                                                                </td>
                                                                            </tr>
                                                                        {% else %}
                                                                            <tr>
                                                                                <td colspan=\"9\">no records found</td>
                                                                            </tr>
                                                                        {% endfor %}
                                                                        </tbody>
                                                                    </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-lg-8 d-flex flex-column\">
                                                <div class=\"row flex-grow\">
                                                    <div class=\"col-12 grid-margin stretch-card\">
                                                        <div class=\"card card-rounded\">
                                                            <div class=\"card-body\">
                                                                <div class=\"d-sm-flex justify-content-between align-items-start\">
                                                                    <div>
                                                                        <h4 class=\"card-title card-title-dash\">La liste des Voyages</h4>
                                                                        <p class=\"card-subtitle card-subtitle-dash\">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                                                                    </div>
                                                                    <div>
                                                                        <button class=\"btn btn-primary btn-lg text-white mb-0 me-0\" type=\"button\"><i class=\"mdi mdi-account-plus\"></i><a href=\"{{ path('voyage_new') }}\">Add new Voyage </a> </button>
                                                                    </div>
                                                                </div>
                                                                <div class=\"table-responsive  mt-1\">
                                                                    <table class=\"table\" >
                                                                        <thead>
                                                                        <tr>
                                                                            <th>Id</th>
                                                                            <th>Image</th>
                                                                            <th>Destination</th>
                                                                            <th>Nom_Voyage</th>
                                                                            <th>Duree_Voyage</th>
                                                                            <th>Prix</th>
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
                                                                                <td>{{ voyage.prix }}</td>
                                                                                <td>{{ voyage.date ? voyage.date|date('Y-m-d') : '' }}</td>
                                                                                <td>{{ voyage.valabilite }}</td>
                                                                                <td>
                                                                                    <button>  <a href=\"{{ path('voyage_show', {'id': voyage.id}) }}\">show</a> </button>
                                                                                    <button>   <a href=\"{{ path('voyage_edit', {'id': voyage.id}) }}\">edit</a></button>
                                                                                </td>
                                                                            </tr>
                                                                        {% else %}
                                                                            <tr>
                                                                                <td colspan=\"8\">no records found</td>
                                                                            </tr>
                                                                        {% endfor %}

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-lg-8 d-flex flex-column\">
                                                <div class=\"row flex-grow\">
                                                    <div class=\"col-12 grid-margin stretch-card\">
                                                        <div class=\"card card-rounded\">
                                                            <div class=\"card-body\">
                                                                <div class=\"d-sm-flex justify-content-between align-items-start\">
                                                                    <div>
                                                                        <h4 class=\"card-title card-title-dash\">La liste des Reservation des Voyages</h4>
                                                                        <p class=\"card-subtitle card-subtitle-dash\">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                                                                    </div>
                                                                    <div>
                                                                        <button class=\"btn btn-primary btn-lg text-white mb-0 me-0\" type=\"button\"><i class=\"mdi mdi-account-plus\"></i><a href=\"{{ path('reservation_voyage_new') }}\">Add new Reservation Voyage </a> </button>
                                                                    </div>
                                                                </div>
                                                                <div class=\"table-responsive  mt-1\">
                                                                    <table class=\"table\">
                                                                        <tr>
                                                                            <th>Id</th>
                                                                            <th>Voyage</th>
                                                                            <th>Date_Reservation</th>
                                                                            <th>Travel_Class</th>
                                                                            <th>Age</th>
                                                                            <th>actions</th>
                                                                        </tr>
                                                                        {% for reservation_voyage in reservation_voyages %}
                                                                            <tbody>
                                                                            <tr>
                                                                                <td>{{ reservation_voyage.id }}</td>
                                                                                {% if reservation_voyage.voyage.image|length > 0 %}
                                                                                    <td><img src=\"{{ asset('uploads/'~ reservation_voyage.voyage.image ) }}\" width=\"250\" height=\"150\"></td>
                                                                                {% else %}
                                                                                    <td><img src=\"{{ asset('uploads/'~ \"Not found.jpg\" ) }}\" width=\"250\" height=\"150\"></td>
                                                                                {% endif %}
                                                                                <td>{{ reservation_voyage.DateReservation ? reservation_voyage.DateReservation|date('Y-m-d') : '' }}</td>
                                                                                <td>{{ reservation_voyage.TravelClass }}</td>
                                                                                <td>{{ reservation_voyage.Age }}</td>
                                                                                <td>
                                                                                    <a href=\"{{ path('reservation_voyage_show', {'id': reservation_voyage.id}) }}\">show</a>
                                                                                    <a href=\"{{ path('reservation_voyage_edit', {'id': reservation_voyage.id}) }}\">edit</a>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        {% else %}
                                                                            <tr>
                                                                                <td colspan=\"5\">no records found</td>
                                                                            </tr>
                                                                        {% endfor %}
                                                                        </tbody>

                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-lg-8 d-flex flex-column\">
                                                <div class=\"row flex-grow\">
                                                    <div class=\"col-12 grid-margin stretch-card\">
                                                        <div class=\"card card-rounded\">
                                                            <div class=\"card-body\">
                                                                <div class=\"d-sm-flex justify-content-between align-items-start\">
                                                                    <div>
                                                                        <h4 class=\"card-title card-title-dash\">la liste des Restaurants</h4>
                                                                        <p class=\"card-subtitle card-subtitle-dash\">You have 50+ new requests</p>
                                                                    </div>
                                                                    <div>
                                                                        <a href=\"\"> <button class=\"btn btn-primary btn-lg text-white mb-0 me-0\" type=\"button\"><i class=\"mdi mdi-account-plus\"></i>Add new Restaurants</button> </a>
                                                                    </div>
                                                                </div>
                                                                <div class=\"table-responsive  mt-1\">
                                                                    <table class=\"table\">
                                                                        <thead>
                                                                        <tr>
                                                                            <th>Id</th>
                                                                            <th>Image</th>
                                                                            <th>Nom_Restaurant</th>
                                                                            <th>Adresse_Restaurant</th>
                                                                            <th>Num_Tel_Restaurant</th>
                                                                            <th>Description_Restaurant</th>
                                                                            <th>actions</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        {% for restaurant in restaurants %}
                                                                            <tr>
                                                                                <td>{{ restaurant.id }}</td>
                                                                                {% if restaurant.Image|length > 0 %}
                                                                                    <td><img src=\"{{ asset('uploads/'~ restaurant.Image ) }}\" width=\"250\" height=\"150\"></td>
                                                                                {% else %}
                                                                                    <td><img src=\"{{ asset('uploads/'~ \"Not found.jpg\" ) }}\" width=\"250\" height=\"150\"></td>
                                                                                {% endif %}
                                                                                <td>{{ restaurant.NomRestaurant }}</td>
                                                                                <td>{{ restaurant.AdresseRestaurant }}</td>
                                                                                <td>{{ restaurant.NumTelRestaurant }}</td>
                                                                                <td>{{ restaurant.DescriptionRestaurant }}</td>
                                                                                <td>
                                                                                    <a href=\"{{ path('restaurant_show', {'id': restaurant.id}) }}\">show</a>
                                                                                    <a href=\"{{ path('restaurant_edit', {'id': restaurant.id}) }}\">edit</a>
                                                                                </td>
                                                                            </tr>
                                                                        {% else %}
                                                                            <tr>
                                                                                <td colspan=\"7\">no records found</td>
                                                                            </tr>
                                                                        {% endfor %}
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"row\">
                                            <div class=\"col-lg-8 d-flex flex-column\">
                                                <div class=\"row flex-grow\">
                                                    <div class=\"col-12 grid-margin stretch-card\">
                                                        <div class=\"card card-rounded\">
                                                            <div class=\"card-body\">
                                                                <div class=\"d-sm-flex justify-content-between align-items-start\">
                                                                    <div>
                                                                        <h4 class=\"card-title card-title-dash\">la liste des Excursion</h4>
                                                                        <p class=\"card-subtitle card-subtitle-dash\">You have 50+ new requests</p>
                                                                    </div>
                                                                    <div>
                                                                        <a href=\"{{ path('excursion_new') }}\"> <button class=\"btn btn-primary btn-lg text-white mb-0 me-0\" type=\"button\"><i class=\"mdi mdi-account-plus\"></i>Add new EXcursion</button> </a>
                                                                    </div>
                                                                </div>
                                                                <div class=\"table-responsive  mt-1\">
                                                                    <table class=\"table\">
                                                                    <thead>
                                                                    <tr>
                                                                        <th>Id</th>
                                                                        <th>Nom_Excursion</th>
                                                                        <th>Description_Excursion</th>
                                                                        <th>Date</th>
                                                                        <th>Type_Excursion</th>
                                                                        <th>Lieu</th>
                                                                        <th>Valabilite</th>
                                                                        <th>Image</th>
                                                                        <th>actions</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    {% for excursion in excursions %}
                                                                        <tr>
                                                                            <td>{{ excursion.id }}</td>
                                                                            <td>{{ excursion.NomExcursion }}</td>
                                                                            <td>{{ excursion.DescriptionExcursion }}</td>
                                                                            <td>{{ excursion.Date ? excursion.Date|date('Y-m-d') : '' }}</td>
                                                                            <td>{{ excursion.TypeExcursion }}</td>
                                                                            <td>{{ excursion.Lieu }}</td>
                                                                            <td>{{ excursion.valabilite }}</td>
                                                                            <td>{{ excursion.Image }}</td>
                                                                            <td>
                                                                                <a href=\"{{ path('excursion_show', {'id': excursion.id}) }}\">show</a>
                                                                                <a href=\"{{ path('excursion_edit', {'id': excursion.id}) }}\">edit</a>
                                                                            </td>
                                                                        </tr>
                                                                    {% else %}
                                                                        <tr>
                                                                            <td colspan=\"9\">no records found</td>
                                                                        </tr>
                                                                    {% endfor %}
                                                                    </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-lg-8 d-flex flex-column\">
                                                <div class=\"row flex-grow\">
                                                    <div class=\"col-12 grid-margin stretch-card\">
                                                        <div class=\"card card-rounded\">
                                                            <div class=\"card-body\">
                                                                <div class=\"d-sm-flex justify-content-between align-items-start\">
                                                                    <div>
                                                                        <h4 class=\"card-title card-title-dash\">la liste des Resrvation des excursion</h4>
                                                                        <p class=\"card-subtitle card-subtitle-dash\">You have 50+ new requests</p>
                                                                    </div>
                                                                    <div>
                                                                        <a href=\"{{ path('reservation_excursion_new') }}\"> <button class=\"btn btn-primary btn-lg text-white mb-0 me-0\" type=\"button\"><i class=\"mdi mdi-account-plus\"></i>Add new Excursion</button> </a>
                                                                    </div>
                                                                </div>
                                                                <div class=\"table-responsive  mt-1\">
                                                                    <table class=\"table\">
                                                                        <thead>
                                                                        <tr>
                                                                            <th>Id</th>
                                                                            <th>Date_Reservation_Excursion</th>
                                                                            <th>actions</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        {% for reservation_excursion in reservation_excursions %}
                                                                            <tr>
                                                                                <td>{{ reservation_excursion.id }}</td>
                                                                                <td>{{ reservation_excursion.DateReservationExcursion ? reservation_excursion.DateReservationExcursion|date('Y-m-d') : '' }}</td>
                                                                                <td>
                                                                                    <a href=\"{{ path('reservation_excursion_show', {'id': reservation_excursion.id}) }}\">show</a>
                                                                                    <a href=\"{{ path('reservation_excursion_edit', {'id': reservation_excursion.id}) }}\">edit</a>
                                                                                </td>
                                                                            </tr>
                                                                        {% else %}
                                                                            <tr>
                                                                                <td colspan=\"3\">no records found</td>
                                                                            </tr>
                                                                        {% endfor %}
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-lg-8 d-flex flex-column\">
                                                <div class=\"row flex-grow\">
                                                    <div class=\"col-12 grid-margin stretch-card\">
                                                        <div class=\"card card-rounded\">
                                                            <div class=\"card-body\">
                                                                <div class=\"d-sm-flex justify-content-between align-items-start\">
                                                                    <div>
                                                                        <h4 class=\"card-title card-title-dash\">la liste des Reclamation</h4>
                                                                        <p class=\"card-subtitle card-subtitle-dash\">You have 50+ new requests</p>
                                                                    </div>
                                                                    <div>
                                                                        <a href=\"{{ path('reclamation_new') }}\"> <button class=\"btn btn-primary btn-lg text-white mb-0 me-0\" type=\"button\"><i class=\"mdi mdi-account-plus\"></i>Add new Reclamation</button> </a>
                                                                    </div>
                                                                </div>
                                                                <div class=\"table-responsive  mt-1\">
                                                                    <table class=\"table\">
                                                                        <thead>
                                                                        <tr>
                                                                            <th>Id</th>
                                                                            <th>Objet</th>
                                                                            <th>Type_De_Reclamation</th>
                                                                            <th>Description_Reclamation</th>
                                                                            <th>Date</th>
                                                                            <th>actions</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        {% for reclamation in reclamations %}
                                                                            <tr>
                                                                                <td>{{ reclamation.id }}</td>
                                                                                <td>{{ reclamation.Objet }}</td>
                                                                                <td>{{ reclamation.TypeDeReclamation }}</td>
                                                                                <td>{{ reclamation.DescriptionReclamation }}</td>
                                                                                <td>{{ reclamation.Date ? reclamation.Date|date('Y-m-d') : '' }}</td>
                                                                                <td>
                                                                                    <a href=\"{{ path('reclamation_show', {'id': reclamation.id}) }}\">show</a>
                                                                                    <a href=\"{{ path('reclamation_edit', {'id': reclamation.id}) }}\">edit</a>
                                                                                </td>
                                                                            </tr>
                                                                        {% else %}
                                                                            <tr>
                                                                                <td colspan=\"6\">no records found</td>
                                                                            </tr>
                                                                        {% endfor %}
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-lg-8 d-flex flex-column\">
                                                <div class=\"row flex-grow\">
                                                    <div class=\"col-12 grid-margin stretch-card\">
                                                        <div class=\"card card-rounded\">
                                                            <div class=\"card-body\">
                                                                <div class=\"d-sm-flex justify-content-between align-items-start\">
                                                                    <div>
                                                                        <h4 class=\"card-title card-title-dash\">la liste des commentaires</h4>
                                                                        <p class=\"card-subtitle card-subtitle-dash\">You have 50+ new requests</p>
                                                                    </div>
                                                                    <div>
                                                                        <a href=\"{{ path('commentaire_new') }}\"> <button class=\"btn btn-primary btn-lg text-white mb-0 me-0\" type=\"button\"><i class=\"mdi mdi-account-plus\"></i>Add new commentaires</button> </a>
                                                                    </div>
                                                                </div>
                                                                <div class=\"table-responsive  mt-1\">
                                                                    <table class=\"table\">
                                                                        <thead>
                                                                        <tr>
                                                                            <th>Id</th>
                                                                            <th>Objet</th>
                                                                            <th>Commentaire</th>
                                                                            <th>actions</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        {% for commentaire in commentaires %}
                                                                            <tr>
                                                                                <td>{{ commentaire.id }}</td>
                                                                                <td>{{ commentaire.Objet }}</td>
                                                                                <td>{{ commentaire.Commentaire }}</td>
                                                                                <td>
                                                                                    <a href=\"{{ path('commentaire_show', {'id': commentaire.id}) }}\">show</a>
                                                                                    <a href=\"{{ path('commentaire_edit', {'id': commentaire.id}) }}\">edit</a>
                                                                                </td>
                                                                            </tr>
                                                                        {% else %}
                                                                            <tr>
                                                                                <td colspan=\"4\">no records found</td>
                                                                            </tr>
                                                                        {% endfor %}
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class=\"footer\">
                    <div class=\"d-sm-flex justify-content-center justify-content-sm-between\">
                        <span class=\"text-muted text-center text-sm-left d-block d-sm-inline-block\">Premium <a href=\"https://www.bootstrapdash.com/\" target=\"_blank\">Bootstrap admin template</a> from BootstrapDash.</span>
                        <span class=\"float-none float-sm-right d-block mt-1 mt-sm-0 text-center\">Copyright © 2021. All rights reserved.</span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    {% block js %}
    <!-- plugins:js -->
    <script src=\"{{ asset('Back/vendors/js/vendor.bundle.base.js') }}\"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src=\"{{ asset('Back/vendors/chart.js/Chart.min.js') }}\"></script>
    <script src=\"{{ asset('Back/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}\"></script>
    <script src=\"{{ asset('Back/vendors/progressbar.js/progressbar.min.js') }}\"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src=\"{{ asset('Back/js/off-canvas.js') }}\"></script>
    <script src=\"{{ asset('Back/js/hoverable-collapse.js') }}\"></script>
    <script src=\"{{ asset('Back/js/template.js') }}\"></script>
    <script src=\"{{ asset('Back/js/settings.js') }}\"></script>
    <script src=\"{{ asset('Back/js/todolist.js') }}\"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src=\"{{ asset('Back/js/jquery.cookie.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('Back/js/dashboard.js') }}\"></script>
    <script src=\"{{ asset('Back/js/Chart.roundedBarCharts.js') }}\"></script>
    <!-- End custom js for this page-->
    </body>

    </html>

    {% endblock %}
</head>
</html>
", "Back/Back.html.twig", "C:\\xampp\\htdocs\\PIDEVF1\\templates\\Back\\Back.html.twig");
    }
}
