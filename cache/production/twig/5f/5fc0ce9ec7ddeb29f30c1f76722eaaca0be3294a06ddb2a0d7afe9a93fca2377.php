<?php

/* alt_admin_candidats.html */
class __TwigTemplate_c3d33ba840969a8ca01ec22d8c02997c4c3e67123daf883dd38c1bf7ca3ce502 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "alt_admin_candidats.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "

<h1 class=\"ml-2\">Liste des comptes candidats</h1>

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
        echo "\"><b>Comptes candidats</b></a>
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
                        Filtres sur la liste des candidats
                    </div>
                    <form id=\"formFiltreCandidat\" class=\"p-2\" method=\"post\" action=\"";
        // line 27
        echo ($context["U_ALT_ADMIN_CANDIDATS"] ?? null);
        echo "\">
                        <input type=\"hidden\" name=\"action\" value=\"filtreCandidat\">
                        <div class=\"form-row align-items-center\">
                            <div class=\"col-auto my-1\">
                                <label class=\"sr-only\" for=\"filtrePrenom\">Prénom</label>
                                <input type=\"text\" class=\"form-control mb-2\" name=\"filtrePrenom\" id=\"filtrePrenom\" placeholder=\"Prénom\" value=\"";
        // line 32
        echo ($context["filtrePrenom"] ?? null);
        echo "\">
                            </div>
                            <div class=\"col-auto my-1\">
                                <label class=\"sr-only\" for=\"filtreNom\">Nom</label>
                                <input type=\"text\" class=\"form-control mb-2\" name=\"filtreNom\" id=\"filtreNom\" placeholder=\"Nom\" value=\"";
        // line 36
        echo ($context["filtreNom"] ?? null);
        echo "\">
                            </div>
                            <div class=\"col-auto my-1\">
                                <label class=\"sr-only\" for=\"filtreEmail\">Email</label>
                                <input type=\"text\" class=\"form-control mb-2\" name=\"filtreEmail\" id=\"filtreEmail\" placeholder=\"Email\" value=\"";
        // line 40
        echo ($context["filtreEmail"] ?? null);
        echo "\">
                            </div>
                            <div class=\"col-auto my-1\">
                                <label class=\"sr-only\" for=\"filtreTel\">Tél</label>
                                <input type=\"text\" class=\"form-control mb-2\" name=\"filtreTel\" id=\"filtreTel\" placeholder=\"Tél\" value=\"";
        // line 44
        echo ($context["filtreTel"] ?? null);
        echo "\">
                            </div>
                            <div class=\"col-auto my-1\">
                                <label class=\"sr-only\" for=\"filtreVille\">Ville</label>
                                <input type=\"text\" class=\"form-control mb-2\" name=\"filtreVille\" id=\"filtreVille\" placeholder=\"Ville\" value=\"";
        // line 48
        echo ($context["filtreVille"] ?? null);
        echo "\">
                            </div>
                            <div class=\"col-auto my-1\">
                                <label class=\"sr-only\" for=\"filtreVilleProche\">Ville proche</label>
                                <input type=\"text\" class=\"form-control mb-2\" name=\"filtreVilleProche\" id=\"filtreVilleProche\" placeholder=\"Ville proche\" value=\"";
        // line 52
        echo ($context["filtreVilleProche"] ?? null);
        echo "\">
                            </div>
                            <div class=\"col-auto my-1\">
                                <label class=\"sr-only\" for=\"filtreRegion\">Région</label>
                                <input type=\"text\" class=\"form-control mb-2\" name=\"filtreRegion\" id=\"filtreRegion\" placeholder=\"Région\" value=\"";
        // line 56
        echo ($context["filtreRegion"] ?? null);
        echo "\">
                            </div>
                            <div class=\"col-auto my-1\">
                                <label class=\"sr-only\" for=\"filtreDomaineActivite\">Domaine activité</label>
                                <input type=\"text\" class=\"form-control mb-2\" name=\"filtreDomaineActivite\" id=\"filtreDomaineActivite\" placeholder=\"Domaine activité\" value=\"";
        // line 60
        echo ($context["filtreDomaineActivite"] ?? null);
        echo "\">
                            </div>
                            <div class=\"col-auto my-1\">
                                <label class=\"sr-only\" for=\"filtreDomaineActiviteArtisanat\">Domaine artisanat</label>
                                <input type=\"text\" class=\"form-control mb-2\" name=\"filtreDomaineActiviteArtisanat\" id=\"filtreDomaineActiviteArtisanat\" placeholder=\"Domaine artisanat\" value=\"";
        // line 64
        echo ($context["filtreDomaineActiviteArtisanat"] ?? null);
        echo "\">
                            </div>
                            <div class=\"col-auto my-1\">
                                <label class=\"sr-only\" for=\"filtreNiveauEtude\">Niveau étude</label>
                                <input type=\"text\" class=\"form-control mb-2\" name=\"filtreNiveauEtude\" id=\"filtreNiveauEtude\" placeholder=\"Niveau d'étude\" value=\"";
        // line 68
        echo ($context["filtreNiveauEtude"] ?? null);
        echo "\">
                            </div>
                            <div class=\"col-auto my-1\">
                                <label class=\"mr-sm-2\" for=\"filtreAge\">Age</label>
                                <select class=\"custom-select mr-sm-2\" name=\"filtreAge\" id=\"filtreAge\">
                                <option selected>";
        // line 73
        echo ($context["filtreAge"] ?? null);
        echo "</option>
                                    <option></option>
                                    <option>15</option>
                                    <option>16</option>
                                    <option>17</option>
                                    <option>18</option>
                                    <option>19</option>
                                    <option>20</option>
                                    <option>21</option>
                                    <option>22</option>
                                    <option>23</option>
                                    <option>24</option>
                                    <option>25</option>
                                    <option>26 et +</option>
                                </select>
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
                <button class=\"btn btn-primary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButtonCandidats\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
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
                                    <th>Prénom</th>
                                    <th>Nom</th>
                                    <th>Email</th>
                                    <th>Tél</th>
                                    <th>Age</th>
                                    <th>Ville</th>
                                    <th>Ville proche</th>
                                    <th>Région</th>
                                    <th>Domaine d'activité</th>
                                    <th>Domaine artisanat</th>
                                    <th>Niveau d'étude</th>
                                    <th>Dernière école</th>
                                    <th>CV</th>
                                    
                                </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 136
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "candidats", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["candidats"]) {
            echo "  
                                    <tr>
                                        <td><input class=\"ml-1\" type=\"checkbox\" class=\"form-check-input\" name=\"listeSelection\" id=\"";
            // line 138
            echo $this->getAttribute($context["candidats"], "id", array());
            echo "\"></td>
                                        <td nowrap>";
            // line 139
            echo $this->getAttribute($context["candidats"], "date_creation", array());
            echo "</td>
                                        <td nowrap>";
            // line 140
            echo $this->getAttribute($context["candidats"], "prenom", array());
            echo "</td>
                                        <td nowrap>";
            // line 141
            echo $this->getAttribute($context["candidats"], "nom", array());
            echo "</td>
                                        <td nowrap>";
            // line 142
            echo $this->getAttribute($context["candidats"], "email", array());
            echo "</td>
                                        <td nowrap>";
            // line 143
            echo $this->getAttribute($context["candidats"], "tel_mobile", array());
            echo "</td>
                                        <td nowrap>";
            // line 144
            echo $this->getAttribute($context["candidats"], "age", array());
            echo "</td>
                                        <td nowrap>";
            // line 145
            echo $this->getAttribute($context["candidats"], "ville", array());
            echo "</td>
                                        <td nowrap>";
            // line 146
            echo $this->getAttribute($context["candidats"], "ville_proche", array());
            echo "</td>
                                        <td nowrap>";
            // line 147
            echo $this->getAttribute($context["candidats"], "region", array());
            echo "</td>
                                        <td nowrap>";
            // line 148
            echo $this->getAttribute($context["candidats"], "domaine_principal", array());
            echo "</td>
                                        <td nowrap>";
            // line 149
            echo $this->getAttribute($context["candidats"], "domaine_artisanat", array());
            echo "</td>
                                        <td nowrap>";
            // line 150
            echo $this->getAttribute($context["candidats"], "niveau_etude", array());
            echo "</td>
                                        <td nowrap>";
            // line 151
            echo $this->getAttribute($context["candidats"], "derniere_ecole", array());
            echo "</td>
                                        <td nowrap><a href=\"";
            // line 152
            echo $this->getAttribute($context["candidats"], "cv_href", array());
            echo "\" target=\"_blank\"><b>";
            echo $this->getAttribute($context["candidats"], "cv_nom", array());
            echo "</b></a></td>
                                        
                                    </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['candidats'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
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
        // line 182
        echo ($context["U_ALT_AJAX"] ?? null);
        echo "',
         type : 'POST', 
    
         data : 'action='+ action +'&elements=' + data_str, 
         dataType : 'html',
         success : function(code_html, statut){ 
     
            // alert(code_html);
            document.getElementById(\"messageOk\").innerHTML = 'Les comptes admins ont été activés! (<a href=\"";
        // line 190
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
        // line 220
        echo ($context["U_ALT_AJAX"] ?? null);
        echo "',
         type : 'POST', 
    
         data : 'action='+ action +'&elements=' + data_str, 
         dataType : 'html',
         success : function(code_html, statut){ 
     
            // alert(code_html);
            document.getElementById(\"messageOk\").innerHTML = 'Les comptes ont été supprimés! (<a href=\"";
        // line 228
        echo ($context["U_ALT_ADMIN_CANDIDATS"] ?? null);
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
        // line 257
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "alt_admin_candidats.html", 257)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 258
        echo "


                    ";
    }

    public function getTemplateName()
    {
        return "alt_admin_candidats.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  430 => 258,  418 => 257,  386 => 228,  375 => 220,  342 => 190,  331 => 182,  302 => 155,  290 => 152,  286 => 151,  282 => 150,  278 => 149,  274 => 148,  270 => 147,  266 => 146,  262 => 145,  258 => 144,  254 => 143,  250 => 142,  246 => 141,  242 => 140,  238 => 139,  234 => 138,  227 => 136,  161 => 73,  153 => 68,  146 => 64,  139 => 60,  132 => 56,  125 => 52,  118 => 48,  111 => 44,  104 => 40,  97 => 36,  90 => 32,  82 => 27,  69 => 17,  65 => 16,  61 => 15,  57 => 14,  53 => 13,  49 => 12,  45 => 11,  41 => 10,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "alt_admin_candidats.html", "");
    }
}
