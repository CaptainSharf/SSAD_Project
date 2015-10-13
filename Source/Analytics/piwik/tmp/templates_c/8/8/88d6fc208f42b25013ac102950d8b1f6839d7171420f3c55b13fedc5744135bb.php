<?php

/* @Goals/_addEditGoal.twig */
class __TwigTemplate_88d6fc208f42b25013ac102950d8b1f6839d7171420f3c55b13fedc5744135bb extends Twig_Template
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
        echo "
";
        // line 2
        $context["ajax"] = $this->loadTemplate("ajaxMacros.twig", "@Goals/_addEditGoal.twig", 2);
        // line 3
        echo $context["ajax"]->geterrorDiv();
        echo "
";
        // line 4
        echo $context["ajax"]->getloadingDiv("goalAjaxLoading");
        echo "

<div class=\"entityContainer\">
    ";
        // line 7
        if ( !array_key_exists("onlyShowAddNewGoal", $context)) {
            // line 8
            echo "        ";
            $this->loadTemplate("@Goals/_listGoalEdit.twig", "@Goals/_addEditGoal.twig", 8)->display($context);
            // line 9
            echo "    ";
        }
        // line 10
        echo "    ";
        $this->loadTemplate("@Goals/_formAddGoal.twig", "@Goals/_addEditGoal.twig", 10)->display($context);
        // line 11
        echo "    ";
        if ( !array_key_exists("onlyShowAddNewGoal", $context)) {
            // line 12
            echo "        <div class='entityCancel' style='display:none;'>
            ";
            // line 13
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_OrCancel", "<a class='entityCancelLink'>", "</a>"));
            echo "
        </div>

    ";
        }
        // line 17
        echo "    <a id='bottom'></a>
</div>

<script type=\"text/javascript\">
    var mappingMatchTypeName = {
        \"url\": \"";
        // line 22
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_URL")), "html", null, true);
        echo "\",
        \"title\": \"";
        // line 23
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_PageTitle")), "html", null, true);
        echo "\",
        \"file\": \"";
        // line 24
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_Filename")), "html", null, true);
        echo "\",
        \"external_website\": \"";
        // line 25
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_ExternalWebsiteUrl")), "html", null, true);
        echo "\",
        \"event\": \"";
        // line 26
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Events_Event")), "html", null, true);
        echo "\"
    };
    var mappingMatchTypeExamples = {
        \"url\": \"";
        // line 29
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ForExampleShort")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_Contains", "'checkout/confirmation'")), "html", null, true);
        echo " \\
\t\t<br />";
        // line 30
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ForExampleShort")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_IsExactly", "'http://example.com/thank-you.html'")), "html", null, true);
        echo " \\
\t\t<br />";
        // line 31
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ForExampleShort")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_MatchesExpression", "'(.*)\\/demo\\/(.*)'")), "html", null, true);
        echo "\",
        \"title\": \"";
        // line 32
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ForExampleShort")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_Contains", "'Order confirmation'")), "html", null, true);
        echo "\",
        \"file\": \"";
        // line 33
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ForExampleShort")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_Contains", "'files/brochure.pdf'")), "html", null, true);
        echo " \\
\t\t<br />";
        // line 34
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ForExampleShort")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_IsExactly", "'http://example.com/files/brochure.pdf'")), "html", null, true);
        echo " \\
\t\t<br />";
        // line 35
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ForExampleShort")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_MatchesExpression", "'(.*)\\.zip'")), "html", null, true);
        echo "\",
        \"external_website\": \"";
        // line 36
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ForExampleShort")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_Contains", "'amazon.com'")), "html", null, true);
        echo " \\
\t\t<br />";
        // line 37
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ForExampleShort")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_IsExactly", "'http://mypartner.com/landing.html'")), "html", null, true);
        echo " \\
\t\t<br />";
        // line 38
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ForExampleShort")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_MatchesExpression", "'http://www.amazon.com\\/(.*)\\/yourAffiliateId'")), "html", null, true);
        echo "\",
        \"event\": \"";
        // line 39
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ForExampleShort")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_Contains", "'video'")), "html", null, true);
        echo " \\
\t\t<br />";
        // line 40
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ForExampleShort")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_IsExactly", "'click'")), "html", null, true);
        echo " \\
\t\t<br />";
        // line 41
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ForExampleShort")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_MatchesExpression", "'(.*)_banner'")), "html", null, true);
        echo "\"
    };
    \$(document).ready(function () {
        bindGoalForm();

        ";
        // line 46
        if ( !array_key_exists("onlyShowAddNewGoal", $context)) {
            // line 47
            echo "            piwik.goals = ";
            echo (isset($context["goalsJSON"]) ? $context["goalsJSON"] : $this->getContext($context, "goalsJSON"));
            echo ";
            bindListGoalEdit();

            ";
            // line 50
            if ((isset($context["idGoal"]) ? $context["idGoal"] : $this->getContext($context, "idGoal"))) {
                // line 51
                echo "                editGoal(";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["idGoal"]) ? $context["idGoal"] : $this->getContext($context, "idGoal")), "js"), "html", null, true);
                echo ");
            ";
            } else {
                // line 53
                echo "                showEditGoals();
            ";
            }
            // line 55
            echo "        ";
        } else {
            // line 56
            echo "            initAndShowAddGoalForm();
        ";
        }
        // line 58
        echo "    });

</script>
";
    }

    public function getTemplateName()
    {
        return "@Goals/_addEditGoal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 58,  193 => 56,  190 => 55,  186 => 53,  180 => 51,  178 => 50,  171 => 47,  169 => 46,  159 => 41,  153 => 40,  147 => 39,  141 => 38,  135 => 37,  129 => 36,  123 => 35,  117 => 34,  111 => 33,  105 => 32,  99 => 31,  93 => 30,  87 => 29,  81 => 26,  77 => 25,  73 => 24,  69 => 23,  65 => 22,  58 => 17,  51 => 13,  48 => 12,  45 => 11,  42 => 10,  39 => 9,  36 => 8,  34 => 7,  28 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
