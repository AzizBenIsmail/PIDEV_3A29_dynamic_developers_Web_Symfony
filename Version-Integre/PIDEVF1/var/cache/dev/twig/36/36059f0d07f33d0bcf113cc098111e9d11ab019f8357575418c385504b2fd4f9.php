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

/* voyage/searchVoyage.html.twig */
class __TwigTemplate_4fec3620f9c2f17f75ca357786a0938fa2e513fe21268439fc00ee91b29cfed2 extends Template
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
        return "Front/front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "voyage/searchVoyage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "voyage/searchVoyage.html.twig"));

        $this->parent = $this->loadTemplate("Front/front.html.twig", "voyage/searchVoyage.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    <div id=\"main\">
        <!-- Post -->
        <section class=\"post\">
            <header class=\"major\">
                <span class=\"date\">La Liste Des Voyages</span>
            </header>
            <div id=\"wrap\">
                <ul class=\"navbar\">
                    <li>
                        <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyage_index");
        echo "\">Actualiser</a>
                    </li>
                    <li>
                        <a href=\"#\">Trie</a>
                        <ul>
                            <li><a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order_By_Dest");
        echo "\">Trie par Destination</a></li>
                            <li><a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order_By_Nom");
        echo "\">Trie par Nom</a></li>
                            <li><a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order_By_Date");
        echo "\">Trie par Date</a></li>
                            <li><a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order_By_Prix");
        echo "\">Trie par Prix</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"#\">Dest Par Continent</a>
                        <ul>
                            <li><a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Continent_Afrique");
        echo "\">Continent_Afrique</a></li>
                            <li><a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Continent_Europe");
        echo "\">Continent_Europe</a></li>
                            <li><a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Continent_Asie");
        echo "\">Continent_Asie</a></li>
                            <li><a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Continent_Amerique");
        echo "\">Continent_Amerique</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"#\">Disponibilite</a>
                        <ul>
                            <li><a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Disponible");
        echo "\">Disponible</a></li>
                            <li><a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Non_Disponible");
        echo "\">Non Disponible</a></li>
                            <li><a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Bientot_Disponible");
        echo "\">Bientot Disponible</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"#\">Recherche</a>
                        <ul>
                            <li><a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listVoyageWithSearch");
        echo "\">Recherche Par Nom</a></li>
                            <li><a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listVoyageWithSearchPrix");
        echo "\">Recherche Par Prix</a></li>
                            <li><a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listVoyageWithSearchdate");
        echo "\">Recherche Par date</a></li>
                            <li><a href=\"#\">Compte des mots de chaîne</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("DateNow");
        echo "\">à partir d'aujourd'hui</a>
                    </li>
                    <li>
                        <a class=\"btn btn-success\" href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("PDF");
        echo "\">  PDF </a>
                        <script type=\"text/javascript\">
                            function imprimer_page(){
                                window.print();
                            }
                        </script>
                    </li>


                </ul>
            </div>
            <div class=\"section-content\">

                ";
        // line 67
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["searchVoyage"]) || array_key_exists("searchVoyage", $context) ? $context["searchVoyage"] : (function () { throw new RuntimeError('Variable "searchVoyage" does not exist.', 67, $this->source); })()), 'form', ["attr" => ["class" => "form-horizontal", "novalidate" => "novalidate"]]);
        echo "

                <form>
                    <input id=\"impression\" class=\"js-programmatic-set-val btn btn-outline-primary mr-1 mb-1s\" name=\"impression\" type=\"button\" onclick=\"imprimer_page()\" value=\"Print this page\" />
                </form>
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
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["voyages"]) || array_key_exists("voyages", $context) ? $context["voyages"] : (function () { throw new RuntimeError('Variable "voyages" does not exist.', 87, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["voyage"]) {
            // line 88
            echo "                        <tr>
                            <td>";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "id", [], "any", false, false, false, 89), "html", null, true);
            echo "</td>
                            ";
            // line 90
            if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "image", [], "any", false, false, false, 90)), 0))) {
                // line 91
                echo "                                <td><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["voyage"], "image", [], "any", false, false, false, 91))), "html", null, true);
                echo "\" width=\"250\" height=\"150\"></td>
                            ";
            } else {
                // line 93
                echo "                                <td><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . "Not found.jpg")), "html", null, true);
                echo "\" width=\"250\" height=\"150\"></td>
                            ";
            }
            // line 95
            echo "                            <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "Destination", [], "any", false, false, false, 95), "html", null, true);
            echo "</td>
                            <td>";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "NomVoyage", [], "any", false, false, false, 96), "html", null, true);
            echo "</td>
                            <td>";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "DureeVoyage", [], "any", false, false, false, 97), "html", null, true);
            echo "</td>
                            <td>";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "prix", [], "any", false, false, false, 98), "html", null, true);
            echo "</td>
                            <td>";
            // line 99
            ((twig_get_attribute($this->env, $this->source, $context["voyage"], "date", [], "any", false, false, false, 99)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "date", [], "any", false, false, false, 99), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                            <td>";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "valabilite", [], "any", false, false, false, 100), "html", null, true);
            echo "</td>
                            <td>
                                <button>  <a href=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyage_show", ["id" => twig_get_attribute($this->env, $this->source, $context["voyage"], "id", [], "any", false, false, false, 102)]), "html", null, true);
            echo "\">show</a> </button>
                                <button>   <a href=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyage_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["voyage"], "id", [], "any", false, false, false, 103)]), "html", null, true);
            echo "\">edit</a></button>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 107
            echo "                        <tr>
                            <td colspan=\"8\">no records found</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voyage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "                    </tbody>
                </table>

                <button>   <a href=\"";
        // line 114
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyage_new");
        echo "\">Create new</a></button>
            </div>

        </section>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "voyage/searchVoyage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 114,  282 => 111,  273 => 107,  264 => 103,  260 => 102,  255 => 100,  251 => 99,  247 => 98,  243 => 97,  239 => 96,  234 => 95,  228 => 93,  222 => 91,  220 => 90,  216 => 89,  213 => 88,  208 => 87,  185 => 67,  169 => 54,  163 => 51,  155 => 46,  151 => 45,  147 => 44,  138 => 38,  134 => 37,  130 => 36,  121 => 30,  117 => 29,  113 => 28,  109 => 27,  100 => 21,  96 => 20,  92 => 19,  88 => 18,  80 => 13,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Front/front.html.twig' %}
{% block body %}

    <div id=\"main\">
        <!-- Post -->
        <section class=\"post\">
            <header class=\"major\">
                <span class=\"date\">La Liste Des Voyages</span>
            </header>
            <div id=\"wrap\">
                <ul class=\"navbar\">
                    <li>
                        <a href=\"{{ path('voyage_index')}}\">Actualiser</a>
                    </li>
                    <li>
                        <a href=\"#\">Trie</a>
                        <ul>
                            <li><a href=\"{{ path('order_By_Dest')}}\">Trie par Destination</a></li>
                            <li><a href=\"{{ path('order_By_Nom')}}\">Trie par Nom</a></li>
                            <li><a href=\"{{ path('order_By_Date')}}\">Trie par Date</a></li>
                            <li><a href=\"{{ path('order_By_Prix')}}\">Trie par Prix</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"#\">Dest Par Continent</a>
                        <ul>
                            <li><a href=\"{{ path('Continent_Afrique')}}\">Continent_Afrique</a></li>
                            <li><a href=\"{{ path('Continent_Europe')}}\">Continent_Europe</a></li>
                            <li><a href=\"{{ path('Continent_Asie')}}\">Continent_Asie</a></li>
                            <li><a href=\"{{ path('Continent_Amerique')}}\">Continent_Amerique</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"#\">Disponibilite</a>
                        <ul>
                            <li><a href=\"{{ path('Disponible')}}\">Disponible</a></li>
                            <li><a href=\"{{ path('Non_Disponible')}}\">Non Disponible</a></li>
                            <li><a href=\"{{ path('Bientot_Disponible')}}\">Bientot Disponible</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"#\">Recherche</a>
                        <ul>
                            <li><a href=\"{{ path('listVoyageWithSearch')}}\">Recherche Par Nom</a></li>
                            <li><a href=\"{{ path('listVoyageWithSearchPrix')}}\">Recherche Par Prix</a></li>
                            <li><a href=\"{{ path('listVoyageWithSearchdate')}}\">Recherche Par date</a></li>
                            <li><a href=\"#\">Compte des mots de chaîne</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"{{ path('DateNow')}}\">à partir d'aujourd'hui</a>
                    </li>
                    <li>
                        <a class=\"btn btn-success\" href=\"{{path('PDF') }}\">  PDF </a>
                        <script type=\"text/javascript\">
                            function imprimer_page(){
                                window.print();
                            }
                        </script>
                    </li>


                </ul>
            </div>
            <div class=\"section-content\">

                {{ form(searchVoyage, {'attr': {'class':'form-horizontal','novalidate':'novalidate'}} ) }}

                <form>
                    <input id=\"impression\" class=\"js-programmatic-set-val btn btn-outline-primary mr-1 mb-1s\" name=\"impression\" type=\"button\" onclick=\"imprimer_page()\" value=\"Print this page\" />
                </form>
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

                <button>   <a href=\"{{ path('voyage_new') }}\">Create new</a></button>
            </div>

        </section>
    </div>
{% endblock %}
", "voyage/searchVoyage.html.twig", "C:\\xampp\\htdocs\\PIDEVF1\\templates\\voyage\\searchVoyage.html.twig");
    }
}
