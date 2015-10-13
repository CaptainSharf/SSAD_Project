<?php

/* dashboard.twig */
class __TwigTemplate_0bed9181856806d4b3503e4f53a94afe28edbc17b9f7787dcf30ce503afacfb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "dashboard.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'pageTitle' => array($this, 'block_pageTitle'),
            'pageDescription' => array($this, 'block_pageDescription'),
            'body' => array($this, 'block_body'),
            'root' => array($this, 'block_root'),
            'notification' => array($this, 'block_notification'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 14
        $context["bodyClass"] = call_user_func_array($this->env->getFunction('postEvent')->getCallable(), array("Template.bodyClass", "dashboard"));
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

    <!--[if lt IE 9]>
    <script language=\"javascript\" type=\"text/javascript\" src=\"libs/jqplot/excanvas.min.js\"></script>
    <![endif]-->
";
    }

    // line 11
    public function block_pageTitle($context, array $blocks = array())
    {
        echo (isset($context["siteName"]) ? $context["siteName"] : $this->getContext($context, "siteName"));
        echo " - ";
        if ( !(isset($context["isCustomLogo"]) ? $context["isCustomLogo"] : $this->getContext($context, "isCustomLogo"))) {
            echo "Piwik &rsaquo;";
        }
        echo " ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreHome_WebAnalyticsReports")), "html", null, true);
    }

    // line 12
    public function block_pageDescription($context, array $blocks = array())
    {
        echo "Web Analytics report for ";
        echo twig_escape_filter($this->env, (isset($context["siteName"]) ? $context["siteName"] : $this->getContext($context, "siteName")), "html_attr");
        echo " - Piwik";
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    ";
        // line 18
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), array("Template.footer"));
        echo "
";
    }

    // line 21
    public function block_root($context, array $blocks = array())
    {
        // line 22
        echo "    ";
        $this->loadTemplate("@CoreHome/_warningInvalidHost.twig", "dashboard.twig", 22)->display($context);
        // line 23
        echo "    ";
        $this->loadTemplate("@CoreHome/_topScreen.twig", "dashboard.twig", 23)->display($context);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('notification', $context, $blocks);
        // line 28
        echo "
    <div class=\"ui-confirm\" id=\"alert\">
        <h2></h2>
        <input role=\"yes\" type=\"button\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Ok")), "html", null, true);
        echo "\"/>
    </div>

    ";
        // line 34
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), array("Template.beforeContent", "dashboard", (isset($context["currentModule"]) ? $context["currentModule"] : $this->getContext($context, "currentModule"))));
        echo "

    ";
        // line 36
        $this->displayBlock('content', $context, $blocks);
    }

    // line 25
    public function block_notification($context, array $blocks = array())
    {
        // line 26
        echo "        ";
        $this->loadTemplate("@CoreHome/_notifications.twig", "dashboard.twig", 26)->display($context);
        // line 27
        echo "    ";
    }

    // line 36
    public function block_content($context, array $blocks = array())
    {
        // line 37
        echo "    ";
    }

    public function getTemplateName()
    {
        return "dashboard.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 37,  129 => 36,  125 => 27,  122 => 26,  119 => 25,  115 => 36,  110 => 34,  104 => 31,  99 => 28,  97 => 25,  94 => 24,  91 => 23,  88 => 22,  85 => 21,  79 => 18,  74 => 17,  71 => 16,  63 => 12,  51 => 11,  40 => 4,  37 => 3,  33 => 1,  31 => 14,  11 => 1,);
    }
}
