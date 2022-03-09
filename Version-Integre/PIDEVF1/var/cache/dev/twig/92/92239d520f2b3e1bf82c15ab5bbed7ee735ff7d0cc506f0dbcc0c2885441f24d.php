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

/* reservation_voyage/index.html.twig */
class __TwigTemplate_c1e5f1d4b63a738ba87ebf089a397f20fb9c66771c258c0137bc7b53a1ce3306 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation_voyage/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation_voyage/index.html.twig"));

        $this->parent = $this->loadTemplate("Front/front.html.twig", "reservation_voyage/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "ReservationVoyage index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div id=\"main\">
        <!-- Post -->
        <section class=\"post\">
            <header class=\"major\">
                <fieldset>
                    <div class=\"colums\">

                        <h1>ReservationVoyage index</h1>
                        <div id=\"wrap\">
                            <ul class=\"navbar\">
                                <li>
                                    <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_voyage_index");
        echo "\">Actualiser</a>
                                </li>
                                <li>
                                    <a href=\"#\">Trie</a>
                                    <ul>
                                        <li><a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order_By_Date_desc");
        echo "\">Trie par Date order Desc</a></li>
                                        <li><a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order_By_Date_ASC");
        echo "\">Trie par Date order Asc</a></li>>
                                    </ul>
                                </li>
                                <li>
                                    <a href=\"#\">Travel_Class</a>
                                    <ul>
                                        <li><a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Economy");
        echo "\">Economy</a></li>
                                        <li><a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Business");
        echo "\">Business</a></li>
                                        <li><a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("First");
        echo "\">First</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href=\"#\">Categories d'âge</a>
                                    <ul>
                                        <li><a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Enfants");
        echo "\">Enfants</a></li>
                                        <li><a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Adolescents");
        echo "\">Adolescents</a></li>
                                        <li><a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Adultes");
        echo "\">Adultes</a></li>
                                        <li><a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Aines");
        echo "\">Aines</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class=\"btn btn-success\" href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("PDF_Reserver");
        echo "\">  PDF </a>
                                    <script type=\"text/javascript\">
                                        function imprimer_page(){
                                            window.print();
                                        }
                                    </script>
                                </li>
                            </ul>
                        </div>
                        <form>
                            <input id=\"impression\" class=\"js-programmatic-set-val btn btn-outline-primary mr-1 mb-1s\" name=\"impression\" type=\"button\" onclick=\"imprimer_page()\" value=\"Print this page\" />
                        </form>
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
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservation_voyages"]) || array_key_exists("reservation_voyages", $context) ? $context["reservation_voyages"] : (function () { throw new RuntimeError('Variable "reservation_voyages" does not exist.', 65, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reservation_voyage"]) {
            // line 66
            echo "                            <tbody>
                            <tr>
                                <td>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_voyage"], "id", [], "any", false, false, false, 68), "html", null, true);
            echo "</td>
                                ";
            // line 69
            if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation_voyage"], "voyage", [], "any", false, false, false, 69), "image", [], "any", false, false, false, 69)), 0))) {
                // line 70
                echo "                                    <td><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation_voyage"], "voyage", [], "any", false, false, false, 70), "image", [], "any", false, false, false, 70))), "html", null, true);
                echo "\" width=\"250\" height=\"150\"></td>
                                ";
            } else {
                // line 72
                echo "                                    <td><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . "Not found.jpg")), "html", null, true);
                echo "\" width=\"250\" height=\"150\"></td>
                                ";
            }
            // line 74
            echo "                                <td>";
            ((twig_get_attribute($this->env, $this->source, $context["reservation_voyage"], "DateReservation", [], "any", false, false, false, 74)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_voyage"], "DateReservation", [], "any", false, false, false, 74), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                                <td>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_voyage"], "TravelClass", [], "any", false, false, false, 75), "html", null, true);
            echo "</td>
                                <td>";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_voyage"], "Age", [], "any", false, false, false, 76), "html", null, true);
            echo "</td>
                                <td>
                                    <a href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_voyage_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reservation_voyage"], "id", [], "any", false, false, false, 78)]), "html", null, true);
            echo "\">show</a>
                                    <a href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_voyage_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["reservation_voyage"], "id", [], "any", false, false, false, 79)]), "html", null, true);
            echo "\">edit</a>
                                </td>
                            </tr>
                            </tbody>
                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 84
            echo "                                <tr>
                                    <td colspan=\"5\">no records found</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation_voyage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "                            </tbody>

                        </table>
                        <div class=\"align-center\"> ";
        // line 91
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["reservation_voyages"]) || array_key_exists("reservation_voyages", $context) ? $context["reservation_voyages"] : (function () { throw new RuntimeError('Variable "reservation_voyages" does not exist.', 91, $this->source); })()));
        echo "</div>

                        <a href=\"";
        // line 93
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_voyage_new");
        echo "\">Resrver New Voyage</a>

        </section>

    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reservation_voyage/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 93,  251 => 91,  246 => 88,  237 => 84,  227 => 79,  223 => 78,  218 => 76,  214 => 75,  209 => 74,  203 => 72,  197 => 70,  195 => 69,  191 => 68,  187 => 66,  182 => 65,  158 => 44,  151 => 40,  147 => 39,  143 => 38,  139 => 37,  130 => 31,  126 => 30,  122 => 29,  113 => 23,  109 => 22,  101 => 17,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Front/front.html.twig' %}

