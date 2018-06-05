<?php

/* ucp_register.html */
class __TwigTemplate_5101ebe6ea32dbabc3bdb3890c7ad4941ea0a10cf0eb6d2b9da620f273ed8387 extends Twig_Template
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
        $value = "register";
        $context['definition']->set('NAV_SECTION', $value);
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "ucp_register.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "


<div class=\"container-fluid\">
\t<div calss=\"row\">

\t\t<div class=\"col\">

\t\t</div>
\t\t<div class=\"col\">

\t\t\t<div class=\"container-fluid imageBackRegister\" >

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"container pt-4 mt-4 mb-4\" style=\"background-color: rgba(185, 185, 185, 0.527); border: 1px solid #C0C0C0; border-radius: 10px; box-shadow: 3px 3px 6px 0 #A9A9A9; max-width: 650px\">

\t\t\t\t\t\t<div class=\"container pt-4 mb-4\" style=\"background-color: white; border: 1px solid #C0C0C0; border-radius: 10px; box-shadow: 3px 3px 6px 0 #A9A9A9\">

\t\t\t\t\t\t\t<ul class=\"col-sm-12 clearfix\" >
\t\t\t\t\t\t\t\t<!-- DEBUT CONTENU -->

\t\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<form id=\"register\" method=\"post\" onsubmit=\"return validFormRegister()\" action=\"";
        // line 29
        echo ($context["S_UCP_ACTION"] ?? null);
        echo "\" enctype=\"multipart/form-data\" autocomplete=\"false\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>";
        // line 34
        echo ($context["SITENAME"] ?? null);
        echo " - ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REGISTRATION");
        echo "</h2>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 39
        if (($context["ERROR"] ?? null)) {
            echo "<div class=\"alt_error\">";
            echo ($context["ERROR"] ?? null);
            echo "</div>";
        }
        // line 40
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        if (($context["L_REG_COND"] ?? null)) {
            // line 41
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REG_COND");
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 43
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 44
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"email\"><strong>";
        // line 48
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EMAIL_ADDRESS");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo " *</strong></label><div class=\"alt_lien_sous_titre\">(Votre email sera votre identifiant de connexion)</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" tabindex=\"2\" name=\"email\" id=\"email\" size=\"25\" maxlength=\"100\" value=\"";
        // line 49
        echo ($context["EMAIL"] ?? null);
        echo "\" class=\"form-control\" title=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EMAIL_ADDRESS");
        echo "\" autocomplete=\"off\" aria-describedby=\"Email\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"email\"><strong>";
        // line 54
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PASSWORD");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo " *</strong></label><div class=\"alt_lien_sous_titre\">(";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PASSWORD_EXPLAIN");
        echo ")</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" tabindex=\"4\" name=\"new_password\" id=\"new_password\" size=\"25\" value=\"";
        // line 55
        echo ($context["PASSWORD"] ?? null);
        echo "\" class=\"form-control\" title=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NEW_PASSWORD");
        echo "\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"password_confirm\"><strong>";
        // line 60
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONFIRM_PASSWORD");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo " *</strong></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\"  tabindex=\"5\" name=\"password_confirm\" id=\"password_confirm\" size=\"25\" value=\"";
        // line 61
        echo ($context["PASSWORD_CONFIRM"] ?? null);
        echo "\" class=\"form-control\" title=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONFIRM_PASSWORD");
        echo "\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 66
        // line 67
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 69
        // line 70
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 72
        // line 73
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "profile_fields", array()))) {
            // line 74
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Informations de profil</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 82
            if (false) {
                // line 83
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "profile_fields", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["profile_fields"]) {
                    // line 84
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 86
                    if ($this->getAttribute($context["profile_fields"], "FIELD_ID", array())) {
                        echo "<label for=\"";
                        echo $this->getAttribute($context["profile_fields"], "FIELD_ID", array());
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 87
                    echo $this->getAttribute($context["profile_fields"], "LANG_NAME", array());
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 88
                    if ($this->getAttribute($context["profile_fields"], "S_REQUIRED", array())) {
                        echo " *";
                    }
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 89
                    if ($this->getAttribute($context["profile_fields"], "LANG_EXPLAIN", array())) {
                        echo "<br /><span>";
                        echo $this->getAttribute($context["profile_fields"], "LANG_EXPLAIN", array());
                        echo "</span>";
                    }
                    // line 90
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["profile_fields"], "ERROR", array())) {
                        echo "<br /><span class=\"alt_error\">";
                        echo $this->getAttribute($context["profile_fields"], "ERROR", array());
                        echo "</span>";
                    }
                    // line 91
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    echo $this->getAttribute($context["profile_fields"], "FIELD", array());
                    echo "\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profile_fields'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 96
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 97
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Choix du type de compte -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSélectionnez le type de compte que vous souhaitez créér :
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br><br>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"type_compte\" id=\"typeCompteCandidat\" value=\"candidat\" onclick=\"document.getElementById('champsCandidat').style.display = 'block';document.getElementById('divValiderFormulaire').style.display = 'block'; document.getElementById('champsEntreprise').style.display = 'none';\"  ";
            // line 107
            echo ($context["type_compte_candidat_checked"] ?? null);
            echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b>Candidat</b>, recherchez une offre d'emploi
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"type_compte\" id=\"typeCompteSociete\" value=\"entreprise\" onclick=\"document.getElementById('champsCandidat').style.display = 'none';document.getElementById('divValiderFormulaire').style.display = 'block'; document.getElementById('champsEntreprise').style.display = 'block';\"  ";
            // line 113
            echo ($context["type_compte_societe_checked"] ?? null);
            echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b>Entreprise</b>, publiez vos offres d'emploi
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Champs personnalisés \"Candidat\" -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\" id=\"champsCandidat\" style=\"display: ";
            // line 123
            echo ($context["display_candidat"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Prénom :</label> *
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" tabindex=\"0\" name=\"prenom\" id=\"prenom\" value=\"";
            // line 126
            echo ($context["prenom"] ?? null);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Nom :</label> *
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" tabindex=\"0\" name=\"nom\" id=\"nom\" value=\"";
            // line 128
            echo ($context["nom"] ?? null);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Age :</label> *
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"selectpicker form-control\" tabindex=\"0\" name=\"date_naissance\" id=\"date_naissance\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option></option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>15</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>16</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>17</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>18</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>19</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>20</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>21</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>22</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>23</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>24</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>25</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>26 et +</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Ville :</label> *
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"search\" class=\"form-control\" tabindex=\"0\" name=\"ville\" id=\"ville\" value=\"";
            // line 149
            echo ($context["ville"] ?? null);
            echo "\" autocomplete=\"false\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- <label>Grande ville la plus proche de chez vous :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"search\" class=\"form-control\" tabindex=\"0\" name=\"ville_proche\" id=\"ville_proche\" value=\"";
            // line 152
            echo ($context["ville_proche"] ?? null);
            echo "\" />\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Région :</label> *
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"selectpicker form-control\" tabindex=\"0\" name=\"region\" id=\"region\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option></option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>AUVERGNE-RHONE-ALPES</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>BOURGOGNE-FRANCHE-COMTE</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>BRETAGNE</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>CENTRE-VAL DE LOIRE</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>CORSE</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>GUADELOUPE</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>GRAND EST</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>GUYANE</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>HAUTS-DE-FRANCE</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>ILE-DE-FRANCE</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>LA REUNION</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>MARTINIQUE</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>MAYOTTE</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>NORMANDIE</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>NOUVELLE-AQUITAINE</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>OCCITANIE</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>PAYS DE LA LOIRE</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>PROVENCE-ALPES-COTE D'AZUR</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Domaine d'activité :</label> *
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"search\" class=\"form-control \" tabindex=\"0\" name=\"domaine_principal\" id=\"domaine_principal\" value=\"";
            // line 178
            echo ($context["domaine_principal"] ?? null);
            echo "\" onselect=\"selectionDomaine();\" onclick=\"selectionDomaine();\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"rowDomaineArtisanat\" style=\"display: none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Domaine artisanat :</label> *
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"search\" class=\"form-control \" id=\"domaine_artisanat\" name=\"domaine_artisanat\" aria-describedby=\"domaine_artisanat\" value=\"";
            // line 182
            echo ($context["domaine_artisanat"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Niveau d'étude :</label> *
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"selectpicker form-control\" tabindex=\"0\" name=\"niveau_etude\" id=\"niveau_etude\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option></option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>CAP</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>BEP</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>BAC professionnel</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>BAC général et technologique</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>BAC+1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>BAC+2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>BAC+3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>BAC+4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>BAC+5</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>BAC+6</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Dernière école :</label> *
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" tabindex=\"0\" name=\"derniere_ecole\" id=\"derniere_ecole\" value=\"";
            // line 204
            echo ($context["derniere_ecole"] ?? null);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Téléphone mobile :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" tabindex=\"0\" name=\"tel_mobile\" id=\"tel_mobile\" value=\"";
            // line 206
            echo ($context["tel_mobile"] ?? null);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>CV : (Au format PDF uniquement)</label> *
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" name=\"cv\" id=\"cv\" accept=\"application/pdf\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Champs personnalisés \"Entreprise\" -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\" id=\"champsEntreprise\" style=\"display: ";
            // line 216
            echo ($context["display_societe"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Prénom :</label> *
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" tabindex=\"0\" name=\"societe_ident_prenom\" id=\"societe_ident_prenom\" value=\"";
            // line 219
            echo ($context["societe_ident_prenom"] ?? null);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Nom :</label> *
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" tabindex=\"0\" name=\"societe_ident_nom\" id=\"societe_ident_nom\" value=\"";
            // line 221
            echo ($context["societe_ident_nom"] ?? null);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Nom de la société :</label> *
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" tabindex=\"0\" name=\"societe_nom\" id=\"societe_nom\" value=\"";
            // line 223
            echo ($context["societe_nom"] ?? null);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Adresse de la société :</label> *
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" tabindex=\"0\" name=\"societe_adresse\" id=\"societe_adresse\" value=\"";
            // line 225
            echo ($context["societe_adresse"] ?? null);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Code postal :</label> *
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" tabindex=\"0\" name=\"societe_adresse_cp\" id=\"societe_adresse_cp\" value=\"";
            // line 227
            echo ($context["societe_adresse_cp"] ?? null);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Ville :</label> *
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" tabindex=\"0\" name=\"societe_adresse_ville\" id=\"societe_adresse_ville\" value=\"";
            // line 229
            echo ($context["societe_adresse_ville"] ?? null);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Région :</label> *
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"selectpicker form-control\" tabindex=\"0\" name=\"societe_region\" id=\"societe_region\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option></option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>AUVERGNE-RHONE-ALPES</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>BOURGOGNE-FRANCHE-COMTE</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>BRETAGNE</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>CENTRE-VAL DE LOIRE</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>CORSE</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>GUADELOUPE</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>GRAND EST</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>GUYANE</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>HAUTS-DE-FRANCE</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>ILE-DE-FRANCE</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>LA REUNION</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>MARTINIQUE</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>MAYOTTE</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>NORMANDIE</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>NOUVELLE-AQUITAINE</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>OCCITANIE</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>PAYS DE LA LOIRE</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>PROVENCE-ALPES-COTE D'AZUR</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Pays :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"selectpicker form-control\" tabindex=\"0\" name=\"societe_adresse_pays\" id=\"societe_adresse_pays\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>FRANCE</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>ALLEMAGNE</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>ANDORE</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>BELGIQUE</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>ESPAGNE</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>ITALIE</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>LUXEMBOURG</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>MONACO</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>SUISSE</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Téléphone :</label> *
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" tabindex=\"0\" name=\"societe_tel\" id=\"societe_tel\" value=\"";
            // line 269
            echo ($context["societe_tel"] ?? null);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>N° de SIRET :</label> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" tabindex=\"0\" name=\"societe_siret\" id=\"societe_siret\" value=\"";
            // line 271
            echo ($context["societe_siret"] ?? null);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>N° de TVA intracommunautaire :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" tabindex=\"0\" name=\"societe_num_tva_intra\" id=\"societe_num_tva_intra\" value=\"";
            // line 273
            echo ($context["societe_num_tva_intra"] ?? null);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- <label>N° d'exonération de TVA :</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" tabindex=\"0\" name=\"societe_num_exo_tva\" id=\"societe_num_exo_tva\" value=\"";
            // line 275
            echo ($context["societe_num_exo_tva"] ?? null);
            echo "\" /> -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Secteur d'activité :</label> *
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"selectpicker form-control\" tabindex=\"0\" name=\"societe_secteur_activite\" id=\"societe_secteur_activite\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option></option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>Administration - Fonction publique</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>Agroalimentaire</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>Artisanat</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>Association</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>Automobile</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>Banque - Assurance - Finance</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>Bois - Papier - Carton - Imprimerie</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>Chimie - Parachimie</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>Commerce - Négoce - Distribution</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>Marketing - Communication - Edition</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>BTP - Matériaux de construction</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>Culture - Sport - Loisir</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>Energie</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>Enseignement - Formation - Conseil</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>Environnement - Récupération</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>Equipement - Matériel pour activités professionnelles</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>Fabrication</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>Gestion - Administration des entreprises</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>Hôtellerie - Restauration</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>Immobilier</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>Industrie pharmaceutique</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>Informatique</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>Logistique - Transport</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>Matériel électrique - Electronique - Optique</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>Mécanique - Métallurgie</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>Minérais - Minéraux - Sidérurgie</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>Professions juridiques</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>Santé - Action sociale</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>Service aux particuliers - Collectivités - Entreprises</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>Textile - Habillement - Chaussure</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Effectif :</label> *
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" tabindex=\"0\" name=\"societe_effectif\" id=\"societe_effectif\" value=\"";
            // line 312
            echo ($context["societe_effectif"] ?? null);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 322
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 323
        // line 324
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"divValiderFormulaire\" style=\"display: ";
        // line 328
        echo ($context["display_submit_form"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"container mt-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\" style=\"text-align: center;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" tabindex=\"6\"  name=\"conditions\" id=\"conditions\"> <a href=\"";
        // line 334
        echo ($context["U_ALT_CGU"] ?? null);
        echo "\" target=\"_blank\">J'accepte les conditions générales d'utilisation</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 343
        echo "\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\" style=\"text-align: center;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 348
        echo ($context["S_HIDDEN_FIELDS"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" tabindex=\"7\" name=\"submit\" id=\"submit\" value=\"Inscription\" class=\"btn btn-success default-submit-action\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 351
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<script>


\t\t\t\t\t\t\t\t\t\t\tfunction validFormRegister() {
\t
\t\t\t\t\t\t\t\t\t\t\t\tvar typeCompteCandidat = document.getElementById('typeCompteCandidat').checked;
\t\t\t\t\t\t\t\t\t\t\t\tvar typeCompteEntreprise = document.getElementById('typeCompteSociete').checked;

\t\t\t\t\t\t\t\t\t\t\t\t//  alert('typeCompteCandidat :' + typeCompteCandidat);
\t\t\t\t\t\t\t\t\t\t\t\t // alert('typeCompteEntreprise :' + typeCompteEntreprise);

\t\t\t\t\t\t\t\t\t\t\t\tif (typeCompteCandidat) {

\t\t\t\t\t\t\t\t\t\t\t\t\tvar region = document.getElementById('region').value;
\t\t\t\t\t\t\t\t\t\t\t\t\tvar prenom = document.getElementById('prenom').value;
\t\t\t\t\t\t\t\t\t\t\t\t\tvar nom = document.getElementById('nom').value;
\t\t\t\t\t\t\t\t\t\t\t\t\tvar date_naissance = document.getElementById('date_naissance').value;
\t\t\t\t\t\t\t\t\t\t\t\t\tvar ville = document.getElementById('ville').value;
\t\t\t\t\t\t\t\t\t\t\t\t\tvar domaine_principal = document.getElementById('domaine_principal').value;
\t\t\t\t\t\t\t\t\t\t\t\t\tvar domaine_artisanat = document.getElementById('domaine_artisanat').value;
\t\t\t\t\t\t\t\t\t\t\t\t\tvar niveau_etude = document.getElementById('niveau_etude').value;
\t\t\t\t\t\t\t\t\t\t\t\t\tvar derniere_ecole = document.getElementById('derniere_ecole').value;
\t\t\t\t\t\t\t\t\t\t\t\t\t//var cv = document.getElementById('cv').value;

\t\t\t\t\t\t\t\t\t\t\t\t\tvar cv = \$('#cv').val(); 
\t\t\t\t\t\t\t\t\t\t\t\t\tif (cv =='') 
\t\t\t\t\t\t\t\t\t\t\t\t\t{ 
\t\t\t\t\t\t\t\t\t\t\t\t\t\talert(\"Erreur : Vous devez obligatoirement importer votre CV au format PDF\"); 
\t\t\t\t\t\t\t\t\t\t\t\t\t\treturn false; 
\t\t\t\t\t\t\t\t\t\t\t\t\t} 

\t\t\t\t\t\t\t\t\t\t\t\t\tif(region != '' && prenom != '' && nom != '' && date_naissance != ''
\t\t\t\t\t\t\t\t\t\t\t\t\t && ville != '' && domaine_principal != ''
\t\t\t\t\t\t\t\t\t\t\t\t\t && niveau_etude != '' && derniere_ecole != ''
\t\t\t\t\t\t\t\t\t\t\t\t//\t && cv != ''
\t\t\t\t\t\t\t\t\t\t\t\t\t ) {

\t\t\t\t\t\t\t\t\t\t\t\t\t\tif (domaine_principal == 'ARTISANAT' && domaine_artisanat == '') {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdocument.getElementById('rowDomaineArtisanat').style.display = 'block';
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talert(\"Erreur : Pour le domaine d'activité ARTISANAT, vous devez spécifié le domaine d'ARTISANAT spécifique.\");
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\telse
\t\t\t\t\t\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\t\t\t\t\talert(\"Erreur : Veuillez remplir les champs obligatoires marqués d'une étoile (*).\");
\t\t\t\t\t\t\t\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t\t\t\t\t\t\t\t}



\t\t\t\t\t\t\t\t\t\t\t\t} else if (typeCompteEntreprise) {

\t\t\t\t\t\t\t\t\t\t\t\t\tvar societe_ident_prenom = document.getElementById('societe_ident_prenom').value;
\t\t\t\t\t\t\t\t\t\t\t\t\tvar societe_ident_nom = document.getElementById('societe_ident_nom').value;
\t\t\t\t\t\t\t\t\t\t\t\t\tvar societe_nom = document.getElementById('societe_nom').value;
\t\t\t\t\t\t\t\t\t\t\t\t\tvar societe_adresse = document.getElementById('societe_adresse').value;
\t\t\t\t\t\t\t\t\t\t\t\t\tvar societe_adresse_cp = document.getElementById('societe_adresse_cp').value;
\t\t\t\t\t\t\t\t\t\t\t\t\tvar societe_adresse_ville = document.getElementById('societe_adresse_ville').value;
\t\t\t\t\t\t\t\t\t\t\t\t\tvar societe_region = document.getElementById('societe_region').value;
\t\t\t\t\t\t\t\t\t\t\t\t\tvar societe_tel = document.getElementById('societe_tel').value;
\t\t\t\t\t\t\t\t\t\t\t\t\tvar societe_secteur_activite = document.getElementById('societe_secteur_activite').value;
\t\t\t\t\t\t\t\t\t\t\t\t\tvar societe_effectif = document.getElementById('societe_effectif').value;
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\tif(societe_ident_prenom != '' && societe_ident_nom != '' && societe_nom != '' && societe_adresse != ''
\t\t\t\t\t\t\t\t\t\t\t\t\t && societe_adresse_cp != '' && societe_adresse_ville != ''
\t\t\t\t\t\t\t\t\t\t\t\t\t && societe_region != '' && societe_tel != ''
\t\t\t\t\t\t\t\t\t\t\t\t\t && societe_secteur_activite != '' && societe_effectif != ''
\t\t\t\t\t\t\t\t\t\t\t\t\t ) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\telse
\t\t\t\t\t\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\t\t\t\t\talert(\"Erreur : Veuillez remplir les champs obligatoires marqués d'une étoile (*).\");
\t\t\t\t\t\t\t\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t\t\t\t\t\t\t\t}


\t\t\t\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t\t\t\t\t\t\t}


\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</script>


\t\t\t\t\t\t\t\t<!-- FIN CONTENU -->
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>\t
\t\t</div>
\t</div>
</div>









<div class=\"pb-5\"></div>
";
        // line 477
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "ucp_register.html", 477)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_register.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  700 => 477,  571 => 351,  565 => 348,  558 => 343,  546 => 334,  537 => 328,  531 => 324,  530 => 323,  527 => 322,  514 => 312,  474 => 275,  469 => 273,  464 => 271,  459 => 269,  416 => 229,  411 => 227,  406 => 225,  401 => 223,  396 => 221,  391 => 219,  385 => 216,  372 => 206,  367 => 204,  342 => 182,  335 => 178,  306 => 152,  300 => 149,  276 => 128,  271 => 126,  265 => 123,  252 => 113,  243 => 107,  231 => 97,  228 => 96,  216 => 91,  209 => 90,  203 => 89,  197 => 88,  192 => 87,  185 => 86,  181 => 84,  176 => 83,  174 => 82,  164 => 74,  161 => 73,  160 => 72,  156 => 70,  155 => 69,  151 => 67,  150 => 66,  140 => 61,  135 => 60,  125 => 55,  118 => 54,  108 => 49,  103 => 48,  97 => 44,  95 => 43,  89 => 41,  86 => 40,  80 => 39,  70 => 34,  62 => 29,  33 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ucp_register.html", "");
    }
}
