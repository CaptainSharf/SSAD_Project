<?php

/* @Login/login.twig */
class __TwigTemplate_b935054dec396c4853ffeb5ea3db5b2585c72293369eca7123a5e883aa4efeff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Morpheus/layout.twig", "@Login/login.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'meta' => array($this, 'block_meta'),
            'pageTitle' => array($this, 'block_pageTitle'),
            'pageDescription' => array($this, 'block_pageDescription'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Morpheus/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 29
        $context["bodyId"] = "loginPage";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "

    ";
        // line 6
        $this->displayBlock('meta', $context, $blocks);
        // line 9
        echo "
    <script type=\"text/javascript\" src=\"libs/bower_components/jquery-placeholder/jquery.placeholder.js\"></script>
    <!--[if lt IE 9]>
    <script src=\"libs/bower_components/html5shiv/dist/html5shiv.min.js\"></script>
    <![endif]-->
    <script type=\"text/javascript\" src=\"libs/jquery/jquery.smartbanner.js\"></script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"libs/jquery/stylesheets/jquery.smartbanner.css\" />

    <script type=\"text/javascript\">
        \$(function () {
            \$('#form_login').focus();
            \$('input').placeholder();
            \$.smartbanner({title: \"Piwik Mobile 2\", author: \"Piwik team\", hideOnInstall: false, layer: true, icon: \"plugins/CoreHome/images/googleplay.png\"});
        });
    </script>
";
    }

    // line 6
    public function block_meta($context, array $blocks = array())
    {
        // line 7
        echo "        <meta name=\"robots\" content=\"index,follow\">
    ";
    }

    // line 26
    public function block_pageTitle($context, array $blocks = array())
    {
        if (((isset($context["isCustomLogo"]) ? $context["isCustomLogo"] : $this->getContext($context, "isCustomLogo")) == false)) {
            echo "Piwik &rsaquo; ";
        }
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_LogIn")), "html", null, true);
    }

    // line 27
    public function block_pageDescription($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_OpenSourceWebAnalytics")), "html", null, true);
    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        // line 32
        echo "
    ";
        // line 33
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), array("Template.beforeTopBar", "login"));
        echo "
    ";
        // line 34
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), array("Template.beforeContent", "login"));
        echo "

    ";
        // line 36
        $this->loadTemplate("_iframeBuster.twig", "@Login/login.twig", 36)->display($context);
        // line 37
        echo "
    <div id=\"notificationContainer\">
    </div>

    <div id=\"logo\">
        ";
        // line 42
        if (((isset($context["isCustomLogo"]) ? $context["isCustomLogo"] : $this->getContext($context, "isCustomLogo")) == false)) {
            // line 43
            echo "            <a href=\"http://piwik.org\" title=\"";
            echo twig_escape_filter($this->env, (isset($context["linkTitle"]) ? $context["linkTitle"] : $this->getContext($context, "linkTitle")), "html", null, true);
            echo "\">
        ";
        }
        // line 45
        echo "        ";
        if ((isset($context["hasSVGLogo"]) ? $context["hasSVGLogo"] : $this->getContext($context, "hasSVGLogo"))) {
            // line 46
            echo "            <img src='";
            echo twig_escape_filter($this->env, (isset($context["logoSVG"]) ? $context["logoSVG"] : $this->getContext($context, "logoSVG")), "html", null, true);
            echo "' title=\"";
            echo twig_escape_filter($this->env, (isset($context["linkTitle"]) ? $context["linkTitle"] : $this->getContext($context, "linkTitle")), "html", null, true);
            echo "\" alt=\"Piwik\" class=\"ie-hide\"/>
            <!--[if lt IE 9]>
        ";
        }
        // line 49
        echo "        <img src='";
        echo twig_escape_filter($this->env, (isset($context["logoLarge"]) ? $context["logoLarge"] : $this->getContext($context, "logoLarge")), "html", null, true);
        echo "' title=\"";
        echo twig_escape_filter($this->env, (isset($context["linkTitle"]) ? $context["linkTitle"] : $this->getContext($context, "linkTitle")), "html", null, true);
        echo "\" alt=\"Piwik\" />
        ";
        // line 50
        if ((isset($context["hasSVGLogo"]) ? $context["hasSVGLogo"] : $this->getContext($context, "hasSVGLogo"))) {
            echo "<![endif]-->";
        }
        // line 51
        echo "
        ";
        // line 52
        if ((isset($context["isCustomLogo"]) ? $context["isCustomLogo"] : $this->getContext($context, "isCustomLogo"))) {
            // line 53
            echo "            ";
            ob_start();
            // line 54
            echo "            <i><a href=\"http://piwik.org/\" rel=\"noreferrer\"  target=\"_blank\">";
            echo twig_escape_filter($this->env, (isset($context["linkTitle"]) ? $context["linkTitle"] : $this->getContext($context, "linkTitle")), "html", null, true);
            echo "</a></i>
            ";
            $context["poweredByPiwik"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 56
            echo "        ";
        }
        // line 57
        echo "
        ";
        // line 58
        if (((isset($context["isCustomLogo"]) ? $context["isCustomLogo"] : $this->getContext($context, "isCustomLogo")) == false)) {
            // line 59
            echo "            </a>
            <div class=\"description\">
                <a href=\"http://piwik.org\" title=\"";
            // line 61
            echo twig_escape_filter($this->env, (isset($context["linkTitle"]) ? $context["linkTitle"] : $this->getContext($context, "linkTitle")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["linkTitle"]) ? $context["linkTitle"] : $this->getContext($context, "linkTitle")), "html", null, true);
            echo "</a>
                <div class=\"arrow\"></div>
            </div>
        ";
        }
        // line 65
        echo "    </div>

    <section class=\"loginSection\">

        ";
        // line 70
        echo "        ";
        if (((array_key_exists("isValidHost", $context) && array_key_exists("invalidHostMessage", $context)) && ((isset($context["isValidHost"]) ? $context["isValidHost"] : $this->getContext($context, "isValidHost")) == false))) {
            // line 71
            echo "            ";
            $this->loadTemplate("@CoreHome/_warningInvalidHost.twig", "@Login/login.twig", 71)->display($context);
            // line 72
            echo "        ";
        } else {
            // line 73
            echo "            <div id=\"message_container\">

                ";
            // line 75
            echo twig_include($this->env, $context, "@Login/_formErrors.twig", array("formErrors" => $this->getAttribute((isset($context["form_data"]) ? $context["form_data"] : $this->getContext($context, "form_data")), "errors", array())));
            echo "

                ";
            // line 77
            if ((isset($context["AccessErrorString"]) ? $context["AccessErrorString"] : $this->getContext($context, "AccessErrorString"))) {
                // line 78
                echo "                    <div class=\"message_error\">
                        <strong>";
                // line 79
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Error")), "html", null, true);
                echo "</strong>: ";
                echo (isset($context["AccessErrorString"]) ? $context["AccessErrorString"] : $this->getContext($context, "AccessErrorString"));
                echo "<br/>
                    </div>
                ";
            }
            // line 82
            echo "
                ";
            // line 83
            if ((isset($context["infoMessage"]) ? $context["infoMessage"] : $this->getContext($context, "infoMessage"))) {
                // line 84
                echo "                    <p class=\"message\">";
                echo (isset($context["infoMessage"]) ? $context["infoMessage"] : $this->getContext($context, "infoMessage"));
                echo "</p>
                ";
            }
            // line 86
            echo "            </div>
            <form ";
            // line 87
            echo $this->getAttribute((isset($context["form_data"]) ? $context["form_data"] : $this->getContext($context, "form_data")), "attributes", array());
            echo " ng-non-bindable>
                <h1>";
            // line 88
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_LogIn")), "html", null, true);
            echo "</h1>
                <fieldset class=\"inputs\">
                    <input type=\"text\" name=\"form_login\" id=\"login_form_login\" class=\"input\" value=\"\" size=\"20\"
                           tabindex=\"10\"
                           placeholder=\"";
            // line 92
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Username")), "html", null, true);
            echo "\" autofocus=\"autofocus\"/>
                    <input type=\"password\" name=\"form_password\" id=\"login_form_password\" class=\"input\" value=\"\" size=\"20\"
                           tabindex=\"20\"
                           placeholder=\"";
            // line 95
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Password")), "html", null, true);
            echo "\"/>
                    <input type=\"hidden\" name=\"form_nonce\" id=\"login_form_nonce\" value=\"";
            // line 96
            echo twig_escape_filter($this->env, (isset($context["nonce"]) ? $context["nonce"] : $this->getContext($context, "nonce")), "html", null, true);
            echo "\"/>
                </fieldset>

                <fieldset class=\"actions\">
                    <input name=\"form_rememberme\" type=\"checkbox\" id=\"login_form_rememberme\" value=\"1\" tabindex=\"90\"
                           ";
            // line 101
            if ($this->getAttribute($this->getAttribute((isset($context["form_data"]) ? $context["form_data"] : $this->getContext($context, "form_data")), "form_rememberme", array()), "value", array())) {
                echo "checked=\"checked\" ";
            }
            echo "/>
                    <label for=\"login_form_rememberme\">";
            // line 102
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_RememberMe")), "html", null, true);
            echo "</label>
                    <input class=\"submit\" id='login_form_submit' type=\"submit\" value=\"";
            // line 103
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_LogIn")), "html", null, true);
            echo "\"
                           tabindex=\"100\"/>
                </fieldset>
            </form>
            <form id=\"reset_form\" style=\"display:none;\" ng-non-bindable>
                <fieldset class=\"inputs\">
                    <input type=\"text\" name=\"form_login\" id=\"reset_form_login\" class=\"input\" value=\"\" size=\"20\"
                           tabindex=\"10\"
                           placeholder=\"";
            // line 111
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_LoginOrEmail")), "html", null, true);
            echo "\"/>
                    <input type=\"hidden\" name=\"form_nonce\" id=\"reset_form_nonce\" value=\"";
            // line 112
            echo twig_escape_filter($this->env, (isset($context["nonce"]) ? $context["nonce"] : $this->getContext($context, "nonce")), "html", null, true);
            echo "\"/>

                    <input type=\"password\" name=\"form_password\" id=\"reset_form_password\" class=\"input\" value=\"\" size=\"20\"
                           tabindex=\"20\" autocomplete=\"off\"
                           placeholder=\"";
            // line 116
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Password")), "html", null, true);
            echo "\"/>

                    <input type=\"password\" name=\"form_password_bis\" id=\"reset_form_password_bis\" class=\"input\" value=\"\"
                           size=\"20\" tabindex=\"30\" autocomplete=\"off\"
                           placeholder=\"";
            // line 120
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_PasswordRepeat")), "html", null, true);
            echo "\"/>
                </fieldset>

                <fieldset class=\"actions\">
                    <span class=\"loadingPiwik\" style=\"display:none;\">
                        <img alt=\"Loading\" src=\"plugins/Morpheus/images/loading-blue.gif\"/>
                    </span>
                    <input class=\"submit\" id='reset_form_submit' type=\"submit\"
                           value=\"";
            // line 128
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ChangePassword")), "html", null, true);
            echo "\" tabindex=\"100\"/>
                </fieldset>

                <input type=\"hidden\" name=\"module\" value=\"";
            // line 131
            echo twig_escape_filter($this->env, (isset($context["loginModule"]) ? $context["loginModule"] : $this->getContext($context, "loginModule")), "html", null, true);
            echo "\"/>
                <input type=\"hidden\" name=\"action\" value=\"resetPassword\"/>
            </form>
            <p id=\"nav\">
                ";
            // line 135
            echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), array("Template.loginNav", "top"));
            echo "
                <a id=\"login_form_nav\" href=\"#\"
                   title=\"";
            // line 137
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_LostYourPassword")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_LostYourPassword")), "html", null, true);
            echo "</a>
                <a id=\"alternate_reset_nav\" href=\"#\" style=\"display:none;\"
                   title=\"";
            // line 139
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_LogIn")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_LogIn")), "html", null, true);
            echo "</a>
                <a id=\"reset_form_nav\" href=\"#\" style=\"display:none;\"
                   title=\"";
            // line 141
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Mobile_NavigationBack")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Cancel")), "html", null, true);
            echo "</a>
                ";
            // line 142
            echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), array("Template.loginNav", "bottom"));
            echo "
            </p>
            ";
            // line 144
            if (array_key_exists("poweredByPiwik", $context)) {
                // line 145
                echo "                <p id=\"piwik\">
                    ";
                // line 146
                echo twig_escape_filter($this->env, (isset($context["poweredByPiwik"]) ? $context["poweredByPiwik"] : $this->getContext($context, "poweredByPiwik")), "html", null, true);
                echo "
                </p>
            ";
            }
            // line 149
            echo "            <div id=\"lost_password_instructions\" style=\"display:none;\">
                <p class=\"message\">";
            // line 150
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_ResetPasswordInstructions")), "html", null, true);
            echo "</p>
            </div>
        ";
        }
        // line 153
        echo "    </section>

