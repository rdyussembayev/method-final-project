<?php

/* /home/ubuntu/workspace/themes/jtherczeg-grill/layouts/default.htm */
class __TwigTemplate_b9eab1330bb98f96527e76c938c8c41cb3b0b032ce285b9612dd7892c782c5fd extends Twig_Template
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
<html lang=\"en\">
";
        // line 3
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("meta"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 4
        echo "
<body>
<!--[if lt IE 7]>
    <p class=\"chromeframe\">You are using an outdated browser. <a href=\"http://browsehappy.com/\">Upgrade your browser today</a> or <a href=\"http://www.google.com/chromeframe/?redirect=true\">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->
\t
<header>
    ";
        // line 11
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("top"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 12
        echo "    ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("nav"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 13
        echo "</header>

\t";
        // line 15
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 16
        echo "    
<footer>
    <div class=\"container\">
       ";
        // line 19
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("socials"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        echo "             
       ";
        // line 20
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("bottom"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        echo "             
       ";
        // line 21
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        echo "             
    </div>
</footer>
    
<!-- Scripts -->
<script src=\"";
        // line 26
        echo $this->env->getExtension('CMS')->themeFilter("assets/vendor/modernizr-2.6.1-respond-1.1.0.min.js");
        echo "\"></script>
<script src=\"";
        // line 27
        echo $this->env->getExtension('CMS')->themeFilter("assets/vendor/jquery-1.11.0.min.js");
        echo "\"></script>
<script src=\"";
        // line 28
        echo $this->env->getExtension('CMS')->themeFilter("assets/vendor/jquery.gmap3.min.js");
        echo "\"></script>
<script src=\"";
        // line 29
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/plugins.js");
        echo "\"></script>
<script src=\"";
        // line 30
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/main.js");
        echo "\"></script>
";
        // line 31
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 32
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 33
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/jtherczeg-grill/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 33,  105 => 32,  98 => 31,  94 => 30,  90 => 29,  86 => 28,  82 => 27,  78 => 26,  68 => 21,  62 => 20,  56 => 19,  51 => 16,  49 => 15,  45 => 13,  40 => 12,  36 => 11,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* {% partial "meta" %}*/
/* */
/* <body>*/
/* <!--[if lt IE 7]>*/
/*     <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>*/
/* <![endif]-->*/
/* 	*/
/* <header>*/
/*     {% partial "top" %}*/
/*     {% partial "nav" %}*/
/* </header>*/
/* */
/* 	{% page %}*/
/*     */
/* <footer>*/
/*     <div class="container">*/
/*        {% partial "socials" %}             */
/*        {% partial "bottom" %}             */
/*        {% partial "footer" %}             */
/*     </div>*/
/* </footer>*/
/*     */
/* <!-- Scripts -->*/
/* <script src="{{ 'assets/vendor/modernizr-2.6.1-respond-1.1.0.min.js'|theme }}"></script>*/
/* <script src="{{ 'assets/vendor/jquery-1.11.0.min.js'|theme }}"></script>*/
/* <script src="{{ 'assets/vendor/jquery.gmap3.min.js'|theme }}"></script>*/
/* <script src="{{ 'assets/js/plugins.js'|theme }}"></script>*/
/* <script src="{{ 'assets/js/main.js'|theme }}"></script>*/
/* {% framework extras %}*/
/* {% scripts %}*/
/* */
/* </body>*/
/* </html>*/
