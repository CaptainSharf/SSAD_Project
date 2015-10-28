<?php

/* @Goals/_titleAndEvolutionGraph.twig */
class __TwigTemplate_c8afe45f9aa77cf86f04f1313847e5c1005b17b3ce26c0a62bf5829fd03bfc62 extends Twig_Template
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
        echo "<span data-graph-id=\"";
        echo twig_escape_filter($this->env, (isset($context["nameGraphEvolution"]) ? $context["nameGraphEvolution"] : $this->getContext($context, "nameGraphEvolution")), "html", null, true);
        echo "\"></span>

";
        // line 3
        if (((isset($context["displayFullReport"]) ? $context["displayFullReport"] : $this->getContext($context, "displayFullReport")) || array_key_exists("headline", $context))) {
            // line 4
            echo "    <h2 piwik-enriched-headline
        ";
            // line 5
            if ((((array_key_exists("idGoal", $context) && (isset($context["idGoal"]) ? $context["idGoal"] : $this->getContext($context, "idGoal"))) && array_key_exists("goalName", $context)) &&  !array_key_exists("ecommerce", $context))) {
                // line 6
                echo "            edit-url=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("module" => "Goals", "action" => "manage", "idGoal" => (isset($context["idGoal"]) ? $context["idGoal"] : $this->getContext($context, "idGoal"))))), "html_attr");
                echo "\"
            feature-name=\"";
                // line 7
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_Details")), "html_attr");
                echo "\"
        ";
            }
            // line 9
            echo "       >";
            if (array_key_exists("headline", $context)) {
                echo twig_escape_filter($this->env, (isset($context["headline"]) ? $context["headline"] : $this->getContext($context, "headline")), "html", null, true);
            } elseif (array_key_exists("goalName", $context)) {
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_GoalX", (isset($context["goalName"]) ? $context["goalName"] : $this->getContext($context, "goalName")))), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_EvolutionOverPeriod")), "html", null, true);
            }
            echo "</h2>
";
        }
        // line 11
        echo (isset($context["graphEvolution"]) ? $context["graphEvolution"] : $this->getContext($context, "graphEvolution"));
        echo "

