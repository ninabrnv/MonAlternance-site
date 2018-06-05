<?php

/* alt_annonce_offres.html */
class __TwigTemplate_e533c443644c28a47f1941f0c9792e98cdab12b70de8ecf090dfe3db9fcf87ab extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "alt_annonce_offres.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<div class=\"container pb-3\" style=\"border: 1px solid rgba(0,0,0,.125);\">
    <h1>Etape par étape</h1>
    <div class=\"progress\">
        <div class=\"progress-bar bg-danger\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:20%\">
        Etape 1/4 : Choix du type d'annonce
        </div>
    </div>
</div>
<br>
<div class=\"container\" style=\"border: 1px solid rgba(0,0,0,.125);\">    
    <h1>Définissez votre besoin</h1>
    - Poster une annonce pendant 30 jours
    <br>- Gérer le listing de toutes les candidatures dans votre espace personnel 
    <br>- Sélectionnez votre candidat(e)
    <br><br>
    <div class=\"container\" style=\" text-align: center;\">
        <div class=\"row justify-content-md-center\">
            <div class=\"col-12 col-md-4\">
                <form name=\"formCredit\" method=\"POST\" action=\"";
        // line 21
        echo ($context["ACTION_FORM_ANNONCE_OFFRES"] ?? null);
        echo "\">
                    <input type=\"hidden\" name=\"typeAnnonce\" value=\"pro\">
                    <input type=\"hidden\" name=\"annonce_id\" value=\"0\">
                    <div class=\"card border-danger mb-3\" style=\"max-width: 18rem;\">
                        <div class=\"card-header text-danger\" style=\"text-align: center\">    
                            <h5 class=\"card-title\" >Contrats de Professionnalisation / Apprentissage</h5>
                        </div>  
                        <div class=\"card-body\" style=\"text-align: center\">
                            <div style=\"font-size: 2.6em\">80€ HT </div>
                            (l'annonce)
                            <br><br>Publication de l'annonce sur une période d'un mois
                            <br>
                            <button type=\"submit\" class=\"btn btn-outline-danger\">Souscrire</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class=\"col-12  col-md-4\">
                    <form name=\"formCredit\" method=\"POST\" action=\"";
        // line 39
        echo ($context["ACTION_FORM_ANNONCE_OFFRES"] ?? null);
        echo "\">
                    <input type=\"hidden\" name=\"typeAnnonce\" value=\"stage\">
                    <input type=\"hidden\" name=\"annonce_id\" value=\"0\">
                       <div class=\"card border-primary mb-3\" style=\"max-width: 18rem;\">
                           <div class=\"card-header text-primary\" style=\"text-align: center\">    
                               <h5 class=\"card-title\" >Stage <br>en<br> entreprise</h5>
                           </div>  
                           <div class=\"card-body\" style=\"text-align: center\">
                               <div style=\"font-size: 2.6em\">50€ HT </div>
                               (l'annonce)
                               <br><br>Publication de l'annonce sur une période d'un mois
                               <br>
                               <button type=\"submit\" class=\"btn btn-outline-primary\">Souscrire</button>
                           </div>
                       </div>
                   </form>
               </div>
               <div class=\"col-12 col-md-4\">
                    <form name=\"formCredit\" method=\"POST\" action=\"";
        // line 57
        echo ($context["U_ALT_CONTACT"] ?? null);
        echo "\">
                        <div class=\"card border-warning mb-3\" style=\"max-width: 18rem;\">
                            <div class=\"card-header text-warning\" style=\"text-align: center\">    
                                <h5 class=\"card-title\" >Devis<br>personnalisé<br> <br> </h5>
                            </div>  
                            <div class=\"card-body\" style=\"text-align: center; font-size: 0.9em\">
                                Nos offres peuvent êtres postées simultanément sur une durée d'un an.
                                <br><br>Obtenez un devis adapté à votre entreprise.
                                <br>Nous vous recontacterons dans les plus brefs délais.
                                <br>
                                <button type=\"submit\" class=\"btn btn-outline-warning mt-2\">Contactez-nous</button>
                            </div>
                        </div>
                    </form>
                </div>
        </div>
       
    </div>
</div>

 
    
    
    <br><br><br><br><br><br>
    ";
        // line 81
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "alt_annonce_offres.html", 81)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "alt_annonce_offres.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 81,  94 => 57,  73 => 39,  52 => 21,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "alt_annonce_offres.html", "");
    }
}
