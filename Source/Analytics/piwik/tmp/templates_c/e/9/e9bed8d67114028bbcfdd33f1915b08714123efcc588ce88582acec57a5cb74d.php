<?php

/* @CoreAdminHome/trackingCodeGenerator.twig */
class __TwigTemplate_e9bed8d67114028bbcfdd33f1915b08714123efcc588ce88582acec57a5cb74d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("user.twig", "@CoreAdminHome/trackingCodeGenerator.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "user.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"plugins/CoreAdminHome/stylesheets/jsTrackingGenerator.css\" />
    <script type=\"text/javascript\" src=\"plugins/CoreAdminHome/javascripts/jsTrackingGenerator.js\"></script>
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "<div id=\"js-tracking-generator-data\" max-custom-variables=\"";
        echo twig_escape_filter($this->env, (isset($context["maxCustomVariables"]) ? $context["maxCustomVariables"] : $this->getContext($context, "maxCustomVariables")), "html_attr");
        echo "\" data-currencies=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["currencySymbols"]) ? $context["currencySymbols"] : $this->getContext($context, "currencySymbols"))), "html", null, true);
        echo "\"></div>

<h2 piwik-enriched-headline
    feature-name=\"";
        // line 13
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_TrackingCode")), "html", null, true);
        echo "\"
    help-url=\"http://piwik.org/docs/tracking-api/\">";
        // line 14
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_JavaScriptTracking")), "html", null, true);
        echo "</h2>

<div id=\"js-code-options\">

    <p>
        ";
        // line 19
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_JSTrackingIntro1")), "html", null, true);
        echo "
        <br/><br/>
        ";
        // line 21
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_JSTrackingIntro2")), "html", null, true);
        echo " ";
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_JSTrackingIntro3", "<a href=\"http://piwik.org/integrate/\" rel=\"noreferrer\"  target=\"_blank\">", "</a>"));
        echo "
        <br/><br/>
        ";
        // line 23
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_JSTrackingIntro4", "<a href=\"#image-tracking-link\">", "</a>"));
        echo "
        <br/><br/>
        ";
        // line 25
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_JSTrackingIntro5", "<a rel=\"noreferrer\"  target=\"_blank\" href=\"http://piwik.org/docs/javascript-tracking/\">", "</a>"));
        echo "
    </p>

    <div class=\"form-group\">
        ";
        // line 30
        echo "        <label>";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Website")), "html", null, true);
        echo "</label>

        <div piwik-siteselector
             class=\"sites_autocomplete\"
             siteid=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["idSite"]) ? $context["idSite"] : $this->getContext($context, "idSite")), "html", null, true);
        echo "\"
             sitename=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["defaultReportSiteName"]) ? $context["defaultReportSiteName"] : $this->getContext($context, "defaultReportSiteName")), "html", null, true);
        echo "\"
             show-all-sites-item=\"false\"
             switch-site-on-select=\"false\"
             id=\"js-tracker-website\"
             show-selected-site=\"true\"></div>
    </div>

    <h3>";
        // line 42
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Options")), "html", null, true);
        echo "</h3>

    <div id=\"optional-js-tracking-options\">

        ";
        // line 47
        echo "        <div class=\"form-group\">
            <div class=\"form-help\">
                ";
        // line 49
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_JSTracking_MergeSubdomainsDesc", (("x.<span class='current-site-host'>" . (isset($context["defaultReportSiteDomain"]) ? $context["defaultReportSiteDomain"] : $this->getContext($context, "defaultReportSiteDomain"))) . "</span>"), (("y.<span class='current-site-host'>" . (isset($context["defaultReportSiteDomain"]) ? $context["defaultReportSiteDomain"] : $this->getContext($context, "defaultReportSiteDomain"))) . "</span>")));
        echo "
            </div>
            <label class=\"checkbox\">
                <input type=\"checkbox\" id=\"javascript-tracking-all-subdomains\"/>
                ";
        // line 53
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_JSTracking_MergeSubdomains")), "html", null, true);
        echo "
                <span class='current-site-name'>";
        // line 54
        echo (isset($context["defaultReportSiteName"]) ? $context["defaultReportSiteName"] : $this->getContext($context, "defaultReportSiteName"));
        echo "</span>
            </label>
        </div>

        ";
        // line 59
        echo "        <div class=\"form-group\">
            <div class=\"form-help\">
                ";
        // line 61
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_JSTracking_GroupPageTitlesByDomainDesc1", (("<span class='current-site-host'>" . (isset($context["defaultReportSiteDomain"]) ? $context["defaultReportSiteDomain"] : $this->getContext($context, "defaultReportSiteDomain"))) . "</span>")));
        echo "
            </div>
            <label class=\"checkbox\">
                <input type=\"checkbox\" id=\"javascript-tracking-group-by-domain\"/>
                ";
        // line 65
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_JSTracking_GroupPageTitlesByDomain")), "html", null, true);
        echo "
            </label>
        </div>

        ";
        // line 70
        echo "        <div class=\"form-group\">
            <div class=\"form-help\">
                ";
        // line 72
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_JSTracking_MergeAliasesDesc", (("<span class='current-site-alias'>" . (isset($context["defaultReportSiteAlias"]) ? $context["defaultReportSiteAlias"] : $this->getContext($context, "defaultReportSiteAlias"))) . "</span>")));
        echo "
            </div>
            <label class=\"checkbox\">
                <input type=\"checkbox\" id=\"javascript-tracking-all-aliases\"/>
                ";
        // line 76
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_JSTracking_MergeAliases")), "html", null, true);
        echo "
                <span class='current-site-name'>";
        // line 77
        echo (isset($context["defaultReportSiteName"]) ? $context["defaultReportSiteName"] : $this->getContext($context, "defaultReportSiteName"));
        echo "</span>
            </label>
        </div>

        <h3>";
        // line 81
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Mobile_Advanced")), "html", null, true);
        echo "</h3>

        <p>
            <a href=\"#\" class=\"section-toggler-link\" data-section-id=\"javascript-advanced-options\">";
        // line 84
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Show")), "html", null, true);
        echo "</a>
        </p>

        <div id=\"javascript-advanced-options\" style=\"display:none;\">

            ";
        // line 90
        echo "            <div id=\"javascript-tracking-visitor-cv\">
                <div class=\"form-group\">
                    <div class=\"form-help\">
                        ";
        // line 93
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_JSTracking_VisitorCustomVarsDesc")), "html", null, true);
        echo "
                    </div>
                    <label class=\"checkbox\">
                        <input class=\"section-toggler-link\" type=\"checkbox\" id=\"javascript-tracking-visitor-cv-check\" data-section-id=\"js-visitor-cv-extra\"/>
                        ";
        // line 97
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_JSTracking_VisitorCustomVars")), "html", null, true);
        echo "
                    </label>
                </div>
                <table id=\"js-visitor-cv-extra\" style=\"display:none;\">
                    <tr>
                        <th>";
        // line 102
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Name")), "html", null, true);
        echo "</th>
                        <th>";
        // line 103
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Value")), "html", null, true);
        echo "</th>
                    </tr>
                    <tr>
                        <td><input type=\"text\" class=\"custom-variable-name\" placeholder=\"e.g. Type\"/></td>
                        <td><input type=\"text\" class=\"custom-variable-value\" placeholder=\"e.g. Customer\"/></td>
                    </tr>
                    <tr>
                        <td colspan=\"4\" style=\"text-align:right;\">
                            <a href=\"#\" class=\"add-custom-variable\">";
        // line 111
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Add")), "html", null, true);
        echo "</a>
                        </td>
                    </tr>
                </table>
            </div>

            ";
        // line 118
        echo "            <div class=\"form-group\">
                <div class=\"form-help\">
                    ";
        // line 120
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_JSTracking_EnableDoNotTrackDesc")), "html", null, true);
        echo "
                    ";
        // line 121
        if ((isset($context["serverSideDoNotTrackEnabled"]) ? $context["serverSideDoNotTrackEnabled"] : $this->getContext($context, "serverSideDoNotTrackEnabled"))) {
            // line 122
            echo "                        <br/>
                        ";
            // line 123
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_JSTracking_EnableDoNotTrack_AlreadyEnabled")), "html", null, true);
            echo "
                    ";
        }
        // line 125
        echo "                </div>
                <label class=\"checkbox\">
                    <input type=\"checkbox\" id=\"javascript-tracking-do-not-track\"/>
                    ";
        // line 128
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_JSTracking_EnableDoNotTrack")), "html", null, true);
        echo "
                </label>
            </div>

            ";
        // line 133
        echo "            <div class=\"form-group\">
                <div class=\"form-help\">
                    ";
        // line 135
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_JSTracking_DisableCookiesDesc")), "html", null, true);
        echo "
                </div>
                <label class=\"checkbox\">
                    <input type=\"checkbox\" id=\"javascript-tracking-disable-cookies\"/>
                    ";
        // line 139
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_JSTracking_DisableCookies")), "html", null, true);
        echo "
                </label>
            </div>

            ";
        // line 144
        echo "            <div class=\"form-group\">
                <div class=\"form-help\">
                    ";
        // line 146
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_JSTracking_CustomCampaignQueryParamDesc", "<a href=\"http://piwik.org/faq/general/#faq_119\" rel=\"noreferrer\"  target=\"_blank\">", "</a>"));
        echo "
                </div>
                <label class=\"checkbox\">
                    <input class=\"section-toggler-link\" type=\"checkbox\"
                           id=\"custom-campaign-query-params-check\"
                           data-section-id=\"js-campaign-query-param-extra\"/>
                    ";
        // line 152
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_JSTracking_CustomCampaignQueryParam")), "html", null, true);
        echo "
                </label>
            </div>
            <div style=\"display:none;\" id=\"js-campaign-query-param-extra\">
                <div class=\"form-group\">
                    <label>";
        // line 157
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_JSTracking_CampaignNameParam")), "html", null, true);
        echo "</label>
                    <input type=\"text\" id=\"custom-campaign-name-query-param\"/>
                </div>
                <div class=\"form-group\">
                    <label>";
        // line 161
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_JSTracking_CampaignKwdParam")), "html", null, true);
        echo "</label>
                    <input type=\"text\" id=\"custom-campaign-keyword-query-param\"/>
                </div>
            </div>

        </div>

    </div>

