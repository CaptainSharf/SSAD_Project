<?php

/* @CoreHome/getDefaultIndexView.twig */
class __TwigTemplate_28aa2004da358b29f8fcdbdbaee66016506692905713309fcd23b993ce0d14cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dashboard.twig", "@CoreHome/getDefaultIndexView.twig", 1);
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

    // line 2
    public function block_notification($context, array $blocks = array())
    {
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
";
        // line 5
        $this->loadTemplate("@CoreHome/_siteSelectHeader.twig", "@CoreHome/getDefaultIndexView.twig", 5)->display($context);
        // line 6
        echo "
";
        // line 7
        if ((array_key_exists("menu", $context) && (isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")))) {
            // line 8
            echo "  ";
            $this->loadTemplate("@CoreHome/_menu.twig", "@CoreHome/getDefaultIndexView.twig", 8)->display($context);
        }
        // line 10
        echo "
";
        // line 11
        $this->loadTemplate("@CoreHome/_indexContent.twig", "@CoreHome/getDefaultIndexView.twig", 11)->display($context);
        // line 12
        echo "
";
    }

    public function getTemplateName()
    {
        return "@CoreHome/getDefaultIndexView.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 12,  54 => 11,  51 => 10,  47 => 8,  45 => 7,  42 => 6,  40 => 5,  37 => 4,  34 => 3,  29 => 2,  11 => 1,);
    }
}
