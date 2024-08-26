<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* facture/facture.html.twig */
class __TwigTemplate_692965b8dc3c1d6c7df6065f75a3b49fd51d47098848f9db56dc654e5a86c96f extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/facture.html.twig"));

        // line 1
        $context["total"] = 0;
        // line 2
        $context["facture_num"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2);
        // line 3
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Factures</title>
    <link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles.css"), "html", null, true);
        yield "\">
</head>
<body>
    <div class=\"invoice-box\">
        <table>
            <tr class=\"top\">
                <td colspan=\"4\">
                    <table>
                        <tr>
                            <td class=\"title\">
                                <p>PMANALYSIS</p>
                            </td>
                            <td>
                                FACTURE#:";
        // line 22
        if ((((isset($context["facture_num"]) || array_key_exists("facture_num", $context) ? $context["facture_num"] : (function () { throw new RuntimeError('Variable "facture_num" does not exist.', 22, $this->source); })()) / 100) == 1)) {
            // line 23
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["facture_num"]) || array_key_exists("facture_num", $context) ? $context["facture_num"] : (function () { throw new RuntimeError('Variable "facture_num" does not exist.', 23, $this->source); })()), "html", null, true);
            yield "
                                ";
        } else {
            // line 24
            yield "00";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["facture_num"]) || array_key_exists("facture_num", $context) ? $context["facture_num"] : (function () { throw new RuntimeError('Variable "facture_num" does not exist.', 24, $this->source); })()), "html", null, true);
        }
        yield " <br>
                                Date d'impression:";
        // line 25
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 25, $this->source); })()), "date", [], "any", false, false, false, 25)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 25, $this->source); })()), "date", [], "any", false, false, false, 25), "Y-m-d H:i:s"), "html", null, true)) : (yield ""));
        yield "<br>
                                Date de paiement: 07/01/2021
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr class=\"information\">
                <td colspan=\"4\">
                    <table>
                        <tr>
                            <td>
                               ";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 37, $this->source); })()), "client", [], "any", false, false, false, 37), "nomClient", [], "any", false, false, false, 37), "html", null, true);
        yield "<br>
                                Company Name<br>
                                ";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 39, $this->source); })()), "client", [], "any", false, false, false, 39), "telephone", [], "any", false, false, false, 39), "html", null, true);
        yield "<br>
                                ";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 40, $this->source); })()), "client", [], "any", false, false, false, 40), "email", [], "any", false, false, false, 40), "html", null, true);
        yield "<br>
                                ";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 41, $this->source); })()), "client", [], "any", false, false, false, 41), "adresse", [], "any", false, false, false, 41), "html", null, true);
        yield "<br>
                               <strong> Nom Projet:";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 42, $this->source); })()), "nom", [], "any", false, false, false, 42)), "html", null, true);
        yield "</strong>
                            </td>
                           
                        </tr>
                    </table>
                </td>
            </tr>
            <tr class=\"heading\">
                <td>Tache</td>
                <td>Price</td>
                <td>Nombre heures</td>
                <td>Ressources</td>
                <td>Total</td>
            </tr>
            ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["taches"]) || array_key_exists("taches", $context) ? $context["taches"] : (function () { throw new RuntimeError('Variable "taches" does not exist.', 56, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tache"]) {
            // line 57
            yield "            <tr class=\"item\">
                <td>";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "nomTache", [], "any", false, false, false, 58), "html", null, true);
            yield "</td>
                <td>\$";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "coutHoraire", [], "any", false, false, false, 59), "html", null, true);
            yield "</td>
                <td>";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "nombreHeure", [], "any", false, false, false, 60), "html", null, true);
            yield "</td>
                <td>";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "ressource", [], "any", false, false, false, 61), "coutRessource", [], "any", false, false, false, 61), "html", null, true);
            yield "</td>
                <td>\$";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "coutHoraire", [], "any", false, false, false, 62) * CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "nombreHeure", [], "any", false, false, false, 62)) + CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "ressource", [], "any", false, false, false, 62), "coutRessource", [], "any", false, false, false, 62)), "html", null, true);
            yield "</td>
                ";
            // line 63
            $context["total"] = (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 63, $this->source); })()) + (CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "coutHoraire", [], "any", false, false, false, 63) * CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "nombreHeure", [], "any", false, false, false, 63))) + ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "ressource", [], "any", false, true, false, 63), "coutRessource", [], "any", true, true, false, 63)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "ressource", [], "any", false, true, false, 63), "coutRessource", [], "any", false, false, false, 63), 0)) : (0)));
            // line 64
            yield "            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tache'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        yield "            <tr class=\"total\">
                <td></td>
                <td colspan=\"4\">Sub-Total: \$";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 68, $this->source); })()), "html", null, true);
        yield "</td>
            </tr>
            <tr class=\"total\">
                <td></td>
                <td colspan=\"4\">Tax Vat (0%): \$ 0</td>
            </tr>
            <tr class=\"total\">
                <td></td>
                <td colspan=\"4\">Discount (0%): \$ 0</td>
            </tr>
            <tr class=\"total\">
                <td></td>
                <td colspan=\"4\" style=\"background: red;\"><strong>Grand Total: \$";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 80, $this->source); })()), "html", null, true);
        yield "</strong></td>
            </tr>
        </table>
        
    </div>
