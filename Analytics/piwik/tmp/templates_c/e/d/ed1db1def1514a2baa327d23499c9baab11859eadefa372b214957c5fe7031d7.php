<?php

/* @Widgetize/iframe.twig */
class __TwigTemplate_ed1db1def1514a2baa327d23499c9baab11859eadefa372b214957c5fe7031d7 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html id=\"ng-app\" ng-app=\"piwikApp\">
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"robots\" content=\"noindex,nofollow\">
        ";
        // line 6
        $this->loadTemplate("_jsGlobalVariables.twig", "@Widgetize/iframe.twig", 6)->display($context);
        // line 7
        echo "        <!--[if lt IE 9]>
        <script language=\"javascript\" type=\"text/javascript\" src=\"libs/jqplot/excanvas.min.js\"></script>
        <![endif]-->
        ";
        // line 10
        $this->loadTemplate("_jsCssIncludes.twig", "@Widgetize/iframe.twig", 10)->display($context);
        // line 11
        echo "        <!--[if IE]>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/Morpheus/stylesheets/ieonly.css\"/>
        <![endif]-->
    </head>
    <!--[if lt IE 9 ]>
    <body ng-app=\"app\" class=\"old-ie\"> <![endif]-->
    <!--[if (gte IE 9)|!(IE)]><!-->
    <body ng-app=\"app\">
    <![endif]-->
        <div class=\"widget\">
            ";
        // line 21
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
        </div>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "@Widgetize/iframe.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 21,  35 => 11,  33 => 10,  28 => 7,  26 => 6,  19 => 1,);
    }
}
