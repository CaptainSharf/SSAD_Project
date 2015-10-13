<?php

/* @CoreHome/_menu.twig */
class __TwigTemplate_1659014e675a187124f92f4a1120b026df229a2c13ae4adf724543894019b465 extends Twig_Template
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
        // line 10
        echo "
";
        // line 24
        echo "
";
        // line 30
        echo "
";
        // line 36
        echo "
<div class=\"Menu--dashboard\">

    <ul class=\"Menu-tabList\">
        ";
        // line 40
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")));
        foreach ($context['_seq'] as $context["level1"] => $context["level2"]) {
            // line 41
            echo "            <li id=\"";
            if ($this->getAttribute($context["level2"], "_url", array(), "any", true, true)) {
                echo $this->getAttribute($this, "getId", array(0 => $this->getAttribute($context["level2"], "_url", array())), "method");
            }
            echo "\">
                <a class=\"menuItem\" ";
            // line 42
            if ($this->getAttribute($context["level2"], "_url", array(), "any", true, true)) {
                echo "href=\"#";
                echo $this->getAttribute($this, "getFirstUrl", array(0 => $this->getAttribute($context["level2"], "_url", array())), "method");
                echo "\"";
            }
            echo ">
                    ";
            // line 43
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array($context["level1"])), "html", null, true);
            echo "
                   <span class=\"hidden\">
                     ";
            // line 45
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreHome_Menu")), "html", null, true);
            echo "
                   </span>
                </a>
                <ul>
                ";
            // line 49
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["level2"]);
            foreach ($context['_seq'] as $context["name"] => $context["urlParameters"]) {
                // line 50
                echo "                    ";
                if (($this->getAttribute($context["urlParameters"], "_url", array(), "any", true, true) &&  !twig_test_iterable($this->getAttribute($context["urlParameters"], "_url", array())))) {
                    // line 51
                    echo "                        ";
                    echo $this->getAttribute($this, "groupedItem", array(0 => $context["name"], 1 => $this->getAttribute($context["urlParameters"], "_url", array())), "method");
                    echo "
                    ";
                } elseif ((twig_slice($this->env,                 // line 52
$context["name"], 0, 1) != "_")) {
                    // line 53
                    echo "                        ";
                    echo $this->getAttribute($this, "submenuItem", array(0 => $context["name"], 1 => $this->getAttribute($context["urlParameters"], "_url", array())), "method");
                    echo "
                    ";
                }
                // line 55
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['urlParameters'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "
                </ul>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['level1'], $context['level2'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "        <li id=\"Searchmenu\">
            <span piwik-quick-access></span>
        </li>
    </ul>

</div>
<div class=\"nav_sep\"></div>
";
    }

    // line 1
    public function getsubmenuItem($__name__ = null, $__url__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "url" => $__url__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            if ((twig_slice($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), 0, 1) != "_")) {
                // line 3
                echo "        <li>
            <a class=\"menuItem\" href='#";
                // line 4
                echo twig_escape_filter($this->env, twig_slice($this->env, call_user_func_array($this->env->getFilter('urlRewriteWithParameters')->getCallable(), array((isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")))), 1), "html", null, true);
                echo "'>
                ";
                // line 5
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
                echo "
            </a>
        </li>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 11
    public function getgroupedItem($__name__ = null, $__group__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "group" => $__group__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 12
            echo "    <li>
        <div piwik-menudropdown show-search=\"true\" menu-title=\"";
            // line 13
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html_attr");
            echo "\">
            ";
            // line 14
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getItems", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 15
                echo "                <a class=\"item\"
                   href='#";
                // line 16
                echo twig_escape_filter($this->env, twig_slice($this->env, call_user_func_array($this->env->getFilter('urlRewriteWithParameters')->getCallable(), array($this->getAttribute($context["item"], "url", array()))), 1), "html", null, true);
                echo "'
                   ";
                // line 17
                if ($this->getAttribute($context["item"], "tooltip", array())) {
                    echo "title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "tooltip", array()), "html_attr");
                    echo "\"";
                }
                echo ">
                    ";
                // line 18
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array($this->getAttribute($context["item"], "name", array()))), "html", null, true);
                echo "
                </a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "        </div>
    </li>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 25
    public function getgetId($__urlParameters__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "urlParameters" => $__urlParameters__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 26
            if (twig_test_iterable((isset($context["urlParameters"]) ? $context["urlParameters"] : $this->getContext($context, "urlParameters")))) {
                // line 27
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('urlRewriteWithParameters')->getCallable(), array((isset($context["urlParameters"]) ? $context["urlParameters"] : $this->getContext($context, "urlParameters")))), "html", null, true);
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 31
    public function getgetFirstUrl($__urlParameters__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "urlParameters" => $__urlParameters__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 32
            if (twig_test_iterable((isset($context["urlParameters"]) ? $context["urlParameters"] : $this->getContext($context, "urlParameters")))) {
                // line 33
                echo twig_escape_filter($this->env, twig_slice($this->env, call_user_func_array($this->env->getFilter('urlRewriteWithParameters')->getCallable(), array((isset($context["urlParameters"]) ? $context["urlParameters"] : $this->getContext($context, "urlParameters")))), 1), "html", null, true);
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@CoreHome/_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 33,  245 => 32,  234 => 31,  222 => 27,  220 => 26,  209 => 25,  196 => 21,  187 => 18,  179 => 17,  175 => 16,  172 => 15,  168 => 14,  164 => 13,  161 => 12,  149 => 11,  133 => 5,  129 => 4,  126 => 3,  123 => 2,  111 => 1,  100 => 60,  91 => 56,  85 => 55,  79 => 53,  77 => 52,  72 => 51,  69 => 50,  65 => 49,  58 => 45,  53 => 43,  45 => 42,  38 => 41,  34 => 40,  28 => 36,  25 => 30,  22 => 24,  19 => 10,);
    }
}
