<?php

/* alt_admin.html */
class __TwigTemplate_bd00013e53861252cc7fd90c734a07db67bee2346d20d4e3fa12ee38c978016d extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "alt_admin.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "

<h1 class=\"ml-2\">Administration</h1>

<div class=\"container-fluid\">
    <div class=\"row\">  
        <div class=\"col-3\">
                <a class=\"nav-link active\" href=\"";
        // line 9
        echo ($context["U_ALT_MODERATEUR"] ?? null);
        echo "\"><b>Accueil admin</b></a>
                <a class=\"nav-link\" href=\"";
        // line 10
        echo ($context["U_ALT_ADMIN_ENTREPRISES"] ?? null);
        echo "\">Comptes entreprises</a>
                <a class=\"nav-link\" href=\"";
        // line 11
        echo ($context["U_ALT_ADMIN_CANDIDATS"] ?? null);
        echo "\">Comptes candidats</a>
                <a class=\"nav-link\" href=\"";
        // line 12
        echo ($context["U_ALT_ADMIN_ADMINS"] ?? null);
        echo "\">Compte admins</a>
                <a class=\"nav-link\" href=\"";
        // line 13
        echo ($context["U_ALT_ADMIN_ANNONCES"] ?? null);
        echo "\">Annonces</a>
                <a class=\"nav-link\" href=\"";
        // line 14
        echo ($context["U_ALT_ADMIN_CANDIDATURES"] ?? null);
        echo "\">Dernières candidatures</a>
                <a class=\"nav-link\" href=\"";
        // line 15
        echo ($context["U_ALT_ADMIN_PAIEMENTS"] ?? null);
        echo "\">Derniers paiements</a>
                <a class=\"nav-link\" href=\"";
        // line 16
        echo ($context["U_ALT_ADMIN_CVTHEQUE"] ?? null);
        echo "\">CVthèque</a>
                
        </div>
        <div class=\"col-9\">
            <h1>Stats</h1>
            Nb de comptes \"candidats\" créés ce mois-ci : <b>";
        // line 21
        echo ($context["nb_inscription_candidats"] ?? null);
        echo "</b>
            <br>Nb de comptes \"entreprises\" créés ce mois-ci : <b>";
        // line 22
        echo ($context["nb_inscription_entreprises"] ?? null);
        echo "</b>


        </div>
    </div>
</div>

<br><br><br>

";
        // line 31
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "alt_admin.html", 31)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "alt_admin.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 31,  80 => 22,  76 => 21,  68 => 16,  64 => 15,  60 => 14,  56 => 13,  52 => 12,  48 => 11,  44 => 10,  40 => 9,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "alt_admin.html", "");
    }
}
