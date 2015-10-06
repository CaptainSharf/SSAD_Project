<?php

/* @Goals/_listGoalEdit.twig */
class __TwigTemplate_7e8b7a2920fc41ee16cee664c3ec10634c570af8da90ec5357e55dc8104ba1c8 extends Twig_Template
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
        echo "<div id='entityEditContainer' class=\"managegoals\" style=\"display:none;\">
    <table class=\"dataTable entityTable\">
        <thead>
        <tr>
            <th class=\"first\">Id</th>
            <th>";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_GoalName")), "html", null, true);
        echo "</th>
            <th>";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_GoalIsTriggeredWhen")), "html", null, true);
        echo "</th>
            <th>";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ColumnRevenue")), "html", null, true);
        echo "</th>
            <th>";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Edit")), "html", null, true);
        echo "</th>
            <th>";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Delete")), "html", null, true);
        echo "</th>
        </tr>
        </thead>
        ";
        // line 13
        if (twig_test_empty((isset($context["goals"]) ? $context["goals"] : $this->getContext($context, "goals")))) {
            // line 14
            echo "            <tr>
                <td colspan='7'>
                    <br/>
                    ";
            // line 17
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_ThereIsNoGoalToManage", (isset($context["siteName"]) ? $context["siteName"] : $this->getContext($context, "siteName"))));
            echo ".
                    <br/><br/>
                </td>
            </tr>
        ";
        } else {
            // line 22
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["goals"]) ? $context["goals"] : $this->getContext($context, "goals")));
            foreach ($context['_seq'] as $context["_key"] => $context["goal"]) {
                // line 23
                echo "                <tr>
                    <td class=\"first\">";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["goal"], "idgoal", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["goal"], "name", array()), "html", null, true);
                echo "</td>
                    <td><span class='matchAttribute'>";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["goal"], "match_attribute", array()), "html", null, true);
                echo "</span>
                        ";
                // line 27
                if ($this->getAttribute($context["goal"], "pattern_type", array(), "any", true, true)) {
                    // line 28
                    echo "                            <br/>
                            ";
                    // line 29
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_Pattern")), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["goal"], "pattern_type", array()), "html", null, true);
                    echo ": ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["goal"], "pattern", array()), "html", null, true);
                    echo "
                        ";
                }
                // line 31
                echo "                    </td>
                    <td>";
                // line 32
                if (($this->getAttribute($context["goal"], "revenue", array()) == 0)) {
                    echo "-";
                } else {
                    echo call_user_func_array($this->env->getFilter('money')->getCallable(), array($this->getAttribute($context["goal"], "revenue", array()), (isset($context["idSite"]) ? $context["idSite"] : $this->getContext($context, "idSite"))));
                }
                echo "</td>
                    <td>
                        <a href='#' name=\"linkEditGoal\" id=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["goal"], "idgoal", array()), "html", null, true);
                echo "\" class=\"link_but withIcon\">
                            <img src='plugins/Morpheus/images/ico_edit.png' border=\"0\"/>
                            ";
                // line 36
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Edit")), "html", null, true);
                echo "
                        </a>
                    </td>
                    <td>
                        <a href='#' name=\"linkDeleteGoal\" id=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["goal"], "idgoal", array()), "html", null, true);
                echo "\" class=\"link_but withIcon\">
                            <img src='plugins/Morpheus/images/ico_delete.png' border=\"0\"/>
                            ";
                // line 42
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Delete")), "html", null, true);
                echo "
                        </a>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['goal'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "        ";
        }
        // line 48
        echo "    </table>

    ";
        // line 50
        if ( !array_key_exists("onlyShowAddNewGoal", $context)) {
            // line 51
            echo "        <br/>
        <div name=\"linkAddNewGoal\" class=\"addrow\"><img src='plugins/Morpheus/images/add.png'/> ";
            // line 52
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_AddNewGoal")), "html", null, true);
            echo "</div>
        <br/>
        <br/>

    ";
        }
        // line 57
        echo "</div>

<div class=\"ui-confirm\" id=\"confirm\">
    <h2></h2>
    <input role=\"yes\" type=\"button\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
        echo "\"/>
    <input role=\"no\" type=\"button\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
        echo "\"/>
</div>

<script type=\"text/javascript\">
    var goalTypeToTranslation = {
        \"manually\": \"";
        // line 67
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_ManuallyTriggeredUsingJavascriptFunction")), "html", null, true);
        echo "\",
        \"file\": \"";
        // line 68
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_Download")), "html", null, true);
        echo "\",
        \"url\": \"";
        // line 69
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_VisitUrl")), "html", null, true);
        echo "\",
        \"title\": \"";
        // line 70
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_VisitPageTitle")), "html", null, true);
        echo "\",
        \"external_website\": \"";
        // line 71
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_ClickOutlink")), "html", null, true);
        echo "\",
        \"event_action\": \"";
        // line 72
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_SendEvent")), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Events_EventAction")), "html", null, true);
        echo ")\",
        \"event_category\": \"";
        // line 73
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_SendEvent")), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Events_EventCategory")), "html", null, true);
        echo ")\",
        \"event_name\": \"";
        // line 74
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_SendEvent")), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Events_EventName")), "html", null, true);
        echo ")\"
    };

    \$(document).ready(function () {
        // translation of the goal \"match attribute\" to human readable description
        \$('.matchAttribute').each(function () {
            var matchAttribute = \$(this).text();
            var translation = goalTypeToTranslation[matchAttribute];
            \$(this).text(translation);
        });
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "@Goals/_listGoalEdit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 74,  201 => 73,  195 => 72,  191 => 71,  187 => 70,  183 => 69,  179 => 68,  175 => 67,  167 => 62,  163 => 61,  157 => 57,  149 => 52,  146 => 51,  144 => 50,  140 => 48,  137 => 47,  126 => 42,  121 => 40,  114 => 36,  109 => 34,  100 => 32,  97 => 31,  88 => 29,  85 => 28,  83 => 27,  79 => 26,  75 => 25,  71 => 24,  68 => 23,  63 => 22,  55 => 17,  50 => 14,  48 => 13,  42 => 10,  38 => 9,  34 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }
}
