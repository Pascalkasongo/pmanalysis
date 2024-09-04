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

/* notification/index.html.twig */
class __TwigTemplate_a86f31d3328b2d435fcdbbfc1882fb55ace22142ee64978de4c2267ba6cdceb6 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "notification/index.html.twig"));

        // line 1
        yield Twig\Extension\CoreExtension::include($this->env, $context, "content/standnavbar.html.twig");
        yield "

    <style>
        body {
            padding: 20px;
        }
        .invoice-header, .invoice-footer {
            border-bottom: 2px solid #000;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .invoice-header {
            border-bottom: none;
            margin-bottom: 20px;
        }
        .invoice-footer {
            border-top: 2px solid #000;
            padding-top: 10px;
            margin-top: 20px;
        }
        .table th, .table td {
            text-align: left;
        }
    </style>
</head>
<body>
    <div class=\"container\">
        ";
        // line 31
        yield "
        <!-- En-tête du bon de commande -->
        <div class=\"invoice-header\">
            <h1> <p><strong>Projet :</strong>";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 34, $this->source); })()), "titre", [], "any", false, false, false, 34), "html", null, true);
        yield " </p></h1>
           
        </div>

        <!-- Description du bon de commande -->
        <div class=\"mb-4\">
            <h4>Description</h4>
            <p>";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 41, $this->source); })()), "description", [], "any", false, false, false, 41), "html", null, true);
        yield "</p>
        </div>

        <!-- Informations sur le client -->
        <div class=\"row mb-4\">
            <div class=\"col-md-6\">
                <h4>Informations Client</h4>
                <p><strong>Nom :</strong> ";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 48, $this->source); })()), "client", [], "any", false, false, false, 48), "nomClient", [], "any", false, false, false, 48), "html", null, true);
        yield "</p>
                <p><strong>Adresse :</strong> ";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 49, $this->source); })()), "client", [], "any", false, false, false, 49), "adresse", [], "any", false, false, false, 49), "html", null, true);
        yield "</p>
                <p><strong>Téléphone :</strong> ";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 50, $this->source); })()), "client", [], "any", false, false, false, 50), "telephone", [], "any", false, false, false, 50), "html", null, true);
        yield "</p>
                <p><strong>Email :</strong> ";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 51, $this->source); })()), "client", [], "any", false, false, false, 51), "email", [], "any", false, false, false, 51), "html", null, true);
        yield "</p>
            </div>
        </div>

        <!-- Détails des produits/services -->
        ";
        // line 89
        yield "
        <!-- Termes et conditions -->
        <div class=\"invoice-footer\">
            <h4>Termes et Conditions</h4>
            <p>Les conditions de vente sont les suivantes :</p>
            <ul>
                <li>Le paiement doit être effectué dans les 30 jours suivant la réception de la facture.</li>
                <li>Les retours doivent être effectués dans un délai de 14 jours après la réception.</li>
                <li>Les frais de livraison sont à la charge du client sauf indication contraire.</li>
            </ul>
        </div>
    </div>

    <!-- Scripts JavaScript -->
    <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
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
        return "notification/index.html.twig";
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
        return array (  116 => 89,  108 => 51,  104 => 50,  100 => 49,  96 => 48,  86 => 41,  76 => 34,  71 => 31,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('content/standnavbar.html.twig') }}

    <style>
        body {
            padding: 20px;
        }
        .invoice-header, .invoice-footer {
            border-bottom: 2px solid #000;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .invoice-header {
            border-bottom: none;
            margin-bottom: 20px;
        }
        .invoice-footer {
            border-top: 2px solid #000;
            padding-top: 10px;
            margin-top: 20px;
        }
        .table th, .table td {
            text-align: left;
        }
    </style>
</head>
<body>
    <div class=\"container\">
        {# <div class=\"no-print mb-4\">
            <button class=\"btn btn-primary\" onclick=\"window.print()\">Imprimer</button>
        </div> #}

        <!-- En-tête du bon de commande -->
        <div class=\"invoice-header\">
            <h1> <p><strong>Projet :</strong>{{notification.titre}} </p></h1>
           
        </div>

        <!-- Description du bon de commande -->
        <div class=\"mb-4\">
            <h4>Description</h4>
            <p>{{notification.description }}</p>
        </div>

        <!-- Informations sur le client -->
        <div class=\"row mb-4\">
            <div class=\"col-md-6\">
                <h4>Informations Client</h4>
                <p><strong>Nom :</strong> {{ notification.client.nomClient }}</p>
                <p><strong>Adresse :</strong> {{notification.client.adresse }}</p>
                <p><strong>Téléphone :</strong> {{notification.client.telephone }}</p>
                <p><strong>Email :</strong> {{notification.client.email}}</p>
            </div>
        </div>

        <!-- Détails des produits/services -->
        {# <h4>Détails de la Commande</h4>
        <table class=\"table table-bordered\">
            <thead>
                <tr>
                    <th>Description</th>
                    <th>Quantité</th>
                    <th>Prix Unitaire</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                {% for item in order_items %}
                <tr>
                    <td>{{ item.description }}</td>
                    <td>{{ item.quantity }}</td>
                    <td>{{ item.unit_price | number_format(2, ',', ' ') }} €</td>
                    <td>{{ item.total_price | number_format(2, ',', ' ') }} €</td>
                </tr>
                {% endfor %}
                <tr>
                    <td colspan=\"3\" class=\"text-right\"><strong>Total HT</strong></td>
                    <td>{{ total_excluding_vat | number_format(2, ',', ' ') }} €</td>
                </tr>
                <tr>
                    <td colspan=\"3\" class=\"text-right\"><strong>TVA ({{ vat_rate }}%)</strong></td>
                    <td>{{ vat_amount | number_format(2, ',', ' ') }} €</td>
                </tr>
                <tr>
                    <td colspan=\"3\" class=\"text-right\"><strong>Total TTC</strong></td>
                    <td>{{ total_including_vat | number_format(2, ',', ' ') }} €</td>
                </tr>
            </tbody>
        </table> #}

        <!-- Termes et conditions -->
        <div class=\"invoice-footer\">
            <h4>Termes et Conditions</h4>
            <p>Les conditions de vente sont les suivantes :</p>
            <ul>
                <li>Le paiement doit être effectué dans les 30 jours suivant la réception de la facture.</li>
                <li>Les retours doivent être effectués dans un délai de 14 jours après la réception.</li>
                <li>Les frais de livraison sont à la charge du client sauf indication contraire.</li>
            </ul>
        </div>
    </div>

    <!-- Scripts JavaScript -->
    <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
</body>
</html>
", "notification/index.html.twig", "C:\\Users\\SYNS-MANAGER\\Documents\\GitHub\\pmanalysis\\templates\\notification\\index.html.twig");
    }
}