</body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "facture/facture.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  187 => 80,  172 => 68,  168 => 66,  161 => 64,  159 => 63,  155 => 62,  151 => 61,  147 => 60,  143 => 59,  139 => 58,  136 => 57,  132 => 56,  115 => 42,  111 => 41,  107 => 40,  103 => 39,  98 => 37,  83 => 25,  77 => 24,  71 => 23,  69 => 22,  53 => 9,  45 => 3,  43 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set total = 0%}
{% set facture_num = facture.id%}
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Factures</title>
    <link rel=\"stylesheet\" href=\"{{asset('styles.css')}}\">
</head>
<body>
    <div class=\"invoice-box\">
        <table>
            <tr class=\"top\">
                <td colspan=\"4\">
                    <table>
                        <tr>
                            <td class=\"title\">
                                <p>PMANALYSIS</p>
                            </td>
                            <td>
                                FACTURE#:{% if facture_num/100==1%}
                                {{facture_num}}
                                {%else%}00{{facture_num}}{%endif%} <br>
                                Date d'impression:{{ facture.date ? facture.date|date('Y-m-d H:i:s') : '' }}<br>
                                Date de paiement: 07/01/2021
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr class=\"information\">
                <td colspan=\"4\">
                    <table>
                        <tr>
                            <td>
                               {{projet.client.nomClient}}<br>
                                Company Name<br>
                                {{projet.client.telephone}}<br>
                                {{projet.client.email}}<br>
                                {{projet.client.adresse}}<br>
                               <strong> Nom Projet:{{projet.nom|upper}}</strong>
                            </td>
                           
                        </tr>
                    </table>
                </td>
            </tr>
            <tr class=\"heading\">
                <td>Tache</td>
                <td>Price</td>
                <td>Nombre heures</td>
                <td>Ressources</td>
                <td>Total</td>
            </tr>
            {% for tache in taches %}
            <tr class=\"item\">
                <td>{{tache.nomTache}}</td>
                <td>\${{tache.coutHoraire}}</td>
                <td>{{tache.nombreHeure}}</td>
                <td>{{tache.ressource.coutRessource}}</td>
                <td>\${{tache.coutHoraire*tache.nombreHeure+(tache.ressource.coutRessource)}}</td>
                {% set total = total +(tache.coutHoraire*tache.nombreHeure)+(tache.ressource.coutRessource|default(0)) %}
            </tr>
            {%endfor%}
            <tr class=\"total\">
                <td></td>
                <td colspan=\"4\">Sub-Total: \${{total}}</td>
            </tr>
            <tr class=\"total\">
                <td></td>
                <td colspan=\"4\">Tax Vat (0%): \$ 0</td>
            </tr>
            <tr class=\"total\">
                <td></td>
                <td colspan=\"4\">Discount (0%): \$ 0</td>
            </tr>
            <tr class=\"total\">
                <td></td>
                <td colspan=\"4\" style=\"background: red;\"><strong>Grand Total: \${{total}}</strong></td>
            </tr>
        </table>
        
    </div>
</body>
</html>
", "facture/facture.html.twig", "C:\\Users\\SYNS-MANAGER\\Nouveau dossier\\my_project_directory\\templates\\facture\\facture.html.twig");
    }
}
