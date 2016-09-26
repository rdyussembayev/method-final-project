<?php

/* /home/ubuntu/workspace/themes/jtherczeg-grill/partials/meta.htm */
class __TwigTemplate_182598e0f16168800c027b0c6dac1ab208d59a18a97f4ac1b7d353be69d1e708 extends Twig_Template
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
        echo "<head>
<meta charset=\"utf-8\">
<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\">
<meta name=\"description\" content=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
<meta name=\"keywords\" content=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_keywords", array()), "html", null, true);
        echo "\">
<meta name=\"author\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_author", array()), "html", null, true);
        echo "\">
<meta name=\"viewport\" content=\"width=device-width\">
<title>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "site_name", array()), "html", null, true);
        echo "</title>
        
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

";
        // line 12
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 13
        echo "<link href=\"";
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/css/bootstrap.css", 1 => "assets/css/font-awesome.css", 2 => "assets/css/templatemo_style.css", 3 => "assets/css/templatemo_misc.css", 4 => "assets/css/flexslider.css", 5 => "assets/css/testimonails-slider"));
        // line 20
        echo "\" rel=\"stylesheet\">
</head>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/jtherczeg-grill/partials/meta.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 20,  49 => 13,  46 => 12,  37 => 8,  32 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* <head>*/
/* <meta charset="utf-8">*/
/* <meta http-equiv="content-type" content="text/html; charset=utf-8">*/
/* <meta name="description" content="{{ this.page.meta_description }}">*/
/* <meta name="keywords" content="{{ this.page.meta_keywords }}">*/
/* <meta name="author" content="{{ this.page.meta_author }}">*/
/* <meta name="viewport" content="width=device-width">*/
/* <title>{{ this.page.title }} - {{ this.theme.site_name }}</title>*/
/*         */
/* <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>*/
/* */
/* {% styles %}*/
/* <link href="{{ [*/
/*             'assets/css/bootstrap.css',*/
/*             'assets/css/font-awesome.css',*/
/*             'assets/css/templatemo_style.css',*/
/*             'assets/css/templatemo_misc.css',*/
/*             'assets/css/flexslider.css',*/
/*             'assets/css/testimonails-slider',*/
/* 		]|theme }}" rel="stylesheet">*/
/* </head>*/
