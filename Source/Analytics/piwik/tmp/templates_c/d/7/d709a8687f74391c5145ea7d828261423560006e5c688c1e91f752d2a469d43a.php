<?php

/* @CoreAdminHome/pluginSettings.twig */
class __TwigTemplate_d709a8687f74391c5145ea7d828261423560006e5c688c1e91f752d2a469d43a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return $this->loadTemplate(((((isset($context["mode"]) ? $context["mode"] : $this->getContext($context, "mode")) == "user")) ? ("user.twig") : ("admin.twig")), "@CoreAdminHome/pluginSettings.twig", 2);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
    ";
        // line 6
        $context["piwik"] = $this->loadTemplate("macros.twig", "@CoreAdminHome/pluginSettings.twig", 6);
        // line 7
        echo "    ";
        $context["ajax"] = $this->loadTemplate("ajaxMacros.twig", "@CoreAdminHome/pluginSettings.twig", 7);
        // line 8
        echo "    ";
        $context["settingsMacro"] = $this->loadTemplate("settingsMacros.twig", "@CoreAdminHome/pluginSettings.twig", 8);
        // line 9
        echo "
    ";
        // line 10
        if (((isset($context["mode"]) ? $context["mode"] : $this->getContext($context, "mode")) == "user")) {
            // line 11
            echo "        <h2 piwik-enriched-headline>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_PersonalPluginSettings")), "html", null, true);
            echo "</h2>
    ";
        } else {
            // line 13
            echo "        <h2 piwik-enriched-headline>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_SystemPluginSettings")), "html", null, true);
            echo "</h2>
    ";
        }
        // line 15
        echo "
    <input type=\"hidden\" name=\"setpluginsettingsnonce\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["nonce"]) ? $context["nonce"] : $this->getContext($context, "nonce")), "html", null, true);
        echo "\">

    <p>
        ";
        // line 19
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_PluginSettingsIntro")), "html", null, true);
        echo "
        ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pluginsSettings"]) ? $context["pluginsSettings"] : $this->getContext($context, "pluginsSettings")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["pluginName"] => $context["settings"]) {
            // line 21
            echo "            <a href=\"#";
            echo twig_escape_filter($this->env, $context["pluginName"], "html_attr");
            echo "\">";
            echo twig_escape_filter($this->env, $context["pluginName"], "html", null, true);
            echo "</a>";
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                echo ", ";
            }
            // line 22
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['pluginName'], $context['settings'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "    </p>

    ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pluginsSettings"]) ? $context["pluginsSettings"] : $this->getContext($context, "pluginsSettings")));
        foreach ($context['_seq'] as $context["pluginName"] => $context["pluginSettings"]) {
            // line 26
            echo "
        <h2 id=\"";
            // line 27
            echo twig_escape_filter($this->env, $context["pluginName"], "html_attr");
            echo "\">";
            echo twig_escape_filter($this->env, $context["pluginName"], "html", null, true);
            echo "</h2>

        ";
            // line 29
            if ($this->getAttribute($context["pluginSettings"], "introduction", array())) {
                // line 30
                echo "            <p class=\"pluginIntroduction\">
                ";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["pluginSettings"], "introduction", array()), "html", null, true);
                echo "
            </p>
        ";
            }
            // line 34
            echo "
        <div id=\"pluginSettings\" data-pluginname=\"";
            // line 35
            echo twig_escape_filter($this->env, $context["pluginName"], "html_attr");
            echo "\">

            ";
            // line 37
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["pluginSettings"], "settings", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["name"] => $context["setting"]) {
                // line 38
                echo "                ";
                echo $context["settingsMacro"]->getsingleSetting($context["setting"], $this->getAttribute($context["loop"], "index", array()));
                echo "
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['setting'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "
        </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['pluginName'], $context['pluginSettings'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
    <hr/>

    ";
        // line 47
        echo $context["ajax"]->geterrorDiv("ajaxErrorPluginSettings");
        echo "
    ";
        // line 48
        echo $context["ajax"]->getloadingDiv("ajaxLoadingPluginSettings");
        echo "

    <input type=\"submit\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Save")), "html", null, true);
        echo "\" class=\"pluginsSettingsSubmit submit\"/>

";
    }

    public function getTemplateName()
    {
        return "@CoreAdminHome/pluginSettings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 50,  200 => 48,  196 => 47,  191 => 44,  182 => 40,  165 => 38,  148 => 37,  143 => 35,  140 => 34,  134 => 31,  131 => 30,  129 => 29,  122 => 27,  119 => 26,  115 => 25,  111 => 23,  97 => 22,  88 => 21,  71 => 20,  67 => 19,  61 => 16,  58 => 15,  52 => 13,  46 => 11,  44 => 10,  41 => 9,  38 => 8,  35 => 7,  33 => 6,  30 => 5,  27 => 4,  18 => 2,);
    }
}
