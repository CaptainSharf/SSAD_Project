<?php

/* @CoreHome/_headerMessage.twig */
class __TwigTemplate_a04e2519b9aa3f5ab5feeb3961ae99dd2f43edc661a4104376c0c3c51c550290 extends Twig_Template
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
        // line 2
        $context["test_latest_version_available"] = "4.0.0";
        // line 3
        $context["test_piwikUrl"] = "http://demo.piwik.org/";
        // line 4
        ob_start();
        echo twig_escape_filter($this->env, (((isset($context["piwikUrl"]) ? $context["piwikUrl"] : $this->getContext($context, "piwikUrl")) == "http://demo.piwik.org/") || ((isset($context["piwikUrl"]) ? $context["piwikUrl"] : $this->getContext($context, "piwikUrl")) == "https://demo.piwik.org/")), "html", null, true);
        $context["isPiwikDemo"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 5
        echo "
";
        // line 6
        ob_start();
        // line 7
        echo "<div id=\"updateCheckLinkContainer\">
    <span class='loadingPiwik' style=\"display:none;\"><img src='plugins/Morpheus/images/loading-blue.gif'/></span>
    <img class=\"icon\" src=\"plugins/Morpheus/images/reload.png\"/>
    <a href=\"#\" id=\"checkForUpdates\"><em>";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreHome_CheckForUpdates")), "html", null, true);
        echo "</em></a>
</div>
";
        $context["updateCheck"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 13
        echo "
";
        // line 14
        if ((((isset($context["isPiwikDemo"]) ? $context["isPiwikDemo"] : $this->getContext($context, "isPiwikDemo")) || (((isset($context["latest_version_available"]) ? $context["latest_version_available"] : $this->getContext($context, "latest_version_available")) && (isset($context["hasSomeViewAccess"]) ? $context["hasSomeViewAccess"] : $this->getContext($context, "hasSomeViewAccess"))) &&  !(isset($context["isUserIsAnonymous"]) ? $context["isUserIsAnonymous"] : $this->getContext($context, "isUserIsAnonymous")))) || (((isset($context["isSuperUser"]) ? $context["isSuperUser"] : $this->getContext($context, "isSuperUser")) && array_key_exists("adminMenu", $context)) && (isset($context["adminMenu"]) ? $context["adminMenu"] : $this->getContext($context, "adminMenu"))))) {
            // line 15
            echo "<span id=\"header_message\" class=\"";
            if (((isset($context["isPiwikDemo"]) ? $context["isPiwikDemo"] : $this->getContext($context, "isPiwikDemo")) ||  !(isset($context["latest_version_available"]) ? $context["latest_version_available"] : $this->getContext($context, "latest_version_available")))) {
                echo "header_info";
            } else {
                echo "header_alert";
            }
            echo "\">
    <span class=\"header_short\">
        ";
            // line 17
            if ((isset($context["isPiwikDemo"]) ? $context["isPiwikDemo"] : $this->getContext($context, "isPiwikDemo"))) {
                // line 18
                echo "            ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_YouAreViewingDemoShortMessage")), "html", null, true);
                echo "
        ";
            } elseif (            // line 19
(isset($context["latest_version_available"]) ? $context["latest_version_available"] : $this->getContext($context, "latest_version_available"))) {
                // line 20
                echo "            ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_NewUpdatePiwikX", (isset($context["latest_version_available"]) ? $context["latest_version_available"] : $this->getContext($context, "latest_version_available")))), "html", null, true);
                echo "
        ";
            } elseif (((            // line 21
(isset($context["isSuperUser"]) ? $context["isSuperUser"] : $this->getContext($context, "isSuperUser")) && array_key_exists("adminMenu", $context)) && (isset($context["adminMenu"]) ? $context["adminMenu"] : $this->getContext($context, "adminMenu")))) {
                // line 22
                echo "            ";
                echo (isset($context["updateCheck"]) ? $context["updateCheck"] : $this->getContext($context, "updateCheck"));
                echo "
        ";
            }
            // line 24
            echo "    </span>

    <span class=\"header_full\">
        ";
            // line 27
            if ((isset($context["isPiwikDemo"]) ? $context["isPiwikDemo"] : $this->getContext($context, "isPiwikDemo"))) {
                // line 28
                echo "            ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_YouAreViewingDemoShortMessage")), "html", null, true);
                echo "
            <br />
            ";
                // line 30
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_DownloadFullVersion", "<a href='http://piwik.org/'>", "</a>", "<a href='http://piwik.org'>piwik.org</a>"));
                echo "
            <br/>
        ";
            }
            // line 33
            echo "        ";
            if (((isset($context["latest_version_available"]) ? $context["latest_version_available"] : $this->getContext($context, "latest_version_available")) && (isset($context["isSuperUser"]) ? $context["isSuperUser"] : $this->getContext($context, "isSuperUser")))) {
                // line 34
                echo "            ";
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_PiwikXIsAvailablePleaseUpdateNow", (isset($context["latest_version_available"]) ? $context["latest_version_available"] : $this->getContext($context, "latest_version_available")), "<br /><a href='index.php?module=CoreUpdater&amp;action=newVersionAvailable'>", "</a>", "<a href='?module=Proxy&amp;action=redirect&amp;url=http://piwik.org/changelog/' target='_blank'>", "</a>"));
                echo "
        ";
            } elseif ((((            // line 35
(isset($context["latest_version_available"]) ? $context["latest_version_available"] : $this->getContext($context, "latest_version_available")) &&  !(isset($context["isPiwikDemo"]) ? $context["isPiwikDemo"] : $this->getContext($context, "isPiwikDemo"))) && (isset($context["hasSomeViewAccess"]) ? $context["hasSomeViewAccess"] : $this->getContext($context, "hasSomeViewAccess"))) &&  !(isset($context["isUserIsAnonymous"]) ? $context["isUserIsAnonymous"] : $this->getContext($context, "isUserIsAnonymous")))) {
                // line 36
                echo "            ";
                $context["updateSubject"] = twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_NewUpdatePiwikX", (isset($context["latest_version_available"]) ? $context["latest_version_available"] : $this->getContext($context, "latest_version_available")))), "url");
                // line 37
                echo "            ";
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_PiwikXIsAvailablePleaseNotifyPiwikAdmin", (("<a href='?module=Proxy&action=redirect&url=http://piwik.org/' target='_blank'>Piwik</a> <a href='?module=Proxy&action=redirect&url=http://piwik.org/changelog/' target='_blank'>" . (isset($context["latest_version_available"]) ? $context["latest_version_available"] : $this->getContext($context, "latest_version_available"))) . "</a>"), (((("<a href='mailto:" . (isset($context["superUserEmails"]) ? $context["superUserEmails"] : $this->getContext($context, "superUserEmails"))) . "?subject=") . (isset($context["updateSubject"]) ? $context["updateSubject"] : $this->getContext($context, "updateSubject"))) . "'>"), "</a>"));
                echo "
        ";
            }
            // line 39
            echo "        ";
            if ((((isset($context["isSuperUser"]) ? $context["isSuperUser"] : $this->getContext($context, "isSuperUser")) && array_key_exists("adminMenu", $context)) && (isset($context["adminMenu"]) ? $context["adminMenu"] : $this->getContext($context, "adminMenu")))) {
                // line 40
                echo "            <br />
            ";
                // line 41
                echo (isset($context["updateCheck"]) ? $context["updateCheck"] : $this->getContext($context, "updateCheck"));
                echo "
        ";
            }
            // line 43
            echo "        <br />
        ";
            // line 44
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_YouAreCurrentlyUsing", (isset($context["piwik_version"]) ? $context["piwik_version"] : $this->getContext($context, "piwik_version")))), "html", null, true);
            echo "
    </span>
</span>
";
        }
    }

    public function getTemplateName()
    {
        return "@CoreHome/_headerMessage.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 44,  129 => 43,  124 => 41,  121 => 40,  118 => 39,  112 => 37,  109 => 36,  107 => 35,  102 => 34,  99 => 33,  93 => 30,  87 => 28,  85 => 27,  80 => 24,  74 => 22,  72 => 21,  67 => 20,  65 => 19,  60 => 18,  58 => 17,  48 => 15,  46 => 14,  43 => 13,  37 => 10,  32 => 7,  30 => 6,  27 => 5,  23 => 4,  21 => 3,  19 => 2,);
    }
}
