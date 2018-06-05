<?php

/* alt_facture.html */
class __TwigTemplate_50866c171546d30c8c7ec4516f04d617687c18121799b40d452e375dd4d33428 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo ($context["S_CONTENT_DIRECTION"] ?? null);
        echo "\" lang=\"";
        echo ($context["S_USER_LANG"] ?? null);
        echo "\">
<head>
<meta charset=\"utf-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
";
        // line 6
        if (($context["DESCRIPTION_PAGE"] ?? null)) {
            // line 7
            echo "<meta name=\"description\" content=\"";
            echo ($context["DESCRIPTION_PAGE"] ?? null);
            echo "\">
";
        }
        // line 9
        echo "<meta name=\"keywords\" content=\"alternance, offres alternance, formation alternance, alternance ecole, ecole alternance, contrat alternance, formations en alternance, stage, emploi, job\">
";
        // line 10
        echo ($context["META"] ?? null);
        echo "
<title>";
        // line 11
        echo ($context["PAGE_TITLE"] ?? null);
        echo "</title>

";
        // line 13
        if (($context["ALT_PRODUCTION"] ?? null)) {
            // line 14
            echo "<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-111385779-1\"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-111385779-1');
</script>
";
        }
        // line 24
        echo "

<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>

 <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\" integrity=\"sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb\" crossorigin=\"anonymous\"> 
 <link rel=\"stylesheet\" type=\"text/css\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.min.css\">
  

";
        // line 32
        if (($context["ALT_STYLE_fORUM"] ?? null)) {
            // line 33
            echo "<link href=\"";
            echo ($context["T_FONT_AWESOME_LINK"] ?? null);
            echo "\" rel=\"stylesheet\">
<link href=\"";
            // line 34
            echo ($context["T_STYLESHEET_LINK"] ?? null);
            echo "\" rel=\"stylesheet\">
";
        }
        // line 36
        echo "
";
        // line 37
        if ((($context["S_CONTENT_DIRECTION"] ?? null) == "rtl")) {
            // line 38
            echo "\t<link href=\"";
            echo ($context["T_THEME_PATH"] ?? null);
            echo "/bidi.css?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\" rel=\"stylesheet\">
";
        }
        // line 40
        echo "
";
        // line 41
        if (($context["S_PLUPLOAD"] ?? null)) {
            // line 42
            echo "\t<link href=\"";
            echo ($context["T_THEME_PATH"] ?? null);
            echo "/plupload.css?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\" rel=\"stylesheet\">
";
        }
        // line 44
        echo "
";
        // line 45
        if (($context["S_COOKIE_NOTICE"] ?? null)) {
            // line 46
            echo "\t<link href=\"";
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/cookieconsent/cookieconsent.min.css?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\" rel=\"stylesheet\">
";
        }
        // line 48
        echo "


";
        // line 51
        // line 52
        echo "
";
        // line 53
        echo $this->getAttribute(($context["definition"] ?? null), "STYLESHEETS", array());
        echo "

";
        // line 55
        // line 56
        echo "
<link rel=\"shortcut icon\" href=\"favicon.ico\" type=\"image/x-icon\">
<link rel=\"icon\" href=\"favicon.ico\" type=\"image/x-icon\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/alt.css\">

<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'>

</head>
<body id=\"monalternance\" class=\"nojs notouch section-";
        // line 64
        echo ($context["SCRIPT_NAME"] ?? null);
        echo " ";
        echo ($context["S_CONTENT_DIRECTION"] ?? null);
        echo " ";
        echo ($context["BODY_CLASS"] ?? null);
        echo "\" data-online-text=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ONLINE");
        echo "\">


