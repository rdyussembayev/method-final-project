<?php

/* /home/ubuntu/workspace/themes/jtherczeg-grill/pages/home.htm */
class __TwigTemplate_547c882f3a3cc82998b2ab0f9fc2bb23e2cc03c0ef5858f003330396014260e8 extends Twig_Template
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
        echo "<div id=\"slider\">
    ";
        // line 2
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("slider"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 3
        echo "</div>
    

    
<div id=\"latest-blog\">
    ";
        // line 8
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("latest-blog"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 9
        echo "</div>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"heading-section\">
                <h2>What Customers Say</h2>
                <img src=\"";
        // line 16
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/under-heading.png");
        echo "\" alt=\"\" >
            </div>
        </div>
    </div>
\t<div id=\"testimonails\">
\t\t";
        // line 21
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("testimonials"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 22
        echo "\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/jtherczeg-grill/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 22,  54 => 21,  46 => 16,  37 => 9,  33 => 8,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div id="slider">*/
/*     {% partial "slider" %}*/
/* </div>*/
/*     */
/* */
/*     */
/* <div id="latest-blog">*/
/*     {% partial "latest-blog" %}*/
/* </div>*/
/* */
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <div class="heading-section">*/
/*                 <h2>What Customers Say</h2>*/
/*                 <img src="{{ 'assets/images/under-heading.png'|theme }}" alt="" >*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* 	<div id="testimonails">*/
/* 		{% partial "testimonials" %}*/
/* 	</div>*/
/* </div>*/
