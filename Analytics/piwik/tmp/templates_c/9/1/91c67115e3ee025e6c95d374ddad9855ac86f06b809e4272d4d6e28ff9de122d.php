<?php

/* @API/listAllAPI.twig */
class __TwigTemplate_91c67115e3ee025e6c95d374ddad9855ac86f06b809e4272d4d6e28ff9de122d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("user.twig", "@API/listAllAPI.twig", 1);
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
<div class=\"api-list\">

    <h2>";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("API_QuickDocumentationTitle")), "html", null, true);
        echo "</h2>

    ";
        // line 9
        $this->loadTemplate("@CoreHome/_siteSelectHeader.twig", "@API/listAllAPI.twig", 9)->display($context);
        // line 10
        echo "
    <div class=\"top_controls\">
        ";
        // line 12
        $this->loadTemplate("@CoreHome/_periodSelect.twig", "@API/listAllAPI.twig", 12)->display($context);
        // line 13
        echo "    </div>

    <p>";
        // line 15
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("API_PluginDescription")), "html", null, true);
        echo "</p>

    <p>
        ";
        // line 18
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("API_MoreInformation", "<a target='_blank' href='?module=Proxy&action=redirect&url=http://piwik.org/docs/analytics-api'>", "</a>", "<a target='_blank' href='?module=Proxy&action=redirect&url=http://piwik.org/docs/analytics-api/reference'>", "</a>"));
        echo "
    </p>

    <h2>";
        // line 21
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("API_UserAuthentication")), "html", null, true);
        echo "</h2>

    <p>
        ";
        // line 24
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("API_UsingTokenAuth", "", "", ""));
        echo "<br/>
        <span id='token_auth'>&amp;token_auth=<strong>";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["token_auth"]) ? $context["token_auth"] : $this->getContext($context, "token_auth")), "html", null, true);
        echo "</strong></span><br/>
        ";
        // line 26
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("API_KeepTokenSecret", "<b>", "</b>"));
        echo "
        ";
        // line 27
        echo (isset($context["list_api_methods_with_links"]) ? $context["list_api_methods_with_links"] : $this->getContext($context, "list_api_methods_with_links"));
        echo "
        <br/>
</div>
";
    }

    public function getTemplateName()
    {
        return "@API/listAllAPI.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 27,  79 => 26,  75 => 25,  71 => 24,  65 => 21,  59 => 18,  53 => 15,  49 => 13,  47 => 12,  43 => 10,  41 => 9,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
