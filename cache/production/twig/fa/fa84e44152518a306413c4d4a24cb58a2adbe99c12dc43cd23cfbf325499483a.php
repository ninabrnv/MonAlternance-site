<?php

/* alt_admin_candidatures.html */
class __TwigTemplate_7a9e83a87104088b964fe30b36469ce785d5d67ec3a259a22464e2d696c4e0f5 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "alt_admin_candidatures.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "

<h1 class=\"ml-2\">Liste des 100 dernières candidataures</h1>

<div class=\"container-fluid\" > 
    <div class=\"row\" >  
        <div class=\"col-3 col-md-2\">
          
              <a class=\"nav-link active\" href=\"";
        // line 10
        echo ($context["U_ALT_MODERATEUR"] ?? null);
        echo "\">Accueil admin</a>
              <a class=\"nav-link\" href=\"";
        // line 11
        echo ($context["U_ALT_ADMIN_ENTREPRISES"] ?? null);
        echo "\">Comptes entreprises</a>
              <a class=\"nav-link\" href=\"";
        // line 12
        echo ($context["U_ALT_ADMIN_CANDIDATS"] ?? null);
        echo "\">Comptes candidats</a>
              <a class=\"nav-link\" href=\"";
        // line 13
        echo ($context["U_ALT_ADMIN_ADMINS"] ?? null);
        echo "\">Compte admins</a>
              <a class=\"nav-link\" href=\"";
        // line 14
        echo ($context["U_ALT_ADMIN_ANNONCES"] ?? null);
        echo "\">Annonces</a>
              <a class=\"nav-link\" href=\"";
        // line 15
        echo ($context["U_ALT_ADMIN_CANDIDATURES"] ?? null);
        echo "\"><b>Dernières candidatures</b></a>
              <a class=\"nav-link\" href=\"";
        // line 16
        echo ($context["U_ALT_ADMIN_PAIEMENTS"] ?? null);
        echo "\">Derniers paiements</a>
              <a class=\"nav-link\" href=\"";
        // line 17
        echo ($context["U_ALT_ADMIN_CVTHEQUE"] ?? null);
        echo "\">CVthèque</a>
              
            
        </div>
        <div class=\"col-9 col-md-10\" >
            <div class=\"card d-none d-md-block d-lg-block d-xl-block\">
                <div class=\"card-header\">
                    Filtres sur la liste des entreprises
                </div>
                <form id=\"formFiltreAnnonces\" class=\"p-2\" method=\"post\" action=\"";
        // line 26
        echo ($context["U_ALT_ADMIN_CANDIDATURES"] ?? null);
        echo "\">
                    <input type=\"hidden\" name=\"action\" value=\"filtreCandidatures\">
                    <div class=\"form-row align-items-center\">
                        <div class=\"col-auto my-1\">
                                <label class=\"sr-only\" for=\"filtreRef\">Réf</label>
                                <input type=\"text\" class=\"form-control mb-2\" name=\"filtreRef\" id=\"filtreRef\" placeholder=\"Réf\" value=\"";
        // line 31
        echo ($context["filtreRef"] ?? null);
        echo "\">
                            </div>
                        <div class=\"col-auto my-1\">
                            <label class=\"sr-only\" for=\"filtreTitre\">Titre</label>
                            <input type=\"text\" class=\"form-control mb-2\" name=\"filtreTitre\" id=\"filtreTitre\" placeholder=\"Titre\" value=\"";
        // line 35
        echo ($context["filtreTitre"] ?? null);
        echo "\">
                        </div>
                        <div class=\"col-auto my-1\">
                            <label class=\"sr-only\" for=\"filtreStatut\">Statut</label>
                            <input type=\"text\" class=\"form-control mb-2\" name=\"filtreStatut\" id=\"filtreStatut\" placeholder=\"Statut\" value=\"";
        // line 39
        echo ($context["filtreStatut"] ?? null);
        echo "\">
                        </div>
                       
                        <div class=\"col-auto my-1\">
                            <label class=\"sr-only\" for=\"filtreTypeContrat\">Type contrat</label>
                            <input type=\"text\" class=\"form-control mb-2\" name=\"filtreTypeContrat\" id=\"filtreTypeContrat\" placeholder=\"Type contrat\" value=\"";
        // line 44
        echo ($context["filtreTypeContrat"] ?? null);
        echo "\">
                        </div>
                        
                  
                        <div class=\"col-auto my-1\">
                            <label class=\"sr-only\" for=\"filtreDomaineActivite\">Domaine activité</label>
                            <input type=\"text\" class=\"form-control mb-2\" name=\"filtreDomaineActivite\" id=\"filtreDomaineActivite\" placeholder=\"Domaine activité\" value=\"";
        // line 50
        echo ($context["filtreDomaineActivite"] ?? null);
        echo "\">
                        </div>
                        <div class=\"col-auto my-1\">
                                <label class=\"sr-only\" for=\"filtreDomaineArtisanat\">Domaine artisanat</label>
                                <input type=\"text\" class=\"form-control mb-2\" name=\"filtreDomaineArtisanat\" id=\"filtreDomaineArtisanat\" placeholder=\"Domaine artisanat\" value=\"";
        // line 54
        echo ($context["filtreDomaineArtisanat"] ?? null);
        echo "\">
                            </div>

                     

                        <div class=\"col-auto my-1\">
                                <label class=\"sr-only\" for=\"filtreRegion\">Région</label>
                                <input type=\"text\" class=\"form-control mb-2\" name=\"filtreRegion\" id=\"filtreRegion\" placeholder=\"Région\" value=\"";
        // line 61
        echo ($context["filtreRegion"] ?? null);
        echo "\">
                            </div>
                     
                            <div class=\"col-auto my-1\">
                        <label class=\"sr-only\" for=\"filtreVille\">Ville</label>
                         <input type=\"text\" class=\"form-control mb-2\" name=\"filtreVille\" id=\"filtreVille\" placeholder=\"Ville\" value=\"";
        // line 66
        echo ($context["filtreVille"] ?? null);
        echo "\">
                      </div>
                      
                      <div class=\"col-auto my-1\">
                            <label class=\"sr-only\" for=\"filtreEntreprise\">Entreprise</label>
                            <input type=\"text\" class=\"form-control mb-2\" name=\"filtreEntreprise\" id=\"filtreEntreprise\" placeholder=\"Entreprise\" value=\"";
        // line 71
        echo ($context["filtreEntreprise"] ?? null);
        echo "\">
                        </div>
                        <div class=\"col-auto my-1\">
                            <label class=\"sr-only\" for=\"filtreContact\">Contact</label>
                            <input type=\"text\" class=\"form-control mb-2\" name=\"filtreContact\" id=\"filtreContact\" placeholder=\"Contact\" value=\"";
        // line 75
        echo ($context["filtreContact"] ?? null);
        echo "\">
                        </div>
                        <div class=\"col-auto my-1\">
                                <label class=\"sr-only\" for=\"filtrePaye\">Payé</label>
                                <input type=\"text\" class=\"form-control mb-2\" name=\"filtrePaye\" id=\"filtrePaye\" placeholder=\"Payé\" value=\"";
        // line 79
        echo ($context["filtrePaye"] ?? null);
        echo "\">
                            </div>
                    
                        <div class=\"col-auto my-1\">
                            <button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
                        </div>
                    </div>
                </form>
            </div>
            <br>   
            
            <div class=\"container-fluid\">
                  
                            <table class=\"table\">
                                <thead>
                                <tr>
                                    <th>&nbsp;#</th>

                                    <th>Date candidature</th>
                                    <th>Email candidat</th>
                                    <th>Nom</th>
                                    <th>Prénom</th>
                                    <th>Commentaire</th>
                                    <th>Statut</th>

                                    <th>Réf</th>
                                    <th>Titre</th>
                                    <th>Contrat</th>
                                    <th>Domaine</th>
                                    <th>Artisanat</th>
                                    <th>Region</th>
                                    <th>Ville</th>
                                    
                                    <th>Début</th>
                                    <th>Durée</th>
                                    <th>Client nom</th>
                                    <th>Client contact</th>
                                 
                                    <th>Statut</th>
                                    <th>Date création</th>
                                    <th>Date publication</th>
                                    <th>Payé</th>
                                    <th>Date paiement</th>
                                    <th>Description</th>
                                </tr>
                                </thead>
                                <tbody >
                                    ";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "candidatures", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["candidatures"]) {
            echo "  
                                    <tr>
                                        <td><input class=\"ml-1\" type=\"checkbox\" class=\"form-check-input\" id=\"selectionnerAnnonce";
            // line 128
            echo $this->getAttribute(($context["annonces"] ?? null), "id", array());
            echo "\"></td>
                                       
                                        <td nowrap>";
            // line 130
            echo $this->getAttribute($context["candidatures"], "candidature_date", array());
            echo "</td>
                                        <td nowrap>";
            // line 131
            echo $this->getAttribute($context["candidatures"], "candidat_email", array());
            echo "</td>
                                        <td nowrap>";
            // line 132
            echo $this->getAttribute($context["candidatures"], "candidat_nom", array());
            echo "</td>
                                        <td nowrap>";
            // line 133
            echo $this->getAttribute($context["candidatures"], "candidat_prenom", array());
            echo "</td>
                                        <td nowrap><a href=\"#\" title=\"";
            // line 134
            echo $this->getAttribute($context["candidatures"], "candidature_commentaire", array());
            echo "\">commentaire</a></td>
                                        <td nowrap>";
            // line 135
            echo $this->getAttribute($context["candidatures"], "candidature_statut", array());
            echo "</td>
                                     
                                       
                                       
                                        <td nowrap>";
            // line 139
            echo $this->getAttribute($context["candidatures"], "ref", array());
            echo "</td>
                                        <td nowrap><a href=\"";
            // line 140
            echo $this->getAttribute($context["candidatures"], "lien_annonce", array());
            echo "\" target=\"_blank\">";
            echo $this->getAttribute($context["candidatures"], "titre", array());
            echo "</a></td>
                                        <td nowrap>";
            // line 141
            echo $this->getAttribute($context["candidatures"], "contrat_type", array());
            echo "</td>
                                        <td nowrap>";
            // line 142
            echo $this->getAttribute($context["candidatures"], "domaine", array());
            echo "</td>
                                        <td nowrap>";
            // line 143
            echo $this->getAttribute($context["candidatures"], "domaine_artisanat", array());
            echo "</td>
                                        <td nowrap>";
            // line 144
            echo $this->getAttribute($context["candidatures"], "region", array());
            echo "</td>
                                        <td nowrap>";
            // line 145
            echo $this->getAttribute($context["candidatures"], "ville", array());
            echo "</td>
                                        
                                        <td nowrap>";
            // line 147
            echo $this->getAttribute($context["candidatures"], "date_debut", array());
            echo "</td>
                                        <td nowrap>";
            // line 148
            echo $this->getAttribute($context["candidatures"], "duree", array());
            echo "</td>
                                        <td nowrap>";
            // line 149
            echo $this->getAttribute($context["candidatures"], "client_nom", array());
            echo "</td>
                                        <td nowrap>";
            // line 150
            echo $this->getAttribute($context["candidatures"], "client_contact", array());
            echo "</td>
                                   
                                        <td nowrap>";
            // line 152
            echo $this->getAttribute($context["candidatures"], "statut", array());
            echo "</td> 
                                        <td nowrap>";
            // line 153
            echo $this->getAttribute($context["candidatures"], "date_creation", array());
            echo "</td>        
                                        <td nowrap>";
            // line 154
            echo $this->getAttribute($context["candidatures"], "date_publication", array());
            echo "</td>        
                                        <td nowrap>";
            // line 155
            echo $this->getAttribute($context["candidatures"], "paye", array());
            echo "</td>        
                                        <td nowrap>";
            // line 156
            echo $this->getAttribute($context["candidatures"], "date_paiement", array());
            echo "</td>  
                                        <td nowrap><a href=\"#\" title=\"";
            // line 157
            echo $this->getAttribute($context["candidatures"], "description_court", array());
            echo "\">description</a></td>                     
                                    </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['candidatures'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        echo " 
                                </tbody>
                            </table>
                       
                    </div>
        </div>
    </div>
</div>

<br><br><br>

";
        // line 170
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "alt_admin_candidatures.html", 170)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 171
        echo "


                    ";
    }

    public function getTemplateName()
    {
        return "alt_admin_candidatures.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  358 => 171,  346 => 170,  333 => 159,  324 => 157,  320 => 156,  316 => 155,  312 => 154,  308 => 153,  304 => 152,  299 => 150,  295 => 149,  291 => 148,  287 => 147,  282 => 145,  278 => 144,  274 => 143,  270 => 142,  266 => 141,  260 => 140,  256 => 139,  249 => 135,  245 => 134,  241 => 133,  237 => 132,  233 => 131,  229 => 130,  224 => 128,  217 => 126,  167 => 79,  160 => 75,  153 => 71,  145 => 66,  137 => 61,  127 => 54,  120 => 50,  111 => 44,  103 => 39,  96 => 35,  89 => 31,  81 => 26,  69 => 17,  65 => 16,  61 => 15,  57 => 14,  53 => 13,  49 => 12,  45 => 11,  41 => 10,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "alt_admin_candidatures.html", "");
    }
}