<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
    \t\t<div class=\"invoice-title\">
                    <a href=\"";
        // line 71
        echo ($context["U_SITE_HOME"] ?? null);
        echo "\"><img src=\"";
        echo ($context["T_IMAGES_PATH"] ?? null);
        echo "site/logo/";
        echo ($context["IMAGE_LOGO_MON_ALTERNANCE"] ?? null);
        echo "\" border=\"0\" class=\"ml-1\" alt=\"Mon Alternance logo\"></a>
    \t\t\t<br>
    \t\t</div>
            <hr>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <address>
            <strong>Destinataire :</strong><br>
                ";
        // line 81
        echo ($context["facture_nom"] ?? null);
        echo "<br>
                ";
        // line 82
        echo ($context["facture_adresse_ligne1"] ?? null);
        echo "<br>
                ";
        // line 83
        echo ($context["facture_adresse_ligne2"] ?? null);
        echo "<br>
                ";
        // line 84
        echo ($context["facture_adresse_cp"] ?? null);
        echo " ";
        echo ($context["facture_adresse_ville"] ?? null);
        echo "
            </address>
        </div>
        <div class=\"col-md-6\">
            Date de la facture : ";
        // line 88
        echo ($context["facture_date"] ?? null);
        echo "
            <br>N° de compte : ";
        // line 89
        echo ($context["facture_compte"] ?? null);
        echo "
            <br>N° de facture : ";
        // line 90
        echo ($context["facture_ref"] ?? null);
        echo "
            <br>Date d'échéance : paiement immédiat
        </div>
    </div>
    <div class=\"row\">
    \t<div class=\"col-md-12\">
    \t\t<div class=\"panel panel-default\">
    \t\t\t<div class=\"panel-heading\">
    \t\t\t\t<h3 class=\"panel-title\"><strong>Facture N° ";
        // line 98
        echo ($context["facture_ref"] ?? null);
        echo "</strong></h3>
    \t\t\t</div>
    \t\t\t<div class=\"panel-body\">
    \t\t\t\t<div class=\"table-responsive\">
    \t\t\t\t\t<table class=\"table table-condensed\">
    \t\t\t\t\t\t<thead>
                                <tr>
                                    <td><strong>Description</strong></td>
                                    <td class=\"text-center\"><strong>Quantité</strong></td>
        \t\t\t\t\t\t\t<td class=\"text-center\"><strong>Prix HT</strong></td>
        \t\t\t\t\t\t\t<td class=\"text-center\"><strong>Montant TVA</strong></td>
        \t\t\t\t\t\t\t<td class=\"text-right\"><strong>Total TTC</strong></td>
                                </tr>
    \t\t\t\t\t\t</thead>
    \t\t\t\t\t\t<tbody>
    \t\t\t\t\t\t\t
    \t\t\t\t\t\t\t<tr>
    \t\t\t\t\t\t\t\t<td>";
        // line 115
        echo ($context["facture_ligne_description"] ?? null);
        echo "</td>
    \t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 116
        echo ($context["facture_ligne_quantite"] ?? null);
        echo "</td>
    \t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 117
        echo ($context["facture_ligne_montant_ht"] ?? null);
        echo " €</td>
                                    <td class=\"text-center\">";
        // line 118
        echo ($context["facture_ligne_montant_tva"] ?? null);
        echo " €</td>
                                    <td class=\"text-right\">";
        // line 119
        echo ($context["facture_ligne_montnat_ttc"] ?? null);
        echo " €</td>
    \t\t\t\t\t\t\t</tr>
                              
    \t\t\t\t\t\t</tbody>
    \t\t\t\t\t</table>
    \t\t\t\t</div>
    \t\t\t</div>
    \t\t</div>
    \t</div>
    </div>
    <div class=\"row\">
            <div class=\"col-md-8\">
                &nbsp;
            </div>
            <div class=\"col-md-4\">
                <br>
                    
                    <div class=\"panel-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-condensed\">
                                <tbody>
                                    <tr>
                                        <td><strong>Total HT</strong></td>
                                        <td class=\"text-center\">";
        // line 142
        echo ($context["facture_total_ht"] ?? null);
        echo " €</td>
                                    </tr>
                                    <tr>
                                        <td><strong>TVA 20 %</strong></td>
                                        <td class=\"text-center\">";
        // line 146
        echo ($context["facture_total_tva"] ?? null);
        echo " €</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Total TTC</strong></td>
                                        <td class=\"text-center\">";
        // line 150
        echo ($context["facture_total_ttc"] ?? null);
        echo " €</td>
                                    </tr>
                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                
            </div>
        </div>
