<?php

/* @UserCountry/adminIndex.twig */
class __TwigTemplate_fc8eb6ab1cd9abd1902c8e08879aeb7bc497ff5c7af1854a3d2d7754fe10c7fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.twig", "@UserCountry/adminIndex.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        $context["piwik"] = $this->loadTemplate("macros.twig", "@UserCountry/adminIndex.twig", 4);
        // line 5
        echo "
<h2 piwik-enriched-headline
    help-url=\"http://piwik.org/docs/geo-locate/\"
    id=\"location-providers\">";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_Geolocation")), "html", null, true);
        echo "</h2>

<div style=\"width:900px;\">

    <p>";
        // line 12
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_GeolocationPageDesc")), "html", null, true);
        echo "</p>

    ";
        // line 14
        if ( !(isset($context["isThereWorkingProvider"]) ? $context["isThereWorkingProvider"] : $this->getContext($context, "isThereWorkingProvider"))) {
            // line 15
            echo "        <h3 style=\"margin-top:0;\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_HowToSetupGeoIP")), "html", null, true);
            echo "</h3>
        <p>";
            // line 16
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_HowToSetupGeoIPIntro")), "html", null, true);
            echo "</p>
        <ul style=\"list-style:disc;margin-left:2em;\">
            <li>";
            // line 18
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_HowToSetupGeoIP_Step1", "<a href=\"http://geolite.maxmind.com/download/geoip/database/GeoLiteCity.dat.gz\">", "</a>", "<a rel=\"noreferrer\"  target=\"_blank\" href=\"http://www.maxmind.com/?rId=piwik\">", "</a>"));
            echo "</li>
            <li>";
            // line 19
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_HowToSetupGeoIP_Step2", "'GeoLiteCity.dat'", "<strong>", "</strong>"));
            echo "</li>
            <li>";
            // line 20
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_HowToSetupGeoIP_Step3", "<strong>", "</strong>", "<span style=\"color:green\"><strong>", "</strong></span>"));
            echo "</li>
            <li>";
            // line 21
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_HowToSetupGeoIP_Step4")), "html", null, true);
            echo "</li>
        </ul>
        <p>&nbsp;</p>
    ";
        }
        // line 25
        echo "
    <table class=\"adminTable locationProviderTable\">
        <tr>
            <th>";
        // line 28
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_LocationProvider")), "html", null, true);
        echo "</th>
            <th>";
        // line 29
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Description")), "html", null, true);
        echo "</th>
            <th>";
        // line 30
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_InfoFor", (isset($context["thisIP"]) ? $context["thisIP"] : $this->getContext($context, "thisIP")))), "html", null, true);
        echo "</th>
        </tr>
        ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["locationProviders"]) ? $context["locationProviders"] : $this->getContext($context, "locationProviders")));
        foreach ($context['_seq'] as $context["id"] => $context["provider"]) {
            // line 33
            echo "        <tr>
            <td width=\"150\">
                <p>
                    <input class=\"location-provider\" name=\"location-provider\" value=\"";
            // line 36
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\" type=\"radio\" ";
            if (((isset($context["currentProviderId"]) ? $context["currentProviderId"] : $this->getContext($context, "currentProviderId")) == $context["id"])) {
                echo "checked=\"checked\"";
            }
            // line 37
            echo "                           id=\"provider_input_";
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\" ";
            if (($this->getAttribute($context["provider"], "status", array()) != 1)) {
                echo "disabled=\"disabled\"";
            }
            echo "/>
                    <label for=\"provider_input_";
            // line 38
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array($this->getAttribute($context["provider"], "title", array()))), "html", null, true);
            echo "</label><br/>
                    <span class=\"loadingPiwik\" style=\"display:none;\"><img src=\"./plugins/Morpheus/images/loading-blue.gif\"/></span>
                    <span class=\"success\" ></span>
                </p>

                <p class=\"loc-provider-status\">
                    <strong><em>
                            ";
            // line 45
            if (($this->getAttribute($context["provider"], "status", array()) == 0)) {
                // line 46
                echo "                                <span class=\"is-not-installed\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_NotInstalled")), "html", null, true);
                echo "</span>
                            ";
            } elseif (($this->getAttribute(            // line 47
$context["provider"], "status", array()) == 1)) {
                // line 48
                echo "                                <span class=\"is-installed\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Installed")), "html", null, true);
                echo "</span>
                            ";
            } elseif (($this->getAttribute(            // line 49
$context["provider"], "status", array()) == 2)) {
                // line 50
                echo "                                <span class=\"is-broken\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Broken")), "html", null, true);
                echo "</span>
                            ";
            }
            // line 52
            echo "                        </em></strong>
                </p>
            </td>
            <td>
                <p>";
            // line 56
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array($this->getAttribute($context["provider"], "description", array())));
            echo "</p>
                ";
            // line 57
            if ((($this->getAttribute($context["provider"], "status", array()) != 1) && $this->getAttribute($context["provider"], "install_docs", array(), "any", true, true))) {
                // line 58
                echo "                    <p>";
                echo $this->getAttribute($context["provider"], "install_docs", array());
                echo "</p>
                ";
            }
            // line 60
            echo "            </td>
            <td width=\"164\">
                ";
            // line 62
            if (($this->getAttribute($context["provider"], "status", array()) == 1)) {
                // line 63
                echo "                    <div class=\"alert alert-info\">
                        ";
                // line 64
                if (((isset($context["thisIP"]) ? $context["thisIP"] : $this->getContext($context, "thisIP")) != "127.0.0.1")) {
                    // line 65
                    echo "                            ";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_CurrentLocationIntro")), "html", null, true);
                    echo ":
                            <div>
                                <br/>
                                <span class=\"loadingPiwik\" style=\"display:none;position:absolute;\">
                                    <img src=\"./plugins/Morpheus/images/loading-blue.gif\"/> ";
                    // line 69
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Loading")), "html", null, true);
                    echo "</span>
                                <span class=\"location\"><strong>";
                    // line 70
                    echo $this->getAttribute($context["provider"], "location", array());
                    echo "</strong></span>
                            </div>
                            <div class=\"text-right\">
                                <a href=\"#\" class=\"refresh-loc\" data-impl-id=\"";
                    // line 73
                    echo twig_escape_filter($this->env, $context["id"], "html", null, true);
                    echo "\"><em>";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Refresh")), "html", null, true);
                    echo "</em></a>
                            </div>
                        ";
                } else {
                    // line 76
                    echo "                            ";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_CannotLocalizeLocalIP", (isset($context["thisIP"]) ? $context["thisIP"] : $this->getContext($context, "thisIP")))), "html", null, true);
                    echo "
                        ";
                }
                // line 78
                echo "                    </div>
                ";
            }
            // line 80
            echo "                ";
            if (($this->getAttribute($context["provider"], "statusMessage", array(), "any", true, true) && $this->getAttribute($context["provider"], "statusMessage", array()))) {
                // line 81
                echo "                    <div class=\"alert alert-info\">
                        ";
                // line 82
                if (($this->getAttribute($context["provider"], "status", array()) == 2)) {
                    echo "<strong>";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Error")), "html", null, true);
                    echo ":</strong> ";
                }
                echo $this->getAttribute($context["provider"], "statusMessage", array());
                echo "
                    </div>
                ";
            }
            // line 85
            echo "                ";
            if (($this->getAttribute($context["provider"], "extra_message", array(), "any", true, true) && $this->getAttribute($context["provider"], "extra_message", array()))) {
                // line 86
                echo "                    <div class=\"alert alert-info\">
                        ";
                // line 87
                echo $this->getAttribute($context["provider"], "extra_message", array());
                echo "
                    </div>
                ";
            }
            // line 90
            echo "            </td>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['provider'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "    </table>

