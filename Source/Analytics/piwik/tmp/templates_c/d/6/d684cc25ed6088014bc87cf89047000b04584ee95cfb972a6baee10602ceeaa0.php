<?php

/* @Referrers/getSearchEnginesAndKeywords.twig */
class __TwigTemplate_d684cc25ed6088014bc87cf89047000b04584ee95cfb972a6baee10602ceeaa0 extends Twig_Template
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
        echo "<div class=\"row\">

    <div class=\"col-md-6\">
        <h2 piwik-enriched-headline>";
        // line 4
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Referrers_Keywords")), "html", null, true);
        echo "</h2>
        ";
        // line 5
        echo (isset($context["keywords"]) ? $context["keywords"] : $this->getContext($context, "keywords"));
        echo "
    </div>

    <div class=\"col-md-6\">
        <h2 piwik-enriched-headline>";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Referrers_SearchEngines")), "html", null, true);
        echo "</h2>
        ";
        // line 10
        echo (isset($context["searchEngines"]) ? $context["searchEngines"] : $this->getContext($context, "searchEngines"));
        echo "
    </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "@Referrers/getSearchEnginesAndKeywords.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 10,  35 => 9,  28 => 5,  24 => 4,  19 => 1,);
    }
}
