<?php

/* @Referrers/index.twig */
class __TwigTemplate_a7890beb6dc274bb83c0e04afc71dc9fbe91b131586cc09aedd3f41c5d5e7aeb extends Twig_Template
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
        echo "<h2 piwik-enriched-headline
    data-graph-id=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["nameGraphEvolutionReferrers"]) ? $context["nameGraphEvolutionReferrers"] : $this->getContext($context, "nameGraphEvolutionReferrers")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_EvolutionOverPeriod")), "html", null, true);
        echo "</h2>
";
        // line 3
        echo (isset($context["graphEvolutionReferrers"]) ? $context["graphEvolutionReferrers"] : $this->getContext($context, "graphEvolutionReferrers"));
        echo "

<h2 piwik-enriched-headline>";
        // line 5
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Referrers_Type")), "html", null, true);
        echo "</h2>

<div class=\"row\">
    <div class=\"col-md-6\">
        <div class=\"sparkline\" style=\"padding-left: 12px;\">";
        // line 9
        echo call_user_func_array($this->env->getFunction('sparkline')->getCallable(), array((isset($context["urlSparklineDirectEntry"]) ? $context["urlSparklineDirectEntry"] : $this->getContext($context, "urlSparklineDirectEntry"))));
        echo "
            ";
        // line 10
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Referrers_TypeDirectEntries", (("<strong>" . (isset($context["visitorsFromDirectEntry"]) ? $context["visitorsFromDirectEntry"] : $this->getContext($context, "visitorsFromDirectEntry"))) . "</strong>")));
        echo "
            ";
        // line 11
        if ( !twig_test_empty(((array_key_exists("visitorsFromDirectEntryPercent", $context)) ? (_twig_default_filter((isset($context["visitorsFromDirectEntryPercent"]) ? $context["visitorsFromDirectEntryPercent"] : $this->getContext($context, "visitorsFromDirectEntryPercent")))) : ("")))) {
            echo ",
                ";
            // line 12
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Referrers_XPercentOfVisits", (("<strong>" . (isset($context["visitorsFromDirectEntryPercent"]) ? $context["visitorsFromDirectEntryPercent"] : $this->getContext($context, "visitorsFromDirectEntryPercent"))) . "</strong>")));
            echo "
            ";
        }
        // line 14
        echo "            ";
        if ( !twig_test_empty(((array_key_exists("visitorsFromDirectEntryEvolution", $context)) ? (_twig_default_filter((isset($context["visitorsFromDirectEntryEvolution"]) ? $context["visitorsFromDirectEntryEvolution"] : $this->getContext($context, "visitorsFromDirectEntryEvolution")))) : ("")))) {
            // line 15
            echo "                ";
            echo (isset($context["visitorsFromDirectEntryEvolution"]) ? $context["visitorsFromDirectEntryEvolution"] : $this->getContext($context, "visitorsFromDirectEntryEvolution"));
            echo "
            ";
        }
        // line 17
        echo "        </div>
        <div class=\"sparkline\" style=\"padding-left: 12px;\">";
        // line 18
        echo call_user_func_array($this->env->getFunction('sparkline')->getCallable(), array((isset($context["urlSparklineSearchEngines"]) ? $context["urlSparklineSearchEngines"] : $this->getContext($context, "urlSparklineSearchEngines"))));
        echo "
            ";
        // line 19
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Referrers_TypeSearchEngines", (("<strong>" . (isset($context["visitorsFromSearchEngines"]) ? $context["visitorsFromSearchEngines"] : $this->getContext($context, "visitorsFromSearchEngines"))) . "</strong>")));
        echo "
            ";
        // line 20
        if ( !twig_test_empty(((array_key_exists("visitorsFromSearchEnginesPercent", $context)) ? (_twig_default_filter((isset($context["visitorsFromSearchEnginesPercent"]) ? $context["visitorsFromSearchEnginesPercent"] : $this->getContext($context, "visitorsFromSearchEnginesPercent")))) : ("")))) {
            echo ",
                ";
            // line 21
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Referrers_XPercentOfVisits", (("<strong>" . (isset($context["visitorsFromSearchEnginesPercent"]) ? $context["visitorsFromSearchEnginesPercent"] : $this->getContext($context, "visitorsFromSearchEnginesPercent"))) . "</strong>")));
            echo "
            ";
        }
        // line 23
        echo "            ";
        if ( !twig_test_empty(((array_key_exists("visitorsFromSearchEnginesEvolution", $context)) ? (_twig_default_filter((isset($context["visitorsFromSearchEnginesEvolution"]) ? $context["visitorsFromSearchEnginesEvolution"] : $this->getContext($context, "visitorsFromSearchEnginesEvolution")))) : ("")))) {
            // line 24
            echo "                ";
            echo (isset($context["visitorsFromSearchEnginesEvolution"]) ? $context["visitorsFromSearchEnginesEvolution"] : $this->getContext($context, "visitorsFromSearchEnginesEvolution"));
            echo "
            ";
        }
        // line 26
        echo "        </div>
    </div>
    <div class=\"col-md-6\">
        <div class=\"sparkline\">";
        // line 29
        echo call_user_func_array($this->env->getFunction('sparkline')->getCallable(), array((isset($context["urlSparklineWebsites"]) ? $context["urlSparklineWebsites"] : $this->getContext($context, "urlSparklineWebsites"))));
        echo "
            ";
        // line 30
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Referrers_TypeWebsites", (("<strong>" . (isset($context["visitorsFromWebsites"]) ? $context["visitorsFromWebsites"] : $this->getContext($context, "visitorsFromWebsites"))) . "</strong>")));
        echo "
            ";
        // line 31
        if ( !twig_test_empty(((array_key_exists("visitorsFromWebsitesPercent", $context)) ? (_twig_default_filter((isset($context["visitorsFromWebsitesPercent"]) ? $context["visitorsFromWebsitesPercent"] : $this->getContext($context, "visitorsFromWebsitesPercent")))) : ("")))) {
            echo ",
                ";
            // line 32
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Referrers_XPercentOfVisits", (("<strong>" . (isset($context["visitorsFromWebsitesPercent"]) ? $context["visitorsFromWebsitesPercent"] : $this->getContext($context, "visitorsFromWebsitesPercent"))) . "</strong>")));
            echo "
            ";
        }
        // line 34
        echo "            ";
        if ( !twig_test_empty(((array_key_exists("visitorsFromWebsitesEvolution", $context)) ? (_twig_default_filter((isset($context["visitorsFromWebsitesEvolution"]) ? $context["visitorsFromWebsitesEvolution"] : $this->getContext($context, "visitorsFromWebsitesEvolution")))) : ("")))) {
            // line 35
            echo "                ";
            echo (isset($context["visitorsFromWebsitesEvolution"]) ? $context["visitorsFromWebsitesEvolution"] : $this->getContext($context, "visitorsFromWebsitesEvolution"));
            echo "
            ";
        }
        // line 37
        echo "        </div>
        <div class=\"sparkline\">";
        // line 38
        echo call_user_func_array($this->env->getFunction('sparkline')->getCallable(), array((isset($context["urlSparklineCampaigns"]) ? $context["urlSparklineCampaigns"] : $this->getContext($context, "urlSparklineCampaigns"))));
        echo "
            ";
        // line 39
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Referrers_TypeCampaigns", (("<strong>" . (isset($context["visitorsFromCampaigns"]) ? $context["visitorsFromCampaigns"] : $this->getContext($context, "visitorsFromCampaigns"))) . "</strong>")));
        echo "
            ";
        // line 40
        if ( !twig_test_empty(((array_key_exists("visitorsFromCampaignsPercent", $context)) ? (_twig_default_filter((isset($context["visitorsFromCampaignsPercent"]) ? $context["visitorsFromCampaignsPercent"] : $this->getContext($context, "visitorsFromCampaignsPercent")))) : ("")))) {
            echo ",
                ";
            // line 41
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Referrers_XPercentOfVisits", (("<strong>" . (isset($context["visitorsFromCampaignsPercent"]) ? $context["visitorsFromCampaignsPercent"] : $this->getContext($context, "visitorsFromCampaignsPercent"))) . "</strong>")));
            echo "
            ";
        }
        // line 43
        echo "            ";
        if ( !twig_test_empty(((array_key_exists("visitorsFromCampaignsEvolution", $context)) ? (_twig_default_filter((isset($context["visitorsFromCampaignsEvolution"]) ? $context["visitorsFromCampaignsEvolution"] : $this->getContext($context, "visitorsFromCampaignsEvolution")))) : ("")))) {
            // line 44
            echo "                ";
            echo (isset($context["visitorsFromCampaignsEvolution"]) ? $context["visitorsFromCampaignsEvolution"] : $this->getContext($context, "visitorsFromCampaignsEvolution"));
            echo "
            ";
        }
        // line 46
        echo "        </div>
    </div>
