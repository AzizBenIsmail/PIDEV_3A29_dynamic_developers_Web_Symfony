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
class __TwigTemplate_03dfe3fd12480fd32b2268e4f329d50ed99b9204b53d7f6b3fbde9ae2342d9fb extends Template
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
        return "/Back/Back-Base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/Back.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/Back.html.twig"));

        $this->parent = $this->loadTemplate("/Back/Back-Base.html.twig", "Back/Back.html.twig", 1);
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
        echo "    <body xmlns=\"http://www.w3.org/1999/html\">

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
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/images/logo.svg"), "html", null, true);
        echo "\" alt=\"logo\" />
                    </a>
                    <a class=\"navbar-brand brand-logo-mini\" href=\"index.html\">
                        <img src=\"";
        // line 19
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
        // line 32
        echo "<ul class=\"navbar-nav ms-auto\">
                    <li class=\"nav-item dropdown d-none d-lg-block\">
                        <a class=\"nav-link dropdown-bordered dropdown-toggle dropdown-toggle-split\" id=\"messageDropdown\" href=\"#\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"> Select Category </a>
                        <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0\" aria-labelledby=\"messageDropdown\">
                            <a class=\"dropdown-item py-3\" >
                                <p class=\"mb-0 font-weight-medium float-left\">Select category</p>
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item preview-item\" href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_index");
        echo "\">
                                <div class=\"preview-item-content flex-grow py-2\" >
                                    <p class=\"preview-subject ellipsis font-weight-medium text-dark\" >    liste de tous les clients </p>
                                </div>
                            </a>
                            <a class=\"dropdown-item preview-item\" href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyage_index");
        echo "\">
                                <div class=\"preview-item-content flex-grow py-2\" >
                                    <p class=\"preview-subject ellipsis font-weight-medium text-dark\" >    liste de tous les voyage </p>
                                </div>
                            </a>
                            <a class=\"dropdown-item preview-item\" href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("excursion_index");
        echo "\">
                                <div class=\"preview-item-content flex-grow py-2\" >
                                    <p class=\"preview-subject ellipsis font-weight-medium text-dark\" >    liste de tous les excursion </p>
                                </div>
                            </a>
                            <a class=\"dropdown-item preview-item\" href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("restaurant_index");
        echo "\">
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
        // line 77
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
        // line 117
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
        // line 158
        echo "<li class=\"nav-item dropdown d-none d-lg-block user-dropdown\">
                        <a class=\"nav-link\" id=\"UserDropdown\" href=\"#\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            <img class=\"img-xs rounded-circle\" src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/images/faces/face8.jpg"), "html", null, true);
        echo "\" alt=\"Profile image\"> </a>
                        <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"UserDropdown\">
                            <div class=\"dropdown-header text-center\">
                                <img class=\"img-md rounded-circle\" src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/images/faces/face8.jpg"), "html", null, true);
        echo "\" alt=\"Profile image\">
                                <p class=\"mb-1 mt-3 font-weight-semibold\">Allen Moreno</p>
                                <p class=\"fw-light text-muted mb-0\">allenmoreno@gmail.com</p>
                            </div>
                            <a class=\"dropdown-item\" href=\"";
        // line 167
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
        // line 181
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
        // line 205
        echo "<!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
                <ul class=\"nav\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 210
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
                                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"";
        // line 224
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_restaurant_new");
        echo "\">Reservation Restaurant</a></li>
                                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"";
        // line 225
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_excursion_index");
        echo "\">Reservation Excursion</a></li>
                                <li class=\"nav-item\"> <a class=\"nav-link\"  href=\"";
        // line 226
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
        // line 240
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_index");
        echo "\">Client </a></li>
                            </ul>
                            <ul class=\"nav flex-column sub-menu\">
                                <li class=\"nav-item\"> <a class=\"nav-link\"  href=\"";
        // line 243
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commentaire_index");
        echo "\">Commentaire</a></li>
                            </ul>
                            <ul class=\"nav flex-column sub-menu\">
                                <li class=\"nav-item\"> <a class=\"nav-link\"  href=\"";
        // line 246
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyage_index");
        echo "\">Voyage</a></li>
                            </ul>
                            <ul class=\"nav flex-column sub-menu\">
                                <li class=\"nav-item\"> <a class=\"nav-link\"  href=\"";
        // line 249
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("restaurant_index");
        echo "\">Restaurant</a></li>
                            </ul>
                            <ul class=\"nav flex-column sub-menu\">
                                <li class=\"nav-item\"> <a class=\"nav-link\"  href=\"";
        // line 252
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("excursion_index");
        echo "\">Excursion</a></li>
                            </ul><ul class=\"nav flex-column sub-menu\">
                                <li class=\"nav-item\"> <a class=\"nav-link\"  href=\"";
        // line 254
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_index");
        echo "\">reclamation</a></li>
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
        // line 342
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_new");
        echo "\"> Add new Client </a></button>
                                                                    </div>
                                                                </div>
                                                                <div class=\"table-responsive  mt-1\">
                                                                    <table class=\"table\">
                                                                        <thead>
                                                                        <tr>
                                                                            <th>Id</th>
                                                                            <th>CIN</th>
                                                                            <th>Nom</th>
                                                                            <th>Prenom</th>
                                                                            <th>Image</th>
                                                                            <th>Numero</th>
                                                                            <th>Email</th>
                                                                            <th>Adresse</th>
                                                                            <th>actions</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        ";
        // line 361
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 361, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 362
            echo "                                                                            <tr>
                                                                                <td>";
            // line 363
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 363), "html", null, true);
            echo "</td>
                                                                                <td>";
            // line 364
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "CIN", [], "any", false, false, false, 364), "html", null, true);
            echo "</td>
                                                                                <td>";
            // line 365
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "Nom", [], "any", false, false, false, 365), "html", null, true);
            echo "</td>
                                                                                <td>";
            // line 366
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "Prenom", [], "any", false, false, false, 366), "html", null, true);
            echo "</td>
                                                                                <td><img src=\"/image/Client/";
            // line 367
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["client"], "Image", [], "any", false, false, false, 367)), "html", null, true);
            echo ".jpg\" width=\"550\" height=\"300\"></td>
                                                                                <td>";
            // line 368
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "Email", [], "any", false, false, false, 368), "html", null, true);
            echo "</td>
                                                                                <td>";
            // line 369
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "Adresse", [], "any", false, false, false, 369), "html", null, true);
            echo "</td>
                                                                                <td>
                                                                                    <a href=\"";
            // line 371
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_show", ["id" => twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 371)]), "html", null, true);
            echo "\"><button>Show</button></a>
                                                                                    <a href=\"";
            // line 372
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 372)]), "html", null, true);
            echo "\"><button>Edit</button></a>
                                                                                </td>
                                                                            </tr>
                                                                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 376
            echo "                                                                            <tr>
                                                                                <td colspan=\"9\">no records found</td>
                                                                            </tr>
                                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 380
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
        // line 401
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyage_new");
        echo "\">Add new Voyage </a> </button>
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
                                                                        ";
        // line 420
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["voyages"]) || array_key_exists("voyages", $context) ? $context["voyages"] : (function () { throw new RuntimeError('Variable "voyages" does not exist.', 420, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["voyage"]) {
            // line 421
            echo "                                                                            <tr>
                                                                                <td>";
            // line 422
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "id", [], "any", false, false, false, 422), "html", null, true);
            echo "</td>
                                                                                <td><img src=\"/image/Voyage/";
            // line 423
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["voyage"], "image", [], "any", false, false, false, 423)), "html", null, true);
            echo ".jpg\" width=\"550\" height=\"300\"></td>
                                                                                <td>";
            // line 424
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "Destination", [], "any", false, false, false, 424), "html", null, true);
            echo "</td>
                                                                                <td>";
            // line 425
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "NomVoyage", [], "any", false, false, false, 425), "html", null, true);
            echo "</td>
                                                                                <td>";
            // line 426
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "DureeVoyage", [], "any", false, false, false, 426), "html", null, true);
            echo "</td>
                                                                                <td>";
            // line 427
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "PrixVoyage", [], "any", false, false, false, 427), "html", null, true);
            echo " \$</td>
                                                                                <td>";
            // line 428
            ((twig_get_attribute($this->env, $this->source, $context["voyage"], "date", [], "any", false, false, false, 428)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "date", [], "any", false, false, false, 428), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                                                                                <td>";
            // line 429
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "valabilite", [], "any", false, false, false, 429), "html", null, true);
            echo "</td>
                                                                                <td>
                                                                                    <a href=\"";
            // line 431
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyage_show", ["id" => twig_get_attribute($this->env, $this->source, $context["voyage"], "id", [], "any", false, false, false, 431)]), "html", null, true);
            echo "\"><button>Show</button></a>
                                                                                    <a href=\"";
            // line 432
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyage_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["voyage"], "id", [], "any", false, false, false, 432)]), "html", null, true);
            echo "\"><button>Edit</button></a>
                                                                                </td>
                                                                            </tr>
                                                                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 436
            echo "                                                                            <tr>
                                                                                <td colspan=\"8\">no records found</td>
                                                                            </tr>
                                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voyage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 440
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
                                                                        <a href=\"";
        // line 461
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("restaurant_new");
        echo "\"> <button class=\"btn btn-primary btn-lg text-white mb-0 me-0\" type=\"button\"><i class=\"mdi mdi-account-plus\"></i>Add new Restaurants</button> </a>
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
                                                                        ";
        // line 477
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["restaurants"]) || array_key_exists("restaurants", $context) ? $context["restaurants"] : (function () { throw new RuntimeError('Variable "restaurants" does not exist.', 477, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["restaurant"]) {
            // line 478
            echo "                                                                            <tr>
                                                                                <td>";
            // line 479
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurant"], "id", [], "any", false, false, false, 479), "html", null, true);
            echo "</td>
                                                                                <td>";
            // line 480
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurant"], "NomRestaurant", [], "any", false, false, false, 480), "html", null, true);
            echo "</td>
                                                                                <td>";
            // line 481
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurant"], "AdresseRestaurant", [], "any", false, false, false, 481), "html", null, true);
            echo "</td>
                                                                                <td>";
            // line 482
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurant"], "NumTelRestaurant", [], "any", false, false, false, 482), "html", null, true);
            echo "</td>
                                                                                <td>";
            // line 483
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurant"], "DescriptionRestaurant", [], "any", false, false, false, 483), "html", null, true);
            echo "</td>
                                                                                <td>
                                                                                    <a href=\"";
            // line 485
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("restaurant_show", ["id" => twig_get_attribute($this->env, $this->source, $context["restaurant"], "id", [], "any", false, false, false, 485)]), "html", null, true);
            echo "\"><button>show</button></a>
                                                                                    <a href=\"";
            // line 486
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("restaurant_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["restaurant"], "id", [], "any", false, false, false, 486)]), "html", null, true);
            echo "\"><button>Edit</button></a>
                                                                                </td>
                                                                            </tr>
                                                                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 490
            echo "                                                                            <tr>
                                                                                <td colspan=\"6\">no records found</td>
                                                                            </tr>
                                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['restaurant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 494
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
                                                                        <h4 class=\"card-title card-title-dash\">la liste des excursion</h4>
                                                                        <p class=\"card-subtitle card-subtitle-dash\">You have 50+ new requests</p>
                                                                    </div>
                                                                    <div>
                                                                        <a href=\"";
        // line 515
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("excursion_new");
        echo "\"> <button class=\"btn btn-primary btn-lg text-white mb-0 me-0\" type=\"button\"><i class=\"mdi mdi-account-plus\"></i>Add new excursion</button> </a>
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
                                                                        ";
        // line 534
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["excursions"]) || array_key_exists("excursions", $context) ? $context["excursions"] : (function () { throw new RuntimeError('Variable "excursions" does not exist.', 534, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["excursion"]) {
            // line 535
            echo "                                                                            <tr>
                                                                                <td>";
            // line 536
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["excursion"], "id", [], "any", false, false, false, 536), "html", null, true);
            echo "</td>
                                                                                <td><img src=\"/image/excursion";
            // line 537
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["excursion"], "Image", [], "any", false, false, false, 537)), "html", null, true);
            echo ".jpg\" width=\"300\" height=\"150\"> </td>
                                                                                <td>";
            // line 538
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["excursion"], "NomExcursion", [], "any", false, false, false, 538), "html", null, true);
            echo "</td>
                                                                                <td>";
            // line 539
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["excursion"], "DescriptionExcursion", [], "any", false, false, false, 539), "html", null, true);
            echo "</td>
                                                                                <td>";
            // line 540
            ((twig_get_attribute($this->env, $this->source, $context["excursion"], "Date", [], "any", false, false, false, 540)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["excursion"], "Date", [], "any", false, false, false, 540), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                                                                                <td>";
            // line 541
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["excursion"], "TypeExcursion", [], "any", false, false, false, 541), "html", null, true);
            echo "</td>
                                                                                <td>";
            // line 542
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["excursion"], "Lieu", [], "any", false, false, false, 542), "html", null, true);
            echo "</td>
                                                                                <td>";
            // line 543
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["excursion"], "valabilite", [], "any", false, false, false, 543), "html", null, true);
            echo "</td>
                                                                                <td>
                                                                                    <a href=\"";
            // line 545
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("excursion_show", ["id" => twig_get_attribute($this->env, $this->source, $context["excursion"], "id", [], "any", false, false, false, 545)]), "html", null, true);
            echo "\"><button>Show</button></a>
                                                                                    <a href=\"";
            // line 546
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("excursion_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["excursion"], "id", [], "any", false, false, false, 546)]), "html", null, true);
            echo "\"><button>Edit</button></a>
                                                                                </td>
                                                                            </tr>
                                                                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 550
            echo "                                                                            <tr>
                                                                                <td colspan=\"8\">no records found</td>
                                                                            </tr>
                                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['excursion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 554
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
        // line 575
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commentaire_new");
        echo "\"> <button class=\"btn btn-primary btn-lg text-white mb-0 me-0\" type=\"button\"><i class=\"mdi mdi-account-plus\"></i>Add new commentaires</button> </a>
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
                                                                        ";
        // line 589
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new RuntimeError('Variable "commentaires" does not exist.', 589, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 590
            echo "                                                                            <tr>
                                                                                <td>";
            // line 591
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 591), "html", null, true);
            echo "</td>
                                                                                <td>";
            // line 592
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "Objet", [], "any", false, false, false, 592), "html", null, true);
            echo "</td>
                                                                                <td>";
            // line 593
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "Commentaire", [], "any", false, false, false, 593), "html", null, true);
            echo "</td>
                                                                                <td>
                                                                                    <a href=\"";
            // line 595
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commentaire_show", ["id" => twig_get_attribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 595)]), "html", null, true);
            echo "\"><button>show</button></a>
                                                                                    <a href=\"";
            // line 596
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commentaire_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 596)]), "html", null, true);
            echo "\"><button>edit</button></a>
                                                                                </td>
                                                                            </tr>
                                                                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 600
            echo "                                                                            <tr>
                                                                                <td colspan=\"4\">no records found</td>
                                                                            </tr>
                                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 604
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

    <!-- plugins:js -->
    <script src=\"";
        // line 637
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendors/js/vendor.bundle.base.js"), "html", null, true);
        echo "\"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src=\"";
        // line 640
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendors/chart.js/Chart.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 641
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 642
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendors/progressbar.js/progressbar.min.js"), "html", null, true);
        echo "\"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src=\"";
        // line 646
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/js/off-canvas.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 647
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/js/hoverable-collapse.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 648
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/js/template.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 649
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/js/settings.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 650
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/js/todolist.js"), "html", null, true);
        echo "\"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src=\"";
        // line 653
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/js/jquery.cookie.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 654
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/js/dashboard.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 655
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
        return array (  1026 => 655,  1022 => 654,  1018 => 653,  1012 => 650,  1008 => 649,  1004 => 648,  1000 => 647,  996 => 646,  989 => 642,  985 => 641,  981 => 640,  975 => 637,  940 => 604,  931 => 600,  922 => 596,  918 => 595,  913 => 593,  909 => 592,  905 => 591,  902 => 590,  897 => 589,  880 => 575,  857 => 554,  848 => 550,  839 => 546,  835 => 545,  830 => 543,  826 => 542,  822 => 541,  818 => 540,  814 => 539,  810 => 538,  806 => 537,  802 => 536,  799 => 535,  794 => 534,  772 => 515,  749 => 494,  740 => 490,  731 => 486,  727 => 485,  722 => 483,  718 => 482,  714 => 481,  710 => 480,  706 => 479,  703 => 478,  698 => 477,  679 => 461,  656 => 440,  647 => 436,  638 => 432,  634 => 431,  629 => 429,  625 => 428,  621 => 427,  617 => 426,  613 => 425,  609 => 424,  605 => 423,  601 => 422,  598 => 421,  593 => 420,  571 => 401,  548 => 380,  539 => 376,  530 => 372,  526 => 371,  521 => 369,  517 => 368,  513 => 367,  509 => 366,  505 => 365,  501 => 364,  497 => 363,  494 => 362,  489 => 361,  467 => 342,  376 => 254,  371 => 252,  365 => 249,  359 => 246,  353 => 243,  347 => 240,  330 => 226,  326 => 225,  322 => 224,  305 => 210,  298 => 205,  275 => 181,  259 => 167,  252 => 163,  246 => 160,  242 => 158,  200 => 117,  160 => 77,  136 => 55,  128 => 50,  120 => 45,  112 => 40,  102 => 32,  88 => 19,  82 => 16,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '/Back/Back-Base.html.twig' %}

