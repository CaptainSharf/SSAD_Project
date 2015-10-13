<?php

/* @Installation/cannotConnectToDb.twig */
class __TwigTemplate_9e699008369b08312c538728b5cccb44aa101ce8df11bc32c65e4ae8f329c6b6 extends Twig_Template
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
        echo "<p>";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Installation_CannotConnectToDb")), "html", null, true);
        echo ":</p>

<p><strong>";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["exceptionMessage"]) ? $context["exceptionMessage"] : $this->getContext($context, "exceptionMessage")), "html", null, true);
        echo "</strong></p>

<p>";
        // line 5
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Installation_CannotConnectToDbResolvingExplanation", "<a href=\"javascript:window.location.reload()\">", "</a>"));
        echo "</p>";
    }

    public function getTemplateName()
    {
        return "@Installation/cannotConnectToDb.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 5,  25 => 3,  19 => 1,);
    }
}
