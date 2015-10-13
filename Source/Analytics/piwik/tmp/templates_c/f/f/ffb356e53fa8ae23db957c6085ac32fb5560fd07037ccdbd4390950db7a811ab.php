<?php

/* @Live/_dataTableViz_visitorLog.twig */
class __TwigTemplate_ffb356e53fa8ae23db957c6085ac32fb5560fd07037ccdbd4390950db7a811ab extends Twig_Template
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
        $context["displayVisitorsInOwnColumn"] = (((isset($context["isWidget"]) ? $context["isWidget"] : $this->getContext($context, "isWidget"))) ? (false) : (true));
        // line 2
        echo "
";
        // line 3
        $context["cycleIndex"] = 0;
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["dataTable"]) ? $context["dataTable"] : $this->getContext($context, "dataTable")), "getRows", array(), "method"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["visitor"]) {
            // line 5
            echo "    ";
            $context["visitHasEcommerceActivity"] = $this->getAttribute($context["visitor"], "getColumn", array(0 => "visitEcommerceStatusIcon"), "method");
            // line 6
            echo "    ";
            $context["breakBeforeVisitorRank"] = ((((isset($context["visitHasEcommerceActivity"]) ? $context["visitHasEcommerceActivity"] : $this->getContext($context, "visitHasEcommerceActivity")) && $this->getAttribute($context["visitor"], "getColumn", array(0 => "visitorTypeIcon"), "method"))) ? (true) : (false));
            // line 7
            echo "    ";
            ob_start();
            // line 8
            echo "
    <span class=\"visitorLogIcons\">

        <span class=\"visitorDetails\">
        ";
            // line 12
            if ($this->getAttribute($context["visitor"], "getColumn", array(0 => "browserIcon"), "method")) {
                // line 13
                echo "            <span class=\"visitorLogIconWithDetails\">
                <img src=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "browserIcon"), "method"), "html", null, true);
                echo "\"/>
                <ul class=\"details\">
                    <li>";
                // line 16
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("DevicesDetection_ColumnBrowser")), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "browser"), "method"), "html", null, true);
                echo "</li>
                    <li>";
                // line 17
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("DevicesDetection_BrowserEngine")), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "browserFamily"), "method"), "html", null, true);
                echo "</li>
                    ";
                // line 18
                if ((twig_length_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "pluginsIcons"), "method")) > 0)) {
                    echo "<li>";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Plugins")), "html", null, true);
                    echo ":
                        ";
                    // line 19
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["visitor"], "getColumn", array(0 => "pluginsIcons"), "method"));
                    foreach ($context['_seq'] as $context["_key"] => $context["pluginIcon"]) {
                        // line 20
                        echo "                            <img src=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["pluginIcon"], "pluginIcon", array()), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["pluginIcon"], "pluginName", array()), true), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["pluginIcon"], "pluginName", array()), true), "html", null, true);
                        echo "\"/>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pluginIcon'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 22
                    echo "                    </li>";
                }
                // line 23
                echo "                </ul>
            </span>
        ";
            }
            // line 26
            echo "        ";
            if ($this->getAttribute($context["visitor"], "getColumn", array(0 => "operatingSystemIcon"), "method")) {
                // line 27
                echo "            <span class=\"visitorLogIconWithDetails\">
                <img src=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "operatingSystemIcon"), "method"), "html", null, true);
                echo "\"/>
                <ul class=\"details\">
                    <li>";
                // line 30
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("DevicesDetection_ColumnOperatingSystem")), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "operatingSystem"), "method"), "html", null, true);
                echo "</li>
                </ul>
            </span>
        ";
            }
            // line 34
            echo "        ";
            if ($this->getAttribute($context["visitor"], "getColumn", array(0 => "deviceTypeIcon"), "method")) {
                // line 35
                echo "            <span class=\"visitorLogIconWithDetails\">
                <img src=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "deviceTypeIcon"), "method"), "html", null, true);
                echo "\"/>
                <ul class=\"details\">
                    <li>";
                // line 38
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("DevicesDetection_DeviceType")), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "deviceType"), "method"), "html", null, true);
                echo "</li>
                    ";
                // line 39
                if ($this->getAttribute($context["visitor"], "getColumn", array(0 => "deviceBrand"), "method")) {
                    echo "<li>";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("DevicesDetection_DeviceBrand")), "html", null, true);
                    echo ": ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "deviceBrand"), "method"), "html", null, true);
                    echo "</li>";
                }
                // line 40
                echo "                    ";
                if ($this->getAttribute($context["visitor"], "getColumn", array(0 => "deviceModel"), "method")) {
                    echo "<li>";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("DevicesDetection_DeviceModel")), "html", null, true);
                    echo ": ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "deviceModel"), "method"), "html", null, true);
                    echo "</li>";
                }
                // line 41
                echo "                    ";
                if ($this->getAttribute($context["visitor"], "getColumn", array(0 => "resolution"), "method")) {
                    echo "<li>";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Resolution_ColumnResolution")), "html", null, true);
                    echo ": ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "resolution"), "method"), "html", null, true);
                    echo "</li>";
                }
                // line 42
                echo "                </ul>
            </span>
        ";
            }
            // line 45
            echo "        </span>

        <span class=\"visitorType\">
        ";
            // line 49
            echo "            ";
            if ($this->getAttribute($context["visitor"], "getColumn", array(0 => "visitConverted"), "method")) {
                // line 50
                echo "                <span title=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_VisitConvertedNGoals", $this->getAttribute($context["visitor"], "getColumn", array(0 => "goalConversions"), "method"))), "html", null, true);
                echo "\" class='visitorRank'
                      ";
                // line 51
                if (( !(isset($context["displayVisitorsInOwnColumn"]) ? $context["displayVisitorsInOwnColumn"] : $this->getContext($context, "displayVisitorsInOwnColumn")) || (isset($context["breakBeforeVisitorRank"]) ? $context["breakBeforeVisitorRank"] : $this->getContext($context, "breakBeforeVisitorRank")))) {
                    echo "style=\"margin-left:0;\"";
                }
                echo ">
                <img src=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "visitConvertedIcon"), "method"), "html", null, true);
                echo "\"/>
                <span class='hash'>#</span>
                    ";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "goalConversions"), "method"), "html", null, true);
                echo "
                    ";
                // line 55
                if ((isset($context["visitHasEcommerceActivity"]) ? $context["visitHasEcommerceActivity"] : $this->getContext($context, "visitHasEcommerceActivity"))) {
                    // line 56
                    echo "                        &nbsp;
                        <img src=\"";
                    // line 57
                    echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "visitEcommerceStatusIcon"), "method"), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "visitEcommerceStatus"), "method"), "html", null, true);
                    echo "\"/>
                    ";
                }
                // line 59
                echo "            </span>
        ";
                // line 61
                echo "        ";
            } elseif ((isset($context["visitHasEcommerceActivity"]) ? $context["visitHasEcommerceActivity"] : $this->getContext($context, "visitHasEcommerceActivity"))) {
                // line 62
                echo "                <span><img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "visitEcommerceStatusIcon"), "method"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "visitEcommerceStatus"), "method"), "html", null, true);
                echo "\"/></span>
            ";
            }
            // line 64
            echo "        </span>
    </span>

    ";
            $context["visitorColumnContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 68
            echo "
    ";
            // line 69
            ob_start();
            // line 70
            echo "    <div class=\"visitorReferrer\">
        ";
            // line 71
            if (($this->getAttribute($context["visitor"], "getColumn", array(0 => "referrerType"), "method") == "website")) {
                // line 72
                echo "            ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Referrers_ColumnWebsite")), "html", null, true);
                echo ":
            <a href=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "referrerUrl"), "method"), "html", null, true);
                echo "\" rel=\"noreferrer\" target=\"_blank\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "referrerUrl"), "method"), "html", null, true);
                echo "\"
               style=\"text-decoration:underline;\">
                ";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "referrerName"), "method"), "html", null, true);
                echo "
            </a>
        ";
            }
            // line 78
            echo "        ";
            if (($this->getAttribute($context["visitor"], "getColumn", array(0 => "referrerType"), "method") == "campaign")) {
                // line 79
                echo "            ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Referrers_ColumnCampaign")), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "referrerName"), "method"), "html", null, true);
                echo "
            ";
                // line 80
                if ( !twig_test_empty($this->getAttribute($context["visitor"], "getColumn", array(0 => "referrerKeyword"), "method"))) {
                    echo " - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "referrerKeyword"), "method"), "html", null, true);
                }
                // line 81
                echo "        ";
            }
            // line 82
            echo "        ";
            if (($this->getAttribute($context["visitor"], "getColumn", array(0 => "referrerType"), "method") == "search")) {
                // line 83
                $context["keywordNotDefined"] = call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_NotDefined", call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ColumnKeyword"))));
                // line 84
                $context["showKeyword"] = ( !twig_test_empty($this->getAttribute($context["visitor"], "getColumn", array(0 => "referrerKeyword"), "method")) && ($this->getAttribute($context["visitor"], "getColumn", array(0 => "referrerKeyword"), "method") != (isset($context["keywordNotDefined"]) ? $context["keywordNotDefined"] : $this->getContext($context, "keywordNotDefined"))));
                // line 85
                if ($this->getAttribute($context["visitor"], "getColumn", array(0 => "searchEngineIcon"), "method")) {
                    // line 86
                    echo "                <img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "searchEngineIcon"), "method"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "referrerName"), "method"), "html", null, true);
                    echo "\"/>
            ";
                }
                // line 88
                echo "            <span ";
                if ( !(isset($context["showKeyword"]) ? $context["showKeyword"] : $this->getContext($context, "showKeyword"))) {
                    echo "title=\"";
                    echo twig_escape_filter($this->env, (isset($context["keywordNotDefined"]) ? $context["keywordNotDefined"] : $this->getContext($context, "keywordNotDefined")), "html", null, true);
                    echo "\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "referrerName"), "method"), "html", null, true);
                echo "</span>
            ";
                // line 89
                if ((isset($context["showKeyword"]) ? $context["showKeyword"] : $this->getContext($context, "showKeyword"))) {
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Referrers_Keywords")), "html", null, true);
                    echo ":
                <a href=\"";
                    // line 90
                    echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "referrerUrl"), "method"), "html", null, true);
                    echo "\" rel=\"noreferrer\" target=\"_blank\" style=\"text-decoration:underline;\">
                    \"";
                    // line 91
                    echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "referrerKeyword"), "method"), "html", null, true);
                    echo "\"</a>
            ";
                }
                // line 93
                echo "            ";
                ob_start();
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "referrerKeyword"), "method"), "html", null, true);
                $context["keyword"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 94
                echo "            ";
                ob_start();
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "referrerName"), "method"), "html", null, true);
                $context["searchName"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 95
                echo "            ";
                ob_start();
                echo "#";
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "referrerKeywordPosition"), "method"), "html", null, true);
                $context["position"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 96
                echo "            ";
                if ($this->getAttribute($context["visitor"], "getColumn", array(0 => "referrerKeywordPosition"), "method")) {
                    // line 97
                    echo "                <span title='";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_KeywordRankedOnSearchResultForThisVisitor", (isset($context["keyword"]) ? $context["keyword"] : $this->getContext($context, "keyword")), (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), (isset($context["searchName"]) ? $context["searchName"] : $this->getContext($context, "searchName")))), "html", null, true);
                    echo "' class='visitorRank'>
                                <span class='hash'>#</span>
                    ";
                    // line 99
                    echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "referrerKeywordPosition"), "method"), "html", null, true);
                    echo "
                            </span>
            ";
                }
                // line 102
                echo "        ";
            }
            // line 103
            echo "        ";
            if (($this->getAttribute($context["visitor"], "getColumn", array(0 => "referrerType"), "method") == "direct")) {
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Referrers_DirectEntry")), "html", null, true);
            }
            // line 104
            echo "    </div>
    ";
            $context["referrerContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 106
            echo "
    ";
            // line 107
            ob_start();
            // line 108
            echo "        <div class=\"card row\">

            ";
            // line 110
            if (( !twig_test_empty($this->getAttribute($context["visitor"], "getColumn", array(0 => "visitorId"), "method")) &&  !$this->getAttribute((isset($context["clientSideParameters"]) ? $context["clientSideParameters"] : $this->getContext($context, "clientSideParameters")), "hideProfileLink", array()))) {
                // line 111
                echo "                <a class=\"visitor-log-visitor-profile-link\" title=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_ViewVisitorProfile")), "html", null, true);
                echo "\" data-visitor-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "visitorId"), "method"), "html", null, true);
                echo "\">
                    <img src=\"plugins/Live/images/visitorProfileLaunch.png\"/> <span>";
                // line 112
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_ViewVisitorProfile")), "html", null, true);
                // line 113
                if ( !twig_test_empty($this->getAttribute($context["visitor"], "getColumn", array(0 => "userId"), "method"))) {
                    echo ": ";
                    echo $this->getAttribute($context["visitor"], "getColumn", array(0 => "userId"), "method");
                }
                echo "</span>
                </a>
            ";
            }
            // line 116
            echo "
        ";
            // line 117
            $context["cycleIndex"] = ((isset($context["cycleIndex"]) ? $context["cycleIndex"] : $this->getContext($context, "cycleIndex")) + 1);
            // line 118
            echo "            <div class=\"col-md-";
            if ((isset($context["displayVisitorsInOwnColumn"]) ? $context["displayVisitorsInOwnColumn"] : $this->getContext($context, "displayVisitorsInOwnColumn"))) {
                echo "3";
            } else {
                echo "4";
            }
            echo "\">
                <strong title=\"";
            // line 119
            if (($this->getAttribute($context["visitor"], "getColumn", array(0 => "visitorType"), "method") == "new")) {
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_NewVisitor")), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_VisitorsLastVisit", $this->getAttribute($context["visitor"], "getColumn", array(0 => "daysSinceLastVisit"), "method"))), "html", null, true);
            }
            echo "\">
                    ";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "serverDatePrettyFirstAction"), "method"), "html", null, true);
            echo "
                    ";
            // line 121
            if ((isset($context["isWidget"]) ? $context["isWidget"] : $this->getContext($context, "isWidget"))) {
                echo "<br/>";
            } else {
                echo "-";
            }
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "serverTimePrettyFirstAction"), "method"), "html", null, true);
            echo "</strong>
                ";
            // line 122
            if ( !twig_test_empty($this->getAttribute($context["visitor"], "getColumn", array(0 => "visitIp"), "method"))) {
                // line 123
                echo "                    <br/>
                <span title=\"";
                // line 124
                if ( !twig_test_empty($this->getAttribute($context["visitor"], "getColumn", array(0 => "userId"), "method"))) {
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_UserId")), "html", null, true);
                    echo ": ";
                    echo $this->getAttribute($context["visitor"], "getColumn", array(0 => "userId"), "method");
                }
                // line 125
                echo "
";
                // line 126
                if ( !twig_test_empty($this->getAttribute($context["visitor"], "getColumn", array(0 => "visitorId"), "method"))) {
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_VisitorID")), "html", null, true);
                    echo ": ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "visitorId"), "method"), "html", null, true);
                }
                // line 127
                if (($this->getAttribute($context["visitor"], "getColumn", array(0 => "latitude"), "method") || $this->getAttribute($context["visitor"], "getColumn", array(0 => "longitude"), "method"))) {
                    // line 128
                    echo "
";
                    // line 129
                    echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "location"), "method"), "html", null, true);
                    echo "

