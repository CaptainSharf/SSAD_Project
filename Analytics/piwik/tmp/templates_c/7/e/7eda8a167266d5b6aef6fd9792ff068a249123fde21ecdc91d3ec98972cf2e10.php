<?php

/* @Goals/getGoalReportView.twig */
class __TwigTemplate_7eda8a167266d5b6aef6fd9792ff068a249123fde21ecdc91d3ec98972cf2e10 extends Twig_Template
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
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/Goals/stylesheets/goals.css\"/>
";
        // line 2
        $this->loadTemplate("@Goals/_titleAndEvolutionGraph.twig", "@Goals/getGoalReportView.twig", 2)->display($context);
        // line 3
        echo "
<div class=\"clear\"></div>
";
        // line 5
        if (((isset($context["nb_conversions"]) ? $context["nb_conversions"] : $this->getContext($context, "nb_conversions")) > 0)) {
            // line 6
            echo "    <h2>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_ConversionsOverview")), "html", null, true);
            echo "</h2>
    <ul class=\"ulGoalTopElements\">
        ";
            // line 8
            if ( !array_key_exists("ecommerce", $context)) {
                // line 9
                echo "            ";
                if ($this->getAttribute((isset($context["topDimensions"]) ? $context["topDimensions"] : null), "country", array(), "any", true, true)) {
                    // line 10
                    echo "                <li>";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_BestCountries")), "html", null, true);
                    echo " ";
                    $this->loadTemplate("@Goals/_listTopDimension.twig", "@Goals/getGoalReportView.twig", 10)->display(array_merge($context, array("topDimension" => $this->getAttribute((isset($context["topDimensions"]) ? $context["topDimensions"] : $this->getContext($context, "topDimensions")), "country", array()))));
                    echo "</li>
            ";
                }
                // line 12
                echo "            ";
                if (($this->getAttribute((isset($context["topDimensions"]) ? $context["topDimensions"] : null), "keyword", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute((isset($context["topDimensions"]) ? $context["topDimensions"] : $this->getContext($context, "topDimensions")), "keyword", array())) > 0))) {
                    // line 13
                    echo "                <li>";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_BestKeywords")), "html", null, true);
                    echo " ";
                    $this->loadTemplate("@Goals/_listTopDimension.twig", "@Goals/getGoalReportView.twig", 13)->display(array_merge($context, array("topDimension" => $this->getAttribute((isset($context["topDimensions"]) ? $context["topDimensions"] : $this->getContext($context, "topDimensions")), "keyword", array()))));
                    echo "</li>
            ";
                }
                // line 15
                echo "            ";
                if (($this->getAttribute((isset($context["topDimensions"]) ? $context["topDimensions"] : null), "website", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute((isset($context["topDimensions"]) ? $context["topDimensions"] : $this->getContext($context, "topDimensions")), "website", array())) > 0))) {
                    // line 16
                    echo "                <li>";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_BestReferrers")), "html", null, true);
                    echo " ";
                    $this->loadTemplate("@Goals/_listTopDimension.twig", "@Goals/getGoalReportView.twig", 16)->display(array_merge($context, array("topDimension" => $this->getAttribute((isset($context["topDimensions"]) ? $context["topDimensions"] : $this->getContext($context, "topDimensions")), "website", array()))));
                    echo "</li>
            ";
                }
                // line 18
                echo "            <li>
                ";
                // line 19
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_ReturningVisitorsConversionRateIs", (("<strong>" . (isset($context["conversion_rate_returning"]) ? $context["conversion_rate_returning"] : $this->getContext($context, "conversion_rate_returning"))) . "</strong>")));
                echo "
                , ";
                // line 20
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_NewVisitorsConversionRateIs", (("<strong>" . (isset($context["conversion_rate_new"]) ? $context["conversion_rate_new"] : $this->getContext($context, "conversion_rate_new"))) . "</strong>")));
                echo "
            </li>
        ";
            } else {
                // line 23
                echo "            <li>
                ";
                // line 24
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ColumnRevenue")), "html", null, true);
                echo ": ";
                echo call_user_func_array($this->env->getFilter('money')->getCallable(), array((isset($context["revenue"]) ? $context["revenue"] : $this->getContext($context, "revenue")), (isset($context["idSite"]) ? $context["idSite"] : $this->getContext($context, "idSite"))));
                // line 25
                if ( !twig_test_empty((isset($context["revenue_subtotal"]) ? $context["revenue_subtotal"] : $this->getContext($context, "revenue_subtotal")))) {
                    echo ",
                    ";
                    // line 26
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Subtotal")), "html", null, true);
                    echo ": ";
                    echo call_user_func_array($this->env->getFilter('money')->getCallable(), array((isset($context["revenue_subtotal"]) ? $context["revenue_subtotal"] : $this->getContext($context, "revenue_subtotal")), (isset($context["idSite"]) ? $context["idSite"] : $this->getContext($context, "idSite"))));
                }
                // line 28
                if ( !twig_test_empty((isset($context["revenue_tax"]) ? $context["revenue_tax"] : $this->getContext($context, "revenue_tax")))) {
                    echo ",
                    ";
                    // line 29
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Tax")), "html", null, true);
                    echo ": ";
                    echo call_user_func_array($this->env->getFilter('money')->getCallable(), array((isset($context["revenue_tax"]) ? $context["revenue_tax"] : $this->getContext($context, "revenue_tax")), (isset($context["idSite"]) ? $context["idSite"] : $this->getContext($context, "idSite"))));
                }
                // line 31
                if ( !twig_test_empty((isset($context["revenue_shipping"]) ? $context["revenue_shipping"] : $this->getContext($context, "revenue_shipping")))) {
                    echo ",
                    ";
                    // line 32
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Shipping")), "html", null, true);
                    echo ": ";
                    echo call_user_func_array($this->env->getFilter('money')->getCallable(), array((isset($context["revenue_shipping"]) ? $context["revenue_shipping"] : $this->getContext($context, "revenue_shipping")), (isset($context["idSite"]) ? $context["idSite"] : $this->getContext($context, "idSite"))));
                }
                // line 34
                if ( !twig_test_empty((isset($context["revenue_discount"]) ? $context["revenue_discount"] : $this->getContext($context, "revenue_discount")))) {
                    echo ",
                    ";
                    // line 35
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Discount")), "html", null, true);
                    echo ": ";
                    echo call_user_func_array($this->env->getFilter('money')->getCallable(), array((isset($context["revenue_discount"]) ? $context["revenue_discount"] : $this->getContext($context, "revenue_discount")), (isset($context["idSite"]) ? $context["idSite"] : $this->getContext($context, "idSite"))));
                }
                // line 37
                echo "            </li>
        ";
            }
            // line 39
            echo "    </ul>
