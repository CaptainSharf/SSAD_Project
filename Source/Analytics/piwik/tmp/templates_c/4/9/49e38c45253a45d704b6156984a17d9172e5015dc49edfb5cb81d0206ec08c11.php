<?php

/* admin.twig */
class __TwigTemplate_49e38c45253a45d704b6156984a17d9172e5015dc49edfb5cb81d0206ec08c11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "admin.twig", 1);
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
            echo "Piwik &rsaquo;";
        }
        echo " ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_Administration")), "html", null, true);
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        if ((isset($context["isSuperUser"]) ? $context["isSuperUser"] : $this->getContext($context, "isSuperUser"))) {
            // line 9
            echo "        ";
            $context["topMenuModule"] = "CoreAdminHome";
            // line 10
            echo "        ";
            $context["topMenuAction"] = "generalSettings";
            // line 11
            echo "    ";
        } else {
            // line 12
            echo "        ";
            $context["topMenuModule"] = "SitesManager";
            // line 13
            echo "        ";
            $context["topMenuAction"] = "index";
            // line 14
            echo "    ";
        }
        // line 15
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
    }

    // line 18
    public function block_root($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        $this->loadTemplate("@CoreHome/_topScreen.twig", "admin.twig", 19)->display($context);
        // line 20
        echo "
    ";
        // line 21
        $context["ajax"] = $this->loadTemplate("ajaxMacros.twig", "admin.twig", 21);
        // line 22
        echo "    ";
        echo $context["ajax"]->getrequestErrorDiv(((array_key_exists("emailSuperUser", $context)) ? (_twig_default_filter((isset($context["emailSuperUser"]) ? $context["emailSuperUser"] : $this->getContext($context, "emailSuperUser")), "")) : ("")));
        echo "
    ";
        // line 23
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), array("Template.beforeContent", "admin", (isset($context["currentModule"]) ? $context["currentModule"] : $this->getContext($context, "currentModule"))));
        echo "

    <div id=\"container\">

        ";
        // line 27
        if (( !array_key_exists("showMenu", $context) || (isset($context["showMenu"]) ? $context["showMenu"] : $this->getContext($context, "showMenu")))) {
            // line 28
            echo "            ";
            $this->loadTemplate("@CoreAdminHome/_menu.twig", "admin.twig", 28)->display($context);
            // line 29
            echo "        ";
        }
        // line 30
        echo "
        <div id=\"content\" class=\"admin\">

            ";
        // line 33
        $this->loadTemplate("@CoreHome/_headerMessage.twig", "admin.twig", 33)->display($context);
        // line 34
        echo "            ";
        $this->loadTemplate("@CoreHome/_notifications.twig", "admin.twig", 34)->display($context);
        // line 35
        echo "
            <div class=\"ui-confirm\" id=\"alert\">
                <h2></h2>
                <input role=\"no\" type=\"button\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Ok")), "html", null, true);
        echo "\"/>
            </div>

            ";
        // line 41
        $this->loadTemplate("@CoreHome/_warningInvalidHost.twig", "admin.twig", 41)->display($context);
        // line 42
        echo "
            ";
        // line 43
        $this->displayBlock('content', $context, $blocks);
        // line 45
        echo "
        </div>
    </div>
";
    }

    // line 43
    public function block_content($context, array $blocks = array())
    {
        // line 44
        echo "            ";
    }

    public function getTemplateName()
    {
        return "admin.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 44,  141 => 43,  134 => 45,  132 => 43,  129 => 42,  127 => 41,  121 => 38,  116 => 35,  113 => 34,  111 => 33,  106 => 30,  103 => 29,  100 => 28,  98 => 27,  91 => 23,  86 => 22,  84 => 21,  81 => 20,  78 => 19,  75 => 18,  68 => 15,  65 => 14,  62 => 13,  59 => 12,  56 => 11,  53 => 10,  50 => 9,  47 => 8,  44 => 7,  34 => 3,  30 => 1,  28 => 5,  11 => 1,);
    }
}
