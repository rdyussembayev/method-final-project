<?php

/* /home/ubuntu/workspace/themes/jtherczeg-grill/partials/top.htm */
class __TwigTemplate_c2e5b57d434cd0afb89ef16f80483317f307869fc13724c0da477a081bbc7836 extends Twig_Template
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
        echo "<div id=\"top-header\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"home-account\">
                    <a href=\"";
        // line 6
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "\">Home</a>
                    <a href=\"#\">My account</a>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"cart-info\">
                    <i class=\"fa fa-shopping-cart\"></i>
                    (<a href=\"#\">5 items</a>) in your cart (<a href=\"#\">\$45.80</a>)
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/jtherczeg-grill/partials/top.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  19 => 1,);
    }
}
/* <div id="top-header">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-6">*/
/*                 <div class="home-account">*/
/*                     <a href="{{ 'home'|page }}">Home</a>*/
/*                     <a href="#">My account</a>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-md-6">*/
/*                 <div class="cart-info">*/
/*                     <i class="fa fa-shopping-cart"></i>*/
/*                     (<a href="#">5 items</a>) in your cart (<a href="#">$45.80</a>)*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