</div>

<div id=\"javascript-output-section\">
    <h3>";
        // line 173
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_JsTrackingTag")), "html", null, true);
        echo "</h3>

    <p>";
        // line 175
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_JSTracking_CodeNote", "&lt;/body&gt;"));
        echo "</p>

    <div id=\"javascript-text\">
        <textarea class=\"codeblock\"> </textarea>
    </div>
</div>

<h2 id=\"image-tracking-link\">";
        // line 182
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_ImageTracking")), "html", null, true);
        echo "</h2>

<div id=\"image-tracking-code-options\">

    <p>
        ";
        // line 187
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_ImageTrackingIntro1")), "html", null, true);
        echo " ";
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_ImageTrackingIntro2", "<em>&lt;noscript&gt;&lt;/noscript&gt;</em>"));
        echo "
    </p>
    <p>
        ";
        // line 190
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_ImageTrackingIntro3", "<a href=\"http://piwik.org/docs/tracking-api/reference/\" rel=\"noreferrer\"  target=\"_blank\">", "</a>"));
        echo "
    </p>

    ";
        // line 194
        echo "    <div class=\"form-group\">
        <label>";
        // line 195
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Website")), "html", null, true);
        echo "</label>
        <div piwik-siteselector
             class=\"sites_autocomplete\"
             siteid=\"";
        // line 198
        echo twig_escape_filter($this->env, (isset($context["idSite"]) ? $context["idSite"] : $this->getContext($context, "idSite")), "html", null, true);
        echo "\"
             sitename=\"";
        // line 199
        echo twig_escape_filter($this->env, (isset($context["defaultReportSiteName"]) ? $context["defaultReportSiteName"] : $this->getContext($context, "defaultReportSiteName")), "html", null, true);
        echo "\"
             id=\"image-tracker-website\"
             show-all-sites-item=\"false\"
             switch-site-on-select=\"false\"
             show-selected-site=\"true\"></div>
    </div>

    <h3>";
        // line 206
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Options")), "html", null, true);
        echo "</h3>

    <div id=\"image-tracking-section\">

        ";
        // line 211
        echo "        <div class=\"form-group\">
            <label for=\"image-tracker-action-name\">";
        // line 212
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Actions_ColumnPageName")), "html", null, true);
        echo "</label>
            <input type=\"text\" id=\"image-tracker-action-name\"/>
        </div>

        ";
        // line 217
        echo "        <div class=\"form-group\">
            <label class=\"checkbox\">
                <input class=\"section-toggler-link\" type=\"checkbox\" id=\"image-tracking-goal-check\" data-section-id=\"image-goal-picker-extra\"/>
                ";
        // line 220
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_TrackAGoal")), "html", null, true);
        echo "
            </label>
        </div>
        <div class=\"form-group\" style=\"display:none;\" id=\"image-goal-picker-extra\">
            <select id=\"image-tracker-goal\">
                <option value=\"\">";
        // line 225
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountryMap_None")), "html", null, true);
        echo "</option>
            </select>
            <span>";
        // line 227
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_WithOptionalRevenue")), "html", null, true);
        echo "</span>
            <div class=\"input-group\">
                <input type=\"text\" class=\"revenue\" value=\"\"/>
                <span class=\"input-group-addon\">";
        // line 230
        echo twig_escape_filter($this->env, (isset($context["defaultSiteRevenue"]) ? $context["defaultSiteRevenue"] : $this->getContext($context, "defaultSiteRevenue")), "html", null, true);
        echo "</span>
            </div>
        </div>

    </div>

    <div id=\"image-link-output-section\">
        <h3>";
        // line 237
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_ImageTrackingLink")), "html", null, true);
        echo "</h3>

        <div id=\"image-tracking-text\">
            <textarea class=\"codeblock\"> </textarea>
        </div>
    </div>

