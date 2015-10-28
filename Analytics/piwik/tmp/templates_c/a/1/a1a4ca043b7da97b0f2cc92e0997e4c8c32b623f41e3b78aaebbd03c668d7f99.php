<?php

/* @Morpheus/layout.twig */
class __TwigTemplate_a1a4ca043b7da97b0f2cc92e0997e4c8c32b623f41e3b78aaebbd03c668d7f99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'pageTitle' => array($this, 'block_pageTitle'),
            'pageDescription' => array($this, 'block_pageDescription'),
            'meta' => array($this, 'block_meta'),
            'body' => array($this, 'block_body'),
            'root' => array($this, 'block_root'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html id=\"ng-app\" ";
        // line 2
        if (array_key_exists("language", $context)) {
            echo "lang=\"";
            echo twig_escape_filter($this->env, (isset($context["language"]) ? $context["language"] : $this->getContext($context, "language")), "html", null, true);
            echo "\"";
        }
        echo " ng-app=\"piwikApp\">
    <head>
        ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 26
        echo "    </head>
    <!--[if lt IE 9 ]>
    <body id=\"";
        // line 28
        echo twig_escape_filter($this->env, ((array_key_exists("bodyId", $context)) ? (_twig_default_filter((isset($context["bodyId"]) ? $context["bodyId"] : $this->getContext($context, "bodyId")), "")) : ("")), "html", null, true);
        echo "\" ng-app=\"app\" class=\"old-ie ";
        echo twig_escape_filter($this->env, ((array_key_exists("bodyClass", $context)) ? (_twig_default_filter((isset($context["bodyClass"]) ? $context["bodyClass"] : $this->getContext($context, "bodyClass")), "")) : ("")), "html", null, true);
        echo "\">
    <![endif]-->
    <!--[if (gte IE 9)|!(IE)]><!-->
    <body id=\"";
        // line 31
        echo twig_escape_filter($this->env, ((array_key_exists("bodyId", $context)) ? (_twig_default_filter((isset($context["bodyId"]) ? $context["bodyId"] : $this->getContext($context, "bodyId")), "")) : ("")), "html", null, true);
        echo "\" ng-app=\"app\" class=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("bodyClass", $context)) ? (_twig_default_filter((isset($context["bodyClass"]) ? $context["bodyClass"] : $this->getContext($context, "bodyClass")), "")) : ("")), "html", null, true);
        echo "\">
    <!--<![endif]-->

    ";
        // line 34
        $this->displayBlock('body', $context, $blocks);
        // line 45
        echo "
    </body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "            <meta charset=\"utf-8\">
            <title>";
        // line 6
        $this->displayBlock('pageTitle', $context, $blocks);
        echo "</title>
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=EDGE,chrome=1\"/>
            <meta name=\"viewport\" content=\"initial-scale=1.0\"/>
            <meta name=\"generator\" content=\"Piwik - free/libre analytics platform\"/>
            <meta name=\"description\" content=\"";
        // line 10
        $this->displayBlock('pageDescription', $context, $blocks);
        echo "\"/>
            <meta name=\"apple-itunes-app\" content=\"app-id=737216887\" />
            <meta name=\"google-play-app\" content=\"app-id=org.piwik.mobile2\">
            ";
        // line 13
        $this->displayBlock('meta', $context, $blocks);
        // line 16
        echo "
            ";
        // line 17
        $this->loadTemplate("@CoreHome/_favicon.twig", "@Morpheus/layout.twig", 17)->display($context);
        // line 18
        echo "            ";
        $this->loadTemplate("_jsGlobalVariables.twig", "@Morpheus/layout.twig", 18)->display($context);
        // line 19
        echo "            ";
        $this->loadTemplate("_piwikTag.twig", "@Morpheus/layout.twig", 19)->display($context);
        // line 20
        echo "            ";
        $this->loadTemplate("_jsCssIncludes.twig", "@Morpheus/layout.twig", 20)->display($context);
        // line 21
        echo "
            <!--[if IE]>
            <link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/Morpheus/stylesheets/ieonly.css\"/>
            <![endif]-->
        ";
    }

    // line 6
    public function block_pageTitle($context, array $blocks = array())
    {
        echo "Piwik";
    }

    // line 10
    public function block_pageDescription($context, array $blocks = array())
    {
    }

    // line 13
    public function block_meta($context, array $blocks = array())
    {
        // line 14
        echo "                <meta name=\"robots\" content=\"noindex,nofollow\">
            ";
    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        // line 35
        echo "
        ";
        // line 36
        $this->loadTemplate("_iframeBuster.twig", "@Morpheus/layout.twig", 36)->display($context);
        // line 37
        echo "        ";
        $this->loadTemplate("@CoreHome/_javaScriptDisabled.twig", "@Morpheus/layout.twig", 37)->display($context);
        // line 38
        echo "
        <div id=\"root\">
            ";
        // line 40
        $this->displayBlock('root', $context, $blocks);
        // line 42
        echo "        </div>

    ";
    }

    // line 40
    public function block_root($context, array $blocks = array())
    {
        // line 41
        echo "            ";
    }

    public function getTemplateName()
    {
        return "@Morpheus/layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 41,  153 => 40,  147 => 42,  145 => 40,  141 => 38,  138 => 37,  136 => 36,  133 => 35,  130 => 34,  125 => 14,  122 => 13,  117 => 10,  111 => 6,  103 => 21,  100 => 20,  97 => 19,  94 => 18,  92 => 17,  89 => 16,  87 => 13,  81 => 10,  74 => 6,  71 => 5,  68 => 4,  61 => 45,  59 => 34,  51 => 31,  43 => 28,  39 => 26,  37 => 4,  28 => 2,  25 => 1,);
    }
}