</div>

";
        // line 96
        if ( !(isset($context["geoIPDatabasesInstalled"]) ? $context["geoIPDatabasesInstalled"] : $this->getContext($context, "geoIPDatabasesInstalled"))) {
            // line 97
            echo "    <h2 id=\"geoip-db-mangement\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_GeoIPDatabases")), "html", null, true);
            echo "</h2>
";
        } else {
            // line 99
            echo "    <h2 id=\"geoip-db-mangement\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_SetupAutomaticUpdatesOfGeoIP")), "html", null, true);
            echo "</h2>
";
        }
        // line 101
        echo "
";
        // line 102
        if ((isset($context["showGeoIPUpdateSection"]) ? $context["showGeoIPUpdateSection"] : $this->getContext($context, "showGeoIPUpdateSection"))) {
            // line 103
            echo "    <div id=\"manage-geoip-dbs\" style=\"width:900px;\" class=\"adminTable\">

    ";
            // line 105
            if ( !(isset($context["geoIPDatabasesInstalled"]) ? $context["geoIPDatabasesInstalled"] : $this->getContext($context, "geoIPDatabasesInstalled"))) {
                // line 106
                echo "        <div id=\"geoipdb-screen1\">
            <p>";
                // line 107
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_PiwikNotManagingGeoIPDBs")), "html", null, true);
                echo "</p>

            <div class=\"geoipdb-column-1\">
                <p>";
                // line 110
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_IWantToDownloadFreeGeoIP"));
                echo "</p>
                <input type=\"button\" class=\"submit\" value=\"";
                // line 111
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_GetStarted")), "html", null, true);
                echo "...\" id=\"start-download-free-geoip\"/>
            </div>
            <div class=\"geoipdb-column-2\">
                <p>";
                // line 114
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_IPurchasedGeoIPDBs", "<a href=\"http://www.maxmind.com/en/geolocation_landing?rId=piwik\">", "</a>"));
                echo "</p>
                <input type=\"button\" class=\"submit\" value=\"";
                // line 115
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_GetStarted")), "html", null, true);
                echo "...\" id=\"start-automatic-update-geoip\"/>
            </div>
        </div>
        <div id=\"geoipdb-screen2-download\" style=\"display:none;\">
            <p class='loadingPiwik'><img src='./plugins/Morpheus/images/loading-blue.gif'/>
            ";
                // line 120
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_DownloadingDb", (("<a href=\"" . (isset($context["geoLiteUrl"]) ? $context["geoLiteUrl"] : $this->getContext($context, "geoLiteUrl"))) . "\">GeoLiteCity.dat</a>")));
                echo "...</p>
