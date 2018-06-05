<?php

/* user_welcome.txt */
class __TwigTemplate_c07386a42063a88c69fdbb2999523c1c927af9917e23977a8d184d7206695175 extends Twig_Template
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
        echo "Subject: Bienvenue sur « ";
        echo ($context["SITENAME"] ?? null);
        echo " »

";
        // line 3
        echo ($context["WELCOME_MSG"] ?? null);
        echo "

Veuillez conserver cet email dans vos archives. Les informations concernant votre compte sont les suivantes :

----------------------------
Nom d’utilisateur : ";
        // line 8
        echo ($context["USERNAME"] ?? null);
        echo "

Lien du site : ";
        // line 10
        echo ($context["U_BOARD"] ?? null);
        echo "
----------------------------

Votre mot de passe a été stocké en toute sécurité dans notre base de données et ne pourra pas être retrouvé. Dans le cas où vous l’oubliez, vous pourrez le réinitialiser en utilisant l’adresse de courriel associée à votre compte.

Nous vous remercions de votre inscription.

Cordialement,
L'équipe de Mon-Alternance
";
    }

    public function getTemplateName()
    {
        return "user_welcome.txt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 10,  33 => 8,  25 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "user_welcome.txt", "");
    }
}