<div id='leftcolumn' style=\"clear:both;";
        // line 13
        if (( !(isset($context["isWidget"]) ? $context["isWidget"] : $this->getContext($context, "isWidget")) && array_key_exists("ecommerce", $context))) {
            echo "width:33%;'";
        }
        echo "\">
    <div class=\"sparkline\">";
        // line 14
        echo call_user_func_array($this->env->getFunction('sparkline')->getCallable(), array((isset($context["urlSparklineConversions"]) ? $context["urlSparklineConversions"] : $this->getContext($context, "urlSparklineConversions"))));
        echo "
        ";
        // line 15
        if (array_key_exists("ecommerce", $context)) {
            // line 16
            echo "            <strong>";
            echo twig_escape_filter($this->env, (isset($context["nb_conversions"]) ? $context["nb_conversions"] : $this->getContext($context, "nb_conversions")), "html", null, true);
            echo "</strong>
            ";
            // line 17
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_EcommerceOrders")), "html", null, true);
            echo "
            <img src='plugins/Morpheus/images/ecommerceOrder.gif'>
        ";
        } else {
            // line 20
            echo "            ";
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_Conversions", (("<strong>" . (isset($context["nb_conversions"]) ? $context["nb_conversions"] : $this->getContext($context, "nb_conversions"))) . "</strong>")));
            echo "
        ";
        }
        // line 22
        echo "        ";
        if ((array_key_exists("goalAllowMultipleConversionsPerVisit", $context) && (isset($context["goalAllowMultipleConversionsPerVisit"]) ? $context["goalAllowMultipleConversionsPerVisit"] : $this->getContext($context, "goalAllowMultipleConversionsPerVisit")))) {
            // line 23
            echo "            (";
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_NVisits", (("<strong>" . (isset($context["nb_visits_converted"]) ? $context["nb_visits_converted"] : $this->getContext($context, "nb_visits_converted"))) . "</strong>")));
            echo ")
        ";
        }
        // line 25
        echo "    </div>
    ";
        // line 26
        if ((((isset($context["revenue"]) ? $context["revenue"] : $this->getContext($context, "revenue")) != 0) || array_key_exists("ecommerce", $context))) {
            // line 27
            echo "        <div class=\"sparkline\">
            ";
            // line 28
            echo call_user_func_array($this->env->getFunction('sparkline')->getCallable(), array((isset($context["urlSparklineRevenue"]) ? $context["urlSparklineRevenue"] : $this->getContext($context, "urlSparklineRevenue"))));
            echo "
            ";
            // line 29
            $context["revenue"] = call_user_func_array($this->env->getFilter('money')->getCallable(), array((isset($context["revenue"]) ? $context["revenue"] : $this->getContext($context, "revenue")), (isset($context["idSite"]) ? $context["idSite"] : $this->getContext($context, "idSite"))));
            // line 30
            echo "            ";
            if (array_key_exists("ecommerce", $context)) {
                // line 31
                echo "                <strong>";
                echo (isset($context["revenue"]) ? $context["revenue"] : $this->getContext($context, "revenue"));
                echo "</strong> ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_TotalRevenue")), "html", null, true);
                echo "
            ";
            } else {
                // line 33
                echo "                ";
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_OverallRevenue", (("<strong>" . (isset($context["revenue"]) ? $context["revenue"] : $this->getContext($context, "revenue"))) . "</strong>")));
                echo "
            ";
            }
            // line 35
            echo "        </div>
    ";
        }
        // line 37
        echo "    ";
        if (array_key_exists("ecommerce", $context)) {
            // line 38
            echo "        <div class=\"sparkline\">";
            echo call_user_func_array($this->env->getFunction('sparkline')->getCallable(), array((isset($context["urlSparklineAverageOrderValue"]) ? $context["urlSparklineAverageOrderValue"] : $this->getContext($context, "urlSparklineAverageOrderValue"))));
            echo "
            <strong>";
            // line 39
            echo call_user_func_array($this->env->getFilter('money')->getCallable(), array((isset($context["avg_order_revenue"]) ? $context["avg_order_revenue"] : $this->getContext($context, "avg_order_revenue")), (isset($context["idSite"]) ? $context["idSite"] : $this->getContext($context, "idSite"))));
            echo "</strong>
            ";
            // line 40
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_AverageOrderValue")), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 43
        echo "
</div>
<div id='leftcolumn' ";
        // line 45
        if (( !(isset($context["isWidget"]) ? $context["isWidget"] : $this->getContext($context, "isWidget")) && array_key_exists("ecommerce", $context))) {
            echo "style='width:33%;'";
        }
        echo ">
    <div class=\"sparkline\">";
        // line 46
        echo call_user_func_array($this->env->getFunction('sparkline')->getCallable(), array((isset($context["urlSparklineConversionRate"]) ? $context["urlSparklineConversionRate"] : $this->getContext($context, "urlSparklineConversionRate"))));
        echo "
        ";
        // line 47
        if (array_key_exists("ecommerce", $context)) {
            // line 48
            echo "            ";
            ob_start();
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_EcommerceOrders")), "html", null, true);
            $context["ecommerceOrdersText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 49
            echo "            ";
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_ConversionRate", ((("<strong>" . (isset($context["conversion_rate"]) ? $context["conversion_rate"] : $this->getContext($context, "conversion_rate"))) . "</strong> ") . (isset($context["ecommerceOrdersText"]) ? $context["ecommerceOrdersText"] : $this->getContext($context, "ecommerceOrdersText")))));
            echo "
        ";
        } else {
            // line 51
            echo "            ";
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_OverallConversionRate", (("<strong>" . (isset($context["conversion_rate"]) ? $context["conversion_rate"] : $this->getContext($context, "conversion_rate"))) . "</strong>")));
            echo "
        ";
        }
        // line 53
        echo "    </div>
    ";
        // line 54
        if (array_key_exists("ecommerce", $context)) {
            // line 55
            echo "        <div class=\"sparkline\">";
            echo call_user_func_array($this->env->getFunction('sparkline')->getCallable(), array((isset($context["urlSparklinePurchasedProducts"]) ? $context["urlSparklinePurchasedProducts"] : $this->getContext($context, "urlSparklinePurchasedProducts"))));
            echo "
            <strong>";
            // line 56
            echo twig_escape_filter($this->env, (isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_PurchasedProducts")), "html", null, true);
            echo "</div>
    ";
        }
        // line 58
        echo "</div>
";
        // line 59
        if (array_key_exists("ecommerce", $context)) {
            // line 60
            echo "    <div id='rightcolumn' ";
            if ( !(isset($context["isWidget"]) ? $context["isWidget"] : $this->getContext($context, "isWidget"))) {
                echo "style='width:30%;'";
            }
            echo ">
        <div>
            <img src='plugins/Morpheus/images/ecommerceAbandonedCart.gif'> <em>";
            // line 62
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_AbandonedCarts")), "html", null, true);
            echo "</em>
        </div>

        <div class=\"sparkline\">
            ";
            // line 66
            echo call_user_func_array($this->env->getFunction('sparkline')->getCallable(), array((isset($context["cart_urlSparklineConversions"]) ? $context["cart_urlSparklineConversions"] : $this->getContext($context, "cart_urlSparklineConversions"))));
            echo "
            ";
            // line 67
            ob_start();
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_AbandonedCart")), "html", null, true);
            $context["ecommerceAbandonedCartsText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 68
            echo "            <strong>";
            echo twig_escape_filter($this->env, (isset($context["cart_nb_conversions"]) ? $context["cart_nb_conversions"] : $this->getContext($context, "cart_nb_conversions")), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_VisitsWith", (isset($context["ecommerceAbandonedCartsText"]) ? $context["ecommerceAbandonedCartsText"] : $this->getContext($context, "ecommerceAbandonedCartsText")))), "html", null, true);
            echo "
        </div>

        <div class=\"sparkline\">
            ";
            // line 72
            echo call_user_func_array($this->env->getFunction('sparkline')->getCallable(), array((isset($context["cart_urlSparklineRevenue"]) ? $context["cart_urlSparklineRevenue"] : $this->getContext($context, "cart_urlSparklineRevenue"))));
            echo "
            ";
            // line 73
            ob_start();
            echo call_user_func_array($this->env->getFilter('money')->getCallable(), array((isset($context["cart_revenue"]) ? $context["cart_revenue"] : $this->getContext($context, "cart_revenue")), (isset($context["idSite"]) ? $context["idSite"] : $this->getContext($context, "idSite"))));
            $context["revenue"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 74
            echo "            ";
            ob_start();
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ColumnRevenue")), "html", null, true);
            $context["revenueText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 75
            echo "            <strong>";
            echo twig_escape_filter($this->env, (isset($context["revenue"]) ? $context["revenue"] : $this->getContext($context, "revenue")), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_LeftInCart", (isset($context["revenueText"]) ? $context["revenueText"] : $this->getContext($context, "revenueText")))), "html", null, true);
            echo "
        </div>

        <div class=\"sparkline\">
            ";
            // line 79
            echo call_user_func_array($this->env->getFunction('sparkline')->getCallable(), array((isset($context["cart_urlSparklineConversionRate"]) ? $context["cart_urlSparklineConversionRate"] : $this->getContext($context, "cart_urlSparklineConversionRate"))));
            echo "
            <strong>";
            // line 80
            echo twig_escape_filter($this->env, (isset($context["cart_conversion_rate"]) ? $context["cart_conversion_rate"] : $this->getContext($context, "cart_conversion_rate")), "html", null, true);
            echo "</strong>
            ";
            // line 81
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_VisitsWith", (isset($context["ecommerceAbandonedCartsText"]) ? $context["ecommerceAbandonedCartsText"] : $this->getContext($context, "ecommerceAbandonedCartsText")))), "html", null, true);
            echo "
        </div>
    </div>
";
        }
        // line 85
        $this->loadTemplate("_sparklineFooter.twig", "@Goals/_titleAndEvolutionGraph.twig", 85)->display($context);
        // line 86
        echo "
";
    }

    public function getTemplateName()
    {
        return "@Goals/_titleAndEvolutionGraph.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 86,  276 => 85,  269 => 81,  265 => 80,  261 => 79,  251 => 75,  246 => 74,  242 => 73,  238 => 72,  228 => 68,  224 => 67,  220 => 66,  213 => 62,  205 => 60,  203 => 59,  200 => 58,  193 => 56,  188 => 55,  186 => 54,  183 => 53,  177 => 51,  171 => 49,  166 => 48,  164 => 47,  160 => 46,  154 => 45,  150 => 43,  144 => 40,  140 => 39,  135 => 38,  132 => 37,  128 => 35,  122 => 33,  114 => 31,  111 => 30,  109 => 29,  105 => 28,  102 => 27,  100 => 26,  97 => 25,  91 => 23,  88 => 22,  82 => 20,  76 => 17,  71 => 16,  69 => 15,  65 => 14,  59 => 13,  54 => 11,  42 => 9,  37 => 7,  32 => 6,  30 => 5,  27 => 4,  25 => 3,  19 => 1,);
    }
}