\t        <div id=\"geoip-download-progress\"></div>
        </div>
    ";
            }
            // line 124
            echo "    ";
            $this->loadTemplate("@UserCountry/_updaterManage.twig", "@UserCountry/adminIndex.twig", 124)->display($context);
        } else {
            // line 126
            echo "<p style=\"width:900px;\" class=\"form-description\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_CannotSetupGeoIPAutoUpdating")), "html", null, true);
            echo "</p>
";
        }
        // line 128
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "@UserCountry/adminIndex.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  337 => 128,  331 => 126,  327 => 124,  320 => 120,  312 => 115,  308 => 114,  302 => 111,  298 => 110,  292 => 107,  289 => 106,  287 => 105,  283 => 103,  281 => 102,  278 => 101,  272 => 99,  266 => 97,  264 => 96,  258 => 92,  251 => 90,  245 => 87,  242 => 86,  239 => 85,  228 => 82,  225 => 81,  222 => 80,  218 => 78,  212 => 76,  204 => 73,  198 => 70,  194 => 69,  186 => 65,  184 => 64,  181 => 63,  179 => 62,  175 => 60,  169 => 58,  167 => 57,  163 => 56,  157 => 52,  151 => 50,  149 => 49,  144 => 48,  142 => 47,  137 => 46,  135 => 45,  123 => 38,  114 => 37,  108 => 36,  103 => 33,  99 => 32,  94 => 30,  90 => 29,  86 => 28,  81 => 25,  74 => 21,  70 => 20,  66 => 19,  62 => 18,  57 => 16,  52 => 15,  50 => 14,  45 => 12,  38 => 8,  33 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
