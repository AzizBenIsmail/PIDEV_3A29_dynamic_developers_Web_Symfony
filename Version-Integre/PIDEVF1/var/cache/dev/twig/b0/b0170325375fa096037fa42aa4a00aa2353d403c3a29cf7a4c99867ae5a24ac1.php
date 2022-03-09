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

/* Post/index.html.twig */
class __TwigTemplate_06c1bb766d9b4eb9d8f56b9cf37920d0e518c761518358f8d003853d7ad3e193 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Post/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Post/index.html.twig"));

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
        // line 53
        echo "        <ul class=\"icons\">
            ";
        // line 54
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "user", [], "any", false, false, false, 54)) {
            // line 55
            echo "                <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\" ><img src=\"https://img.icons8.com/external-aficons-studio-flat-aficons-studio/68/000000/external-login-user-interface-aficons-studio-flat-aficons-studio.png\"/></a></li>
            ";
        } else {
            // line 57
            echo "                <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
            echo "\" ><img src=\"https://img.icons8.com/external-kmg-design-outline-color-kmg-design/32/000000/external-log-out-user-interface-kmg-design-outline-color-kmg-design.png\"/></a></li>
            ";
        }
        // line 59
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
                <div class=\"write-post-container\">
                    <div class=\"user-profile\">
                        <img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 73, $this->source); })()), "Image", [], "any", false, false, false, 73))), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"post-input-container\">
                        <button  onclick=\"openForm()\"><strong>Partagez avec nous vos meilleurs moments ";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 76, $this->source); })()), "UserName", [], "any", false, false, false, 76), "html", null, true);
        echo "</strong></button>
                    </div>
                </div>
                 ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["newsfeedposts"]) || array_key_exists("newsfeedposts", $context) ? $context["newsfeedposts"] : (function () { throw new RuntimeError('Variable "newsfeedposts" does not exist.', 79, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 80
            echo "                <div class=\"post-container\">
                    <div class=\"post-rows\"></div>
                    <div class=\"user-profile\">
                        ";
            // line 83
            if ((twig_get_attribute($this->env, $this->source, $context["p"], "visibilite", [], "any", false, false, false, 83) === "Public")) {
                // line 84
                echo "                            <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 84, $this->source); })()), "Image", [], "any", false, false, false, 84))), "html", null, true);
                echo "\">
                        <div>
                            <p>";
                // line 86
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "Client", [], "any", false, false, false, 86), "UserName", [], "any", false, false, false, 86), "html", null, true);
                echo "</p>
                            <span>";
                // line 87
                ((twig_get_attribute($this->env, $this->source, $context["p"], "DateP", [], "any", false, false, false, 87)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "DateP", [], "any", false, false, false, 87), "Y-m-d"), "html", null, true))) : (print ("")));
                echo "</span>
                        </div>
                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 89
