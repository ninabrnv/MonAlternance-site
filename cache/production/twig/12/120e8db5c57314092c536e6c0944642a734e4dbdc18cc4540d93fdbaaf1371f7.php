<?php

/* alt_admin_paiements.html */
class __TwigTemplate_9fbce53ff227dc8b7d2c6fe88792fa94bcd2cb6ffdcb745330246bbe97aaff98 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "alt_admin_paiements.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "

<h1 class=\"ml-2\">Liste des 200 dernières transactions bancaires</h1>

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
        echo "\">Comptes candidats</a>
              <a class=\"nav-link\" href=\"";
        // line 13
        echo ($context["U_ALT_ADMIN_ADMINS"] ?? null);
        echo "\">Comptes admins</a>
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
        echo "\"><b>Derniers paiements</b></a>
              <a class=\"nav-link\" href=\"";
        // line 17
        echo ($context["U_ALT_ADMIN_CVTHEQUE"] ?? null);
        echo "\">CVthèque</a>
              
            
        </div>
        <div class=\"col-9 col-md-10\" >
      
            <div class=\"card d-none d-md-block d-lg-block d-xl-block\">
                <div class=\"card-header\">
                    Filtres sur la liste des paiements
                </div>
                <form id=\"formFiltrePaiement\" class=\"p-2\" method=\"post\" action=\"";
        // line 27
        echo ($context["U_ALT_ADMIN_PAIEMENTS"] ?? null);
        echo "\">
                    <input type=\"hidden\" name=\"action\" value=\"filtreEntreprise\">
                    <div class=\"form-row align-items-center\">
                        <div class=\"col-auto my-1\">
                            <label class=\"sr-only\" for=\"filtreEntreprise\">Entreprise</label>
                            <input type=\"text\" class=\"form-control mb-2\" name=\"filtreEntreprise\" id=\"filtreEntreprise\" placeholder=\"Entreprise\" value=\"";
        // line 32
        echo ($context["filtreEntreprise"] ?? null);
        echo "\">
                        </div>
                        
                        <div class=\"col-auto my-1\">
                            <label class=\"sr-only\" for=\"filtreEmail\">Email</label>
                            <input type=\"text\" class=\"form-control mb-2\" name=\"filtreEmail\" id=\"filtreEmail\" placeholder=\"Email\" value=\"";
        // line 37
        echo ($context["filtreEmail"] ?? null);
        echo "\">
                        </div>
                        <div class=\"col-auto my-1\">
                            <label class=\"sr-only\" for=\"filtreTel\">Tél</label>
                            <input type=\"text\" class=\"form-control mb-2\" name=\"filtreTel\" id=\"filtreTel\" placeholder=\"Tél\" value=\"";
        // line 41
        echo ($context["filtreTel"] ?? null);
        echo "\">
                        </div>
                        <div class=\"col-auto my-1\">
                            <label class=\"sr-only\" for=\"filtreMontant\">Montant</label>
                            <input type=\"text\" class=\"form-control mb-2\" name=\"filtreMontant\" id=\"filtreMontant\" placeholder=\"Montant\" value=\"";
        // line 45
        echo ($context["filtreMontant"] ?? null);
        echo "\">
                        </div>
                        <div class=\"col-auto my-1\">
                            <label class=\"sr-only\" for=\"filtreStatut\">Statut</label>
                            <input type=\"text\" class=\"form-control mb-2\" name=\"filtreStatut\" id=\"filtreStatut\" placeholder=\"Statut\" value=\"";
        // line 49
        echo ($context["filtreStatut"] ?? null);
        echo "\">
                        </div>
                  

                        <div class=\"col-auto my-1\">
                            <label class=\"sr-only\" for=\"filtreSiret\">Siret</label>
                            <input type=\"text\" class=\"form-control mb-2\" name=\"filtreSiret\" id=\"filtreSiret\" placeholder=\"Siret\" value=\"";
        // line 55
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


            <div class=\"container-fluid\">
                            <table class=\"table\">
                                <thead>
                                <tr>
                                    <th>&nbsp;#</th>
                                    <th>Date transaction</th>
                                    <th>Entreprise</th>
                                    <th>Email</th>
                                    <th>Tél</th>
                                    <th>Siret</th>
                                    <th>Montant</th>
                                    <th>Statut</th> 
                                    <th>Date paiement</th>
                                    <!-- <th>Montant réelement payé</th> -->
                                    <th>Annonce (actives)</th>
                                </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "paiements", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["paiements"]) {
            echo "  
                                    <tr>
                                        <td><input class=\"ml-1\" type=\"checkbox\" class=\"form-check-input\" id=\"selectionnerPaiement";
            // line 88
            echo $this->getAttribute($context["paiements"], "id", array());
            echo "\"></td>
                                        <td nowrap>";
            // line 89
            echo $this->getAttribute($context["paiements"], "transaction_date", array());
            echo "</td>
                                        <td nowrap>";
            // line 90
            echo $this->getAttribute($context["paiements"], "societe_nom", array());
            echo "</td>
                                        <td nowrap>";
            // line 91
            echo $this->getAttribute($context["paiements"], "email", array());
            echo "</td>
                                        <td nowrap>";
            // line 92
            echo $this->getAttribute($context["paiements"], "societe_tel", array());
            echo "</td>
                                        <td nowrap>";
            // line 93
            echo $this->getAttribute($context["paiements"], "societe_siret", array());
            echo "</td>
                                        <td nowrap>";
            // line 94
            echo $this->getAttribute($context["paiements"], "montant", array());
            echo " €</td>
                                        <td nowrap>";
            // line 95
            echo $this->getAttribute($context["paiements"], "statut", array());
            echo "</td>
                                        <td nowrap>";
            // line 96
            echo $this->getAttribute($context["paiements"], "date_paiement", array());
            echo "</td>
                                        <!-- <td>";
            // line 97
            echo $this->getAttribute($context["paiements"], "montant_reelement_paye", array());
            echo "</td> -->
                                        <td nowrap><a href=\"";
            // line 98
            echo $this->getAttribute($context["paiements"], "lien", array());
            echo "\" target=\"_blank\">";
            echo $this->getAttribute($context["paiements"], "annonce_id", array());
            echo "</a></td>
                                    </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paiements'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo " 
                                </tbody>
                            </table>
                        </div>
               
        </div>
    </div>
</div>

<br><br><br>

";
        // line 111
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "alt_admin_paiements.html", 111)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 112
        echo "


                    ";
    }

    public function getTemplateName()
    {
        return "alt_admin_paiements.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 112,  233 => 111,  220 => 100,  209 => 98,  205 => 97,  201 => 96,  197 => 95,  193 => 94,  189 => 93,  185 => 92,  181 => 91,  177 => 90,  173 => 89,  169 => 88,  162 => 86,  128 => 55,  119 => 49,  112 => 45,  105 => 41,  98 => 37,  90 => 32,  82 => 27,  69 => 17,  65 => 16,  61 => 15,  57 => 14,  53 => 13,  49 => 12,  45 => 11,  41 => 10,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "alt_admin_paiements.html", "");
    }
}
