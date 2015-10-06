<?php

/* @UsersManager/userSettings.twig */
class __TwigTemplate_2a1f36f23075eaf73d3fd653d373a80d54188c0f23995c37ccfb2207f60eb1a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("user.twig", "@UsersManager/userSettings.twig", 1);
        $this->blocks = array(
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
<h2 piwik-enriched-headline>";
        // line 5
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_PersonalSettings")), "html", null, true);
        echo "</h2>

<div class=\"ui-confirm\" id=\"confirmPasswordChange\">
    <h2>";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_ChangePasswordConfirm")), "html", null, true);
        echo "</h2>
    <input role=\"yes\" type=\"button\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
        echo "\"/>
    <input role=\"no\" type=\"button\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
        echo "\"/>
</div>

<form id=\"userSettingsTable\">

    <div class=\"form-group\">
        <label for=\"username\">";
        // line 16
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Username")), "html", null, true);
        echo "</label>
        <div class=\"form-help\">";
        // line 17
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_YourUsernameCannotBeChanged")), "html", null, true);
        echo "</div>
        <input value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["userLogin"]) ? $context["userLogin"] : $this->getContext($context, "userLogin")), "html", null, true);
        echo "\" id=\"username\" disabled=\"disabled\"/>
    </div>

    <div class=\"form-group\">
        <label for=\"alias\">";
        // line 22
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_Alias")), "html", null, true);
        echo "</label>
        <input value=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["userAlias"]) ? $context["userAlias"] : $this->getContext($context, "userAlias")), "html", null, true);
        echo "\" id=\"alias\" />
    </div>

    <div class=\"form-group\">
        <label for=\"email\">";
        // line 27
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_Email")), "html", null, true);
        echo "</label>
        <input value=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["userEmail"]) ? $context["userEmail"] : $this->getContext($context, "userEmail")), "html", null, true);
        echo "\" id=\"email\"/>
    </div>

    <div class=\"form-group\">
        <label for=\"language\">";
        // line 32
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Language")), "html", null, true);
        echo "</label>
        <div class=\"form-help\">
            <a href=\"?module=Proxy&amp;action=redirect&amp;url=http://piwik.org/translations/\" target=\"_blank\">
                ";
        // line 35
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("LanguagesManager_AboutPiwikTranslations")), "html", null, true);
        echo "</a>
        </div>
        <select name=\"language\" id=\"language\">
            ";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : $this->getContext($context, "languages")));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 39
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "code", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($context["language"], "code", array()) == (isset($context["currentLanguageCode"]) ? $context["currentLanguageCode"] : $this->getContext($context, "currentLanguageCode")))) {
                echo "selected=\"selected\"";
            }
            // line 40
            echo "                        title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "name", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "english_name", array()), "html", null, true);
            echo ")\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "name", array()), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </select>
    </div>

    <div class=\"form-group\">
        <label>";
        // line 46
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_ReportToLoadByDefault")), "html", null, true);
        echo "</label>
        <label class=\"radio\">
            <input id=\"defaultReportRadioAll\" type=\"radio\" value=\"MultiSites\"
                   name=\"defaultReport\"";
        // line 49
        if (((isset($context["defaultReport"]) ? $context["defaultReport"] : $this->getContext($context, "defaultReport")) == "MultiSites")) {
            echo " checked=\"checked\"";
        }
        echo " />
            ";
        // line 50
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_AllWebsitesDashboard")), "html", null, true);
        echo "
        </label>
        <label class=\"radio\">
            <input id=\"defaultReportSpecific\" type=\"radio\" value=\"1\"
                   name=\"defaultReport\"";
        // line 54
        if (((isset($context["defaultReport"]) ? $context["defaultReport"] : $this->getContext($context, "defaultReport")) != "MultiSites")) {
            echo " checked=\"checked\"";
        }
        echo " />
            ";
        // line 55
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_DashboardForASpecificWebsite")), "html", null, true);
        echo "
        </label>
        <div piwik-siteselector
             class=\"sites_autocomplete\"
             siteid=\"";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["defaultReportIdSite"]) ? $context["defaultReportIdSite"] : $this->getContext($context, "defaultReportIdSite")), "html", null, true);
        echo "\"
             sitename=\"";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["defaultReportSiteName"]) ? $context["defaultReportSiteName"] : $this->getContext($context, "defaultReportSiteName")), "html", null, true);
        echo "\"
             switch-site-on-select=\"false\"
             show-all-sites-item=\"false\"
             showselectedsite=\"true\"
             id=\"defaultReportSiteSelector\"
             style=\"position: relative\"></div>
    </div>

    <div class=\"form-group\">
        <label>";
        // line 69
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_ReportDateToLoadByDefault")), "html", null, true);
        echo "</label>
        ";
        // line 70
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["availableDefaultDates"]) ? $context["availableDefaultDates"] : $this->getContext($context, "availableDefaultDates")));
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
        foreach ($context['_seq'] as $context["value"] => $context["description"]) {
            // line 71
            echo "            <label class=\"radio\">
                <input id=\"defaultDate-";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" type=\"radio\"";
            if (((isset($context["defaultDate"]) ? $context["defaultDate"] : $this->getContext($context, "defaultDate")) == $context["value"])) {
                echo " checked=\"checked\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\" name=\"defaultDate\"/>
                ";
            // line 73
            echo twig_escape_filter($this->env, $context["description"], "html", null, true);
            echo "
            </label>
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
        unset($context['_seq'], $context['_iterated'], $context['value'], $context['description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "    </div>

    ";
        // line 78
        if ((array_key_exists("isValidHost", $context) && (isset($context["isValidHost"]) ? $context["isValidHost"] : $this->getContext($context, "isValidHost")))) {
            // line 79
            echo "        <div class=\"form-group\">
            <label for=\"password\">";
            // line 80
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ChangePassword")), "html", null, true);
            echo "</label>
            <div class=\"form-help\">
                ";
            // line 82
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_IfYouWouldLikeToChangeThePasswordTypeANewOne")), "html", null, true);
            echo "
            </div>
            <input value=\"\" autocomplete=\"off\" id=\"password\" type=\"password\"/>
        </div>
        <div class=\"form-group\">
            <div class=\"form-help\">
                ";
            // line 88
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_TypeYourPasswordAgain")), "html", null, true);
            echo "
            </div>
            <input value=\"\" autocomplete=\"off\" id=\"passwordBis\" type=\"password\"/>
        </div>
    ";
        }
        // line 93
        echo "
    ";
        // line 94
        if (( !array_key_exists("isValidHost", $context) ||  !(isset($context["isValidHost"]) ? $context["isValidHost"] : $this->getContext($context, "isValidHost")))) {
            // line 95
            echo "        <div class=\"alert alert-danger\">
            ";
            // line 96
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_InjectedHostCannotChangePwd", (isset($context["invalidHost"]) ? $context["invalidHost"] : $this->getContext($context, "invalidHost")))), "html", null, true);
            echo "
            ";
            // line 97
            if ( !(isset($context["isSuperUser"]) ? $context["isSuperUser"] : $this->getContext($context, "isSuperUser"))) {
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_EmailYourAdministrator", (isset($context["invalidHostMailLinkStart"]) ? $context["invalidHostMailLinkStart"] : $this->getContext($context, "invalidHostMailLinkStart")), "</a>"));
            }
            // line 98
            echo "        </div>
    ";
        }
        // line 100
        echo "
    ";
        // line 101
        $context["ajax"] = $this->loadTemplate("ajaxMacros.twig", "@UsersManager/userSettings.twig", 101);
        // line 102
        echo "    ";
        echo $context["ajax"]->geterrorDiv("ajaxErrorUserSettings");
        echo "
    ";
        // line 103
        echo $context["ajax"]->getloadingDiv("ajaxLoadingUserSettings");
        echo "

    <button type=\"button\" id=\"userSettingsSubmit\">";
        // line 105
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Save")), "html", null, true);
        echo "</button>

</form>

<h2 id=\"excludeCookie\">";
        // line 109
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_ExcludeVisitsViaCookie")), "html", null, true);
        echo "</h2>
<p>
    ";
        // line 111
        if ((isset($context["ignoreCookieSet"]) ? $context["ignoreCookieSet"] : $this->getContext($context, "ignoreCookieSet"))) {
            // line 112
            echo "       ";
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_YourVisitsAreIgnoredOnDomain", "<strong>", (isset($context["piwikHost"]) ? $context["piwikHost"] : $this->getContext($context, "piwikHost")), "</strong>"));
            echo "
    ";
        } else {
            // line 114
            echo "       ";
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_YourVisitsAreNotIgnored", "<strong>", "</strong>"));
            echo "
    ";
        }
        // line 116
        echo "</p>
<span style=\"margin-left:20px;\">
<a href='";
        // line 118
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("ignoreSalt" => (isset($context["ignoreSalt"]) ? $context["ignoreSalt"] : $this->getContext($context, "ignoreSalt")), "action" => "setIgnoreCookie"))), "html", null, true);
        echo "#excludeCookie'>&rsaquo; ";
        if ((isset($context["ignoreCookieSet"]) ? $context["ignoreCookieSet"] : $this->getContext($context, "ignoreCookieSet"))) {
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_ClickHereToDeleteTheCookie")), "html", null, true);
            echo "
    ";
        } else {
            // line 119
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_ClickHereToSetTheCookieOnDomain", (isset($context["piwikHost"]) ? $context["piwikHost"] : $this->getContext($context, "piwikHost")))), "html", null, true);
        }
        // line 120
        echo "    <br/>
</a></span>

";
    }

    public function getTemplateName()
    {
        return "@UsersManager/userSettings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  342 => 120,  339 => 119,  331 => 118,  327 => 116,  321 => 114,  315 => 112,  313 => 111,  308 => 109,  301 => 105,  296 => 103,  291 => 102,  289 => 101,  286 => 100,  282 => 98,  278 => 97,  274 => 96,  271 => 95,  269 => 94,  266 => 93,  258 => 88,  249 => 82,  244 => 80,  241 => 79,  239 => 78,  235 => 76,  218 => 73,  208 => 72,  205 => 71,  188 => 70,  184 => 69,  172 => 60,  168 => 59,  161 => 55,  155 => 54,  148 => 50,  142 => 49,  136 => 46,  130 => 42,  117 => 40,  110 => 39,  106 => 38,  100 => 35,  94 => 32,  87 => 28,  83 => 27,  76 => 23,  72 => 22,  65 => 18,  61 => 17,  57 => 16,  48 => 10,  44 => 9,  40 => 8,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
