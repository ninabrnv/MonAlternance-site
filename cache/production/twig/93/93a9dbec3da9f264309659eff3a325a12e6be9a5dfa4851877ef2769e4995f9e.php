<?php

/* alt_annonce.html */
class __TwigTemplate_94d612c1a0decb55dd067dce07898842b3b0e03052fe693f07fa32ee88ce2f45 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "alt_annonce.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        if (($context["CREATION_ANNONCE"] ?? null)) {
            // line 4
            if ( !($context["display_pourLeCompteDe"] ?? null)) {
                // line 5
                echo "<div class=\"container pb-3\" style=\"border: 1px solid rgba(0,0,0,.125);\">
    <h1>Etape par étape</h1>
    <div class=\"progress\">
        <div class=\"progress-bar bg-danger\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:50%\">
        Etape 2/4 : Enregistrez votre annonce
        </div>
    </div>
</div>
<br>
";
            }
        }
        // line 16
        echo "<div class=\"container-fluid\">
        <div calss=\"row\">
    
            <div class=\"col\">
    
            </div>
            <div class=\"col\">
    
                <div class=\"container-fluid\">
    
                    <div class=\"row\">
                        <div class=\"container pt-4 mt-4 mb-4\" style=\"background-color: rgba(185, 185, 185, 0.527); border: 1px solid #C0C0C0; border-radius: 10px; box-shadow: 3px 3px 6px 0 #A9A9A9; width: 98%\">
    

                            <div class=\"container pt-4 mb-4\" style=\"background-color: white; border: 1px solid #C0C0C0; border-radius: 10px; box-shadow: 3px 3px 6px 0 #A9A9A9; width: 98%\">
                                <form id=\"formAnnonce2018\" method=\"post\" action=\"";
        // line 31
        echo ($context["ACTION_FORM_ANNONCE"] ?? null);
        echo "\" onSubmit=\"return verifForm(this);\" autocomplete=\"off\">
                                <input type=\"hidden\" name=\"action\" value=\"sauvegarderAnnonce\">
                                <input type=\"hidden\" name=\"id\" value=\"";
        // line 33
        echo ($context["annonce_id"] ?? null);
        echo "\">
                                
                                ";
        // line 35
        if (($context["display_pourLeCompteDe"] ?? null)) {
            // line 36
            echo "                                <input type=\"hidden\" name=\"pourLeCompteDe\" value=\"";
            echo ($context["pourLeCompteDe"] ?? null);
            echo "\">
                                ";
        }
        // line 38
        echo "
                                    <div class=\"row\">
                                        <div class=\"col m-3\" style=\"text-align: center\">
                                        <h3>";
        // line 41
        echo ($context["TITRE_CREATION_MODIFICATION_ANNONCE"] ?? null);
        echo "</h3>
                                        </div>
                                    </div>   
                                    <div class=\"row\" >
                                       
                                        <div class=\"col m-3\" >

                                            <label>Intitulé de l'annonce :</label> *
                                            <input type=\"text\" class=\"form-control\" tabindex=\"0\" name=\"annonce_titre\" id=\"annonce_titre\" value=\"";
        // line 49
        echo ($context["annonce_titre"] ?? null);
        echo "\"  autocomplete=\"off\"  />
                                            <div class=\"alt_lien_sous_titre\">(Mettre l'intitulé du poste au masculin et au féminin afin d'éviter une quelconque discrimination)</div>
                                            

                                            <br>
                                            <div class=\"form-group\">
                                                <label for=\"annonce_description\">Description du poste :</label> *
                                                <textarea class=\"form-control\" rows=\"15\" id=\"annonce_description\" name=\"annonce_description\"  autocomplete=\"off\">";
        // line 56
        echo ($context["annonce_description"] ?? null);
        echo "</textarea>
                                            </div>
                                            
                                            
                                            <br>
                                            <label>Type de contrat :</label> *
                                            <select class=\"selectpicker form-control\" tabindex=\"0\" name=\"annonce_contrat_type\" id=\"annonce_contrat_type\">
                                                    <option></option>
                                                    <option ";
        // line 64
        echo ($context["annonce_contrat_type_pro_checked"] ?? null);
        echo ">Contrat de professionnalisation</option>
                                                    <option ";
        // line 65
        echo ($context["annonce_contrat_type_apr_checked"] ?? null);
        echo ">Contrat d'apprentissage</option>
                                                    <option ";
        // line 66
        echo ($context["annonce_contrat_type_stage_checked"] ?? null);
        echo ">Stage</option>

                                            </select>
                                        
                                            

                                            <label>Durée :</label> *
                                            
                                            <div class=\"container m-0 p-0\">
                                                <div class=\"row\">
                                                    <div class=\"col-6\">
                                                        <select class=\"selectpicker form-control\" tabindex=\"0\" name=\"annonce_duree_nombre\" id=\"annonce_duree_nombre\">
                                                                <option selected>";
        // line 78
        echo ($context["annonce_duree_nombre"] ?? null);
        echo "</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                                <option>6</option>
                                                                <option>7</option>
                                                                <option>8</option>
                                                                <option>9</option>
                                                                <option>10</option>
                                                                <option>11</option>
                                                                <option>12</option>
                                                            </select>

                                                    </div>
                                                    <div class=\"col-6\">

                                                            <select class=\"selectpicker form-control\" tabindex=\"0\" name=\"annonce_duree_type\" id=\"annonce_duree_type\">
                                                                    <option selected>";
        // line 97
        echo ($context["annonce_duree_type"] ?? null);
        echo "</option>
                                                                    <option></option>
                                                                    <option>semaine</option>
                                                                    <option>mois</option>
                                                                    <option>annee</option>
                                                                </select>

                                                    </div>
                                                </div>
                                            </div>
                                            

                                            <label>Date de prise de poste :</label> *
                                            <div class=\"container m-0 p-0\">
                                                <div class=\"row\">
                                                    <div class=\"col-6\">
                                                        <select class=\"selectpicker form-control\" tabindex=\"0\" name=\"annonce_debut_mois\" id=\"annonce_debut_mois\">
                                                                <option selected>";
        // line 114
        echo ($context["annonce_debut_mois"] ?? null);
        echo "</option>
                                                                <option>Au plus vite</option>
                                                                <option>Janvier</option>
                                                                <option>Février</option>
                                                                <option>Mars</option>
                                                                <option>Avril</option>
                                                                <option>Mai</option>
                                                                <option>Juin</option>
                                                                <option>Juillet</option>
                                                                <option>Août</option>
                                                                <option>Septembre</option>
                                                                <option>Octobre</option>
                                                                <option>Novembre</option>
                                                                <option>Décembre</option>
                                                            </select>
                                                    </div>
                                                    <div class=\"col-6\">
                                                        <select class=\"selectpicker form-control\" tabindex=\"0\" name=\"annonce_debut_annee\" id=\"annonce_debut_annee\">
                                                            <option selected>";
        // line 132
        echo ($context["annonce_debut_annee"] ?? null);
        echo "</option>
                                                            <option>2018</option>
                                                            <option>2019</option>
                                                            <option>2020</option>
                                                            <option>2021</option>
                                                            <option>2022</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                   

                                        </div>
                                        <div class=\"col m-3\">
                                                <label>Entreprise :</label> *
                                                <input type=\"text\" class=\"form-control\" tabindex=\"0\" name=\"annonce_societe_nom\" id=\"annonce_societe_nom\" value=\"";
        // line 148
        echo ($context["annonce_societe_nom"] ?? null);
        echo "\"  autocomplete=\"off\"  />

                                                <label>Statut de la structure :</label> *
                                            
                                                <select class=\"selectpicker form-control\" tabindex=\"0\" name=\"annonce_statut_structure\" id=\"annonce_statut_structure\">
                                                        <option></option>
                                                        <option ";
        // line 154
        echo ($context["annonce_statut_structure_asso_checked"] ?? null);
        echo ">Association</option>
                                                        <option ";
        // line 155
        echo ($context["annonce_statut_structure_autre_checked"] ?? null);
        echo ">Autre</option>
                                                        <option ";
        // line 156
        echo ($context["annonce_statut_structure_ecole_checked"] ?? null);
        echo ">Ecole</option>
                                                        <option ";
        // line 157
        echo ($context["annonce_statut_structure_entreprise_checked"] ?? null);
        echo ">Entreprise</option>
                                                        <option ";
        // line 158
        echo ($context["annonce_statut_structure_publique_checked"] ?? null);
        echo ">Structure publique</option>
                                                </select>

                                                <br><br>
                                                <label>Adresse :</label>
                                                <input type=\"text\" class=\"form-control\" tabindex=\"0\" name=\"annonce_adresse\" id=\"annonce_adresse\" value=\"";
        // line 163
        echo ($context["annonce_adresse"] ?? null);
        echo "\"  autocomplete=\"off\" />
                                            
                                                <label>Code postal :</label> *
                                                <input type=\"text\" class=\"form-control\" tabindex=\"0\" name=\"annonce_adresse_cp\" id=\"annonce_adresse_cp\" value=\"";
        // line 166
        echo ($context["annonce_adresse_cp"] ?? null);
        echo "\"  autocomplete=\"off\" />
                                            
                                                <label>Ville :</label> * <div style=\"color: red\">";
        // line 168
        echo ($context["MESSAGE_ERREUR_VILLE_NON_TROUVEE"] ?? null);
        echo "</div>
                                                <input type=\"text\" class=\"form-control\" tabindex=\"0\" name=\"annonce_adresse_ville\" id=\"annonce_adresse_ville\" value=\"";
        // line 169
        echo ($context["annonce_adresse_ville"] ?? null);
        echo "\"  autocomplete=\"off\" />
                                            
                                                <label>Pays :</label>
                                                <input type=\"text\" class=\"form-control\" tabindex=\"0\" name=\"annonce_adresse_pays\" id=\"annonce_adresse_pays\" value=\"";
        // line 172
        echo ($context["annonce_adresse_pays"] ?? null);
        echo "\"  autocomplete=\"off\" />
                                            
                                                <br><br><br>
                                                <label>Domaine d'activité :</label> *
                                                <input type=\"search\" class=\"form-control \" tabindex=\"0\" name=\"annonce_domaine\" id=\"annonce_domaine\" value=\"";
        // line 176
        echo ($context["annonce_domaine"] ?? null);
        echo "\" onselect=\"selectionDomaine();\" onclick=\"selectionDomaine();\"/>
                                                
                                                <div id=\"rowDomaineArtisanat\" style=\"display: ";
        // line 178
        echo ($context["show_domaine_artisanat"] ?? null);
        echo "\">
                                                    <label>Domaine artisanat :</label>
                                                    <input type=\"search\" class=\"form-control \" id=\"annonce_domaine_artisanat\" name=\"annonce_domaine_artisanat\" aria-describedby=\"annonce_domaine_artisanat\" value=\"";
        // line 180
        echo ($context["annonce_domaine_artisanat"] ?? null);
        echo "\">
                                                </div>
                                        </div>
                                         
                                    </div>

                                    <div class=\"row\">
                                        <div class=\"col mr-3\" style=\"text-align: center\">
                                                <input type=\"submit\" tabindex=\"0\" name=\"submit\" id=\"submit\" value=\"Enregistrer l'annonce\" class=\"btn btn-success default-submit-action\" />
                                        </div>
                                    </div>   
                                    
                                            

                                    <div class=\"row\">
                                        <div class=\"col mr-3\" style=\"text-align: right\">
                                            <div class=\"alt_lien_sous_titre\" >(id: ";
        // line 196
        echo ($context["annonce_id"] ?? null);
        echo ")</div>
                                        </div>
                                    </div>   
                                    </form>

                                    <script>


                                        function verifForm(f) {

                                            var annonce_titre = document.getElementById('annonce_titre').value;
                                            var annonce_description = document.getElementById('annonce_description').value;
                                            var annonce_contrat_type = document.getElementById('annonce_contrat_type').value;
                                            var annonce_adresse_cp = document.getElementById('annonce_adresse_cp').value;
                                            var annonce_adresse_ville = document.getElementById('annonce_adresse_ville').value;
                                            var annonce_duree_type = document.getElementById('annonce_duree_type').value;
     

                                            if(annonce_titre != '' && annonce_description != '' 
                                            && annonce_contrat_type != '' 
                                            && annonce_adresse_ville != ''
                                            && annonce_adresse_cp != ''
                                            && annonce_duree_type != ''
                                            )
                                                return true;
                                            else
                                            {
                                                alert(\"Erreur : Veuillez remplir les champs obligatoires.\");
                                                return false;
                                            }
                                        }
                                    </script>

                            </div>
                        </div>
                    </div>
                </div>\t
            </div>
        </div>
    </div>

    
    
    
    
    
    
    
    <div class=\"pb-5\"></div>
    ";
        // line 245
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "alt_annonce.html", 245)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "alt_annonce.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  370 => 245,  318 => 196,  299 => 180,  294 => 178,  289 => 176,  282 => 172,  276 => 169,  272 => 168,  267 => 166,  261 => 163,  253 => 158,  249 => 157,  245 => 156,  241 => 155,  237 => 154,  228 => 148,  209 => 132,  188 => 114,  168 => 97,  146 => 78,  131 => 66,  127 => 65,  123 => 64,  112 => 56,  102 => 49,  91 => 41,  86 => 38,  80 => 36,  78 => 35,  73 => 33,  68 => 31,  51 => 16,  38 => 5,  36 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "alt_annonce.html", "");
    }
}
