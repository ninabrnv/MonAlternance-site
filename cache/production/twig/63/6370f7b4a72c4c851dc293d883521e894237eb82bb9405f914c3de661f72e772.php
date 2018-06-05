<?php

/* login_body.html */
class __TwigTemplate_a26e9355cd78fff4133fd15ae018d2b5aaf7870e0a5c0e7471808dd74163425d extends Twig_Template
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
        $value = "login";
        $context['definition']->set('NAV_SECTION', $value);
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "login_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<div class=\"container-fluid imageBackConnexion\">
\t<div calss=\"row\">

\t\t<div class=\"col\">

\t\t\t\t<img src=\"";
        // line 8
        echo ($context["T_IMAGES_PATH"] ?? null);
        echo "site/accueil/citation.png\" style=\"position: absolute; top:150px; left:50px\" >

\t\t</div>
\t\t<div class=\"col\">

\t\t\t<div class=\"container-fluid\" >

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"container pt-4 mt-4 mb-4\" style=\"background-color: rgba(185, 185, 185, 0.527); border: 1px solid #C0C0C0; border-radius: 10px; box-shadow: 3px 3px 6px 0 #A9A9A9; max-width: 450px\">

\t\t\t\t\t\t<div class=\"container pt-4 mb-4\" style=\"background-color: white; border: 1px solid #C0C0C0; border-radius: 10px; box-shadow: 3px 3px 6px 0 #A9A9A9;\">

\t\t\t\t\t\t\t<ul class=\"col-sm-12 clearfix\" style=\"text-align: center\">
\t\t\t\t\t\t\t\t<form action=\"";
        // line 21
        echo ($context["S_LOGIN_ACTION"] ?? null);
        echo "\" method=\"post\" autocomplete=\"off\" id=\"login\" data-focus=\"";
        if (($context["S_ADMIN_AUTH"] ?? null)) {
            echo ($context["PASSWORD_CREDENTIAL"] ?? null);
        } else {
            echo ($context["USERNAME_CREDENTIAL"] ?? null);
        }
        echo "\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"row justify-content-center mb-3\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"login-title\">Déjà inscrit ?</h2>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t\t\t\t\t<fieldset style=\"border: 0px\" ";
        // line 29
        if ( !($context["S_CONFIRM_CODE"] ?? null)) {
            echo "class=\"fields1\"";
        } else {
            echo "class=\"fields2\"";
        }
        echo ">
\t\t\t\t\t\t\t\t\t\t";
        // line 30
        if (($context["LOGIN_ERROR"] ?? null)) {
            echo "<div class=\"error\">";
            echo ($context["LOGIN_ERROR"] ?? null);
            echo "</div>";
        }
        // line 31
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"row justify-content-center mb-3\">

\t\t\t\t\t\t\t\t\t\t<input type=\"search\" tabindex=\"1\"  class=\"form-control alt-form-image-arobase\" style=\"width: 250px\" id=\"";
        // line 34
        echo ($context["USERNAME_CREDENTIAL"] ?? null);
        echo "\" name=\"";
        echo ($context["USERNAME_CREDENTIAL"] ?? null);
        echo "\" aria-describedby=\"email\" placeholder=\"Votre adresse email\">
\t\t\t\t\t\t\t\t\t\t<!-- <input type=\"text\" tabindex=\"1\" name=\"";
        // line 35
        echo ($context["USERNAME_CREDENTIAL"] ?? null);
        echo "\" id=\"";
        echo ($context["USERNAME_CREDENTIAL"] ?? null);
        echo "\" size=\"25\" value=\"";
        echo ($context["USERNAME"] ?? null);
        echo "\" class=\"inputbox autowidth\" /> -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"row justify-content-center mb-2\">
