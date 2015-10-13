<?php

/* @SitesManager/siteWithoutData.twig */
class __TwigTemplate_c5cadbeaded1a6b7f00643503d76f09e9fbe49903953ce7dbf0f14273b7a0700 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dashboard.twig", "@SitesManager/siteWithoutData.twig", 1);
        $this->blocks = array(
            'notification' => array($this, 'block_notification'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "dashboard.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_notification($context, array $blocks = array())
    {
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
    ";
        // line 7
        $this->loadTemplate("@CoreHome/_siteSelectHeader.twig", "@SitesManager/siteWithoutData.twig", 7)->display($context);
        // line 8
        echo "
    <div class=\"site-without-data\">

        <h2>";
        // line 11
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SitesManager_SiteWithoutDataTitle")), "html", null, true);
        echo "</h2>

        <p>
            ";
        // line 14
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SitesManager_SiteWithoutDataDescription")), "html", null, true);
        echo "
            ";
        // line 15
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SitesManager_SiteWithoutDataSetupTracking", (("<a href=\"" . call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("module" => "CoreAdminHome", "action" => "trackingCodeGenerator")))) . "\">"), "</a>"));
        // line 18
        echo "
        </p>

        ";
        // line 21
        echo (isset($context["trackingHelp"]) ? $context["trackingHelp"] : $this->getContext($context, "trackingHelp"));
        echo "

    </div>

";
    }

    public function getTemplateName()
    {
        return "@SitesManager/siteWithoutData.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 21,  59 => 18,  57 => 15,  53 => 14,  47 => 11,  42 => 8,  40 => 7,  37 => 6,  34 => 5,  29 => 3,  11 => 1,);
    }
}
