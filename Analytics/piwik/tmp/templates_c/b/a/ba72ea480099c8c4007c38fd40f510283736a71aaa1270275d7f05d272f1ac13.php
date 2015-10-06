<?php

/* @CoreHome/_topBar.twig */
class __TwigTemplate_ba72ea480099c8c4007c38fd40f510283736a71aaa1270275d7f05d272f1ac13 extends Twig_Template
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
        // line 1
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), array("Template.beforeTopBar", (isset($context["userAlias"]) ? $context["userAlias"] : $this->getContext($context, "userAlias")), (isset($context["userLogin"]) ? $context["userLogin"] : $this->getContext($context, "userLogin")), (isset($context["topMenu"]) ? $context["topMenu"] : $this->getContext($context, "topMenu")), (isset($context["userMenu"]) ? $context["userMenu"] : $this->getContext($context, "userMenu"))));
        echo "
<div id=\"topBars\">
    ";
        // line 3
        $this->loadTemplate("@CoreHome/_topBarTopMenu.twig", "@CoreHome/_topBar.twig", 3)->display($context);
        // line 4
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@CoreHome/_topBar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  24 => 3,  19 => 1,);
    }
}
