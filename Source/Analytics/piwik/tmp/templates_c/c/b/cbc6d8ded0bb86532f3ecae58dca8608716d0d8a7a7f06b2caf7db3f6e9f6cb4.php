<?php

/* @CoreAdminHome/generalSettings.twig */
class __TwigTemplate_cbc6d8ded0bb86532f3ecae58dca8608716d0d8a7a7f06b2caf7db3f6e9f6cb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.twig", "@CoreAdminHome/generalSettings.twig", 1);
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
        echo "    ";
        $context["piwik"] = $this->loadTemplate("macros.twig", "@CoreAdminHome/generalSettings.twig", 4);
        // line 5
        echo "    ";
        $context["ajax"] = $this->loadTemplate("ajaxMacros.twig", "@CoreAdminHome/generalSettings.twig", 5);
        // line 6
        echo "
    ";
        // line 7
        echo $context["ajax"]->geterrorDiv();
        echo "
    ";
        // line 8
        echo $context["ajax"]->getloadingDiv();
        echo "

    <h2>";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_ArchivingSettings")), "html", null, true);
        echo "</h2>

    ";
        // line 12
        if ((isset($context["isGeneralSettingsAdminEnabled"]) ? $context["isGeneralSettingsAdminEnabled"] : $this->getContext($context, "isGeneralSettingsAdminEnabled"))) {
            // line 13
            echo "        <div class=\"form-group\">
            <label>";
            // line 14
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_AllowPiwikArchivingToTriggerBrowser")), "html", null, true);
            echo "</label>
            <div class=\"form-help\">
                ";
            // line 16
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ArchivingInlineHelp")), "html", null, true);
            echo "
                <br/>
                ";
            // line 18
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_SeeTheOfficialDocumentationForMoreInformation", "<a href='?module=Proxy&action=redirect&url=http://piwik.org/docs/setup-auto-archiving/' target='_blank'>", "</a>"));
            echo "
            </div>
            <label class=\"radio\">
                <input type=\"radio\" value=\"1\" name=\"enableBrowserTriggerArchiving\" ";
            // line 21
            if (((isset($context["enableBrowserTriggerArchiving"]) ? $context["enableBrowserTriggerArchiving"] : $this->getContext($context, "enableBrowserTriggerArchiving")) == 1)) {
                echo " checked=\"checked\"";
            }
            echo " />
                ";
            // line 22
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
            echo "
                <span class=\"form-description\">";
            // line 23
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Default")), "html", null, true);
            echo "</span>
            </label>
            <label class=\"radio\">
                <input type=\"radio\" value=\"0\" name=\"enableBrowserTriggerArchiving\" ";
            // line 26
            if (((isset($context["enableBrowserTriggerArchiving"]) ? $context["enableBrowserTriggerArchiving"] : $this->getContext($context, "enableBrowserTriggerArchiving")) == 0)) {
                echo " checked=\"checked\"";
            }
            echo " />
                ";
            // line 27
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
            echo "
                <span class=\"form-description\">";
            // line 28
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ArchivingTriggerDescription", "<a href='?module=Proxy&action=redirect&url=http://piwik.org/docs/setup-auto-archiving/' target='_blank'>", "</a>"));
            echo "</span>
            </label>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"form-group\">
            <label>";
            // line 33
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_AllowPiwikArchivingToTriggerBrowser")), "html", null, true);
            echo "</label>
            <label class=\"radio\">
                <input type=\"radio\" checked=\"checked\" disabled=\"disabled\" />
                ";
            // line 36
            if (((isset($context["enableBrowserTriggerArchiving"]) ? $context["enableBrowserTriggerArchiving"] : $this->getContext($context, "enableBrowserTriggerArchiving")) == 1)) {
                // line 37
                echo "                    ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
                echo "
                ";
            } else {
                // line 39
                echo "                    ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
                echo "
                ";
            }
            // line 41
            echo "            </label>
        </div>
    ";
        }
        // line 44
        echo "
    <div class=\"form-group\">
        <label for=\"todayArchiveTimeToLive\">
            ";
        // line 47
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ReportsContainingTodayWillBeProcessedAtMostEvery")), "html", null, true);
        echo "
        </label>
        ";
        // line 49
        if ((isset($context["isGeneralSettingsAdminEnabled"]) ? $context["isGeneralSettingsAdminEnabled"] : $this->getContext($context, "isGeneralSettingsAdminEnabled"))) {
            // line 50
            echo "            <div class=\"form-help\">
                ";
            // line 51
            if ((isset($context["showWarningCron"]) ? $context["showWarningCron"] : $this->getContext($context, "showWarningCron"))) {
                // line 52
                echo "                    <strong>
                        ";
                // line 53
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_NewReportsWillBeProcessedByCron")), "html", null, true);
                echo "<br/>
                        ";
                // line 54
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ReportsWillBeProcessedAtMostEveryHour")), "html", null, true);
                echo "
                        ";
                // line 55
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_IfArchivingIsFastYouCanSetupCronRunMoreOften")), "html", null, true);
                echo "<br/>
                    </strong>
                ";
            }
            // line 58
            echo "                ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_SmallTrafficYouCanLeaveDefault", (isset($context["todayArchiveTimeToLiveDefault"]) ? $context["todayArchiveTimeToLiveDefault"] : $this->getContext($context, "todayArchiveTimeToLiveDefault")))), "html", null, true);
            echo "
                <br/>
                ";
            // line 60
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_MediumToHighTrafficItIsRecommendedTo", 1800, 3600)), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 63
        echo "        <div class=\"input-group\">
            <input value='";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["todayArchiveTimeToLive"]) ? $context["todayArchiveTimeToLive"] : $this->getContext($context, "todayArchiveTimeToLive")), "html", null, true);
        echo "' id='todayArchiveTimeToLive' ";
        if ( !(isset($context["isGeneralSettingsAdminEnabled"]) ? $context["isGeneralSettingsAdminEnabled"] : $this->getContext($context, "isGeneralSettingsAdminEnabled"))) {
            echo "disabled=\"disabled\"";
        }
        echo " />
            <span class=\"input-group-addon\">";
        // line 65
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Intl_NSeconds", "")), "html", null, true);
        echo "</span>
        </div>
        <span class=\"form-description\">
            ";
        // line 68
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_RearchiveTimeIntervalOnlyForTodayReports")), "html", null, true);
        echo "
        </span>
    </div>

    ";
        // line 72
        if ((isset($context["isGeneralSettingsAdminEnabled"]) ? $context["isGeneralSettingsAdminEnabled"] : $this->getContext($context, "isGeneralSettingsAdminEnabled"))) {
            // line 73
            echo "        <h2>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_UpdateSettings")), "html", null, true);
            echo "</h2>

        <div class=\"form-group\">
            <label>";
            // line 76
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_CheckReleaseGetVersion")), "html", null, true);
            echo "</label>
            <div class=\"form-help\">
                ";
            // line 78
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_DevelopmentProcess", "<a href='?module=Proxy&action=redirect&url=http://piwik.org/participate/development-process/' target='_blank'>", "</a>"));
            echo "
                <br/>
                ";
            // line 80
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_StableReleases", "<a href='?module=Proxy&action=redirect&url=http%3A%2F%2Fdeveloper.piwik.org%2Fguides%2Fcore-team-workflow%23influencing-piwik-development' target='_blank'>", "</a>"));
            echo "
            </div>
            <label class=\"radio\">
                <input type=\"radio\" value=\"1\" name=\"enableBetaReleaseCheck\"";
            // line 83
            if (((isset($context["enableBetaReleaseCheck"]) ? $context["enableBetaReleaseCheck"] : $this->getContext($context, "enableBetaReleaseCheck")) == 1)) {
                echo " checked=\"checked\"";
            }
            echo " />
                ";
            // line 84
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
            echo "
            </label>
            <label class=\"radio\">
                <input type=\"radio\" value=\"0\" name=\"enableBetaReleaseCheck\"";
            // line 87
            if (((isset($context["enableBetaReleaseCheck"]) ? $context["enableBetaReleaseCheck"] : $this->getContext($context, "enableBetaReleaseCheck")) == 0)) {
                echo " checked=\"checked\"";
            }
            echo " />
                ";
            // line 88
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
            echo "
                <span class=\"form-description\">";
            // line 89
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Recommended")), "html", null, true);
            echo "</span>
            </label>
        </div>

        ";
            // line 93
            if ((isset($context["canUpdateCommunication"]) ? $context["canUpdateCommunication"] : $this->getContext($context, "canUpdateCommunication"))) {
                // line 94
                echo "            <div class=\"form-group\">
                <label>";
                // line 95
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_SendPluginUpdateCommunication")), "html", null, true);
                echo "</label>
                <div class=\"form-help\">
                    ";
                // line 97
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_SendPluginUpdateCommunicationHelp")), "html", null, true);
                echo "
                </div>
                <label class=\"radio\">
                    <input type=\"radio\" name=\"enablePluginUpdateCommunication\" value=\"1\"
                            ";
                // line 101
                if (((isset($context["enableSendPluginUpdateCommunication"]) ? $context["enableSendPluginUpdateCommunication"] : $this->getContext($context, "enableSendPluginUpdateCommunication")) == 1)) {
                    echo " checked=\"checked\"";
                }
                echo "/>
                    ";
                // line 102
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
                echo "
                </label>
                <label class=\"radio\">
                    <input type=\"radio\" name=\"enablePluginUpdateCommunication\" value=\"0\"
                            ";
                // line 106
                if (((isset($context["enableSendPluginUpdateCommunication"]) ? $context["enableSendPluginUpdateCommunication"] : $this->getContext($context, "enableSendPluginUpdateCommunication")) == 0)) {
                    echo " checked=\"checked\"";
                }
                echo "/>
                    ";
                // line 107
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
                echo "
                    <span class=\"form-description\">";
                // line 108
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Default")), "html", null, true);
                echo "</span>
                </label>
            </div>
        ";
            }
            // line 112
            echo "    ";
        }
        // line 113
        echo "
    ";
        // line 114
        if ((isset($context["isGeneralSettingsAdminEnabled"]) ? $context["isGeneralSettingsAdminEnabled"] : $this->getContext($context, "isGeneralSettingsAdminEnabled"))) {
            // line 115
            echo "        <h2>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_EmailServerSettings")), "html", null, true);
            echo "</h2>

        <div class=\"form-group\">
            <label>";
            // line 118
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_UseSMTPServerForEmail")), "html", null, true);
            echo "</label>
            <div class=\"form-help\">
                ";
            // line 120
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_SelectYesIfYouWantToSendEmailsViaServer")), "html", null, true);
            echo "
            </div>
            <label class=\"radio\">
                <input type=\"radio\" name=\"mailUseSmtp\" value=\"1\" ";
            // line 123
            if (($this->getAttribute((isset($context["mail"]) ? $context["mail"] : $this->getContext($context, "mail")), "transport", array()) == "smtp")) {
                echo "checked";
            }
            echo " />
                ";
            // line 124
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
            echo "
            </label>
            <label class=\"radio\">
                <input type=\"radio\" name=\"mailUseSmtp\" value=\"0\" ";
            // line 127
            if (($this->getAttribute((isset($context["mail"]) ? $context["mail"] : $this->getContext($context, "mail")), "transport", array()) == "")) {
                echo "checked";
            }
            echo " />
                ";
            // line 128
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
            echo "
            </label>
        </div>

        <div id=\"smtpSettings\">
            <div class=\"form-group\">
                <label for=\"mailHost\">";
            // line 134
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_SmtpServerAddress")), "html", null, true);
            echo "</label>
                <input type=\"text\" id=\"mailHost\" value=\"";
            // line 135
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mail"]) ? $context["mail"] : $this->getContext($context, "mail")), "host", array()), "html", null, true);
            echo "\">
            </div>
            <div class=\"form-group\">
                <label for=\"mailPort\">";
            // line 138
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_SmtpPort")), "html", null, true);
            echo "</label>
                <span class=\"form-help\">";
            // line 139
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_OptionalSmtpPort")), "html", null, true);
            echo "</span>
                <input type=\"text\" id=\"mailPort\" value=\"";
            // line 140
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mail"]) ? $context["mail"] : $this->getContext($context, "mail")), "port", array()), "html", null, true);
            echo "\">
            </div>
            <div class=\"form-group\">
                <label for=\"mailType\">";
            // line 143
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_AuthenticationMethodSmtp")), "html", null, true);
            echo "</label>
                <span class=\"form-help\">";
            // line 144
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_OnlyUsedIfUserPwdIsSet")), "html", null, true);
            echo "</span>
                <select id=\"mailType\">
                    <option value=\"\" ";
            // line 146
            if (($this->getAttribute((isset($context["mail"]) ? $context["mail"] : $this->getContext($context, "mail")), "type", array()) == "")) {
                echo " selected=\"selected\" ";
            }
            echo "></option>
                    <option id=\"plain\" ";
            // line 147
            if (($this->getAttribute((isset($context["mail"]) ? $context["mail"] : $this->getContext($context, "mail")), "type", array()) == "Plain")) {
                echo " selected=\"selected\" ";
            }
            echo " value=\"Plain\">Plain</option>
                    <option id=\"login\" ";
            // line 148
            if (($this->getAttribute((isset($context["mail"]) ? $context["mail"] : $this->getContext($context, "mail")), "type", array()) == "Login")) {
                echo " selected=\"selected\" ";
            }
            echo " value=\"Login\"> Login</option>
                    <option id=\"cram-md5\" ";
            // line 149
            if (($this->getAttribute((isset($context["mail"]) ? $context["mail"] : $this->getContext($context, "mail")), "type", array()) == "Crammd5")) {
                echo " selected=\"selected\" ";
            }
            echo " value=\"Crammd5\"> Crammd5</option>
                </select>
            </div>
            <div class=\"form-group\">
                <label for=\"mailUsername\">";
            // line 153
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_SmtpUsername")), "html", null, true);
            echo "</label>
                <span class=\"form-help\">";
            // line 154
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_OnlyEnterIfRequired")), "html", null, true);
            echo "</span>
                <input type=\"text\" id=\"mailUsername\" value=\"";
            // line 155
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mail"]) ? $context["mail"] : $this->getContext($context, "mail")), "username", array()), "html", null, true);
            echo "\"/>
            </div>
            <div class=\"form-group\">
                <label for=\"mailPassword\">";
            // line 158
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_SmtpPassword")), "html", null, true);
            echo "</label>
                <span class=\"form-help\">
                    ";
            // line 160
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_OnlyEnterIfRequiredPassword")), "html", null, true);
            echo "<br/>
                    ";
            // line 161
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_WarningPasswordStored", "<strong>", "</strong>"));
            echo "
                </span>
                <input type=\"password\" id=\"mailPassword\" value=\"";
            // line 163
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mail"]) ? $context["mail"] : $this->getContext($context, "mail")), "password", array()), "html", null, true);
            echo "\"/>
            </div>
            <div class=\"form-group\">
                <label for=\"mailEncryption\">";
            // line 166
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_SmtpEncryption")), "html", null, true);
            echo "</label>
                <span class=\"form-help\">";
            // line 167
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_EncryptedSmtpTransport")), "html", null, true);
            echo "</span>
                <select id=\"mailEncryption\">
                    <option value=\"\" ";
            // line 169
            if (($this->getAttribute((isset($context["mail"]) ? $context["mail"] : $this->getContext($context, "mail")), "encryption", array()) == "")) {
                echo " selected=\"selected\" ";
            }
            echo "></option>
                    <option id=\"ssl\" ";
            // line 170
            if (($this->getAttribute((isset($context["mail"]) ? $context["mail"] : $this->getContext($context, "mail")), "encryption", array()) == "ssl")) {
                echo " selected=\"selected\" ";
            }
            echo " value=\"ssl\">SSL</option>
                    <option id=\"tls\" ";
            // line 171
            if (($this->getAttribute((isset($context["mail"]) ? $context["mail"] : $this->getContext($context, "mail")), "encryption", array()) == "tls")) {
                echo " selected=\"selected\" ";
            }
            echo " value=\"tls\">TLS</option>
                </select>
            </div>
        </div>
    ";
        }
        // line 176
        echo "
    <h2>";
        // line 177
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_BrandingSettings")), "html", null, true);
        echo "</h2>

    <p>";
        // line 179
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_CustomLogoHelpText")), "html", null, true);
        echo "</p>

    <div class=\"form-group\">
        <label>";
        // line 182
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_UseCustomLogo")), "html", null, true);
        echo "</label>
        <div class=\"form-help\">
            ";
        // line 184
        ob_start();
        echo "\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_GiveUsYourFeedback")), "html", null, true);
        echo "\"";
        $context["giveUsFeedbackText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 185
        echo "            ";
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_CustomLogoFeedbackInfo", (isset($context["giveUsFeedbackText"]) ? $context["giveUsFeedbackText"] : $this->getContext($context, "giveUsFeedbackText")), "<a href='?module=CorePluginsAdmin&action=plugins' rel='noreferrer' target='_blank'>", "</a>"));
        echo "
        </div>
        <label class=\"radio\">
            <input type=\"radio\" name=\"useCustomLogo\" value=\"1\" ";
        // line 188
        if (($this->getAttribute((isset($context["branding"]) ? $context["branding"] : $this->getContext($context, "branding")), "use_custom_logo", array()) == 1)) {
            echo "checked";
        }
        echo " />
            ";
        // line 189
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
        echo "
        </label>
        <label class=\"radio\">
            <input type=\"radio\" name=\"useCustomLogo\" value=\"0\" ";
        // line 192
        if (($this->getAttribute((isset($context["branding"]) ? $context["branding"] : $this->getContext($context, "branding")), "use_custom_logo", array()) == 0)) {
            echo "checked";
        }
        echo " />
            ";
        // line 193
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
        echo "
        </label>
    </div>

    <div id=\"logoSettings\">
        <form id=\"logoUploadForm\" method=\"post\" enctype=\"multipart/form-data\" action=\"index.php?module=CoreAdminHome&format=json&action=uploadCustomLogo\">
            ";
        // line 199
        if ((isset($context["fileUploadEnabled"]) ? $context["fileUploadEnabled"] : $this->getContext($context, "fileUploadEnabled"))) {
            // line 200
            echo "                <input type=\"hidden\" name=\"token_auth\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["token_auth"]) ? $context["token_auth"] : $this->getContext($context, "token_auth")), "html", null, true);
            echo "\"/>

                ";
            // line 202
            if ((isset($context["logosWriteable"]) ? $context["logosWriteable"] : $this->getContext($context, "logosWriteable"))) {
                // line 203
                echo "                    <div class=\"form-group\">
                        <label for=\"customLogo\">";
                // line 204
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_LogoUpload")), "html", null, true);
                echo "</label>
                        <div class=\"form-help\">";
                // line 205
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_LogoUploadHelp", "JPG / PNG / GIF", 110)), "html", null, true);
                echo "</div>
                        <input name=\"customLogo\" type=\"file\" id=\"customLogo\"/>
                        <img src=\"";
                // line 207
                echo twig_escape_filter($this->env, (isset($context["pathUserLogo"]) ? $context["pathUserLogo"] : $this->getContext($context, "pathUserLogo")), "html", null, true);
                echo "?r=";
                echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
                echo "\" id=\"currentLogo\" style=\"max-height: 150px\"/>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"customLogo\">";
                // line 210
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_FaviconUpload")), "html", null, true);
                echo "</label>
                        <div class=\"form-help\">";
                // line 211
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_LogoUploadHelp", "JPG / PNG / GIF", 16)), "html", null, true);
                echo "</div>
                        <input name=\"customFavicon\" type=\"file\" id=\"customFavicon\"/>
                        <img src=\"";
                // line 213
                echo twig_escape_filter($this->env, (isset($context["pathUserFavicon"]) ? $context["pathUserFavicon"] : $this->getContext($context, "pathUserFavicon")), "html", null, true);
                echo "?r=";
                echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
                echo "\" id=\"currentFavicon\" width=\"16\" height=\"16\"/>
                    </div>
                ";
            } else {
                // line 216
                echo "                    <div class=\"alert alert-warning\">
                        ";
                // line 217
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_LogoNotWriteableInstruction", (("<code>" .                 // line 218
(isset($context["pathUserLogoDirectory"]) ? $context["pathUserLogoDirectory"] : $this->getContext($context, "pathUserLogoDirectory"))) . "</code><br/>"), ((((((isset($context["pathUserLogo"]) ? $context["pathUserLogo"] : $this->getContext($context, "pathUserLogo")) . ", ") . (isset($context["pathUserLogoSmall"]) ? $context["pathUserLogoSmall"] : $this->getContext($context, "pathUserLogoSmall"))) . ", ") . (isset($context["pathUserLogoSVG"]) ? $context["pathUserLogoSVG"] : $this->getContext($context, "pathUserLogoSVG"))) . "")));
                echo "
                    </div>
                ";
            }
            // line 221
            echo "            ";
        } else {
            // line 222
            echo "                <div class=\"alert alert-warning\">
                    ";
            // line 223
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_FileUploadDisabled", "file_uploads=1")), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 226
        echo "        </form>
    </div>

    <div class=\"ui-confirm\" id=\"confirmTrustedHostChange\">
        <h2>";
        // line 230
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_TrustedHostConfirm")), "html", null, true);
        echo "</h2>
        <input role=\"yes\" type=\"button\" value=\"";
        // line 231
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
        echo "\"/>
        <input role=\"no\" type=\"button\" value=\"";
        // line 232
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
        echo "\"/>
    </div>
    <h2 id=\"trustedHostsSection\">";
        // line 234
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_TrustedHostSettings")), "html", null, true);
        echo "</h2>
    <div id='trustedHostSettings'>

        ";
        // line 237
        $this->loadTemplate("@CoreHome/_warningInvalidHost.twig", "@CoreAdminHome/generalSettings.twig", 237)->display($context);
        // line 238
        echo "
        ";
        // line 239
        if ( !(isset($context["isGeneralSettingsAdminEnabled"]) ? $context["isGeneralSettingsAdminEnabled"] : $this->getContext($context, "isGeneralSettingsAdminEnabled"))) {
            // line 240
            echo "            ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_PiwikIsInstalledAt")), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_join_filter((isset($context["trustedHosts"]) ? $context["trustedHosts"] : $this->getContext($context, "trustedHosts")), ", "), "html", null, true);
            echo "
        ";
        } else {
            // line 242
            echo "            <div class=\"form-group\">
                <label>";
            // line 243
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_ValidPiwikHostname")), "html", null, true);
            echo "</label>
            </div>
            <ul>
                ";
            // line 246
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["trustedHosts"]) ? $context["trustedHosts"] : $this->getContext($context, "trustedHosts")));
            foreach ($context['_seq'] as $context["hostIdx"] => $context["host"]) {
                // line 247
                echo "                    <li>
                        <input name=\"trusted_host\" type=\"text\" value=\"";
                // line 248
                echo twig_escape_filter($this->env, $context["host"], "html", null, true);
                echo "\"/>
                        <a href=\"#\" class=\"remove-trusted-host\" title=\"";
                // line 249
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Delete")), "html", null, true);
                echo "\">
                            <img alt=\"";
                // line 250
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Delete")), "html", null, true);
                echo "\" src=\"plugins/Morpheus/images/ico_delete.png\" />
                        </a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['hostIdx'], $context['host'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 254
            echo "            </ul>

            <div class=\"add-trusted-host\">
                <input type=\"text\" placeholder=\"";
            // line 257
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_AddNewTrustedHost")), "html_attr");
            echo "\" readonly/>

                <a href=\"#\" title=\"";
            // line 259
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Delete")), "html", null, true);
            echo "\">
                    <img alt=\"";
            // line 260
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Delete")), "html", null, true);
            echo "\" src=\"plugins/Morpheus/images/add.png\"/>
                </a>

            </div>
        ";
        }
        // line 265
        echo "    </div>

    <input type=\"submit\" value=\"";
        // line 267
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Save")), "html", null, true);
        echo "\" class=\"submit generalSettingsSubmit\"/>
    <br/><br/>

    ";
        // line 270
        if ((isset($context["isDataPurgeSettingsEnabled"]) ? $context["isDataPurgeSettingsEnabled"] : $this->getContext($context, "isDataPurgeSettingsEnabled"))) {
            // line 271
            echo "        <h2>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DeleteDataSettings")), "html", null, true);
            echo "</h2>
        <p>";
            // line 272
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DeleteDataDescription")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DeleteDataDescription2")), "html", null, true);
            echo "</p>
        <p>
            <a href='";
            // line 274
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("module" => "PrivacyManager", "action" => "privacySettings"))), "html", null, true);
            echo "#deleteLogsAnchor'>
                ";
            // line 275
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_ClickHereSettings", (("'" . call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DeleteDataSettings"))) . "'"))), "html", null, true);
            echo "
            </a>
        </p>
    ";
        }
        // line 279
        echo "
