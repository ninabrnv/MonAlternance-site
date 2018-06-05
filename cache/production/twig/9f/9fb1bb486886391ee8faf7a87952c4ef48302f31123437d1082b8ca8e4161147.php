<?php

/* alt_index_candidat.html */
class __TwigTemplate_5ed6b12824305af693b7e97bd25d40e78dfb1fc7bf5b93af8d52d0c39a89d8dc extends Twig_Template
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
        echo "<!-- <p class=\"alert alert-success\" id=\"alertMessage\">";
        echo ($context["ALERT_MESSAGE"] ?? null);
        echo "</p> -->

<script>
    /* declenchement message d alerte */
    // ALERT_START
</script>

<div class=\"container mb-3\">
   <div class=\"row\">
        <div class=\"col-12\">
            <a href=\"";
        // line 11
        echo ($context["U_INDEX"] ?? null);
        echo "\" style=\"float:right\"><button type=\"button\" class=\"btn imageActualiser\" style=\"background-color: #C0C0C0;\">Nouvelle recherche</button></a>
            <div style=\"font-size: 1.2em; color: grey\">Bonjour ";
        // line 12
        echo ($context["prenom"] ?? null);
        echo ",</div>
            
        </div>

   </div>
   
</div>

<div class=\"container mb-5\">
    <nav class=\"nav nav-tabs\" id=\"tabAnnonces\" role=\"tablist\">
     
        <a class=\"nav-item nav-link ";
        // line 23
        echo ($context["ONGLET_MES_ANNONCE_SELECTED"] ?? null);
        echo "\" id=\"nav-tab-mes-annonces\" data-toggle=\"tab\" href=\"#nav-contenu-mes-annonces\" role=\"tab\" aria-controls=\"nav-home\" aria-selected=\"true\">Mes annonces</a>
        <a class=\"nav-item nav-link ";
        // line 24
        echo ($context["ONGLET_MES_FAVORIS_SELECTED"] ?? null);
        echo "\" id=\"nav-tab-mes-favoris\" data-toggle=\"tab\" href=\"#nav-contenu-mes-favoris\" role=\"tab\" aria-controls=\"nav-home\">Mes favoris</a>
        <a class=\"nav-item nav-link ";
        // line 25
        echo ($context["ONGLET_MON_PROFIL_SELECTED"] ?? null);
        echo "\" id=\"nav-tab-mon-profil\" data-toggle=\"tab\" href=\"#nav-contenu-mon-profil\" role=\"tab\" aria-controls=\"nav-home\">Mon profil</a>
        <a class=\"nav-item nav-link ";
        // line 26
        echo ($context["ONGLET_MON_COMPTE_SELECTED"] ?? null);
        echo "\" id=\"nav-tab-mon-compte\" data-toggle=\"tab\" href=\"#nav-contenu-mon-compte\" role=\"tab\" aria-controls=\"nav-home\">Mon compte</a>
    </nav>

    <div class=\"row\">
        
        <div class=\"col-12 col-sm-12 col-lg-12 col-xl-12 tab-content\" >   
             <!-- Contenu \"mes annonces\" -->    
            <div class=\"tab-pane fade show ";
        // line 33
        echo ($context["ONGLET_MES_ANNONCE_SELECTED"] ?? null);
        echo "\" id=\"nav-contenu-mes-annonces\" role=\"tabpanel\" aria-labelledby=\"nav-tab-mes-annonces\">

         

                <div class=\"container\">
                    <div class=\"table-responsive table-hover\">          
                     <table class=\"table\">
                       <thead>
                         <tr>
                           <th>Réf.</th>
                           <th>Intitulé du poste</th>
                           <th>Lieu</th>
                           <th>Type contrat</th>
                           <th>Date de publication de l'annonce</th>
                           <th>Date à laquelle vous avez postulé</th>
                           
                         </tr>
                       </thead>
                       <tbody>
                          ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "mesannonces", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["mesannonces"]) {
            echo "  
                                <!-- Annonce : Modal  -->
                                <div class=\"modal fade\" id=\"modalMesAnnonce";
            // line 54
            echo $this->getAttribute($context["mesannonces"], "ID", array());
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"Annonce\" aria-hidden=\"true\">
                                    <div class=\"modal-dialog modal-lg\" role=\"document\">
                                        <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <div class=\"alt_lien_sous_titre\">Réf : ";
            // line 58
            echo $this->getAttribute($context["mesannonces"], "ID", array());
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
            // line 67
            echo $this->getAttribute($context["mesannonces"], "TITRE", array());
            echo "</h5>
                                                        <div style=\"color: red;\">";
            // line 68
            echo $this->getAttribute($context["mesannonces"], "LIEU", array());
            echo "</div>
                                                    </div>
            
                                                    <div class=\"col\" style=\"text-align: right; padding: 0px\">
                                                        <a onclick=\"favoris(";
            // line 72
            echo $this->getAttribute($context["mesannonces"], "ID", array());
            echo ")\" data-dismiss=\"modal\" style=\"cursor: pointer\"><img src=\"";
            echo ($context["T_IMAGES_PATH"] ?? null);
            echo "site/accueil/btn_favoris_noir_mini.png\" id=\"Mcoeur";
            echo $this->getAttribute($context["mesannonces"], "ID", array());
            echo "\" title=\"Ajouter cette annonce dans vos favoris\"></a>
                                                        <a style=\"cursor: pointer\" data-dismiss=\"modal\"><img src=\"";
            // line 73
            echo ($context["T_IMAGES_PATH"] ?? null);
            echo "site/accueil/btn_facebook_noir_mini.png\" id=\"Mfacebook";
            echo $this->getAttribute($context["mesannonces"], "ID", array());
            echo "\" title=\"Publier cette offre sur votre mur Facebook\"></a>
                                                        
                                                        ";
            // line 75
            if (($context["S_USER_LOGGED_IN"] ?? null)) {
                // line 76
                echo "                                                        <!-- <button data-toggle=\"modal\" class=\"unstyled-button\" data-target=\"#modalCommentaire";
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
                // line 78
                echo "                                                        <!-- <a href=\"";
                echo ($context["U_LOGIN_LOGOUT"] ?? null);
                echo "\" style=\"cursor: pointer\" title=\"postuler\"><img src=\"";
                echo ($context["T_IMAGES_PATH"] ?? null);
                echo "site/accueil/btn_postuler_noir_mini.png\" title=\"Postuler à cette annonce\"></a> -->
                                                        ";
            }
            // line 80
            echo "                                                        
                                                        <!-- <a onclick=\"postuler(";
            // line 81
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
            // line 87
            echo $this->getAttribute($context["mesannonces"], "TYPE_CONTRAT", array());
            echo "
                                            <br><b>Publiée le :</b> ";
            // line 88
            echo $this->getAttribute($context["mesannonces"], "DATE_PUBLICATION", array());
            echo "
                                            <br><b>Domaine :</b> ";
            // line 89
            echo $this->getAttribute($context["mesannonces"], "DOMAINE", array());
            echo " ";
            echo $this->getAttribute($context["mesannonces"], "DOMAINE_ARTISANAT", array());
            echo "
                                            <br><b>Date de début :</b> ";
            // line 90
            echo $this->getAttribute($context["mesannonces"], "DATE_DE_DEBUT", array());
            echo "
                                            <br><b>Durée :</b> ";
            // line 91
            echo $this->getAttribute($context["mesannonces"], "DUREE", array());
            echo "
                                            <br>
                                            <br><b>Descriptif : </b>
                                            <br> 
                                            ";
            // line 95
            echo $this->getAttribute($context["mesannonces"], "DESCRIPTION", array());
            echo "
            
                                                
                                        </div>
                                        <div class=\"modal-footer\">
                                        
                                                        ";
            // line 101
            if (($context["U_USER_ADMIN"] ?? null)) {
                // line 102
                echo "                                                        <div class=\"dropdown\">
                                                            <button class=\"btn btn-sm btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\"  data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                                Admin
                                                            </button>
                                                            <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                                                <a class=\"dropdown-item\" data-dismiss=\"modal\" onclick=\"valider(";
                // line 107
                echo $this->getAttribute($context["mesannonces"], "ID", array());
                echo ")\">Valider annonce</a>
                                                                <a class=\"dropdown-item\" data-dismiss=\"modal\" onclick=\"supprimer(";
                // line 108
                echo $this->getAttribute($context["mesannonces"], "ID", array());
                echo ")\">Supprimer annonce</a>
                                                            </div>
                                                        </div>
                                                        ";
            }
            // line 112
            echo "                                                    <!-- <a onclick=\"postuler(";
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
                         <tr>
                           <td>";
            // line 122
            echo $this->getAttribute($context["mesannonces"], "REF", array());
            echo "</td>
                           <td><a href=\"#modalMesAnnonce";
            // line 123
            echo $this->getAttribute($context["mesannonces"], "ID", array());
            echo "\" data-toggle=\"modal\">";
            echo $this->getAttribute($context["mesannonces"], "TITRE", array());
            echo "</a></td>
                           <td>";
            // line 124
            echo $this->getAttribute($context["mesannonces"], "LIEU", array());
            echo "</td>
                           <td>";
            // line 125
            echo $this->getAttribute($context["mesannonces"], "TYPE_CONTRAT", array());
            echo "</td>
                           <td>";
            // line 126
            echo $this->getAttribute($context["mesannonces"], "DATE_PUBLICATION", array());
            echo "</td>
                           <td>";
            // line 127
            echo $this->getAttribute($context["mesannonces"], "DATE_POSTULE", array());
            echo "</td>

                           <td></td>
                           <td></td>
                           <td>
                             
                           </td>
                         </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mesannonces'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "  
                       </tbody>
                     </table>
                     </div>
                   </div>

                 <br>
              



                

            </div>
            
            <!-- Contenu \"Favoris\" -->    
            <div class=\"tab-pane fade ";
        // line 151
        echo ($context["ONGLET_MES_FAVORIS_SELECTED"] ?? null);
        echo "\" id=\"nav-contenu-mes-favoris\" role=\"tabpanel\" aria-labelledby=\"nav-tab-mes-favoris\">

         
                <div class=\"container-fluid card p-3 mt-0\">
                    <div class=\"row\" >
                        <div class=\"col\" style=\"font-weight: bold; \">Réf.</div>
                        <div class=\"col\" style=\"font-weight: bold\">Intitulé du poste</div>
                        <div class=\"col\" style=\"font-weight: bold\">Lieu</div>
                        <div class=\"col\" style=\"font-weight: bold\">Type contrat</div>
                        <div class=\"col\" style=\"font-weight: bold\">Date de publication de l'annonce</div>
                        <div class=\"col\" style=\"font-weight: bold\">Date à laquelle vous avez postulé</div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-12\">
                            <hr>
                        </div>
                    </div>

                    ";
        // line 170
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "mesfavoris", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["mesfavoris"]) {
            echo "  

                        <!-- Annonce : Modal  -->
                        <div class=\"modal fade\" id=\"modalFavoris";
            // line 173
            echo $this->getAttribute($context["mesfavoris"], "ID", array());
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"Annonce\" aria-hidden=\"true\">
                                <div class=\"modal-dialog modal-lg\" role=\"document\">
                                    <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <div class=\"alt_lien_sous_titre\">Réf : ";
            // line 177
            echo $this->getAttribute($context["mesfavoris"], "ID", array());
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
            // line 186
            echo $this->getAttribute($context["mesfavoris"], "TITRE", array());
            echo "</h5>
                                                    <div style=\"color: red;\">";
            // line 187
            echo $this->getAttribute($context["mesfavoris"], "LIEU", array());
            echo "</div>
                                                </div>

                                                <div class=\"col\" style=\"text-align: right; padding: 0px\">
                                                    <!-- <a onclick=\"favoris(";
            // line 191
            echo $this->getAttribute($context["mesfavoris"], "ID", array());
            echo ")\" data-dismiss=\"modal\" style=\"cursor: pointer\"><img src=\"";
            echo ($context["T_IMAGES_PATH"] ?? null);
            echo "site/accueil/btn_favoris_noir_mini.png\" id=\"Mcoeur";
            echo $this->getAttribute($context["mesfavoris"], "ID", array());
            echo "\" title=\"Ajouter cette annonce dans vos favoris\"></a>
                                                    <a style=\"cursor: pointer\" data-dismiss=\"modal\"><img src=\"";
            // line 192
            echo ($context["T_IMAGES_PATH"] ?? null);
            echo "site/accueil/btn_facebook_noir_mini.png\" id=\"Mfacebook";
            echo $this->getAttribute($context["mesfavoris"], "ID", array());
            echo "\" title=\"Publier cette offre sur votre mur Facebook\"></a>
                                                    -->
                                                    ";
            // line 194
            if (($context["S_USER_LOGGED_IN"] ?? null)) {
                // line 195
                echo "                                                    <!-- <button data-toggle=\"modal\" class=\"unstyled-button\" data-target=\"#modalCommentaire";
                echo $this->getAttribute($context["mesfavoris"], "ID", array());
                echo "\" data-dismiss=\"modal\" data-id=\"";
                echo $this->getAttribute($context["mesfavoris"], "ID", array());
                echo "\" style=\"cursor: pointer\"><img src=\"";
                echo ($context["T_IMAGES_PATH"] ?? null);
                echo "site/accueil/btn_postuler_noir_mini.png\" id=\"M2postuler";
                echo $this->getAttribute($context["mesfavoris"], "ID", array());
                echo "\"  title=\"Postuler à cette annonce\"></button> -->
                                                    ";
            } else {
                // line 197
                echo "                                                    <!-- <a href=\"";
                echo ($context["U_LOGIN_LOGOUT"] ?? null);
                echo "\" style=\"cursor: pointer\" title=\"postuler\"><img src=\"";
                echo ($context["T_IMAGES_PATH"] ?? null);
                echo "site/accueil/btn_postuler_noir_mini.png\" title=\"Postuler à cette annonce\"></a> -->
                                                    ";
            }
            // line 199
            echo "                                                    
                                                    <!-- <a onclick=\"postuler(";
            // line 200
            echo $this->getAttribute($context["mesfavoris"], "ID", array());
            echo ")\" data-dismiss=\"modal\" style=\"cursor: pointer\"><img src=\"";
            echo ($context["T_IMAGES_PATH"] ?? null);
            echo "site/accueil/btn_postuler_noir_mini.png\" id=\"M2postuler";
            echo $this->getAttribute($context["mesfavoris"], "ID", array());
            echo "\"  title=\"Postuler à cette annonce\"></a> -->
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <hr style=\"height: 1px; color: rgb(172, 172, 172); background-color: rgb(177, 177, 177); width: 100%; border: none;\">
                                        <b>Type de contrat :</b> ";
            // line 206
            echo $this->getAttribute($context["mesfavoris"], "TYPE_CONTRAT", array());
            echo "
                                        <br><b>Publiée le :</b> ";
            // line 207
            echo $this->getAttribute($context["mesfavoris"], "DATE_PUBLICATION", array());
            echo "
                                        <br><b>Domaine :</b> ";
            // line 208
            echo $this->getAttribute($context["mesfavoris"], "DOMAINE", array());
            echo " ";
            echo $this->getAttribute($context["mesfavoris"], "DOMAINE_ARTISANAT", array());
            echo "
                                        <br><b>Date de début :</b> ";
            // line 209
            echo $this->getAttribute($context["mesfavoris"], "DATE_DE_DEBUT", array());
            echo "
                                        <br><b>Durée :</b> ";
            // line 210
            echo $this->getAttribute($context["mesfavoris"], "DUREE", array());
            echo "
                                        <br>
                                        <br><b>Descriptif : </b>
                                        <br> 
                                        ";
            // line 214
            echo $this->getAttribute($context["mesfavoris"], "DESCRIPTION", array());
            echo "

                                            
                                    </div>
                                    <div class=\"modal-footer\">
                                    
                                                    ";
            // line 220
            if (($context["U_USER_ADMIN"] ?? null)) {
                // line 221
                echo "                                                    <div class=\"dropdown\">
                                                        <button class=\"btn btn-sm btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\"  data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                            Admin
                                                        </button>
                                                        <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                                            <a class=\"dropdown-item\" data-dismiss=\"modal\" onclick=\"valider(";
                // line 226
                echo $this->getAttribute(($context["mesannonces"] ?? null), "ID", array());
                echo ")\">Valider annonce</a>
                                                            <a class=\"dropdown-item\" data-dismiss=\"modal\" onclick=\"supprimer(";
                // line 227
                echo $this->getAttribute(($context["mesannonces"] ?? null), "ID", array());
                echo ")\">Supprimer annonce</a>
                                                        </div>
                                                    </div>
                                                    ";
            }
            // line 231
            echo "                                                <!-- <a onclick=\"postuler(";
            echo $this->getAttribute(($context["mesannonces"] ?? null), "ID", array());
            echo ")\" data-dismiss=\"modal\" style=\"cursor: pointer\"><img src=\"";
            echo ($context["T_IMAGES_PATH"] ?? null);
            echo "site/accueil/btn_postuler_noir_mini.png\" id=\"Mpostuler";
            echo $this->getAttribute(($context["mesannonces"] ?? null), "ID", array());
            echo "\"  title=\"Postuler à cette annonce\"></a> -->
                                    
                                        
                                    
                                    </div>

                                    </div>
                                </div>
                            </div>


                    <div class=\"row\" id=\"rowMesFavoris";
            // line 242
            echo $this->getAttribute($context["mesfavoris"], "ID", array());
            echo "\">
                        <div class=\"col\">";
            // line 243
            echo $this->getAttribute($context["mesfavoris"], "REF", array());
            echo "</div>
                        <div class=\"col\"><a href=\"#modalFavoris";
            // line 244
            echo $this->getAttribute($context["mesfavoris"], "ID", array());
            echo "\" data-toggle=\"modal\">";
            echo $this->getAttribute($context["mesfavoris"], "TITRE", array());
            echo "</a></div>
                        <div class=\"col\">";
            // line 245
            echo $this->getAttribute($context["mesfavoris"], "LIEU", array());
            echo "</div>
                        <div class=\"col\">";
            // line 246
            echo $this->getAttribute($context["mesfavoris"], "TYPE_CONTRAT", array());
            echo "</div>
                        <div class=\"col\">";
            // line 247
            echo $this->getAttribute($context["mesfavoris"], "DATE_PUBLICATION", array());
            echo "</div>
                        <div class=\"col\" >";
            // line 248
            echo $this->getAttribute($context["mesfavoris"], "DATE_POSTULE", array());
            echo "
                            <a onclick=\"supprimerFavoris(";
            // line 249
            echo $this->getAttribute($context["mesfavoris"], "ID", array());
            echo ")\" data-dismiss=\"modal\" style=\"cursor: pointer;\"><img src=\"";
            echo ($context["T_IMAGES_PATH"] ?? null);
            echo "site/accueil/corbeille.png\" id=\"supprimerFavoris";
            echo $this->getAttribute($context["mesfavoris"], "ID", array());
            echo "\"  title=\"Supprimer cette annonce de mes favoris\"></a>
                            <!-- <a onclick=\"postuler(";
            // line 250
            echo $this->getAttribute($context["mesfavoris"], "ID", array());
            echo ")\" id=\"colMesFavorisPostuler";
            echo $this->getAttribute($context["mesfavoris"], "ID", array());
            echo "\" data-dismiss=\"modal\" style=\"cursor: pointer; visibility: ";
            echo $this->getAttribute($context["mesfavoris"], "BNT_POSTULER_VISIBILITY", array());
            echo "\"><img src=\"";
            echo ($context["T_IMAGES_PATH"] ?? null);
            echo "site/accueil/btn_postuler_noir_mini.png\" id=\"postuler";
            echo $this->getAttribute($context["mesfavoris"], "ID", array());
            echo "\"  title=\"Postuler à cette annonce\"></a><a onclick=\"postuler(";
            echo $this->getAttribute($context["mesfavoris"], "ID", array());
            echo ")\" id=\"colMesFavorisPostuler";
            echo $this->getAttribute($context["mesfavoris"], "ID", array());
            echo "\" data-dismiss=\"modal\" style=\"cursor: pointer; visibility: ";
            echo $this->getAttribute($context["mesfavoris"], "BNT_POSTULER_VISIBILITY", array());
            echo "\"><img src=\"";
            echo ($context["T_IMAGES_PATH"] ?? null);
            echo "site/accueil/btn_postuler_noir_mini.png\" id=\"postuler";
            echo $this->getAttribute($context["mesfavoris"], "ID", array());
            echo "\"  title=\"Postuler à cette annonce\"></a> -->
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <hr>
                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mesfavoris'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 258
        echo " 
                </div>   
            </div>

            
        
            <!-- Contenu \"Mon profil\" -->    
            <div class=\"tab-pane fade ";
        // line 265
        echo ($context["ONGLET_MON_PROFIL_SELECTED"] ?? null);
        echo "\" id=\"nav-contenu-mon-profil\" role=\"tabpanel\" aria-labelledby=\"nav-tab-mon-profil\">

                <div class=\"container card p-3 mt-3 pb-3\">
             
                    <div class=\"row \">
                        <div class=\"col\" >
                                <div class=\"container\">

                                    <div style=\"color: green; text-align: center\">";
        // line 273
        echo ($context["MONPROFIL_MESSAGE"] ?? null);
        echo "</div>
                                    <div style=\"color: rgb(206, 1, 1); text-align: center\">";
        // line 274
        echo ($context["MONPROFIL_MESSAGE_ERREUR"] ?? null);
        echo "</div>
                                    
                                    <form id=\"profilSauvegarder\" method=\"post\" action=\"";
        // line 276
        echo ($context["ACTION_FORM_PROFIL_SAUVEGARDER"] ?? null);
        echo "\" enctype=\"multipart/form-data\">
                                        <input type=\"hidden\" name=\"action\" value=\"profilSauvegarder\">
                                        <input type=\"hidden\" name=\"typeCompte\" value=\"candidat\">

                                        <div class=\"row\" id=\"champsCandidat\" style=\"display: ";
        // line 280
        echo ($context["display_candidat"] ?? null);
        echo "\">
                                            <div class=\"col-xs-3\">
                                                <label>Prénom :</label> *
                                                <input type=\"text\" class=\"form-control\" tabindex=\"0\" name=\"prenom\" id=\"prenom\" value=\"";
        // line 283
        echo ($context["prenom"] ?? null);
        echo "\" />
                                                <label>Nom :</label> *
                                                <input type=\"text\" class=\"form-control\" tabindex=\"0\" name=\"nom\" id=\"nom\" value=\"";
        // line 285
        echo ($context["nom"] ?? null);
        echo "\" />
                                                
                                                <label>Age :</label> *
                                                
                                                <select class=\"selectpicker form-control\" tabindex=\"0\" name=\"date_naissance\" id=\"date_naissance\">
                                                        <option></option>
                                                        <option ";
        // line 291
        echo ($context["date_naissance_15_selected"] ?? null);
        echo ">15</option>
                                                        <option ";
        // line 292
        echo ($context["date_naissance_16_selected"] ?? null);
        echo ">16</option>
                                                        <option ";
        // line 293
        echo ($context["date_naissance_17_selected"] ?? null);
        echo ">17</option>
                                                        <option ";
        // line 294
        echo ($context["date_naissance_18_selected"] ?? null);
        echo ">18</option>
                                                        <option ";
        // line 295
        echo ($context["date_naissance_19_selected"] ?? null);
        echo ">19</option>
                                                        <option ";
        // line 296
        echo ($context["date_naissance_20_selected"] ?? null);
        echo ">20</option>
                                                        <option ";
        // line 297
        echo ($context["date_naissance_21_selected"] ?? null);
        echo ">21</option>
                                                        <option ";
        // line 298
        echo ($context["date_naissance_22_selected"] ?? null);
        echo ">22</option>
                                                        <option ";
        // line 299
        echo ($context["date_naissance_23_selected"] ?? null);
        echo ">23</option>
                                                        <option ";
        // line 300
        echo ($context["date_naissance_24_selected"] ?? null);
        echo ">24</option>
                                                        <option ";
        // line 301
        echo ($context["date_naissance_25_selected"] ?? null);
        echo ">25</option>
                                                        <option ";
        // line 302
        echo ($context["date_naissance_26_selected"] ?? null);
        echo ">26 et +</option>
                                                    </select>
                                                
                                                <label>Ville :</label> *
                                                <input type=\"search\" class=\"form-control\" tabindex=\"0\" name=\"ville\" id=\"ville\" value=\"";
        // line 306
        echo ($context["ville"] ?? null);
        echo "\" />\t
<!--                                              
                                                <label>Grande ville la plus proche de chez vous :</label> *
                                                <input type=\"search\" class=\"form-control\" tabindex=\"0\" name=\"ville_proche\" id=\"ville_proche\" value=\"";
        // line 309
        echo ($context["ville_proche"] ?? null);
        echo "\" />\t
                                                 -->
                                                <label>Région :</label>
                                                <input type=\"search\" class=\"form-control\" tabindex=\"0\" name=\"region\" id=\"region\" value=\"";
        // line 312
        echo ($context["region"] ?? null);
        echo "\" />\t
                                                
                                                <label>Domaine d'activité :</label>
                                                <input type=\"search\" class=\"form-control \" tabindex=\"0\" name=\"domaine_principal\" id=\"domaine_principal\" value=\"";
        // line 315
        echo ($context["domaine_principal"] ?? null);
        echo "\" onselect=\"selectionDomaine();\" onclick=\"selectionDomaine();\"/>
                                                
                                                <div id=\"rowDomaineArtisanat\" style=\"display: ";
        // line 317
        echo ($context["domaine_artisanat_display"] ?? null);
        echo "\">
                                                    <label>Domaine artisanat :</label>
                                                    <input type=\"search\" class=\"form-control \" id=\"domaine_artisanat\" name=\"domaine_artisanat\" aria-describedby=\"domaine_artisanat\" value=\"";
        // line 319
        echo ($context["domaine_artisanat"] ?? null);
        echo "\" >
                                                </div>
                                                
                                                
                                                <label>Niveau d'étude :</label>
                
                                                <select class=\"selectpicker form-control\" tabindex=\"0\" name=\"niveau_etude\" id=\"niveau_etude\">
                                                    <option></option>
                                                    <option ";
        // line 327
        echo ($context["niveau_etude_CAP_selected"] ?? null);
        echo ">CAP</option>
                                                    <option ";
        // line 328
        echo ($context["niveau_etude_BEP_selected"] ?? null);
        echo ">BEP</option>
                                                    <option ";
        // line 329
        echo ($context["niveau_etude_BACPRO_selected"] ?? null);
        echo ">BAC professionnel</option>
                                                    <option ";
        // line 330
        echo ($context["niveau_etude_BACGEN_selected"] ?? null);
        echo ">BAC général et technologique</option>
                                                    <option ";
        // line 331
        echo ($context["niveau_etude_B1_selected"] ?? null);
        echo ">BAC+1</option>
                                                    <option ";
        // line 332
        echo ($context["niveau_etude_B2_selected"] ?? null);
        echo ">BAC+2</option>
                                                    <option ";
        // line 333
        echo ($context["niveau_etude_B3_selected"] ?? null);
        echo ">BAC+3</option>
                                                    <option ";
        // line 334
        echo ($context["niveau_etude_B4_selected"] ?? null);
        echo ">BAC+4</option>
                                                    <option ";
        // line 335
        echo ($context["niveau_etude_B5_selected"] ?? null);
        echo ">BAC+5</option>
                                                    <option ";
        // line 336
        echo ($context["niveau_etude_B6_selected"] ?? null);
        echo ">BAC+6</option>
                                                </select>
                
                                                
                                                <label>Dernière école :</label>
                                                <input type=\"text\" class=\"form-control\" tabindex=\"0\" name=\"derniere_ecole\" id=\"derniere_ecole\" value=\"";
        // line 341
        echo ($context["derniere_ecole"] ?? null);
        echo "\" />
                                                <label>Téléphone mobile :</label>
                                                <input type=\"text\" class=\"form-control\" tabindex=\"0\" name=\"tel_mobile\" id=\"tel_mobile\" value=\"";
        // line 343
        echo ($context["tel_mobile"] ?? null);
        echo "\" />
                                                <br>
                                                <label>CV : <a href=\"";
        // line 345
        echo ($context["cv_href"] ?? null);
        echo "\" target=\"_blank\"><b>";
        echo ($context["cv_nom"] ?? null);
        echo "</b></a></label> ";
        echo ($context["cv_supprimer_lien"] ?? null);
        echo "
                                                <br>
                                                <input type=\"file\" name=\"cv\" accept=\"application/pdf\">
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
        // line 365
        echo ($context["ONGLET_MON_COMPTE_SELECTED"] ?? null);
        echo "\" id=\"nav-contenu-mon-compte\" role=\"tabpanel\" aria-labelledby=\"nav-tab-mon-compte\">
                <div class=\"container card p-3 ml-2\">
                    <div class=\"row \">
                        <div class=\"col\" >
                            <div class=\"container\" >
                               <div style=\"color: green; text-align: center\">";
        // line 370
        echo ($context["MONCOMPTE_MESSAGE"] ?? null);
        echo "</div>
                               <div class=\"row \">
                                    <div class=\"col\" >
                                        <form id=\"compteSauvegarder\" method=\"post\" action=\"";
        // line 373
        echo ($context["ACTION_FORM_COMPTE_SAUVEGARDER"] ?? null);
        echo "\">
                                         <input type=\"hidden\" name=\"action\" value=\"compteSauvegarder\">
                                        
                                        <div style=\"font-size: 0.7em\">Numéro de compte : 365";
        // line 376
        echo ($context["user_id"] ?? null);
        echo "</div>
                                        <br>
                                        <b>Adresse email :</b>
                                        <br><input type=\"text\" class=\"form-control\" name=\"nouvelEmail\" value=\"";
        // line 379
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
        // line 390
        echo ($context["typecompte_candidat_selected"] ?? null);
        echo ">Candidat</option>
                                            <option value=\"entreprise\" ";
        // line 391
        echo ($context["typecompte_entreprise_selected"] ?? null);
        echo ">Entreprise</option>
                                        </select>
                                        <hr>
                                        <button type=\"submit\" class=\"btn btn-primary\">Modifier</button>
                                        </form>
                                        
                                    </div>  
                                </div>
                                <div class=\"row \">
                                    <div class=\"col\" style=\"text-align:right\">
                                        <a href=\"";
        // line 401
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
        // line 417
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
        // line 442
        echo ($context["U_ALT_AJAX"] ?? null);
        echo "',
                        type : 'POST', 
                        data : 'action=supprimerFavoris&annonceId=' + annonceId, 
                        dataType : 'html',
                        success : function(code_html, statut){ 

                            // alert(code_html);
                            
                      
                            \$('#rowMesFavoris'+annonceId).remove();
                           // alert('Annonce supprimée des favoris');
                        },
                
                        error : function(resultat, statut, erreur){
                            alert(code_html);
                        },
                        complete : function(resultat, statut){

                        }

                    });
                }

                function favoris(annonceId) {
                        \$.ajax({
                            url : '";
        // line 467
        echo ($context["U_ALT_AJAX"] ?? null);
        echo "',
                            type : 'POST', 
                            data : 'action=favoris&annonceId=' + annonceId, 
                            dataType : 'html',
                            success : function(code_html, statut){ 

                                // alert(code_html);
                
                                //document.getElementById(\"coeur\"+annonceId).src = '";
        // line 475
        echo ($context["T_IMAGES_PATH"] ?? null);
        echo "site/accueil/btn_favoris_jaune_mini.png';
                                //document.getElementById(\"Mcoeur\"+annonceId).src = '";
        // line 476
        echo ($context["T_IMAGES_PATH"] ?? null);
        echo "site/accueil/btn_favoris_jaune_mini.png';
                               // document.getElementById(\"message\"+annonceId).innerHTML = 'Annonce ajoutée aux favoris!'; 
                                console.log('Annonce '+annonceId+' en favoris !');

                            },
                    
                            error : function(resultat, statut, erreur){
                                alert(erreur);
                                console.log(resultat);
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
    <br><br>
    
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
    <br>
</div>
";
    }

    public function getTemplateName()
    {
        return "alt_index_candidat.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  943 => 476,  939 => 475,  928 => 467,  900 => 442,  872 => 417,  853 => 401,  840 => 391,  836 => 390,  822 => 379,  816 => 376,  810 => 373,  804 => 370,  796 => 365,  769 => 345,  764 => 343,  759 => 341,  751 => 336,  747 => 335,  743 => 334,  739 => 333,  735 => 332,  731 => 331,  727 => 330,  723 => 329,  719 => 328,  715 => 327,  704 => 319,  699 => 317,  694 => 315,  688 => 312,  682 => 309,  676 => 306,  669 => 302,  665 => 301,  661 => 300,  657 => 299,  653 => 298,  649 => 297,  645 => 296,  641 => 295,  637 => 294,  633 => 293,  629 => 292,  625 => 291,  616 => 285,  611 => 283,  605 => 280,  598 => 276,  593 => 274,  589 => 273,  578 => 265,  569 => 258,  536 => 250,  528 => 249,  524 => 248,  520 => 247,  516 => 246,  512 => 245,  506 => 244,  502 => 243,  498 => 242,  479 => 231,  472 => 227,  468 => 226,  461 => 221,  459 => 220,  450 => 214,  443 => 210,  439 => 209,  433 => 208,  429 => 207,  425 => 206,  412 => 200,  409 => 199,  401 => 197,  389 => 195,  387 => 194,  380 => 192,  372 => 191,  365 => 187,  361 => 186,  349 => 177,  342 => 173,  334 => 170,  312 => 151,  294 => 135,  279 => 127,  275 => 126,  271 => 125,  267 => 124,  261 => 123,  257 => 122,  239 => 112,  232 => 108,  228 => 107,  221 => 102,  219 => 101,  210 => 95,  203 => 91,  199 => 90,  193 => 89,  189 => 88,  185 => 87,  172 => 81,  169 => 80,  161 => 78,  149 => 76,  147 => 75,  140 => 73,  132 => 72,  125 => 68,  121 => 67,  109 => 58,  102 => 54,  95 => 52,  73 => 33,  63 => 26,  59 => 25,  55 => 24,  51 => 23,  37 => 12,  33 => 11,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "alt_index_candidat.html", "");
    }
}