</div>

<div id=\"distinctReferrersByType\" class=\"row\">
    <div class=\"col-md-6\">
        <div class=\"sparkline\" style=\"padding-left: 12px;\">";
        // line 52
        echo call_user_func_array($this->env->getFunction('sparkline')->getCallable(), array((isset($context["urlSparklineDistinctSearchEngines"]) ? $context["urlSparklineDistinctSearchEngines"] : $this->getContext($context, "urlSparklineDistinctSearchEngines"))));
        echo "
            <strong>";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["numberDistinctSearchEngines"]) ? $context["numberDistinctSearchEngines"] : $this->getContext($context, "numberDistinctSearchEngines")), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Referrers_DistinctSearchEngines")), "html", null, true);
        echo "
            ";
        // line 54
        if ( !twig_test_empty(((array_key_exists("numberDistinctSearchEnginesEvolution", $context)) ? (_twig_default_filter((isset($context["numberDistinctSearchEnginesEvolution"]) ? $context["numberDistinctSearchEnginesEvolution"] : $this->getContext($context, "numberDistinctSearchEnginesEvolution")))) : ("")))) {
            // line 55
            echo "                ";
            echo (isset($context["numberDistinctSearchEnginesEvolution"]) ? $context["numberDistinctSearchEnginesEvolution"] : $this->getContext($context, "numberDistinctSearchEnginesEvolution"));
            echo "
            ";
        }
        // line 57
        echo "        </div>
        <div class=\"sparkline\" style=\"padding-left: 12px;\">";
        // line 58
        echo call_user_func_array($this->env->getFunction('sparkline')->getCallable(), array((isset($context["urlSparklineDistinctKeywords"]) ? $context["urlSparklineDistinctKeywords"] : $this->getContext($context, "urlSparklineDistinctKeywords"))));
        echo "
            <strong>";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["numberDistinctKeywords"]) ? $context["numberDistinctKeywords"] : $this->getContext($context, "numberDistinctKeywords")), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Referrers_DistinctKeywords")), "html", null, true);
        echo "
            ";
        // line 60
        if ( !twig_test_empty(((array_key_exists("numberDistinctKeywordsEvolution", $context)) ? (_twig_default_filter((isset($context["numberDistinctKeywordsEvolution"]) ? $context["numberDistinctKeywordsEvolution"] : $this->getContext($context, "numberDistinctKeywordsEvolution")))) : ("")))) {
            // line 61
            echo "                ";
            echo (isset($context["numberDistinctKeywordsEvolution"]) ? $context["numberDistinctKeywordsEvolution"] : $this->getContext($context, "numberDistinctKeywordsEvolution"));
            echo "
            ";
        }
        // line 63
        echo "        </div>
    </div>
    <div class=\"col-md-6\">
        <div class=\"sparkline\">";
        // line 66
        echo call_user_func_array($this->env->getFunction('sparkline')->getCallable(), array((isset($context["urlSparklineDistinctWebsites"]) ? $context["urlSparklineDistinctWebsites"] : $this->getContext($context, "urlSparklineDistinctWebsites"))));
        echo "
            <strong>";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["numberDistinctWebsites"]) ? $context["numberDistinctWebsites"] : $this->getContext($context, "numberDistinctWebsites")), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Referrers_DistinctWebsites")), "html", null, true);
        echo "
            ";
        // line 68
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Referrers_UsingNDistinctUrls", (("<strong>" . (isset($context["numberDistinctWebsitesUrls"]) ? $context["numberDistinctWebsitesUrls"] : $this->getContext($context, "numberDistinctWebsitesUrls"))) . "</strong>")));
        echo "
            ";
        // line 69
        if ( !twig_test_empty(((array_key_exists("numberDistinctWebsitesEvolution", $context)) ? (_twig_default_filter((isset($context["numberDistinctWebsitesEvolution"]) ? $context["numberDistinctWebsitesEvolution"] : $this->getContext($context, "numberDistinctWebsitesEvolution")))) : ("")))) {
            // line 70
            echo "                ";
            echo (isset($context["numberDistinctWebsitesEvolution"]) ? $context["numberDistinctWebsitesEvolution"] : $this->getContext($context, "numberDistinctWebsitesEvolution"));
            echo "
            ";
        }
        // line 72
        echo "        </div>
        <div class=\"sparkline\">";
        // line 73
        echo call_user_func_array($this->env->getFunction('sparkline')->getCallable(), array((isset($context["urlSparklineDistinctCampaigns"]) ? $context["urlSparklineDistinctCampaigns"] : $this->getContext($context, "urlSparklineDistinctCampaigns"))));
        echo "
            <strong>";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["numberDistinctCampaigns"]) ? $context["numberDistinctCampaigns"] : $this->getContext($context, "numberDistinctCampaigns")), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Referrers_DistinctCampaigns")), "html", null, true);
        echo "
            ";
        // line 75
        if ( !twig_test_empty(((array_key_exists("numberDistinctCampaignsEvolution", $context)) ? (_twig_default_filter((isset($context["numberDistinctCampaignsEvolution"]) ? $context["numberDistinctCampaignsEvolution"] : $this->getContext($context, "numberDistinctCampaignsEvolution")))) : ("")))) {
            // line 76
            echo "                ";
            echo (isset($context["numberDistinctCampaignsEvolution"]) ? $context["numberDistinctCampaignsEvolution"] : $this->getContext($context, "numberDistinctCampaignsEvolution"));
            echo "
            ";
        }
        // line 78
        echo "        </div>
    </div>
    <br/>
