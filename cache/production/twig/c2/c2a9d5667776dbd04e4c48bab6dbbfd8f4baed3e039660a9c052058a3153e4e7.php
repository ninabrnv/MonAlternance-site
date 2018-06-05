<?php

/* alt_index_entreprise.html */
class __TwigTemplate_1af291bfc4a8652f6aa2b4ad9eff7cc2629b46a03ca8045a14360a7ab5d882bf extends Twig_Template
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
        echo "<div class=\"container mb-3\">
   <div class=\"row\">
        <div class=\"col-12\">
            <a href=\"";
        // line 4
        echo ($context["U_ALT_MES_ANNONCES"] ?? null);
        echo "\" style=\"float:right\"><button type=\"button\" class=\"btn imageActualiser\" style=\"background-color: #C0C0C0;\">Actualier</button></a>
            <div style=\"font-size: 1.2em; color: grey\">Bonjour ";
        // line 5
        echo ($context["prenom"] ?? null);
        echo ",</div>
            
        </div>

   </div>
   
</div>

<div class=\"container mb-5\">
    <nav class=\"nav nav-tabs\" id=\"tabAnnonces\" role=\"tablist\">
        <a class=\"nav-item nav-link ";
        // line 15
        echo ($context["ONGLET_MES_ANNONCE_SELECTED"] ?? null);
        echo "\" id=\"nav-tab-mes-annonces\" data-toggle=\"tab\" href=\"#nav-contenu-mes-annonces\" role=\"tab\" aria-controls=\"nav-home\" aria-selected=\"true\">Mes annonces</a>
        <!-- <a class=\"nav-item nav-link ";
        // line 16
        echo ($context["ONGLET_MES_CV_SELECTED"] ?? null);
        echo "\" id=\"nav-tab-mes-cv\" data-toggle=\"tab\" href=\"#nav-contenu-mes-cv\" role=\"tab\" aria-controls=\"nav-home\">CVThèque</a> -->
        <a class=\"nav-item nav-link ";
        // line 17
        echo ($context["ONGLET_MON_PROFIL_SELECTED"] ?? null);
        echo "\" id=\"nav-tab-mon-profil\" data-toggle=\"tab\" href=\"#nav-contenu-mon-profil\" role=\"tab\" aria-controls=\"nav-home\">Mon profil</a>
        <a class=\"nav-item nav-link ";
        // line 18
        echo ($context["ONGLET_MES_FACTURES_SELECTED"] ?? null);
        echo "\" id=\"nav-tab-mes-factures\" data-toggle=\"tab\" href=\"#nav-contenu-mes-factures\" role=\"tab\" aria-controls=\"nav-home\">Mes factures</a>
        <a class=\"nav-item nav-link ";
        // line 19
        echo ($context["ONGLET_MON_COMPTE_SELECTED"] ?? null);
        echo "\" id=\"nav-tab-mon-compte\" data-toggle=\"tab\" href=\"#nav-contenu-mon-compte\" role=\"tab\" aria-controls=\"nav-home\">Mon compte</a>
    </nav>

    <div class=\"row\">
        
        <div class=\"col-12 col-sm-12 col-lg-12 col-xl-12 tab-content\" >   
             <!-- Contenu \"mes annonces\" -->    
            <div class=\"tab-pane fade show ";
        // line 26
        echo ($context["ONGLET_MES_ANNONCE_SELECTED"] ?? null);
        echo "\" id=\"nav-contenu-mes-annonces\" role=\"tabpanel\" aria-labelledby=\"nav-tab-mes-annonces\">

                <br>
                <form name=\"creerNouvelleAnnonce\" method=\"POST\" action=\"";
        // line 29
        echo ($context["ACTION_FORM_CREER_ANNONCE"] ?? null);
        echo "\">
                    <input type=\"submit\" name=\"submit\" id=\"submit\" value=\"Créer une annonce\" class=\"btn btn-success default-submit-action\" />
                </form>
                <br>
         
                
      

                ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "mesannonces", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["mesannonces"]) {
            echo "             
                <div class=\"container-fluid card p-3 m-0\" style=\"background-color: rgb(252, 249, 249) border: 1px solid #C0C0C0; border-radius: 10px; box-shadow: 3px 3px 6px 0 #A9A9A9;\">

                    <!-- Annonce : Modal  -->
                    <div class=\"modal fade\" id=\"modalAnnonce";
            // line 41
            echo $this->getAttribute($context["mesannonces"], "ID", array());
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"Annonce\" aria-hidden=\"true\">
                        <div class=\"modal-dialog modal-lg\" role=\"document\">
                            <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <div class=\"alt_lien_sous_titre\">Réf : ";
            // line 45
            echo $this->getAttribute($context["mesannonces"], "REF", array());
            echo "</div>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                            <div class=\"modal-body\">
                                <div class=\"container-fluid pl-0\">
                                    <div class=\"row\">
                                        <div class=\"col\">
                                            <h5 class=\"modal-title\" id=\"exampleModalLabel\" style=\"color: #007bff\">";
            // line 54
            echo $this->getAttribute($context["mesannonces"], "TITRE", array());
            echo "</h5>
                                            <div style=\"color: red;\">";
            // line 55
            echo $this->getAttribute($context["mesannonces"], "LIEU", array());
            echo "</div>
                                        </div>

                                        <div class=\"col\" style=\"text-align: right; padding: 0px\">
                                            <!-- <a onclick=\"favoris(";
            // line 59
            echo $this->getAttribute($context["mesannonces"], "ID", array());
            echo ")\" data-dismiss=\"modal\" style=\"cursor: pointer\"><img src=\"";
            echo ($context["T_IMAGES_PATH"] ?? null);
            echo "site/accueil/btn_favoris_noir_mini.png\" id=\"Mcoeur";
            echo $this->getAttribute($context["mesannonces"], "ID", array());
            echo "\" title=\"Ajouter cette annonce dans vos favoris\"></a>
                                            <a style=\"cursor: pointer\" data-dismiss=\"modal\"><img src=\"";
            // line 60
            echo ($context["T_IMAGES_PATH"] ?? null);
            echo "site/accueil/btn_facebook_noir_mini.png\" id=\"Mfacebook";
            echo $this->getAttribute($context["mesannonces"], "ID", array());
            echo "\" title=\"Publier cette offre sur votre mur Facebook\"></a>
                                             -->
                                            ";
            // line 62
            if (($context["S_USER_LOGGED_IN"] ?? null)) {
                // line 63
                echo "                                            <!-- <button data-toggle=\"modal\" class=\"unstyled-button\" data-target=\"#modalCommentaire";
                echo $this->getAttribute($context["mesannonces"], "ID", array());
                echo "\" data-dismiss=\"modal\" data-id=\"";
                echo $this->getAttribute($context["mesannonces"], "ID", array());
                echo "\" style=\"cursor: pointer\"><img src=\"";
                echo ($context["T_IMAGES_PATH"] ?? null);
                echo "site/accueil/btn_postuler_noir_mini.png\" id=\"M2postuler";
                echo $this->getAttribute($context["mesannonces"], "ID", array());
                echo "\"  title=\"Postuler à cette annonce\"></button> -->
                                            ";
            } else {
                // line 65
                echo "                                            <!-- <a href=\"";
                echo ($context["U_LOGIN_LOGOUT"] ?? null);
                echo "\" style=\"cursor: pointer\" title=\"postuler\"><img src=\"";
                echo ($context["T_IMAGES_PATH"] ?? null);
                echo "site/accueil/btn_postuler_noir_mini.png\" title=\"Postuler à cette annonce\"></a> -->
                                            ";
            }
            // line 67
            echo "                                            
                                            <!-- <a onclick=\"postuler(";
            // line 68
            echo $this->getAttribute($context["mesannonces"], "ID", array());
            echo ")\" data-dismiss=\"modal\" style=\"cursor: pointer\"><img src=\"";
            echo ($context["T_IMAGES_PATH"] ?? null);
            echo "site/accueil/btn_postuler_noir_mini.png\" id=\"M2postuler";
            echo $this->getAttribute($context["mesannonces"], "ID", array());
            echo "\"  title=\"Postuler à cette annonce\"></a> -->
                                        </div>
                                    </div>
                                </div>
                            
                                <hr style=\"height: 1px; color: rgb(172, 172, 172); background-color: rgb(177, 177, 177); width: 100%; border: none;\">
                                <b>Type de contrat :</b> ";
            // line 74
            echo $this->getAttribute($context["mesannonces"], "TYPE_CONTRAT", array());
            echo "
                                <br><b>Publiée le :</b> ";
            // line 75
            echo $this->getAttribute($context["mesannonces"], "DATE_PUBLICATION", array());
            echo "
                                <br><b>Domaine :</b> ";
            // line 76
            echo $this->getAttribute($context["mesannonces"], "DOMAINE", array());
            echo " ";
            echo $this->getAttribute($context["mesannonces"], "DOMAINE_ARTISANAT", array());
            echo "
                                <br><b>Date de début :</b> ";
            // line 77
            echo $this->getAttribute($context["mesannonces"], "DATE_DE_DEBUT", array());
            echo "
                                <br><b>Durée :</b> ";
            // line 78
            echo $this->getAttribute($context["mesannonces"], "DUREE", array());
            echo $this->getAttribute($context["mesannonces"], "DUREE_NOMBRE", array());
            echo " ";
            echo $this->getAttribute($context["mesannonces"], "DUREE_TYPE", array());
            echo "
                                <br>
                                <br><b>Descriptif : </b>
                                <br> 
                                ";
            // line 82
            echo $this->getAttribute($context["mesannonces"], "DESCRIPTION", array());
            echo "

                                    
                            </div>
                            <div class=\"modal-footer\">
                            
                                            ";
            // line 88
            if (($context["U_USER_ADMIN"] ?? null)) {
                // line 89
                echo "                                            <div class=\"dropdown\">
                                                <button class=\"btn btn-sm btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\"  data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                    Admin
                                                </button>
                                                <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                                    <a class=\"dropdown-item\" data-dismiss=\"modal\" onclick=\"valider(";
                // line 94
                echo $this->getAttribute($context["mesannonces"], "ID", array());
                echo ")\">Valider annonce</a>
                                                    <a class=\"dropdown-item\" data-dismiss=\"modal\" onclick=\"supprimer(";
                // line 95
                echo $this->getAttribute($context["mesannonces"], "ID", array());
                echo ")\">Supprimer annonce</a>
                                                </div>
                                            </div>
                                            ";
            }
            // line 99
            echo "                                        <!-- <a onclick=\"postuler(";
            echo $this->getAttribute($context["mesannonces"], "ID", array());
            echo ")\" data-dismiss=\"modal\" style=\"cursor: pointer\"><img src=\"";
            echo ($context["T_IMAGES_PATH"] ?? null);
            echo "site/accueil/btn_postuler_noir_mini.png\" id=\"Mpostuler";
            echo $this->getAttribute($context["mesannonces"], "ID", array());
            echo "\"  title=\"Postuler à cette annonce\"></a> -->
                            
                                
                            
                            </div>

                            </div>
                        </div>
                    </div>

                
                    
                    <div class=\"row mb-2 \">
                        <div class=\"col-md-8 mr-auto\">
                            <a style=\"font-weight: bold\" href=\"javascript:afficheCandidatAnnonce(";
            // line 113
            echo $this->getAttribute($context["mesannonces"], "ID", array());
            echo ");\">";
            echo $this->getAttribute($context["mesannonces"], "LIEU", array());
            echo " - ";
            echo $this->getAttribute($context["mesannonces"], "TITRE", array());
            echo " - Réf : ";
            echo $this->getAttribute($context["mesannonces"], "REF", array());
            echo " - ";
            echo $this->getAttribute($context["mesannonces"], "DATE_PUBLICATION", array());
            echo "</a>
                            &nbsp; <a class=\"alt_lien_sous_titre\" href=\"#modalAnnonce";
            // line 114
            echo $this->getAttribute($context["mesannonces"], "ID", array());
            echo "\" data-toggle=\"modal\">Voir l'annonce</a>
                            <br>";
            // line 115
            echo $this->getAttribute($context["mesannonces"], "TYPE_CONTRAT", array());
            echo "
                        </div>

                        
  
                 
                        <div class=\"col-auto\">
                            <button  id=\"btnStatutAnnonce";
            // line 122
            echo $this->getAttribute($context["mesannonces"], "ID", array());
            echo "\" rel=\"popover\" data-trigger=\"hover\"  data-content=\"";
            echo $this->getAttribute($context["mesannonces"], "MESSAGE_STATUT", array());
            echo "\" type=\"button\" class=\"unstyled-button bold btn btn-default btn-sm\" aria-expanded=\"true\">
                                <div style=\"color: ";
            // line 123
            echo $this->getAttribute($context["mesannonces"], "STATUT_COULEUR", array());
            echo "\">";
            echo $this->getAttribute($context["mesannonces"], "STATUT", array());
            echo " &nbsp;<span class=\"fa fa-circle\"></span></div>
                            </button>
                            <!-- <script>
                                jQuery(document).ready(function( \$ ) {
                                    \$('#btnStatutAnnonce";
            // line 127
            echo $this->getAttribute($context["mesannonces"], "ID", array());
            echo "').popover();
                                });
                            </script> -->
                        </div>
                        <div class=\"col-auto\">
                            <div class=\"dropdown\">
                                <a class=\"btn btn-outline-danger dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                Actions
                                </a>
                                <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuLink\">
                                <a class=\"dropdown-item\" href=\"#modalAnnonce";
            // line 137
            echo $this->getAttribute($context["mesannonces"], "ID", array());
            echo "\" data-toggle=\"modal\">Consulter</a>
                                <a class=\"dropdown-item\" href=\"";
            // line 138
            echo $this->getAttribute($context["mesannonces"], "LIEN_ANNONCE_EDIT", array());
            echo "\">Editer</a>
                                <a class=\"dropdown-item\" href=\"";
            // line 139
            echo $this->getAttribute($context["mesannonces"], "LIEN_ANNONCE_DUPLIQUER", array());
            echo "\">Dupliquer</a>

                                ";
            // line 141
            if ($this->getAttribute($context["mesannonces"], "PAYE", array())) {
                echo "    
                                <a class=\"dropdown-item\" href=\"";
                // line 142
                echo $this->getAttribute($context["mesannonces"], "LIEN_ANNONCE_ACTIVER", array());
                echo "\">Activer</a>
                                <a class=\"dropdown-item\" href=\"";
                // line 143
                echo $this->getAttribute($context["mesannonces"], "LIEN_ANNONCE_DESACTIVER", array());
                echo "\">Désactiver</a>    
                                <a class=\"dropdown-item\" href=\"";
                // line 144
                echo $this->getAttribute($context["mesannonces"], "LIEN_ANNONCE_FACTURE", array());
                echo "\" target=\"_blank\">Facture</a>    


                                ";
            } else {
                // line 148
                echo "
                                
                                <a class=\"dropdown-item\" href=\"";
                // line 150
                echo $this->getAttribute($context["mesannonces"], "LIEN_ANNONCE_PAYER", array());
                echo "\">Payer</a>
                               
                               ";
                // line 152
                if (($context["U_ALT_MODERATEUR"] ?? null)) {
                    echo " 
                               <!-- <a class=\"dropdown-item\" href=\"";
                    // line 153
                    echo $this->getAttribute($context["mesannonces"], "LIEN_AJOUTER_CANDIDAT", array());
                    echo "\">Ajouter candidat</a> -->
                               <a class=\"dropdown-item\" href=\"";
                    // line 154
                    echo $this->getAttribute($context["mesannonces"], "LIEN_ANNONCE_PAYER_MODERATEUR", array());
                    echo "\">Payer (admin)</a>
                               ";
                }
                // line 155
                echo "     

                               
                                ";
            }
            // line 159
            echo "                                <a class=\"dropdown-item\" href=\"";
            echo $this->getAttribute($context["mesannonces"], "LIEN_ANNONCE_SUPPRIMER", array());
            echo "\">Supprimer</a>
                                
                            </div>
                            </div>
                        </div>
                    </div>
                   
                    <div class=\"row \">
                        <div class=\"col-12 col-md-3\" style=\"text-align: center\">
                            <button type=\"button\" onclick=\"javascript:afficheCandidatAnnonce(";
            // line 168
            echo $this->getAttribute($context["mesannonces"], "ID", array());
            echo ");\" class=\"btn btn-light\" style=\"border-color: #dc3545;\"  >
                                Tous les candidats ";
            // line 169
            echo $this->getAttribute($context["mesannonces"], "nbCandidat", array());
            echo "
                            </button>
                        </div>
                        <div class=\"col-12 col-md-3\" style=\"text-align: center\">
                                <button type=\"button\" onclick=\"javascript:afficheCandidatAnnonce(";
            // line 173
            echo $this->getAttribute($context["mesannonces"], "ID", array());
            echo ");\" class=\"btn btn-light\" style=\"border-color: #dc3545;\">
                                Nouveaux ";
            // line 174
            echo $this->getAttribute($context["mesannonces"], "nbCandidatNouveau", array());
            echo "
                            </button>
                        </div>
                        <div class=\"col-12 col-md-3\" style=\"text-align: center\">
                                <button type=\"button\" onclick=\"javascript:afficheCandidatAnnonce(";
            // line 178
            echo $this->getAttribute($context["mesannonces"], "ID", array());
            echo ");\" class=\"btn btn-light\" style=\"border-color: #dc3545;\">
                                Sélectionnés ";
            // line 179
            echo $this->getAttribute($context["mesannonces"], "nbCandidatSelectionne", array());
            echo "
                            </button>
                        </div>
                        <!-- <div class=\"col-12 col-md-2\">
                            <button type=\"button\" onclick=\"javascript:afficheCandidatAnnonce(";
            // line 183
            echo $this->getAttribute($context["mesannonces"], "ID", array());
            echo ");\" class=\"btn btn-light\" style=\"border-color: #dc3545;\">
                                Entretien téléphonique <span class=\"badge badge-primary\">0</span>
                            </button>
                        </div>
                        <div class=\"col-12 col-md-2\">
                            <button type=\"button\" onclick=\"javascript:afficheCandidatAnnonce(";
            // line 188
            echo $this->getAttribute($context["mesannonces"], "ID", array());
            echo ");\" class=\"btn btn-light\" style=\"border-color: #dc3545;\">
                                RDV Physique <span class=\"badge badge-primary\">0</span>
                            </button>
                        </div> -->
                        <div class=\"col-12 col-md-3\" style=\"text-align: center\">
                                <button type=\"button\" onclick=\"javascript:afficheCandidatAnnonce(";
            // line 193
            echo $this->getAttribute($context["mesannonces"], "ID", array());
            echo ");\" class=\"btn btn-light\" style=\"border-color: #dc3545;\">
                                Refusés ";
            // line 194
            echo $this->getAttribute($context["mesannonces"], "nbCandidatRefuse", array());
            echo "
                            </button>
                        </div>
                        <!-- <div class=\"col-12 col-md-2\" style=\"text-align: center\">
                            <button type=\"button\" onclick=\"javascript:afficheCandidatAnnonce(";
            // line 198
            echo $this->getAttribute($context["mesannonces"], "ID", array());
            echo ");\" class=\"btn btn-light\" style=\"border-color: #dc3545;\"> 
                                10 meilleurs CV ";
            // line 199
            echo $this->getAttribute($context["mesannonces"], "nbCandidat10meilleurs", array());
            echo "
                            </button>
                        </div> -->
                    </div>
                </div>   
                <br>
                    
                <!-- Liste des candidats pour l'annonce -->  
                <div id=\"candidatsAnnonces";
            // line 207
            echo $this->getAttribute($context["mesannonces"], "ID", array());
            echo "\" style=\"display: none\">
                   
                    <!-- <div class=\"container p-3 mt-0\" >
                        <div class=\"row justify-content-start\">
                            <div class=\"col-2 ml-4\" >
                                <input type=\"checkbox\" class=\"form-check-input\" id=\"toutselectionner";
            // line 212
            echo $this->getAttribute($context["mesannonces"], "id", array());
            echo "\"> Tout sélectionner
                            </div>
                            <div class=\"col\">
                                <div class=\"dropdown\">
                                    <a class=\"btn btn-sm btn-outline-danger dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownActionsGroupes";
            // line 216
            echo $this->getAttribute($context["mesannonces"], "id", array());
            echo "\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    Actions groupées
                                    </a>
                                    <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuLink\">
                                        <a class=\"dropdown-item\" href=\"#\">Supprimer le(s) candidat(s)</a>
                                        <a class=\"dropdown-item\" href=\"#\">Envoyer un email</a>

                                    </div>
                                </div>
                            </div>
                            <div class=\"col-auto\"></div>
                        </div>
                    </div> -->
                    
                    <br>

                    <div class=\"container\">
                       <div class=\"table-hover\">          
                        <table class=\"table\">
                          <thead>
                            <tr>
                              <th>&nbsp;#</th>
                              <th>Prénom</th>
                              <th>Nom</th>
                              <th>Age</th>
                              <th>Ville</th>
                              <th>Niveau de formation</th>
                              <th>Domaine</th>
                              <th>Commentaire</th>
                              <th>CV</th>
                              <th>Statut</th>
                              <th>Actions</th>
                            </tr>
                          </thead>
                          <tbody>
                             ";
            // line 251
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["mesannonces"], "candidats", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["candidats"]) {
                echo "  
                            <tr>
                              <td><input class=\"ml-1\" type=\"checkbox\" class=\"form-check-input\" id=\"selectionnerCandidat";
                // line 253
                echo $this->getAttribute($context["candidats"], "id_candidature", array());
                echo "\"></td>
                              <td><a href=\"";
                // line 254
                echo $this->getAttribute($context["candidats"], "lienApercu", array());
                echo "\">";
                echo $this->getAttribute($context["candidats"], "nom", array());
                echo "</a></td>
                              <td><a href=\"";
                // line 255
                echo $this->getAttribute($context["candidats"], "lienApercu", array());
                echo "\">";
                echo $this->getAttribute($context["candidats"], "prenom", array());
                echo "</a></td>
                              <td>";
                // line 256
                echo $this->getAttribute($context["candidats"], "age", array());
                echo "</td>
                              <td>";
                // line 257
                echo $this->getAttribute($context["candidats"], "ville", array());
                echo "</td>
                              <td>";
                // line 258
                echo $this->getAttribute($context["candidats"], "niveau_formation", array());
                echo "</td>
                              <td>";
                // line 259
                echo $this->getAttribute($context["candidats"], "domaine", array());
                echo "</td>
                              <td>
                                <button style=\"display: ";
                // line 261
                echo $this->getAttribute($context["candidats"], "commentaireDisplay", array());
                echo "\" type=\"button\" class=\"btn btn-info btn-sm\" data-toggle=\"modal\" data-target=\"#commentaire";
                echo $this->getAttribute($context["candidats"], "id_candidature", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["candidats"], "commentaire", array());
                echo "\">Commentaire</button>
                                <!-- Modal -->
                                <div id=\"commentaire";
                // line 263
                echo $this->getAttribute($context["candidats"], "id_candidature", array());
                echo "\" class=\"modal fade\" role=\"dialog\">
                                    <div class=\"modal-dialog\">
                                    <!-- Modal content-->
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\" style=\"text-align: left\">  
                                            <h4 class=\"modal-title\">Commentaire du candidat</h4>
                                        </div>
                                        <div class=\"modal-body\">
                                        <p>";
                // line 271
                echo $this->getAttribute($context["candidats"], "commentaire", array());
                echo "</p>
                                        </div>
                                        <div class=\"modal-footer\">
                                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
                                        </div>
                                    </div>
                                
                                    </div>
                                </div>
                              </td>
                              <td><a href=\"";
                // line 281
                echo $this->getAttribute($context["candidats"], "lienApercu", array());
                echo "\">cv</a></td>
                              <td style=\"color: ";
                // line 282
                echo $this->getAttribute($context["candidats"], "statutColor", array());
                echo "\">";
                echo $this->getAttribute($context["candidats"], "statut", array());
                echo "</td>
                              <td>
                                <div class=\"dropdown\">
                                    <a class=\"btn btn-sm btn-outline-danger dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownActionsCandidat";
                // line 285
                echo $this->getAttribute($context["candidats"], "id_candidature", array());
                echo "\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    Actions
                                    </a>
                                    <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuLink\">
                                        <!-- <a class=\"dropdown-item\" href=\"";
                // line 289
                echo $this->getAttribute($context["candidats"], "lien_candidature_statut_nouveau", array());
                echo "\">Nouveau</a> -->
                                        <a class=\"dropdown-item\" href=\"";
                // line 290
                echo $this->getAttribute($context["candidats"], "lien_candidature_statut_selectionne", array());
                echo "\">Sélectionné</a>
                                        <a class=\"dropdown-item\" href=\"";
                // line 291
                echo $this->getAttribute($context["candidats"], "lien_candidature_statut_refuse", array());
                echo "\">Refusé</a>
                                        <!-- <a class=\"dropdown-item\" href=\"";
                // line 292
                echo $this->getAttribute($context["candidats"], "lien_candidature_statut_top10", array());
                echo "\">Top 10</a> -->
                                    </div>
                                </div>
                              </td>
                            </tr>
                             ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['candidats'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 297
            echo " 
                          </tbody>
                        </table>
                        </div>
                      </div>

                    <br>
                    
                    
                    <!-- FIN Liste des candidats pour l'annonce -->  
                    <br>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mesannonces'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 309
        echo " 
                
                

            </div>
            
            <script>
                    function afficheCandidatAnnonce(id) {
        
                        var div = document.getElementById(\"candidatsAnnonces\"+id);
      
                        if (div != undefined) {
                            if (div.style.display === 'none') {
                                div.style.display = 'block';
                            } else {
                                div.style.display = 'none';
                            }
                        }

                    }
                </script>
            
        
           
            <!-- Contenu \"Mes CVS\" -->    
            <div class=\"tab-pane fade ";
        // line 334
        echo ($context["ONGLET_MES_CV_SELECTED"] ?? null);
        echo "\" id=\"nav-contenu-mes-cv\" role=\"tabpanel\" aria-labelledby=\"nav-tab-mes-cv\">

                <div class=\"container card p-3 mt-3 pb-3\">
                
                    <div class=\"row \">
                        <div class=\"col\" >
                                <div class=\"container\">

                                    Retrouvez ici la liste de CV des candidats que vous souhaitez garder en favoris.
                                    <br> <br>
                                    ";
        // line 344
        if (($context["ACCES_CVTHEQUE"] ?? null)) {
            echo " 
                                    Vous avez accès à la CVthèque jusqu'au ";
            // line 345
            echo ($context["DATE_ACCESS_CVTHEQUE"] ?? null);
            echo "<br>
                                    <a href=\"";
            // line 346
            echo ($context["U_ALT_CVTHEQUE"] ?? null);
            echo "\"><button type=\"button\" class=\"btn btn-primary\">Consulter la CVthèque</button></a>
                                    ";
        } else {
            // line 348
            echo "                                    <a href=\"";
            echo ($context["U_ALT_CVTHEQUE_OFFRES"] ?? null);
            echo "\"><button type=\"button\" class=\"btn btn-primary\">Souscrire à une offre pour consulter la CVthèque</button></a>
                                    ";
        }
        // line 349
        echo " 
                                         
                                    
                                    <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
                                </div>           
                        </div>            
                                        
                    </div>
                        
                
                </div>
    
            </div>
           
           
           
              <!-- Contenu \"mes factures\" -->    
              <div class=\"tab-pane fade show ";
        // line 366
        echo ($context["ONGLET_MES_FACTURES_SELECTED"] ?? null);
        echo "\" id=\"nav-contenu-mes-factures\" role=\"tabpanel\" aria-labelledby=\"nav-tab-mes-factures\">

  
                            
                <div class=\"container-fluid card p-3 m-0\" style=\"background-color: rgb(252, 249, 249) border: 1px solid #C0C0C0; border-radius: 10px; box-shadow: 3px 3px 6px 0 #A9A9A9;\">
                    <div class=\"row \">
                      
                                                
                        <div class=\"container-fluid\" > 
                            <div class=\"row\" >  
                               
                                <div class=\"col-12\" >

                                    <div class=\"container-fluid\">
                                                    <table class=\"table\">
                                                        <thead>
                                                        <tr>
                                                          
                                                            <th>Réf</th>
                                                            <th>Ville</th>
                                                            <th>Le poste</th>
                                                            <th>Le contrat</th>
                                                            <th>La date de paiement</th>
                                                            <th>Montant</th>
                                                            <th>Facture</th>
 
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                            ";
        // line 395
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "mesfactures", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["mesfactures"]) {
            echo " 
                                                            <tr>
                                                              
                                                                <td nowrap>";
            // line 398
            echo $this->getAttribute($context["mesfactures"], "ref", array());
            echo "</td> 
                                                                <td nowrap>";
            // line 399
            echo $this->getAttribute($context["mesfactures"], "ville", array());
            echo "</td>  
                                                                <td><a href=\"";
            // line 400
            echo $this->getAttribute($context["mesfactures"], "lien_annonce", array());
            echo "\">";
            echo $this->getAttribute($context["mesfactures"], "poste", array());
            echo "</a></td>    
                                                                <td nowrap>";
            // line 401
            echo $this->getAttribute($context["mesfactures"], "contrat_type", array());
            echo "</td>   
                                                                <td nowrap>";
            // line 402
            echo $this->getAttribute($context["mesfactures"], "date_paiement", array());
            echo "</td>             
                                                                <td nowrap style=\"text-align:center\">";
            // line 403
            echo $this->getAttribute($context["mesfactures"], "montant", array());
            echo "</td>   
                                                                <td nowrap><a href=\"";
            // line 404
            echo $this->getAttribute($context["mesfactures"], "lien_facture", array());
            echo "\">";
            echo $this->getAttribute($context["mesfactures"], "titre_facture", array());
            echo "</a></td>   

                                                                
                                                            </tr>
                                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mesfactures'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 408
        echo " 
                                                        </tbody>
                                                    </table>
                                                </div>
                                    
                                </div>
                            </div>
                        </div>


                        
                    </div>
                </div>   
        
         
                
                
                

            </div>
           
            <!-- Contenu \"Mon profil\" -->    
            <div class=\"tab-pane fade ";
        // line 430
        echo ($context["ONGLET_MON_PROFIL_SELECTED"] ?? null);
        echo "\" id=\"nav-contenu-mon-profil\" role=\"tabpanel\" aria-labelledby=\"nav-tab-mon-profil\">

                <div class=\"container card p-3 mt-3 pb-3\">
             
                    <div class=\"row \">
                        <div class=\"col\" >
                                <div class=\"container\">

                                    <div style=\"color: green; text-align: center\">";
        // line 438
        echo ($context["MONPROFIL_MESSAGE"] ?? null);
        echo "</div>
                                    <form id=\"profilSauvegarder\" method=\"post\" action=\"";
        // line 439
        echo ($context["ACTION_FORM_PROFIL_SAUVEGARDER"] ?? null);
        echo "\">
                                        <input type=\"hidden\" name=\"action\" value=\"profilSauvegarder\">
                                        <input type=\"hidden\" name=\"typeCompte\" value=\"entreprise\">
                                        
                                        <div class=\"row\" id=\"champsCandidat\" style=\"display: ";
        // line 443
        echo ($context["display_candidat"] ?? null);
        echo "\">
                                            <div class=\"col-xs-3\">
                                                <label>Société :</label> *
                                                <input type=\"text\" class=\"form-control\" tabindex=\"0\" name=\"societe_nom\" id=\"societe_nom\" value=\"";
        // line 446
        echo ($context["societe_nom"] ?? null);
        echo "\" />
                                                <label>Prénom :</label> *
                                                <input type=\"text\" class=\"form-control\" tabindex=\"0\" name=\"societe_ident_prenom\" id=\"societe_ident_prenom\" value=\"";
        // line 448
        echo ($context["societe_ident_prenom"] ?? null);
        echo "\" />
                                                <label>Nom :</label> *
                                                <input type=\"text\" class=\"form-control\" tabindex=\"0\" name=\"societe_ident_nom\" id=\"societe_ident_nom\" value=\"";
        // line 450
        echo ($context["societe_ident_nom"] ?? null);
        echo "\" />

                                                <label>Ville :</label> *
                                                <input type=\"search\" class=\"form-control\" tabindex=\"0\" name=\"societe_adresse_ville\" id=\"societe_adresse_ville\" value=\"";
        // line 453
        echo ($context["societe_adresse_ville"] ?? null);
        echo "\" />\t
                                              
                                                <label>Région :</label>
                                                <input type=\"search\" class=\"form-control\" tabindex=\"0\" name=\"societe_region\" id=\"societe_region\" value=\"";
        // line 456
        echo ($context["societe_region"] ?? null);
        echo "\" />\t
                                              
                                                <label>Secteur d'activité :</label>

                                                <select class=\"selectpicker form-control\" tabindex=\"0\" name=\"societe_secteur_activite\" id=\"societe_secteur_activite\">
                                                    <option selected>";
        // line 461
        echo ($context["societe_secteur_activite"] ?? null);
        echo "</option>

                                                    <option>Administration - Fonction publique</option>
                                                    <option>Agroalimentaire</option>
                                                    <option>Artisanat</option>
                                                    <option>Association</option>
                                                    <option>Automobile</option>
                                                    <option>Banque - Assurance - Finance</option>
                                                    <option>Bois - Papier - Carton - Imprimerie</option>
                                                    <option>Chimie - Parachimie</option>
                                                    <option>Commerce - Négoce - Distribution</option>
                                                    <option>Marketing - Communication - Edition</option>
                                                    <option>BTP - Matériaux de construction</option>
                                                    <option>Culture - Sport - Loisir</option>
                                                    <option>Energie</option>
                                                    <option>Enseignement - Formation - Conseil</option>
                                                    <option>Environnement - Récupération</option>
                                                    <option>Equipement - Matériel pour activités professionnelles</option>
                                                    <option>Fabrication</option>
                                                    <option>Gestion - Administration des entreprises</option>
                                                    <option>Hôtellerie - Restauration</option>
                                                    <option>Immobilier</option>
                                                    <option>Industrie pharmaceutique</option>
                                                    <option>Informatique</option>
                                                    <option>Logistique - Transport</option>
                                                    <option>Matériel électrique - Electronique - Optique</option>
                                                    <option>Mécanique - Métallurgie</option>
                                                    <option>Minérais - Minéraux - Sidérurgie</option>
                                                    <option>Professions juridiques</option>
                                                    <option>Santé - Action sociale</option>
                                                    <option>Service aux particuliers - Collectivités - Entreprises</option>
                                                    <option>Textile - Habillement - Chaussure</option>
                                                    
                                                </select>

                                                <div id=\"rowDomaineArtisanat\" style=\"display: none\">
                                                    <label>Domaine artisanat :</label>
                                                    <input type=\"search\" class=\"form-control \" id=\"domaineArtisanat\" name=\"domaineArtisanat\" aria-describedby=\"domaineArtisanat\" >
                                                </div>
                                                
                                         
                                                <label>Téléphone :</label>
                                                <input type=\"text\" class=\"form-control\" tabindex=\"0\" name=\"societe_tel\" id=\"societe_tel\" value=\"";
        // line 503
        echo ($context["societe_tel"] ?? null);
        echo "\" />
            
                                              
                                                <br><br>
                                                <button type=\"submit\" class=\"btn btn-primary\">Modifier</button>
                                            </div>
                                        </div>
                                    </form>
                                                                                                                                                                                                                    
                                </div>           
                        </div>            
                                        
                    </div>
                        
                
                </div>

            </div>

            <!-- Contenu \"Mon compte\" -->    
            <div class=\"tab-pane fade ";
        // line 523
        echo ($context["ONGLET_MON_COMPTE_SELECTED"] ?? null);
        echo "\" id=\"nav-contenu-mon-compte\" role=\"tabpanel\" aria-labelledby=\"nav-tab-mon-compte\">
                <div class=\"container card p-3 ml-2\">
                    <div class=\"row \">
                        <div class=\"col\" >
                            <div class=\"container\" >
                               <div style=\"color: green; text-align: center\">";
        // line 528
        echo ($context["MONCOMPTE_MESSAGE"] ?? null);
        echo "</div>
                               <div class=\"row \">
                                    <div class=\"col\" >
                                        <form id=\"compteSauvegarder\" method=\"post\" action=\"";
        // line 531
        echo ($context["ACTION_FORM_COMPTE_SAUVEGARDER"] ?? null);
        echo "\">
                                         <input type=\"hidden\" name=\"action\" value=\"compteSauvegarder\">
                                        
                                        <div style=\"font-size: 0.7em\">Numéro de compte : 365";
        // line 534
        echo ($context["user_id"] ?? null);
        echo "</div>
                                        <br>
                                        <b>Adresse email :</b>
                                        <br><input type=\"text\" class=\"form-control\" name=\"nouvelEmail\" value=\"";
        // line 537
        echo ($context["user_email"] ?? null);
        echo "\">
                                        (Pour pouvoir modifier votre email, veuillez re-saisir votre mot de passe ci-dessous)
                                        <br><br>
                                        <b>Nouveau mot de passe :</b>
                                        <br><input type=\"password\" class=\"form-control\" name=\"nouveauPass\" value=\"\">
                                        <b>Confirmer votre mot de passe :</b>
                                        <br><input type=\"password\" class=\"form-control\" name=\"confirmNouveauPass\" value=\"\">
                                        <hr>
                                        <b>Type de compte :</b>
                                        <br>
                                        <select class=\"selectpicker form-control\" name=\"typeCompte\" id=\"typeCompte\">
                                            <option value=\"candidat\" ";
        // line 548
        echo ($context["typecompte_candidat_selected"] ?? null);
        echo ">Candidat</option>
                                            <option value=\"entreprise\" ";
        // line 549
        echo ($context["typecompte_entreprise_selected"] ?? null);
        echo ">Entreprise</option>
                                        </select>
                                        <br>
                                        <hr>
                                        <button type=\"submit\" class=\"btn btn-primary\">Modifier</button>
                                        </form>
                                        <!-- 
                                        
                                        <hr>
                                        <br>
                                        Argent disponible sur votre compte : ";
        // line 559
        echo ($context["ARGENT"] ?? null);
        echo "
                                        <br><br>
                                        <form name=\"formCredit\" method=\"POST\" action=\"";
        // line 561
        echo ($context["FORM_CREDIT_ACTION"] ?? null);
        echo "\">
                                            Montant que vous souhaitez créditer sur votre compte : <input type=\"text\" name=\"montant\" value=\"100\" size=\"15\"/> €
                                            <br><br>
                                            <input type=\"submit\" name=\"btnCreditCompte\" value=\"Créditer mon compte\" class=\"btn btn-success default-submit-action\">
                                        </form> -->
                                        
                                    </div>  
                                </div>
                                <div class=\"row \">
                                    <div class=\"col\" style=\"text-align:right\">
                                        <a href=\"";
        // line 571
        echo ($context["ACTION_COMPTE_SUPPRIMER"] ?? null);
        echo "\" class=\"alt_lien_small\" style=\"font-size: 0.7em\">Supprimer mon compte</a>
                                    </div>     
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>
            </div>
    
           
        
            <script>
            
                function postuler(annonceId) {
                    \$.ajax({
                        url : '";
        // line 587
        echo ($context["U_ALT_AJAX"] ?? null);
        echo "',
                        type : 'POST', 
                        data : 'action=postuler&annonceId=' + annonceId, 
                        dataType : 'html',
                        success : function(code_html, statut){ 

                            // alert(code_html);
                            
                            
                            document.getElementById(\"colMesFavorisPostuler\"+annonceId).innerHTML = 'Candidature effectuée!'; 

                        },
                
                        error : function(resultat, statut, erreur){
                            alert(code_html);
                        },
                        complete : function(resultat, statut){

                        }

                    });
                }

                function supprimerFavoris(annonceId) {
                    \$.ajax({
                        url : '";
        // line 612
        echo ($context["U_ALT_AJAX"] ?? null);
        echo "',
                        type : 'POST', 
                        data : 'action=supprimerFavoris&annonceId=' + annonceId, 
                        dataType : 'html',
                        success : function(code_html, statut){ 

                            // alert(code_html);
                            
                            
                            document.getElementById(\"colMesFavorisPostuler\"+annonceId).innerHTML = 'Annonce supprimée des favoris!'; 

                        },
                
                        error : function(resultat, statut, erreur){
                            alert(code_html);
                        },
                        complete : function(resultat, statut){

                        }

                    });
                }
            
            </script>
        
           
        </div>
       
    </div>

</div>
<div id=\"rechercheannonce\">
    <div style=\"text-align: center\">
    <script async src=\"//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>
           
        <ins class=\"adsbygoogle\"
            style=\"display:block\"
            data-ad-client=\"ca-pub-5250430950478493\"
            data-ad-slot=\"4948269035\"
            data-ad-format=\"auto\"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
     </div>    
    <br><br><br>
</div>
";
    }

    public function getTemplateName()
    {
        return "alt_index_entreprise.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1073 => 612,  1045 => 587,  1026 => 571,  1013 => 561,  1008 => 559,  995 => 549,  991 => 548,  977 => 537,  971 => 534,  965 => 531,  959 => 528,  951 => 523,  928 => 503,  883 => 461,  875 => 456,  869 => 453,  863 => 450,  858 => 448,  853 => 446,  847 => 443,  840 => 439,  836 => 438,  825 => 430,  801 => 408,  788 => 404,  784 => 403,  780 => 402,  776 => 401,  770 => 400,  766 => 399,  762 => 398,  754 => 395,  722 => 366,  703 => 349,  697 => 348,  692 => 346,  688 => 345,  684 => 344,  671 => 334,  644 => 309,  626 => 297,  614 => 292,  610 => 291,  606 => 290,  602 => 289,  595 => 285,  587 => 282,  583 => 281,  570 => 271,  559 => 263,  550 => 261,  545 => 259,  541 => 258,  537 => 257,  533 => 256,  527 => 255,  521 => 254,  517 => 253,  510 => 251,  472 => 216,  465 => 212,  457 => 207,  446 => 199,  442 => 198,  435 => 194,  431 => 193,  423 => 188,  415 => 183,  408 => 179,  404 => 178,  397 => 174,  393 => 173,  386 => 169,  382 => 168,  369 => 159,  363 => 155,  358 => 154,  354 => 153,  350 => 152,  345 => 150,  341 => 148,  334 => 144,  330 => 143,  326 => 142,  322 => 141,  317 => 139,  313 => 138,  309 => 137,  296 => 127,  287 => 123,  281 => 122,  271 => 115,  267 => 114,  255 => 113,  233 => 99,  226 => 95,  222 => 94,  215 => 89,  213 => 88,  204 => 82,  194 => 78,  190 => 77,  184 => 76,  180 => 75,  176 => 74,  163 => 68,  160 => 67,  152 => 65,  140 => 63,  138 => 62,  131 => 60,  123 => 59,  116 => 55,  112 => 54,  100 => 45,  93 => 41,  84 => 37,  73 => 29,  67 => 26,  57 => 19,  53 => 18,  49 => 17,  45 => 16,  41 => 15,  28 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "alt_index_entreprise.html", "");
    }
}
