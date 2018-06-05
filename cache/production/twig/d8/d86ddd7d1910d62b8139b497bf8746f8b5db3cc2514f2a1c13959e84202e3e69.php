<?php

/* user_activate_passwd.txt */
class __TwigTemplate_ccc604b75c88e8a37ee002d62eba6e393aa7e7092d811c0a4c348f3b5e75a1c5 extends Twig_Template
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
        echo "Subject: Activation d’un nouveau mot de passe

Bonjour ";
        // line 3
        echo ($context["USERNAME"] ?? null);
        echo ",

Vous recevez cette notification car vous (ou quelqu’un se faisant passer pour vous) avez demandé qu’un nouveau mot de passe vous soit envoyé pour votre compte sur « ";
        // line 5
        echo ($context["SITENAME"] ?? null);
        echo " ». Si vous n’avez pas demandé cette modification, veuillez alors l’ignorer. Si vous continuez à recevoir cette notification, veuillez contacter un administrateur du site.

Pour utiliser le nouveau mot de passe, vous avez besoin de l’activer. Pour cela, veuillez cliquer sur le lien ci-dessous :

";
        // line 9
        echo ($context["U_ACTIVATE"] ?? null);
        echo "

Si cela a fonctionné, vous pourrez vous connecter en utilisant le mot de passe suivant :

Mot de passe : ";
        // line 13
        echo ($context["PASSWORD"] ?? null);
        echo "

Vous pouvez modifier ce mot de passe dans le panneau de contrôle de l’utilisateur. Si vous éprouvez une quelconque difficulté durant ces étapes, veuillez contacter un administrateur du site.

";
        // line 17
        echo ($context["EMAIL_SIG"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "user_activate_passwd.txt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 17,  42 => 13,  35 => 9,  28 => 5,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "user_activate_passwd.txt", "");
    }
}
