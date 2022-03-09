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
class __TwigTemplate_a52b163f040a2ec5cad63064176da14fbeb7dfcdfa84db076b872de1ec3b6540 extends Template
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
        echo "<table>
    <thead>
    <tr>

        <th>Id</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>login</th>
        <th>password</th>
        <th>Email</th>
        <th>Telephone</th>
        <th>adresse</th>
        <th>image</th>


    </tr>
    </thead>
    <tbody>
    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["voyages"]) || array_key_exists("voyages", $context) ? $context["voyages"] : (function () { throw new RuntimeError('Variable "voyages" does not exist.', 19, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["voyage"]) {
            // line 20
            echo "        <tr>
            <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "id", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
            ";
            // line 22
            if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "image", [], "any", false, false, false, 22)), 0))) {
                // line 23
                echo "                <td><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["voyage"], "image", [], "any", false, false, false, 23))), "html", null, true);
                echo "\" width=\"200\" height=\"150\"></td>
            ";
            } else {
                // line 25
                echo "                <td><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . "Not found")), "html", null, true);
                echo "\" width=\"350\" height=\"150\"></td>
            ";
            }
            // line 27
            echo "            <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "Destination", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
            <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "NomVoyage", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
            <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "DureeVoyage", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
            <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "PrixVoyage", [], "any", false, false, false, 30), "html", null, true);
            echo " \$</td>
            <td>";
            // line 31
            ((twig_get_attribute($this->env, $this->source, $context["voyage"], "date", [], "any", false, false, false, 31)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "date", [], "any", false, false, false, 31), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
            <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "valabilite", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>

        </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 36
            echo "        <tr>
            <td colspan=\"8\">no records found</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voyage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
    </tbody>
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
        return array (  128 => 40,  119 => 36,  110 => 32,  106 => 31,  102 => 30,  98 => 29,  94 => 28,  89 => 27,  83 => 25,  77 => 23,  75 => 22,  71 => 21,  68 => 20,  63 => 19,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table>
    <thead>
    <tr>

        <th>Id</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>login</th>
        <th>password</th>
        <th>Email</th>
        <th>Telephone</th>
        <th>adresse</th>
        <th>image</th>


    </tr>
    </thead>
    <tbody>
    {% for voyage in voyages %}
        <tr>
            <td>{{ voyage.id }}</td>
            {% if voyage.image|length > 0 %}
                <td><img src=\"{{ asset('uploads/'~ voyage.image ) }}\" width=\"200\" height=\"150\"></td>
            {% else %}
                <td><img src=\"{{ asset('uploads/'~ \"Not found\" ) }}\" width=\"350\" height=\"150\"></td>
            {% endif %}
            <td>{{ voyage.Destination }}</td>
            <td>{{ voyage.NomVoyage }}</td>
            <td>{{ voyage.DureeVoyage }}</td>
            <td>{{ voyage.PrixVoyage }} \$</td>
            <td>{{ voyage.date ? voyage.date|date('Y-m-d') : '' }}</td>
            <td>{{ voyage.valabilite }}</td>

        </tr>
    {% else %}
        <tr>
            <td colspan=\"8\">no records found</td>
        </tr>
    {% endfor %}

    </tbody>
</table>", "voyage/pdf.html.twig", "C:\\xampp\\htdocs\\PIDEV\\templates\\voyage\\pdf.html.twig");
    }
}
