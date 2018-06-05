<?php

/* overall_footer.html */
class __TwigTemplate_682c625de5780f4d969855be60d61b24668264c120e37a32398c0fce0f388f72 extends Twig_Template
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
        echo "\t\t";
        // line 2
        echo "
\t
\t";
        // line 4
        // line 5
        echo "\t\t

\t</div>



\t<footer role=\"contentinfo\" class=\"page-footer bottom pt-3\" style=\"background-color: #F5F3F5; border-top: 1px solid #dfdfdf; \">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\" style=\"text-align: center\">
\t\t\t\t<ul class=\"col-sm-12 clearfix\" style=\"color: white\">
\t\t\t\t\t<a href=\"";
        // line 15
        echo ($context["U_ALT_MENTIONS"] ?? null);
        echo "\" class=\"alt_lien_small\">Mentions légales</a> 
\t\t\t\t\t\t| <a href=\"";
        // line 16
        echo ($context["U_ALT_CONTACT"] ?? null);
        echo "\" class=\"alt_lien_small\">Recrutement</a>
\t\t\t\t\t\t| <a href=\"";
        // line 17
        echo ($context["U_ALT_CGU"] ?? null);
        echo "\" class=\"alt_lien_small\">Conditions d'utilisation</a>
\t\t\t\t\t\t| <a href=\"";
        // line 18
        echo ($context["U_ALT_CONTACT"] ?? null);
        echo "\" class=\"alt_lien_small\">Contactez-nous</a>
\t\t\t\t\t
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<ul class=\"col-sm-12 clearfix\" style=\"color: rgb(241, 241, 241); text-align: center; color:rgb(92, 92, 92); font-weight: 0.5em\">
\t\t\t\t\tCopyright © 2018 - A/A
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t
        </div>
    </footer>

\t
\t";
        // line 32
        if (($context["S_COOKIE_NOTICE"] ?? null)) {
            // line 33
            echo "\t\t<script src=\"";
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/cookieconsent/cookieconsent.min.js?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\"></script>
\t\t<script>
\t\t\twindow.addEventListener(\"load\", function(){
\t\t\t\twindow.cookieconsent.initialise({
\t\t\t\t\t\"palette\": {
\t\t\t\t\t\t\"popup\": {
\t\t\t\t\t\t\t\"background\": \"#0F538A\"
\t\t\t\t\t\t},
\t\t\t\t\t\t\"button\": {
\t\t\t\t\t\t\t\"background\": \"#E5E5E5\"
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\t\"theme\": \"classic\",
\t\t\t\t\t\"content\": {
\t\t\t\t\t\t\"message\": \"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("COOKIE_CONSENT_MSG"), "js");
            echo "\",
\t\t\t\t\t\t\"dismiss\": \"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("COOKIE_CONSENT_OK"), "js");
            echo "\",
\t\t\t\t\t\t\"link\": \"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("COOKIE_CONSENT_INFO"), "js");
            echo "\",
\t\t\t\t\t\t\"href\": \"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("COOKIE_CONSENT_HREF"), "js");
            echo "\"
\t\t\t\t\t}
\t\t\t\t})});
\t\t</script>
\t";
        }
        // line 55
        echo "\t
\t";
        // line 56
        // line 57
        echo "\t
\t";
        // line 58
        if (($context["S_PLUPLOAD"] ?? null)) {
            $location = "plupload.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("plupload.html", "overall_footer.html", 58)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 59
        echo "\t<!-- jQuery first, then Popper.js, then Bootstrap JS -->
\t
\t

<!-- <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.min.js\"></script> -->
<script src=\"";
        // line 64
        echo ($context["T_ASSETS_PATH"] ?? null);
        echo "/javascript/jquery-ui.min.js\"></script>


<!-- <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script> -->
<script src=\"";
        // line 68
        echo ($context["T_ASSETS_PATH"] ?? null);
        echo "/javascript/popper.min.js\"></script>

\t<!-- <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script> -->
\t<script src=\"";
        // line 71
        echo ($context["T_ASSETS_PATH"] ?? null);
        echo "/javascript/bootstrap.min.js\"></script>

\t";
        // line 73
        echo $this->getAttribute(($context["definition"] ?? null), "SCRIPTS", array());
        echo "
\t
\t";
        // line 75
        echo ($context["ALT_SCRIPT_PAGE"] ?? null);
        echo "


\t<script type=\"text/javascript\" src=\"";
        // line 78
        echo ($context["T_ASSETS_PATH"] ?? null);
        echo "/javascript/social-share-kit.js\"></script>
\t<link rel=\"stylesheet\" href=\"";
        // line 79
        echo ($context["T_ASSETS_PATH"] ?? null);
        echo "/css/social-share-kit.css?v=1.0.15\">


\t<div class=\"d-none d-md-block d-lg-block d-xl-block ssk-sticky ssk-right ssk-center ssk-lg\">
\t\t<a href=\"https://www.facebook.com/monalternanceofficiel/\" class=\"ssk ssk-facebook\" data-ssk-ready=\"true\"></a>

\t\t<a href=\"https://www.linkedin.com/company/mon-alternance\" class=\"ssk ssk-linkedin\" data-ssk-ready=\"true\"></a>
\t</div>


\t";
        // line 89
        // line 90
        echo "\t</body>
\t</html>";
    }

    public function getTemplateName()
    {
        return "overall_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 90,  183 => 89,  170 => 79,  166 => 78,  160 => 75,  155 => 73,  150 => 71,  144 => 68,  137 => 64,  130 => 59,  116 => 58,  113 => 57,  112 => 56,  109 => 55,  101 => 50,  97 => 49,  93 => 48,  89 => 47,  69 => 33,  67 => 32,  50 => 18,  46 => 17,  42 => 16,  38 => 15,  26 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "overall_footer.html", "");
    }
}