$context["p"], "visibilite", [], "any", false, false, false, 89) === "Anonyme")) {
                // line 90
                echo "                            <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/anonyme.svg"), "html", null, true);
                echo "\">
                            <div>
                                <p>Utilisateur</p>
                                <span>";
                // line 93
                ((twig_get_attribute($this->env, $this->source, $context["p"], "DateP", [], "any", false, false, false, 93)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "DateP", [], "any", false, false, false, 93), "Y-m-d"), "html", null, true))) : (print ("")));
                echo "</span>
                            </div>
                         ";
            } else {
                // line 96
                echo "                             <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/logo.png"), "html", null, true);
                echo "\">
                             <div>
                                 <p>TRAVEL ME</p>
                                 <span>";
                // line 99
                ((twig_get_attribute($this->env, $this->source, $context["p"], "DateP", [], "any", false, false, false, 99)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "DateP", [], "any", false, false, false, 99), "Y-m-d"), "html", null, true))) : (print ("")));
                echo "</span>
                             </div>
                         ";
            }
            // line 102
            echo "                    </div>
                    <p>";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "DescriptionP", [], "any", false, false, false, 103), "html", null, true);
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_hashtag", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 103)]), "html", null, true);
            echo "\" id=\"hashtag\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "HashtagP", [], "any", false, false, false, 103), "html", null, true);
            echo " </a></p>
                    ";
            // line 104
            if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "ImageP", [], "any", false, false, false, 104)), 0))) {
                // line 105
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["p"], "ImageP", [], "any", false, false, false, 105))), "html", null, true);
                echo "\" class=\"post-img\">
                    ";
            } else {
                // line 107
                echo "                        <p></p>
                    ";
            }
            // line 109
            echo "                    <div class=\"post-rows\">
                        <div class=\"activity-icons\">
                            <div><a href=\"";
            // line 111
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_like", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 111)]), "html", null, true);
            echo "\" class=\"btn btn-link js-like\">
                                    ";
            // line 112
            if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 112, $this->source); })()), "user", [], "any", false, false, false, 112) && twig_get_attribute($this->env, $this->source, $context["p"], "isLikeByUser", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 112, $this->source); })()), "user", [], "any", false, false, false, 112)], "method", false, false, false, 112))) {
                // line 113
                echo "                                        <i class=\"fas fa-thumbs-up\" ></i>
                                    ";
            } else {
                // line 115
                echo "                                    <i class=\"far fa-thumbs-up\" ></i>
                                    ";
            }
            // line 117
            echo "                                    <span class=\"js-likes\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "Likes", [], "any", false, false, false, 117)), "html", null, true);
            echo "</span>
                                    <span class=\"js-label\">J'aime</span>

                                </a></div>
                          <div><img src=\"";
            // line 121
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/comments.png"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "commentaires", [], "any", false, false, false, 121)), "html", null, true);
            echo " comments</div>
                        </div>
                    </div>
                </div>
                     <div class=\"write-post-container\">
                         <div class=\"user-profile\">
                             <img src=\"";
            // line 127
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 127, $this->source); })()), "Image", [], "any", false, false, false, 127))), "html", null, true);
            echo "\">
                         </div>
                         <div class=\"post-input-container\">
                             <a href=\"";
            // line 130
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userpost", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 130)]), "html", null, true);
            echo "\" ><strong>Ajouter Un Commentaire</strong></a>
                         </div>
                     </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "                <footer>
                    <div class=\"pagination\">
                        ";
        // line 136
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["newsfeedposts"]) || array_key_exists("newsfeedposts", $context) ? $context["newsfeedposts"] : (function () { throw new RuntimeError('Variable "newsfeedposts" does not exist.', 136, $this->source); })()));
        echo "
                    </div>
                </footer>
            </div>
        </div>
    </div>

    <div class=\"login-popup\">
        <div class=\"form-popup\" id=\"popupForm\">
    <section class=\"post\">
        <header>Ajouter Publication</header>
        <div class=\"form\">
            ";
        // line 148
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formp"]) || array_key_exists("formp", $context) ? $context["formp"] : (function () { throw new RuntimeError('Variable "formp" does not exist.', 148, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
            <div class=\"user-profile\">
                <img src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 150, $this->source); })()), "Image", [], "any", false, false, false, 150))), "html", null, true);
        echo "\" alt=\"logo\">
                <div class=\"details\">
                    <p>";
        // line 152
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 152, $this->source); })()), "UserName", [], "any", false, false, false, 152), "html", null, true);
        echo "</p>
                    <div class=\"privacy\">
                        ";
        // line 154
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formp"]) || array_key_exists("formp", $context) ? $context["formp"] : (function () { throw new RuntimeError('Variable "formp" does not exist.', 154, $this->source); })()), "visibilite", [], "any", false, false, false, 154), 'widget');
        echo "
                    </div>
                </div>
            </div>
            ";
        // line 158
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formp"]) || array_key_exists("formp", $context) ? $context["formp"] : (function () { throw new RuntimeError('Variable "formp" does not exist.', 158, $this->source); })()), "DescriptionP", [], "any", false, false, false, 158), 'widget');
        echo "
            ";
        // line 159
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formp"]) || array_key_exists("formp", $context) ? $context["formp"] : (function () { throw new RuntimeError('Variable "formp" does not exist.', 159, $this->source); })()), "HashtagP", [], "any", false, false, false, 159), 'widget');
        echo "
            <div class=\"options\">
                ";
        // line 161
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formp"]) || array_key_exists("formp", $context) ? $context["formp"] : (function () { throw new RuntimeError('Variable "formp" does not exist.', 161, $this->source); })()), "ImageP", [], "any", false, false, false, 161), 'widget', ["attr" => ["class" => "list"]]);
        echo "
            </div>
            ";
        // line 163
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formp"]) || array_key_exists("formp", $context) ? $context["formp"] : (function () { throw new RuntimeError('Variable "formp" does not exist.', 163, $this->source); })()), "Publier", [], "any", false, false, false, 163), 'widget', ["attr" => ["class" => "postbutton", "type" => "SubmitType"]]);
        echo "
            ";
        // line 164
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formp"]) || array_key_exists("formp", $context) ? $context["formp"] : (function () { throw new RuntimeError('Variable "formp" does not exist.', 164, $this->source); })()), 'form_end');
        echo "
        </div>
        <p class=\"fermer\" onclick=\"closeForm()\">Fermer</p>
    </section>
        </div>
    </div>


    <!-- Copyright -->
    <div id=\"copyright\">
        <ul><li>&copy; travel ME</li><li>2021/2022</li></ul>
    </div>