{% block body %}
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
                                    <p class=\"preview-subject ellipsis font-weight-medium text-dark\" >    liste de tous les clients </p>
                                </div>
                            </a>
                            <a class=\"dropdown-item preview-item\" href=\"{{ path('voyage_index') }}\">
                                <div class=\"preview-item-content flex-grow py-2\" >
                                    <p class=\"preview-subject ellipsis font-weight-medium text-dark\" >    liste de tous les voyage </p>
                                </div>
                            </a>
                            <a class=\"dropdown-item preview-item\" href=\"{{ path('excursion_index') }}\">
                                <div class=\"preview-item-content flex-grow py-2\" >
                                    <p class=\"preview-subject ellipsis font-weight-medium text-dark\" >    liste de tous les excursion </p>
                                </div>
                            </a>
                            <a class=\"dropdown-item preview-item\" href=\"{{ path('restaurant_index') }}\">
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
                                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"{{ path('reservation_restaurant_new') }}\">Reservation Restaurant</a></li>
                                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"{{ path('reservation_excursion_index') }}\">Reservation Excursion</a></li>
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
                                <li class=\"nav-item\"> <a class=\"nav-link\"  href=\"{{ path('commentaire_index') }}\">Commentaire</a></li>
                            </ul>
                            <ul class=\"nav flex-column sub-menu\">
                                <li class=\"nav-item\"> <a class=\"nav-link\"  href=\"{{ path('voyage_index') }}\">Voyage</a></li>
                            </ul>
                            <ul class=\"nav flex-column sub-menu\">
                                <li class=\"nav-item\"> <a class=\"nav-link\"  href=\"{{ path('restaurant_index') }}\">Restaurant</a></li>
                            </ul>
                            <ul class=\"nav flex-column sub-menu\">
                                <li class=\"nav-item\"> <a class=\"nav-link\"  href=\"{{ path('excursion_index') }}\">Excursion</a></li>
                            </ul><ul class=\"nav flex-column sub-menu\">
                                <li class=\"nav-item\"> <a class=\"nav-link\"  href=\"{{ path('reclamation_index') }}\">reclamation</a></li>
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
                                                                        <button class=\"btn btn-primary btn-lg text-white mb-0 me-0\" type=\"button\"><i class=\"mdi mdi-account-plus\"></i> <a href=\"{{ path('client_new') }}\"> Add new Client </a></button>
                                                                    </div>
                                                                </div>
                                                                <div class=\"table-responsive  mt-1\">
                                                                    <table class=\"table\">
                                                                        <thead>
                                                                        <tr>
                                                                            <th>Id</th>
                                                                            <th>CIN</th>
                                                                            <th>Nom</th>
                                                                            <th>Prenom</th>
                                                                            <th>Image</th>
                                                                            <th>Numero</th>
                                                                            <th>Email</th>
                                                                            <th>Adresse</th>
                                                                            <th>actions</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        {% for client in clients %}
                                                                            <tr>
                                                                                <td>{{ client.id }}</td>
                                                                                <td>{{ client.CIN }}</td>
                                                                                <td>{{ client.Nom }}</td>
                                                                                <td>{{ client.Prenom }}</td>
                                                                                <td><img src=\"/image/Client/{{ asset( client.Image) }}.jpg\" width=\"550\" height=\"300\"></td>
                                                                                <td>{{ client.Email }}</td>
                                                                                <td>{{ client.Adresse }}</td>
                                                                                <td>
                                                                                    <a href=\"{{ path('client_show', {'id': client.id}) }}\"><button>Show</button></a>
                                                                                    <a href=\"{{ path('client_edit', {'id': client.id}) }}\"><button>Edit</button></a>
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
                                                                                <td><img src=\"/image/Voyage/{{ asset( voyage.image ) }}.jpg\" width=\"550\" height=\"300\"></td>
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
                                                                        <a href=\"{{ path('restaurant_new') }}\"> <button class=\"btn btn-primary btn-lg text-white mb-0 me-0\" type=\"button\"><i class=\"mdi mdi-account-plus\"></i>Add new Restaurants</button> </a>
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
                                                                        {% for restaurant in restaurants %}
                                                                            <tr>
                                                                                <td>{{ restaurant.id }}</td>
                                                                                <td>{{ restaurant.NomRestaurant }}</td>
                                                                                <td>{{ restaurant.AdresseRestaurant }}</td>
                                                                                <td>{{ restaurant.NumTelRestaurant }}</td>
                                                                                <td>{{ restaurant.DescriptionRestaurant }}</td>
                                                                                <td>
                                                                                    <a href=\"{{ path('restaurant_show', {'id': restaurant.id}) }}\"><button>show</button></a>
                                                                                    <a href=\"{{ path('restaurant_edit', {'id': restaurant.id}) }}\"><button>Edit</button></a>
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
                                                                        <h4 class=\"card-title card-title-dash\">la liste des excursion</h4>
                                                                        <p class=\"card-subtitle card-subtitle-dash\">You have 50+ new requests</p>
                                                                    </div>
                                                                    <div>
                                                                        <a href=\"{{ path('excursion_new') }}\"> <button class=\"btn btn-primary btn-lg text-white mb-0 me-0\" type=\"button\"><i class=\"mdi mdi-account-plus\"></i>Add new excursion</button> </a>
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
                                                                        {% for excursion in excursions %}
                                                                            <tr>
                                                                                <td>{{ excursion.id }}</td>
                                                                                <td><img src=\"/image/excursion{{ asset( excursion.Image ) }}.jpg\" width=\"300\" height=\"150\"> </td>
                                                                                <td>{{ excursion.NomExcursion }}</td>
                                                                                <td>{{ excursion.DescriptionExcursion }}</td>
                                                                                <td>{{ excursion.Date ? excursion.Date|date('Y-m-d') : '' }}</td>
                                                                                <td>{{ excursion.TypeExcursion }}</td>
                                                                                <td>{{ excursion.Lieu }}</td>
                                                                                <td>{{ excursion.valabilite }}</td>
                                                                                <td>
                                                                                    <a href=\"{{ path('excursion_show', {'id': excursion.id}) }}\"><button>Show</button></a>
                                                                                    <a href=\"{{ path('excursion_edit', {'id': excursion.id}) }}\"><button>Edit</button></a>
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
                                                                        <h4 class=\"card-title card-title-dash\">la liste des commentaires</h4>
                                                                        <p class=\"card-subtitle card-subtitle-dash\">You have 50+ new requests</p>
                                                                    </div>
                                                                    <div>
                                                                        <a href=\"{{ path('commentaire_new') }}\"> <button class=\"btn btn-primary btn-lg text-white mb-0 me-0\" type=\"button\"><i class=\"mdi mdi-account-plus\"></i>Add new commentaires</button> </a>
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
                                                                        {% for commentaire in commentaires %}
                                                                            <tr>
                                                                                <td>{{ commentaire.id }}</td>
                                                                                <td>{{ commentaire.Objet }}</td>
                                                                                <td>{{ commentaire.Commentaire }}</td>
                                                                                <td>
                                                                                    <a href=\"{{ path('commentaire_show', {'id': commentaire.id}) }}\"><button>show</button></a>
                                                                                    <a href=\"{{ path('commentaire_edit', {'id': commentaire.id}) }}\"><button>edit</button></a>
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
{% endblock %}", "Back/Back.html.twig", "C:\\xampp\\htdocs\\PIDEV\\templates\\Back\\Back.html.twig");
    }
}