</div>

<div style=\"float:left;\" class=\"relatedReferrerReports\">";
        // line 83
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_View")), "html", null, true);
        echo "
    <a href=\"javascript:broadcast.propagateAjax('module=Referrers&action=getSearchEnginesAndKeywords')\">";
        // line 84
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Referrers_SubmenuSearchEngines")), "html", null, true);
        echo "</a>,
    <a href=\"javascript:broadcast.propagateAjax('module=Referrers&action=indexWebsites')\">";
        // line 85
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Referrers_SubmenuWebsites")), "html", null, true);
        echo "</a>,
    <a href=\"javascript:broadcast.propagateAjax('module=Referrers&action=indexCampaigns')\">";
        // line 86
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Referrers_Campaigns")), "html", null, true);
        echo "</a>.
</div>

";
        // line 89
        $this->loadTemplate("_sparklineFooter.twig", "@Referrers/index.twig", 89)->display($context);
    }

    public function getTemplateName()
    {
        return "@Referrers/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 89,  269 => 86,  265 => 85,  261 => 84,  257 => 83,  250 => 78,  244 => 76,  242 => 75,  236 => 74,  232 => 73,  229 => 72,  223 => 70,  221 => 69,  217 => 68,  211 => 67,  207 => 66,  202 => 63,  196 => 61,  194 => 60,  188 => 59,  184 => 58,  181 => 57,  175 => 55,  173 => 54,  167 => 53,  163 => 52,  155 => 46,  149 => 44,  146 => 43,  141 => 41,  137 => 40,  133 => 39,  129 => 38,  126 => 37,  120 => 35,  117 => 34,  112 => 32,  108 => 31,  104 => 30,  100 => 29,  95 => 26,  89 => 24,  86 => 23,  81 => 21,  77 => 20,  73 => 19,  69 => 18,  66 => 17,  60 => 15,  57 => 14,  52 => 12,  48 => 11,  44 => 10,  40 => 9,  33 => 5,  28 => 3,  22 => 2,  19 => 1,);
    }
}
