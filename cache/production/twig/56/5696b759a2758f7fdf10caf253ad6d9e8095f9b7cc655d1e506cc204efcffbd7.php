<?php

/* alt_recruteurs.html */
class __TwigTemplate_a71e6f63a8112dc67f1a8751fab4bd1a3f06d7b2918f69a1ceb12a8ed7934dbc extends Twig_Template
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
        $value = "login";
        $context['definition']->set('NAV_SECTION', $value);
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "alt_recruteurs.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<div class=\"container-fluid imageBackConnexion\">
        <div calss=\"row\">
    
            <div class=\"col\">
                    <div class=\"card\" style=\"width: 18rem; position: absolute; top:150px; left:50px; text-align: center\">
                       <br>
                        <h2>Spécialiste des contrats en alternance</h2>
                        <br>
                    </div>
                   
    
            </div>
            <div class=\"col\">
    
                <div class=\"container-fluid\" >
    
                    <div class=\"row\">
                        <div class=\"container pt-4 mt-4 mb-4\" style=\"background-color: rgba(185, 185, 185, 0.527); border: 1px solid #C0C0C0; border-radius: 10px; box-shadow: 3px 3px 6px 0 #A9A9A9; width: 450px\">
    
                            <div class=\"container pt-4 mb-4\" style=\"background-color: white; border: 1px solid #C0C0C0; border-radius: 10px; box-shadow: 3px 3px 6px 0 #A9A9A9; width: 400px\">
    
                                <ul class=\"col-sm-12 clearfix\" style=\"text-align: center\">
                                    <form action=\"";
        // line 25
        echo ($context["S_LOGIN_ACTION"] ?? null);
        echo "\" method=\"post\" autocomplete=\"off\" id=\"login\" data-focus=\"";
        if (($context["S_ADMIN_AUTH"] ?? null)) {
            echo ($context["PASSWORD_CREDENTIAL"] ?? null);
        } else {
            echo ($context["USERNAME_CREDENTIAL"] ?? null);
        }
        echo "\">
                                    
                                    <div class=\"container\">
                                    
                                        <div class=\"row justify-content-center mb-3\">
                                            <h2 class=\"login-title\">Déjà inscrit ?</h2>
                                        </div>
                                        <div class=\"row justify-content-center\">
                                            
                                            ";
        // line 34
        if (($context["LOGIN_ERROR"] ?? null)) {
            echo "<div class=\"error\">";
            echo ($context["LOGIN_ERROR"] ?? null);
            echo "</div>";
        }
        // line 35
        echo "                                        </div>
                                        <div class=\"row justify-content-center mb-3\">
    
                                            <input type=\"search\" tabindex=\"1\"  class=\"form-control alt-form-image-arobase\" style=\"width: 250px\" id=\"username\" name=\"username\" aria-describedby=\"email\" placeholder=\"Votre adresse email\">
                                            <!-- <input type=\"text\" tabindex=\"1\" name=\"";
        // line 39
        echo ($context["USERNAME_CREDENTIAL"] ?? null);
        echo "\" id=\"";
        echo ($context["USERNAME_CREDENTIAL"] ?? null);
        echo "\" size=\"25\" value=\"";
        echo ($context["USERNAME"] ?? null);
        echo "\" class=\"inputbox autowidth\" /> -->
                                        </div>
                                        <div class=\"row justify-content-center mb-2\">
                                            <input type=\"password\" tabindex=\"2\" id=\"password\" name=\"password\" style=\"width: 250px\" class=\"form-control alt-form-image-cadena\" aria-describedby=\"mot de passe\" placeholder=\"Votre mot de passe\"/>
                                        </div>
                                        
    
                                            ";
        // line 46
        if ((($context["CAPTCHA_TEMPLATE"] ?? null) && ($context["S_CONFIRM_CODE"] ?? null))) {
            // line 47
            echo "                                                ";
            $value = 3;
            $context['definition']->set('CAPTCHA_TAB_INDEX', $value);
            // line 48
            echo "                                                ";
            $location = (("" . ($context["CAPTCHA_TEMPLATE"] ?? null)) . "");
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate((("" . ($context["CAPTCHA_TEMPLATE"] ?? null)) . ""), "alt_recruteurs.html", 48)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 49
            echo "                                            ";
        }
        // line 50
        echo "                                            ";
        if (($context["S_DISPLAY_FULL_LOGIN"] ?? null)) {
            // line 51
            echo "                                        </div>
                                        <div class=\"row justify-content-center mt-2\">
                                                ";
            // line 53
            if (($context["S_AUTOLOGIN_ENABLED"] ?? null)) {
                echo "<br><label for=\"autologin\"><input type=\"checkbox\" name=\"autologin\" id=\"autologin\" tabindex=\"4\" checked=\"true\"/> Rester connecté</label>";
            }
            // line 54
            echo "                                                ";
            if (false) {
                // line 55
                echo "                                            <label for=\"viewonline\"><input type=\"checkbox\" name=\"viewonline\" id=\"viewonline\" tabindex=\"5\" /> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("HIDE_ME");
                echo "</label>
                                                ";
            }
            // line 57
            echo "                                        </div>
                                            ";
        }
        // line 59
        echo "                                        <div class=\"row justify-content-center\">
                                            
                                        
                                            ";
        // line 62
        echo ($context["S_HIDDEN_FIELDS"] ?? null);
        echo "<button type=\"submit\" name=\"login\" tabindex=\"6\" class=\"btn btn-danger\" style=\"width: 250px\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN");
        echo "</button>
                                                    <!--<input type=\"submit\" name=\"login\" tabindex=\"6\" value=\"";
        // line 63
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN");
        echo "\" class=\"button1\" />-->
                                                
                                        </div>
                                            ";
        // line 66
        if ((($context["S_DISPLAY_FULL_LOGIN"] ?? null) && (($context["U_SEND_PASSWORD"] ?? null) || ($context["U_RESEND_ACTIVATION"] ?? null)))) {
            // line 67
            echo "                                                ";
            if (($context["U_SEND_PASSWORD"] ?? null)) {
                echo "<div class=\"row justify-content-center\"><a href=\"";
                echo ($context["U_SEND_PASSWORD"] ?? null);
                echo "\">Mot de passe oublié ?</a></div>";
            }
            // line 68
            echo "                                                ";
            if (($context["U_RESEND_ACTIVATION"] ?? null)) {
                echo "<div class=\"row justify-content-center\"><a href=\"";
                echo ($context["U_RESEND_ACTIVATION"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESEND_ACTIVATION");
                echo "</a></div>";
            }
            // line 69
            echo "                                            ";
        }
        // line 70
        echo "                                            </fieldset>
                                    
                                    
                                        ";
        // line 73
        if (( !($context["S_ADMIN_AUTH"] ?? null) && ($context["PROVIDER_TEMPLATE_FILE"] ?? null))) {
            // line 74
            echo "                                            ";
            $location = (("" . ($context["PROVIDER_TEMPLATE_FILE"] ?? null)) . "");
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate((("" . ($context["PROVIDER_TEMPLATE_FILE"] ?? null)) . ""), "alt_recruteurs.html", 74)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 75
            echo "                                        ";
        }
        // line 76
        echo "                                        
    
    
                                        ";
        // line 79
        if (( !($context["S_ADMIN_AUTH"] ?? null) && ($context["S_REGISTER_ENABLED"] ?? null))) {
            // line 80
            echo "                                        <div class=\"panel\">
                                            <div class=\"inner\">
    
                                                <div class=\"content\">
                                                    
                                                    <hr class=\"dashed\" />
                                                    <b>Ou</b>
                                                    <hr class=\"dashed\" />
                                                    
                                                    <a href=\"";
            // line 89
            echo ($context["U_REGISTER"] ?? null);
            echo "\"><button type=\"button\" class=\"btn btn-primary\" style=\"width: 250px\">Créer un compte</button></a>
                                                
                                                </div>
    
                                            </div>
                                        </div>
                                        ";
        }
        // line 96
        echo "                                    
                                    
                                    
                                    </div>
    
                                        
    
                                    </form>
                                </ul>
    
                            </div>
                        </div>
                    </div>
                </div>\t
            </div>
        </div>
    </div>
    
<div class=\"container-fluid\">    
    <h3>Investissez dans notre jeunesse</h3>

    Poster une annonce vous permettra de trouver rapidement un candidat correspondant à vos attentes. 
    <br>Mon Alternance est exclusivement dédié aux contrats de professionnalisation, d’apprentissage et stages en entreprise.
    Par notre spécialisation, nous avons plusieurs appuis de poids comme les écoles, les entreprises, ainsi que les Grandes Institutions.
    <br>Nous sommes la solution de recrutement en alternance.
    <br>
    <br><b>Nos services : </b>

    <br>- Poster une annonce pendant 30 jours
    <br>- Gérer le listing de toutes les candidatures dans votre espace personnel 
    <br>- Sélectionnez votre candidat(e)
    <br><br>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 col-md-4\">
                    <div class=\"card border-danger mb-3\" style=\"max-width: 18rem;\">
                            <div class=\"card-header text-danger\" style=\"text-align: center\">    
                                <h5 class=\"card-title\" >Contrats de Professionnalisation / Apprentissage</h5>
                            </div>  
                            <div class=\"card-body\" style=\"text-align: center\">
                                <div style=\"font-size: 2.6em\">80€ HT </div>
                                (l'annonce)
                                <br><br>Publication de l'annonce sur une période d'un mois
                                <br>
                                <a href=\"#start_here\"><button type=\"button\" class=\"btn btn-outline-danger\">Souscrire</button></a>
                            </div>
                        </div>
            </div>
            <div class=\"col-12 col-md-4\">
                    <div class=\"card border-primary mb-3\" style=\"max-width: 18rem;\">
                            <div class=\"card-header text-primary\" style=\"text-align: center\">    
                                <h5 class=\"card-title\" >Stage <br>en<br> entreprise</h5>
                            </div>  
                            <div class=\"card-body\" style=\"text-align: center\">
                                <div style=\"font-size: 2.6em\">50€ HT </div>
                                (l'annonce)
                                <br><br>Publication de l'annonce sur une période d'un mois
                                <br>
                                <a href=\"#start_here\"><button type=\"button\" class=\"btn btn-outline-primary\">Souscrire</button></a>
                            </div>
                        </div>
            </div>
            <div class=\"col-12 col-md-4\">
                    <div class=\"card border-warning mb-3\" style=\"max-width: 18rem;\">
                            <div class=\"card-header text-warning\" style=\"text-align: center\">    
                                <h5 class=\"card-title\" >Devis<br><br> personnalisé</h5>
                            </div>  
                            <div class=\"card-body\" style=\"text-align: center; font-size: 0.9em\">
                                Nos offres peuvent êtres postées simultanément sur une durée d'un an.
                                <br><br>Obtenez un devis adapté à votre entreprise.
                                <br>Nous vous recontacterons dans les plus brefs délais.
                                <br>
                                <a href=\"";
        // line 168
        echo ($context["U_ALT_CONTACT"] ?? null);
        echo "\"><button type=\"button\" class=\"btn btn-outline-warning mt-2\">Contactez-nous</button></a>
                            </div>
                        </div>
            </div>
        </div>
    </div>
</div>

 
    
    
    <br><br><br><br><br><br>
    ";
        // line 180
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "alt_recruteurs.html", 180)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "alt_recruteurs.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 180,  311 => 168,  237 => 96,  227 => 89,  216 => 80,  214 => 79,  209 => 76,  206 => 75,  193 => 74,  191 => 73,  186 => 70,  183 => 69,  174 => 68,  167 => 67,  165 => 66,  159 => 63,  153 => 62,  148 => 59,  144 => 57,  138 => 55,  135 => 54,  131 => 53,  127 => 51,  124 => 50,  121 => 49,  108 => 48,  104 => 47,  102 => 46,  88 => 39,  82 => 35,  76 => 34,  58 => 25,  33 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "alt_recruteurs.html", "");
    }
}
