<?php

/* macros.twig */
class __TwigTemplate_532943ec99201e17d56a97f26d24fe6f64d8cbda534b8e9b9992661893b88804 extends Twig_Template
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
        // line 18
        echo "
";
    }

    // line 1
    public function getlogoHtml($__metadata__ = null, $__alt__ = "")
    {
        $context = $this->env->mergeGlobals(array(
            "metadata" => $__metadata__,
            "alt" => $__alt__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            if ($this->getAttribute((isset($context["metadata"]) ? $context["metadata"] : null), "logo", array(), "array", true, true)) {
                // line 3
                echo "        ";
                if ($this->getAttribute((isset($context["metadata"]) ? $context["metadata"] : null), "logoWidth", array(), "array", true, true)) {
                    // line 4
                    echo "            ";
                    ob_start();
                    echo "width=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["metadata"]) ? $context["metadata"] : $this->getContext($context, "metadata")), "logoWidth", array(), "array"), "html", null, true);
                    echo "\"";
                    $context["width"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                    // line 5
                    echo "        ";
                }
                // line 6
                echo "        ";
                if ($this->getAttribute((isset($context["metadata"]) ? $context["metadata"] : null), "logoHeight", array(), "array", true, true)) {
                    // line 7
                    echo "            ";
                    ob_start();
                    echo "height=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["metadata"]) ? $context["metadata"] : $this->getContext($context, "metadata")), "logoHeight", array(), "array"), "html", null, true);
                    echo "\"";
                    $context["height"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                    // line 8
                    echo "        ";
                }
                // line 9
                echo "        ";
                if ($this->getAttribute((isset($context["metadata"]) ? $context["metadata"] : null), "logoWidth", array(), "array", true, true)) {
                    // line 10
                    echo "            ";
                    ob_start();
                    echo "width=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["metadata"]) ? $context["metadata"] : $this->getContext($context, "metadata")), "logoWidth", array(), "array"), "html", null, true);
                    echo "\"";
                    $context["width"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                    // line 11
                    echo "        ";
                }
                // line 12
                echo "        ";
                if ( !twig_test_empty((isset($context["alt"]) ? $context["alt"] : $this->getContext($context, "alt")))) {
                    // line 13
                    echo "            ";
                    ob_start();
                    echo "title='";
                    echo twig_escape_filter($this->env, (isset($context["alt"]) ? $context["alt"] : $this->getContext($context, "alt")), "html", null, true);
                    echo "' alt='";
                    echo twig_escape_filter($this->env, (isset($context["alt"]) ? $context["alt"] : $this->getContext($context, "alt")), "html", null, true);
                    echo "'";
                    $context["alt"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                    // line 14
                    echo "        ";
                }
                // line 15
                echo "        <img ";
                echo twig_escape_filter($this->env, (isset($context["alt"]) ? $context["alt"] : $this->getContext($context, "alt")), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, ((array_key_exists("width", $context)) ? (_twig_default_filter((isset($context["width"]) ? $context["width"] : $this->getContext($context, "width")), "")) : ("")), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, ((array_key_exists("height", $context)) ? (_twig_default_filter((isset($context["height"]) ? $context["height"] : $this->getContext($context, "height")), "")) : ("")), "html", null, true);
                echo " src='";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["metadata"]) ? $context["metadata"] : $this->getContext($context, "metadata")), "logo", array(), "array"), "html", null, true);
                echo "' />
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 19
    public function getinlineHelp($__text__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 20
            echo "    <div class=\"ui-inline-help\" >
        ";
            // line 21
            echo (isset($context["text"]) ? $context["text"] : $this->getContext($context, "text"));
            echo "
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "macros.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 21,  125 => 20,  114 => 19,  93 => 15,  90 => 14,  81 => 13,  78 => 12,  75 => 11,  68 => 10,  65 => 9,  62 => 8,  55 => 7,  52 => 6,  49 => 5,  42 => 4,  39 => 3,  36 => 2,  24 => 1,  19 => 18,);
    }
}
