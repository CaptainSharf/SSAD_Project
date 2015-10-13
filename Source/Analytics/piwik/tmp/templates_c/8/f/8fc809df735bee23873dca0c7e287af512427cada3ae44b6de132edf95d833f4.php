<?php

/* settingsMacros.twig */
class __TwigTemplate_8fc809df735bee23873dca0c7e287af512427cada3ae44b6de132edf95d833f4 extends Twig_Template
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
        // line 16
        echo "
";
    }

    // line 1
    public function getsingleSetting($__setting__ = null, $__index__ = 0)
    {
        $context = $this->env->mergeGlobals(array(
            "setting" => $__setting__,
            "index" => $__index__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "
    ";
            // line 3
            $context["settingValue"] = $this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "getValue", array());
            // line 4
            echo "
    <div class=\"form-group\">

        ";
            // line 7
            if ($this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "introduction", array())) {
                // line 8
                echo "            <p>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "introduction", array()), "html", null, true);
                echo "</p>
        ";
            }
            // line 10
            echo "
        ";
            // line 11
            echo $this->getAttribute($this, "field", array(0 => (isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), 1 => (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index"))), "method");
            echo "

    </div>

";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 17
    public function getfield($__setting__ = null, $__index__ =  -1)
    {
        $context = $this->env->mergeGlobals(array(
            "setting" => $__setting__,
            "index" => $__index__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 18
            echo "
    ";
            // line 19
            if (((isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")) ==  -1)) {
                // line 20
                echo "        ";
                $context["index"] = $this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "getName", array());
                // line 21
                echo "    ";
            }
            // line 22
            echo "
    ";
            // line 23
            $context["settingValue"] = $this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "getValue", array());
            // line 24
            echo "
        ";
            // line 25
            if (($this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "uiControlType", array()) != "checkbox")) {
                // line 26
                echo "            <label>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "title", array()), "html", null, true);
                echo "</label>
        ";
            }
            // line 28
            echo "
        ";
            // line 29
            if ($this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "inlineHelp", array())) {
                // line 30
                echo "            <div class=\"form-help\">
                ";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "inlineHelp", array()), "html", null, true);
                echo "
                ";
                // line 32
                if ((($this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "defaultValue", array()) && ($this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "uiControlType", array()) != "checkbox")) && ($this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "uiControlType", array()) != "radio"))) {
                    // line 33
                    echo "                    <br/>
                    ";
                    // line 34
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Default")), "html", null, true);
                    echo ":
                    ";
                    // line 35
                    if (twig_test_iterable($this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "defaultValue", array()))) {
                        // line 36
                        echo "                        ";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('truncate')->getCallable(), array(twig_join_filter($this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "defaultValue", array()), ", "), 50)), "html", null, true);
                        echo "
                    ";
                    } else {
                        // line 38
                        echo "                        ";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('truncate')->getCallable(), array($this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "defaultValue", array()), 50)), "html", null, true);
                        echo "
                    ";
                    }
                    // line 40
                    echo "                ";
                }
                // line 41
                echo "            </div>
        ";
            }
            // line 43
            echo "
        ";
            // line 44
            if ((($this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "uiControlType", array()) == "select") || ($this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "uiControlType", array()) == "multiselect"))) {
                // line 45
                echo "                    <select
                        ";
                // line 46
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "uiControlAttributes", array()));
                foreach ($context['_seq'] as $context["attr"] => $context["val"]) {
                    // line 47
                    echo "            ";
                    echo twig_escape_filter($this->env, $context["attr"], "html_attr");
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["val"], "html_attr");
                    echo "\"
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attr'], $context['val'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 49
                echo "                        name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "getKey", array()), "html_attr");
                echo "\"
                        ";
                // line 50
                if (($this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "uiControlType", array()) == "multiselect")) {
                    echo "multiple";
                }
                echo ">

                        ";
                // line 52
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "availableValues", array()));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 53
                    echo "            <option value='";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "'
                    ";
                    // line 54
                    if ((twig_test_iterable((isset($context["settingValue"]) ? $context["settingValue"] : $this->getContext($context, "settingValue"))) && twig_in_filter($context["key"], (isset($context["settingValue"]) ? $context["settingValue"] : $this->getContext($context, "settingValue"))))) {
                        // line 55
                        echo "                selected='selected'
            ";
                    } elseif ((                    // line 56
(isset($context["settingValue"]) ? $context["settingValue"] : $this->getContext($context, "settingValue")) == $context["key"])) {
                        // line 57
                        echo "                selected='selected'
                    ";
                    }
                    // line 58
                    echo ">
                ";
                    // line 59
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "
            </option>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 62
                echo "
                    </select>
                ";
            } elseif (($this->getAttribute(            // line 64
(isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "uiControlType", array()) == "textarea")) {
                // line 65
                echo "                    <textarea style=\"width: 376px; height: 250px;\"
                        ";
                // line 66
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "uiControlAttributes", array()));
                foreach ($context['_seq'] as $context["attr"] => $context["val"]) {
                    // line 67
                    echo "            ";
                    echo twig_escape_filter($this->env, $context["attr"], "html_attr");
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["val"], "html_attr");
                    echo "\"
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attr'], $context['val'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 69
                echo "                        name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "getKey", array()), "html_attr");
                echo "\"
                        >";
                // line 71
                echo twig_escape_filter($this->env, (isset($context["settingValue"]) ? $context["settingValue"] : $this->getContext($context, "settingValue")), "html", null, true);
                // line 72
                echo "</textarea>
                ";
            } elseif (($this->getAttribute(            // line 73
(isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "uiControlType", array()) == "radio")) {
                // line 74
                echo "
            ";
                // line 75
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "availableValues", array()));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 76
                    echo "                <label class=\"radio\">
                    <input
                            id=\"name-value-";
                    // line 78
                    echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                    echo "\"
                    ";
                    // line 79
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "uiControlAttributes", array()));
                    foreach ($context['_seq'] as $context["attr"] => $context["val"]) {
                        // line 80
                        echo "                        ";
                        echo twig_escape_filter($this->env, $context["attr"], "html_attr");
                        echo "=\"";
                        echo twig_escape_filter($this->env, $context["val"], "html_attr");
                        echo "\"
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['attr'], $context['val'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 82
                    echo "                    ";
                    if (((isset($context["settingValue"]) ? $context["settingValue"] : $this->getContext($context, "settingValue")) === $context["key"])) {
                        // line 83
                        echo "                        checked=\"checked\"
                    ";
                    }
                    // line 85
                    echo "                    type=\"radio\"
                    value=\"";
                    // line 86
                    echo twig_escape_filter($this->env, $context["key"], "html_attr");
                    echo "\"
                    name=\"";
                    // line 87
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "getKey", array()), "html_attr");
                    echo "\" />

                    ";
                    // line 89
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "

                    ";
                    // line 91
                    if ($this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "description", array())) {
                        // line 92
                        echo "                        <span class='form-description'>";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "description", array()), "html", null, true);
                        echo "</span>
                    ";
                    }
                    // line 94
                    echo "
                </label>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 97
                echo "
        ";
            } elseif (($this->getAttribute(            // line 98
(isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "uiControlType", array()) == "checkbox")) {
                // line 99
                echo "
            <label class=\"checkbox\">
                <input id=\"name-value-";
                // line 101
                echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                echo "\"
                ";
                // line 102
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "uiControlAttributes", array()));
                foreach ($context['_seq'] as $context["attr"] => $context["val"]) {
                    // line 103
                    echo "                    ";
                    echo twig_escape_filter($this->env, $context["attr"], "html_attr");
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["val"], "html_attr");
                    echo "\"
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attr'], $context['val'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 105
                echo "                value=\"1\"
                ";
                // line 106
                if ((isset($context["settingValue"]) ? $context["settingValue"] : $this->getContext($context, "settingValue"))) {
                    // line 107
                    echo "                    checked=\"checked\"
                ";
                }
                // line 109
                echo "                type=\"checkbox\"
                name=\"";
                // line 110
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "getKey", array()), "html_attr");
                echo "\">

                ";
                // line 112
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "title", array()), "html", null, true);
                echo "

                ";
                // line 114
                if ($this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "description", array())) {
                    // line 115
                    echo "                    <span class='form-description'>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "description", array()), "html", null, true);
                    echo "</span>
                ";
                }
                // line 117
                echo "            </label>

        ";
            } else {
                // line 120
                echo "
            <input
            ";
                // line 122
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "uiControlAttributes", array()));
                foreach ($context['_seq'] as $context["attr"] => $context["val"]) {
                    // line 123
                    echo "                ";
                    echo twig_escape_filter($this->env, $context["attr"], "html_attr");
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["val"], "html_attr");
                    echo "\"
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attr'], $context['val'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 125
                echo "            class=\"control_";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "uiControlType", array()), "html_attr");
                echo "\"
            type=\"";
                // line 126
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "uiControlType", array()), "html_attr");
                echo "\"
            name=\"";
                // line 127
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "getKey", array()), "html_attr");
                echo "\"
            value=\"";
                // line 128
                echo twig_escape_filter($this->env, (isset($context["settingValue"]) ? $context["settingValue"] : $this->getContext($context, "settingValue")), "html_attr");
                echo "\">

        ";
            }
            // line 131
            echo "
        ";
            // line 132
            if ((($this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "uiControlType", array()) != "checkbox") && ($this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "uiControlType", array()) != "radio"))) {
                // line 133
                echo "            <span class='form-description'>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "description", array()), "html", null, true);
                echo "</span>
        ";
            }
            // line 135
            echo "