";
        }
        // line 41
        echo "
<script type=\"text/javascript\">
    \$(document).ready(function () {
        \$('.goalTopElement').tooltip({
            track:   true,
            content: function () {
                return \$(this).attr(\"title\");
            },
            show: false,
            hide: false
        });
    });
</script>

";
        // line 55
        if ((isset($context["displayFullReport"]) ? $context["displayFullReport"] : $this->getContext($context, "displayFullReport"))) {
            // line 56
            echo "    ";
            if ((((isset($context["nb_conversions"]) ? $context["nb_conversions"] : $this->getContext($context, "nb_conversions")) > 0) || array_key_exists("cart_nb_conversions", $context))) {
                // line 57
                echo "        <h2 id='titleGoalsByDimension'>
            ";
                // line 58
                if (array_key_exists("idGoal", $context)) {
                    // line 59
                    echo "                ";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_GoalConversionsBy", (isset($context["goalName"]) ? $context["goalName"] : $this->getContext($context, "goalName")))), "html", null, true);
                    echo "
            ";
                } else {
                    // line 61
                    echo "                ";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_ConversionsOverviewBy")), "html", null, true);
                    echo "
            ";
                }
                // line 63
                echo "        </h2>
        ";
                // line 64
                echo (isset($context["goalReportsByDimension"]) ? $context["goalReportsByDimension"] : $this->getContext($context, "goalReportsByDimension"));
                echo "
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "@Goals/getGoalReportView.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 64,  173 => 63,  167 => 61,  161 => 59,  159 => 58,  156 => 57,  153 => 56,  151 => 55,  135 => 41,  131 => 39,  127 => 37,  122 => 35,  118 => 34,  113 => 32,  109 => 31,  104 => 29,  100 => 28,  95 => 26,  91 => 25,  87 => 24,  84 => 23,  78 => 20,  74 => 19,  71 => 18,  63 => 16,  60 => 15,  52 => 13,  49 => 12,  41 => 10,  38 => 9,  36 => 8,  30 => 6,  28 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
