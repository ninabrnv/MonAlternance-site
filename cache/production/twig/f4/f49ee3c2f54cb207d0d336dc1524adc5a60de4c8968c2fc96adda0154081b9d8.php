<?php

/* ucp_remind.html */
class __TwigTemplate_505314f499d15e860e360288d58c6bac63f1c22af1364706536b243f7a6b67fd extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "ucp_remind.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<div class=\"row\" style=\"padding-top: 70px\">
\t<ul class=\"col-sm-2 clearfix\"></ul>
\t

\t<ul class=\"col clearfix\">

\t\t<form action=\"";
        // line 9
        echo ($context["S_PROFILE_ACTION"] ?? null);
        echo "\" method=\"post\" id=\"remind\">

\t\t<div class=\"panel\">
\t\t\t<div class=\"inner\">

\t\t\t<div class=\"content\">
\t\t\t\t<h2>";
        // line 15
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEND_PASSWORD");
        echo "</h2>

\t\t\t\t<fieldset>
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"username\">Nom utilisateur/Email ";
        // line 19
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t\t\t\t\t<dd><input class=\"inputbox narrow\" type=\"text\" name=\"username\" id=\"username\" size=\"25\" /></dd>
\t\t\t\t</dl>
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"email\">";
        // line 23
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EMAIL_ADDRESS");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EMAIL_REMIND");
        echo "</span></dt>
\t\t\t\t\t<dd><input class=\"inputbox narrow\" type=\"email\" name=\"email\" id=\"email\" size=\"25\" maxlength=\"100\" /></dd>
\t\t\t\t</dl>
\t\t\t\t<dl>
\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t<dd>";
        // line 28
        echo ($context["S_HIDDEN_FIELDS"] ?? null);
        echo "<input type=\"submit\" name=\"submit\" id=\"submit\" class=\"button1\" value=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
        echo "\" tabindex=\"2\" />&nbsp; <input type=\"reset\" value=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESET");
        echo "\" name=\"reset\" class=\"button2\" /></dd>
\t\t\t\t</dl>
\t\t\t\t";
        // line 30
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
\t\t\t\t</fieldset>
\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t\t</form>

\t</ul>
\t<ul class=\"col-sm-2 clearfix\"></ul>
</div>


";
        // line 43
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "ucp_remind.html", 43)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_remind.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 43,  83 => 30,  74 => 28,  63 => 23,  56 => 19,  49 => 15,  40 => 9,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ucp_remind.html", "");
    }
}
