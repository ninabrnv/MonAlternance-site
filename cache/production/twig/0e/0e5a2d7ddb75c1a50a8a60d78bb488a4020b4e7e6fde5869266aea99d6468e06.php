<?php

/* alt_accueil_annonces_recherche.html */
class __TwigTemplate_163425e0e8fb7a33753553be74be9dc8a83a5afeaf180f31c9d33f322c0c9d65 extends Twig_Template
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
        echo "
<div class=\"container-fluid imageBack\" style=\"height: 510px; text-align: center; color: black; text-shadow: 1px -1px 11px rgb(255, 255, 255); \">
    <div class=\"row\">
        <div class=\"col\" style=\"min-height: 5px;\">
        </div> 
    </div>
    <div class=\"row\">
        <div class=\"col\">
            <!-- <h1>Accélérez votre réussite professionnelle</h1> -->
            <br>
            <h2>Trouvez votre contrat d'apprentissage,
                <br>de professionnalisation ou de stage</h2>
                <br>
            <div class=\"container pt-4\" style=\"background-color: rgba(185, 185, 185, 0.527); border: 1px solid #C0C0C0; border-radius: 10px; box-shadow: 3px 3px 6px 0 #A9A9A9; max-width: 500px\">
                
                <div class=\"mb-3 pt-4 ml-3 mr-3\" style=\"background-color: rgba(99, 99, 99, 0.432); border-radius: 10px;\">
                       
                    <form name=\"formRecherche\" action=\"";
        // line 18
        echo ($context["U_ANNONCES"] ?? null);
        echo "\" method=\"post\" autocomplete=\"off\" onsubmit=\"return rechercherOffre();\">
                            <div class=\"row justify-content-center\"  >
                                <input type=\"search\" class=\"form-control alt-form-image-recherche\" id=\"domaine\" name=\"domaine\" aria-label=\"Domaine\" aria-describedby=\"domaine\" placeholder=\"DOMAINE (ex : commerce)\" style=\"width: 80%; font-size: 0.8em\" onselect=\"selectionDomaine();\" onclick=\"selectionDomaine();\">
                           
                            </div>
                            <div id=\"rowDomaineArtisanatRecherche\" class=\"row justify-content-center\" style=\"display: none\">
                                <input type=\"search\" class=\"form-control alt-form-image-recherche\" id=\"domaineArtisanatRecherche\" name=\"domaineArtisanatRecherche\" aria-label=\"Domaine artisanat\" aria-describedby=\"domaineArtisanat\" placeholder=\"Domaine artisanat\" style=\"width: 80%; font-size: 0.8em\">
                            </div>
                            <div class=\"row justify-content-center pt-1\" >
                                <input type=\"search\" class=\"form-control alt-form-image-ville\" id=\"ville1\" name=\"ville1\" aria-label=\"Ville\" aria-describedby=\"Ville\" placeholder=\" VILLE\" style=\"width: 80%; font-size: 0.8em\"> 
                            
                            </div>  
                            <div id=\"erreurVille\" class=\"row justify-content-center pt-1\" style=\"color:red; display: none\">
                            Cette information est requise.
                            </div>  
                            <div id=\"rowVille2\" class=\"row justify-content-center pt-1\" style=\"display: none\">
                                <input type=\"search\" class=\"form-control alt-form-image-ville\" id=\"ville2\" name=\"ville2\" aria-label=\"Ville 2\" aria-describedby=\"Ville 2\" placeholder=\" VILLE\" style=\"width: 80%; font-size: 0.8em\"> 
                            </div>
                            <div id=\"rowVille3\" class=\"row justify-content-center pt-1\" style=\"display: none\">
                                <input type=\"search\" class=\"form-control alt-form-image-ville\" id=\"ville3\" name=\"ville3\" aria-label=\"Ville 3\" aria-describedby=\"Ville 3\" placeholder=\" VILLE\" style=\"width: 80%; font-size: 0.8em\"> 
                            </div>
                            <div id=\"ajouterVille\" class=\"row justify-content-left\" style=\"margin-left: 40px\">
                                <a href=\"javascript:ajouterVille();\" style=\"color: black\"><img src=\"";
        // line 40
        echo ($context["T_IMAGES_PATH"] ?? null);
        echo "site/accueil/plus.png\" style=\"height: 15px; width: 15px\" alt=\"Ajouter une ville\">&nbsp;Ajouter une ville</a>
                            </div>
                           
                            <div class=\"row justify-content-center pt-1\">
                                <div class=\"col-md-auto\">
                                    <button type=\"submit\" class=\"btn btn-danger  mb-1\" style=\"background-color: #d81212;\"><img src=\"";
        // line 45
        echo ($context["T_IMAGES_PATH"] ?? null);
        echo "site/accueil/loupe.png\" alt=\"Rechercher\"> Rechercher</button>
                                </div>
                            </div>
                       </form>
                    
                    
                </div>
            </div>
        </div> 
    </div>


    <div class=\"row\">
        <div class=\"col\" style=\"min-height: 10px\"> </div> 
    </div>
    <div class=\"row\">
        <div class=\"col\" style=\"padding-top: 10px;padding-left: 0px; padding-right: 0px;\">
                
        ";
        // line 63
        $location = "alt_accueil_carrousel_entreprises.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("alt_accueil_carrousel_entreprises.html", "alt_accueil_annonces_recherche.html", 63)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 64
        echo "        </div> 
    </div>
</div>

 


";
    }

    public function getTemplateName()
    {
        return "alt_accueil_annonces_recherche.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 64,  92 => 63,  71 => 45,  63 => 40,  38 => 18,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "alt_accueil_annonces_recherche.html", "");
    }
}