GPS (lat/long): ";
                    // line 131
                    echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "latitude"), "method"), "html", null, true);
                    echo ",";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "longitude"), "method"), "html", null, true);
                }
                echo "\">
                    IP: ";
                // line 132
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "visitIp"), "method"), "html", null, true);
                echo "
                    ";
                // line 133
                if ( !twig_test_empty($this->getAttribute($context["visitor"], "getColumn", array(0 => "userId"), "method"))) {
                    echo "<br/><br/>";
                    echo $this->getAttribute($context["visitor"], "getColumn", array(0 => "userId"), "method");
                }
                // line 134
                echo "
                    </span>";
            }
            // line 136
            echo "
                ";
            // line 137
            if ($this->getAttribute($context["visitor"], "getColumn", array(0 => "provider"), "method")) {
                // line 138
                echo "                    <br/>
                    ";
                // line 139
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Provider_ColumnProvider")), "html", null, true);
                echo ":
                    <a href=\"";
                // line 140
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "providerUrl"), "method"), "html", null, true);
                echo "\" rel=\"noreferrer\" target=\"_blank\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "providerName"), "method"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "providerUrl"), "method"), "html", null, true);
                echo "\" style=\"text-decoration:underline;\">
                        ";
                // line 141
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "providerName"), "method"), "html", null, true);
                echo "</a>
                ";
            }
            // line 143
            echo "                ";
            if (($this->getAttribute($context["visitor"], "getColumn", array(0 => "visitorTypeIcon"), "method") || $this->getAttribute($context["visitor"], "getColumn", array(0 => "countryFlag"), "method"))) {
                // line 144
                echo "                    <br/>
                ";
            }
            // line 146
            echo "                ";
            if ($this->getAttribute($context["visitor"], "getColumn", array(0 => "visitorTypeIcon"), "method")) {
                // line 147
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "visitorTypeIcon"), "method"), "html", null, true);
                echo "\"
                         title=\"";
                // line 148
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ReturningVisitor")), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_NVisits", $this->getAttribute($context["visitor"], "getColumn", array(0 => "visitCount"), "method"))), "html", null, true);
                echo "\"/>
                ";
            }
            // line 150
            echo "                ";
            if ($this->getAttribute($context["visitor"], "getColumn", array(0 => "countryFlag"), "method")) {
                // line 151
                echo "                    <span class=\"visitorLogIconWithDetails\">
                        <img src=\"";
                // line 152
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "countryFlag"), "method"), "html", null, true);
                echo "\"/>
                        <ul class=\"details\">
                            <li>";
                // line 154
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_Country")), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "country"), "method"), "html", null, true);
                echo "</li>
                            ";
                // line 155
                if ($this->getAttribute($context["visitor"], "getColumn", array(0 => "region"), "method")) {
                    echo "<li>";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_Region")), "html", null, true);
                    echo ": ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "region"), "method"), "html", null, true);
                    echo "</li>";
                }
                // line 156
                echo "                            ";
                if ($this->getAttribute($context["visitor"], "getColumn", array(0 => "city"), "method")) {
                    echo "<li>";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_City")), "html", null, true);
                    echo ": ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "city"), "method"), "html", null, true);
                    echo "</li>";
                }
                // line 157
                echo "                        </ul>
                    </span>
                ";
            }
            // line 160
            echo "                ";
            if ($this->getAttribute($context["visitor"], "getColumn", array(0 => "customVariables"), "method")) {
                // line 161
                echo "                    <br/>
                    ";
                // line 162
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["visitor"], "getColumn", array(0 => "customVariables"), "method"));
                foreach ($context['_seq'] as $context["id"] => $context["customVariable"]) {
                    // line 163
                    echo "                        ";
                    $context["name"] = ("customVariableName" . $context["id"]);
                    // line 164
                    echo "                        ";
                    $context["value"] = ("customVariableValue" . $context["id"]);
                    // line 165
                    echo "                        <br/>
                        <acronym title=\"";
                    // line 166
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CustomVariables_CustomVariables")), "html", null, true);
                    echo " (index ";
                    echo twig_escape_filter($this->env, $context["id"], "html", null, true);
                    echo ")\">
                            ";
                    // line 167
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('truncate')->getCallable(), array($this->getAttribute($context["customVariable"], (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), array(), "array"), 30)), "html", null, true);
                    echo "
                        </acronym>
                    ";
                    // line 169
                    if ((twig_length_filter($this->env, $this->getAttribute($context["customVariable"], (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), array(), "array")) > 0)) {
                        echo ": ";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('truncate')->getCallable(), array($this->getAttribute($context["customVariable"], (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), array(), "array"), 50)), "html", null, true);
                    }
                    // line 170
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['id'], $context['customVariable'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 171
                echo "                ";
            }
            // line 172
            echo "                ";
            if ( !(isset($context["displayVisitorsInOwnColumn"]) ? $context["displayVisitorsInOwnColumn"] : $this->getContext($context, "displayVisitorsInOwnColumn"))) {
                // line 173
                echo "                    <br/>
                    ";
                // line 174
                echo twig_escape_filter($this->env, (isset($context["visitorColumnContent"]) ? $context["visitorColumnContent"] : $this->getContext($context, "visitorColumnContent")), "html", null, true);
                echo "
                ";
            }
            // line 176
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["referrerContent"]) ? $context["referrerContent"] : $this->getContext($context, "referrerContent")), "html", null, true);
            echo "
            </div>

            ";
            // line 179
            if ((isset($context["displayVisitorsInOwnColumn"]) ? $context["displayVisitorsInOwnColumn"] : $this->getContext($context, "displayVisitorsInOwnColumn"))) {
                // line 180
                echo "                <div class=\"col-md-2 own-visitor-column\">
                    ";
                // line 181
                echo twig_escape_filter($this->env, (isset($context["visitorColumnContent"]) ? $context["visitorColumnContent"] : $this->getContext($context, "visitorColumnContent")), "html", null, true);
                echo "
                </div>
            ";
            }
            // line 184
            echo "
            <div class=\"col-md-";
            // line 185
            if ((isset($context["displayVisitorsInOwnColumn"]) ? $context["displayVisitorsInOwnColumn"] : $this->getContext($context, "displayVisitorsInOwnColumn"))) {
                echo "7";
            } else {
                echo "8";
            }
            echo " column ";
            if (($this->getAttribute($context["visitor"], "getColumn", array(0 => "visitConverted"), "method") &&  !(isset($context["isWidget"]) ? $context["isWidget"] : $this->getContext($context, "isWidget")))) {
                echo "highlightField";
            }
            echo "\">
                <div class=\"visitor-log-page-list\">
                    <strong>
                        ";
            // line 188
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "actionDetails"), "method")), "html", null, true);
            echo "
                        ";
            // line 189
            if ((twig_length_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "actionDetails"), "method")) <= 1)) {
                // line 190
                echo "                            ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Action")), "html", null, true);
                echo "
                        ";
            } else {
                // line 192
                echo "                            ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Actions")), "html", null, true);
                echo "
                        ";
            }
            // line 194
            echo "                        ";
            if (($this->getAttribute($context["visitor"], "getColumn", array(0 => "visitDuration"), "method") > 0)) {
                echo "- ";
                echo $this->getAttribute($context["visitor"], "getColumn", array(0 => "visitDurationPretty"), "method");
            }
            // line 195
            echo "                    </strong>
                    <br/>
                    <ol class='visitorLog'>
                        ";
            // line 198
            $this->loadTemplate("@Live/_actionsList.twig", "@Live/_dataTableViz_visitorLog.twig", 198)->display(array_merge($context, array("actionDetails" => $this->getAttribute($context["visitor"], "getColumn", array(0 => "actionDetails"), "method"))));
            // line 199
            echo "                    </ol>
                </div>
            </div>
        </div>
    ";
            $context["visitorRow"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 204
            echo "
    ";
            // line 205
            echo twig_escape_filter($this->env, (isset($context["visitorRow"]) ? $context["visitorRow"] : $this->getContext($context, "visitorRow")), "html", null, true);
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['visitor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@Live/_dataTableViz_visitorLog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  702 => 205,  699 => 204,  692 => 199,  690 => 198,  685 => 195,  679 => 194,  673 => 192,  667 => 190,  665 => 189,  661 => 188,  647 => 185,  644 => 184,  638 => 181,  635 => 180,  633 => 179,  626 => 176,  621 => 174,  618 => 173,  615 => 172,  612 => 171,  606 => 170,  601 => 169,  596 => 167,  590 => 166,  587 => 165,  584 => 164,  581 => 163,  577 => 162,  574 => 161,  571 => 160,  566 => 157,  557 => 156,  549 => 155,  543 => 154,  538 => 152,  535 => 151,  532 => 150,  525 => 148,  520 => 147,  517 => 146,  513 => 144,  510 => 143,  505 => 141,  497 => 140,  493 => 139,  490 => 138,  488 => 137,  485 => 136,  481 => 134,  476 => 133,  472 => 132,  465 => 131,  460 => 129,  457 => 128,  455 => 127,  449 => 126,  446 => 125,  440 => 124,  437 => 123,  435 => 122,  425 => 121,  421 => 120,  413 => 119,  404 => 118,  402 => 117,  399 => 116,  390 => 113,  388 => 112,  381 => 111,  379 => 110,  375 => 108,  373 => 107,  370 => 106,  366 => 104,  361 => 103,  358 => 102,  352 => 99,  346 => 97,  343 => 96,  337 => 95,  332 => 94,  327 => 93,  322 => 91,  318 => 90,  313 => 89,  302 => 88,  294 => 86,  292 => 85,  290 => 84,  288 => 83,  285 => 82,  282 => 81,  277 => 80,  270 => 79,  267 => 78,  261 => 75,  254 => 73,  249 => 72,  247 => 71,  244 => 70,  242 => 69,  239 => 68,  233 => 64,  225 => 62,  222 => 61,  219 => 59,  212 => 57,  209 => 56,  207 => 55,  203 => 54,  198 => 52,  192 => 51,  187 => 50,  184 => 49,  179 => 45,  174 => 42,  165 => 41,  156 => 40,  148 => 39,  142 => 38,  137 => 36,  134 => 35,  131 => 34,  122 => 30,  117 => 28,  114 => 27,  111 => 26,  106 => 23,  103 => 22,  90 => 20,  86 => 19,  80 => 18,  74 => 17,  68 => 16,  63 => 14,  60 => 13,  58 => 12,  52 => 8,  49 => 7,  46 => 6,  43 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