";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "settingsMacros.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  439 => 135,  433 => 133,  431 => 132,  428 => 131,  422 => 128,  418 => 127,  414 => 126,  409 => 125,  398 => 123,  394 => 122,  390 => 120,  385 => 117,  379 => 115,  377 => 114,  372 => 112,  367 => 110,  364 => 109,  360 => 107,  358 => 106,  355 => 105,  344 => 103,  340 => 102,  336 => 101,  332 => 99,  330 => 98,  327 => 97,  319 => 94,  313 => 92,  311 => 91,  306 => 89,  301 => 87,  297 => 86,  294 => 85,  290 => 83,  287 => 82,  276 => 80,  272 => 79,  268 => 78,  264 => 76,  260 => 75,  257 => 74,  255 => 73,  252 => 72,  250 => 71,  245 => 69,  234 => 67,  230 => 66,  227 => 65,  225 => 64,  221 => 62,  212 => 59,  209 => 58,  205 => 57,  203 => 56,  200 => 55,  198 => 54,  193 => 53,  189 => 52,  182 => 50,  177 => 49,  166 => 47,  162 => 46,  159 => 45,  157 => 44,  154 => 43,  150 => 41,  147 => 40,  141 => 38,  135 => 36,  133 => 35,  129 => 34,  126 => 33,  124 => 32,  120 => 31,  117 => 30,  115 => 29,  112 => 28,  106 => 26,  104 => 25,  101 => 24,  99 => 23,  96 => 22,  93 => 21,  90 => 20,  88 => 19,  85 => 18,  73 => 17,  57 => 11,  54 => 10,  48 => 8,  46 => 7,  41 => 4,  39 => 3,  36 => 2,  24 => 1,  19 => 16,);
    }
}
