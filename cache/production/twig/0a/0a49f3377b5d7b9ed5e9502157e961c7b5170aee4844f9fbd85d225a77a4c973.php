<?php

/* profilefields/dropdown.html */
class __TwigTemplate_ab5d26b0dad463ae6a51a5e8d7c5e49e4cc016b88cb7cf4503a2496046bbb49d extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "dropdown", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["dropdown"]) {
            // line 2
            echo "<select name=\"";
            echo $this->getAttribute($context["dropdown"], "FIELD_IDENT", array());
            echo "\" class=\"form-control\" tabindex=\"6\"  id=\"";
            echo $this->getAttribute($context["dropdown"], "FIELD_IDENT", array());
            echo "\">
\t";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["dropdown"], "options", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["options"]) {
                echo "<option value=\"";
                echo $this->getAttribute($context["options"], "OPTION_ID", array());
                echo "\"";
                echo $this->getAttribute($context["options"], "SELECTED", array());
                echo ">";
                echo $this->getAttribute($context["options"], "VALUE", array());
                echo "</option>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['options'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 4
            echo "</select>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dropdown'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "profilefields/dropdown.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 4,  30 => 3,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "profilefields/dropdown.html", "");
    }
}
