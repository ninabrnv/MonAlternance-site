<?php

/* alt_candidatures.html */
class __TwigTemplate_85d167934c17ead2763eb613011f58228e50ad8e366f033bc669e3d277421286 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "alt_candidatures.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "

&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"";
        // line 4
        echo ($context["U_ALT_MES_ANNONCES"] ?? null);
        echo "\"><< Retour à mes annonces</a>
<br>
<div class=\"container-fluid\">

    <div class=\"card p-2\">
      
        <div class=\"container-fluid\" >
            <div class=\"row mb-2\">
                <!-- Partie gauche -->
                <div class=\"col-12 col-md-4\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                        Candidature
                        </div>
                        <div class=\"card-body\" style=\"text-align: center\">
                            
                         
                            <button type=\"button\" class=\"btn btn-success\" onclick=\"showRangerDans()\">Conserver</button> 
                            <button type=\"button\" class=\"btn btn-danger\" onclick=\"candidatureSuppr()\">Supprimer</button>
                            
                            <div id=\"divRangerDans\" style=\"display: ";
        // line 24
        echo ($context["display_rangerDans"] ?? null);
        echo "\">
                                <br>
                                Ranger dans : 
                                <select class=\"selectpicker form-control\" tabindex=\"0\" name=\"selectRangerDans\" id=\"selectRangerDans\" onchange=\"majStatutCandidature()\">
                                    <option selected>";
        // line 28
        echo ($context["statut"] ?? null);
        echo "</option>
                                    <option></option>
                                    <option>Sélectionné</option>
                                    <option>Refusé</option>
                            
                                </select>
                            </div>
                            <br><br>
                            <a href=\"";
        // line 36
        echo ($context["lien_precedent"] ?? null);
        echo "\">&lt;Précédent</a>&nbsp;&nbsp;&nbsp;<a href=\"";
        echo ($context["lien_suivant"] ?? null);
        echo "\" id=\"lienSuivant\">Suivant&gt;</a>
                            <br>Candidature : ";
        // line 37
        echo ($context["indice"] ?? null);
        echo "/";
        echo ($context["nb_candidatures"] ?? null);
        echo "
                        </div>
                    </div>
                    <br>
                    <div class=\"card\">
                            <div class=\"card-header\">
                            Candidat
                            </div>
                            <div class=\"card-body\">
                            <h5 class=\"card-title\">";
        // line 46
        echo ($context["prenom"] ?? null);
        echo " ";
        echo ($context["nom"] ?? null);
        echo "</h5>
                            <p class=\"card-text\">
                            Ville : <b>";
        // line 48
        echo ($context["ville"] ?? null);
        echo "</b>
                            <br>Email : <b>";
        // line 49
        echo ($context["candidat_email"] ?? null);
        echo "</b>
                            <br>Tél : <b>";
        // line 50
        echo ($context["tel"] ?? null);
        echo "</b>
                            <br>Age : <b>";
        // line 51
        echo ($context["age"] ?? null);
        echo "</b>
                            <br>Niveau étude : <b>";
        // line 52
        echo ($context["niveau_etude"] ?? null);
        echo "</b>
                            <br>Domaine : <b>";
        // line 53
        echo ($context["domaine"] ?? null);
        echo "</b>
                            <br>Artisanat : <b>";
        // line 54
        echo ($context["domaine_artisanat"] ?? null);
        echo "</b>
                            </p>
                            
                            </div>
                        </div>
                        <br>
                    <div class=\"card\">
                        <div class=\"card-header\">
                        Annonce
                        </div>
                        <div class=\"card-body\">
                        <h5 class=\"card-title\">";
        // line 65
        echo ($context["annonce_titre"] ?? null);
        echo "</h5>
                        <p class=\"card-text\">";
        // line 66
        echo ($context["annonce_description"] ?? null);
        echo "</p>
                        
                        </div>
                    </div>
                    
                    
                </div>
                <!-- Partie droite -->
                <div class=\"col-12 col-md-8\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                        Le CV
                        </div>
                        <div class=\"card-body\">
                                <a href=\"";
        // line 80
        echo ($context["cv"] ?? null);
        echo "\" target=\"_blank\">Télécharger le CV</a>
                            
                                ";
        // line 82
        echo ($context["cv_pdf"] ?? null);
        echo "
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <br><br><br>
</div>

<script>
    function showRangerDans() {

        document.getElementById('divRangerDans').style.display = 'block';

    }

    function majStatutCandidature() {

        var statut = document.getElementById('selectRangerDans').value;
        var action = \"\";

        if (statut == \"Sélectionné\") {
            action = 'candidatureStatutSelectionner';
        } else if (statut == \"Refusé\") {
            action = 'candidatureStatutRefuser';
        }

        if (action != '') {
            \$.ajax({
            url : '";
        // line 116
        echo ($context["U_ALT_AJAX"] ?? null);
        echo "',
            type : 'POST', 
            data : 'action='+action+'&candidatureId=";
        // line 118
        echo ($context["id_candidature"] ?? null);
        echo "', 
            dataType : 'html',
            success : function(code_html, statut){ 

                // alert(code_html);


            },

            error : function(resultat, statut, erreur){
                alert(erreur);
                console.log(resultat);
            },
            complete : function(resultat, statut){

            }

            });
        }
    }

    function candidatureSuppr() {

     
            \$.ajax({
            url : '";
        // line 143
        echo ($context["U_ALT_AJAX"] ?? null);
        echo "',
            type : 'POST', 
            data : 'action=candidatureSuppr&candidatureId=";
        // line 145
        echo ($context["id_candidature"] ?? null);
        echo "', 
            dataType : 'html',
            success : function(code_html, statut){ 

                document.getElementById('lienSuivant').click();
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

";
        // line 167
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "alt_candidatures.html", 167)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "alt_candidatures.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 167,  242 => 145,  237 => 143,  209 => 118,  204 => 116,  167 => 82,  162 => 80,  145 => 66,  141 => 65,  127 => 54,  123 => 53,  119 => 52,  115 => 51,  111 => 50,  107 => 49,  103 => 48,  96 => 46,  82 => 37,  76 => 36,  65 => 28,  58 => 24,  35 => 4,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "alt_candidatures.html", "");
    }
}
