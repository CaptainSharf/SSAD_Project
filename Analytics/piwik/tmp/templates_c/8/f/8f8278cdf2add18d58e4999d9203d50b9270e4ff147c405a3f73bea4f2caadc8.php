<?php

/* @CoreHome/_dataTableHead.twig */
class __TwigTemplate_8f8278cdf2add18d58e4999d9203d50b9270e4ff147c405a3f73bea4f2caadc8 extends Twig_Template
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
        echo "<thead>
   <tr>
       ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["properties"]) ? $context["properties"] : $this->getContext($context, "properties")), "columns_to_display", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 4
            echo "           <th class=\"";
            if ($this->getAttribute((isset($context["properties"]) ? $context["properties"] : $this->getContext($context, "properties")), "enable_sort", array())) {
                echo "sortable";
            }
            echo " ";
            if ($this->getAttribute($context["loop"], "first", array())) {
                echo "first";
            } elseif ($this->getAttribute($context["loop"], "last", array())) {
                echo "last";
            }
            echo "\" id=\"";
            echo twig_escape_filter($this->env, $context["column"], "html", null, true);
            echo "\">
               ";
            // line 5
            if ( !twig_test_empty((($this->getAttribute($this->getAttribute((isset($context["properties"]) ? $context["properties"] : null), "metrics_documentation", array(), "any", false, true), $context["column"], array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["properties"]) ? $context["properties"] : null), "metrics_documentation", array(), "any", false, true), $context["column"], array(), "array"))) : ("")))) {
                // line 6
                echo "                   <div class=\"columnDocumentation\">
                       <div class=\"columnDocumentationTitle\">
                           ";
                // line 8
                echo (($this->getAttribute($this->getAttribute((isset($context["properties"]) ? $context["properties"] : null), "translations", array(), "any", false, true), $context["column"], array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["properties"]) ? $context["properties"] : null), "translations", array(), "any", false, true), $context["column"], array(), "array"), $context["column"])) : ($context["column"]));
                echo "
                       </div>
                       ";
                // line 10
                echo $this->getAttribute($this->getAttribute((isset($context["properties"]) ? $context["properties"] : $this->getContext($context, "properties")), "metrics_documentation", array()), $context["column"], array(), "array");
                echo "
                   </div>
               ";
            }
            // line 13
            echo "               <div id=\"thDIV\" class=\"thDIV\">";
            echo (($this->getAttribute($this->getAttribute((isset($context["properties"]) ? $context["properties"] : null), "translations", array(), "any", false, true), $context["column"], array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["properties"]) ? $context["properties"] : null), "translations", array(), "any", false, true), $context["column"], array(), "array"), $context["column"])) : ($context["column"]));
            echo "</div>
           </th>
       ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "   </tr>
</thead>
";
    }

    public function getTemplateName()
    {
        return "@CoreHome/_dataTableHead.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 16,  72 => 13,  66 => 10,  61 => 8,  57 => 6,  55 => 5,  40 => 4,  23 => 3,  19 => 1,);
    }
}
