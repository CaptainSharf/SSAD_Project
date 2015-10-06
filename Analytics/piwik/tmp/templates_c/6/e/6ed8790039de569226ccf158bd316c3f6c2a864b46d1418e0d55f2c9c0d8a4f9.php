<?php

/* @Goals/_listTopDimension.twig */
class __TwigTemplate_6ed8790039de569226ccf158bd316c3f6c2a864b46d1418e0d55f2c9c0d8a4f9 extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["topDimension"]) ? $context["topDimension"] : $this->getContext($context, "topDimension")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 2
            echo "    ";
            $context["goal_nb_conversion"] = $this->getAttribute($context["element"], "nb_conversions", array());
            // line 3
            echo "    ";
            $context["goal_conversion_rate"] = $this->getAttribute($context["element"], "conversion_rate", array());
            // line 4
            echo "    <span class='goalTopElement' title='";
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_Conversions", (("<b>" . (isset($context["goal_nb_conversion"]) ? $context["goal_nb_conversion"] : $this->getContext($context, "goal_nb_conversion"))) . "</b>")));
            echo ",
\t\t";
            // line 5
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_ConversionRate", (("<b>" . (isset($context["goal_conversion_rate"]) ? $context["goal_conversion_rate"] : $this->getContext($context, "goal_conversion_rate"))) . "</b>")));
            echo "'>
\t    ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["element"], "name", array()), "html", null, true);
            echo "
    </span>

    ";
            // line 9
            $context["piwik"] = $this->loadTemplate("macros.twig", "@Goals/_listTopDimension.twig", 9);
            // line 10
            echo "    ";
            echo $context["piwik"]->getlogoHtml($this->getAttribute($context["element"], "metadata", array()), $this->getAttribute($context["element"], "name", array()));
            echo "
    ";
            // line 11
            if (($this->getAttribute($context["loop"], "index", array()) == ($this->getAttribute($context["loop"], "length", array()) - 1))) {
                // line 12
                echo "        and
    ";
            } elseif (($this->getAttribute(            // line 13
$context["loop"], "index", array()) < ($this->getAttribute($context["loop"], "length", array()) - 1))) {
                // line 14
                echo "        ,
    ";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@Goals/_listTopDimension.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 14,  69 => 13,  66 => 12,  64 => 11,  59 => 10,  57 => 9,  51 => 6,  47 => 5,  42 => 4,  39 => 3,  36 => 2,  19 => 1,);
    }
}
