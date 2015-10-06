<?php

/* @Goals/editGoals.twig */
class __TwigTemplate_58167268dfc30fa9344bb2f040d59942a119f00f99e4bfcd80dd2547d9e05c5e extends Twig_Template
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
        if ((isset($context["userCanEditGoals"]) ? $context["userCanEditGoals"] : $this->getContext($context, "userCanEditGoals"))) {
            // line 2
            echo "
    <h2 piwik-enriched-headline>";
            // line 3
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_ManageGoals")), "html", null, true);
            echo "</h2>

    ";
            // line 5
            $this->loadTemplate("@Goals/_addEditGoal.twig", "@Goals/editGoals.twig", 5)->display($context);
            // line 6
            echo "
";
        } else {
            // line 8
            echo "
    <h2>";
            // line 9
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_AddNewGoal")), "html", null, true);
            echo "</h2>
    <p>
        ";
            // line 11
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_NoGoalsNeedAccess"));
            echo "
    </p>
    <p>
        ";
            // line 14
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_LearnMoreAboutGoalTrackingDocumentation", "<a href='?module=Proxy&action=redirect&url=http://piwik.org/docs/tracking-goals-web-analytics/' target='_blank'>", "</a>"));
            echo "
    </p>

";
        }
    }

    public function getTemplateName()
    {
        return "@Goals/editGoals.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 14,  43 => 11,  38 => 9,  35 => 8,  31 => 6,  29 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }
}
