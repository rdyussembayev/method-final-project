<?php

/* /home/ubuntu/workspace/themes/jtherczeg-grill/pages/samples/about-us.htm */
class __TwigTemplate_aba4e523535c1c46b7e48c77394ecc335fd8ab862c886c2bfaeb8b4c0bd56a10 extends Twig_Template
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
        echo "<div id=\"heading\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"heading-content\">
                    <h2>About Us</h2>
                    <span>Home / <a href=\"";
        // line 7
        echo $this->env->getExtension('CMS')->pageFilter("samples/about-us");
        echo "\">About us</a></span>
                </div>
            </div>
        </div>
    </div>
</div>

<div id=\"timeline-post\">
    ";
        // line 15
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("about/intro"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 16
        echo "</div>


<div id=\"our-team\">
    ";
        // line 20
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("about/team"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 21
        echo "</div>


<div id=\"testimonails\">
    ";
        // line 25
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("about/feedback"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 26
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/jtherczeg-grill/pages/samples/about-us.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 26,  58 => 25,  52 => 21,  48 => 20,  42 => 16,  38 => 15,  27 => 7,  19 => 1,);
    }
}
/* <div id="heading">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <div class="heading-content">*/
/*                     <h2>About Us</h2>*/
/*                     <span>Home / <a href="{{ 'samples/about-us'|page }}">About us</a></span>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <div id="timeline-post">*/
/*     {% partial "about/intro" %}*/
/* </div>*/
/* */
/* */
/* <div id="our-team">*/
/*     {% partial "about/team" %}*/
/* </div>*/
/* */
/* */
/* <div id="testimonails">*/
/*     {% partial "about/feedback" %}*/
/* </div>*/