\t\t\t\t\t\t\t\t\t\t<input type=\"password\" tabindex=\"2\" id=\"";
        // line 38
        echo ($context["PASSWORD_CREDENTIAL"] ?? null);
        echo "\" name=\"";
        echo ($context["PASSWORD_CREDENTIAL"] ?? null);
        echo "\" style=\"width: 250px\" class=\"form-control alt-form-image-cadena\" aria-describedby=\"mot de passe\" placeholder=\"Votre mot de passe\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t";
        // line 42
        if ((($context["CAPTCHA_TEMPLATE"] ?? null) && ($context["S_CONFIRM_CODE"] ?? null))) {
            // line 43
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            $value = 3;
            $context['definition']->set('CAPTCHA_TAB_INDEX', $value);
            // line 44
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            $location = (("" . ($context["CAPTCHA_TEMPLATE"] ?? null)) . "");
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate((("" . ($context["CAPTCHA_TEMPLATE"] ?? null)) . ""), "login_body.html", 44)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 45
            echo "\t\t\t\t\t\t\t\t\t\t";
        }
        // line 46
        echo "\t\t\t\t\t\t\t\t\t\t";
        if (($context["S_DISPLAY_FULL_LOGIN"] ?? null)) {
            // line 47
            echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"row justify-content-center mt-2\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 49
            if (($context["S_AUTOLOGIN_ENABLED"] ?? null)) {
                echo "<br><label for=\"autologin\"><input type=\"checkbox\" name=\"autologin\" id=\"autologin\" tabindex=\"4\" checked=\"true\"/> Rester connecté</label>";
            }
            // line 50
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (false) {
                // line 51
                echo "\t\t\t\t\t\t\t\t\t\t<label for=\"viewonline\"><input type=\"checkbox\" name=\"viewonline\" id=\"viewonline\" tabindex=\"5\" /> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("HIDE_ME");
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 53
            echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 55
        echo "\t\t\t\t\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t\t\t\t\t";
        // line 56
        echo ($context["S_LOGIN_REDIRECT"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
        // line 58
        echo ($context["S_HIDDEN_FIELDS"] ?? null);
        echo "<button type=\"submit\" name=\"login\" tabindex=\"6\" class=\"btn btn-danger\" style=\"width: 200px\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN");
        echo "</button>
\t\t\t\t\t\t\t\t\t\t\t\t<!--<input type=\"submit\" name=\"login\" tabindex=\"6\" value=\"";
        // line 59
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN");
        echo "\" class=\"button1\" />-->
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 62
        if ((($context["S_DISPLAY_FULL_LOGIN"] ?? null) && (($context["U_SEND_PASSWORD"] ?? null) || ($context["U_RESEND_ACTIVATION"] ?? null)))) {
            // line 63
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (($context["U_SEND_PASSWORD"] ?? null)) {
                echo "<div class=\"row justify-content-center\"><a href=\"";
                echo ($context["U_SEND_PASSWORD"] ?? null);
                echo "\">Mot de passe oublié ?</a></div>";
            }
            // line 64
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (($context["U_RESEND_ACTIVATION"] ?? null)) {
                echo "<div class=\"row justify-content-center\"><a href=\"";
                echo ($context["U_RESEND_ACTIVATION"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESEND_ACTIVATION");
                echo "</a></div>";
            }
            // line 65
            echo "\t\t\t\t\t\t\t\t\t\t";
        }
        // line 66
        echo "\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        // line 69
        if (( !($context["S_ADMIN_AUTH"] ?? null) && ($context["PROVIDER_TEMPLATE_FILE"] ?? null))) {
            // line 70
            echo "\t\t\t\t\t\t\t\t\t\t";
            $location = (("" . ($context["PROVIDER_TEMPLATE_FILE"] ?? null)) . "");
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate((("" . ($context["PROVIDER_TEMPLATE_FILE"] ?? null)) . ""), "login_body.html", 70)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 71
            echo "\t\t\t\t\t\t\t\t\t";
        }
        // line 72
        echo "\t\t\t\t\t\t\t\t\t


\t\t\t\t\t\t\t\t\t";
        // line 75
        if (( !($context["S_ADMIN_AUTH"] ?? null) && ($context["S_REGISTER_ENABLED"] ?? null))) {
            // line 76
            echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t<hr class=\"dashed\" />
\t\t\t\t\t\t\t\t\t\t\t<b>Ou</b>
\t\t\t\t\t\t\t\t\t\t\t<hr class=\"dashed\" />
\t\t\t\t\t\t\t\t\t\t\t<fieldset style=\"border: 0px\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 83
            echo ($context["U_REGISTER"] ?? null);
            echo "\"><button type=\"button\" class=\"btn btn-primary\" style=\"width: 200px\">Créer un compte</button></a>
\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        }
        // line 89
        echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>\t
\t\t</div>
\t</div>
</div>





<br><br><br><br><br><br>
";
        // line 112
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "login_body.html", 112)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "login_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 112,  253 => 89,  244 => 83,  235 => 76,  233 => 75,  228 => 72,  225 => 71,  212 => 70,  210 => 69,  205 => 66,  202 => 65,  193 => 64,  186 => 63,  184 => 62,  178 => 59,  172 => 58,  167 => 56,  164 => 55,  160 => 53,  154 => 51,  151 => 50,  147 => 49,  143 => 47,  140 => 46,  137 => 45,  124 => 44,  120 => 43,  118 => 42,  109 => 38,  99 => 35,  93 => 34,  88 => 31,  82 => 30,  74 => 29,  57 => 21,  41 => 8,  33 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "login_body.html", "");
    }
}
