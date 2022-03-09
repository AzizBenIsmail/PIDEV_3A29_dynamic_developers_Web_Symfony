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

/* post/commentform.html.twig */
class __TwigTemplate_1f4d2776e80d4353b202381a98ed4d40abb60dc97119b0b566689cd269b0a72d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/commentform.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/commentform.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html lang=\"en\">
<head>
    <title>TRAVEL ME</title>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/main.css"), "html", null, true);
        echo "\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/poststyle.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/style.css"), "html", null, true);
        echo "\"/>
    <noscript><link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/noscript.css"), "html", null, true);
        echo "\" /></noscript>
</head>
<body class=\"is-preload\">

<!-- Wrapper -->
<div id=\"wrapper\" class=\"fade-in\">

    <!-- Intro -->
    <div id=\"intro\">
        <div class=\"logo\"><img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/logo.png"), "html", null, true);
        echo "\" width=\"100\" height=\"100\" /></div>
        <h1>TRAVEL
            ME</h1>
        <p>Discover Your Life ,
            Travel Where You Want
        </p>
        <ul class=\"actions\">
            <li><a href=\"#header\" class=\"button icon solid solo fa-arrow-down scrolly\">Continue</a></li>
        </ul>
    </div>

    <!-- Header -->
    <header id=\"header\">
        <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_new");
        echo "\" class=\"logo\">TRAVEL ME</a>
    </header>

    <!-- Nav -->
    <nav id=\"nav\">
        ";
        // line 38
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38)) {
            // line 39
            echo "            <ul class=\"links\">
                <li class=\"active\"><a href=\"";
            // line 40
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\">Se Connecter</a></li>
                <li><a href=\"";
            // line 41
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_registration");
            echo "\">Inscription</a></li>
            </ul>
        ";
        } else {
            // line 44
            echo "            <ul class=\"links\">
                <li ><a href=\"";
            // line 45
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
            echo "\">Actuelle</a></li>
                <li><a href=\"";
            // line 46
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyage_index");
            echo "\"> Voyage</a></li>
                <li><a href=\"";
            // line 47
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("excursion_index");
            echo "\"> Excursion</a></li>
                <li><a href=\"";
            // line 48
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("restaurant_index");
            echo "\"> restaurant</a></li>
                <li class=\"active\"><a href=\"";
            // line 49
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_new");
            echo "\">Acceuil</a></li>
            </ul>
        ";
        }
        // line 52
        echo "        <ul class=\"icons\">
            ";
        // line 53
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53)) {
            // line 54
            echo "                <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\" ><img src=\"https://img.icons8.com/external-aficons-studio-flat-aficons-studio/68/000000/external-login-user-interface-aficons-studio-flat-aficons-studio.png\"/></a></li>
            ";
        } else {
            // line 56
            echo "                <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
            echo "\" ><img src=\"https://img.icons8.com/external-kmg-design-outline-color-kmg-design/32/000000/external-log-out-user-interface-kmg-design-outline-color-kmg-design.png\"/></a></li>
            ";
        }
        // line 58
        echo "            <li><a href=\"#\" class=\"icon brands fa-twitter\"><span class=\"label\">Twitter</span></a></li>
            <li><a href=\"#\" class=\"icon brands fa-facebook-f\"><span class=\"label\">Facebook</span></a></li>
            <li><a href=\"#\" class=\"icon brands fa-instagram\"><span class=\"label\">Instagram</span></a></li>
            <li><a href=\"https://github.com/AzizBenIsmail/PIDEV-3A29-dynamic-developers\" class=\"icon brands fa-github\"><span class=\"label\">GitHub</span></a></li>
        </ul>
    </nav>

    <!-- Main -->
    <div id=\"main\">

        <div class=\"container\">
            <div class=\"main-containt\">
                    <div class=\"post-container\">
                        <div class=\"post-rows\"></div>
                        <div class=\"user-profile\">
                            ";
        // line 73
        if ((twig_get_attribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 73, $this->source); })()), "visibilite", [], "any", false, false, false, 73) === "Public")) {
            // line 74
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 74, $this->source); })()), "Image", [], "any", false, false, false, 74))), "html", null, true);
            echo "\">
                                <div>
                                    <p>";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 76, $this->source); })()), "Client", [], "any", false, false, false, 76), "UserName", [], "any", false, false, false, 76), "html", null, true);
            echo "</p>
                                    <span>";
            // line 77
            ((twig_get_attribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 77, $this->source); })()), "DateP", [], "any", false, false, false, 77)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 77, $this->source); })()), "DateP", [], "any", false, false, false, 77), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</span>
                                </div>
                            ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 79
(isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 79, $this->source); })()), "visibilite", [], "any", false, false, false, 79) === "Anonyme")) {
            // line 80
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/anonyme.svg"), "html", null, true);
            echo "\" >
                                <div>
                                    <p>Utilisateur</p>
                                    <span>";
            // line 83
            ((twig_get_attribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 83, $this->source); })()), "DateP", [], "any", false, false, false, 83)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 83, $this->source); })()), "DateP", [], "any", false, false, false, 83), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</span>
                                </div>
                            ";
        } else {
            // line 86
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/logo.png"), "html", null, true);
            echo "\">
                                <div>
                                    <p>TRAVEL ME</p>
                                    <span>";
            // line 89
            ((twig_get_attribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 89, $this->source); })()), "DateP", [], "any", false, false, false, 89)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 89, $this->source); })()), "DateP", [], "any", false, false, false, 89), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</span>
                                </div>
                            ";
        }
        // line 92
        echo "                        </div>
                        <p>";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 93, $this->source); })()), "DescriptionP", [], "any", false, false, false, 93), "html", null, true);
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_hashtag", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 93, $this->source); })()), "id", [], "any", false, false, false, 93)]), "html", null, true);
        echo "\" id=\"hashtag\"> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 93, $this->source); })()), "HashtagP", [], "any", false, false, false, 93), "html", null, true);
        echo " </a></p>
                        ";
        // line 94
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 94, $this->source); })()), "ImageP", [], "any", false, false, false, 94)), 0))) {
            // line 95
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 95, $this->source); })()), "ImageP", [], "any", false, false, false, 95))), "html", null, true);
            echo "\" class=\"post-img\">
                        ";
        } else {
            // line 97
            echo "                            <p></p>
                        ";
        }
        // line 99
        echo "                        <div class=\"post-rows\">
                            <div class=\"activity-icons\">
                                <div><a href=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_like", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 101, $this->source); })()), "id", [], "any", false, false, false, 101)]), "html", null, true);
        echo "\" class=\"btn btn-link js-like\">
                                        ";
        // line 102
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 102, $this->source); })()), "user", [], "any", false, false, false, 102) && twig_get_attribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 102, $this->source); })()), "isLikeByUser", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 102, $this->source); })()), "user", [], "any", false, false, false, 102)], "method", false, false, false, 102))) {
            // line 103
            echo "                                            <i class=\"fas fa-thumbs-up\" ></i>
                                        ";
        } else {
            // line 105
            echo "                                            <i class=\"far fa-thumbs-up\" ></i>
                                        ";
        }
        // line 107
        echo "                                        <span class=\"js-likes\">";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 107, $this->source); })()), "Likes", [], "any", false, false, false, 107)), "html", null, true);
        echo "</span>
                                        <span class=\"js-label\">J'aime</span>

                                    </a></div>
                                <div><img src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/comments.png"), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 111, $this->source); })()), "commentaires", [], "any", false, false, false, 111)), "html", null, true);
        echo " comments</div>
                            </div >
                            <div class=\"post-container\">
                                <div class=\"post-rows\"></div>
                                ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 115, $this->source); })()), "commentaires", [], "any", false, false, false, 115));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 116
            echo "                                <div class=\"user-profile\">
                                        <img src=\"";
            // line 117
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 117, $this->source); })()), "Image", [], "any", false, false, false, 117))), "html", null, true);
            echo "\">
                                        <div>
                                            <p>";
            // line 119
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["c"], "Client", [], "any", false, false, false, 119), "UserName", [], "any", false, false, false, 119), "html", null, true);
            echo "</p>

                                        </div>
                                </div>
                                <p>";
            // line 123
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "Commentaire", [], "any", false, false, false, 123), "html", null, true);
            echo "</p>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "                            </div>
                        </div>
                        </div>

                    <div class=\"write-post-container\">
                        <div class=\"user-profile\">
                            <img src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 131, $this->source); })()), "Image", [], "any", false, false, false, 131))), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"post-input-container\">
                            <button  onclick=\"openForm()\"><strong>Ajouter Un Commentaire</strong></button>
                        </div>
                    </div>

                <a  href=\"";
        // line 138
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_new");
        echo "\" ><button type=\"button\" class=\"load-more-btn\">Retourner a la Page d'accueil</button></a>
            </div>
            </div>
        </div>
    </div>

    <div class=\"login-popup\">
        <div class=\"form-popupc\" id=\"popupForm\">
            <div class=\"comment\">
            <section class=\"post\">
                <h3 class=\"fermer\" onclick=\"closeForm()\">Fermer</h3>
                <header>Ajouter Un Commentaire</header>
                <div class=\"form\">
                    ";
        // line 151
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formc"]) || array_key_exists("formc", $context) ? $context["formc"] : (function () { throw new RuntimeError('Variable "formc" does not exist.', 151, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                    <div class=\"user-profile\">
                        <img src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 153, $this->source); })()), "Image", [], "any", false, false, false, 153))), "html", null, true);
        echo "\" alt=\"logo\">
                        <div class=\"details\">
                            <p>";
        // line 155
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 155, $this->source); })()), "UserName", [], "any", false, false, false, 155), "html", null, true);
        echo "</p>
                        </div>
                    </div>
                    ";
        // line 158
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formc"]) || array_key_exists("formc", $context) ? $context["formc"] : (function () { throw new RuntimeError('Variable "formc" does not exist.', 158, $this->source); })()), "Commentaire", [], "any", false, false, false, 158), 'widget');
        echo "
                    <button type= \"submit\" class=\"btn btn-success\"> Commenter ! </button>
                    <div class=\"options\">
                    </div>

                    ";
        // line 163
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formc"]) || array_key_exists("formc", $context) ? $context["formc"] : (function () { throw new RuntimeError('Variable "formc" does not exist.', 163, $this->source); })()), 'form_end');
        echo "
                </div>
            </section>
            </div>
        </div>
    </div>


    <!-- Copyright -->
    <div id=\"copyright\">
        <ul><li>&copy; travel ME</li><li>2021/2022</li></ul>
    </div>