</div>

<div style=\"text-align: center; font-size: 10px\">
<br><br>Epsilon SAS, RCS Toulouse 834 147 548, 8 Esplanade Compans Caffarelli - Immeuble Atria, 31000 Toulouse. Capital: 6.000€  TVA: FR87834147548\t\t\t\t\t\t
<br>Sans ordre de virement sous 3 jours, les services souscrits sur www.mon-alternance.fr seront suspendu.\t\t\t\t\t\t
<br>Pas d'escompte pour reglément anticipé. \t\t\t\t\t\t
<br>Indemnité forfataire pour frais de recouvrement en cas de retard de virement : 15€.\t\t\t\t\t\t
</div>

</div>



";
        // line 173
        if (($context["S_COOKIE_NOTICE"] ?? null)) {
            // line 174
            echo "    <script src=\"";
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/cookieconsent/cookieconsent.min.js?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\"></script>
    <script>
        window.addEventListener(\"load\", function(){
            window.cookieconsent.initialise({
                \"palette\": {
                    \"popup\": {
                        \"background\": \"#0F538A\"
                    },
                    \"button\": {
                        \"background\": \"#E5E5E5\"
                    }
                },
                \"theme\": \"classic\",
                \"content\": {
                    \"message\": \"";
            // line 188
            echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("COOKIE_CONSENT_MSG"), "js");
            echo "\",
                    \"dismiss\": \"";
            // line 189
            echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("COOKIE_CONSENT_OK"), "js");
            echo "\",
                    \"link\": \"";
            // line 190
            echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("COOKIE_CONSENT_INFO"), "js");
            echo "\",
                    \"href\": \"";
            // line 191
            echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("COOKIE_CONSENT_HREF"), "js");
            echo "\"
                }
            })});
    </script>
";
        }
        // line 196
        echo "
";
        // line 197
        // line 198
        echo "
";
        // line 199
        if (($context["S_PLUPLOAD"] ?? null)) {
            $location = "plupload.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("plupload.html", "alt_facture.html", 199)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 200
        echo "<!-- jQuery first, then Popper.js, then Bootstrap JS -->



<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>

<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>

";
        // line 209
        echo $this->getAttribute(($context["definition"] ?? null), "SCRIPTS", array());
        echo "

";
        // line 211
        echo ($context["ALT_SCRIPT_PAGE"] ?? null);
        echo "


";
        // line 214
        // line 215
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "alt_facture.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  412 => 215,  411 => 214,  405 => 211,  400 => 209,  389 => 200,  375 => 199,  372 => 198,  371 => 197,  368 => 196,  360 => 191,  356 => 190,  352 => 189,  348 => 188,  328 => 174,  326 => 173,  300 => 150,  293 => 146,  286 => 142,  260 => 119,  256 => 118,  252 => 117,  248 => 116,  244 => 115,  224 => 98,  213 => 90,  209 => 89,  205 => 88,  196 => 84,  192 => 83,  188 => 82,  184 => 81,  167 => 71,  151 => 64,  141 => 56,  140 => 55,  135 => 53,  132 => 52,  131 => 51,  126 => 48,  118 => 46,  116 => 45,  113 => 44,  105 => 42,  103 => 41,  100 => 40,  92 => 38,  90 => 37,  87 => 36,  82 => 34,  77 => 33,  75 => 32,  65 => 24,  53 => 14,  51 => 13,  46 => 11,  42 => 10,  39 => 9,  33 => 7,  31 => 6,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "alt_facture.html", "");
    }
}