";
    }

    public function getTemplateName()
    {
        return "@CoreAdminHome/generalSettings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  744 => 279,  737 => 275,  733 => 274,  726 => 272,  721 => 271,  719 => 270,  713 => 267,  709 => 265,  701 => 260,  697 => 259,  692 => 257,  687 => 254,  677 => 250,  673 => 249,  669 => 248,  666 => 247,  662 => 246,  656 => 243,  653 => 242,  645 => 240,  643 => 239,  640 => 238,  638 => 237,  632 => 234,  627 => 232,  623 => 231,  619 => 230,  613 => 226,  607 => 223,  604 => 222,  601 => 221,  595 => 218,  594 => 217,  591 => 216,  583 => 213,  578 => 211,  574 => 210,  566 => 207,  561 => 205,  557 => 204,  554 => 203,  552 => 202,  546 => 200,  544 => 199,  535 => 193,  529 => 192,  523 => 189,  517 => 188,  510 => 185,  504 => 184,  499 => 182,  493 => 179,  488 => 177,  485 => 176,  475 => 171,  469 => 170,  463 => 169,  458 => 167,  454 => 166,  448 => 163,  443 => 161,  439 => 160,  434 => 158,  428 => 155,  424 => 154,  420 => 153,  411 => 149,  405 => 148,  399 => 147,  393 => 146,  388 => 144,  384 => 143,  378 => 140,  374 => 139,  370 => 138,  364 => 135,  360 => 134,  351 => 128,  345 => 127,  339 => 124,  333 => 123,  327 => 120,  322 => 118,  315 => 115,  313 => 114,  310 => 113,  307 => 112,  300 => 108,  296 => 107,  290 => 106,  283 => 102,  277 => 101,  270 => 97,  265 => 95,  262 => 94,  260 => 93,  253 => 89,  249 => 88,  243 => 87,  237 => 84,  231 => 83,  225 => 80,  220 => 78,  215 => 76,  208 => 73,  206 => 72,  199 => 68,  193 => 65,  185 => 64,  182 => 63,  176 => 60,  170 => 58,  164 => 55,  160 => 54,  156 => 53,  153 => 52,  151 => 51,  148 => 50,  146 => 49,  141 => 47,  136 => 44,  131 => 41,  125 => 39,  119 => 37,  117 => 36,  111 => 33,  108 => 32,  101 => 28,  97 => 27,  91 => 26,  85 => 23,  81 => 22,  75 => 21,  69 => 18,  64 => 16,  59 => 14,  56 => 13,  54 => 12,  49 => 10,  44 => 8,  40 => 7,  37 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
