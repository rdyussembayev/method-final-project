<?php

/* /home/ubuntu/workspace/themes/jtherczeg-grill/partials/about/feedback.htm */
class __TwigTemplate_0164b2e241677f39a9974f250c989480addf3ebe2551aecb5ec3d436bea37963 extends Twig_Template
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
        echo "<div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"heading-section\">
                    <h2>Testimonials and Awards</h2>
                    <img src=\"";
        // line 6
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/under-heading.png");
        echo "\" alt=\"\" >
                </div>
            </div>
        </div>
    </div>
\t";
        // line 11
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("testimonials"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/jtherczeg-grill/partials/about/feedback.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 11,  26 => 6,  19 => 1,);
    }
}
/* <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <div class="heading-section">*/
/*                     <h2>Testimonials and Awards</h2>*/
/*                     <img src="{{ 'assets/images/under-heading.png'|theme }}" alt="" >*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* 	{% partial "testimonials" %}*/
