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

/* excursion/index.html.twig */
class __TwigTemplate_364d844a0b0f1899589817cd159cead350f5eabf5cfa066fd4892f09ee8fcdc3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "excursion/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "excursion/index.html.twig"));

        $this->parent = $this->loadTemplate("Front/front.html.twig", "excursion/index.html.twig", 1);
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
    <ul class=\"navbar\">
        <li><a href=";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("excursion_new");
        echo "  > Proposer Une Excursion </a></li>
        <li><a href=";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_excursion_index");
        echo "> Parcourir Mes Reservation </a></li>
        <li><a href=";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("excursion_indexTrie");
        echo " > Trier Par Prix  </a></li>
        <li>
            <a href=\"#\">Type</a>
            <ul>
                <li><a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("excursion_indexCulturelle");
        echo "\">Excursions Culturel</a></li>
                <li><a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("excursion_indexHistorique");
        echo "\" >Excursions Historique</a></li>
            </ul>
        </li>
    </ul>
<br> <br>
    <form class=\"w_search\">
        <div class=\"sidebar-search\">
            <div class=\"input-group custom-search-form\">
                <input type=\"text\" id=\"search\" name=\"search\" class=\"form-control\" placeholder=\"Search\">
            </div>
            <!-- /input-group --></div></form >
                                  <form id=\"tableac\">
                                  <table class=\"table\">
                                      <thead>
                                      <tr>
                                          <th>Id</th>
                                          <th>Image</th>
                                          <th>Nom_Excursion</th>
                                          <th>prix</th>
                                          <th>Date</th>
                                          <th>Type_Excursion</th>
                                          <th>Lieu</th>
                                          <th>Valabilite</th>
                                          <th>actions</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["excursions"]) || array_key_exists("excursions", $context) ? $context["excursions"] : (function () { throw new RuntimeError('Variable "excursions" does not exist.', 43, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["excursion"]) {
            // line 44
            echo "                                          <tr>
                                              <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["excursion"], "id", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                                              ";
            // line 46
            if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["excursion"], "image", [], "any", false, false, false, 46)), 0))) {
                // line 47
                echo "                                              <td><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["excursion"], "image", [], "any", false, false, false, 47))), "html", null, true);
                echo "\" width=\"250\" height=\"150\"></td>
                                              ";
            } else {
                // line 49
                echo "                                              <td><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . "Not found.jpg")), "html", null, true);
                echo "\" width=\"250\" height=\"150\"></td>
                                              ";
            }
            // line 51
            echo "                                              <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["excursion"], "NomExcursion", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                                              <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["excursion"], "prix", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                                              <td>";
            // line 53
            ((twig_get_attribute($this->env, $this->source, $context["excursion"], "Date", [], "any", false, false, false, 53)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["excursion"], "Date", [], "any", false, false, false, 53), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                                              <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["excursion"], "TypeExcursion", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                                              <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["excursion"], "Lieu", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                                              <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["excursion"], "valabilite", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                                              <td>
                                                  <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("excursion_show", ["id" => twig_get_attribute($this->env, $this->source, $context["excursion"], "id", [], "any", false, false, false, 58)]), "html", null, true);
            echo "\">Resrver</a>
                                                  <a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("excursion_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["excursion"], "id", [], "any", false, false, false, 59)]), "html", null, true);
            echo "\">edit</a>
                                              </td>
                                          </tr>
                                      ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 63
            echo "                                          <tr>
                                              <td colspan=\"9\">no records found</td>
                                          </tr>
                                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['excursion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                                      </tbody>
                                  </table>
                                  </form>
    ";
        // line 70
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["excursions"]) || array_key_exists("excursions", $context) ? $context["excursions"] : (function () { throw new RuntimeError('Variable "excursions" does not exist.', 70, $this->source); })()));
        echo "


                  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "excursion/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 70,  199 => 67,  190 => 63,  181 => 59,  177 => 58,  172 => 56,  168 => 55,  164 => 54,  160 => 53,  156 => 52,  151 => 51,  145 => 49,  139 => 47,  137 => 46,  133 => 45,  130 => 44,  125 => 43,  95 => 16,  91 => 15,  84 => 11,  80 => 10,  76 => 9,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Front/front.html.twig' %}
                  {% block body %}

                      <div id=\"main\">
                          <!-- Post -->
                          <section class=\"post\">
                              <header class=\"major\">
    <ul class=\"navbar\">
        <li><a href={{ path('excursion_new') }}  > Proposer Une Excursion </a></li>
        <li><a href={{ path('reservation_excursion_index') }}> Parcourir Mes Reservation </a></li>
        <li><a href={{ path('excursion_indexTrie') }} > Trier Par Prix  </a></li>
        <li>
            <a href=\"#\">Type</a>
            <ul>
                <li><a href=\"{{ path('excursion_indexCulturelle') }}\">Excursions Culturel</a></li>
                <li><a href=\"{{ path('excursion_indexHistorique') }}\" >Excursions Historique</a></li>
            </ul>
        </li>
    </ul>
<br> <br>
    <form class=\"w_search\">
        <div class=\"sidebar-search\">
            <div class=\"input-group custom-search-form\">
                <input type=\"text\" id=\"search\" name=\"search\" class=\"form-control\" placeholder=\"Search\">
            </div>
            <!-- /input-group --></div></form >
                                  <form id=\"tableac\">
                                  <table class=\"table\">
                                      <thead>
                                      <tr>
                                          <th>Id</th>
                                          <th>Image</th>
                                          <th>Nom_Excursion</th>
                                          <th>prix</th>
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
                                              {% if excursion.image|length > 0 %}
                                              <td><img src=\"{{ asset('uploads/'~ excursion.image ) }}\" width=\"250\" height=\"150\"></td>
                                              {% else %}
                                              <td><img src=\"{{ asset('uploads/'~ \"Not found.jpg\" ) }}\" width=\"250\" height=\"150\"></td>
                                              {% endif %}
                                              <td>{{ excursion.NomExcursion }}</td>
                                              <td>{{ excursion.prix }}</td>
                                              <td>{{ excursion.Date ? excursion.Date|date('Y-m-d') : '' }}</td>
                                              <td>{{ excursion.TypeExcursion }}</td>
                                              <td>{{ excursion.Lieu }}</td>
                                              <td>{{ excursion.valabilite }}</td>
                                              <td>
                                                  <a href=\"{{ path('excursion_show', {'id': excursion.id}) }}\">Resrver</a>
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
                                  </form>
    {{ knp_pagination_render(excursions) }}


                  {% endblock %}


", "excursion/index.html.twig", "C:\\xampp\\htdocs\\PIDEVF1\\templates\\excursion\\index.html.twig");
    }
}
