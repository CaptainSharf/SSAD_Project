<?php

/* @Live/_actionsList.twig */
class __TwigTemplate_9a2e7337ccb62e1d003d304440403b81aa11bcf4fdc2c12476c53c2cdbcff288 extends Twig_Template
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
        $context["previousAction"] = false;
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actionDetails"]) ? $context["actionDetails"] : $this->getContext($context, "actionDetails")));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 3
            echo "    ";
            ob_start();
            // line 4
            echo "        ";
            if ($this->getAttribute($context["action"], "customVariables", array(), "any", true, true)) {
                // line 5
                echo "            ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CustomVariables_CustomVariables")), "html", null, true);
                echo ":
            ";
                // line 6
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["action"], "customVariables", array()));
                foreach ($context['_seq'] as $context["id"] => $context["customVariable"]) {
                    // line 7
                    echo "                ";
                    $context["name"] = ("customVariablePageName" . $context["id"]);
                    // line 8
                    echo "                ";
                    $context["value"] = ("customVariablePageValue" . $context["id"]);
                    // line 9
                    echo "                - ";
                    echo $this->getAttribute($context["customVariable"], (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), array(), "array");
                    echo " ";
                    if ((twig_length_filter($this->env, $this->getAttribute($context["customVariable"], (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), array(), "array")) > 0)) {
                        echo " = ";
                        echo $this->getAttribute($context["customVariable"], (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), array(), "array");
                    }
                    // line 10
                    echo "
                ";
                    // line 12
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['id'], $context['customVariable'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 13
                echo "        ";
            }
            // line 14
            echo "    ";
            $context["customVariablesTooltip"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 15
            echo "
    <li class=\"";
            // line 16
            if ($this->getAttribute($context["action"], "goalName", array(), "any", true, true)) {
                echo "goal";
            } else {
                echo "action";
            }
            echo "\"
        title=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "serverTimePretty", array()), "html", null, true);
            if (($this->getAttribute($context["action"], "url", array(), "any", true, true) && twig_length_filter($this->env, trim($this->getAttribute($context["action"], "url", array()))))) {
                // line 18
                echo "
";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "url", array()), "html", null, true);
            }
            if (twig_length_filter($this->env, trim((isset($context["customVariablesTooltip"]) ? $context["customVariablesTooltip"] : $this->getContext($context, "customVariablesTooltip"))))) {
                // line 20
                echo "
";
                // line 21
                echo twig_escape_filter($this->env, trim((isset($context["customVariablesTooltip"]) ? $context["customVariablesTooltip"] : $this->getContext($context, "customVariablesTooltip"))), "html", null, true);
            }
            // line 22
            if ($this->getAttribute($context["action"], "generationTime", array(), "any", true, true)) {
                // line 23
                echo "
";
                // line 24
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ColumnGenerationTime")), "html", null, true);
                echo ": ";
                echo $this->getAttribute($context["action"], "generationTime", array());
            }
            // line 25
            if ($this->getAttribute($context["action"], "timeSpentPretty", array(), "any", true, true)) {
                // line 26
                echo "
";
                // line 27
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_TimeOnPage")), "html", null, true);
                echo ": ";
                echo $this->getAttribute($context["action"], "timeSpentPretty", array());
            }
            echo "\">
        <div>
        ";
            // line 29
            if ((($this->getAttribute($context["action"], "type", array()) == "ecommerceOrder") || ($this->getAttribute($context["action"], "type", array()) == "ecommerceAbandonedCart"))) {
                // line 30
                echo "        ";
                // line 31
                echo "            <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "icon", array()), "html", null, true);
                echo "\"/>
            ";
                // line 32
                if (($this->getAttribute($context["action"], "type", array()) == "ecommerceOrder")) {
                    // line 33
                    echo "                <strong>";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_EcommerceOrder")), "html", null, true);
                    echo "</strong>
                <span style='color:#666;'>(";
                    // line 34
                    echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "orderId", array()), "html", null, true);
                    echo ")</span>
            ";
                } else {
                    // line 36
                    echo "                <strong>";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_AbandonedCart")), "html", null, true);
                    echo "</strong>

                ";
                    // line 39
                    echo "            ";
                }
                // line 40
                echo "            <p>
            <span ";
                // line 41
                if ( !(isset($context["isWidget"]) ? $context["isWidget"] : $this->getContext($context, "isWidget"))) {
                    echo "style='margin-left:20px;'";
                }
                echo ">
                ";
                // line 42
                if (($this->getAttribute($context["action"], "type", array()) == "ecommerceOrder")) {
                    // line 44
                    ob_start();
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ColumnRevenue")), "html", null, true);
                    echo ": ";
                    echo call_user_func_array($this->env->getFilter('money')->getCallable(), array($this->getAttribute($context["action"], "revenue", array()), $this->getAttribute((isset($context["clientSideParameters"]) ? $context["clientSideParameters"] : $this->getContext($context, "clientSideParameters")), "idSite", array())));
                    echo "
";
                    // line 45
                    if ( !twig_test_empty($this->getAttribute($context["action"], "revenueSubTotal", array()))) {
                        echo " - ";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Subtotal")), "html", null, true);
                        echo ": ";
                        echo call_user_func_array($this->env->getFilter('money')->getCallable(), array($this->getAttribute($context["action"], "revenueSubTotal", array()), $this->getAttribute((isset($context["clientSideParameters"]) ? $context["clientSideParameters"] : $this->getContext($context, "clientSideParameters")), "idSite", array())));
                    }
                    // line 46
                    echo "
";
                    // line 47
                    if ( !twig_test_empty($this->getAttribute($context["action"], "revenueTax", array()))) {
                        echo " - ";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Tax")), "html", null, true);
                        echo ": ";
                        echo call_user_func_array($this->env->getFilter('money')->getCallable(), array($this->getAttribute($context["action"], "revenueTax", array()), $this->getAttribute((isset($context["clientSideParameters"]) ? $context["clientSideParameters"] : $this->getContext($context, "clientSideParameters")), "idSite", array())));
                    }
                    // line 48
                    echo "
";
                    // line 49
                    if ( !twig_test_empty($this->getAttribute($context["action"], "revenueShipping", array()))) {
                        echo " - ";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Shipping")), "html", null, true);
                        echo ": ";
                        echo call_user_func_array($this->env->getFilter('money')->getCallable(), array($this->getAttribute($context["action"], "revenueShipping", array()), $this->getAttribute((isset($context["clientSideParameters"]) ? $context["clientSideParameters"] : $this->getContext($context, "clientSideParameters")), "idSite", array())));
                    }
                    // line 50
                    echo "
";
                    // line 51
                    if ( !twig_test_empty($this->getAttribute($context["action"], "revenueDiscount", array()))) {
                        echo " - ";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Discount")), "html", null, true);
                        echo ": ";
                        echo call_user_func_array($this->env->getFilter('money')->getCallable(), array($this->getAttribute($context["action"], "revenueDiscount", array()), $this->getAttribute((isset($context["clientSideParameters"]) ? $context["clientSideParameters"] : $this->getContext($context, "clientSideParameters")), "idSite", array())));
                    }
                    $context["ecommerceOrderTooltip"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                    // line 53
                    echo "                <abbr title=\"";
                    echo twig_escape_filter($this->env, (isset($context["ecommerceOrderTooltip"]) ? $context["ecommerceOrderTooltip"] : $this->getContext($context, "ecommerceOrderTooltip")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ColumnRevenue")), "html", null, true);
                    echo ":
                ";
                } else {
                    // line 55
                    echo "                    ";
                    ob_start();
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ColumnRevenue")), "html", null, true);
                    $context["revenueLeft"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                    // line 56
                    echo "                    ";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_LeftInCart", (isset($context["revenueLeft"]) ? $context["revenueLeft"] : $this->getContext($context, "revenueLeft")))), "html", null, true);
                    echo ":
                ";
                }
                // line 58
                echo "                    <strong>";
                echo call_user_func_array($this->env->getFilter('money')->getCallable(), array($this->getAttribute($context["action"], "revenue", array()), $this->getAttribute((isset($context["clientSideParameters"]) ? $context["clientSideParameters"] : $this->getContext($context, "clientSideParameters")), "idSite", array())));
                echo "</strong>
                ";
                // line 59
                if (($this->getAttribute($context["action"], "type", array()) == "ecommerceOrder")) {
                    // line 60
                    echo "                </abbr>
                ";
                }
                // line 61
                echo ", ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Quantity")), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "items", array()), "html", null, true);
                echo "

                ";
                // line 64
                echo "                ";
                if ( !twig_test_empty($this->getAttribute($context["action"], "itemDetails", array()))) {
                    // line 65
                    echo "                    <ul style='list-style:square;margin-left:";
                    if ((isset($context["isWidget"]) ? $context["isWidget"] : $this->getContext($context, "isWidget"))) {
                        echo "15";
                    } else {
                        echo "50";
                    }
                    echo "px;'>
                        ";
                    // line 66
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["action"], "itemDetails", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 67
                        echo "                            <li>
                                ";
                        // line 68
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "itemSKU", array()), "html", null, true);
                        if ( !twig_test_empty($this->getAttribute($context["product"], "itemName", array()))) {
                            echo ": ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "itemName", array()), "html", null, true);
                        }
                        // line 69
                        echo "                                ";
                        if ( !twig_test_empty($this->getAttribute($context["product"], "itemCategory", array()))) {
                            echo " (";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "itemCategory", array()), "html", null, true);
                            echo ")";
                        }
                        // line 70
                        echo "                                ,
                                ";
                        // line 71
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Quantity")), "html", null, true);
                        echo ": ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "quantity", array()), "html", null, true);
                        echo ",
                                ";
                        // line 72
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Price")), "html", null, true);
                        echo ": ";
                        echo call_user_func_array($this->env->getFilter('money')->getCallable(), array($this->getAttribute($context["product"], "price", array()), $this->getAttribute((isset($context["clientSideParameters"]) ? $context["clientSideParameters"] : $this->getContext($context, "clientSideParameters")), "idSite", array())));
                        echo "
                            </li>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 75
                    echo "                    </ul>
                ";
                }
                // line 77
                echo "            </span>
            </p>
        ";
            } elseif ( !$this->getAttribute(            // line 79
$context["action"], "goalName", array(), "any", true, true)) {
                // line 80
                echo "            ";
                // line 81
                echo "            ";
                if ( !twig_test_empty((($this->getAttribute($context["action"], "pageTitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["action"], "pageTitle", array()), false)) : (false)))) {
                    // line 82
                    echo "                <span class=\"truncated-text-line\">";
                    echo call_user_func_array($this->env->getFilter('rawSafeDecoded')->getCallable(), array($this->getAttribute($context["action"], "pageTitle", array())));
                    echo "</span>
            ";
                }
                // line 84
                echo "            ";
                if ($this->getAttribute($context["action"], "siteSearchKeyword", array(), "any", true, true)) {
                    // line 85
                    echo "                ";
                    if (($this->getAttribute($context["action"], "type", array()) == "search")) {
                        // line 86
                        echo "                    <img src='";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "icon", array()), "html", null, true);
                        echo "' title='";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Actions_SubmenuSitesearch")), "html", null, true);
                        echo "' class=\"action-list-action-icon\">
                ";
                    }
                    // line 88
                    echo "                <span class=\"truncated-text-line\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "siteSearchKeyword", array()), "html", null, true);
                    echo "</span>
            ";
                }
                // line 90
                echo "            ";
                if ( !twig_test_empty((($this->getAttribute($context["action"], "eventCategory", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["action"], "eventCategory", array()), false)) : (false)))) {
                    // line 91
                    echo "                <img src='";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "icon", array()), "html", null, true);
                    echo "' title='";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Events_Event")), "html", null, true);
                    echo "' class=\"action-list-action-icon event\">
                <span class=\"truncated-text-line event\">";
                    // line 92
                    echo call_user_func_array($this->env->getFilter('rawSafeDecoded')->getCallable(), array($this->getAttribute($context["action"], "eventCategory", array())));
                    echo " - ";
                    echo call_user_func_array($this->env->getFilter('rawSafeDecoded')->getCallable(), array($this->getAttribute($context["action"], "eventAction", array())));
                    echo " ";
                    if ($this->getAttribute($context["action"], "eventName", array(), "any", true, true)) {
                        echo "- ";
                        echo call_user_func_array($this->env->getFilter('rawSafeDecoded')->getCallable(), array($this->getAttribute($context["action"], "eventName", array())));
                    }
                    echo " ";
                    if ($this->getAttribute($context["action"], "eventValue", array(), "any", true, true)) {
                        echo "[";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "eventValue", array()), "html", null, true);
                        echo "]";
                    }
                    echo "</span>
            ";
                }
                // line 94
                echo "            ";
                if ( !twig_test_empty($this->getAttribute($context["action"], "url", array()))) {
                    // line 95
                    echo "                ";
                    if ((($this->getAttribute($context["action"], "type", array()) == "action") &&  !twig_test_empty((($this->getAttribute($context["action"], "pageTitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["action"], "pageTitle", array()), false)) : (false))))) {
                        echo "<p>";
                    }
                    // line 96
                    echo "                ";
                    if ((($this->getAttribute($context["action"], "type", array()) == "download") || ($this->getAttribute($context["action"], "type", array()) == "outlink"))) {
                        // line 97
                        echo "                    <img src='";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "icon", array()), "html", null, true);
                        echo "' class=\"action-list-action-icon\">
                ";
                    }
                    // line 99
                    echo "
                ";
                    // line 100
                    if (( !twig_test_empty((($this->getAttribute($context["action"], "eventCategory", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["action"], "eventCategory", array()), false)) : (false))) && ((($this->getAttribute(                    // line 101
(isset($context["previousAction"]) ? $context["previousAction"] : null), "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["previousAction"]) ? $context["previousAction"] : null), "url", array()), false)) : (false)) == $this->getAttribute($context["action"], "url", array())))) {
                        // line 102
                        echo "                    ";
                        // line 103
                        echo "                ";
                    } else {
                        // line 104
                        echo "                    <a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "url", array()), "html", null, true);
                        echo "\" rel=\"noreferrer\" target=\"_blank\" class=\"";
                        if (twig_test_empty((($this->getAttribute($context["action"], "eventCategory", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["action"], "eventCategory", array()), false)) : (false)))) {
                            echo "action-list-url";
                        }
                        echo " truncated-text-line\"
                       ";
                        // line 105
                        if (( !array_key_exists("overrideLinkStyle", $context) || (isset($context["overrideLinkStyle"]) ? $context["overrideLinkStyle"] : $this->getContext($context, "overrideLinkStyle")))) {
                            echo "style=\"text-decoration:underline;\"";
                        }
                        echo ">
                       ";
                        // line 106
                        if ( !twig_test_empty((($this->getAttribute($context["action"], "eventCategory", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["action"], "eventCategory", array()), false)) : (false)))) {
                            // line 107
                            echo "                           (url)
                       ";
                        } else {
                            // line 109
                            echo "                           ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "url", array()), "html", null, true);
                            echo "
                       ";
                        }
                        // line 111
                        echo "                    </a>
                ";
                    }
                    // line 113
                    echo "                ";
                    if ((($this->getAttribute($context["action"], "type", array()) == "action") &&  !twig_test_empty((($this->getAttribute($context["action"], "pageTitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["action"], "pageTitle", array()), false)) : (false))))) {
                        echo "</p>";
                    }
                    // line 114
                    echo "            ";
                } elseif ((($this->getAttribute($context["action"], "type", array()) != "search") && ($this->getAttribute($context["action"], "type", array()) != "event"))) {
                    // line 115
                    echo "                <p>
                <span>";
                    // line 116
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["clientSideParameters"]) ? $context["clientSideParameters"] : $this->getContext($context, "clientSideParameters")), "pageUrlNotDefined", array()), "html", null, true);
                    echo "</span>
                </p>
            ";
                }
                // line 119
                echo "        ";
            } else {
                // line 120
                echo "            ";
                // line 121
                echo "            <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "icon", array()), "html", null, true);
                echo "\" />
            <strong>";
                // line 122
                echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "goalName", array()), "html", null, true);
                echo "</strong>
            ";
                // line 123
                if (($this->getAttribute($context["action"], "revenue", array()) > 0)) {
                    echo ", ";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ColumnRevenue")), "html", null, true);
                    echo ":
                <strong>";
                    // line 124
                    echo call_user_func_array($this->env->getFilter('money')->getCallable(), array($this->getAttribute($context["action"], "revenue", array()), $this->getAttribute((isset($context["clientSideParameters"]) ? $context["clientSideParameters"] : $this->getContext($context, "clientSideParameters")), "idSite", array())));
                    echo "</strong>
            ";
                }
                // line 126
                echo "        ";
            }
            // line 127
            echo "        </div>
    </li>

    ";
            // line 130
            $context["previousAction"] = $context["action"];
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@Live/_actionsList.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  473 => 130,  468 => 127,  465 => 126,  460 => 124,  454 => 123,  450 => 122,  445 => 121,  443 => 120,  440 => 119,  434 => 116,  431 => 115,  428 => 114,  423 => 113,  419 => 111,  413 => 109,  409 => 107,  407 => 106,  401 => 105,  392 => 104,  389 => 103,  387 => 102,  385 => 101,  384 => 100,  381 => 99,  375 => 97,  372 => 96,  367 => 95,  364 => 94,  346 => 92,  339 => 91,  336 => 90,  330 => 88,  322 => 86,  319 => 85,  316 => 84,  310 => 82,  307 => 81,  305 => 80,  303 => 79,  299 => 77,  295 => 75,  284 => 72,  278 => 71,  275 => 70,  268 => 69,  262 => 68,  259 => 67,  255 => 66,  246 => 65,  243 => 64,  235 => 61,  231 => 60,  229 => 59,  224 => 58,  218 => 56,  213 => 55,  205 => 53,  197 => 51,  194 => 50,  187 => 49,  184 => 48,  177 => 47,  174 => 46,  167 => 45,  160 => 44,  158 => 42,  152 => 41,  149 => 40,  146 => 39,  140 => 36,  135 => 34,  130 => 33,  128 => 32,  123 => 31,  121 => 30,  119 => 29,  111 => 27,  108 => 26,  106 => 25,  101 => 24,  98 => 23,  96 => 22,  93 => 21,  90 => 20,  86 => 19,  83 => 18,  80 => 17,  72 => 16,  69 => 15,  66 => 14,  63 => 13,  57 => 12,  54 => 10,  46 => 9,  43 => 8,  40 => 7,  36 => 6,  31 => 5,  28 => 4,  25 => 3,  21 => 2,  19 => 1,);
    }
}
