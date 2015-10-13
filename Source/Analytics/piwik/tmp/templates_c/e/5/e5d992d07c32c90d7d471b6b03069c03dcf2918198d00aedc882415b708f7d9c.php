<?php

/* @CoreHome/_topScreen.twig */
class __TwigTemplate_e5d992d07c32c90d7d471b6b03069c03dcf2918198d00aedc882415b708f7d9c extends Twig_Template
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
        echo "<div id=\"header\">
    <a href='#main' tabindex=\"0\" class=\"accessibility-skip-to-content\">";
        // line 2
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreHome_SkipToContent")), "html", null, true);
        echo "</a>
    ";
        // line 3
        $this->loadTemplate("@CoreHome/_logo.twig", "@CoreHome/_topScreen.twig", 3)->display($context);
        // line 4
        echo "    ";
        $this->loadTemplate("@CoreHome/_topBar.twig", "@CoreHome/_topScreen.twig", 4)->display($context);
        // line 5
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@CoreHome/_topScreen.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  28 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