</div>

<h2>";
        // line 246
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_ImportingServerLogs")), "html", null, true);
        echo "</h2>

<p>
    ";
        // line 249
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_ImportingServerLogsDesc", "<a href=\"http://piwik.org/log-analytics/\" rel=\"noreferrer\"  target=\"_blank\">", "</a>"));
        echo "
</p>

";
    }

    public function getTemplateName()
    {
        return "@CoreAdminHome/trackingCodeGenerator.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  458 => 249,  452 => 246,  440 => 237,  430 => 230,  424 => 227,  419 => 225,  411 => 220,  406 => 217,  399 => 212,  396 => 211,  389 => 206,  379 => 199,  375 => 198,  369 => 195,  366 => 194,  360 => 190,  352 => 187,  344 => 182,  334 => 175,  329 => 173,  314 => 161,  307 => 157,  299 => 152,  290 => 146,  286 => 144,  279 => 139,  272 => 135,  268 => 133,  261 => 128,  256 => 125,  251 => 123,  248 => 122,  246 => 121,  242 => 120,  238 => 118,  229 => 111,  218 => 103,  214 => 102,  206 => 97,  199 => 93,  194 => 90,  186 => 84,  180 => 81,  173 => 77,  169 => 76,  162 => 72,  158 => 70,  151 => 65,  144 => 61,  140 => 59,  133 => 54,  129 => 53,  122 => 49,  118 => 47,  111 => 42,  101 => 35,  97 => 34,  89 => 30,  82 => 25,  77 => 23,  70 => 21,  65 => 19,  57 => 14,  53 => 13,  44 => 10,  41 => 9,  32 => 4,  29 => 3,  11 => 1,);
    }
}
