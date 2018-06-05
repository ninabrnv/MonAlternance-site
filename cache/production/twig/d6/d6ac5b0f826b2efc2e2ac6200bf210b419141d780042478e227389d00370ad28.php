<?php

/* viewtopic_print.html */
class __TwigTemplate_7bcd8b116f6b206ce94015c16aa0d87522565821117112497d34a813c5cf6e12 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo ($context["S_CONTENT_DIRECTION"] ?? null);
        echo "\" lang=\"";
        echo ($context["S_USER_LANG"] ?? null);
        echo "\">
<head>
<meta charset=\"utf-8\" />
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"robots\" content=\"noindex\" />
";
        // line 7
        echo ($context["META"] ?? null);
        echo "
<title>";
        // line 8
        echo ($context["SITENAME"] ?? null);
        echo " &bull; ";
        echo ($context["PAGE_TITLE"] ?? null);
        echo "</title>

<link href=\"";
        // line 10
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/print.css\" rel=\"stylesheet\">
";
        // line 11
        // line 12
        echo "</head>
<body id=\"phpbb\">
<div id=\"wrap\" class=\"wrap\">
\t<a id=\"top\" class=\"top-anchor\" accesskey=\"t\"></a>

\t<div id=\"page-header\">
\t\t<h1>";
        // line 18
        echo ($context["SITENAME"] ?? null);
        echo "</h1>
\t\t<p>";
        // line 19
        echo ($context["SITE_DESCRIPTION"] ?? null);
        echo "<br /><a href=\"";
        echo ($context["U_FORUM"] ?? null);
        echo "\">";
        echo ($context["U_FORUM"] ?? null);
        echo "</a></p>

\t\t<h2>";
        // line 21
        echo ($context["TOPIC_TITLE"] ?? null);
        echo "</h2>
\t\t<p><a href=\"";
        // line 22
        echo ($context["U_TOPIC"] ?? null);
        echo "\">";
        echo ($context["U_TOPIC"] ?? null);
        echo "</a></p>
\t</div>

\t<div id=\"page-body\" class=\"page-body\">
\t\t<div class=\"page-number\">";
        // line 26
        echo ($context["PAGE_NUMBER"] ?? null);
        echo "</div>
\t\t";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "postrow", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["postrow"]) {
            // line 28
            echo "\t\t\t<div class=\"post\">
\t\t\t\t<h3>";
            // line 29
            echo $this->getAttribute($context["postrow"], "POST_SUBJECT", array());
            echo "</h3>
\t\t\t\t<div class=\"date\">";
            // line 30
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTED");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " <strong>";
            echo $this->getAttribute($context["postrow"], "POST_DATE", array());
            echo "</strong></div>
\t\t\t\t<div class=\"author\">";
            // line 31
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
            echo " <strong>";
            echo $this->getAttribute($context["postrow"], "POST_AUTHOR", array());
            echo "</strong></div>
\t\t\t\t<div class=\"content\">";
            // line 32
            echo $this->getAttribute($context["postrow"], "MESSAGE", array());
            echo "</div>
\t\t\t</div>
\t\t\t<hr />
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['postrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t</div>

\t<div id=\"page-footer\" class=\"page-footer\">
\t\t<div class=\"page-number\">";
        // line 39
        echo ($context["S_TIMEZONE"] ?? null);
        echo "<br />";
        echo ($context["PAGE_NUMBER"] ?? null);
        echo "</div>
\t\t<div class=\"copyright\">Powered by phpBB&reg; Forum Software &copy; phpBB Limited<br />https://www.phpbb.com/</div>
\t</div>
</div>

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "viewtopic_print.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 39,  120 => 36,  110 => 32,  104 => 31,  97 => 30,  93 => 29,  90 => 28,  86 => 27,  82 => 26,  73 => 22,  69 => 21,  60 => 19,  56 => 18,  48 => 12,  47 => 11,  43 => 10,  36 => 8,  32 => 7,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "viewtopic_print.html", "");
    }
}
