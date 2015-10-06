<?php

/* @Live/getVisitorProfilePopup.twig */
class __TwigTemplate_323a3abd47b0273305599a626fd1f8cf768d408a26c6327915a4a81ad4f5a16a extends Twig_Template
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
        if ( !(isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData"))) {
            // line 2
            echo "    <div class=\"pk-emptyDataTable\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreHome_ThereIsNoDataForThisReport")), "html", null, true);
            echo "</div>
";
        } else {
            // line 4
            echo "<div class=\"visitor-profile\"
     data-visitor-id=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "lastVisits", array()), "getFirstRow", array(), "method"), "getColumn", array(0 => "visitorId"), "method"), "html", null, true);
            echo "\"
     data-next-visitor=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "nextVisitorId", array()), "html", null, true);
            echo "\"
     data-prev-visitor=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "previousVisitorId", array()), "html", null, true);
            echo "\"
     tabindex=\"0\">
    <a href class=\"visitor-profile-close\"></a>
    <div class=\"visitor-profile-info\">
        <div>
            <div class=\"visitor-profile-overview\">
                <div class=\"visitor-profile-avatar\">
                    <div>
                        <div class=\"visitor-profile-image-frame\">
                            <img src=\"";
            // line 16
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : null), "visitorAvatar", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : null), "visitorAvatar", array()), "plugins/Live/images/unknown_avatar.jpg")) : ("plugins/Live/images/unknown_avatar.jpg")), "html", null, true);
            echo "\"
                                 alt=\"";
            // line 17
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : null), "visitorDescription", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : null), "visitorDescription", array()), "")) : ("")), "html", null, true);
            echo "\"
                                 title=\"";
            // line 18
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : null), "visitorDescription", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : null), "visitorDescription", array()), "")) : ("")), "html", null, true);
            echo "\" />
                        </div>
                        <img src=\"plugins/Live/images/paperclip.png\" alt=\"\"/>
                    </div>
                    <div>
                        <div class=\"visitor-profile-header\">
                            ";
            // line 24
            if ( !twig_test_empty($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "previousVisitorId", array()))) {
                echo "<a class=\"visitor-profile-prev-visitor\" href=\"#\" title=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_PreviousVisitor")), "html", null, true);
                echo "\">&larr;</a>";
            }
            // line 25
            echo "                            <h1>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_VisitorProfile")), "html", null, true);
            // line 26
            if ( !twig_test_empty($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "userId", array()))) {
                echo ": <span title=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_UserId")), "html", null, true);
                echo ": ";
                echo $this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "userId", array());
                echo "\">";
                echo $this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "userId", array());
                echo "</span>";
            }
            // line 27
            echo "<img class=\"loadingPiwik\" style=\"display:none;\" src=\"plugins/Morpheus/images/loading-blue.gif\"/>
                            </h1>
                            <a href=\"http://piwik.org/docs/user-profile/\" class=\"reportDocumentationIcon\" rel=\"noreferrer\"  target=\"_blank\" title=\"";
            // line 29
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ViewDocumentationFor", ucwords(call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_VisitorProfile"))))), "html", null, true);
            echo "\"></a>
                            ";
            // line 30
            if ( !twig_test_empty($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "nextVisitorId", array()))) {
                echo "<a class=\"visitor-profile-next-visitor\" href=\"#\" title=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_NextVisitor")), "html", null, true);
                echo "\">&rarr;</a>";
            }
            // line 31
            echo "                        </div>
                        <div class=\"visitor-profile-latest-visit\">
                            ";
            // line 33
            $this->loadTemplate("@Live/getSingleVisitSummary.twig", "@Live/getVisitorProfilePopup.twig", 33)->display(array_merge($context, array("visitData" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "lastVisits", array()), "getFirstRow", array(), "method"), "getColumns", array(), "method"), "showLocation" => false)));
            // line 34
            echo "                        </div>
                    </div>
                    <p style=\"clear:both; border:none!important;\"></p>
                </div>
                <div class=\"visitor-profile-summary\">
                    <h1>";
            // line 39
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Summary")), "html", null, true);
            echo "</h1>
                    <div>
                        <p>";
            // line 41
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_VisitSummary", (("<strong>" . $this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalVisitDurationPretty", array())) . "</strong>"), "", "", "<strong>", $this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalActions", array()), $this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalVisits", array()), "</strong>"));
            echo "</p>
                        <p>";
            // line 42
            if ($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalGoalConversions", array())) {
                echo "<strong>";
            }
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_ConvertedNGoals", $this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalGoalConversions", array()))), "html", null, true);
            if ($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalGoalConversions", array())) {
                echo "</strong>";
            }
            // line 43
            if ($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalGoalConversions", array())) {
                echo " (";
                // line 44
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalConversionsByGoal", array()));
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
                foreach ($context['_seq'] as $context["idGoal"] => $context["totalConversions"]) {
                    // line 45
                    $context["idGoal"] = twig_slice($this->env, $context["idGoal"], 7, null);
                    // line 46
                    if ( !$this->getAttribute($context["loop"], "first", array())) {
                        echo ", ";
                    }
                    echo twig_escape_filter($this->env, $context["totalConversions"], "html", null, true);
                    echo " <span class=\"visitor-profile-goal-name\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["goals"]) ? $context["goals"] : $this->getContext($context, "goals")), $context["idGoal"], array(), "array"), "name", array(), "array"), "html", null, true);
                    echo "</span>";
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
                unset($context['_seq'], $context['_iterated'], $context['idGoal'], $context['totalConversions'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 48
                echo ")";
            }
            echo ".</p>
                        ";
            // line 49
            if ((((($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : null), "totalEcommerceConversions", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : null), "totalEcommerceConversions", array()), 0)) : (0)) > 0) || ((($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : null), "totalAbandonedCarts", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : null), "totalAbandonedCarts", array()), 0)) : (0)) > 0))) {
                // line 50
                echo "                        <p>
                            ";
                // line 51
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_Ecommerce")), "html", null, true);
                echo ":";
                // line 52
                if (((($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : null), "totalEcommerceConversions", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : null), "totalEcommerceConversions", array()), 0)) : (0)) > 0)) {
                    echo " ";
                    echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_EcommerceSummaryConversions", "<strong>", $this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalEcommerceConversions", array()), call_user_func_array($this->env->getFilter('money')->getCallable(), array($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalEcommerceRevenue", array()), (isset($context["idSite"]) ? $context["idSite"] : $this->getContext($context, "idSite")))), "</strong>", $this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalEcommerceItems", array())));
                }
                // line 54
                if (((($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : null), "totalAbandonedCarts", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : null), "totalAbandonedCarts", array()), 0)) : (0)) > 0)) {
                    echo " ";
                    echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_AbandonedCartSummary", "<strong>", $this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalAbandonedCarts", array()), "</strong>", $this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalAbandonedCartsItems", array()), "<strong>", call_user_func_array($this->env->getFilter('money')->getCallable(), array($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalAbandonedCartsRevenue", array()), (isset($context["idSite"]) ? $context["idSite"] : $this->getContext($context, "idSite")))), "</strong>"));
                }
                // line 55
                echo "</p>
                        ";
            }
            // line 57
            echo "                        ";
            if ((($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : null), "totalSearches", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : null), "totalSearches", array()), 0)) : (0))) {
                // line 58
                echo "                        <p>
                            ";
                // line 59
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Actions_WidgetSearchKeywords")), "html", null, true);
                echo ":";
                // line 60
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "searches", array()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                    echo " <strong title=\"";
                    if (($this->getAttribute($context["entry"], "searches", array()) == 1)) {
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Actions_OneSearch")), "html", null, true);
                    } else {
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountryMap_Searches", $this->getAttribute($context["entry"], "searches", array()))), "html", null, true);
                    }
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "keyword", array()), "html", null, true);
                    echo "</strong>";
                    if ( !$this->getAttribute($context["loop"], "last", array())) {
                        echo ",";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                echo "                        </p>
                        ";
            }
            // line 63
            echo "                        ";
            if ($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : null), "averagePageGenerationTime", array(), "any", true, true)) {
                // line 64
                echo "                        <p title=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_CalculatedOverNPageViews", $this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalPageViewsWithTiming", array()))), "html", null, true);
                echo "\">
                            ";
                // line 65
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_AveragePageGenerationTime", (("<strong>" . $this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "averagePageGenerationTime", array())) . "s</strong>")));
                echo "
                        </p>
                        ";
            }
            // line 68
            echo "                    </div>
                </div>
                <div class=\"visitor-profile-important-visits\">";
            // line 71
            $context["keywordNotDefined"] = call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_NotDefined", call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ColumnKeyword"))));
            // line 72
            echo "<div>
                        <h1>";
            // line 73
            if (($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "visitsAggregated", array()) == 100)) {
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Visit")), "html", null, true);
                echo "# 100";
            } else {
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_FirstVisit")), "html", null, true);
            }
            echo "</h1>
                        <div>
                            <p><strong>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "firstVisit", array()), "prettyDate", array()), "html", null, true);
            echo "</strong><span>&nbsp;- ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountryMap_DaysAgo", $this->getAttribute($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "firstVisit", array()), "daysAgo", array()))), "html", null, true);
            echo "</span></p>
                            <p><span>";
            // line 76
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_FromReferrer")), "html", null, true);
            echo ":</span>
                            <strong ";
            // line 77
            if ((($this->getAttribute($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "firstVisit", array()), "referrerType", array()) == "search") && !twig_in_filter("(", $this->getAttribute($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "firstVisit", array()), "referralSummary", array())))) {
                echo "title=\"";
                echo twig_escape_filter($this->env, (isset($context["keywordNotDefined"]) ? $context["keywordNotDefined"] : $this->getContext($context, "keywordNotDefined")), "html", null, true);
                echo "\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "firstVisit", array()), "referralSummary", array()), "html", null, true);
            echo "</strong></p>
                        </div>
                    </div>
                    ";
            // line 80
            if (($this->getAttribute($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "lastVisits", array()), "getRowsCount", array(), "method") != 1)) {
                // line 81
                echo "                    <div>
                        <h1>";
                // line 82
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_LastVisit")), "html", null, true);
                echo "</h1>
                        <div>
                            <p><strong>";
                // line 84
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "lastVisit", array()), "prettyDate", array()), "html", null, true);
                echo "</strong><span>&nbsp;- ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountryMap_DaysAgo", $this->getAttribute($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "lastVisit", array()), "daysAgo", array()))), "html", null, true);
                echo "</span></p>
                            <p><span>";
                // line 85
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_FromReferrer")), "html", null, true);
                echo ":</span>
                            <strong ";
                // line 86
                if ((($this->getAttribute($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "lastVisit", array()), "referrerType", array()) == "search") && !twig_in_filter("(", $this->getAttribute($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "lastVisit", array()), "referralSummary", array())))) {
                    echo "title=\"";
                    echo twig_escape_filter($this->env, (isset($context["keywordNotDefined"]) ? $context["keywordNotDefined"] : $this->getContext($context, "keywordNotDefined")), "html", null, true);
                    echo "\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "lastVisit", array()), "referralSummary", array()), "html", null, true);
                echo "</strong></p>
                        </div>
                    </div>
                    ";
            }
            // line 90
            echo "                </div>
                <div>
                    <div class=\"visitor-profile-location\">
                        <h1>";
            // line 93
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_Location")), "html", null, true);
            echo "</h1>
                        <p>";
            // line 95
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "countries", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 97
                ob_start();
                // line 98
                if ((($this->getAttribute($context["entry"], "cities", array(), "any", true, true) && (1 == twig_length_filter($this->env, $this->getAttribute($context["entry"], "cities", array())))) && twig_join_filter($this->getAttribute($context["entry"], "cities", array())))) {
                    // line 99
                    echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($context["entry"], "cities", array())), "html", null, true);
                } elseif (($this->getAttribute(                // line 100
$context["entry"], "cities", array(), "any", true, true) && (1 < twig_length_filter($this->env, $this->getAttribute($context["entry"], "cities", array()))))) {
                    // line 101
                    echo "<span title=\"";
                    echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($context["entry"], "cities", array()), ", "), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_FromDifferentCities")), "html", null, true);
                    echo "</span>";
                }
                $context["entryCity"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 104
                echo "
                                ";
                // line 105
                ob_start();
                // line 106
                echo "<strong>
                                        ";
                // line 107
                if (($this->getAttribute($context["entry"], "nb_visits", array()) == 1)) {
                    // line 108
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_OneVisit")), "html", null, true);
                } else {
                    // line 110
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_NVisits", $this->getAttribute($context["entry"], "nb_visits", array()))), "html", null, true);
                }
                // line 112
                echo "</strong>";
                $context["entryVisits"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 114
                echo "
                                ";
                // line 115
                ob_start();
                // line 116
                if ((isset($context["entryCity"]) ? $context["entryCity"] : $this->getContext($context, "entryCity"))) {
                    // line 117
                    echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_CityAndCountry", (isset($context["entryCity"]) ? $context["entryCity"] : $this->getContext($context, "entryCity")), $this->getAttribute($context["entry"], "prettyName", array())));
                } else {
                    // line 119
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "prettyName", array()), "html", null, true);
                }
                // line 122
                echo "&nbsp;<img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "flag", array()), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "prettyName", array()), "html", null, true);
                echo "\"/>";
                $context["entryCountry"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 125
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_XFromY", (isset($context["entryVisits"]) ? $context["entryVisits"] : $this->getContext($context, "entryVisits")), (isset($context["entryCountry"]) ? $context["entryCountry"] : $this->getContext($context, "entryCountry"))));
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            echo "                                <a class=\"visitor-profile-show-map\" href=\"#\" ";
            if (twig_test_empty(((array_key_exists("userCountryMapUrl", $context)) ? (_twig_default_filter((isset($context["userCountryMapUrl"]) ? $context["userCountryMapUrl"] : $this->getContext($context, "userCountryMapUrl")), "")) : ("")))) {
                echo "style=\"display:none\"";
            }
            echo ">(";
            echo strtr(call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_ShowMap")), array(" " => "&nbsp;"));
            echo ")</a> <img class=\"loadingPiwik\" style=\"display:none;\" src=\"plugins/Morpheus/images/loading-blue.gif\"/>
                        </p>
                        <div class=\"visitor-profile-map\" style=\"display:none\" data-href=\"";
            // line 129
            echo twig_escape_filter($this->env, ((array_key_exists("userCountryMapUrl", $context)) ? (_twig_default_filter((isset($context["userCountryMapUrl"]) ? $context["userCountryMapUrl"] : $this->getContext($context, "userCountryMapUrl")), "")) : ("")), "html", null, true);
            echo "\">
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"visitor-profile-visits-info\">
                <div class=\"visitor-profile-pages-visited\">
                    <h1>";
            // line 136
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_VisitedPages")), "html", null, true);
            echo "</h1>
                </div>
                <div class=\"visitor-profile-visits-container\">
                    <ol class=\"visitor-profile-visits\">
                        ";
            // line 140
            $this->loadTemplate("@Live/getVisitList.twig", "@Live/getVisitorProfilePopup.twig", 140)->display(array_merge($context, array("visits" => $this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "lastVisits", array()), "startCounter" => 1)));
            // line 141
            echo "                    </ol>
                </div>
                <div class=\"visitor-profile-more-info\">
                    ";
            // line 144
            if (($this->getAttribute($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "lastVisits", array()), "getRowsCount", array(), "method") >= twig_constant("Piwik\\Plugins\\Live\\VisitorProfile::VISITOR_PROFILE_MAX_VISITS_TO_SHOW"))) {
                // line 145
                echo "                    <a href=\"#\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_LoadMoreVisits")), "html", null, true);
                echo "</a> <img class=\"loadingPiwik\" style=\"display:none;\" src=\"plugins/Morpheus/images/loading-blue.gif\"/>
                    ";
            } else {
                // line 147
                echo "                    <span class=\"visitor-profile-no-visits\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_NoMoreVisits")), "html", null, true);
                echo "</span>
                    ";
            }
            // line 149
            echo "                </div>
            </div>
        </div>
    </div>
