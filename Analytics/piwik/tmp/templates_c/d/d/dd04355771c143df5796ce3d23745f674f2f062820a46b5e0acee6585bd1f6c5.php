<?php

/* @CoreHome/_indexContent.twig */
class __TwigTemplate_dd04355771c143df5796ce3d23745f674f2f062820a46b5e0acee6585bd1f6c5 extends Twig_Template
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
        $context["ajax"] = $this->loadTemplate("ajaxMacros.twig", "@CoreHome/_indexContent.twig", 1);
        // line 2
        echo "<div class=\"pageWrap container-fluid\">
<a name=\"main\"></a>
    ";
        // line 4
        $this->loadTemplate("@CoreHome/_notifications.twig", "@CoreHome/_indexContent.twig", 4)->display($context);
        // line 5
        echo "    <div class=\"top_controls\">
        ";
        // line 6
        $this->loadTemplate("@CoreHome/_periodSelect.twig", "@CoreHome/_indexContent.twig", 6)->display($context);
        // line 7
        echo "        ";
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), array("Template.nextToCalendar"));
        echo "
        ";
        // line 8
        $this->loadTemplate($context["dashboardSettingsControl"]->getTemplateFile(), "@CoreHome/_indexContent.twig", 8)->display(array_merge($context, $context["dashboardSettingsControl"]->getTemplateVars()));
        // line 9
        echo "        ";
        $this->loadTemplate("@CoreHome/_headerMessage.twig", "@CoreHome/_indexContent.twig", 9)->display($context);
        // line 10
        echo "        ";
        echo $context["ajax"]->getrequestErrorDiv(((array_key_exists("emailSuperUser", $context)) ? (_twig_default_filter((isset($context["emailSuperUser"]) ? $context["emailSuperUser"] : $this->getContext($context, "emailSuperUser")), "")) : ("")));
        echo "
    </div>

    ";
        // line 13
        echo $context["ajax"]->getloadingDiv();
        echo "

    <div id=\"content\" class=\"home\">
        ";
        // line 16
        if ((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"))) {
            echo twig_escape_filter($this->env, (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "html", null, true);
        }
        // line 17
        echo "    </div>
    <div class=\"clear\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@CoreHome/_indexContent.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 17,  55 => 16,  49 => 13,  42 => 10,  39 => 9,  37 => 8,  32 => 7,  30 => 6,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
