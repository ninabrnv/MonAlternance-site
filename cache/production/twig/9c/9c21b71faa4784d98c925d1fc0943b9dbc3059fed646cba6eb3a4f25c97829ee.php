<?php

/* alt_credit.html */
class __TwigTemplate_5e939577eedc212e9b8487a26ec1a8065b7355912faeaff24eb5eba06e0eb952 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "alt_credit.html", 1)->display($context);
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
        <div class=\"progress-bar bg-danger\" role=\"progressbar\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:100%\">
        Etape 4/4 : Paiement sécurisé de votre achat
        </div>
    </div>
</div>
<br>
";
        }
        // line 14
        echo "
<div class=\"container-fluid\">
        <div calss=\"row\">
    
            <div class=\"col\">
    
            </div>
            <div class=\"col\">
    
                <div class=\"container-fluid\" >
    
                    <div class=\"row\">
                        <div class=\"container pt-4 mt-4 mb-4\" style=\"background-color: rgba(185, 185, 185, 0.527); border: 1px solid #C0C0C0; border-radius: 10px; box-shadow: 3px 3px 6px 0 #A9A9A9; width: 650px\">
    
                            <div class=\"container pt-4 mb-4\" style=\"background-color: white; border: 1px solid #C0C0C0; border-radius: 10px; box-shadow: 3px 3px 6px 0 #A9A9A9; width: 600px\">
    
                                <ul class=\"col-sm-12 clearfix\" >
                                    <!-- DEBUT CONTENU -->
                                    


                                        <div class=\"container\">
                                            <div class=\"row\">
                                                <div class=\"col-12\" style=\"text-align: center\">
                                                    
                                                    ";
        // line 39
        if ( !($context["S_USER_LOGGED_IN"] ?? null)) {
            echo "\t
                                                    <div style=\"color: rgb(173, 0, 0)\">";
            // line 40
            echo ($context["MESSAGE_ERREUR"] ?? null);
            echo "</div>    
                                                    ";
        } else {
            // line 42
            echo "                                                    <form method=\"POST\" action=\"https://paiement.systempay.fr/vads-payment/\">
                                                        <input type=\"hidden\" name=\"vads_action_mode\" value=\"";
            // line 43
            echo ($context["vads_action_mode"] ?? null);
            echo "\" />
                                                        <input type=\"hidden\" name=\"vads_amount\" value=\"";
            // line 44
            echo ($context["vads_amount"] ?? null);
            echo "\" />
                                                        <input type=\"hidden\" name=\"vads_capture_delay\" value=\"";
            // line 45
            echo ($context["vads_capture_delay"] ?? null);
            echo "\" />
                                                        <input type=\"hidden\" name=\"vads_ctx_mode\" value=\"";
            // line 46
            echo ($context["vads_ctx_mode"] ?? null);
            echo "\" />
                                                        <input type=\"hidden\" name=\"vads_currency\" value=\"";
            // line 47
            echo ($context["vads_currency"] ?? null);
            echo "\" />
                                                        <input type=\"hidden\" name=\"vads_page_action\" value=\"";
            // line 48
            echo ($context["vads_page_action"] ?? null);
            echo "\" />
                                                        <input type=\"hidden\" name=\"vads_payment_config\" value=\"";
            // line 49
            echo ($context["vads_payment_config"] ?? null);
            echo "\" />
                                                        <input type=\"hidden\" name=\"vads_return_mode\" value=\"";
            // line 50
            echo ($context["vads_return_mode"] ?? null);
            echo "\" />
                                                        <input type=\"hidden\" name=\"vads_site_id\" value=\"";
            // line 51
            echo ($context["vads_site_id"] ?? null);
            echo "\" />
                                                        <input type=\"hidden\" name=\"vads_trans_date\" value=\"";
            // line 52
            echo ($context["vads_trans_date"] ?? null);
            echo "\" />
                                                        <input type=\"hidden\" name=\"vads_trans_id\" value=\"";
            // line 53
            echo ($context["vads_trans_id"] ?? null);
            echo "\" />
                                                        <input type=\"hidden\" name=\"vads_url_return\" value=\"";
            // line 54
            echo ($context["vads_url_return"] ?? null);
            echo "\" />
                                                        <input type=\"hidden\" name=\"vads_version\" value=\"";
            // line 55
            echo ($context["vads_version"] ?? null);
            echo "\" />
                                                        <input type=\"hidden\" name=\"vads_theme_config\" value=\"";
            // line 56
            echo ($context["vads_theme_config"] ?? null);
            echo "\" />
                                                        <input type=\"hidden\" name=\"signature\" value=\"";
            // line 57
            echo ($context["signature"] ?? null);
            echo "\"/>
                                                        
                                                        
                                                        <img src=\"";
            // line 60
            echo ($context["T_IMAGES_PATH"] ?? null);
            echo "site/accueil/logo-carte-bleue.jpg\">
                                                        <br>
                                                        Vous allez être rediriger vers la page paiement pour effectuer une transaction de ";
            // line 62
            echo ($context["montant"] ?? null);
            echo " € TTC
                                                        <br><br>
                                                        <input type=\"submit\" name=\"payer\" value=\"Confirmation paiement par CB\" class=\"btn btn-success default-submit-action\"/>
                                                        
                                                    </form>
                                                    ";
        }
        // line 67
        echo "\t


                                                </div>
                                            </div>
                                        </div>

                                    <!-- FIN CONTENU -->
                                </ul>
                            </div>
                        </div>
                    </div>
               
                    <div class=\"row\">
                            <div class=\"container pt-4 mt-4 mb-4\" style=\"background-color: rgba(185, 185, 185, 0.527); border: 1px solid #C0C0C0; border-radius: 10px; box-shadow: 3px 3px 6px 0 #A9A9A9; width: 650px\">
        
                                <div class=\"container pt-4 mb-4\" style=\"background-color: white; border: 1px solid #C0C0C0; border-radius: 10px; box-shadow: 3px 3px 6px 0 #A9A9A9; width: 600px\">
        
                                    <ul class=\"col-sm-12 clearfix\" >
                                        <!-- DEBUT CONTENU -->
                                        
    
    
                                            <div class=\"container\">
                                                <div class=\"row\">
                                                    <div class=\"col-12\" style=\"text-align: center\">
                                                        
                                                        ";
        // line 94
        if ( !($context["S_USER_LOGGED_IN"] ?? null)) {
            echo "\t
                                                        <div style=\"color: rgb(173, 0, 0)\">";
            // line 95
            echo ($context["MESSAGE_ERREUR"] ?? null);
            echo "</div>    
                                                        ";
        } else {
            // line 97
            echo "                                                        <form method=\"POST\" action=\"";
            echo ($context["ACTION_FORM_VIREMENT_BANCAIRE"] ?? null);
            echo "\">
                                                            <input type=\"hidden\" name=\"vads_action_mode\" value=\"";
            // line 98
            echo ($context["vads_action_mode"] ?? null);
            echo "\" />
                                                            <input type=\"hidden\" name=\"vads_amount\" value=\"";
            // line 99
            echo ($context["vads_amount"] ?? null);
            echo "\" />
                                                            <input type=\"hidden\" name=\"vads_capture_delay\" value=\"";
            // line 100
            echo ($context["vads_capture_delay"] ?? null);
            echo "\" />
                                                            <input type=\"hidden\" name=\"vads_ctx_mode\" value=\"";
            // line 101
            echo ($context["vads_ctx_mode"] ?? null);
            echo "\" />
                                                            <input type=\"hidden\" name=\"vads_currency\" value=\"";
            // line 102
            echo ($context["vads_currency"] ?? null);
            echo "\" />
                                                            <input type=\"hidden\" name=\"vads_page_action\" value=\"";
            // line 103
            echo ($context["vads_page_action"] ?? null);
            echo "\" />
                                                            <input type=\"hidden\" name=\"vads_payment_config\" value=\"";
            // line 104
            echo ($context["vads_payment_config"] ?? null);
            echo "\" />
                                                            <input type=\"hidden\" name=\"vads_return_mode\" value=\"";
            // line 105
            echo ($context["vads_return_mode"] ?? null);
            echo "\" />
                                                            <input type=\"hidden\" name=\"vads_site_id\" value=\"";
            // line 106
            echo ($context["vads_site_id"] ?? null);
            echo "\" />
                                                            <input type=\"hidden\" name=\"vads_trans_date\" value=\"";
            // line 107
            echo ($context["vads_trans_date"] ?? null);
            echo "\" />
                                                            <input type=\"hidden\" name=\"vads_trans_id\" value=\"";
            // line 108
            echo ($context["vads_trans_id"] ?? null);
            echo "\" />
                                                            <input type=\"hidden\" name=\"vads_url_return\" value=\"";
            // line 109
            echo ($context["vads_url_return"] ?? null);
            echo "\" />
                                                            <input type=\"hidden\" name=\"vads_version\" value=\"";
            // line 110
            echo ($context["vads_version"] ?? null);
            echo "\" />
                                                            <input type=\"hidden\" name=\"vads_theme_config\" value=\"";
            // line 111
            echo ($context["vads_theme_config"] ?? null);
            echo "\" />
                                                            <input type=\"hidden\" name=\"signature\" value=\"";
            // line 112
            echo ($context["signature"] ?? null);
            echo "\"/>
                                                            <input type=\"hidden\" name=\"montant\" value=\"";
            // line 113
            echo ($context["montant"] ?? null);
            echo "\"/>
                                                            
                                                            <img src=\"";
            // line 115
            echo ($context["T_IMAGES_PATH"] ?? null);
            echo "site/accueil/logo-virement-bancaire.png\">
                                                            <br>
                                                            Vous allez être rediriger vers la page paiement pour effectuer une transaction de ";
            // line 117
            echo ($context["montant"] ?? null);
            echo " € TTC
                                                            <br><br>
                                                            <input type=\"submit\" name=\"payer\" value=\"Confirmation paiement par virement\" class=\"btn btn-success default-submit-action\"/>
                                                            
                                                        </form>
                                                        ";
        }
        // line 122
        echo "\t
    
    
                                                    </div>
                                                </div>
                                            </div>
    
                                        <!-- FIN CONTENU -->
                                    </ul>
                                </div>
                            </div>
                        </div>
               
               
                </div>\t
            </div>
        </div>
    </div>

    <!-- <div class=\"alt_lien_sous_titre\">";
        // line 141
        echo ($context["email_enable"] ?? null);
        echo "</div> -->

";
        // line 143
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "alt_credit.html", 143)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "alt_credit.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 143,  306 => 141,  285 => 122,  276 => 117,  271 => 115,  266 => 113,  262 => 112,  258 => 111,  254 => 110,  250 => 109,  246 => 108,  242 => 107,  238 => 106,  234 => 105,  230 => 104,  226 => 103,  222 => 102,  218 => 101,  214 => 100,  210 => 99,  206 => 98,  201 => 97,  196 => 95,  192 => 94,  163 => 67,  154 => 62,  149 => 60,  143 => 57,  139 => 56,  135 => 55,  131 => 54,  127 => 53,  123 => 52,  119 => 51,  115 => 50,  111 => 49,  107 => 48,  103 => 47,  99 => 46,  95 => 45,  91 => 44,  87 => 43,  84 => 42,  79 => 40,  75 => 39,  48 => 14,  36 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "alt_credit.html", "");
    }
}
