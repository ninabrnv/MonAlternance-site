<?php

/* alt_admin_entreprises.html */
class __TwigTemplate_b8a68ee4e04a42a36bc9648f374dce5935b6c2d69b07bf0e86dfdd4ce2c2e876 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "alt_admin_entreprises.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "

<h1 class=\"ml-2\">Liste des comptes entreprises</h1>

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
        echo "\"><b>Comptes entreprises</b></a>
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
        echo "\">Dernières candidatures</a>
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
                        <form id=\"formFiltreCandidat\" class=\"p-2\" method=\"post\" action=\"";
        // line 26
        echo ($context["U_ALT_ADMIN_ENTREPRISES"] ?? null);
        echo "\">
                            <input type=\"hidden\" name=\"action\" value=\"filtreEntreprise\">
                            <div class=\"form-row align-items-center\">
                                <div class=\"col-auto my-1\">
                                        <label class=\"sr-only\" for=\"filtreEntreprise\">Entreprise</label>
                                        <input type=\"text\" class=\"form-control mb-2\" name=\"filtreEntreprise\" id=\"filtreEntreprise\" placeholder=\"Entreprise\" value=\"";
        // line 31
        echo ($context["filtreEntreprise"] ?? null);
        echo "\">
                                    </div>
                                <div class=\"col-auto my-1\">
                                    <label class=\"sr-only\" for=\"filtrePrenom\">Prénom</label>
                                    <input type=\"text\" class=\"form-control mb-2\" name=\"filtrePrenom\" id=\"filtrePrenom\" placeholder=\"Prénom\" value=\"";
        // line 35
        echo ($context["filtrePrenom"] ?? null);
        echo "\">
                                </div>
                                <div class=\"col-auto my-1\">
                                    <label class=\"sr-only\" for=\"filtreNom\">Nom</label>
                                    <input type=\"text\" class=\"form-control mb-2\" name=\"filtreNom\" id=\"filtreNom\" placeholder=\"Nom\" value=\"";
        // line 39
        echo ($context["filtreNom"] ?? null);
        echo "\">
                                </div>
                                <div class=\"col-auto my-1\">
                                    <label class=\"sr-only\" for=\"filtreEmail\">Email</label>
                                    <input type=\"text\" class=\"form-control mb-2\" name=\"filtreEmail\" id=\"filtreEmail\" placeholder=\"Email\" value=\"";
        // line 43
        echo ($context["filtreEmail"] ?? null);
        echo "\">
                                </div>
                                <div class=\"col-auto my-1\">
                                    <label class=\"sr-only\" for=\"filtreTel\">Tél</label>
                                    <input type=\"text\" class=\"form-control mb-2\" name=\"filtreTel\" id=\"filtreTel\" placeholder=\"Tél\" value=\"";
        // line 47
        echo ($context["filtreTel"] ?? null);
        echo "\">
                                </div>
                                <div class=\"col-auto my-1\">
                                    <label class=\"sr-only\" for=\"filtreCP\">Code postal</label>
                                    <input type=\"text\" class=\"form-control mb-2\" name=\"filtreCP\" id=\"filtreCP\" placeholder=\"Code postal\" value=\"";
        // line 51
        echo ($context["filtreCP"] ?? null);
        echo "\">
                                </div>
                               
                                <div class=\"col-auto my-1\">
                                    <label class=\"sr-only\" for=\"filtreVille\">Ville</label>
                                    <input type=\"text\" class=\"form-control mb-2\" name=\"filtreVille\" id=\"filtreVille\" placeholder=\"Ville\" value=\"";
        // line 56
        echo ($context["filtreVille"] ?? null);
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
                                    <label class=\"sr-only\" for=\"filtreDomaineActivite\">Domaine activité</label>
                                    <input type=\"text\" class=\"form-control mb-2\" name=\"filtreDomaineActivite\" id=\"filtreDomaineActivite\" placeholder=\"Domaine activité\" value=\"";
        // line 66
        echo ($context["filtreDomaineActivite"] ?? null);
        echo "\">
                                </div>
        
                                <div class=\"col-auto my-1\">
                                    <label class=\"sr-only\" for=\"filtreSiret\">Siret</label>
                                    <input type=\"text\" class=\"form-control mb-2\" name=\"filtreSiret\" id=\"filtreSiret\" placeholder=\"Siret\" value=\"";
        // line 71
        echo ($context["filtreSiret"] ?? null);
        echo "\">
                                </div>
                             
                            
                                <div class=\"col-auto my-1\">
                                    <button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <br>
                <div style=\"text-align: center; color: green\" id=\"messageOk\"></div>
                <div style=\"text-align: center; color: red\" id=\"messageErreur\"></div>
    
                <div class=\"dropdown\">
                    <button class=\"btn btn-primary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButtonEntreprises\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                      Actions pour la sélection
                    </button>
                    <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                      <a class=\"dropdown-item\" onclick=\"activerStatutAdmin();\">Activer statut admin</a>
                      <a class=\"dropdown-item\" onclick=\"compteSupprimer();\">Supprimer compte</a>
                    </div>
                  </div>
                  <br>

            <div class=\"container-fluid\">
                            <table class=\"table\">
                                <thead>
                                <tr>
                                    <th>&nbsp;#</th>
                                    <th>Inscription</th>
                                    <th>Société nom</th>
                                    <th>Secteur d'activité</th>
                                    <th>Email</th>
                                    <th>Tél</th>
                                    <th>Prénom</th>
                                    <th>Nom</th>
                                    <th>Adresse</th>
                                    <th>Code postale</th>
                                    <th>Ville</th>
                                    <th>Région</th>
                                    <th>Pays</th>
                                    <th>Siret</th>
                                    <th>Effectif</th>
                                    
                                </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "entreprises", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["entreprises"]) {
            echo "  
                                    <tr>
                                        <td><input class=\"ml-1\" type=\"checkbox\" class=\"form-check-input\"  name=\"listeSelection\" id=\"";
            // line 121
            echo $this->getAttribute($context["entreprises"], "id", array());
            echo "\"></td>
                                        <td nowrap>";
            // line 122
            echo $this->getAttribute($context["entreprises"], "date_creation", array());
            echo "</td>                
                                        <td nowrap><a href=\"";
            // line 123
            echo $this->getAttribute($context["entreprises"], "lien_compte_entreprise", array());
            echo "\">";
            echo $this->getAttribute($context["entreprises"], "societe_nom", array());
            echo "</a></td>
                                        <td nowrap>";
            // line 124
            echo $this->getAttribute($context["entreprises"], "domaine_principal", array());
            echo "</td>
                                        <td nowrap>";
            // line 125
            echo $this->getAttribute($context["entreprises"], "email", array());
            echo "</td>
                                        <td nowrap>";
            // line 126
            echo $this->getAttribute($context["entreprises"], "societe_tel", array());
            echo "</td>
                                        <td nowrap>";
            // line 127
            echo $this->getAttribute($context["entreprises"], "societe_ident_prenom", array());
            echo "</td>
                                        <td nowrap>";
            // line 128
            echo $this->getAttribute($context["entreprises"], "societe_ident_nom", array());
            echo "</td>
                                        <td nowrap>";
            // line 129
            echo $this->getAttribute($context["entreprises"], "societe_adresse", array());
            echo "</td>
                                        <td nowrap>";
            // line 130
            echo $this->getAttribute($context["entreprises"], "societe_adresse_cp", array());
            echo "</td>
                                        <td nowrap>";
            // line 131
            echo $this->getAttribute($context["entreprises"], "societe_adresse_ville", array());
            echo "</td>
                                        <td nowrap>";
            // line 132
            echo $this->getAttribute($context["entreprises"], "societe_region", array());
            echo "</td>
                                        <td nowrap>";
            // line 133
            echo $this->getAttribute($context["entreprises"], "societe_adresse_pays", array());
            echo "</td>
                                        <td nowrap>";
            // line 134
            echo $this->getAttribute($context["entreprises"], "societe_siret", array());
            echo "</td>
                                        <td nowrap>";
            // line 135
            echo $this->getAttribute($context["entreprises"], "societe_effectif", array());
            echo "</td>
                                        
                                    </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entreprises'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo " 
                                </tbody>
                            </table>
                        </div>
               
        </div>
    </div>
</div>

<br><br><br>


<script>

        function activerStatutAdmin() {
        
        var action = \"adminActiver\";
        var data_str = \"\";
        
        var list = getCheckedByName('listeSelection');
        
         for(var i = 0; i < list.length; i++) {
            // alert('case cochées id : ' + list[i].id);
             data_str += list[i].id + ',';
         }
        
         \$.ajax({
             url : '";
        // line 165
        echo ($context["U_ALT_AJAX"] ?? null);
        echo "',
             type : 'POST', 
        
             data : 'action='+ action +'&elements=' + data_str, 
             dataType : 'html',
             success : function(code_html, statut){ 
         
                // alert(code_html);
                document.getElementById(\"messageOk\").innerHTML = 'Les comptes admins ont été activés! (<a href=\"";
        // line 173
        echo ($context["U_ALT_ADMIN_ADMINS"] ?? null);
        echo "\">Allez</a> sur la page des admins)'; 
        
             },
         
             error : function(resultat, statut, erreur){
                 //alert(erreur);
                 document.getElementById(\"messageErreur\").innerHTML = 'Erreur : ' + erreur;
                 console.log(resultat);
             },
             complete : function(resultat, statut){
         
             }
         
         });
        
        }
    
        function compteSupprimer() {
        
        var action = \"compteSupprimer\";
        var data_str = \"\";
        
        var list = getCheckedByName('listeSelection');
        
         for(var i = 0; i < list.length; i++) {
            // alert('case cochées id : ' + list[i].id);
             data_str += list[i].id + ',';
         }
        
         \$.ajax({
             url : '";
        // line 203
        echo ($context["U_ALT_AJAX"] ?? null);
        echo "',
             type : 'POST', 
        
             data : 'action='+ action +'&elements=' + data_str, 
             dataType : 'html',
             success : function(code_html, statut){ 
         
                // alert(code_html);
                document.getElementById(\"messageOk\").innerHTML = 'Les comptes ont été supprimés! (<a href=\"";
        // line 211
        echo ($context["U_ALT_ADMIN_ENTREPRISES"] ?? null);
        echo "\">Actualisez</a> la page)'; 
        
             },
         
             error : function(resultat, statut, erreur){
                 //alert(erreur);
                 document.getElementById(\"messageErreur\").innerHTML = 'Erreur : ' + erreur;
                 console.log(resultat);
             },
             complete : function(resultat, statut){
         
             }
         
         });
        
        }
        
        function getCheckedByName(name){
         var chks = document.getElementsByName(name);
         var results = [];
         for(var i = 0; i < chks.length; i++){
             chks[i].checked ? results.push(chks[i]):\"\";
         }
         return results;
        }
        
        
        </script>
    

";
        // line 241
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "alt_admin_entreprises.html", 241)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 242
        echo "


                    ";
    }

    public function getTemplateName()
    {
        return "alt_admin_entreprises.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  411 => 242,  399 => 241,  366 => 211,  355 => 203,  322 => 173,  311 => 165,  282 => 138,  272 => 135,  268 => 134,  264 => 133,  260 => 132,  256 => 131,  252 => 130,  248 => 129,  244 => 128,  240 => 127,  236 => 126,  232 => 125,  228 => 124,  222 => 123,  218 => 122,  214 => 121,  207 => 119,  156 => 71,  148 => 66,  140 => 61,  132 => 56,  124 => 51,  117 => 47,  110 => 43,  103 => 39,  96 => 35,  89 => 31,  81 => 26,  69 => 17,  65 => 16,  61 => 15,  57 => 14,  53 => 13,  49 => 12,  45 => 11,  41 => 10,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "alt_admin_entreprises.html", "");
    }
}
