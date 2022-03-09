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

/* voyage/pdf.html.twig */
class __TwigTemplate_d6e9b861576f00a8b03bb8cad72f6a63fc39b18b3ebe5229ef0d39032c795714 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "voyage/pdf.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "voyage/pdf.html.twig"));

        // line 1
        echo "<p class=\"align-center\">La Liste Des Voyages</p>
<table class=\"table\" >
    <thead>
    <tr>
        <th>Id</th>
        <th>Image</th>
        <th>Destination</th>
        <th>Nom_Voyage</th>
        <th>Duree_Voyage</th>
        <th>Date</th>
        <th>Valabilite</th>
        <th>actions</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["voyages"]) || array_key_exists("voyages", $context) ? $context["voyages"] : (function () { throw new RuntimeError('Variable "voyages" does not exist.', 16, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["voyage"]) {
            // line 17
            echo "        <tr>
            <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "id", [], "any", false, false, false, 18), "html", null, true);
            echo "</td>
            ";
            // line 19
            if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "image", [], "any", false, false, false, 19)), 0))) {
                // line 20
                echo "                <td><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["voyage"], "image", [], "any", false, false, false, 20))), "html", null, true);
                echo "\" width=\"250\" height=\"150\"></td>
            ";
            } else {
                // line 22
                echo "                <td><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . "Not found.jpg")), "html", null, true);
                echo "\" width=\"250\" height=\"150\"></td>
            ";
            }
            // line 24
            echo "            <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "Destination", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
            <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "NomVoyage", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
            <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "DureeVoyage", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
            <td>";
            // line 27
            ((twig_get_attribute($this->env, $this->source, $context["voyage"], "date", [], "any", false, false, false, 27)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "date", [], "any", false, false, false, 27), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
            <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "valabilite", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
            <td>
                <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyage_show", ["id" => twig_get_attribute($this->env, $this->source, $context["voyage"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\">show</a>
                <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyage_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["voyage"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\">edit</a>
            </td>
        </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 35
            echo "        <tr>
            <td colspan=\"8\">no records found</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voyage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "    </tbody>
</table>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "voyage/pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 39,  121 => 35,  112 => 31,  108 => 30,  103 => 28,  99 => 27,  95 => 26,  91 => 25,  86 => 24,  80 => 22,  74 => 20,  72 => 19,  68 => 18,  65 => 17,  60 => 16,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p class=\"align-center\">La Liste Des Voyages</p>
<table class=\"table\" >
    <thead>
    <tr>
        <th>Id</th>
        <th>Image</th>
        <th>Destination</th>
        <th>Nom_Voyage</th>
        <th>Duree_Voyage</th>
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
            <td>{{ voyage.date ? voyage.date|date('Y-m-d') : '' }}</td>
            <td>{{ voyage.valabilite }}</td>
            <td>
                <a href=\"{{ path('voyage_show', {'id': voyage.id}) }}\">show</a>
                <a href=\"{{ path('voyage_edit', {'id': voyage.id}) }}\">edit</a>
            </td>
        </tr>
    {% else %}
        <tr>
            <td colspan=\"8\">no records found</td>
        </tr>
    {% endfor %}
    </tbody>
</table>", "voyage/pdf.html.twig", "C:\\xampp\\htdocs\\PIDEVF1\\templates\\voyage\\pdf.html.twig");
    }
}
