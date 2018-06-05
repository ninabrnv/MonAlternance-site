<?php

/* alt_actualite.html */
class __TwigTemplate_c9a0f56b65544f141968e8c52fc47aefc6b77286e5c760eb67686cecc977e584 extends Twig_Template
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
";
        // line 2
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "alt_actualite.html", 2)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 3
        echo "

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-12 col-sm-9 col-md-9 col-lg-9\">


                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "postrow", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["postrow"]) {
            // line 11
            echo "                    
                  
                    <div id=\"p";
            // line 13
            echo $this->getAttribute($context["postrow"], "POST_ID", array());
            echo "\" class=\"post has-profile ";
            if (($this->getAttribute($context["postrow"], "S_ROW_COUNT", array()) % 2 == 1)) {
                echo "bg1";
            } else {
                echo "bg2";
            }
            if ($this->getAttribute($context["postrow"], "S_UNREAD_POST", array())) {
                echo " unreadpost";
            }
            if ($this->getAttribute($context["postrow"], "S_POST_REPORTED", array())) {
                echo " reported";
            }
            if ($this->getAttribute($context["postrow"], "S_POST_DELETED", array())) {
                echo " deleted";
            }
            if (($this->getAttribute($context["postrow"], "S_ONLINE", array()) &&  !$this->getAttribute($context["postrow"], "S_POST_HIDDEN", array()))) {
                echo " online";
            }
            if ($this->getAttribute($context["postrow"], "POSTER_WARNINGS", array())) {
                echo " warned";
            }
            echo "\">
                        <div class=\"inner\">


                        <div class=\"postbody\">
                        
                        
                            ";
            // line 20
            // line 21
            echo "                            <p class=\"author\">
                                <!-- <span class=\"responsive-hide\">Par <strong>";
            // line 22
            echo $this->getAttribute($context["postrow"], "POST_AUTHOR_FULL", array());
            echo "</strong>, </span>";
            echo $this->getAttribute($context["postrow"], "POST_DATE", array());
            echo " -->
                            </p>
                            ";
            // line 24
            // line 25
            echo "
                            

                            ";
            // line 28
            if ($this->getAttribute($context["postrow"], "S_POST_REPORTED", array())) {
                // line 29
                echo "                            <p class=\"post-notice reported\">
                                <a href=\"";
                // line 30
                echo $this->getAttribute($context["postrow"], "U_MCP_REPORT", array());
                echo "\"><strong>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_REPORTED");
                echo "</strong></a>
                            </p>
                            ";
            }
            // line 33
            echo "
                            <div class=\"content\">";
            // line 34
            echo $this->getAttribute($context["postrow"], "MESSAGE", array());
            echo "</div>

                            ";
            // line 36
            if ($this->getAttribute($context["postrow"], "S_HAS_ATTACHMENTS", array())) {
                // line 37
                echo "                                <dl class=\"attachbox\">
                                    <dt>
                                        ";
                // line 39
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ATTACHMENTS");
                echo "
                                    </dt>
                                    ";
                // line 41
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["postrow"], "attachment", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                    // line 42
                    echo "                                        <dd>";
                    echo $this->getAttribute($context["attachment"], "DISPLAY_ATTACHMENT", array());
                    echo "</dd>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 44
                echo "                                </dl>
                            ";
            }
            // line 46
            echo "
                            </div>

                        </div>

                    
                    </div>

                    
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['postrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "


        </div>
        <div class=\"col-12 col-sm-3 col-md-3 col-lg-3\">
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
        </div>
    </div>
</div>

";
        // line 75
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "alt_actualite.html", 75)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "alt_actualite.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 75,  163 => 56,  148 => 46,  144 => 44,  135 => 42,  131 => 41,  126 => 39,  122 => 37,  120 => 36,  115 => 34,  112 => 33,  104 => 30,  101 => 29,  99 => 28,  94 => 25,  93 => 24,  86 => 22,  83 => 21,  82 => 20,  51 => 13,  47 => 11,  43 => 10,  34 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "alt_actualite.html", "");
    }
}
