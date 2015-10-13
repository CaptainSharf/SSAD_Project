<?php

/* @CoreHome/_periodSelect.twig */
class __TwigTemplate_161f72166a79fa7b8c2fb38a3e59cadd45723f48da5b8be10f036aadc0403396 extends Twig_Template
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
        echo "<div id=\"periodString\" class=\"piwikTopControl periodSelector\">
    <div id=\"date\">";
        // line 2
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_DateRange")), "html", null, true);
        echo " <strong>";
        echo twig_escape_filter($this->env, (isset($context["prettyDate"]) ? $context["prettyDate"] : $this->getContext($context, "prettyDate")), "html", null, true);
        echo "</strong></div>
    <div class=\"calendar-icon\"></div>
    <div id=\"periodMore\">
        <div class=\"period-date\">
            <div id=\"datepicker\"></div>
        </div>
        <div class=\"period-range\" style=\"display:none;\">
            <div id=\"calendarRangeFrom\">
                <h6>";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_DateRangeFrom")), "html", null, true);
        echo "<input tabindex=\"1\" type=\"text\" id=\"inputCalendarFrom\" name=\"inputCalendarFrom\"/></h6>

                <div id=\"calendarFrom\"></div>
            </div>
            <div id=\"calendarRangeTo\">
                <h6>";
        // line 15
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_DateRangeTo")), "html", null, true);
        echo "<input tabindex=\"2\" type=\"text\" id=\"inputCalendarTo\" name=\"inputCalendarTo\"/></h6>

                <div id=\"calendarTo\"></div>
            </div>
        </div>
        <div class=\"period-type\">
            <h6>";
        // line 21
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Period")), "html", null, true);
        echo "</h6>
\t\t\t<span id=\"otherPeriods\">
            ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["periodsNames"]) ? $context["periodsNames"] : $this->getContext($context, "periodsNames")));
        foreach ($context['_seq'] as $context["label"] => $context["thisPeriod"]) {
            // line 24
            echo "                <input type=\"radio\" name=\"period\" id=\"period_id_";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("period" => $context["label"]))), "html", null, true);
            echo "\"";
            if (($context["label"] == (isset($context["period"]) ? $context["period"] : $this->getContext($context, "period")))) {
                echo " checked=\"checked\"";
            }
            echo " />
                <label for=\"period_id_";
            // line 25
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["thisPeriod"], "singular", array()), "html", null, true);
            echo "</label>
                <br/>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['thisPeriod'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "\t\t\t</span>
            <input tabindex=\"3\" type=\"submit\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ApplyDateRange")), "html", null, true);
        echo "\" id=\"calendarRangeApply\" class=\"btn\"/>
            ";
        // line 30
        $context["ajax"] = $this->loadTemplate("ajaxMacros.twig", "@CoreHome/_periodSelect.twig", 30);
        // line 31
        echo "            ";
        echo $context["ajax"]->getloadingDiv("ajaxLoadingCalendar");
        echo "
        </div>
    </div>
    <div class=\"period-click-tooltip\" style=\"display:none;\">";
        // line 34
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ClickToChangePeriod")), "html", null, true);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@CoreHome/_periodSelect.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 34,  92 => 31,  90 => 30,  86 => 29,  83 => 28,  72 => 25,  61 => 24,  57 => 23,  52 => 21,  43 => 15,  35 => 10,  22 => 2,  19 => 1,);
    }
}
