<?php

/* alt_paiement.html */
class __TwigTemplate_eecb254ab60fbe3b71bf37315beb45c601a6cde8bcc5f66aa99823f5620c8044 extends Twig_Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "alt_paiement.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        if (($context["CREATION_ANNONCE"] ?? null)) {
            // line 4
            echo "<div class=\"container pb-3\" style=\"border: 1px solid rgba(0,0,0,.125);\">
        <h1>Etape par étape</h1>
        <div class=\"progress\">
            <div class=\"progress-bar bg-danger\" role=\"progressbar\" aria-valuenow=\"75\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:75%\">
            Etape 3/4 : Visualisez votre annonce
            </div>
        </div>
    </div>
    <br>
";
        }
        // line 14
        echo "
<div class=\"container p-3\" style=\"border: 1px solid #C0C0C0; border-radius: 10px; box-shadow: 3px 3px 6px 0 #A9A9A9;\">
    <div class=\"row\">
            <div class=\"col\">
                <div class=\"container-fluid pl-0\">
                        <div class=\"row\">
                            <div class=\"col\">
                                <h5 class=\"modal-title\" id=\"exampleModalLabel\" style=\"color: #007bff\">";
        // line 21
        echo ($context["annonce_titre"] ?? null);
        echo "</h5>
                                <div style=\"color: red;\">";
        // line 22
        echo ($context["annonce_adresse_ville"] ?? null);
        echo "</div>
                            </div>
                            <div class=\"col\" style=\"text-align: right; padding: 0px\">
                                    <a href=\"#\" style=\"cursor: pointer\"><img src=\"";
        // line 25
        echo ($context["T_IMAGES_PATH"] ?? null);
        echo "site/accueil/btn_favoris_noir_mini.png\" title=\"Ajouter cette annonce dans vos favoris\"></a>
                                    <a href=\"#\" style=\"cursor: pointer\" data-dismiss=\"modal\"><img src=\"";
        // line 26
        echo ($context["T_IMAGES_PATH"] ?? null);
        echo "site/accueil/btn_facebook_noir_mini.png\" title=\"Publier cette offre sur votre mur Facebook\"></a>
                                    <a href=\"#\" style=\"cursor: pointer\" title=\"postuler\"><img src=\"";
        // line 27
        echo ($context["T_IMAGES_PATH"] ?? null);
        echo "site/accueil/btn_postuler_noir_mini.png\" title=\"Postuler à cette annonce\"></a>
                                </div>
                        </div>
                </div>
                <div class=\"container-fluid pl-0\">
                    <div class=\"row\">
                        <div class=\"col\">
                            <hr style=\"height: 1px; color: rgb(172, 172, 172); background-color: rgb(177, 177, 177); width: 100%; border: none;\">
                            <b>Type de contrat :</b> ";
        // line 35
        echo ($context["annonce_contrat_type"] ?? null);
        echo "
                            <br><b>Domaine :</b> ";
        // line 36
        echo ($context["annonce_domaine"] ?? null);
        echo " ";
        echo ($context["annonce_domaine_artisanat"] ?? null);
        echo "
                            <br><b>Date de début :</b> ";
        // line 37
        echo ($context["annonce_date_de_debut"] ?? null);
        echo "
                            <br><b>Durée :</b> ";
        // line 38
        echo ($context["annonce_duree"] ?? null);
        echo "
                            <br>
                            <br><b>Descriptif : </b>
                            <br> 
                            ";
        // line 42
        echo ($context["annonce_description"] ?? null);
        echo "
                        </div>   
                    </div>
                </div>
            </div>
    </div>
</div>
<br><br>
<div class=\"container\" style=\" text-align: center; width: 450px\">
    <div class=\"row justify-content-md-center\">
        <div class=\"col-6 \" >
            <form name=\"formCredit\" method=\"POST\" action=\"";
        // line 53
        echo ($context["ACTION_FORM_MODIFIER_ANNONCE"] ?? null);
        echo "\">
                <input type=\"hidden\" name=\"action\" value=\"editerAnnonce\">
                <input type=\"hidden\" name=\"id\" value=\"";
        // line 55
        echo ($context["annonce_id"] ?? null);
        echo "\">
                <button type=\"submit\" class=\"btn btn-outline-danger\">Modifier l'annonce</button>
            </form>
        </div>
        <div class=\"col-6 \" >
            <form name=\"formCredit\" method=\"POST\" action=\"";
        // line 60
        echo ($context["ACTION_FORM_VALIDER_ANNONCE"] ?? null);
        echo "\">
                <input type=\"hidden\" name=\"annonce_id\" value=\"";
        // line 61
        echo ($context["annonce_id"] ?? null);
        echo "\">
                <input type=\"hidden\" name=\"action\" value=\"payerAnnonce\">
                <button type=\"submit\" class=\"btn btn-outline-success\">Valider l'annonce</button>
            </form>
        </div>
    </div>
</div>

    <br><br><br><br><br><br>
    ";
        // line 70
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "alt_paiement.html", 70)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "alt_paiement.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 70,  138 => 61,  134 => 60,  126 => 55,  121 => 53,  107 => 42,  100 => 38,  96 => 37,  90 => 36,  86 => 35,  75 => 27,  71 => 26,  67 => 25,  61 => 22,  57 => 21,  48 => 14,  36 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "alt_paiement.html", "");
    }
}
