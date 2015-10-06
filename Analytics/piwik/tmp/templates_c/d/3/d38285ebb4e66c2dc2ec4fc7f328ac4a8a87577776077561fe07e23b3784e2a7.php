<?php

/* @MultiSites/getSitesInfo.twig */
class __TwigTemplate_d38285ebb4e66c2dc2ec4fc7f328ac4a8a87577776077561fe07e23b3784e2a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((((isset($context["isWidgetized"]) ? $context["isWidgetized"] : $this->getContext($context, "isWidgetized"))) ? ("empty.twig") : ("dashboard.twig")), "@MultiSites/getSitesInfo.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        if ( !(isset($context["isWidgetized"]) ? $context["isWidgetized"] : $this->getContext($context, "isWidgetized"))) {
            // line 5
            echo "    <div class=\"top_controls\">
        ";
            // line 6
            $this->loadTemplate("@CoreHome/_periodSelect.twig", "@MultiSites/getSitesInfo.twig", 6)->display($context);
            // line 7
            echo "        ";
            $this->loadTemplate("@CoreHome/_headerMessage.twig", "@MultiSites/getSitesInfo.twig", 7)->display($context);
            // line 8
            echo "    </div>
";
        }
        // line 10
        echo "
<div class=\"pageWrap container\" id=\"multisites\">
    <div id=\"main\">
        <div piwik-multisites-dashboard
             display-revenue-column=\"";
        // line 14
        if ((isset($context["displayRevenueColumn"]) ? $context["displayRevenueColumn"] : $this->getContext($context, "displayRevenueColumn"))) {
            echo "true";
        } else {
            echo "false";
        }
        echo "\"
             page-size=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["limit"]) ? $context["limit"] : $this->getContext($context, "limit")), "html", null, true);
        echo "\"
             show-sparklines=\"";
        // line 16
        if ((isset($context["show_sparklines"]) ? $context["show_sparklines"] : $this->getContext($context, "show_sparklines"))) {
            echo "true";
        } else {
            echo "false";
        }
        echo "\"
             date-sparkline=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["dateSparkline"]) ? $context["dateSparkline"] : $this->getContext($context, "dateSparkline")), "html", null, true);
        echo "\"
             auto-refresh-today-report=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["autoRefreshTodayReport"]) ? $context["autoRefreshTodayReport"] : $this->getContext($context, "autoRefreshTodayReport")), "html", null, true);
        echo "\">
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@MultiSites/getSitesInfo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 18,  70 => 17,  62 => 16,  58 => 15,  50 => 14,  44 => 10,  40 => 8,  37 => 7,  35 => 6,  32 => 5,  30 => 4,  27 => 3,  18 => 1,);
    }
}
