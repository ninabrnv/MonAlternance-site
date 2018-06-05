<?php

/* alt_accueil_carrousel_entreprises.html */
class __TwigTemplate_787b3e31789f01339794ae2bc2db02008ef4496daf9d24c496f648e0c954ea21 extends Twig_Template
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
        echo "
<div class=\"container-fluid d-none d-md-block mt-2\" style=\"height: 140px; background-color: rgba(226, 219, 219, 0.3);\">
    <div class=\"row\" style=\"text-align: center\">
        <div class=\"col\" >
            <h1 style=\"font-size: 26px; color : rgb(88, 88, 88); text-shadow: 2px 2px #d4d4d4;\">Vous les connaissez ?</h1>
            <!-- <div style=\"background-color: grey; border-top: 1px solid rgba(241, 240, 240, 0.849); width : 300px;  \" ></div> -->
            <img class=\"mt-2\" src=\"";
        // line 7
        echo ($context["T_IMAGES_PATH"] ?? null);
        echo "site/logos/bande-logo.gif\" alt=\"Entreprises qui recrutent\">
        </div>
    </div>   
    
</div>      
";
    }

    public function getTemplateName()
    {
        return "alt_accueil_carrousel_entreprises.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "alt_accueil_carrousel_entreprises.html", "");
    }
}
