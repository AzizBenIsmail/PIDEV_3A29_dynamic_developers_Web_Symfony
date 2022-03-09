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
class __TwigTemplate_564ebd9cb89552c5d918be83b2776c8633b7c9d3aff79a8f5dbcce3477b07e9a extends Template
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
        echo "<!DOCTYPE html>
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
                    <li class=\"nav-item dropdown d-none d-lg-block\">
                        <a class=\"nav-link dropdown-bordered dropdown-toggle dropdown-toggle-split\" id=\"messageDropdown\" href=\"#\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"> Select Category </a>
                        <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0\" aria-labelledby=\"messageDropdown\">
                            <a class=\"dropdown-item py-3\" >
                                <p class=\"mb-0 font-weight-medium float-left\">Select category</p>
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item preview-item\" href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_index");
        echo "\">
                                <div class=\"preview-item-content flex-grow py-2\" >
                                    <p class=\"preview-subject ellipsis font-weight-medium text-dark\" >    liste de tous les Users </p>
                                </div>
                            </a>
                            <a class=\"dropdown-item preview-item\" href=\"\">
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
        // line 107
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
        // line 147
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
        // line 188
        echo "<li class=\"nav-item dropdown d-none d-lg-block user-dropdown\">
                        <a class=\"nav-link\" id=\"UserDropdown\" href=\"#\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            <img class=\"img-xs rounded-circle\" src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/images/faces/face8.jpg"), "html", null, true);
        echo "\" alt=\"Profile image\"> </a>
                        <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"UserDropdown\">
                            <div class=\"dropdown-header text-center\">
                                <img class=\"img-md rounded-circle\" src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/images/faces/face8.jpg"), "html", null, true);
        echo "\" alt=\"Profile image\">
                                <p class=\"mb-1 mt-3 font-weight-semibold\">Allen Moreno</p>
                                <p class=\"fw-light text-muted mb-0\">allenmoreno@gmail.com</p>
                            </div>
                            <a class=\"dropdown-item\" href=\"";
        // line 197
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
        // line 211
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
        // line 235
        echo "<!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
                <ul class=\"nav\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 240
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
                                <li class=\"nav-item\"> <a class=\"nav-link\"  href=\"\" >Reservation Voyage</a></li>
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
        // line 270
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_index");
        echo "\">Client </a></li>
                            </ul>
                            <ul class=\"nav flex-column sub-menu\">
                                <li class=\"nav-item\"> <a class=\"nav-link\"  href=\"\">Commentaire</a></li>
                            </ul>
                            <ul class=\"nav flex-column sub-menu\">
                                <li class=\"nav-item\"> <a class=\"nav-link\"  href=\"\">Voyage</a></li>
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
        // line 372
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_registration");
        echo "\"> Add new Client </a></button>
                                                                    </div>
                                                                </div>
                                                                <div class=\"table-responsive  mt-1\">
                                                                    <table class=\"table\">
                                                                        <thead>
                                                                        <tr>
                                                                            
                                                                            <th>CIN</th>
                                                                            <th>UserName</th>
                                                                            <th>Numero</th>
                                                                            <th>Email</th>
                                                                            <th>Adresse</th>
                                                                            <th>actions</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                         ";
        // line 389
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 389, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 390
            echo "                                                                            <tr>
                                                                               
                                                                                <td>";
            // line 392
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "CIN", [], "any", false, false, false, 392), "html", null, true);
            echo "</td>
                                                                                <td>";
            // line 393
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "UserName", [], "any", false, false, false, 393), "html", null, true);
            echo "</td> 
                                                                                <td>";
            // line 394
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "Numero", [], "any", false, false, false, 394), "html", null, true);
            echo "</td>
                                                                                <td>";
            // line 395
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "Email", [], "any", false, false, false, 395), "html", null, true);
            echo "</td>
                                                                                <td>";
            // line 396
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "Adresse", [], "any", false, false, false, 396), "html", null, true);
            echo "</td>
                                                                                <td>
                                                                                    <a href=\"";
            // line 398
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_show", ["id" => twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 398)]), "html", null, true);
            echo "\"><button>Show</button></a>
                                                                                    <a href=\"";
            // line 399
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 399)]), "html", null, true);
            echo "\"><button class=\"alert-danger\">Supprimer</button></a>
                                                                                </td>
                                                                            </tr>
                                                                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 403
            echo "                                                                            <tr>
                                                                                <td colspan=\"9\">no records found</td>
                                                                            </tr>
                                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 407
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
                                                                        <button class=\"btn btn-primary btn-lg text-white mb-0 me-0\" type=\"button\"><i class=\"mdi mdi-account-plus\"></i><a href=\"\">Add new Voyage </a> </button>
                                                                    </div>
                                                                </div>
                                                                <div class=\"table-responsive  mt-1\">
                                                                    <table class=\"table\" >
                                                                        <thead>
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
                                                                    <table class=\"table\" >
                                                                        <thead>
                                                                        <tr>
                                                                            <th>Id</th>
                                                                            <th>Nom_Restaurant</th>
                                                                            <th>Adresse_Restaurant</th>
                                                                            <th>Num_Tel_Restaurant</th>
                                                                            <th>Description_Restaurant</th>
                                                                            <th>actions</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        
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
                                                                        <h4 class=\"card-title card-title-dash\">la liste des excursion</h4>
                                                                        <p class=\"card-subtitle card-subtitle-dash\">You have 50+ new requests</p>
                                                                    </div>
                                                                    <div>
                                                                        <a href=\"\"> <button class=\"btn btn-primary btn-lg text-white mb-0 me-0\" type=\"button\"><i class=\"mdi mdi-account-plus\"></i>Add new excursion</button> </a>
                                                                    </div>
                                                                </div>
                                                                <div class=\"table-responsive  mt-1\">
                                                                    <table class=\"table\" >
                                                                        <thead>
                                                                        <tr>
                                                                            <th>Id</th>
                                                                            <th>Image</th>
                                                                            <th>Nom_Excursion</th>
                                                                            <th>Description_Excursion</th>
                                                                            <th>Date</th>
                                                                            <th>Type_Excursion</th>
                                                                            <th>Lieu</th>
                                                                            <th>Valabilite</th>
                                                                            <th>actions</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        
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
                                                                        <a href=\"\"> <button class=\"btn btn-primary btn-lg text-white mb-0 me-0\" type=\"button\"><i class=\"mdi mdi-account-plus\"></i>Add new commentaires</button> </a>
                                                                    </div>
                                                                </div>
                                                                <div class=\"table-responsive  mt-1\">
                                                                    <table class=\"table\" >
                                                                        <thead>
                                                                        <tr>
                                                                            <th>Id</th>
                                                                            <th>Objet</th>
                                                                            <th>Commentaire</th>
                                                                            <th>actions</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        
                                                                           
                                                                    
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

    ";
        // line 597
        $this->displayBlock('js', $context, $blocks);
        // line 624
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

    // line 597
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 598
        echo "    <!-- plugins:js -->
    <script src=\"";
        // line 599
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendors/js/vendor.bundle.base.js"), "html", null, true);
        echo "\"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src=\"";
        // line 602
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendors/chart.js/Chart.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 603
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 604
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendors/progressbar.js/progressbar.min.js"), "html", null, true);
        echo "\"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src=\"";
        // line 608
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/js/off-canvas.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 609
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/js/hoverable-collapse.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 610
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/js/template.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 611
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/js/settings.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 612
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/js/todolist.js"), "html", null, true);
        echo "\"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src=\"";
        // line 615
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/js/jquery.cookie.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 616
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/js/dashboard.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 617
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
        return array (  860 => 617,  856 => 616,  852 => 615,  846 => 612,  842 => 611,  838 => 610,  834 => 609,  830 => 608,  823 => 604,  819 => 603,  815 => 602,  809 => 599,  806 => 598,  796 => 597,  782 => 25,  776 => 22,  772 => 21,  766 => 18,  762 => 17,  758 => 16,  754 => 15,  750 => 14,  745 => 13,  735 => 12,  716 => 8,  704 => 624,  702 => 597,  510 => 407,  501 => 403,  492 => 399,  488 => 398,  483 => 396,  479 => 395,  475 => 394,  471 => 393,  467 => 392,  463 => 390,  458 => 389,  438 => 372,  333 => 270,  300 => 240,  293 => 235,  270 => 211,  254 => 197,  247 => 193,  241 => 190,  237 => 188,  195 => 147,  155 => 107,  116 => 70,  106 => 62,  92 => 49,  86 => 46,  67 => 29,  65 => 12,  60 => 10,  55 => 8,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
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
                            <a class=\"dropdown-item preview-item\" href=\"\">
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
                                <li class=\"nav-item\"> <a class=\"nav-link\"  href=\"\" >Reservation Voyage</a></li>
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
                                <li class=\"nav-item\"> <a class=\"nav-link\"  href=\"\">Voyage</a></li>
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
                                                                        <button class=\"btn btn-primary btn-lg text-white mb-0 me-0\" type=\"button\"><i class=\"mdi mdi-account-plus\"></i><a href=\"\">Add new Voyage </a> </button>
                                                                    </div>
                                                                </div>
                                                                <div class=\"table-responsive  mt-1\">
                                                                    <table class=\"table\" >
                                                                        <thead>
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
                                                                    <table class=\"table\" >
                                                                        <thead>
                                                                        <tr>
                                                                            <th>Id</th>
                                                                            <th>Nom_Restaurant</th>
                                                                            <th>Adresse_Restaurant</th>
                                                                            <th>Num_Tel_Restaurant</th>
                                                                            <th>Description_Restaurant</th>
                                                                            <th>actions</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        
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
                                                                        <h4 class=\"card-title card-title-dash\">la liste des excursion</h4>
                                                                        <p class=\"card-subtitle card-subtitle-dash\">You have 50+ new requests</p>
                                                                    </div>
                                                                    <div>
                                                                        <a href=\"\"> <button class=\"btn btn-primary btn-lg text-white mb-0 me-0\" type=\"button\"><i class=\"mdi mdi-account-plus\"></i>Add new excursion</button> </a>
                                                                    </div>
                                                                </div>
                                                                <div class=\"table-responsive  mt-1\">
                                                                    <table class=\"table\" >
                                                                        <thead>
                                                                        <tr>
                                                                            <th>Id</th>
                                                                            <th>Image</th>
                                                                            <th>Nom_Excursion</th>
                                                                            <th>Description_Excursion</th>
                                                                            <th>Date</th>
                                                                            <th>Type_Excursion</th>
                                                                            <th>Lieu</th>
                                                                            <th>Valabilite</th>
                                                                            <th>actions</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        
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
                                                                        <a href=\"\"> <button class=\"btn btn-primary btn-lg text-white mb-0 me-0\" type=\"button\"><i class=\"mdi mdi-account-plus\"></i>Add new commentaires</button> </a>
                                                                    </div>
                                                                </div>
                                                                <div class=\"table-responsive  mt-1\">
                                                                    <table class=\"table\" >
                                                                        <thead>
                                                                        <tr>
                                                                            <th>Id</th>
                                                                            <th>Objet</th>
                                                                            <th>Commentaire</th>
                                                                            <th>actions</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        
                                                                           
                                                                    
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
", "Back/Back.html.twig", "C:\\wamp\\www\\PIDEVF1\\templates\\Back\\Back.html.twig");
    }
}