{% block title %}ReservationVoyage index{% endblock %}

{% block body %}
    <div id=\"main\">
        <!-- Post -->
        <section class=\"post\">
            <header class=\"major\">
                <fieldset>
                    <div class=\"colums\">

                        <h1>ReservationVoyage index</h1>
                        <div id=\"wrap\">
                            <ul class=\"navbar\">
                                <li>
                                    <a href=\"{{ path('reservation_voyage_index')}}\">Actualiser</a>
                                </li>
                                <li>
                                    <a href=\"#\">Trie</a>
                                    <ul>
                                        <li><a href=\"{{ path('order_By_Date_desc')}}\">Trie par Date order Desc</a></li>
                                        <li><a href=\"{{ path('order_By_Date_ASC')}}\">Trie par Date order Asc</a></li>>
                                    </ul>
                                </li>
                                <li>
                                    <a href=\"#\">Travel_Class</a>
                                    <ul>
                                        <li><a href=\"{{ path('Economy')}}\">Economy</a></li>
                                        <li><a href=\"{{ path('Business')}}\">Business</a></li>
                                        <li><a href=\"{{ path('First')}}\">First</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href=\"#\">Categories d'âge</a>
                                    <ul>
                                        <li><a href=\"{{ path('Enfants')}}\">Enfants</a></li>
                                        <li><a href=\"{{ path('Adolescents')}}\">Adolescents</a></li>
                                        <li><a href=\"{{ path('Adultes')}}\">Adultes</a></li>
                                        <li><a href=\"{{ path('Aines')}}\">Aines</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class=\"btn btn-success\" href=\"{{path('PDF_Reserver') }}\">  PDF </a>
                                    <script type=\"text/javascript\">
                                        function imprimer_page(){
                                            window.print();
                                        }
                                    </script>
                                </li>
                            </ul>
                        </div>
                        <form>
                            <input id=\"impression\" class=\"js-programmatic-set-val btn btn-outline-primary mr-1 mb-1s\" name=\"impression\" type=\"button\" onclick=\"imprimer_page()\" value=\"Print this page\" />
                        </form>
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
                        <div class=\"align-center\"> {{ knp_pagination_render(reservation_voyages) }}</div>

                        <a href=\"{{ path('reservation_voyage_new') }}\">Resrver New Voyage</a>

        </section>

    </div>

{% endblock %}
", "reservation_voyage/index.html.twig", "C:\\xampp\\htdocs\\PIDEVF1\\templates\\reservation_voyage\\index.html.twig");
    }
}
