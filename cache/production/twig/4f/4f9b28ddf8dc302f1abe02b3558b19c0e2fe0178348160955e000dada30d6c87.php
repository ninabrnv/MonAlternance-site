<?php

/* alt_contact.html */
class __TwigTemplate_7c2dcca7279f0599c53050b964ff8fc98891cbd5a3a885d7fa082c5b398b28aa extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "alt_contact.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "


<div class=\"container-fluid\">
        <div calss=\"row\">
    
            <div class=\"col\">
    
            </div>
            <div class=\"col\">
    
                <div class=\"container-fluid imageBackRegister\" >
    
                    <div class=\"row\">
                        <div class=\"container pt-4 mt-4 mb-4\" style=\"background-color: rgba(185, 185, 185, 0.527); border: 1px solid #C0C0C0; border-radius: 10px; box-shadow: 3px 3px 6px 0 #A9A9A9; max-width: 650px\">
    
                            <div class=\"container pt-4 mb-4\" style=\"background-color: white; border: 1px solid #C0C0C0; border-radius: 10px; box-shadow: 3px 3px 6px 0 #A9A9A9;\">
    
                                <ul class=\"col clearfix\" >
                                    <!-- DEBUT CONTENU -->
                                    
                                        <div class=\"container\">
                                            <div class=\"row\">
                                                <div class=\"col\">
                                                    <div style=\"color: green; text-align: center\">";
        // line 26
        echo ($context["messageMail"] ?? null);
        echo "</div>
                                                    <h1>Contactez-nous</h1>
                                                    <hr>
                                                    <form id=\"contacteznous\" method=\"post\" action=\"";
        // line 29
        echo ($context["FORM_CONTACT"] ?? null);
        echo "\">
                                                    <input type=\"hidden\" name=\"action\" value=\"sendmail\">
                                                    <br>Je suis :
                                                    <br>
                                                    <div class=\"container\">
                                                        <div class=\"row\">
                                                            <div class=\"col\">
                                                                <label class=\"form-check-label\">
                                                                    <input class=\"form-check-input\" type=\"radio\" name=\"type_compte\" id=\"typeCompteCandidat\" value=\"candidat\" checked>
                                                                    <b>Candidat</b>
                                                                </label>
                                                            </div>
                                                            <div class=\"col\">
                                                               
                                                                <label class=\"form-check-label\">
                                                                    <input class=\"form-check-input\" type=\"radio\" name=\"type_compte\" id=\"typeCompteSociete\" value=\"societe\" >
                                                                    <b>Entreprise</b>
                                                                </label>
                                                            </div>
                                                            <div class=\"col\">
                                                                  
                                                                            <label class=\"form-check-label\">
                                                                                <input class=\"form-check-input\" type=\"radio\" name=\"type_compte\" id=\"typeCompteEcole\" value=\"ecole\" >
                                                                                <b>Ecole</b>
                                                                            </label>
                                                                          
                                                            </div>
                                                            <div class=\"col\">
                                                                  
                                                                            <label class=\"form-check-label\">
                                                                                <input class=\"form-check-input\" type=\"radio\" name=\"type_compte\" id=\"typeCompteAutre\" value=\"autre\" >
                                                                                <b>Autre</b>
                                                                            </label>
                                                                        
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                    <br>
                                                    
                                                    <label>Prénom :</label> *
                                                    <input type=\"text\" class=\"form-control\" tabindex=\"1\" name=\"prenom\" id=\"prenom\" value=\"";
        // line 70
        echo ($context["prenom"] ?? null);
        echo "\" />

                                                    <label>Nom :</label> *
                                                    <input type=\"text\" class=\"form-control\" tabindex=\"2\" name=\"nom\" id=\"nom\" value=\"";
        // line 73
        echo ($context["nom"] ?? null);
        echo "\" />
                  
                                                    <label>Email :</label> *
                                                    <input type=\"text\" class=\"form-control\" tabindex=\"3\" name=\"email\" id=\"email\" value=\"";
        // line 76
        echo ($context["email"] ?? null);
        echo "\" />
                                                    
                                                    <label>Numéro de téléphone :</label>
                                                    <input type=\"text\" class=\"form-control\" tabindex=\"4\" name=\"tel\" id=\"tel\" value=\"";
        // line 79
        echo ($context["tel"] ?? null);
        echo "\" />
                                                    

                                                    <label>Ville :</label> *
                                                    <input type=\"text\" class=\"form-control\" tabindex=\"5\" name=\"ville\" id=\"ville\" value=\"";
        // line 83
        echo ($context["ville"] ?? null);
        echo "\" />\t
                                                   
                                                    <label>Objet du message :</label> *
                                                    <input type=\"text\" class=\"form-control\" tabindex=\"6\" name=\"objet\" id=\"objet\" value=\"\" />\t
                                                    
                                         
                                                    <div class=\"form-group\">
                                                        <label for=\"contenu\">Commentaire :</label> *
                                                        <textarea class=\"form-control\" tabindex=\"7\" rows=\"5\" id=\"contenu\" name=\"contenu\"></textarea>
                                                     </div>


                                                     <input type=\"submit\" tabindex=\"8\" name=\"submit\" id=\"submit\" value=\"Envoyer\" class=\"btn btn-success default-submit-action\" />
                                                     </form>
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
        // line 111
        echo ($context["email_enable"] ?? null);
        echo "</div> -->

";
        // line 113
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "alt_contact.html", 113)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "alt_contact.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 113,  163 => 111,  132 => 83,  125 => 79,  119 => 76,  113 => 73,  107 => 70,  63 => 29,  57 => 26,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "alt_contact.html", "");
    }
}