";
    }

    public function getTemplateName()
    {
        return "@Login/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  371 => 153,  365 => 150,  362 => 149,  356 => 146,  353 => 145,  351 => 144,  346 => 142,  340 => 141,  333 => 139,  326 => 137,  321 => 135,  314 => 131,  308 => 128,  297 => 120,  290 => 116,  283 => 112,  279 => 111,  268 => 103,  264 => 102,  258 => 101,  250 => 96,  246 => 95,  240 => 92,  233 => 88,  229 => 87,  226 => 86,  220 => 84,  218 => 83,  215 => 82,  207 => 79,  204 => 78,  202 => 77,  197 => 75,  193 => 73,  190 => 72,  187 => 71,  184 => 70,  178 => 65,  169 => 61,  165 => 59,  163 => 58,  160 => 57,  157 => 56,  151 => 54,  148 => 53,  146 => 52,  143 => 51,  139 => 50,  132 => 49,  123 => 46,  120 => 45,  114 => 43,  112 => 42,  105 => 37,  103 => 36,  98 => 34,  94 => 33,  91 => 32,  88 => 31,  82 => 27,  73 => 26,  68 => 7,  65 => 6,  46 => 9,  44 => 6,  38 => 4,  35 => 3,  31 => 1,  29 => 29,  11 => 1,);
    }
}