</div>
<script type=\"text/javascript\">
\$(function() { require('piwik/UI').VisitorProfileControl.initElements(); });
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "@Live/getVisitorProfilePopup.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  487 => 149,  481 => 147,  475 => 145,  473 => 144,  468 => 141,  466 => 140,  459 => 136,  449 => 129,  439 => 127,  422 => 125,  415 => 122,  412 => 119,  409 => 117,  407 => 116,  405 => 115,  402 => 114,  399 => 112,  396 => 110,  393 => 108,  391 => 107,  388 => 106,  386 => 105,  383 => 104,  375 => 101,  373 => 100,  371 => 99,  369 => 98,  367 => 97,  350 => 95,  346 => 93,  341 => 90,  328 => 86,  324 => 85,  318 => 84,  313 => 82,  310 => 81,  308 => 80,  296 => 77,  292 => 76,  286 => 75,  276 => 73,  273 => 72,  271 => 71,  267 => 68,  261 => 65,  256 => 64,  253 => 63,  249 => 61,  208 => 60,  205 => 59,  202 => 58,  199 => 57,  195 => 55,  190 => 54,  185 => 52,  182 => 51,  179 => 50,  177 => 49,  172 => 48,  152 => 46,  150 => 45,  133 => 44,  130 => 43,  122 => 42,  118 => 41,  113 => 39,  106 => 34,  104 => 33,  100 => 31,  94 => 30,  90 => 29,  86 => 27,  76 => 26,  73 => 25,  67 => 24,  58 => 18,  54 => 17,  50 => 16,  38 => 7,  34 => 6,  30 => 5,  27 => 4,  21 => 2,  19 => 1,);
    }
}
