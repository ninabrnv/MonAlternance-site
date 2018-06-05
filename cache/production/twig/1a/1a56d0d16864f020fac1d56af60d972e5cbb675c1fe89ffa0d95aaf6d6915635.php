<?php

/* alt_annonces2.html */
class __TwigTemplate_f53e8f250fa89163983a25f80026f5be25c34fae38e174842062d69110b69bd5 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "alt_annonces2.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "<form action=\"";
        echo ($context["U_ANNONCES"] ?? null);
        echo "\" method=\"POST\" autocomplete=\"off\">
<!-- formulaire recherche + Pub -->
<br>
<div class=\"container-fluid mt-3\">
    <div class=\"row\">
       
       <!-- formulaire recherche  -->
       <div class=\"col-12 col-md-6\">
            <div class=\"container-fuild p-2\" style=\"border-style: solid; border-width: thin; border-color: gray;  background-color: rgba(255, 255, 255, 0.897);  box-shadow: 8px 8px 8px #aaa; min-width: 300px\" >
               <div class=\"row\">
                    <!-- formulaire recherche : champs  -->    
                    <div class=\"col p-2\">
                            <input  type=\"search\" 
                            class=\"form-control alt-form-image-recherche m-1\" 
                            id=\"domaine\" 
                            name=\"domaine\" 
                            aria-describedby=\"domaine\" 
                            placeholder=\"DOMAINE (ex : commerce)\" 
                            value=\"";
        // line 20
        echo ($context["domaine"] ?? null);
        echo "\"
                            style=\"width: 250px; font-size: 0.8em\"
                            onselect=\"selectionDomaine();\" onclick=\"selectionDomaine();\"
                            >
                            
                            <input type=\"search\" class=\"form-control alt-form-image-recherche m-1\" 
                            id=\"domaineArtisanat\" 
                            name=\"domaineArtisanat\" 
                            aria-describedby=\"domaineArtisanat\" 
                            placeholder=\"Domaine artisanat\" 
                            value=\"";
        // line 30
        echo ($context["domaineArtisanat"] ?? null);
        echo "\"
                            style=\"width: 250px; display: ";
        // line 31
        echo ($context["display_artisanat"] ?? null);
        echo "; font-size: 0.8em\"
                            >

                             <!-- 
                            <select class=\"form-control alt-form-image-ville mt-2\" id=\"region\" name=\"region\" style=\"width: 250px;\">
                                <option value=\"0\">Toutes les régions</option>
                                BEGIN regions      
                                <option value=\"";
        // line 38
        echo $this->getAttribute(($context["regions"] ?? null), "CODE", array());
        echo "\" ";
        echo $this->getAttribute(($context["regions"] ?? null), "SELECTED", array());
        echo ">";
        echo $this->getAttribute(($context["regions"] ?? null), "NOM", array());
        echo "</option>
                                END regions    
                            </select>
                             -->    

                             <input type=\"search\" class=\"form-control alt-form-image-ville m-1\" id=\"ville1\" name=\"ville1\" placeholder=\"VILLE\" style=\"width: 250px; font-size: 0.8em\" value=\"";
        // line 43
        echo ($context["ville1"] ?? null);
        echo "\">  
                             ";
        // line 44
        echo ($context["erreurVille"] ?? null);
        echo "
                             <input type=\"search\" class=\"form-control alt-form-image-ville m-1\" id=\"ville2\" name=\"ville2\" placeholder=\"VILLE\" style=\"width: 250px; display: ";
        // line 45
        echo ($context["display_ville2"] ?? null);
        echo "; font-size: 0.8em\" value=\"";
        echo ($context["ville2"] ?? null);
        echo "\">  

                             <input type=\"search\" class=\"form-control alt-form-image-ville m-1\" id=\"ville3\" name=\"ville3\" placeholder=\"VILLE\" style=\"width: 250px; display: ";
        // line 47
        echo ($context["display_ville3"] ?? null);
        echo "; font-size: 0.8em\" value=\"";
        echo ($context["ville3"] ?? null);
        echo "\"> 

                             <a id=\"ajouterVille\" href=\"javascript:ajouterVille();\" class=\"ml-2\" style=\"display: ";
        // line 49
        echo ($context["display_ajouterVille"] ?? null);
        echo ";color: black\" ><img src=\"";
        echo ($context["T_IMAGES_PATH"] ?? null);
        echo "site/accueil/plus.png\" style=\"height: 15px; width: 15px\">&nbsp;Ajouter une ville</a>
                          

                    </div>
                    <!-- formulaire recherche : cases à cocher  -->    
                    <div class=\"col\">
                        <label class=\"custom-control custom-checkbox\">
                            <input type=\"checkbox\" class=\"custom-control-input\" ";
        // line 56
        echo ($context["CheckedTypeContratPro"] ?? null);
        echo " name=\"typeContratPro\" value=\"professionnalisation\">
                            <span class=\"custom-control-indicator\"></span>
                            <span class=\"custom-control-description\" style=\"font-size: 0.8em\">Contrat de professionnalisation</span>
                        </label>
                        <br>
        
                        <label class=\"custom-control custom-checkbox\">
                            <input type=\"checkbox\" class=\"custom-control-input\" ";
        // line 63
        echo ($context["CheckedTypeContratApprentissage"] ?? null);
        echo " name=\"typeContratApprentissage\" value=\"apprentissage\">
                            <span class=\"custom-control-indicator\"></span>
                            <span class=\"custom-control-description\" style=\"font-size: 0.8em\">Contrat d'apprentissage</span>
                        </label>
                        <br>
        
                        <label class=\"custom-control custom-checkbox\" >
                            <input type=\"checkbox\" class=\"custom-control-input\" ";
        // line 70
        echo ($context["CheckedTypeContratStage"] ?? null);
        echo " name=\"typeContratStage\" value=\"stage\">
                            <span class=\"custom-control-indicator\"></span>
                            <span class=\"custom-control-description\" style=\"font-size: 0.8em\">Stage</span>
                        </label>
                        <br>
                        <a href=\"";
        // line 75
        echo ($context["U_INDEX"] ?? null);
        echo "\" style=\"color: rgb(146, 146, 146); text-decoration: underline; font-size: 0.8em \">Nouvelle recherche</a>
                    </div>
               </div> 
               <!-- bouton rechercher  -->
               <div class=\"row\" style=\"text-align: center\">
                    <div class=\"col\">   
                        <button type=\"submit\" class=\"btn btn-primary \" style=\"width: 150px; height: 45px;\">Rechercher</button>
                    </div>
                </div>
            </div>   
       </div> 
       
       <!--  Pub -->   
       
       
       <div class=\"col-12 col-md-6\">
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
       
    </div>          
