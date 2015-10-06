<?php

/* @Referrers/indexWebsites.twig */
class __TwigTemplate_5647d185a8ab01c792ec2daebef504a1cddac26e2666ac1c79cb5a04fe7bbab7 extends Twig_Template
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
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Referrers_Websites")), "html", null, true);
        echo "</h2>
        ";
        // line 5
        echo (isset($context["websites"]) ? $context["websites"] : $this->getContext($context, "websites"));
        echo "
    </div>

    <div class=\"col-md-6\">
        <h2 piwik-enriched-headline>";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Referrers_Socials")), "html", null, true);
        echo "</h2>
        ";
        // line 10
        echo (isset($context["socials"]) ? $context["socials"] : $this->getContext($context, "socials"));
        echo "
    </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "@Referrers/indexWebsites.twig";
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
