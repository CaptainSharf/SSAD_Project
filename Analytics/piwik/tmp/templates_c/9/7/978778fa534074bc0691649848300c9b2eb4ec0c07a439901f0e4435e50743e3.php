<?php

/* user.twig */
class __TwigTemplate_978778fa534074bc0691649848300c9b2eb4ec0c07a439901f0e4435e50743e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "user.twig", 1);
        $this->blocks = array(
            'pageTitle' => array($this, 'block_pageTitle'),
            'body' => array($this, 'block_body'),
            'root' => array($this, 'block_root'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["bodyClass"] = call_user_func_array($this->env->getFunction('postEvent')->getCallable(), array("Template.bodyClass", "admin"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_pageTitle($context, array $blocks = array())
    {
        if ( !(isset($context["isCustomLogo"]) ? $context["isCustomLogo"] : $this->getContext($context, "isCustomLogo"))) {
            echo "Piwik &rsaquo; ";
        }
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_Administration")), "html", null, true);
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        if ((isset($context["userIsAnonymous"]) ? $context["userIsAnonymous"] : $this->getContext($context, "userIsAnonymous"))) {
            // line 9
            echo "        ";
            $context["topMenuModule"] = "Feedback";
            // line 10
            echo "        ";
            $context["topMenuAction"] = "index";
            // line 11
            echo "    ";
        } else {
            // line 12
            echo "        ";
            if (((isset($context["currentModule"]) ? $context["currentModule"] : $this->getContext($context, "currentModule")) != "Feedback")) {
                // line 13
                echo "            ";
                $context["topMenuModule"] = "UsersManager";
                // line 14
                echo "            ";
                $context["topMenuAction"] = "userSettings";
                // line 15
                echo "        ";
            }
            // line 16
            echo "    ";
        }
        // line 17
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
    }

    // line 20
    public function block_root($context, array $blocks = array())
    {
        // line 21
        echo "    ";
        $this->loadTemplate("@CoreHome/_topScreen.twig", "user.twig", 21)->display($context);
        // line 22
        echo "
    ";
        // line 23
        $context["ajax"] = $this->loadTemplate("ajaxMacros.twig", "user.twig", 23);
        // line 24
        echo "    ";
        echo $context["ajax"]->getrequestErrorDiv(((array_key_exists("emailSuperUser", $context)) ? (_twig_default_filter((isset($context["emailSuperUser"]) ? $context["emailSuperUser"] : $this->getContext($context, "emailSuperUser")), "")) : ("")));
        echo "
    ";
        // line 25
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), array("Template.beforeContent", "user", (isset($context["currentModule"]) ? $context["currentModule"] : $this->getContext($context, "currentModule"))));
        echo "

    <div id=\"container\">

        ";
        // line 29
        if (( !array_key_exists("showMenu", $context) || (isset($context["showMenu"]) ? $context["showMenu"] : $this->getContext($context, "showMenu")))) {
            // line 30
            echo "            ";
            $this->loadTemplate("@CoreHome/_userMenu.twig", "user.twig", 30)->display($context);
            // line 31
            echo "        ";
        }
        // line 32
        echo "
        <div id=\"content\" class=\"admin user\">

            ";
        // line 35
        $this->loadTemplate("@CoreHome/_notifications.twig", "user.twig", 35)->display($context);
        // line 36
        echo "
            <div class=\"ui-confirm\" id=\"alert\">
                <h2></h2>
                <input role=\"no\" type=\"button\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Ok")), "html", null, true);
        echo "\"/>
            </div>

            ";
        // line 42
        $this->displayBlock('content', $context, $blocks);
        // line 44
        echo "
        </div>
    </div>
";
    }

    // line 42
    public function block_content($context, array $blocks = array())
    {
        // line 43
        echo "            ";
    }

    public function getTemplateName()
    {
        return "user.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 43,  138 => 42,  131 => 44,  129 => 42,  123 => 39,  118 => 36,  116 => 35,  111 => 32,  108 => 31,  105 => 30,  103 => 29,  96 => 25,  91 => 24,  89 => 23,  86 => 22,  83 => 21,  80 => 20,  73 => 17,  70 => 16,  67 => 15,  64 => 14,  61 => 13,  58 => 12,  55 => 11,  52 => 10,  49 => 9,  46 => 8,  43 => 7,  34 => 3,  30 => 1,  28 => 5,  11 => 1,);
    }
}