</div>

<!-- Scripts -->
<script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/jquery.scrollex.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/jquery.scrolly.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/browser.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/breakpoints.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/util.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 186
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
        return "Post/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  418 => 186,  414 => 185,  410 => 184,  406 => 183,  402 => 182,  398 => 181,  394 => 180,  375 => 164,  371 => 163,  366 => 161,  361 => 159,  357 => 158,  350 => 154,  345 => 152,  340 => 150,  335 => 148,  320 => 136,  316 => 134,  306 => 130,  300 => 127,  289 => 121,  281 => 117,  277 => 115,  273 => 113,  271 => 112,  267 => 111,  263 => 109,  259 => 107,  253 => 105,  251 => 104,  243 => 103,  240 => 102,  234 => 99,  227 => 96,  221 => 93,  214 => 90,  212 => 89,  207 => 87,  203 => 86,  197 => 84,  195 => 83,  190 => 80,  186 => 79,  180 => 76,  174 => 73,  158 => 59,  152 => 57,  146 => 55,  144 => 54,  141 => 53,  134 => 49,  130 => 48,  126 => 47,  122 => 46,  118 => 45,  115 => 44,  109 => 41,  105 => 40,  102 => 39,  100 => 38,  92 => 33,  76 => 20,  64 => 11,  60 => 10,  56 => 9,  51 => 7,  43 => 1,);
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
                <div class=\"write-post-container\">
                    <div class=\"user-profile\">
                        <img src=\"{{ asset('uploads/'~ user.Image ) }}\">
                    </div>
                    <div class=\"post-input-container\">
                        <button  onclick=\"openForm()\"><strong>Partagez avec nous vos meilleurs moments {{ user.UserName }}</strong></button>
                    </div>
                </div>
                 {% for p in newsfeedposts %}
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
                            <img src=\"{{ asset('front/images/anonyme.svg') }}\">
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
                          <div><img src=\"{{ asset('front/images/comments.png') }}\">{{ p.commentaires | length }} comments</div>
                        </div>
                    </div>
                </div>
                     <div class=\"write-post-container\">
                         <div class=\"user-profile\">
                             <img src=\"{{ asset('uploads/'~ user.Image ) }}\">
                         </div>
                         <div class=\"post-input-container\">
                             <a href=\"{{ path('userpost',{'id':p.id }) }}\" ><strong>Ajouter Un Commentaire</strong></a>
                         </div>
                     </div>
                {% endfor  %}
                <footer>
                    <div class=\"pagination\">
                        {{ knp_pagination_render(newsfeedposts) }}
                    </div>
                </footer>
            </div>
        </div>
    </div>

    <div class=\"login-popup\">
        <div class=\"form-popup\" id=\"popupForm\">
    <section class=\"post\">
        <header>Ajouter Publication</header>
        <div class=\"form\">
            {{ form_start(formp,{'attr' :{'novalidate':'novalidate'}}) }}
            <div class=\"user-profile\">
                <img src=\"{{ asset('uploads/'~ user.Image ) }}\" alt=\"logo\">
                <div class=\"details\">
                    <p>{{ user.UserName }}</p>
                    <div class=\"privacy\">
                        {{form_widget(formp.visibilite)}}
                    </div>
                </div>
            </div>
            {{form_widget(formp.DescriptionP)}}
            {{ form_widget(formp.HashtagP) }}
            <div class=\"options\">
                {{form_widget(formp.ImageP,{'attr':{'class':'list'}})}}
            </div>
            {{ form_widget(formp.Publier,{'attr':{'class':'postbutton','type':'SubmitType'}})}}
            {{ form_end(formp) }}
        </div>
        <p class=\"fermer\" onclick=\"closeForm()\">Fermer</p>
    </section>
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
", "Post/index.html.twig", "C:\\xampp\\htdocs\\PIDEVF1\\templates\\post\\index.html.twig");
    }
}
