<?php

/* /home/ubuntu/workspace/themes/jtherczeg-grill/layouts/contact-us.htm */
class __TwigTemplate_0ce5f09cf6d7bf67f98fac0daf14c3fb9832883b1ac2b8a623e6d282dbc5b714 extends Twig_Template
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

";
        // line 15
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 16
        echo "
<script src=\"http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&amp;sensor=false\">
</script>
                
<script>
\t\t
\tvar map;
\t\t
        function initialize()
        {
\t\t\tvar map_options = {
\t\t\t  center: new google.maps.LatLng(16.8496189,96.1288854),
\t\t\t  zoom: 15,
\t\t\t  mapTypeId:google.maps.MapTypeId.ROADMAP
\t\t\t  };
\t\t\tvar map = new google.maps.Map(document.getElementById(\"googleMap\"), map_options);
        }

        google.maps.event.addDomListener(window, 'load', initialize);
\t\tgoogle.maps.event.addDomListener(window, \"resize\", function() 
\t\t{
\t\t \tvar center = map.getCenter();
\t\t \tgoogle.maps.event.trigger(map, \"resize\");
\t\t \tmap.setCenter(center); 
\t\t});
</script>

<footer>
    <div class=\"container\">
       ";
        // line 45
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("socials"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        echo "             
       ";
        // line 46
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("bottom"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        echo "             
       ";
        // line 47
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        echo "             
    </div>
</footer>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/jtherczeg-grill/layouts/contact-us.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 47,  88 => 46,  82 => 45,  51 => 16,  49 => 15,  45 => 13,  40 => 12,  36 => 11,  27 => 4,  23 => 3,  19 => 1,);
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
/* */
/* <header>*/
/*     {% partial "top" %}*/
/*     {% partial "nav" %}*/
/* </header>*/
/* */
/* {% page %}*/
/* */
/* <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&amp;sensor=false">*/
/* </script>*/
/*                 */
/* <script>*/
/* 		*/
/* 	var map;*/
/* 		*/
/*         function initialize()*/
/*         {*/
/* 			var map_options = {*/
/* 			  center: new google.maps.LatLng(16.8496189,96.1288854),*/
/* 			  zoom: 15,*/
/* 			  mapTypeId:google.maps.MapTypeId.ROADMAP*/
/* 			  };*/
/* 			var map = new google.maps.Map(document.getElementById("googleMap"), map_options);*/
/*         }*/
/* */
/*         google.maps.event.addDomListener(window, 'load', initialize);*/
/* 		google.maps.event.addDomListener(window, "resize", function() */
/* 		{*/
/* 		 	var center = map.getCenter();*/
/* 		 	google.maps.event.trigger(map, "resize");*/
/* 		 	map.setCenter(center); */
/* 		});*/
/* </script>*/
/* */
/* <footer>*/
/*     <div class="container">*/
/*        {% partial "socials" %}             */
/*        {% partial "bottom" %}             */
/*        {% partial "footer" %}             */
/*     </div>*/
/* </footer>*/
/* */
/* </body>*/
/* </html>*/