</div>

<!-- Scripts -->
<script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/jquery.scrollex.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/jquery.scrolly.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/browser.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/breakpoints.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/util.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/main.js"), "html", null, true);
        echo "\"></script>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js\"></script>
<script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>
<script>
    function onClickBtnLike(event){
        event.preventDefault();
        const url=this.href;
        const spanCount=this.querySelector('span.js-likes');
        const icone= this.querySelector('i');
        axios.get(url).then(function (response){
            spanCount.textContent=response.data.likes;
            if (icone.classList.contains('fas'))
                icone.classList.replace('fas','far');
            else
                icone.classList.replace('far','fas');
        })
    }
    document.querySelectorAll('a.js-like').forEach(function (link){
        link.addEventListener('click',onClickBtnLike);
    })
</script>
<script>
    function openForm() {
        document.getElementById(\"popupForm\").style.display = \"block\";
    }

    function closeForm() {
        document.getElementById(\"popupForm\").style.display = \"none\";
    }
</script>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "post/commentform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  405 => 185,  401 => 184,  397 => 183,  393 => 182,  389 => 181,  385 => 180,  381 => 179,  362 => 163,  354 => 158,  348 => 155,  343 => 153,  338 => 151,  322 => 138,  312 => 131,  304 => 125,  296 => 123,  289 => 119,  284 => 117,  281 => 116,  277 => 115,  268 => 111,  260 => 107,  256 => 105,  252 => 103,  250 => 102,  246 => 101,  242 => 99,  238 => 97,  232 => 95,  230 => 94,  222 => 93,  219 => 92,  213 => 89,  206 => 86,  200 => 83,  193 => 80,  191 => 79,  186 => 77,  182 => 76,  176 => 74,  174 => 73,  157 => 58,  151 => 56,  145 => 54,  143 => 53,  140 => 52,  134 => 49,  130 => 48,  126 => 47,  122 => 46,  118 => 45,  115 => 44,  109 => 41,  105 => 40,  102 => 39,  100 => 38,  92 => 33,  76 => 20,  64 => 11,  60 => 10,  56 => 9,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE HTML>
<html lang=\"en\">
<head>
    <title>TRAVEL ME</title>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
    <link rel=\"stylesheet\" href=\"{{ asset('front/assets/css/main.css') }}\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <link rel=\"stylesheet\" href=\"{{ asset('front/assets/css/poststyle.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('front/assets/css/style.css') }}\"/>
    <noscript><link rel=\"stylesheet\" href=\"{{ asset('front/assets/css/noscript.css') }}\" /></noscript>
</head>
<body class=\"is-preload\">

<!-- Wrapper -->
<div id=\"wrapper\" class=\"fade-in\">

    <!-- Intro -->
    <div id=\"intro\">
        <div class=\"logo\"><img src=\"{{ asset('front/images/logo.png') }}\" width=\"100\" height=\"100\" /></div>
        <h1>TRAVEL
            ME</h1>
        <p>Discover Your Life ,
            Travel Where You Want
        </p>
        <ul class=\"actions\">
            <li><a href=\"#header\" class=\"button icon solid solo fa-arrow-down scrolly\">Continue</a></li>
        </ul>
    </div>

    <!-- Header -->
    <header id=\"header\">
        <a href=\"{{ path('post_new')}}\" class=\"logo\">TRAVEL ME</a>
    </header>

    <!-- Nav -->
    <nav id=\"nav\">
        {% if not app.user %}
            <ul class=\"links\">
                <li class=\"active\"><a href=\"{{ path('security_login') }}\">Se Connecter</a></li>
                <li><a href=\"{{ path('security_registration') }}\">Inscription</a></li>
            </ul>
        {% else %}
            <ul class=\"links\">
                <li ><a href=\"{{ path('home') }}\">Actuelle</a></li>
                <li><a href=\"{{ path('voyage_index') }}\"> Voyage</a></li>
                <li><a href=\"{{ path('excursion_index') }}\"> Excursion</a></li>
                <li><a href=\"{{ path('restaurant_index') }}\"> restaurant</a></li>
                <li class=\"active\"><a href=\"{{ path('post_new') }}\">Acceuil</a></li>
            </ul>
        {% endif %}
        <ul class=\"icons\">
            {% if not app.user %}
                <li><a href=\"{{ path('security_login') }}\" ><img src=\"https://img.icons8.com/external-aficons-studio-flat-aficons-studio/68/000000/external-login-user-interface-aficons-studio-flat-aficons-studio.png\"/></a></li>
            {% else %}
                <li><a href=\"{{ path('security_logout') }}\" ><img src=\"https://img.icons8.com/external-kmg-design-outline-color-kmg-design/32/000000/external-log-out-user-interface-kmg-design-outline-color-kmg-design.png\"/></a></li>
            {% endif %}
            <li><a href=\"#\" class=\"icon brands fa-twitter\"><span class=\"label\">Twitter</span></a></li>
            <li><a href=\"#\" class=\"icon brands fa-facebook-f\"><span class=\"label\">Facebook</span></a></li>
            <li><a href=\"#\" class=\"icon brands fa-instagram\"><span class=\"label\">Instagram</span></a></li>
            <li><a href=\"https://github.com/AzizBenIsmail/PIDEV-3A29-dynamic-developers\" class=\"icon brands fa-github\"><span class=\"label\">GitHub</span></a></li>
        </ul>
    </nav>

    <!-- Main -->
    <div id=\"main\">

        <div class=\"container\">
            <div class=\"main-containt\">
                    <div class=\"post-container\">
                        <div class=\"post-rows\"></div>
                        <div class=\"user-profile\">
                            {% if p.visibilite is same as \"Public\"   %}
                                <img src=\"{{ asset('uploads/'~ user.Image ) }}\">
                                <div>
                                    <p>{{ p.Client.UserName }}</p>
                                    <span>{{ p.DateP ? p.DateP|date('Y-m-d') : '' }}</span>
                                </div>
                            {% elseif p.visibilite is same as \"Anonyme\" %}
                                <img src=\"{{ asset('front/images/anonyme.svg') }}\" >
                                <div>
                                    <p>Utilisateur</p>
                                    <span>{{ p.DateP ? p.DateP|date('Y-m-d') : '' }}</span>
                                </div>
                            {% else %}
                                <img src=\"{{ asset('front/images/logo.png') }}\">
                                <div>
                                    <p>TRAVEL ME</p>
                                    <span>{{ p.DateP ? p.DateP|date('Y-m-d') : '' }}</span>
                                </div>
                            {% endif %}
                        </div>
                        <p>{{ p.DescriptionP }}<a href=\"{{path('post_hashtag',{'id':p.id })}}\" id=\"hashtag\"> {{ p.HashtagP}} </a></p>
                        {% if  p.ImageP|length > 0 %}
                            <img src=\"{{ asset('uploads/'~ p.ImageP ) }}\" class=\"post-img\">
                        {% else %}
                            <p></p>
                        {% endif %}
                        <div class=\"post-rows\">
                            <div class=\"activity-icons\">
                                <div><a href=\"{{path('post_like',{'id':p.id })}}\" class=\"btn btn-link js-like\">
                                        {% if app.user and p.isLikeByUser(app.user) %}
                                            <i class=\"fas fa-thumbs-up\" ></i>
                                        {% else %}
                                            <i class=\"far fa-thumbs-up\" ></i>
                                        {% endif %}
                                        <span class=\"js-likes\">{{ p.Likes | length }}</span>
                                        <span class=\"js-label\">J'aime</span>

                                    </a></div>
                                <div><img src=\"{{ asset('front/images/comments.png') }}\"> {{ p.commentaires | length }} comments</div>
                            </div >
                            <div class=\"post-container\">
                                <div class=\"post-rows\"></div>
                                {% for c in p.commentaires %}
                                <div class=\"user-profile\">
                                        <img src=\"{{ asset('uploads/'~ user.Image ) }}\">
                                        <div>
                                            <p>{{ c.Client.UserName }}</p>

                                        </div>
                                </div>
                                <p>{{ c.Commentaire }}</p>
                            {% endfor %}
                            </div>
                        </div>
                        </div>

                    <div class=\"write-post-container\">
                        <div class=\"user-profile\">
                            <img src=\"{{ asset('uploads/'~ user.Image ) }}\">
                        </div>
                        <div class=\"post-input-container\">
                            <button  onclick=\"openForm()\"><strong>Ajouter Un Commentaire</strong></button>
                        </div>
                    </div>

                <a  href=\"{{ path('post_new') }}\" ><button type=\"button\" class=\"load-more-btn\">Retourner a la Page d'accueil</button></a>
            </div>
            </div>
        </div>
    </div>

    <div class=\"login-popup\">
        <div class=\"form-popupc\" id=\"popupForm\">
            <div class=\"comment\">
            <section class=\"post\">
                <h3 class=\"fermer\" onclick=\"closeForm()\">Fermer</h3>
                <header>Ajouter Un Commentaire</header>
                <div class=\"form\">
                    {{ form_start(formc,{'attr' :{'novalidate':'novalidate'}}) }}
                    <div class=\"user-profile\">
                        <img src=\"{{ asset('uploads/'~ user.Image ) }}\" alt=\"logo\">
                        <div class=\"details\">
                            <p>{{ user.UserName }}</p>
                        </div>
                    </div>
                    {{form_widget(formc.Commentaire)}}
                    <button type= \"submit\" class=\"btn btn-success\"> Commenter ! </button>
                    <div class=\"options\">
                    </div>

                    {{ form_end(formc) }}
                </div>
            </section>
            </div>
        </div>
    </div>


    <!-- Copyright -->
    <div id=\"copyright\">
        <ul><li>&copy; travel ME</li><li>2021/2022</li></ul>
    </div>

</div>

<!-- Scripts -->
<script src=\"{{ asset('front/assets/js/jquery.min.js') }}\"></script>
<script src=\"{{ asset('front/assets/js/jquery.scrollex.min.js') }}\"></script>
<script src=\"{{ asset('front/assets/js/jquery.scrolly.min.js') }}\"></script>
<script src=\"{{ asset('front/assets/js/browser.min.js') }}\"></script>
<script src=\"{{ asset('front/assets/js/breakpoints.min.js') }}\"></script>
<script src=\"{{ asset('front/assets/js/util.js') }}\"></script>
<script src=\"{{ asset('front/assets/js/main.js') }}\"></script>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js\"></script>
<script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>
<script>
    function onClickBtnLike(event){
        event.preventDefault();
        const url=this.href;
        const spanCount=this.querySelector('span.js-likes');
        const icone= this.querySelector('i');
        axios.get(url).then(function (response){
            spanCount.textContent=response.data.likes;
            if (icone.classList.contains('fas'))
                icone.classList.replace('fas','far');
            else
                icone.classList.replace('far','fas');
        })
    }
    document.querySelectorAll('a.js-like').forEach(function (link){
        link.addEventListener('click',onClickBtnLike);
    })
</script>
<script>
    function openForm() {
        document.getElementById(\"popupForm\").style.display = \"block\";
    }

    function closeForm() {
        document.getElementById(\"popupForm\").style.display = \"none\";
    }
</script>
</body>
</html>
", "post/commentform.html.twig", "C:\\xampp\\htdocs\\PIDEVF1\\templates\\post\\commentform.html.twig");
    }
}
