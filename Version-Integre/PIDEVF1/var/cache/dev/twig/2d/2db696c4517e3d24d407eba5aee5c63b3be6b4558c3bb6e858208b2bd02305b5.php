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

/* reservation_voyage/pdf.html.twig */
class __TwigTemplate_b9e3578f0e4db9faeed9fa7e75117d1e4f37e35300b05777360cfe66f22c4657 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation_voyage/pdf.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation_voyage/pdf.html.twig"));

        // line 1
        echo "<table class=\"table\">
    <tr>
        <th>Id</th>
        <th>Voyage</th>
        <th>Date_Reservation</th>
        <th>Travel_Class</th>
        <th>Age</th>
        <th>actions</th>
    </tr>
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservation_voyages"]) || array_key_exists("reservation_voyages", $context) ? $context["reservation_voyages"] : (function () { throw new RuntimeError('Variable "reservation_voyages" does not exist.', 10, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reservation_voyage"]) {
            // line 11
            echo "        <tbody>
        <tr>
            <td>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_voyage"], "id", [], "any", false, false, false, 13), "html", null, true);
            echo "</td>
            ";
            // line 14
            if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation_voyage"], "voyage", [], "any", false, false, false, 14), "image", [], "any", false, false, false, 14)), 0))) {
                // line 15
                echo "                <td><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation_voyage"], "voyage", [], "any", false, false, false, 15), "image", [], "any", false, false, false, 15))), "html", null, true);
                echo "\" width=\"250\" height=\"150\"></td>
            ";
            } else {
                // line 17
                echo "                <td><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . "Not found.jpg")), "html", null, true);
                echo "\" width=\"250\" height=\"150\"></td>
            ";
            }
            // line 19
            echo "            <td>";
            ((twig_get_attribute($this->env, $this->source, $context["reservation_voyage"], "DateReservation", [], "any", false, false, false, 19)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_voyage"], "DateReservation", [], "any", false, false, false, 19), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
            <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_voyage"], "TravelClass", [], "any", false, false, false, 20), "html", null, true);
            echo "</td>
            <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_voyage"], "Age", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
            <td>
                <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_voyage_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reservation_voyage"], "id", [], "any", false, false, false, 23)]), "html", null, true);
            echo "\">show</a>
                <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_voyage_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["reservation_voyage"], "id", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\">edit</a>
            </td>
        </tr>
        </tbody>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 29
            echo "        <tr>
            <td colspan=\"5\">no records found</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation_voyage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    </tbody>

</table>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "reservation_voyage/pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 33,  109 => 29,  99 => 24,  95 => 23,  90 => 21,  86 => 20,  81 => 19,  75 => 17,  69 => 15,  67 => 14,  63 => 13,  59 => 11,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table class=\"table\">
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

</table>", "reservation_voyage/pdf.html.twig", "C:\\xampp\\htdocs\\PIDEVF1\\templates\\reservation_voyage\\pdf.html.twig");
    }
}
