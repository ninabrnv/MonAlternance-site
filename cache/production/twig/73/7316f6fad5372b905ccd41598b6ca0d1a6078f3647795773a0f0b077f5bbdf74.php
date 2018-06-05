<?php

/* alt_entreprises_aide_a_apprentissage.html */
class __TwigTemplate_d8a636badc7ae6f698f61af51785af5337132dccc97a0683f3fd48685fd820cc extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "alt_entreprises_aide_a_apprentissage.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col\">
                <hr style=\"height: 1px; color: rgb(0, 0, 0); background-color: rgb(0, 0, 0); width: 100%; border: none;\">
        </div>
        <div class=\"col-auto\" style=\"text-align: center; color: black; font-family:Helvetica;\">
            <h1>AIDES A L'APPRENTISSAGE</h1>
            
        </div>
        <div class=\"col\">
                <hr style=\"height: 1px; color: rgb(0, 0, 0); background-color: rgb(0, 0, 0); width: 100%; border: none;\">
        </div>
    </div>
    <div class=\"row justify-content-center m-2\">
        <div class=\"col-12 col-sm-9 col-md-9 col-lg-9\" role=\"main\" style=\"border-style: solid; border-width: thin; border-color: grey\">
           
            <div style=\"text-align: center\">
                    <img src=\"";
        // line 19
        echo ($context["T_IMAGES_PATH"] ?? null);
        echo "site/pages/aide-a-l-apprentissage.png\" class=\"mt-2\">
            </div>  
    
            <br><br>
                <div class=\"col-auto\" style=\"color: black; font-family:Helvetica;\">
                <p style=\"font-size : 16px\">
                    <h2>Aides à l'Apprentissage</h2>
            <br>Afin d’aider les <b>entreprises</b> à recruter des apprentis l’Etat a mis plusieurs dispositifs en place.
            <br>Si votre entreprise a moins de 250 salariés vous pouvez vous référer à l’onglet <a href=\"http://mon-alternance.fr/entreprises-aide-aux-tpe.php\" target=\"_blank\">Aides aux TPE</a>.
             Ces aides sont cumulables. 
            <br>Voici les autres aides dont vous pouvez bénéficier si vous recrutez un <b>alternant</b> : 
            <hr style=\"height: 2px; color: rgb(0, 0, 0); background-color: rgb(255, 0, 0); width: 100%; border: none;\">
            
            <br>
            <h2>Bonus alternants :
            <br>Déduction fiscale de taxe d’apprentissage</h2>
                    Si votre <b>entreprise</b> a plus de 250 <b>salariés</b> / Vous êtes redevables de la taxe d’<b>apprentissage</b> / Vous dépassez le seuil de 5% de <b>contrats</b> favorisant l’insertion professionnelle et l’<b>alternance</b> alors vous bénéficiez d’une créance à déduire du hors quota de la taxe d’apprentissage (TA). 
            <br>Le montant est à calculer par vous-même selon la formule :
            <br>% d’<b>alternants</b> ouvrant droit à l’aide x effectif annuel moyen au 31 décembre de l’année précédente x 400€ par alternant. 
            <br><br>
            <h2>Aide pour l’embauche d’un travailleur handicapé</h2>
            Dans les 3 mois de la date d’embauche d’un <b>apprenti</b> reconnu <b>travailleur handicapé</b> vous pouvez faire la demande auprès de l’<b>Agefiph</b> pour cette aide.
            <br><br>Les montants varient selon la durée du contrat :
            <br>- 1.000€ pour un contrat de 6 mois
            <br>- 2.000€ pour un contrat de 12 mois
            <br>- 3.000€ pour un contrat de 18 mois 
            <br>- 4.000€ pour un contrat de 24 mois
            <br>- 5.000€ pour un contrat de 30 mois 
            <br>- 6.000€ pour un contrat de 36 mois
            <br>- 7.000€ pour un CDI
            <br>Non cumulable avec l’aide à l’<b>insertion professionnelle</b> de l’Agefiph.
            <br>La demande peut être déposée par vous ou par l’<b>alternant</b>. 
            <br><br>
            <h2>Aide pour la pérennisation d’un travailleur handicapé en contrat d’apprentissage </h2>
            De même manière que l’aide précédente, la demande se fait dans les 3 mois de la date d’embauche de l’alternant reconnu handicapé auprès de l’Agefiph.
            <br><br>Les montants varient selon le type de <b>contrat</b> : 
            <br>- 500€ pour un CDD supérieur à 12 mois à temps partiel (de plus de 24 heures)
            <br>- 1.000€ pour un CDD supérieur à 12 mois à temps plein
            <br>- 1.000€ pour un CDI à temps partiel (de plus de 24 heures)
            <br>- 2.000€ pour un CDI à temps plein
            <br>Non cumulable avec l’aide à l’insertion professionnelle de l’Agefiph. La demande peut être déposée par vous ou par l’<b>alternant</b>. 

          
           <br><br>
        </div>         
        <div class=\"col-12 col-sm-3 col-md-3 col-lg-3\" role=\"complementary\" >

            <script async src=\"//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>
            <!-- Test -->
            <ins class=\"adsbygoogle\"
                 style=\"display:block\"
                 data-ad-client=\"ca-pub-5250430950478493\"
                 data-ad-slot=\"4948269035\"
                 data-ad-format=\"auto\"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>

<!--
            <div class=\"card text-white m-1\"  style=\"min-width: 10rem; max-width: 20rem; background: rgb(27, 134, 235); text-align: center\">
                <div class=\"card-header\">DOSSIER SPECIAL<br>ALTERNANCE</div>
                <div class=\"card-body\" style=\"background: rgb(169, 207, 243);\">
                    <p class=\"card-text\" style=\"color: black\">UN TREMPLIN<br>VERS<br>L'EMPLOI ?</p>
                </div>
                <div >
                    <img src=\"";
        // line 84
        echo ($context["T_IMAGES_PATH"] ?? null);
        echo "site/accueil/femme-tablette.jpg\" style=\"width: 100%\"> 
                </div>
                <div style=\"background: rgb(27, 134, 235); text-align: center\" class=\"mb-2\">
                    TEMOIGNAGES
                    <br>
                    <input type=\"submit\" name=\"submit\" id=\"submit\" value=\"Voir le dossier\" class=\"btn btn-info default-submit-action\" />
                </div>
            </div>
-->
        </div>
    </div>
</div>
";
        // line 96
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "alt_entreprises_aide_a_apprentissage.html", 96)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "alt_entreprises_aide_a_apprentissage.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 96,  118 => 84,  50 => 19,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "alt_entreprises_aide_a_apprentissage.html", "");
    }
}
