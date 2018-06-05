<?php

/* alt_candidats_les_stages_en_entreprises.html */
class __TwigTemplate_9f83c6f64d95001d853d9cac5f08e5542032b352cea60d84aea55780743eeabb extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "alt_candidats_les_stages_en_entreprises.html", 1)->display($context);
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
                <h1>LES STAGES EN ENTREPRISE</h1>
                
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
        echo "site/pages/les-stages-en-entreprise.png\" class=\"mt-2\">
                </div>
                 
                
                <br><br>
                <div class=\"col-auto\" style=\"color: black; font-family:Helvetica;\">
                <p style=\"font-size : 16px\">
                    <h2>Les Stages en Entreprise</h2>

                    Un <b>stage</b> correspond à une mise en situation temporaire en milieu <b>professionnel</b>, permettant à l'<b>élève</b> ou l'<b>étudiant</b> d'acquérir des compétences professionnelles en lien avec sa formation et de se voir confier des missions conformes au projet pédagogique de son établissement d'enseignement.
                    <hr style=\"height: 2px; color: rgb(0, 0, 0); background-color: rgb(255, 0, 0); width: 100%; border: none;\">
                    
                    <br><h2>Conditions de recours à un stagiaire</h2>
                    En l'absence de <b>contrat de travail</b>, un <b>stage</b> d'étudiant ne doit pas être proposé pour : 
                    <br>   - Remplacer un salarié en cas d'absence, de suspension de son contrat de travail ou de <b>licenciement</b> ; 
                    <br>   - Exécuter une tâche régulière correspondant à un poste de travail permanent (le stagiaire n'a pas d'obligation de production comme un salarié) ; 
                    <br>   - Faire face à un accroissement temporaire d'activité ; 
                    <br>   - Occuper un <b>emploi</b> saisonnier
                    <br><br> Sont interdits les stages hors cursus pédagogique, c'est-à-dire non inscrits dans un cursus scolaire ou universitaire.
                    <br> Les <b>stages</b> doivent être intégrés à un cursus de formation dont le volume pédagogique d'enseignement effectué en présence des élèves ou des étudiants est de 200 heures minimum par année d'enseignement.
                    <br><br> Un <b>stagiaire</b> n'étant pas considéré comme un salarié, l'employeur n'a pas à effectuer de déclaration préalable à l'embauche (DPAE). Mais il doit mentionner dans une partie spécifique du registre unique du personnel, dans leur ordre d'arrivée, les nom et prénoms des stagiaires accueillis dans l'établissement. 
                    <br> Il est interdit de confier au stagiaire des tâches dangereuses pour sa santé ou sa sécurité.
                   
                    <br><br>
                    
                    <h2>Durée maximale d'un stage</h2>
                   
                    Un stage ne peut pas dépasser 6 mois par année d'enseignement. 
                    <br>Si le stage est réalisé par périodes fractionnées au cours d'une année d'enseignement, sa durée est de 924 heures au maximum sur l'année.
                    
                    <br><br><u>À noter</u> : en cas d'embauche du stagiaire, dans les 3 mois après la fin du stage, la durée du stage est déduite de la période d'essai et prise en compte pour le calcul des droits liés à l'ancienneté.
                    <br><br>
                    
                    <h2>Nombre de stagiaires autorisés</h2>

                    Dans un organisme d'accueil d'au moins 20 <b>salariés</b>, le nombre de stagiaires dont la convention de stage est en cours pendant une même semaine civile ne peut pas dépasser 15 % de l'effectif (20 % pour les stages obligatoires en milieu professionnel : contrat en alternance, par exemple).
                    <br>Par exemple, 7 stagiaires étudiants maximum peuvent être accueillis simultanément dans une <b>entreprise</b> de 45 salariés (45 x 15 % = 6,75), l'effectif étant arrondi à l'entier supérieur.
                    <br>Les entreprises de moins de 20 salariés peuvent accueillir 3 stagiaires maximum en même temps (ou 5 pour les périodes de formation en milieu professionnel). 
                    <br>Chaque tuteur ne peut suivre que 3 stagiaires au maximum au cours de la même période.
                    <br><br>
                    
                    <h2>Convention obligatoire</h2>
                    
                    
                    Les <b>stages</b> doivent obligatoirement se dérouler dans le cadre d'une <b>convention</b>, qui doit être conforme à un modèle fixé par arrêté, signée entre :
                    <br>- Le stagiaire (et, s'il est mineur, son représentant légal) ;
                    <br>- L'organisme d'accueil : entreprise, administration publique, collectivité territoriale, établissement de santé, association ou tout autre organisme ;
                    <br>- L'établissement d'enseignement ou de formation ;
                    <br>- L'enseignant référent au sein de l'<b>établissement d'enseignement</b> ;
                    <br>- Le tuteur de stage au sein de l'organisme d'accueil.
                    <br><br>
                    La <b>convention</b> doit obligatoirement mentionner ou préciser :
                    <br>- L'intitulé complet du cursus ou de la formation du stagiaire et son volume horaire par année ou semestre d'enseignement ;
                    <br>- Les activités confiées au stagiaire ;
                    <br>- Les noms de l'enseignant référent et du tuteur ;
                    <br>- Les dates de début et de fin du stage et la durée hebdomadaire maximale de présence du stagiaire ;
                    <br>- Les modalités d'autorisation d'absence ;
                    <br>- Le taux horaire de la gratification, calculée sur la base de la présence effective du stagiaire, et les modalités de son versement ;
                    <br>- Les avantages éventuels dont le stagiaire peut bénéficier (restauration, hébergement ou remboursement de frais par exemple) ;
                    <br>- Le régime de protection sociale dont bénéficie le stagiaire, notamment en cas d'accident de travail.
                    <br><br>
                    L'<b>employeur</b> doit tenir à jour la liste des conventions de stage conclues et inscrire les noms et prénoms des stagiaires accueillis dans une partie spécifique du registre unique du personnel.
                    <br>L'inspecteur du travail peut demander une copie des <b>conventions de stage</b> à l'établissement d'enseignement ou à l'organisme d'accueil.
                    <br>
                    <br>Si le stage a lieu à l'étranger, doit être annexée à la convention de stage une fiche d'information présentant la réglementation du pays d'accueil sur les droits et devoirs du stagiaire.
                    <br><br>S'il s'agit d'un stagiaire étranger, l'organisme d'accueil doit, 2 mois au moins avant le début du stage, transmettre au préfet pour visa la convention de stage par lettre recommandée avec avis de réception.
                    <br>En cas d'accord, la convention visée est transmise à l'étudiant étranger avant son entrée en France.
                    <br>Sans réponse dans les 30 jours (ou 15  jours dans le cadre d'un programme de coopération européen ou intergouvernemental), la validation de la convention est considérée comme refusée.
                    <br><br>
                    
                    <h2>Gratification</h2>
                    
                    Un <b>employeur</b> qui accueille un stagiaire plus de 2 mois (soit l'équivalent de 44 jours à 7 heures par jour), au cours de la même année scolaire ou universitaire, doit obligatoirement lui verser une gratification minimale. 
                    <br> La <b>gratification</b> est obligatoire dès lors que le stagiaire est présent dans l'organisme d'accueil à partir de la 309ème heure incluse, même de façon non continue. 
                    <br> En dessous de ce seuil de durée, la gratification reste facultative pour l'employeur. 
                    <br> Dans certaines conditions, cette gratification bénéficie d'une franchise de cotisations sociales.
                    <br><br>
            
                    <h2>Attestation de stage</h2>
                    
                    En fin de stage, l'organisme d'accueil doit remettre au stagiaire une attestation de stage, qui peut être conforme à un modèle fixé par arrêté. 
                    <br> Elle doit mentionner la durée effective totale du stage et, le cas échéant, le montant total de la gratification versée.
                    <br><br>
                    
                    <h2>Congés</h2>
                    
                    En cas de grossesse, de paternité ou d'adoption, le stagiaire bénéficie de <b>congés</b> et d'autorisations d'absence d'une durée équivalente à ceux prévus pour les salariés. 
                    <br> Pour les stages supérieurs à 2 mois uniquement, la convention de stage doit prévoir la possibilité de congés et d'autorisations d'absence pour le stagiaire.
                    <br><br> Cette possibilité est facultative lorsque la durée du stage est inférieure à 2 mois. 
                    <br> La <b>rémunération</b> des congés est facultative pour l'employeur. Pendant un congé de grossesse, de paternité ou d'adoption, ou autres autorisations d'absence, prévus à la convention, le maintien de la gratification n'est pas obligatoire, car celle-ci est calculée sur le nombre d'heures de présence effective du stagiaire.
                    <br>Mais elle reste possible.
                    <br><br>
                    
                    <h2>Droits et avantages du stagiaire</h2>
                    
                    Même si le stagiaire n'est pas considéré comme un <b>salarié</b>, il peut bénéficier de certains droits et avantages octroyés aux salariés (accès aux activités sociales et culturelles proposées par le comité d'entreprise par exemple). 
                    <br>Le remboursement des frais ne doit pas être compris dans la gratification mensuelle : ces indemnités doivent être payées en plus.<br>
                    <br>
                    
                    <h2>Frais de repas</h2>

                    Le stagiaire doit avoir accès au restaurant d'entreprise ou aux titres-restaurant dans les mêmes conditions que les salariés.
                    <br>
                    <br><h2>Frais de transport</h2>

                    L'employeur est dans l'obligation de rembourser une part des frais de transport engagés pour effectuer le <b>stage</b>, dans les mêmes conditions que pour les salariés.
                    <br>
                    <br>
                    <br>Source : <a href=\"https://www.service-public.fr/professionnels-entreprises/vosdroits/F20559\" target=\"_blank\">Service-public.fr</a>
                    
             </p>                
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
        // line 151
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
        // line 163
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "alt_candidats_les_stages_en_entreprises.html", 163)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "alt_candidats_les_stages_en_entreprises.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 163,  185 => 151,  50 => 19,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "alt_candidats_les_stages_en_entreprises.html", "");
    }
}
