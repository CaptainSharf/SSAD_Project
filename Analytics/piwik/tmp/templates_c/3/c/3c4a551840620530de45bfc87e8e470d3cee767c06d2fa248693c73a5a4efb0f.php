<?php

/* @Referrers/allReferrers.twig */
class __TwigTemplate_3c4a551840620530de45bfc87e8e470d3cee767c06d2fa248693c73a5a4efb0f extends Twig_Template
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
        echo "<h2 piwik-enriched-headline>";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Referrers_ReferrerTypes")), "html", null, true);
        echo "</h2>
";
        // line 2
        echo (isset($context["dataTableReferrerType"]) ? $context["dataTableReferrerType"] : $this->getContext($context, "dataTableReferrerType"));
        echo "

<div style=\"clear:both;\"></div>

";
        // line 6
        if (((isset($context["totalVisits"]) ? $context["totalVisits"] : $this->getContext($context, "totalVisits")) > 0)) {
            // line 7
            echo "    <h2 piwik-enriched-headline>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Referrers_Referrers")), "html", null, true);
            echo "</h2>
    ";
            // line 8
            echo (isset($context["referrersReportsByDimension"]) ? $context["referrersReportsByDimension"] : $this->getContext($context, "referrersReportsByDimension"));
            echo "
";
        }
        // line 10
        echo "
";
        // line 11
        $this->loadTemplate("_sparklineFooter.twig", "@Referrers/allReferrers.twig", 11)->display($context);
    }

    public function getTemplateName()
    {
        return "@Referrers/allReferrers.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 11,  43 => 10,  38 => 8,  33 => 7,  31 => 6,  24 => 2,  19 => 1,);
    }
}
