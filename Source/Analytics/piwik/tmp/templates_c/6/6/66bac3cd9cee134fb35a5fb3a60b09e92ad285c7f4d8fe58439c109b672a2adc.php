<?php

/* @SitesManager/index.twig */
class __TwigTemplate_66bac3cd9cee134fb35a5fb3a60b09e92ad285c7f4d8fe58439c109b672a2adc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.twig", "@SitesManager/index.twig", 1);
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
        echo "
    <div ng-include=\"'plugins/SitesManager/templates/index.html?cb=";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["cacheBuster"]) ? $context["cacheBuster"] : $this->getContext($context, "cacheBuster")), "html", null, true);
        echo "'\"></div>

";
    }

    public function getTemplateName()
    {
        return "@SitesManager/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
