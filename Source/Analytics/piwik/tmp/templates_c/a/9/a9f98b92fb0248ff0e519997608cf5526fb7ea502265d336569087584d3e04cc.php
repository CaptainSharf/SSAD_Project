<?php

/* @Events/index.twig */
class __TwigTemplate_a9f98b92fb0248ff0e519997608cf5526fb7ea502265d336569087584d3e04cc extends Twig_Template
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
        echo (isset($context["leftMenuReports"]) ? $context["leftMenuReports"] : $this->getContext($context, "leftMenuReports"));
        echo "

";
    }

    public function getTemplateName()
    {
        return "@Events/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