</div>
</form>

<!-- résultat recherche -->
<div class=\"container-fluid mt-5 mb-2\">
    <div class=\"row\" >
        <div class=\"col\">
            ";
        // line 111
        echo ($context["resultats_recherche"] ?? null);
        echo "
        </div>
    </div>
</div>

<div class=\"container-fluid mb-5\">
    <nav class=\"nav nav-tabs\" id=\"tabAnnonces\" role=\"tablist\">
        ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "villes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["villes"]) {
            echo "     
        <a class=\"nav-item nav-link ";
            // line 119
            echo $this->getAttribute($context["villes"], "ACTIVE", array());
            echo "\" id=\"nav-tab-";
            echo $this->getAttribute($context["villes"], "NUM_ONGLET", array());
            echo "\" data-toggle=\"tab\" href=\"#nav-ville-";
            echo $this->getAttribute($context["villes"], "NUM_ONGLET", array());
            echo "\" role=\"tab\" aria-controls=\"nav-home\" aria-selected=\"true\">";
            echo $this->getAttribute($context["villes"], "VILLE", array());
            echo "</a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['villes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo " 
    </nav>

    <div class=\"row\">
        <!-- Liste des annonces -->
        <div class=\"col-12 col-sm-12 col-lg-8 col-xl-8 tab-content\" >   
            ";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "villes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["villes"]) {
            // line 127
            echo "            <div class=\"tab-pane fade ";
            echo $this->getAttribute($context["villes"], "SHOW", array());
            echo " ";
            echo $this->getAttribute($context["villes"], "ACTIVE", array());
            echo "\" id=\"nav-ville-";
            echo $this->getAttribute($context["villes"], "NUM_ONGLET", array());
            echo "\" role=\"tabpanel\" aria-labelledby=\"nav-tab-";
            echo $this->getAttribute($context["villes"], "NUM_ONGLET", array());
            echo "\">
                ";
            // line 128
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["villes"], "annonce", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
                echo "  

                <!-- Annonce : Modal  -->
                <div class=\"modal fade\" id=\"modalAnnonce";
                // line 131
                echo $this->getAttribute($context["annonce"], "ID", array());
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"Annonce\" aria-hidden=\"true\">
                        <div class=\"modal-dialog modal-lg\" role=\"document\">
                            <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <div class=\"alt_lien_sous_titre\">Réf : ";
                // line 135
                echo $this->getAttribute($context["annonce"], "REF", array());
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
                // line 144
                echo $this->getAttribute($context["annonce"], "TITRE", array());
                echo "</h5>
                                            <div style=\"color: #d81212;\">";
                // line 145
                echo $this->getAttribute($context["annonce"], "LIEU", array());
                echo "</div>
                                        </div>

                                        <div class=\"col\" style=\"text-align: right; padding: 0px\">
                                            ";
                // line 149
                if (($context["TYPE_COMPTE_RECRUTEUR"] ?? null)) {
                    // line 150
                    echo "                                            &nbsp;
                                            ";
                } else {
                    // line 152
                    echo "                                            
                                                ";
                    // line 153
                    if (($context["S_USER_LOGGED_IN"] ?? null)) {
                        // line 154
                        echo "                                                
                                                    ";
                        // line 155
                        if ($this->getAttribute($context["annonce"], "DEJA_FAVORIS", array())) {
                            // line 156
                            echo "                                                    <a onclick=\"favorisSuppr(";
                            echo $this->getAttribute($context["annonce"], "ID", array());
                            echo ")\" data-dismiss=\"modal\" style=\"cursor: pointer\"><img src=\"";
                            echo ($context["T_IMAGES_PATH"] ?? null);
                            echo "site/accueil/btn_favoris_jaune_mini.png\" id=\"Mcoeur";
                            echo $this->getAttribute($context["annonce"], "ID", array());
                            echo "\" title=\"Supprimer cette annonce de vos favoris\"></a>
                                                    ";
                        } else {
                            // line 158
                            echo "                                                    <a onclick=\"favoris(";
                            echo $this->getAttribute($context["annonce"], "ID", array());
                            echo ")\" data-dismiss=\"modal\" style=\"cursor: pointer\"><img src=\"";
                            echo ($context["T_IMAGES_PATH"] ?? null);
                            echo "site/accueil/btn_favoris_noir_mini.png\" id=\"Mcoeur";
                            echo $this->getAttribute($context["annonce"], "ID", array());
                            echo "\" title=\"Ajouter cette annonce dans vos favoris\"></a>
                                                    ";
                        }
                        // line 159
                        echo "  
                                                
                                                ";
                    }
                    // line 162
                    echo "                                                <a style=\"cursor: pointer\" target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fmon-alternance.fr%2Fannonces.php%3Fid%3D";
                    echo $this->getAttribute($context["annonce"], "ID", array());
                    echo "\"><img src=\"";
                    echo ($context["T_IMAGES_PATH"] ?? null);
                    echo "site/accueil/btn_facebook_noir_mini.png\" id=\"Mfacebook";
                    echo $this->getAttribute($context["annonce"], "ID", array());
                    echo "\" title=\"Publier cette offre sur votre mur Facebook\"></a>
                                                
                                                ";
                    // line 164
                    if (($context["S_USER_LOGGED_IN"] ?? null)) {
                        // line 165
                        echo "                                                

                                                    ";
                        // line 167
                        if ($this->getAttribute($context["annonce"], "DEJA_POSTULER", array())) {
                            // line 168
                            echo "                                                    <button onclick=\"alert('Vous avez déjà postulé à cette annonce.');\"  class=\"unstyled-button\" style=\"cursor: pointer\"><img src=\"";
                            echo ($context["T_IMAGES_PATH"] ?? null);
                            echo "site/accueil/btn_postuler_gris_mini.png\" title=\"'Vous avez déjà postulé à cette annonce\"></button>
                                                    ";
                        } else {
                            // line 170
                            echo "

                                                        ";
                            // line 172
                            if (($context["CV"] ?? null)) {
                                // line 173
                                echo "                                                        <button data-toggle=\"modal\" class=\"unstyled-button\" data-target=\"#modalCommentaire";
                                echo $this->getAttribute($context["annonce"], "ID", array());
                                echo "\" data-dismiss=\"modal\" data-id=\"";
                                echo $this->getAttribute($context["annonce"], "ID", array());
                                echo "\" style=\"cursor: pointer\"><img src=\"";
                                echo ($context["T_IMAGES_PATH"] ?? null);
                                echo "site/accueil/btn_postuler_noir_mini.png\" id=\"M2postuler";
                                echo $this->getAttribute($context["annonce"], "ID", array());
                                echo "\"  title=\"Postuler à cette annonce\"></button>
                                                        ";
                            } else {
                                // line 175
                                echo "                                                        <button onclick=\"alert('Vous devez importer votre cv sur votre profil pour postuler à une annonce.');\"  class=\"unstyled-button\" style=\"cursor: pointer\"><img src=\"";
                                echo ($context["T_IMAGES_PATH"] ?? null);
                                echo "site/accueil/btn_postuler_noir_mini.png\" title=\"Postuler à cette annonce\"></button>
                                                        ";
                            }
                            // line 176
                            echo "  
                                                    ";
                        }
                        // line 177
                        echo "    
                                                        
                                                ";
                    } else {
                        // line 180
                        echo "                                                <a href=\"";
                        echo ($context["U_LOGIN_LOGOUT"] ?? null);
                        echo "\" style=\"cursor: pointer\" title=\"postuler\"><img src=\"";
                        echo ($context["T_IMAGES_PATH"] ?? null);
                        echo "site/accueil/btn_postuler_noir_mini.png\" title=\"Postuler à cette annonce\"></a>
                                                ";
                    }
                    // line 182
                    echo "                                                
                                                <!-- <a onclick=\"postuler(";
                    // line 183
                    echo $this->getAttribute($context["annonce"], "ID", array());
                    echo ")\" data-dismiss=\"modal\" style=\"cursor: pointer\"><img src=\"";
                    echo ($context["T_IMAGES_PATH"] ?? null);
                    echo "site/accueil/btn_postuler_noir_mini.png\" id=\"M2postuler";
                    echo $this->getAttribute($context["annonce"], "ID", array());
                    echo "\"  title=\"Postuler à cette annonce\"></a> -->
                                        ";
                }
                // line 185
                echo "                                        </div>
                                    </div>
                                </div>
                               
                                <hr style=\"height: 1px; color: rgb(172, 172, 172); background-color: rgb(177, 177, 177); width: 100%; border: none;\">
                                <b>Type de contrat :</b> ";
                // line 190
                echo $this->getAttribute($context["annonce"], "TYPE_CONTRAT", array());
                echo "
                                <br><b>Publiée le :</b> ";
                // line 191
                echo $this->getAttribute($context["annonce"], "PUBLIEE_LE", array());
                echo "
                                <br><b>Domaine :</b> ";
                // line 192
                echo $this->getAttribute($context["annonce"], "DOMAINE", array());
                echo " ";
                echo $this->getAttribute($context["annonce"], "DOMAINE_ARTISANAT", array());
                echo "
                                <br><b>Date de début :</b> ";
                // line 193
                echo $this->getAttribute($context["annonce"], "DATE_DE_DEBUT", array());
                echo "
                                <br><b>Durée :</b> ";
                // line 194
                echo $this->getAttribute($context["annonce"], "DUREE", array());
                echo "
                                <br>
                                <br><b>Descriptif : </b>
                                <br> 
                                ";
                // line 198
                echo $this->getAttribute($context["annonce"], "DESCRIPTION", array());
                echo "

                                    
                            </div>
                            <div class=\"modal-footer\">
                               
                                            ";
                // line 204
                if (($context["U_USER_ADMIN"] ?? null)) {
                    // line 205
                    echo "                                            <!-- <div class=\"dropdown\">
                                                <button class=\"btn btn-sm btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\"  data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                    Admin
                                                </button>
                                                <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                                    <a class=\"dropdown-item\" data-dismiss=\"modal\" onclick=\"valider(";
                    // line 210
                    echo $this->getAttribute($context["annonce"], "ID", array());
                    echo ")\">Valider annonce</a>
                                                    <a class=\"dropdown-item\" data-dismiss=\"modal\" onclick=\"supprimer(";
                    // line 211
                    echo $this->getAttribute($context["annonce"], "ID", array());
                    echo ")\">Supprimer annonce</a>
                                                </div>
                                            </div> -->
                                            ";
                }
                // line 215
                echo "                                        <!-- <a onclick=\"postuler(";
                echo $this->getAttribute($context["annonce"], "ID", array());
                echo ")\" data-dismiss=\"modal\" style=\"cursor: pointer\"><img src=\"";
                echo ($context["T_IMAGES_PATH"] ?? null);
                echo "site/accueil/btn_postuler_noir_mini.png\" id=\"Mpostuler";
                echo $this->getAttribute($context["annonce"], "ID", array());
                echo "\"  title=\"Postuler à cette annonce\"></a> -->
                              
                                   
                              
                            </div>

                            </div>
                        </div>
                    </div>

                <!-- Annonce : Encard -->    
                <div class=\"container card p-3 mt-3\" style=\"border-radius: 10px; box-shadow: 3px 3px 6px 0 #A9A9A9; \">

                    <div class=\"row\">
                        <div class=\"col\">
                            <div id=\"message";
                // line 230
                echo $this->getAttribute($context["annonce"], "ID", array());
                echo "\" style=\"color: green;font-weight: bold\"></div>
                            <a href=\"#modalAnnonce";
                // line 231
                echo $this->getAttribute($context["annonce"], "ID", array());
                echo "\" class=\"alt_lien\" style=\"text-decoration: underline\" data-toggle=\"modal\" title=\"";
                echo $this->getAttribute($context["annonce"], "TITRE", array());
                echo "\">";
                echo $this->getAttribute($context["annonce"], "TITRE_COURT", array());
                echo "</a>
                            
                        </div>
                        <div class=\"col-auto\">
                            ";
                // line 235
                if (($context["TYPE_COMPTE_RECRUTEUR"] ?? null)) {
                    // line 236
                    echo "                            &nbsp;
                            ";
                } else {
                    // line 238
                    echo "
                                ";
                    // line 239
                    if (($context["S_USER_LOGGED_IN"] ?? null)) {
                        // line 240
                        echo "                               
                                    ";
                        // line 241
                        if ($this->getAttribute($context["annonce"], "DEJA_FAVORIS", array())) {
                            // line 242
                            echo "                                    <a onclick=\"favorisSuppr(";
                            echo $this->getAttribute($context["annonce"], "ID", array());
                            echo ")\" style=\"cursor: pointer\"><img src=\"";
                            echo ($context["T_IMAGES_PATH"] ?? null);
                            echo "site/accueil/btn_favoris_jaune_mini.png\" id=\"coeur";
                            echo $this->getAttribute($context["annonce"], "ID", array());
                            echo "\" title=\"Supprimer cette annonce de vos favoris\"></a>
                                    ";
                        } else {
                            // line 244
                            echo "                                    <a onclick=\"favoris(";
                            echo $this->getAttribute($context["annonce"], "ID", array());
                            echo ")\" style=\"cursor: pointer\"><img src=\"";
                            echo ($context["T_IMAGES_PATH"] ?? null);
                            echo "site/accueil/btn_favoris_noir_mini.png\" id=\"coeur";
                            echo $this->getAttribute($context["annonce"], "ID", array());
                            echo "\" title=\"Ajouter cette annonce dans vos favoris\"></a>
                                    ";
                        }
                        // line 246
                        echo "                               
                                ";
                    } else {
                        // line 248
                        echo "                                <a href=\"";
                        echo ($context["U_LOGIN_LOGOUT"] ?? null);
                        echo "\" style=\"cursor: pointer\"><img src=\"";
                        echo ($context["T_IMAGES_PATH"] ?? null);
                        echo "site/accueil/btn_favoris_noir_mini.png\" id=\"coeur";
                        echo $this->getAttribute($context["annonce"], "ID", array());
                        echo "\" title=\"Ajouter cette annonce dans vos favoris\"></a>
                                ";
                    }
                    // line 250
                    echo "                                <a style=\"cursor: pointer\" target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fmon-alternance.fr%2Fannonces.php%3Fid%3D";
                    echo $this->getAttribute($context["annonce"], "ID", array());
                    echo "\"><img src=\"";
                    echo ($context["T_IMAGES_PATH"] ?? null);
                    echo "site/accueil/btn_facebook_noir_mini.png\" id=\"facebook";
                    echo $this->getAttribute($context["annonce"], "ID", array());
                    echo "\" title=\"Publier cette offre sur votre mur Facebook\"></a>
                                
                                ";
                    // line 252
                    if (($context["S_USER_LOGGED_IN"] ?? null)) {
                        // line 253
                        echo "                            
                                    ";
                        // line 254
                        if ($this->getAttribute($context["annonce"], "DEJA_POSTULER", array())) {
                            // line 255
                            echo "                                        <button onclick=\"alert('Vous avez déjà postulé à cette annonce.');\"  class=\"unstyled-button\" style=\"cursor: pointer\"><img src=\"";
                            echo ($context["T_IMAGES_PATH"] ?? null);
                            echo "site/accueil/btn_postuler_gris_mini.png\" title=\"'Vous avez déjà postulé à cette annonce\"></button>
                                    ";
                        } else {
                            // line 257
                            echo "                                        ";
                            if (($context["CV"] ?? null)) {
                                // line 258
                                echo "                                        <button data-toggle=\"modal\" class=\"unstyled-button\" data-target=\"#modalCommentaire";
                                echo $this->getAttribute($context["annonce"], "ID", array());
                                echo "\" data-id=\"";
                                echo $this->getAttribute($context["annonce"], "ID", array());
                                echo "\" style=\"cursor: pointer\"><img src=\"";
                                echo ($context["T_IMAGES_PATH"] ?? null);
                                echo "site/accueil/btn_postuler_noir_mini.png\" id=\"postuler";
                                echo $this->getAttribute($context["annonce"], "ID", array());
                                echo "\"  title=\"Postuler à cette annonce\"></button>
                                        ";
                            } else {
                                // line 260
                                echo "                                        <button onclick=\"alert('Vous devez importer votre cv sur votre profil pour postuler à une annonce.');\"  class=\"unstyled-button\" style=\"cursor: pointer\"><img src=\"";
                                echo ($context["T_IMAGES_PATH"] ?? null);
                                echo "site/accueil/btn_postuler_noir_mini.png\" title=\"Postuler à cette annonce\"></button>
                                        ";
                            }
                            // line 261
                            echo "    
                                    ";
                        }
                        // line 262
                        echo "   


                                ";
                    } else {
                        // line 266
                        echo "                                <a href=\"";
                        echo ($context["U_LOGIN_LOGOUT"] ?? null);
                        echo "\" style=\"cursor: pointer\" title=\"postuler\"><img src=\"";
                        echo ($context["T_IMAGES_PATH"] ?? null);
                        echo "site/accueil/btn_postuler_noir_mini.png\" title=\"Postuler à cette annonce\"></a>
                                ";
                    }
                    // line 268
                    echo "                            ";
                }
                // line 269
                echo "                        </div>
                    </div>    
                    
                    <div class=\"row\">
                        <div class=\"col\">
                            <div class=\"alt_lien_second\">";
                // line 274
                echo $this->getAttribute($context["annonce"], "LIEU", array());
                echo "</div>
                        </div>
                    </div>  
                    <div class=\"row\">
                        <div class=\"col\">
                            <div class=\"alt_lien_sous_titre\">";
                // line 279
                echo $this->getAttribute($context["annonce"], "DOMAINE", array());
                echo " ";
                echo $this->getAttribute($context["annonce"], "DOMAINE_ARTISANAT", array());
                echo "</div>
                        </div>
                    </div> 
                    <div class=\"row\">
                        <div class=\"col\">
                            <div class=\"alt_lien_small\">";
                // line 284
                echo $this->getAttribute($context["annonce"], "TYPE_CONTRAT", array());
                echo "</div>
                        </div>
                    </div> 
                    <div class=\"row\">
                        <div class=\"col\">
                            ";
                // line 289
                echo $this->getAttribute($context["annonce"], "DESCRIPTION_COURT", array());
                echo "   
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col\" style=\"text-align: right\">
                            <div class=\"alt_lien_sous_titre\">";
                // line 294
                echo $this->getAttribute($context["annonce"], "PUBLIEE_LE", array());
                echo "</div>
                        </div>
                    </div>
                </div>      
                
                <!-- Modal commetnaire postuler -->
                <div class=\"modal fade\" id=\"modalCommentaire";
                // line 300
                echo $this->getAttribute($context["annonce"], "ID", array());
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalCommentaire\" aria-hidden=\"true\">
                        <div class=\"modal-dialog\" role=\"document\">
                            <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\">Ajouter un commentaire à l'employeur</h5>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                            <div class=\"modal-body\">
                                (Ceci n'est pas obligatoire)
                                <br><br>
                                <div class=\"form-group\">
                                    <label for=\"commentairePostuler";
                // line 313
                echo $this->getAttribute($context["annonce"], "ID", array());
                echo "\">Commentaire :</label>
                                    <textarea class=\"form-control\" rows=\"5\" id=\"commentairePostuler";
                // line 314
                echo $this->getAttribute($context["annonce"], "ID", array());
                echo "\"></textarea>
                                </div>
                    
                            </div>
                            <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\" onclick=\"postuler(";
                // line 319
                echo $this->getAttribute($context["annonce"], "ID", array());
                echo ")\">Postuler</button>
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- fin Modal commetnaire postuler -->
                
                
                
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 328
            echo " 

            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['villes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 331
        echo " 
        </div>
        <!-- Carte -->
        <!-- <div style=\"position: fixed; right: 0px; left: auto;top: 144px ;\"></div> -->
        <div class=\"col-12 col-sm-12 col-lg-4 col-xl-4 mt-2\" >
            ";
        // line 336
        if (($context["affiche_carte"] ?? null)) {
            echo "  
                ";
            // line 337
            $location = "alt_accueil_map.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("alt_accueil_map.html", "alt_annonces2.html", 337)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 338
            echo "            ";
        }
        // line 339
        echo "        </div>
    </div>

</div>



<script>




function favoris(annonceId) {
    \$.ajax({
    url : '";
        // line 353
        echo ($context["U_ALT_AJAX"] ?? null);
        echo "',
    type : 'POST', 
    data : 'action=favoris&annonceId=' + annonceId, 
    dataType : 'html',
    success : function(code_html, statut){ 

        // alert(code_html);

    document.getElementById(\"coeur\"+annonceId).src = '";
        // line 361
        echo ($context["T_IMAGES_PATH"] ?? null);
        echo "site/accueil/btn_favoris_jaune_mini.png';
    document.getElementById(\"Mcoeur\"+annonceId).src = '";
        // line 362
        echo ($context["T_IMAGES_PATH"] ?? null);
        echo "site/accueil/btn_favoris_jaune_mini.png';
    document.getElementById(\"message\"+annonceId).innerHTML = 'Annonce ajoutée aux favoris!'; 
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

function favorisSuppr(annonceId) {
    \$.ajax({
    url : '";
        // line 381
        echo ($context["U_ALT_AJAX"] ?? null);
        echo "',
    type : 'POST', 
    data : 'action=supprimerFavoris&annonceId=' + annonceId, 
    dataType : 'html',
    success : function(code_html, statut){ 

        // alert(code_html);

    document.getElementById(\"coeur\"+annonceId).src = '";
        // line 389
        echo ($context["T_IMAGES_PATH"] ?? null);
        echo "site/accueil/btn_favoris_noir_mini.png';
    document.getElementById(\"Mcoeur\"+annonceId).src = '";
        // line 390
        echo ($context["T_IMAGES_PATH"] ?? null);
        echo "site/accueil/btn_favoris_noir_mini.png';
    document.getElementById(\"message\"+annonceId).innerHTML = 'Annonce supprimée de vos favoris'; 
    

    },

    error : function(resultat, statut, erreur){
        alert(erreur);
        console.log(resultat);
    },
    complete : function(resultat, statut){

    }

    });
}

    function postuler(annonceId) {

    var commentaire = '';
    commentaire = document.getElementById(\"commentairePostuler\"+annonceId).value;

    \$.ajax({
    url : '";
        // line 413
        echo ($context["U_ALT_AJAX"] ?? null);
        echo "',
    type : 'POST', 
    data : 'action=postuler&annonceId=' + annonceId + '&commentaire=' + commentaire, 
    dataType : 'html',
    success : function(code_html, statut){ 

        // alert(code_html);
    
    
    document.getElementById(\"message\"+annonceId).innerHTML = 'Vous venez de postuler à cette annonce !'; 
    document.getElementById(\"postuler\"+annonceId).src = '";
        // line 423
        echo ($context["T_IMAGES_PATH"] ?? null);
        echo "site/accueil/btn_postuler_gris_mini.png';
    document.getElementById(\"M2postuler\"+annonceId).src = '";
        // line 424
        echo ($context["T_IMAGES_PATH"] ?? null);
        echo "site/accueil/btn_postuler_gris_mini.png';
    console.log('Postulé sur l\\'annonce '+annonceId);

    },

    error : function(resultat, statut, erreur){
        alert(erreur);
    },
    complete : function(resultat, statut){

    }

    });
    }

    function supprimer(annonceId) {
    \$.ajax({
    url : '";
        // line 441
        echo ($context["U_ALT_AJAX"] ?? null);
        echo "',
    type : 'POST', 
    data : 'action=supprimer&annonceId=' + annonceId, 
    dataType : 'html',
    success : function(code_html, statut){ 

        // alert(code_html);
    
    
    document.getElementById(\"message\"+annonceId).innerHTML = 'Vous venez de supprimer cette annonce'; 


    },

    error : function(resultat, statut, erreur){
        alert(erreur);
    },
    complete : function(resultat, statut){

    }

    });
    }

    function valider(annonceId) {
    \$.ajax({
    url : '";
        // line 467
        echo ($context["U_ALT_AJAX"] ?? null);
        echo "',
    type : 'POST', 
    data : 'action=valider&annonceId=' + annonceId, 
    dataType : 'html',
    success : function(code_html, statut){ 

        // alert(code_html);
    
    
    document.getElementById(\"message\"+annonceId).innerHTML = 'Vous venez de valider cette annonce'; 


    },

    error : function(resultat, statut, erreur){
        alert(erreur);
    },
    complete : function(resultat, statut){

    }

    });
    }


</script>



";
        // line 496
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "alt_annonces2.html", 496)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "alt_annonces2.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  937 => 496,  905 => 467,  876 => 441,  856 => 424,  852 => 423,  839 => 413,  813 => 390,  809 => 389,  798 => 381,  776 => 362,  772 => 361,  761 => 353,  745 => 339,  742 => 338,  730 => 337,  726 => 336,  719 => 331,  710 => 328,  694 => 319,  686 => 314,  682 => 313,  666 => 300,  657 => 294,  649 => 289,  641 => 284,  631 => 279,  623 => 274,  616 => 269,  613 => 268,  605 => 266,  599 => 262,  595 => 261,  589 => 260,  577 => 258,  574 => 257,  568 => 255,  566 => 254,  563 => 253,  561 => 252,  551 => 250,  541 => 248,  537 => 246,  527 => 244,  517 => 242,  515 => 241,  512 => 240,  510 => 239,  507 => 238,  503 => 236,  501 => 235,  490 => 231,  486 => 230,  463 => 215,  456 => 211,  452 => 210,  445 => 205,  443 => 204,  434 => 198,  427 => 194,  423 => 193,  417 => 192,  413 => 191,  409 => 190,  402 => 185,  393 => 183,  390 => 182,  382 => 180,  377 => 177,  373 => 176,  367 => 175,  355 => 173,  353 => 172,  349 => 170,  343 => 168,  341 => 167,  337 => 165,  335 => 164,  325 => 162,  320 => 159,  310 => 158,  300 => 156,  298 => 155,  295 => 154,  293 => 153,  290 => 152,  286 => 150,  284 => 149,  277 => 145,  273 => 144,  261 => 135,  254 => 131,  246 => 128,  235 => 127,  231 => 126,  223 => 120,  209 => 119,  203 => 118,  193 => 111,  154 => 75,  146 => 70,  136 => 63,  126 => 56,  114 => 49,  107 => 47,  100 => 45,  96 => 44,  92 => 43,  80 => 38,  70 => 31,  66 => 30,  53 => 20,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "alt_annonces2.html", "");
    }
}
